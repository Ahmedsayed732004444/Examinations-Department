<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment8Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مقياس السمات الشخصية',
  'category' => 'الذات والشخصية',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى بعض السمات الشخصية لديك، مثل مهارات التواصل، والثقة بالنفس، والتنظيم الذاتي، والاستقرار الانفعالي، والتعاون مع الآخرين، والانفتاح على الخبرات الجديدة. ولا توجد إجابات صحيحة أو خاطئة، وإنما المطلوب أن تعكس إجاباتك واقعك وسلوكك المعتاد بأكبر قدر من الصدق والموضوعية. ملحوظة: العبارات رقم 3، 8، 13، 18 معكوسة التصحيح (نعم = 0، إلى حد ما = 1، لا = 2).',
  'programs_ar' => 'الوعي بالذات وتقدير الذات، بناء الثقة بالنفس، إدارة الضغوط والانفعالات، المهارات الاجتماعية الأساسية، الانضباط الذاتي وتحمل المسؤولية، مهارات التواصل الفعال، الذكاء العاطفي، إدارة الوقت وتحديد الأولويات، التفكير الإبداعي وحل المشكلات، العمل الجماعي وبناء العلاقات، القيادة الشخصية، القيادة التحويلية، اتخاذ القرار وحل المشكلات المتقدمة، إدارة فرق العمل، الذكاء الاجتماعي والتأثير الإيجابي، التفكير الاستراتيجي، الابتكار وريادة المبادرات، إدارة فرق العمل عالية الأداء، التخطيط الشخصي والاستراتيجي، الذكاء القيادي، إدارة التغيير، إدارة المشروعات، بناء ثقافة التميز، القيادة الاستراتيجية، إعداد القادة، الإرشاد والتوجيه المهني، إدارة الأزمات واتخاذ القرارات الاستراتيجية، الابتكار المؤسسي وصناعة المستقبل، إدارة المواهب وتطوير الكفاءات، التخطيط الاستراتيجي المتقدم',
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
        0 => array ('text_ar' => 'أستمتع بالتعرف على أشخاص جدد والتفاعل معهم.', 'order_index' => 0,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أُكمل المهام التي أبدأها حتى لو كانت صعبة.', 'order_index' => 1,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أشعر بالقلق أو التوتر بسهولة عند مواجهة المشكلات. (عبارة معكوسة)', 'order_index' => 2,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 0, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 2, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أحرص على مساعدة الآخرين عندما يحتاجون إلى الدعم.', 'order_index' => 3,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أحب تجربة أفكار أو أنشطة جديدة وغير مألوفة.', 'order_index' => 4,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'أفضل العمل ضمن فريق على العمل بمفردي.', 'order_index' => 5,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 => array ('text_ar' => 'أنظم وقتي وأضع خططًا واضحة لتحقيق أهدافي.', 'order_index' => 6,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 => array ('text_ar' => 'أتأثر بالنقد بشكل كبير. (عبارة معكوسة)', 'order_index' => 7,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 0, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 2, 'order_index' => 2),
          ),
        ),
        8 => array ('text_ar' => 'أتقبل اختلاف آراء الآخرين باحترام.', 'order_index' => 8,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        9 => array ('text_ar' => 'أستمتع بالتعلم واكتساب معارف جديدة باستمرار.', 'order_index' => 9,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        10 => array ('text_ar' => 'أجد سهولة في بدء المحادثات مع الغرباء.', 'order_index' => 10,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        11 => array ('text_ar' => 'ألتزم بالمواعيد والوعود التي أقطعها على نفسي.', 'order_index' => 11,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        12 => array ('text_ar' => 'أشعر بالإحباط بسرعة عند الفشل. (عبارة معكوسة)', 'order_index' => 12,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 0, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 2, 'order_index' => 2),
          ),
        ),
        13 => array ('text_ar' => 'أتعاطف مع مشاعر الآخرين وأتفهم ظروفهم.', 'order_index' => 13,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        14 => array ('text_ar' => 'أستمتع بالتفكير في حلول مبتكرة للمشكلات.', 'order_index' => 14,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        15 => array ('text_ar' => 'أشارك بفاعلية في الأنشطة الاجتماعية.', 'order_index' => 15,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        16 => array ('text_ar' => 'أتحمل المسؤولية عن أخطائي وأعمل على إصلاحها.', 'order_index' => 16,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        17 => array ('text_ar' => 'أستطيع الحفاظ على هدوئي في المواقف الضاغطة. (عبارة معكوسة)', 'order_index' => 17,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 0, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 2, 'order_index' => 2),
          ),
        ),
        18 => array ('text_ar' => 'أبحث عن التعاون أكثر من المنافسة مع الآخرين.', 'order_index' => 18,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        19 => array ('text_ar' => 'أستمتع باستكشاف وجهات نظر وثقافات مختلفة.', 'order_index' => 19,
          'options' => array (
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
      'level' => 'very_low',
      'low_threshold' => 0,
      'high_threshold' => 10,
      'description_ar' => 'تشير نتيجتك إلى أن شخصيتك بحاجة إلى تطوير العديد من الجوانب، حيث تظهر النتيجة وجود صعوبات في التفاعل الاجتماعي أو التنظيم الذاتي أو التكيف مع الضغوط. وربما تميل إلى تجنب التحديات أو تشعر بصعوبة في إدارة المشاعر والمواقف الجديدة.

نقاط القوة المحتملة لديك: الحذر في اتخاذ القرارات، والميل للتفكير قبل التصرف.

مجالات التطوير: بناء الثقة بالنفس، وتحسين مهارات التواصل، وتعلم استراتيجيات إدارة الضغوط.',
    ),
    1 =>
    array (
      'level' => 'low',
      'low_threshold' => 11,
      'high_threshold' => 20,
      'description_ar' => 'تشير نتيجتك إلى أن شخصيتك متوسطة الاستقرار، وتمتلك بعض السمات الإيجابية، لكنك قد تُظهرها في مواقف معينة دون غيرها. لديك قدرة مقبولة على التكيف والتعامل مع الآخرين، إلا أن بعض الجوانب تحتاج إلى تعزيز.

نقاط القوة لديك: القدرة الجيدة على التعلم والتطور، والمرونة المعتدلة في مواجهة التحديات.

مجالات التطوير المطلوبة: زيادة الانضباط الذاتي، وتحسين الثبات الانفعالي، وتوسيع دائرة العلاقات الاجتماعية.',
    ),
    2 =>
    array (
      'level' => 'medium',
      'low_threshold' => 21,
      'high_threshold' => 30,
      'description_ar' => 'تشير نتيجتك إلى أن شخصيتك متوازنة وإيجابية، وتعكس هذه النتيجة مستوى جيدًا من النضج الشخصي والاجتماعي. وغالبًا ما تتمتع بقدرة مناسبة على تنظيم حياتك والتعامل مع الآخرين وإدارة مشاعرك.

أبرز سماتك: المسؤولية والالتزام، والقدرة على التعاون، وتقبل الاختلاف، والرغبة في التعلم.

ما يمكن تطويره: تنمية الإبداع أكثر، وتحسين مهارات القيادة واتخاذ القرار.',
    ),
    3 =>
    array (
      'level' => 'high',
      'low_threshold' => 31,
      'high_threshold' => 35,
      'description_ar' => 'تشير نتيجتك إلى أن شخصيتك قوية ومتقدمة، وتدل هذه النتيجة على تمتعك بمجموعة واسعة من السمات الإيجابية. أنت غالبًا شخص منظم، متعاون، منفتح على الخبرات الجديدة، وقادر على التكيف مع التحديات.

سماتك البارزة: الثقة بالنفس، والذكاء الاجتماعي، والقدرة على إدارة الضغوط، والانفتاح الفكري.

التحدي الذي يواجهك: توظيف قدراتك في قيادة المبادرات والمشروعات، ومساعدة الآخرين على التطور والاستفادة من خبراتك.',
    ),
    4 =>
    array (
      'level' => 'very_high',
      'low_threshold' => 36,
      'high_threshold' => 40,
      'description_ar' => 'تشير نتيجتك إلى أن شخصيتك متميزة جدًا، حيث تعكس هذه النتيجة مستوى مرتفعًا من النضج النفسي والاجتماعي والانفعالي. وغالبًا ما تجمع بين المسؤولية، والتعاطف، والانفتاح، والقدرة على التكيف، والاستقرار النفسي.

خصائص متوقعة: قيادة طبيعية، ومرونة عالية في مواجهة الأزمات، وقدرة ممتازة على بناء العلاقات، ودافعية قوية للتعلم والتطوير.

ملاحظة مهمة: الحصول على درجة مرتفعة جدًا لا يعني الكمال، بل يدل على امتلاكك مجموعة قوية من السمات الإيجابية مع بقاء فرص مستمرة للنمو والتعلم.',
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