<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment18Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'التوجيه المهني',
  'category' => 'مقاييس التوجيه والتوافق المهني',
  'description_ar' => 'يهدف هذا المقياس إلى مساعدتك على التعرف بصورة أفضل إلى مستوى استعدادك المهني، ومدى وعيك بقدراتك واهتماماتك المهنية، ومعرفتك بالمهن المختلفة ومتطلبات سوق العمل، وقدرتك على اتخاذ القرارات المتعلقة بمستقبلك المهني والتخطيط له.',
  'programs_ar' => 'التخطيط الاستراتيجي للمسار المهني، المهارات المستقبلية وسوق العمل الحديث، مهارات التوظيف المتقدمة، القيادة المهنية وبناء الهوية المهنية، اكتشاف الذات والميول المهنية، التخطيط للمسار المهني، مهارات اتخاذ القرار المهني، استكشاف المهن وسوق العمل، المهارات الناعمة الأساسية، بناء الثقة المهنية وتقدير الذات، مهارات البحث عن الوظائف، المهارات الرقمية المهنية',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'البعد الأول: معرفة الذات المهنية',
      'max_score' => 20,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أعرف نقاط القوة التي أتميز بها.',
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
          'text_ar' => 'أعرف المهارات التي أجيدها أكثر من غيري.',
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
          'text_ar' => 'أستطيع تحديد المجالات المهنية التي تناسب شخصيتي.',
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
          'text_ar' => 'أعرف اهتماماتي المهنية بشكل واضح.',
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
          'text_ar' => 'أدرك جوانب الضعف التي أحتاج إلى تطويرها.',
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
          'text_ar' => 'أستطيع وصف قدراتي للآخرين بسهولة.',
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
          'text_ar' => 'أعرف الأعمال التي لا تتناسب مع ميولي.',
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
          'text_ar' => 'لدي تصور واضح عن طموحاتي المهنية.',
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
          'text_ar' => 'أستطيع اتخاذ قرارات مهنية بناءً على قدراتي الحقيقية.',
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
          'text_ar' => 'أثق بقدرتي على النجاح في المجال المهني الذي أختاره.',
          'order_index' => 9,
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
          'low_threshold' => 14,
          'high_threshold' => 20,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بدرجة عالية من الوعي بذاتك المهنية. فأنت تعرف قدراتك ومهاراتك واهتماماتك بشكل واضح، وتستطيع الربط بينها وبين الخيارات المهنية المناسبة. كما أنك تمتلك ثقة جيدة في إمكاناتك وقدرتك على النجاح في المجال الذي تختاره. وهذا يعني أنك تمتلك أساسًا قويًا لاتخاذ قرارات مهنية ناجحة، وتدرك نقاط قوتك والجوانب التي تحتاج إلى تطوير، وتتمتع برؤية واضحة تجاه مستقبلك المهني.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 7,
          'high_threshold' => 13,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرًا مقبولًا من المعرفة بذاتك المهنية. لديك فهم لبعض قدراتك واهتماماتك، إلا أن هذا الفهم قد لا يكون مكتملًا في جميع الجوانب. كما أنك قادر على تحديد بعض الخيارات المهنية المناسبة لك، لكنك ما زلت بحاجة إلى مزيد من الاستكشاف والتطوير. وهذا يعني أنك بحاجة إلى تعزيز فهمك لقدراتك وإمكاناتك، وتطوير نقاط القوة لديك، واكتساب خبرات جديدة تساعدك على تكوين صورة أوضح عن مستقبلك المهني.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن معرفتك بقدراتك واهتماماتك وميولك المهنية ما تزال محدودة. وقد تواجه صعوبة في تحديد نقاط القوة التي تمتلكها أو المجالات المهنية التي تتوافق مع شخصيتك وإمكاناتك. كما قد تجد صعوبة في اتخاذ قرارات مهنية مناسبة بسبب عدم وضوح الصورة المهنية لديك. وهذا يعني أنك بحاجة إلى زيادة وعيك بقدراتك ومهاراتك، واستكشاف اهتماماتك المهنية بشكل أكبر، والاستفادة من برامج التوجيه المهني واختبارات الميول المهنية.',
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'البعد الثاني: المعرفة بالمهن وسوق العمل',
      'max_score' => 20,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أبحث عن معلومات حول المهن المختلفة.',
          'order_index' => 10,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أعرف متطلبات المهن التي أهتم بها.',
          'order_index' => 11,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أتابع التغيرات في سوق العمل.',
          'order_index' => 12,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أعرف التخصصات المطلوبة في المستقبل.',
          'order_index' => 13,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أمتلك معلومات كافية عن فرص العمل المتاحة.',
          'order_index' => 14,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أستطيع المقارنة بين المهن المختلفة.',
          'order_index' => 15,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 =>
        array (
          'text_ar' => 'أعرف المؤهلات اللازمة للمهنة التي أرغب بها.',
          'order_index' => 16,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 =>
        array (
          'text_ar' => 'أستفيد من مصادر متنوعة للحصول على معلومات مهنية.',
          'order_index' => 17,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        8 =>
        array (
          'text_ar' => 'لدي معرفة بالمهارات المطلوبة لدى أصحاب العمل.',
          'order_index' => 18,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        9 =>
        array (
          'text_ar' => 'أستطيع تحديد المهن التي تتناسب مع مؤهلاتي.',
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
        0 =>
        array (
          'level' => 'high',
          'low_threshold' => 14,
          'high_threshold' => 20,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك معرفة جيدة بالمهن المختلفة ومتطلبات سوق العمل. كما أنك على دراية بالفرص المهنية المتاحة والمهارات والمؤهلات اللازمة للنجاح في المجال المهني الذي تطمح إليه. وهذا يعني أنك قادر على اتخاذ قرارات مهنية أكثر واقعية، وتمتلك معلومات تدعم اختياراتك المهنية، وتدرك التغيرات والاتجاهات الحديثة في سوق العمل.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 7,
          'high_threshold' => 13,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك معرفة مقبولة بالمهن ومتطلبات سوق العمل. لديك معلومات تساعدك في فهم بعض الفرص المهنية المتاحة، إلا أن هذه المعرفة تحتاج إلى مزيد من التوسع والتحديث المستمر. وهذا يعني أنك بحاجة إلى متابعة المستجدات المهنية بشكل دوري، وزيادة معرفتك بالتخصصات المستقبلية، والتعرف بصورة أعمق على المهارات المطلوبة في سوق العمل.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن معلوماتك حول المهن ومتطلبات سوق العمل محدودة. وقد لا تكون على دراية كافية بالمؤهلات والمهارات اللازمة للمهن المختلفة أو بالفرص المتاحة في سوق العمل. وهذا يعني أنك بحاجة إلى البحث عن معلومات مهنية من مصادر موثوقة، والتعرف على متطلبات المهن التي تهمك، ومتابعة التطورات والتغيرات في سوق العمل.',
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'البعد الثالث: اتخاذ القرار المهني',
      'max_score' => 20,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أستطيع اختيار البدائل المهنية المناسبة لي.',
          'order_index' => 20,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أفكر جيدًا قبل اتخاذ قرار مهني.',
          'order_index' => 21,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أجمع المعلومات قبل اتخاذ أي قرار يتعلق بمستقبلي.',
          'order_index' => 22,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أتحمل مسؤولية قراراتي المهنية.',
          'order_index' => 23,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أستطيع تحديد أولوياتي المهنية.',
          'order_index' => 24,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أوازن بين مزايا وعيوب الخيارات المهنية المختلفة.',
          'order_index' => 25,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 =>
        array (
          'text_ar' => 'أثق بقدرتي على اتخاذ قرارات مهنية سليمة.',
          'order_index' => 26,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 =>
        array (
          'text_ar' => 'أطلب المشورة عند الحاجة لاتخاذ قرار مهني.',
          'order_index' => 27,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        8 =>
        array (
          'text_ar' => 'أضع أهدافًا واضحة قبل اتخاذ القرار.',
          'order_index' => 28,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        9 =>
        array (
          'text_ar' => 'أستطيع تعديل قراراتي إذا ظهرت معلومات جديدة.',
          'order_index' => 29,
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
          'low_threshold' => 14,
          'high_threshold' => 20,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرة جيدة على اتخاذ القرارات المهنية بطريقة واعية ومدروسة. فأنت تميل إلى جمع المعلومات وتحليل البدائل واختيار الأنسب منها وفق أهدافك وقدراتك. وهذا يعني أنك تتمتع بدرجة عالية من الاستقلالية في اتخاذ القرار، وقادر على تحمل مسؤولية اختياراتك المهنية، وتمتلك مهارات تساعدك على مواجهة التحديات المهنية بثقة.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 7,
          'high_threshold' => 13,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قادر على اتخاذ قرارات مهنية مقبولة في العديد من المواقف، إلا أنك قد تشعر بالحيرة أو التردد أحيانًا عند مواجهة قرارات مهمة أو مصيرية. وهذا يعني أنك بحاجة إلى تطوير مهارات تحليل البدائل المهنية، وتعزيز الثقة في قراراتك، والاستفادة من الخبرات والاستشارات المهنية عند الحاجة.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في اتخاذ القرارات المهنية أو اختيار البدائل المناسبة. وقد تميل إلى التردد أو الاعتماد بشكل كبير على الآخرين عند اتخاذ القرارات المتعلقة بمستقبلك المهني. وهذا يعني أنك بحاجة إلى تنمية مهارات اتخاذ القرار، وجمع المعلومات قبل الاختيار، وزيادة الثقة بقدرتك على اتخاذ قرارات مهنية مناسبة.',
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'البعد الرابع: التخطيط المهني',
      'max_score' => 20,
      'order_index' => 3,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أضع أهدافًا مهنية طويلة المدى.',
          'order_index' => 30,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أحدد خطوات واضحة لتحقيق أهدافي المهنية.',
          'order_index' => 31,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أخصص وقتًا لتطوير مهاراتي المهنية.',
          'order_index' => 32,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أشارك في أنشطة تساعدني على تحقيق أهدافي المهنية.',
          'order_index' => 33,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أراجع خططي المهنية بشكل دوري.',
          'order_index' => 34,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أضع بدائل في حال تعذّر تحقيق هدفي الأول.',
          'order_index' => 35,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 =>
        array (
          'text_ar' => 'أستثمر الفرص المتاحة لتطوير مستقبلي المهني.',
          'order_index' => 36,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 =>
        array (
          'text_ar' => 'أحرص على اكتساب خبرات جديدة.',
          'order_index' => 37,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        8 =>
        array (
          'text_ar' => 'أعمل وفق خطة محددة لتحقيق أهدافي المهنية.',
          'order_index' => 38,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        9 =>
        array (
          'text_ar' => 'لدي رؤية واضحة لمستقبلي المهني.',
          'order_index' => 39,
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
          'low_threshold' => 14,
          'high_threshold' => 20,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرة عالية على التخطيط لمستقبلك المهني. فأنت تحدد أهدافك بوضوح، وتضع خطوات عملية لتحقيقها، وتتابع تقدمك بصورة منظمة، مع استعداد للتكيف مع المستجدات والتحديات المختلفة. وهذا يعني أنك تمتلك رؤية واضحة لمستقبلك المهني، وتعمل بطريقة منظمة لتحقيق أهدافك، وتتمتع بقدرة جيدة على استثمار الفرص المتاحة لتحقيق النجاح المهني.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 7,
          'high_threshold' => 13,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك بعض مهارات التخطيط المهني، ولديك أهداف مستقبلية تسعى لتحقيقها، إلا أن خططك قد تحتاج إلى مزيد من الوضوح والتنظيم والمتابعة. وهذا يعني أنك بحاجة إلى تطوير خطط أكثر تفصيلًا، ومراجعة أهدافك بشكل دوري، والاستفادة من الفرص التعليمية والتدريبية التي تدعم تحقيق أهدافك.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك صعوبة في وضع أهداف مهنية واضحة أو إعداد خطط عملية لتحقيقها. وقد يؤدي ذلك إلى ضعف الاستعداد للمستقبل المهني وعدم الاستفادة من الفرص المتاحة بالشكل المطلوب. وهذا يعني أنك بحاجة إلى تحديد أهداف مهنية واضحة ومحددة، ووضع خطة زمنية لتحقيق أهدافك، ومتابعة تقدمك بصورة منتظمة.',
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
      'low_threshold' => 54,
      'high_threshold' => 999,
      'description_ar' => 'تشير نتيجتك إلى أنك تتمتع بمستوى مرتفع من التوجيه المهني. فأنت تمتلك فهمًا جيدًا لقدراتك واهتماماتك المهنية، ولديك معرفة مناسبة بالمهن ومتطلبات سوق العمل. كما أنك قادر على اتخاذ قرارات مهنية مدروسة والتخطيط لمستقبلك بطريقة منظمة وواقعية.

وهذا يعني أنك تدرك قدراتك وإمكاناتك المهنية بصورة واضحة، وتمتلك معلومات تساعدك على اختيار المسار المهني المناسب، وتتمتع بمهارات جيدة في اتخاذ القرار المهني، وتضع أهدافًا واضحة وتسعى لتحقيقها بخطوات منظمة، وتمتلك استعدادًا جيدًا للتكيف مع متغيرات سوق العمل ومتطلبات المستقبل.

استمر في تطوير مهاراتك ومعارفك المهنية والمحافظة على التخطيط المستمر لمستقبلك، بما يسهم في تحقيق أهدافك المهنية والشخصية بنجاح.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 27,
      'high_threshold' => 53,
      'description_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مقبولًا من التوجيه المهني. لديك قدر من المعرفة بذاتك المهنية وبعض المعلومات المتعلقة بالمهن وسوق العمل، كما أنك قادر على اتخاذ قرارات مهنية والتخطيط لمستقبلك بدرجة معقولة. ومع ذلك، لا تزال هناك بعض الجوانب التي تحتاج إلى مزيد من التطوير حتى تصبح اختياراتك المهنية أكثر وضوحًا وفاعلية.

وهذا يعني أنك بحاجة إلى تعزيز معرفتك بقدراتك وميولك المهنية، وتحديث معلوماتك المتعلقة بالمهن وسوق العمل، وتطوير مهارات التخطيط طويل المدى، والاستمرار في اكتساب الخبرات والمهارات المهنية، ومراجعة أهدافك المهنية بشكل دوري.

أنت تمتلك أساسًا جيدًا يمكن البناء عليه للوصول إلى مستوى أعلى من النضج والاستعداد المهني.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 26,
      'description_ar' => 'تشير نتيجتك إلى أن مستوى التوجيه المهني لديك يحتاج إلى مزيد من التطوير. فقد تكون معرفتك بقدراتك وميولك المهنية محدودة، كما أنك قد لا تمتلك معلومات كافية عن المهن المختلفة ومتطلبات سوق العمل. وقد ينعكس ذلك على قدرتك على اتخاذ القرارات المهنية المناسبة أو التخطيط لمستقبلك المهني بصورة واضحة.

وهذا يعني أنك بحاجة إلى زيادة وعيك بقدراتك واهتماماتك المهنية، والتعرف بصورة أوسع على المهن والتخصصات المختلفة، وتنمية مهارات اتخاذ القرار والتخطيط المهني، والاستفادة من خدمات الإرشاد والتوجيه المهني، والمشاركة في الأنشطة والخبرات التي تساعدك على استكشاف ميولك المهنية.

تطوير هذه الجوانب سيساعدك على بناء رؤية أوضح لمستقبلك المهني واتخاذ قرارات أكثر ملاءمة لقدراتك وطموحاتك.',
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