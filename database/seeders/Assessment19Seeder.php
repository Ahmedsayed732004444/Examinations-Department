<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment19Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'حب العمل',
  'category' => 'مقاييس التوجيه والتوافق المهني',
  'description_ar' => 'يهدف هذا المقياس إلى مساعدتك على التعرف على مستوى حبك للعمل ومدى استمتاعك بأداء مهامك المهنية، ودرجة حماسك والتزامك ومسؤوليتك تجاه عملك. كما يساعدك على اكتشاف الجوانب التي تحتاج إلى تطوير لتعزيز رضاك الوظيفي ودافعيتك للإنجاز وتحقيق النجاح المهني.',
  'programs_ar' => 'برامج القيادة المهنية، الإبداع والابتكار المؤسسي، إدارة التغيير، الإشراف والتوجيه المهني، إعداد القيادات المستقبلية، تنمية الدافعية الذاتية، تطوير مهارات الإبداع والابتكار، تعزيز الرضا الوظيفي، تنمية مهارات التخطيط والتطوير المهني، تنمية الاتجاهات الإيجابية نحو العمل، تعزيز الدافعية المهنية، تطوير مهارات الالتزام والانضباط، رفع مستوى الرضا الوظيفي',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'عام',
      'max_score' => 40,
      'order_index' => 0,
      'questions' =>
      array (
        // العبارات من 1 إلى 15: تصحيح عادي (نعم=2، إلى حد ما=1، لا=0)
        0 =>
        array (
          'text_ar' => 'أشعر بالسعادة عندما أؤدي عملي.',
          'order_index' => 0,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أستمتع بالمهام المرتبطة بعملي.',
          'order_index' => 1,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أبذل جهدًا إضافيًا لإنجاز العمل بصورة أفضل.',
          'order_index' => 2,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أشعر بالفخر عندما أنجز عملي بنجاح.',
          'order_index' => 3,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أحرص على تطوير مهاراتي المتعلقة بالعمل.',
          'order_index' => 4,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أفضّل الانشغال بالعمل على قضاء الوقت دون هدف.',
          'order_index' => 5,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 =>
        array (
          'text_ar' => 'أشعر بالحماس عند بدء يوم العمل.',
          'order_index' => 6,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 =>
        array (
          'text_ar' => 'أبحث عن حلول للمشكلات التي تواجهني في العمل.',
          'order_index' => 7,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        8 =>
        array (
          'text_ar' => 'ألتزم بإنجاز المهام حتى دون رقابة مباشرة.',
          'order_index' => 8,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        9 =>
        array (
          'text_ar' => 'أشعر بأن عملي له قيمة ومعنى بالنسبة لي.',
          'order_index' => 9,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        10 =>
        array (
          'text_ar' => 'أشارك بأفكار جديدة لتحسين العمل.',
          'order_index' => 10,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        11 =>
        array (
          'text_ar' => 'أشعر بالرضا بعد الانتهاء من واجباتي المهنية.',
          'order_index' => 11,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        12 =>
        array (
          'text_ar' => 'أستمر في أداء العمل حتى عند مواجهة الصعوبات.',
          'order_index' => 12,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        13 =>
        array (
          'text_ar' => 'أعتبر النجاح في العمل من أهدافي المهمة.',
          'order_index' => 13,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        14 =>
        array (
          'text_ar' => 'أتحدث عن عملي بإيجابية أمام الآخرين.',
          'order_index' => 14,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        // العبارات من 16 إلى 20: تصحيح عكسي (نعم=0، إلى حد ما=1، لا=2)
        15 =>
        array (
          'text_ar' => 'أشعر بالملل بسرعة أثناء أداء عملي.',
          'order_index' => 15,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 0, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 2, 'order_index' => 2),
          ),
        ),
        16 =>
        array (
          'text_ar' => 'أتمنى غالبًا لو لم أكن مضطرًا للقيام بعملي.',
          'order_index' => 16,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 0, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 2, 'order_index' => 2),
          ),
        ),
        17 =>
        array (
          'text_ar' => 'أؤجل المهام الوظيفية دون سبب مقنع.',
          'order_index' => 17,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 0, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 2, 'order_index' => 2),
          ),
        ),
        18 =>
        array (
          'text_ar' => 'أشعر بأن العمل عبء ثقيل عليّ.',
          'order_index' => 18,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 0, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 2, 'order_index' => 2),
          ),
        ),
        19 =>
        array (
          'text_ar' => 'أفتقد الدافعية للقيام بواجبات العمل.',
          'order_index' => 19,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 0, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 2, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
      ),
    ),
  ),
  'questions' =>
  array (
  ),
  'recommendations' =>
  array (
    0 =>
    array (
      'level' => 'high',
      'low_threshold' => 28,
      'high_threshold' => 999,
      'description_ar' => 'تشير نتيجتك إلى وجود اتجاه إيجابي قوي نحو العمل، وارتفاع مستوى الحماس والالتزام والمسؤولية المهنية. فأنت تتسم بالشعور بالفخر والاعتزاز بالعمل، والمبادرة وتحمل المسؤولية، والسعي المستمر للتطوير المهني، وارتفاع الرضا الوظيفي والانتماء للمؤسسة، والقدرة على مواجهة التحديات المهنية بإيجابية.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 14,
      'high_threshold' => 27,
      'description_ar' => 'تشير نتيجتك إلى وجود اتجاه إيجابي معتدل نحو العمل، حيث تؤدي مهامك بصورة مقبولة، إلا أن مستوى الحماس والاندماج المهني لديك يحتاج إلى مزيد من الدعم والتطوير. فأنت تتسم بالتزام مقبول بالمهام، وأداء وظيفي مستقر، ودافعية متوسطة نحو الإنجاز، ورغبة محدودة في المبادرة والتطوير.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 13,
      'description_ar' => 'تشير نتيجتك إلى ضعف ارتباطك بعملك وانخفاض مستوى الحماس والدافعية المهنية لديك، وقد تواجه صعوبة في الالتزام بالمهام أو الشعور بالرضا عن العمل. فأنت تعاني من انخفاض الرغبة في أداء العمل، وضعف المبادرة وتحمل المسؤولية، والميل إلى تأجيل المهام، والشعور بالملل أو عدم الاهتمام بالعمل، وانخفاض الرضا الوظيفي والانتماء المهني.',
    ),
  ),
);

        $assessment = Assessment::create([
            'title_ar' => $assData['title_ar'],
            'category' => $assData['category'],
            'description_ar' => $assData['description_ar'],
            'time_limit_min' => $assData['time_limit_min'],
            'is_active' => $assData['is_active'],
            'programs_ar' => $assData['programs_ar'] ?? null,
            'created_by' => \App\Models\User::first()->id ?? null
        ]);

        if (isset($assData['dimensions'])) {
            foreach ($assData['dimensions'] as $dimData) {
                $dimension = Dimension::create([
                    'assessment_id' => $assessment->id,
                    'name_ar' => $dimData['name_ar'],
                    'max_score' => $dimData['max_score'],
                    'order_index' => $dimData['order_index'],
                ]);

                if (isset($dimData['questions'])) {
                    foreach ($dimData['questions'] as $qData) {
                        $question = Question::create([
                            'assessment_id' => $assessment->id,
                            'dimension_id' => $dimension->id,
                            'text_ar' => $qData['text_ar'],
                            'order_index' => $qData['order_index'],
                        ]);

                        if (isset($qData['options'])) {
                            foreach ($qData['options'] as $optData) {
                                AnswerOption::create([
                                    'question_id' => $question->id,
                                    'label_ar' => $optData['label_ar'],
                                    'score_value' => $optData['score_value'],
                                    'order_index' => $optData['order_index'],
                                ]);
                            }
                        }
                    }
                }

                if (isset($dimData['interpretations'])) {
                    foreach ($dimData['interpretations'] as $interpData) {
                        DimensionInterpretation::create([
                            'dimension_id' => $dimension->id,
                            'level' => $interpData['level'],
                            'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                            'high_threshold' => $interpData['high_threshold'],
                            'low_threshold' => $interpData['low_threshold'],
                        ]);
                    }
                }
            }
        }

        if (isset($assData['questions'])) {
            foreach ($assData['questions'] as $qData) {
                $question = Question::create([
                    'assessment_id' => $assessment->id,
                    'dimension_id' => null,
                    'text_ar' => $qData['text_ar'],
                    'order_index' => $qData['order_index'],
                ]);

                if (isset($qData['options'])) {
                    foreach ($qData['options'] as $optData) {
                        AnswerOption::create([
                            'question_id' => $question->id,
                            'label_ar' => $optData['label_ar'],
                            'score_value' => $optData['score_value'],
                            'order_index' => $optData['order_index'],
                        ]);
                    }
                }
            }
        }

        if (isset($assData['recommendations'])) {
            foreach ($assData['recommendations'] as $recData) {
                Recommendation::create([
                    'assessment_id' => $assessment->id,
                    'level' => $recData['level'],
                    'low_threshold' => $recData['low_threshold'],
                    'high_threshold' => $recData['high_threshold'],
                    'description_ar' => $recData['description_ar'],
                    'programs_ar' => $recData['programs_ar'] ?? null,
                ]);
            }
        }
    }
}