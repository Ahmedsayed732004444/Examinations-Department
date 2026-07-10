<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment22Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مقياس الإرهاق المهني',
  'category' => 'مقاييس الصحة المهنية',
  'description_ar' => 'يهدف هذا المقياس إلى مساعدتك على التعرف على مستوى الإرهاق المهني الذي قد تتعرض له نتيجة متطلبات العمل وضغوطه المختلفة. ويُقصد بالإرهاق المهني حالة من التعب النفسي أو الجسدي أو الانفعالي قد تنشأ تدريجيًا نتيجة الضغوط المستمرة في بيئة العمل، وقد تؤثر في مستوى الرضا الوظيفي والأداء والصحة العامة.',
  'programs_ar' => 'إدارة الوقت والأولويات، تعزيز الرفاهية المهنية، الذكاء العاطفي في بيئة العمل، مهارات التواصل الفعال، بناء العادات المهنية الإيجابية، إدارة ضغوط العمل، التوازن بين الحياة والعمل، المرونة النفسية في بيئة العمل، إدارة الانفعالات والاحتراق الوظيفي، مهارات حل المشكلات واتخاذ القرار تحت الضغط، برنامج متكامل للوقاية من الاحتراق الوظيفي، إدارة الضغوط المتقدمة والتعافي المهني، المرونة النفسية والصمود المهني، الصحة النفسية في بيئة العمل، التعافي من الإرهاق المهني وإعادة بناء الدافعية، جلسات إرشاد أو دعم مهني فردية عند الحاجة',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'البعد الأول: الإجهاد والإنهاك النفسي',
      'max_score' => 10,
      'order_index' => 0,
      'questions' =>
      array (
        0 => array ('text_ar' => 'أشعر بالتعب والإرهاق في نهاية يوم العمل.', 'order_index' => 0,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أجد صعوبة في استعادة نشاطي بعد ساعات العمل.', 'order_index' => 1,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أشعر بأن متطلبات العمل تفوق طاقتي.', 'order_index' => 2,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أعاني من التوتر بسبب ضغوط العمل.', 'order_index' => 3,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أشعر بالإجهاد حتى قبل بدء يوم العمل.', 'order_index' => 4,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قادر على التعامل مع متطلبات العمل بكفاءة، وتتمتع بمستوى جيد من الطاقة النفسية والانفعالية، ولا تعاني من ضغوط مهنية مؤثرة.',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 4, 'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى وجود بعض مظاهر التعب والإجهاد المرتبط بالعمل، إلا أنها ما تزال ضمن الحدود التي يمكن السيطرة عليها من خلال تحسين مهارات إدارة الضغوط وتنظيم العمل.',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 7, 'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى تعرضك لاستنزاف نفسي وعاطفي مرتفع نتيجة ضغوط العمل المستمرة، مما قد يؤثر في صحتك النفسية ومستوى أدائك المهني إذا لم يتم التدخل المناسب. ومن مظاهر ذلك: الشعور بالتعب المستمر، وانخفاض مستوى الطاقة والنشاط، والتوتر والقلق المرتبطان بالعمل، وصعوبة الاسترخاء بعد انتهاء ساعات العمل، والشعور بأن أعباء العمل تفوق القدرة على التحمل.

وارتفاع درجتك في هذا البعد يدل على أنك تعاني من استنزاف نفسي وعاطفي متزايد نتيجة الضغوط المهنية، وتحتاج إلى استراتيجيات فعالة لإدارة الضغوط وتحسين التوازن بين متطلبات العمل والموارد الشخصية.',
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'البعد الثاني: التبلد والانفصال عن العمل',
      'max_score' => 10,
      'order_index' => 1,
      'questions' =>
      array (
        0 => array ('text_ar' => 'أصبحت أقل حماسًا للعمل مقارنة بالسابق.', 'order_index' => 5,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أشعر بأن عملي أصبح روتينيًا ومملًا.', 'order_index' => 6,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أجد نفسي أقل اهتمامًا بمشكلات المستفيدين أو العملاء.', 'order_index' => 7,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أشعر برغبة في تجنب بعض مهام العمل.', 'order_index' => 8,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أشعر أحيانًا بعدم الانتماء لبيئة العمل.', 'order_index' => 9,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى وجود ارتباط إيجابي بالعمل، واستمرار الحماس والاهتمام بالمهام المهنية وبالمستفيدين أو الزملاء.',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 4, 'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى ظهور بعض مظاهر الفتور أو انخفاض الحماس تجاه العمل، مع بقاء القدرة على أداء المهام والمحافظة على العلاقات المهنية المقبولة.',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 7, 'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى وجود اتجاهات سلبية واضحة نحو العمل، وانخفاض الانتماء المهني، والرغبة في تجنب المسؤوليات أو تقليل التفاعل مع الآخرين في بيئة العمل. ومن مظاهر ذلك: ضعف الدافعية المهنية، وانخفاض الاهتمام بالعمل أو بالمستفيدين، والشعور بالملل والروتين، والرغبة في تجنب بعض المسؤوليات المهنية، وضعف الشعور بالانتماء للمؤسسة.

وتشير الدرجة المرتفعة إلى وجود حالة من الانفصال النفسي عن العمل قد تؤثر في جودة الأداء والعلاقات المهنية، وقد تكون مؤشرًا على تطور الإرهاق المهني إلى مراحل أكثر تقدمًا.',
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'البعد الثالث: انخفاض الإنجاز المهني',
      'max_score' => 10,
      'order_index' => 2,
      'questions' =>
      array (
        0 => array ('text_ar' => 'أشعر أن إنتاجيتي أقل مما ينبغي.', 'order_index' => 10,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أشك في قدرتي على أداء عملي بكفاءة.', 'order_index' => 11,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أجد صعوبة في تحقيق أهداف العمل المطلوبة.', 'order_index' => 12,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أشعر بأن جهودي لا تحقق نتائج ملموسة.', 'order_index' => 13,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أشعر بأن أدائي المهني يتراجع مع الوقت.', 'order_index' => 14,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى شعورك بالكفاءة المهنية والثقة بقدراتك، وإدراكك أنك تحقق أهدافك المهنية بصورة مرضية.',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 4, 'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى وجود بعض الشكوك حول مستوى أدائك أو قدرتك على الإنجاز، مع إمكانية تحسين الوضع من خلال الدعم والتطوير المهني.',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 7, 'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى شعور متزايد بعدم الكفاءة المهنية وضعف الإنجاز، وتراجع الثقة بالقدرة على أداء المهام وتحقيق الأهداف المطلوبة. ومن مظاهر ذلك: ضعف الشعور بالنجاح المهني، وانخفاض الثقة بالقدرات الوظيفية، والشعور بعدم الكفاءة، والإحساس بأن الجهود المبذولة غير مجدية، وصعوبة تحقيق الأهداف المهنية.

وتدل هذه النتيجة على أنك أصبحت تنظر إلى أدائك المهني بصورة سلبية، مما قد ينعكس على مستوى الإنجاز والإبداع والرضا الوظيفي.',
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'البعد الرابع: الأعراض الجسدية المرتبطة بالعمل',
      'max_score' => 10,
      'order_index' => 3,
      'questions' =>
      array (
        0 => array ('text_ar' => 'أعاني من الصداع أو آلام جسدية مرتبطة بضغوط العمل.', 'order_index' => 15,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أواجه اضطرابات في النوم بسبب التفكير في العمل.', 'order_index' => 16,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أشعر بإرهاق جسدي متكرر أثناء العمل.', 'order_index' => 17,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أعاني من ضعف التركيز خلال ساعات العمل.', 'order_index' => 18,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أشعر بأن ضغوط العمل تؤثر في صحتي العامة.', 'order_index' => 19,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن ضغوط العمل لا تترك آثارًا جسدية ملحوظة، وأن حالتك الصحية العامة مستقرة نسبيًا.',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 4, 'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى وجود بعض الأعراض الجسدية المرتبطة بالعمل، مثل التعب أو الصداع أو اضطرابات النوم بشكل متقطع.',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 7, 'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى تأثر صحتك الجسدية بشكل واضح بضغوط العمل، وظهور أعراض متكررة قد تؤثر في جودة حياتك وأدائك المهني وتتطلب اهتمامًا أكبر بالصحة والرفاه المهني. ومن مظاهر ذلك: الصداع المتكرر، واضطرابات النوم، والشعور بالإرهاق الجسدي، وضعف التركيز والانتباه، والشكاوى الصحية المرتبطة بالعمل.

وتعكس الدرجة المرتفعة انتقال آثار الضغوط المهنية إلى الجانب الجسدي، مما قد يؤثر في صحتك العامة ويستدعي الاهتمام بإجراءات الوقاية والرعاية الصحية والنفسية.',
        ),
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
      'high_threshold' => 13,
      'description_ar' => 'تشير نتيجتك إلى تمتعك بتوازن جيد بين متطلبات العمل وقدراتك، وامتلاكك استراتيجيات فعالة للتعامل مع الضغوط، ولا توجد مؤشرات مقلقة على الإرهاق المهني لديك.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 14,
      'high_threshold' => 26,
      'description_ar' => 'تشير نتيجتك إلى وجود مؤشرات واضحة على الضغط المهني، وأنك تحتاج إلى تطوير مهارات التكيف وإدارة الضغوط، وقد تتأثر جودة الأداء والرضا الوظيفي إذا استمرت الضغوط.',
    ),
    2 =>
    array (
      'level' => 'high',
      'low_threshold' => 27,
      'high_threshold' => 40,
      'description_ar' => 'تشير نتيجتك إلى وجود مؤشرات مرتفعة على الاحتراق والإرهاق المهني، وقد تتأثر صحتك النفسية والجسدية وأداؤك الوظيفي بشكل ملحوظ. ونوصي بالتدخل المهني السريع ووضع خطة دعم فردية.',
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