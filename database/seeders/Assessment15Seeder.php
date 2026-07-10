<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment15Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'القدرة على التفاوض والحوار وإقناع الآخرين',
  'category' => 'مقاييس الاتصال والعلاقات المهنية',
  'description_ar' => 'يهدف هذا المقياس إلى مساعدتك على التعرف إلى مستوى قدرتك على التفاوض والحوار وإقناع الآخرين في المواقف اليومية والعملية. ولا توجد إجابات صحيحة أو خاطئة، فالمطلوب هو الإجابة بصدق وفقًا لما يعبر عن سلوكك الفعلي. ستساعدك نتائج المقياس على تحديد نقاط القوة لديك والجوانب التي يمكن تطويرها، كما ستقدم لك مؤشرات وبرامج تدريبية مناسبة تسهم في تحسين مهارات التواصل والتأثير الإيجابي والتعامل الفعال مع الآخرين.',
  'programs_ar' => 'التفاوض الاستراتيجي المتقدم، القيادة والتأثير المؤسسي، الوساطة وتسوية النزاعات، الذكاء العاطفي المتقدم، التواصل والإقناع في البيئات متعددة الثقافات، أساسيات مهارات التواصل الفعال، مهارات الاستماع الفعال، الثقة بالنفس وفن التعبير عن الرأي، إدارة الانفعالات أثناء الحوار، المحافظة على الاتزان الانفعالي، مبادئ الحوار البنّاء وآدابه، مقدمة في مهارات الإقناع، مهارات التفاوض الاحترافي، فن الإقناع والتأثير، إدارة الخلافات وحل النزاعات، الذكاء العاطفي في الحوار والتفاوض، التواصل المتقدم والعرض المؤثر، التفاوض في بيئات العمل، استراتيجيات الإقناع واتخاذ القرار',
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
          'text_ar' => 'أستطيع عرض وجهة نظري بوضوح أثناء النقاش.',
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
          'text_ar' => 'أستمع باهتمام لآراء الآخرين قبل الرد عليها.',
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
          'text_ar' => 'أبحث عن حلول وسط عند وجود خلاف.',
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
          'text_ar' => 'أتمكن من إقناع الآخرين بأفكاري باستخدام الحجج المنطقية.',
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
          'text_ar' => 'أحافظ على هدوئي أثناء الحوار حتى عند الاختلاف.',
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
          'text_ar' => 'أستطيع التفاوض للوصول إلى نتائج مرضية لجميع الأطراف.',
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
          'text_ar' => 'أختار الكلمات المناسبة عند مناقشة القضايا الحساسة.',
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
          'text_ar' => 'أتفهم احتياجات الطرف الآخر أثناء التفاوض.',
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
          'text_ar' => 'أستطيع تغيير أسلوب حديثي بما يتناسب مع الشخص الذي أحاوره.',
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
          'text_ar' => 'أعرض الأدلة والأمثلة لدعم آرائي.',
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
          'text_ar' => 'أتجنب مقاطعة الآخرين أثناء حديثهم.',
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
          'text_ar' => 'أتمكن من معالجة الاعتراضات بطريقة مقنعة.',
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
          'text_ar' => 'أشعر بالثقة عند التحدث أمام مجموعة من الأشخاص.',
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
          'text_ar' => 'أحرص على بناء علاقة إيجابية مع الطرف الآخر أثناء التفاوض.',
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
          'text_ar' => 'أستطيع التأثير في قرارات الآخرين بطريقة إيجابية.',
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
          'text_ar' => 'أبحث عن نقاط الاتفاق قبل التركيز على نقاط الخلاف.',
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
          'text_ar' => 'أتمكن من إقناع الآخرين دون اللجوء إلى الضغط أو التهديد.',
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
          'text_ar' => 'أستطيع إدارة الحوار عندما يحتد النقاش.',
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
          'text_ar' => 'أراجع موقفي إذا وجدت أن رأي الطرف الآخر أكثر منطقية.',
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
          'text_ar' => 'أحقق غالبًا أهدافي من خلال الحوار والتفاوض.',
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
      'description_ar' => 'تشير نتيجتك إلى تمتعك بمهارات جيدة في التفاوض والحوار والإقناع، وقدرتك على التواصل الفعال، وبناء التفاهم مع الآخرين، والتأثير الإيجابي فيهم، والوصول إلى حلول مناسبة في المواقف المختلفة. فأنت مفاوض جيد وناجح، وتحقق الأهداف التي تريدها عندما تتفاوض مع الآخرين. استمر على هذا المنوال.',
    ),
    1 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 13,
      'description_ar' => 'تشير نتيجتك إلى ضعف نسبي في مهارات التفاوض والحوار والإقناع، وقد تواجه صعوبة في عرض أفكارك بوضوح، أو التأثير في الآخرين، أو إدارة المواقف التفاوضية بكفاءة. فأنت مفاوض ضعيف وتحتاج إلى بعض الوقت والتدريب والممارسة، وكل شيء يمكن تعلمه إذا أردت.

أنت تحتاج إلى:
- تنمية مهارات الاستماع الفعال والتركيز على فهم الطرف الآخر قبل الرد
- التدريب على التعبير الواضح والمنظم عن الأفكار والآراء
- ممارسة الحوار في مواقف بسيطة وآمنة لزيادة الثقة بالنفس
- تعلم أساليب التحكم في الانفعالات أثناء النقاش والخلاف
- تنمية مهارات التواصل اللفظي وغير اللفظي
- المشاركة في أنشطة جماعية تتطلب النقاش وتبادل الآراء
- تعلم المبادئ الأساسية للتفاوض مثل تحديد الأهداف والبحث عن المصالح المشتركة',
    ),
    2 =>
    array (
      'level' => 'medium',
      'low_threshold' => 14,
      'high_threshold' => 27,
      'description_ar' => 'تشير نتيجتك إلى امتلاكك مستوى مقبولًا من مهارات التفاوض والحوار والإقناع، مع وجود حاجة إلى مزيد من التطوير في بعض الجوانب مثل: الاستماع الفعال، وإدارة الخلاف، واستخدام الحجج المقنعة. وتحتاج إلى تطوير وتحسين مهارة التفاوض لديك، وتحويلها من مستوى الممارسة العامة إلى مستوى أكثر احترافية.',
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