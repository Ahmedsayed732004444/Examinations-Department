<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment5Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'هل تفكر بإيجابية؟',
  'category' => 'الذات والشخصية',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على طبيعة أسلوب التفكير لدى الفرد ومدى ميله إلى النظر للمواقف والأحداث من منظور إيجابي في الحياة اليومية. ويتناول مجموعة من المواقف والاتجاهات المرتبطة بالتفاؤل، والثقة بالقدرات الشخصية، والتعامل مع التحديات، والتركيز على الحلول والفرص المتاحة.',
  'programs_ar' => 'القيادة الإيجابية، المرونة النفسية المتقدمة، الذكاء العاطفي المتقدم، تنمية التفكير الإيجابي، بناء الثقة بالنفس، إدارة الضغوط النفسية، المرونة النفسية والتكيف، الامتنان وجودة الحياة، تعديل الأفكار السلبية، تقدير الذات والوعي بالقدرات الشخصية، إدارة القلق والتفكير المفرط، الذكاء الانفعالي',
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
        0 =>
        array (
          'text_ar' => 'أنظر إلى المواقف الصعبة باعتبارها فرصًا للتعلم والنمو.',
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
          'text_ar' => 'أتوقع نتائج جيدة في معظم الأمور التي أقوم بها.',
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
          'text_ar' => 'أركز على الحلول أكثر من تركيزي على المشكلات.',
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
          'text_ar' => 'أستطيع رؤية الجوانب الإيجابية حتى في الظروف غير المريحة.',
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
          'text_ar' => 'أثق بقدرتي على تجاوز العقبات والتحديات.',
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
          'text_ar' => 'أشعر بالتفاؤل تجاه مستقبلي.',
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
          'text_ar' => 'أتعلم من أخطائي بدلًا من لوم نفسي باستمرار.',
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
          'text_ar' => 'أعتقد أن الجهد المستمر يؤدي إلى النجاح.',
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
          'text_ar' => 'أتحدث مع نفسي بطريقة مشجعة وإيجابية.',
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
          'text_ar' => 'أبحث عن الدروس المفيدة في التجارب السلبية.',
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
          'text_ar' => 'أستمتع بإنجازاتي مهما كانت بسيطة.',
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
          'text_ar' => 'أرى أن الفشل خطوة نحو النجاح وليس نهاية الطريق.',
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
          'text_ar' => 'أمتلك القدرة على التحكم في مشاعري السلبية غالبًا.',
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
          'text_ar' => 'أتوقع الخير عند التعامل مع الآخرين.',
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
          'text_ar' => 'أشعر بالامتنان لما أملكه في حياتي.',
          'order_index' => 14,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        15 =>
        array (
          'text_ar' => 'أواجه الضغوط بهدوء نسبي.',
          'order_index' => 15,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        16 =>
        array (
          'text_ar' => 'أؤمن بأن لكل مشكلة أكثر من حل.',
          'order_index' => 16,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        17 =>
        array (
          'text_ar' => 'أحافظ على الأمل حتى في الأوقات الصعبة.',
          'order_index' => 17,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        18 =>
        array (
          'text_ar' => 'أركز على ما أستطيع تغييره بدلًا من الانشغال بما لا أستطيع تغييره.',
          'order_index' => 18,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        19 =>
        array (
          'text_ar' => 'أشجع الآخرين وأبث فيهم روح التفاؤل.',
          'order_index' => 19,
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
      'level' => 'high',
      'low_threshold' => 28,
      'high_threshold' => 999,
      'description_ar' => 'تشير نتيجتك إلى أنك تتمتع بمستوى مرتفع من التفكير الإيجابي، وتميل إلى رؤية الفرص في التحديات، والتعامل مع المواقف الصعبة بمرونة وتفاؤل. كما أنك غالبًا ما تثق بقدراتك وتستطيع الحفاظ على الأمل والدافعية حتى عند مواجهة العقبات.

خصائص هذا المستوى:
- نظرة متفائلة ومتوازنة للحياة
- قدرة جيدة على التكيف مع الضغوط
- ثقة بالنفس وبالقدرة على النجاح
- استخدام الفشل كخبرة للتعلم والتطور
- تأثير إيجابي في المحيطين بك

دلالة النتيجة: امتلاك مستوى مرتفع من التفكير الإيجابي لا يعني تجاهل المشكلات أو إنكار الصعوبات، بل يعني التعامل معها بواقعية مع الاحتفاظ بالأمل والثقة بالقدرة على إيجاد الحلول المناسبة. هذا النوع من التفكير يرتبط غالبًا بارتفاع الرضا عن الحياة وتحسن الصحة النفسية والقدرة على الإنجاز.',
    ),
    1 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 13,
      'description_ar' => 'تشير نتيجتك إلى أن التفكير الإيجابي ليس نمطًا ثابتًا لديك في الوقت الحالي، وقد تميل إلى التركيز على المشكلات أو النتائج السلبية أكثر من الفرص والحلول. قد تجد صعوبة في رؤية الجوانب المشرقة في المواقف الضاغطة، أو قد تؤثر الإخفاقات السابقة على توقعاتك للمستقبل.

خصائص هذا المستوى:
- كثرة التركيز على الأخطاء والعقبات
- انخفاض التفاؤل تجاه المستقبل
- الميل إلى النقد الذاتي المفرط
- الشعور بالإحباط عند مواجهة المشكلات
- صعوبة الاستفادة من الخبرات السلبية

ما الذي يمكن عمله؟
- تدريب النفس على إعادة تفسير الأحداث بطريقة أكثر توازنًا
- كتابة ثلاثة أمور إيجابية يوميًا
- التركيز على النجاحات الصغيرة والاحتفاء بها
- ممارسة الامتنان بشكل منتظم
- تجنب المقارنات السلبية بالآخرين',
    ),
    2 =>
    array (
      'level' => 'medium',
      'low_threshold' => 14,
      'high_threshold' => 27,
      'description_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرًا معقولًا من التفكير الإيجابي، لكن هذا النمط يتأثر أحيانًا بالضغوط أو الظروف المحيطة. في بعض المواقف تكون متفائلًا وقادرًا على مواجهة التحديات، بينما في مواقف أخرى قد يسيطر عليك القلق أو التشاؤم.

خصائص هذا المستوى:
- وجود توازن بين الأفكار الإيجابية والسلبية
- القدرة على مواجهة بعض الصعوبات بفعالية
- التفاؤل في مواقف معينة دون غيرها
- الحاجة إلى تعزيز الثقة بالنفس والاستمرارية
- القدرة على التعلم من الخبرات مع بعض التردد أحيانًا

ما الذي يمكن عمله؟
- زيادة التركيز على الحلول بدلًا من المشكلات
- تنمية مهارات إدارة الضغوط والانفعالات
- ممارسة الحديث الذاتي الإيجابي
- وضع أهداف واقعية وتحقيقها تدريجيًا
- الإحاطة بأشخاص إيجابيين داعمين',
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