<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment10Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مقياس استثمار الوقت',
  'category' => 'الكفاءة الشخصية والنجاح المهني',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى استثمارك للوقت من خلال استكشاف مجموعة من السلوكيات والممارسات المرتبطة بالتخطيط، وتنظيم الأولويات، والاستفادة من الوقت المتاح، والتعامل مع مضيعات الوقت، وتقييم العائد المتحقق من استخدامك للوقت. كما يساعد في تحديد نقاط القوة والجوانب التي يمكن تطويرها لتحسين كفاءة استثمار الوقت وتحقيق الأهداف الشخصية أو الأكاديمية أو المهنية.',
  'programs_ar' => 'القيادة، الإدارة الاستراتيجية، إدارة المشاريع، الإنتاجية المتقدمة، التحول الرقمي، التفكير الاستراتيجي، التخطيط الشخصي وتحديد الأولويات، إدارة الوقت المتقدمة، الإنتاجية الشخصية وتحقيق الإنجاز، مهارات التركيز وإدارة الانتباه، استخدام التطبيقات الرقمية لتنظيم الوقت، أساسيات إدارة الوقت، التغلب على التسويف وتأجيل المهام، بناء العادات الشخصية الإيجابية، إدارة المشتتات الرقمية، التخطيط اليومي وتنظيم المهام، مهارات الانضباط الذاتي وتحمل المسؤولية',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'التخطيط وإدارة الوقت',
      'max_score' => 8,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أضع أهدافًا واضحة لما أريد إنجازه خلال اليوم أو الأسبوع.',
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
          'text_ar' => 'أحدد أولوياتي قبل البدء في أداء المهام.',
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
          'text_ar' => 'أخصص وقتًا محددًا للمهام المهمة وألتزم به.',
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
          'text_ar' => 'أراجع خططي بشكل دوري للتأكد من سيرها بالشكل المطلوب.',
          'order_index' => 3,
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
        0 =>
        array (
          'level' => 'high',
          'low_threshold' => 6,
          'high_threshold' => 8,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مهارات جيدة في التخطيط وإدارة الوقت. فأنت تحدد أهدافك وأولوياتك بوضوح وتعمل وفق خطة تساعدك على استثمار وقتك بكفاءة. كما أنك تراجع خططك باستمرار، مما يسهم في رفع مستوى إنجازك وتحقيق أهدافك بصورة أكثر فاعلية.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 3,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمارس التخطيط وإدارة الوقت بدرجة متوسطة. فأنت تخطط لبعض مهامك وتحدد أولوياتك أحيانًا، إلا أن ذلك قد لا يكون بشكل منتظم أو مستمر. من المفيد أن تعمل على تطوير عادات تخطيط أكثر ثباتًا ومتابعة تنفيذ خططك بصورة دورية لتحقيق استفادة أكبر من وقتك.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 2,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك لا تمارس التخطيط للوقت بصورة كافية، وقد تعتمد على تنفيذ المهام بشكل عشوائي أو دون تحديد واضح للأولويات. قد يؤدي ذلك إلى زيادة الضغوط وتأخير إنجاز الأعمال المهمة. أنت بحاجة إلى تنمية مهارات التخطيط من خلال وضع أهداف واضحة، وإعداد قوائم للمهام، وتحديد أولوياتك اليومية والأسبوعية.',
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'استثمار الوقت بفعالية',
      'max_score' => 8,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أستغل أوقات الفراغ في أنشطة مفيدة أو تطوير مهاراتي.',
          'order_index' => 4,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أحرص على إنجاز الأعمال المهمة قبل الانشغال بالأمور الثانوية.',
          'order_index' => 5,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أبحث باستمرار عن طرق تساعدني على أداء المهام بكفاءة أعلى.',
          'order_index' => 6,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أوازن بين الدراسة أو العمل والأنشطة الشخصية والترفيهية.',
          'order_index' => 7,
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
        0 =>
        array (
          'level' => 'high',
          'low_threshold' => 6,
          'high_threshold' => 8,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تحسن استثمار وقتك وتوظفه في أنشطة تسهم في تحقيق أهدافك وتنمية قدراتك. فأنت تدرك قيمة الوقت وتسعى إلى استغلاله بطريقة تحقق أكبر قدر من الفائدة، مع المحافظة على التوازن بين الجوانب المختلفة في حياتك.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 3,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستثمر وقتك بصورة مقبولة، إلا أن هناك فرصًا أكبر لتحسين كفاءة استخدامه. فأنت تنجز بعض الأعمال المهمة وتستفيد من وقتك في مواقف معينة، لكنك قد لا تحافظ على هذا المستوى بشكل مستمر. زيادة التركيز على الأنشطة ذات القيمة المرتفعة سيساعدك على تحقيق نتائج أفضل.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 2,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن الوقت المتاح لك لا يُستثمر بالشكل الذي يحقق أقصى فائدة ممكنة. وقد تميل إلى قضاء جزء كبير من وقتك في أنشطة محدودة العائد مقارنة بأهدافك وطموحاتك. من المهم أن تبحث عن فرص للاستفادة من وقت الفراغ في التعلم أو تطوير المهارات أو إنجاز المهام ذات الأولوية.',
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'مواجهة مضيعات الوقت',
      'max_score' => 8,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أتجنب التسويف وتأجيل المهام دون مبرر.',
          'order_index' => 8,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أتحكم في الوقت الذي أقضيه على وسائل التواصل الاجتماعي أو التطبيقات الترفيهية.',
          'order_index' => 9,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أتعامل مع المقاطعات والمشتتات بطريقة تقلل من تأثيرها على إنجازي.',
          'order_index' => 10,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'ألتزم بإنهاء المهام في الوقت المحدد غالبًا.',
          'order_index' => 11,
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
        0 =>
        array (
          'level' => 'high',
          'low_threshold' => 6,
          'high_threshold' => 8,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرة جيدة على إدارة المشتتات وتقليل تأثيرها على إنتاجيتك. فأنت تحافظ على تركيزك، وتتجنب التسويف بدرجة كبيرة، وتنجز مهامك ضمن الأوقات المحددة. ويعكس ذلك مستوى مرتفعًا من الانضباط والمسؤولية في إدارة الوقت.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 3,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع التعامل مع بعض مضيعات الوقت، إلا أن تأثيرها لا يزال موجودًا في عدد من المواقف. فقد تتمكن من السيطرة على المشتتات أحيانًا، بينما تجد صعوبة في ذلك في أوقات أخرى. تطوير مهارات الانضباط الذاتي وتنظيم البيئة المحيطة بك قد يساعدك على تحسين أدائك.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 2,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مضيعات الوقت تؤثر فيك بدرجة كبيرة، وقد تواجه صعوبة في مقاومة التسويف أو التحكم في المشتتات المختلفة. وهذا قد ينعكس سلبًا على قدرتك على إنجاز المهام في الوقت المحدد. أنت بحاجة إلى تبني استراتيجيات تساعدك على زيادة التركيز وتقليل مصادر التشتت.',
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'تقييم العائد من الوقت',
      'max_score' => 8,
      'order_index' => 3,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أشعر أن الوقت الذي أقضيه يساهم في تحقيق أهدافي المستقبلية.',
          'order_index' => 12,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أتعلم من أخطائي السابقة في إدارة الوقت وأحاول تحسين أدائي.',
          'order_index' => 13,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أقيّم مدى استفادتي من وقتي في نهاية اليوم أو الأسبوع.',
          'order_index' => 14,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'ألاحظ تقدمًا مستمرًا في إنجازاتي نتيجة حسن استثماري للوقت.',
          'order_index' => 15,
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
        0 =>
        array (
          'level' => 'high',
          'low_threshold' => 6,
          'high_threshold' => 8,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تدرك العلاقة بين استخدام الوقت وتحقيق الأهداف، وتحرص على تقييم إنجازاتك والاستفادة من خبراتك السابقة. كما أنك تتابع مدى التقدم الذي تحققه، مما يساعدك على تطوير أدائك والاستمرار في تحسين استثمارك للوقت.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 3,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تراجع استفادتك من الوقت في بعض الأحيان، وتدرك أهمية التعلم من الخبرات السابقة، إلا أن هذه الممارسات ليست منتظمة دائمًا. زيادة الاهتمام بالتقييم الذاتي والمتابعة المستمرة يمكن أن يساعدك على تحقيق تقدم أكبر في استثمار وقتك.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 2,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك لا تقوم بتقييم استخدامك للوقت بصورة كافية، وقد لا تربط بين أنشطتك اليومية وأهدافك المستقبلية بشكل واضح. ومن المهم أن تخصص وقتًا لمراجعة ما أنجزته وتحديد الجوانب التي تحتاج إلى تطوير لتحسين استفادتك من الوقت.',
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
      'level' => 'high',
      'low_threshold' => 22,
      'high_threshold' => 999,
      'description_ar' => 'تشير نتيجتك إلى أنك مستثمر ناجح للوقت. فأنت تدير وقتك بوعي وفعالية، وتحرص على توجيهه نحو أنشطة تحقق أهدافك وتدعم نموك الشخصي أو الأكاديمي أو المهني. غالبًا ما تتميز بوضوح الأولويات، والقدرة على تنظيم المهام، والتعامل مع المشتتات بشكل مناسب. كما أنك تستفيد من خبراتك السابقة لتطوير أساليبك في إدارة الوقت. استمرارك في هذه الممارسات سيساعدك على تحقيق مزيد من الإنجازات والمحافظة على مستوى مرتفع من الإنتاجية والتوازن في حياتك.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 11,
      'high_threshold' => 21,
      'description_ar' => 'تشير نتيجتك إلى أنك مستثمر للوقت بدرجة متوسطة (إلى حد ما). توضح نتائجك أنك تمتلك بعض الممارسات الإيجابية في إدارة الوقت، إلا أنها لا تزال بحاجة إلى مزيد من الاستمرارية والتنظيم. قد تنجح في التخطيط أو الالتزام بالمهام في بعض الأحيان، لكنك قد تواجه تحديات مرتبطة بالتسويف أو التشتت أو ضعف المتابعة الدورية للأهداف. لديك أساس جيد يمكن البناء عليه، ومن خلال تعزيز مهارات التخطيط وتقييم استخدامك للوقت بصورة منتظمة ستتمكن من رفع كفاءة استثمارك للوقت وتحقيق نتائج أفضل.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 10,
      'description_ar' => 'تشير نتيجتك إلى أنك بحاجة إلى تطوير مهارات استثمار الوقت بشكل كبير. فإجاباتك توضح أن جزءًا كبيرًا من وقتك قد يضيع في أنشطة لا تحقق لك فائدة ملموسة أو لا تسهم في الوصول إلى أهدافك. قد تواجه صعوبة في التخطيط أو ترتيب الأولويات أو الالتزام بالمواعيد المحددة. من المفيد أن تبدأ بوضع أهداف يومية بسيطة، وتقليل المشتتات، ومتابعة كيفية قضاء وقتك خلال اليوم؛ فكل تحسين صغير في إدارة الوقت يمكن أن ينعكس إيجابًا على إنتاجيتك وإنجازاتك المستقبلية.',
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