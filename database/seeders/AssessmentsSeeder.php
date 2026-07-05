<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\Recommendation;
use App\Models\DimensionInterpretation;
use Illuminate\Support\Str;
use App\Models\User;

class AssessmentsSeeder extends Seeder
{
    private function extractOptions($lines) {
        $options = [];
        $parsingOptions = false;
        foreach($lines as $line) {
            $trimLine = trim($line);
            if (str_starts_with($trimLine, '## عبارات')) {
                break;
            }
            if (preg_match('/\|\s*(الإجابة|الاستجابة|الخيارات|الخيار|نطاق العبارات)\s*\|\s*(الدرجة|النقاط|نعم|دائماً)\s*\|/ui', $trimLine) || preg_match('/\|.*نعم.*إلى حد ما.*لا.*/ui', $trimLine)) {
                $parsingOptions = true;
                continue;
            }
            if ($parsingOptions && preg_match('/\|[\s\-]+\|[\s\-]+\|/', $trimLine)) {
                continue;
            }
            if ($parsingOptions && preg_match('/\|\s*(.+?)\s*\|\s*(\d+)\s*\|/', $trimLine, $optMatch)) {
                $label = trim($optMatch[1]);
                $score = (int)trim($optMatch[2]);
                $options[] = ['label' => $label, 'score' => $score];
            } elseif ($parsingOptions && !empty($trimLine) && !str_starts_with($trimLine, '|')) {
                $parsingOptions = false;
            }
        }
        return $options;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("Starting Markdown Parser (Line by Line)...");

        $filePath = database_path('seeders/data/combined_fixed_clean_final.md');
        if (!file_exists($filePath)) {
            $this->command->error("File not found: $filePath");
            return;
        }

        $content = file_get_contents($filePath);
        $files = explode('## File: ', $content);
        array_shift($files); // Remove header part

        $this->command->info("Deleting old assessment data...");
        DB::table('dimension_scores')->delete();
        DB::table('results')->delete();
        DB::table('user_answers')->delete();
        DB::table('exam_sessions')->delete();
        DimensionInterpretation::query()->delete();
        Recommendation::query()->delete();
        AnswerOption::query()->delete();
        Question::query()->delete();
        Dimension::query()->delete();
        Assessment::query()->delete();
        $this->command->info("Cleared old data.");

        $user = User::first();
        $userId = $user ? $user->id : null;

        foreach ($files as $fileData) {
            $lines = explode("\n", $fileData);
            $pathLine = trim(array_shift($lines));
            $pathParts = explode('/', $pathLine);
            $category = trim($pathParts[0]);
            
            if ($category === 'path' || empty($category)) {
                continue;
            }
            
            $title = 'Unknown Scale';
            $intro = '';
            $options = $this->extractOptions($lines);
            $questionsText = '';
            $overallText = '';
            $dimInterpText = '';
            
            $currentSection = '';
            
            // Line by line state machine
            foreach ($lines as $line) {
                $trimLine = trim($line);
                if (str_starts_with($trimLine, '# ')) {
                    $title = trim(substr($trimLine, 2));
                    continue;
                }
                
                if (preg_match('/^##\s+(.+)$/', $trimLine, $secMatch)) {
                    $sectionTitle = trim($secMatch[1]);

                    if (preg_match('/هدف|الهدف/ui', $sectionTitle)) {
                        $currentSection = 'intro';
                    } elseif (preg_match('/الإجابة/ui', $sectionTitle)) {
                        $currentSection = 'options';
                    } elseif (preg_match('/عبارات المقياس/ui', $sectionTitle)) {
                        $currentSection = 'questions';
                    } elseif (preg_match('/تفسير.*(أبعاد|ابعاد|محاور|نمط|أنماط)/ui', $sectionTitle)) {
                        $currentSection = 'dimInterp';
                    } elseif (preg_match('/تفسير.*(النتيجة|النتائج|إجمالي|كلي|عام)/ui', $sectionTitle)) {
                        $currentSection = 'overall';
                    } else {
                        $currentSection = 'other';
                    }
                    continue;
                }
                
                if ($currentSection === 'intro') {
                    $intro .= $line . "\n";
                } elseif ($currentSection === 'questions') {
                    $questionsText .= $line . "\n";
                } elseif ($currentSection === 'overall') {
                    $overallText .= $line . "\n";
                } elseif ($currentSection === 'dimInterp') {
                    $dimInterpText .= $line . "\n";
                }
            }
            
            $this->command->info("Processing: $title [$category]");
            
            if (empty($options)) {
                $options = [
                    ['label' => 'نعم', 'score' => 2],
                    ['label' => 'إلى حد ما', 'score' => 1],
                    ['label' => 'لا', 'score' => 0]
                ];
            }
            
            $scoring_type = 'overall_score';
            if (empty(trim($overallText)) && !empty(trim($dimInterpText))) {
                if (str_contains($title, 'نمط') || str_contains($title, 'أنماط')) {
                    $scoring_type = 'highest_dimension';
                } else {
                    $scoring_type = 'dimension_only';
                }
            }
            
            $assessment = Assessment::create([
                'category' => $category,
                'title_ar' => $title,
                'description_ar' => trim($intro),
                'scoring_type' => $scoring_type,
                'time_limit_min' => 15,
                'is_active' => true,
                'created_by' => $userId,
            ]);
            
            $currentDimension = null;
            $orderIndex = 0;
            $dimOrderIndex = 0;
            
            $qLines = explode("\n", $questionsText);
            foreach ($qLines as $line) {
                $line = trim($line);
                if (empty($line)) continue;
                
                if (preg_match('/^###\s+(.+)$/', $line, $dimMatch)) {
                    $dimName = preg_replace('/^(أولًا|ثانيًا|ثالثًا|رابعًا|خامسًا|سادسًا|سابعًا|ثامنًا|تاسعًا|عاشرًا|أولاً|ثانياً|ثالثاً):?\s*/ui', '', trim($dimMatch[1]));
                    $currentDimension = Dimension::create([
                        'assessment_id' => $assessment->id,
                        'name_ar' => trim($dimName),
                        'max_score' => 0,
                        'order_index' => $dimOrderIndex++
                    ]);
                }
                elseif (preg_match('/^\d+\.\s+(.+)$/', $line, $qMatch)) {
                    $qText = trim($qMatch[1]);
                    $isReversed = false;
                    if (Str::contains($qText, '(معكوس)') || Str::contains($qText, '(عكسي)')) {
                        $isReversed = true;
                        $qText = str_replace(['(معكوس)', '(عكسي)'], '', $qText);
                    }
                    
                    if (!$currentDimension) {
                        $currentDimension = Dimension::create([
                            'assessment_id' => $assessment->id,
                            'name_ar' => 'عام',
                            'max_score' => 0,
                            'order_index' => $dimOrderIndex++
                        ]);
                    }
                    
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $currentDimension->id,
                        'text_ar' => trim($qText),
                        'is_reversed' => $isReversed,
                        'order_index' => $orderIndex++
                    ]);
                    
                    $maxOptScore = 0;
                    foreach ($options as $opt) {
                        AnswerOption::create([
                            'question_id' => $question->id,
                            'label_ar' => $opt['label'],
                            'score_value' => $opt['score']
                        ]);
                        $maxOptScore = max($maxOptScore, $opt['score']);
                    }
                    
                    $currentDimension->increment('max_score', $maxOptScore);
                }
            }
            
            // Overall
            if (!empty(trim($overallText))) {
                $lines = explode("\n", trim($overallText));
                $levels = [];
                $currentLevel = null;
                
                foreach ($lines as $line) {
                    $trimLine = trim($line);
                    if (empty($trimLine)) continue;
                    if (str_contains($trimLine, 'مجموع درجات')) continue;
                    
                    if (preg_match('/^(?:-?\s*\*\*)?(?:مستوى|المستوى)?\s*(مرتفع|متوسط|منخفض|عالي|عالٍ|ضعيف|جيد جدا|ممتاز)/ui', $trimLine, $m) || preg_match('/^###\s+(.+)$/', $trimLine, $m)) {
                        $rawHeader = $trimLine;
                        if (preg_match('/(مرتفع|عالي|عالٍ|ناجح|فأكثر|فأعلى|أعلى|ممتاز|جيد جدا)/ui', $rawHeader)) {
                            $currentLevel = 'high';
                        } elseif (preg_match('/(متوسط|إلى حد ما)/ui', $rawHeader)) {
                            $currentLevel = 'medium';
                        } elseif (preg_match('/(منخفض|ضعيف|ضعف|فأقل|أقل|سيء)/ui', $rawHeader)) {
                            $currentLevel = 'low';
                        } else {
                            if (!isset($levels['high'])) $currentLevel = 'high';
                            elseif (!isset($levels['medium'])) $currentLevel = 'medium';
                            else $currentLevel = 'low';
                        }
                        
                        $levels[$currentLevel] = [
                            'header' => $rawHeader,
                            'content' => []
                        ];
                    } else {
                        if ($currentLevel) {
                            $levels[$currentLevel]['content'][] = $trimLine;
                        }
                    }
                }
                
                foreach ($levels as $levelKey => $data) {
                    $header = $data['header'];
                    $contentLines = $data['content'];
                    
                    preg_match_all('/\d+/', $header, $matches);
                    $numbers = $matches[0];
                    
                    $low_threshold = null;
                    $high_threshold = null;
                    
                    if (count($numbers) >= 2) {
                        $low_threshold = min((int)$numbers[0], (int)$numbers[1]);
                        $high_threshold = max((int)$numbers[0], (int)$numbers[1]);
                    } elseif (count($numbers) == 1) {
                        $val = (int)$numbers[0];
                        if ($levelKey === 'high') {
                            $low_threshold = $val;
                            $high_threshold = 999;
                        } elseif ($levelKey === 'low') {
                            $low_threshold = 0;
                            $high_threshold = $val;
                        }
                    }
                    
                    $descLines = [];
                    $progLines = [];
                    $inPrograms = false;
                    
                    foreach ($contentLines as $cLine) {
                        $trimmed = trim($cLine);
                        if (strpos($trimmed, '**التوصيات:**') !== false || strpos($trimmed, 'تحتاج إلى برامج') !== false || strpos($trimmed, 'ننصحك ب') !== false || strpos($trimmed, 'التوصيات المقترحة') !== false || strpos($trimmed, 'البرامج المقترحة') !== false) {
                            $inPrograms = true;
                            if (strpos($trimmed, '**التوصيات:**') !== false && strlen($trimmed) < 20) {
                                continue; 
                            }
                        }
                        
                        if (preg_match('/^(?:-|\d+\.)\s+(.+)/', $trimmed, $listMatch)) {
                            $progLines[] = $listMatch[1];
                            $inPrograms = true;
                        } else {
                            if ($inPrograms && !empty($progLines)) {
                                $progLines[] = $trimmed;
                            } else {
                                $descLines[] = $trimmed;
                            }
                        }
                    }
                    
                    array_unshift($descLines, $header);
                    
                    Recommendation::updateOrCreate(
                        [
                            'assessment_id' => $assessment->id,
                            'level' => $levelKey,
                        ],
                        [
                            'description_ar' => implode("\n", $descLines),
                            'programs_ar' => count($progLines) > 0 ? implode("\n", $progLines) : 'لا يوجد برامج مسجلة.',
                            'high_threshold' => $high_threshold,
                            'low_threshold' => $low_threshold
                        ]
                    );
                }
            }
            
            // Dim Interpretations
            if (!empty(trim($dimInterpText))) {
                $dimBlocks = preg_split('/###\s+/u', $dimInterpText, -1, PREG_SPLIT_NO_EMPTY);
                
                foreach ($dimBlocks as $block) {
                    $lines = explode("\n", trim($block));
                    $dimNameRaw = array_shift($lines);
                    if (str_contains($dimNameRaw, 'تفسير')) continue;
                    $dimName = preg_replace('/^(محور|القيادة|البعد.*?:)\s+/u', '', trim($dimNameRaw));
                    
                    $searchWord = explode(' ', trim($dimName))[0];
                    $dbDim = Dimension::where('assessment_id', $assessment->id)
                        ->where('name_ar', 'LIKE', '%' . $searchWord . '%')
                        ->first();
                        
                    if ($dbDim) {
                        $levels = [];
                        $currentLevel = null;
                        
                        foreach ($lines as $line) {
                            $trimLine = trim($line);
                            if (empty($trimLine)) continue;
                            if (str_contains($trimLine, 'مجموع درجات')) continue;
                            
                            if (preg_match('/^(?:-?\s*\*\*)?(?:مستوى|المستوى)?\s*(مرتفع|متوسط|منخفض|عالي|عالٍ|ضعيف|جيد جدا|ممتاز)/ui', $trimLine, $m) || preg_match('/^###\s+(.+)$/', $trimLine, $m)) {
                                $rawHeader = $trimLine;
                                if (preg_match('/(مرتفع|عالي|عالٍ|ناجح|فأكثر|فأعلى|أعلى|ممتاز|جيد جدا)/ui', $rawHeader)) {
                                    $currentLevel = 'high';
                                } elseif (preg_match('/(متوسط|إلى حد ما)/ui', $rawHeader)) {
                                    $currentLevel = 'medium';
                                } elseif (preg_match('/(منخفض|ضعيف|ضعف|فأقل|أقل|سيء)/ui', $rawHeader)) {
                                    $currentLevel = 'low';
                                } else {
                                    if (!isset($levels['high'])) $currentLevel = 'high';
                                    elseif (!isset($levels['medium'])) $currentLevel = 'medium';
                                    else $currentLevel = 'low';
                                }
                                
                                $levels[$currentLevel] = [
                                    'header' => $rawHeader,
                                    'content' => []
                                ];
                            } else {
                                if ($currentLevel) {
                                    $levels[$currentLevel]['content'][] = $trimLine;
                                } else {
                                    if (!isset($levels[$dimName])) {
                                        $levels[$dimName] = [
                                            'header' => $dimNameRaw, 
                                            'content' => []
                                        ];
                                    }
                                    $levels[$dimName]['content'][] = $trimLine;
                                }
                            }
                        }
                        
                        foreach ($levels as $levelKey => $data) {
                            $header = $data['header'];
                            $contentLines = $data['content'];
                            
                            preg_match_all('/\d+/', $header, $matches);
                            $numbers = $matches[0];
                            
                            $low_threshold = null;
                            $high_threshold = null;
                            
                            if (count($numbers) >= 2) {
                                $low_threshold = min((int)$numbers[0], (int)$numbers[1]);
                                $high_threshold = max((int)$numbers[0], (int)$numbers[1]);
                            } elseif (count($numbers) == 1) {
                                $val = (int)$numbers[0];
                                if ($levelKey === 'high') {
                                    $low_threshold = $val;
                                    $high_threshold = 999;
                                } elseif ($levelKey === 'low') {
                                    $low_threshold = 0;
                                    $high_threshold = $val;
                                }
                            }
                            
                            $text = implode("\n", $contentLines);
                            if ($levelKey === 'high' || $levelKey === 'medium' || $levelKey === 'low') {
                                $text = $header . "\n" . $text;
                            }
                            
                            DimensionInterpretation::updateOrCreate(
                                [
                                    'dimension_id' => $dbDim->id,
                                    'level' => $levelKey,
                                ],
                                [
                                    'interpretation_text_ar' => trim($text),
                                    'high_threshold' => $high_threshold,
                                    'low_threshold' => $low_threshold
                                ]
                            );
                        }
                    }
                }
            }
        }
        
        $this->command->info("Done seeding assessments from markdown.");
    }
}
