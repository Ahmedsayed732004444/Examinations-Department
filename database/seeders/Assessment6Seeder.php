<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment6Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مقياس الثقة بالنفس في بيئة العمل',
  'category' => 'الذات والشخصية',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى الثقة بالنفس في بيئة العمل من خلال مجموعة من العبارات التي تعكس مشاعرك واتجاهاتك نحو قدراتك المهنية وأدائك الوظيفي.',
  'programs_ar' => 'بناء الثقة بالنفس وتقدير الذات، التغلب على الخوف والقلق، مهارات التواصل الأساسي والتفاعل مع الآخرين، إدارة الضغوط المهنية، التفكير الإيجابي وتنمية الدافعية، التكيف مع التغيير، التوكيدية والتعبير عن الرأي، مهارات العمل الجماعي، الإرشاد المهني، مهارات الاتصال والتواصل الفعال، مهارات العرض والتقديم، اتخاذ القرار وحل المشكلات، إدارة الوقت، الذكاء العاطفي في بيئة العمل، بناء الصورة المهنية، مهارات القيادة الذاتية، التفاوض والإقناع، القيادة الإدارية، إدارة الفرق، التخطيط الاستراتيجي، إدارة التغيير',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'عام',
      'max_score' => 30,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أشعر بالثقة عند أداء المهام الموكلة إليّ في العمل.',
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
          'text_ar' => 'أستطيع اتخاذ القرارات المتعلقة بعملي دون تردد كبير.',
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
          'text_ar' => 'أؤمن بقدرتي على إنجاز الأعمال المطلوبة بكفاءة.',
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
          'text_ar' => 'أستطيع التعبير عن آرائي المهنية أمام الزملاء والمسؤولين.',
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
          'text_ar' => 'أتعامل مع المشكلات المهنية بثقة وهدوء.',
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
          'text_ar' => 'أعتقد أن لدي المهارات اللازمة للنجاح في عملي.',
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
          'text_ar' => 'أتحمل مسؤولية نتائج عملي بثقة.',
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
          'text_ar' => 'أستطيع التكيف مع المهام الجديدة بسرعة.',
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
          'text_ar' => 'لا أشعر بالخوف من ارتكاب الأخطاء أثناء العمل.',
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
          'text_ar' => 'أثق بقدرتي على تحقيق أهدافي المهنية.',
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
          'text_ar' => 'أشارك بفاعلية في المناقشات والاجتماعات المهنية.',
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
          'text_ar' => 'أستطيع إنجاز الأعمال حتى في الظروف الضاغطة.',
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
          'text_ar' => 'أقبل التحديات المهنية الجديدة بثقة.',
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
          'text_ar' => 'أشعر أن زملائي يثقون بقدراتي المهنية.',
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
          'text_ar' => 'أتمتع بدرجة عالية من الثقة بالنفس في مجال عملي.',
          'order_index' => 14,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
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
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 10,
      'description_ar' => 'تشير نتيجتك إلى انخفاض مستواك في الثقة بالنفس، مما قد ينعكس على قدرتك في اتخاذ القرارات، والمشاركة في العمل، ومواجهة التحديات المهنية.

أنت تحتاج إلى دورات تركز على معالجة جوانب ضعف الثقة بالنفس وبناء الأساس النفسي والمهني اللازم للنجاح الوظيفي.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 11,
      'high_threshold' => 20,
      'description_ar' => 'تشير نتيجتك إلى امتلاكك مستوى متوسطًا من الثقة بالنفس، حيث تظهر قدرًا مقبولًا من الاعتماد على الذات والكفاءة المهنية، مع الحاجة إلى مزيد من التطوير في بعض المواقف العملية.

المطلوب منك أن تزيد معدل ثقتك في قدراتك ومهاراتك، وأن تقلل نسبة الخوف والتردد لديك، من خلال حسن التقدير والتفكير الموضوعي والواقعي مع الجرأة والشجاعة المحسوبة.

الهدف التدريبي للمرحلة القادمة هو تعزيز الثقة المهنية، وزيادة المبادرة، وتحسين القدرة على التعبير عن الأفكار والآراء داخل العمل.',
    ),
    2 =>
    array (
      'level' => 'high',
      'low_threshold' => 21,
      'high_threshold' => 30,
      'description_ar' => 'تشير نتيجتك إلى ارتفاع مستوى الثقة بالنفس لديك، وقدرتك على أداء المهام بكفاءة، واتخاذ القرارات المناسبة، والتعامل الإيجابي مع التحديات والضغوط المهنية.

ننصحك بالاستمرار على هذا المستوى، مع التنبيه إلى ضرورة أن تراقب نفسك حتى لا تقع في حفرة الغرور.

كما أن المشاركة في برامج الإرشاد المهني والتدريب على الابتكار والإبداع المؤسسي يمكن أن تسهم في تعزيز الكفاءة المهنية وتحويل الثقة بالنفس إلى أداء قيادي مؤثر. إن تطوير المهارات بشكل مستمر يساعد على توظيف الثقة بالنفس بصورة فعالة، ويزيد من القدرة على مواجهة التحديات المستقبلية وتحقيق التميز والنجاح المهني.',
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