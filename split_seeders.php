<?php
// Script to split FinalComprehensiveSeeder.php into individual seeders.

// 1. Read the file
$content = file_get_contents('d:\New project\Examinations-Department\database\seeders\FinalComprehensiveSeeder.php');

// 2. Extract the $data array using reflection or token parsing?
// Actually, I can just grab everything from "$data = array (" to ");\n\n        foreach ($data"
$startPos = strpos($content, '$data = array (');
$endPos = strpos($content, ');', strrpos($content, '    ),', $startPos)) + 2;

// The array goes until the last ');' before the foreach.
// Let's use a simpler approach: 
$arrayCode = substr($content, $startPos, strpos($content, "        foreach (\$data as \$assData) {") - $startPos);

// Clean it up to be executable
$evalCode = $arrayCode . "\n return \$data;";
$data = eval($evalCode);

if (!is_array($data)) {
    die("Failed to parse data");
}

echo "Found " . count($data) . " assessments.\n";

$seederClasses = [];

foreach ($data as $index => $assData) {
    // Generate a class name based on the title
    // "اعرف نمطك القيادي" -> Assessment1Seeder (or transliterate)
    // To be safe and clean, we'll use Assessment{Index}Seeder, e.g. Assessment1Seeder
    $idx = $index + 1;
    $className = "Assessment{$idx}Seeder";
    $seederClasses[] = $className;
    
    $exportedData = var_export($assData, true);
    
    $seederContent = <<<PHP
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class {$className} extends Seeder
{
    public function run()
    {
        \$assData = {$exportedData};
        
        \$assessment = Assessment::create([
            'title_ar' => \$assData['title_ar'],
            'category' => \$assData['category'],
            'description_ar' => \$assData['description_ar'],
            'time_limit_min' => \$assData['time_limit_min'],
            'is_active' => \$assData['is_active'],
            'created_by' => \App\Models\User::first()->id ?? null
        ]);

        if (isset(\$assData['dimensions'])) {
            foreach (\$assData['dimensions'] as \$dimData) {
                \$dimension = Dimension::create([
                    'assessment_id' => \$assessment->id,
                    'name_ar' => \$dimData['name_ar'],
                    'max_score' => \$dimData['max_score'],
                    'order_index' => \$dimData['order_index'],
                ]);

                if (isset(\$dimData['questions'])) {
                    foreach (\$dimData['questions'] as \$qData) {
                        \$question = Question::create([
                            'assessment_id' => \$assessment->id,
                            'dimension_id' => \$dimension->id,
                            'text_ar' => \$qData['text_ar'],
                            'order_index' => \$qData['order_index'],
                        ]);

                        if (isset(\$qData['options'])) {
                            foreach (\$qData['options'] as \$optData) {
                                AnswerOption::create([
                                    'question_id' => \$question->id,
                                    'label_ar' => \$optData['label_ar'],
                                    'score_value' => \$optData['score_value'],
                                    'order_index' => \$optData['order_index'],
                                ]);
                            }
                        }
                    }
                }

                if (isset(\$dimData['interpretations'])) {
                    foreach (\$dimData['interpretations'] as \$interpData) {
                        DimensionInterpretation::create([
                            'dimension_id' => \$dimension->id,
                            'level' => \$interpData['level'],
                            'interpretation_text_ar' => \$interpData['interpretation_text_ar'],
                            'high_threshold' => \$interpData['high_threshold'],
                            'low_threshold' => \$interpData['low_threshold'],
                        ]);
                    }
                }
            }
        }

        if (isset(\$assData['questions'])) {
            foreach (\$assData['questions'] as \$qData) {
                \$question = Question::create([
                    'assessment_id' => \$assessment->id,
                    'dimension_id' => null,
                    'text_ar' => \$qData['text_ar'],
                    'order_index' => \$qData['order_index'],
                ]);

                if (isset(\$qData['options'])) {
                    foreach (\$qData['options'] as \$optData) {
                        AnswerOption::create([
                            'question_id' => \$question->id,
                            'label_ar' => \$optData['label_ar'],
                            'score_value' => \$optData['score_value'],
                            'order_index' => \$optData['order_index'],
                        ]);
                    }
                }
            }
        }

        if (isset(\$assData['recommendations'])) {
            foreach (\$assData['recommendations'] as \$recData) {
                Recommendation::create([
                    'assessment_id' => \$assessment->id,
                    'level' => \$recData['level'],
                    'low_threshold' => \$recData['low_threshold'],
                    'high_threshold' => \$recData['high_threshold'],
                    'description_ar' => \$recData['description_ar'],
                    'programs_ar' => \$recData['programs_ar'] ?? null,
                ]);
            }
        }
    }
}
PHP;
    
    $filePath = 'd:\New project\Examinations-Department\database\seeders\\' . $className . '.php';
    file_put_contents($filePath, $seederContent);
    echo "Created: {$className}.php\n";
}

// Generate the Main DatabaseSeeder or a wrapper
$mainSeederContent = <<<PHP
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class AssessmentsDatabaseSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data (optional, but good if we want a fresh start)
        DB::statement('PRAGMA foreign_keys=OFF;');
        Recommendation::truncate();
        DimensionInterpretation::truncate();
        AnswerOption::truncate();
        Question::truncate();
        Dimension::truncate();
        Assessment::truncate();
        DB::statement('PRAGMA foreign_keys=ON;');

PHP;

foreach ($seederClasses as $cls) {
    $mainSeederContent .= "        \$this->call({$cls}::class);\n";
}

$mainSeederContent .= <<<PHP
    }
}
PHP;

file_put_contents('d:\New project\Examinations-Department\database\seeders\AssessmentsDatabaseSeeder.php', $mainSeederContent);
echo "Created: AssessmentsDatabaseSeeder.php\n";
