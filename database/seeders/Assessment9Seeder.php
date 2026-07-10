<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment9Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مقياس معرفة الذات',
  'category' => 'الذات والشحصيه',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى معرفة الفرد بذاته من خلال قياس درجة وعيه بخصائصه الشخصية وانفعالاته وقيمه وأهدافه وعلاقاته الاجتماعية. وتساعد نتائج المقياس على فهم جوانب القوة والجوانب التي تحتاج إلى تطوير، بما يسهم في تعزيز النمو الشخصي وتحسين القدرة على اتخاذ القرارات وبناء علاقات إيجابية وتحقيق الأهداف بصورة أكثر فاعلية.',
  'programs_ar' => 'اكتشاف الذات، الوعي بالمشاعر والانفعالات، بناء الثقة بالنفس، تحديد القيم والاتجاهات الشخصية، المهارات الاجتماعية الأساسية، الإرشاد النفسي الجمعي، تنمية الوعي الذاتي المتقدم، الذكاء الانفعالي، التخطيط الشخصي وصياغة الأهداف، مهارات التواصل والعلاقات الاجتماعية، النمو والتطوير الشخصي، القيادة الذاتية، الذكاء العاطفي المتقدم، التخطيط الاستراتيجي الشخصي، القيادة والتأثير الاجتماعي',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'البعد الأول: الوعي بالذات',
      'max_score' => 10,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أعرف نقاط قوتي بوضوح.',
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
          'text_ar' => 'أستطيع تحديد نقاط الضعف التي أحتاج إلى تطويرها.',
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
          'text_ar' => 'أفهم الأسباب التي تدفعني لاتخاذ قراراتي.',
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
          'text_ar' => 'أستطيع وصف شخصيتي للآخرين بدقة.',
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
          'text_ar' => 'أدرك تأثير مشاعري على سلوكي.',
          'order_index' => 4,
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
          'low_threshold' => 8,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك فهمًا واضحًا لذاتك، وتعرف نقاط قوتك وضعفك، وتدرك دوافعك الشخصية وأسباب سلوكياتك المختلفة. كما تتمتع بقدرة جيدة على تقييم نفسك بصورة واقعية واتخاذ قرارات تتوافق مع إمكاناتك وقدراتك.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 7,
          'interpretation_text_ar' => 'تشير نتيجتك إلى امتلاكك معرفة عامة بذاتك، إلا أن بعض الجوانب الشخصية قد لا تكون واضحة بشكل كافٍ. فقد تدرك بعض نقاط قوتك وضعفك، لكنك تحتاج إلى مزيد من التأمل الذاتي لفهم أعمق لدوافعك وسلوكياتك.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى صعوبة في فهم الذات وتحديد الخصائص الشخصية والدوافع الداخلية. وقد تواجه صعوبة في تقييم إمكاناتك أو تفسير سلوكياتك، مما قد يؤثر في جودة قراراتك وقدرتك على التعامل مع المواقف المختلفة.',
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'البعد الثاني: الوعي الانفعالي',
      'max_score' => 10,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أستطيع التعرف على مشاعري عندما أشعر بها.',
          'order_index' => 5,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أعرف ما الذي يسبب لي التوتر أو القلق.',
          'order_index' => 6,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أستطيع التعبير عن مشاعري بطريقة مناسبة.',
          'order_index' => 7,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'ألاحظ التغيرات في حالتي النفسية بسرعة.',
          'order_index' => 8,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أفهم كيف تؤثر مشاعري على علاقاتي مع الآخرين.',
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
          'low_threshold' => 8,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى قدرتك على التعرف على مشاعرك وفهم أسبابها والتعبير عنها بصورة مناسبة، مع قدرتك الجيدة على ضبط الانفعالات وإدارتها في المواقف المختلفة.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 7,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع إدراك بعض مشاعرك وانفعالاتك، لكنك قد تواجه صعوبة أحيانًا في فهم أسبابها أو التحكم فيها بشكل كامل، خاصة في المواقف الضاغطة.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى ضعف القدرة على التعرف على المشاعر أو فهمها، وقد تواجه صعوبات في التعبير عن انفعالاتك أو تنظيمها، مما قد يؤثر في تفاعلاتك وعلاقاتك مع الآخرين.',
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'البعد الثالث: القيم والأهداف',
      'max_score' => 10,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'لدي قيم ومبادئ واضحة ألتزم بها.',
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
          'text_ar' => 'أعرف ما الذي أريده من حياتي على المدى البعيد.',
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
          'text_ar' => 'أتخذ قراراتي بما يتوافق مع قيمي الشخصية.',
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
          'text_ar' => 'لدي أهداف محددة أسعى لتحقيقها.',
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
          'text_ar' => 'أراجع أهدافي بشكل دوري.',
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
        0 =>
        array (
          'level' => 'high',
          'low_threshold' => 8,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى وضوح القيم والمبادئ الشخصية لديك، وامتلاكك أهدافًا محددة تسعى لتحقيقها. كما تتميز بالقدرة على اتخاذ قرارات تتوافق مع قناعاتك وتوجهاتك المستقبلية.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 7,
          'interpretation_text_ar' => 'تشير نتيجتك إلى وجود بعض القيم والأهداف لديك، إلا أنها قد لا تكون محددة أو واضحة بصورة كافية. وقد تحتاج إلى إعادة ترتيب أولوياتك وتحديد أهدافك بشكل أكثر دقة.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى غموض في القيم أو الأهداف الشخصية، وقد تجد صعوبة في تحديد اتجاهاتك المستقبلية أو اتخاذ قرارات مبنية على مبادئ واضحة، مما يؤدي إلى التردد أو فقدان الشعور بالاتجاه.',
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'البعد الرابع: العلاقات الاجتماعية',
      'max_score' => 10,
      'order_index' => 3,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أعرف كيف يراني الآخرون بشكل عام.',
          'order_index' => 15,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أتقبل الملاحظات والنقد البناء.',
          'order_index' => 16,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أفهم تأثير تصرفاتي على الآخرين.',
          'order_index' => 17,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أستطيع بناء علاقات إيجابية مع من حولي.',
          'order_index' => 18,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أوازن بين احتياجاتي الشخصية واحتياجات الآخرين.',
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
          'low_threshold' => 8,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى قدرتك الجيدة على بناء العلاقات الإيجابية والمحافظة عليها، وفهم مشاعر الآخرين واحترام آرائهم، إضافة إلى امتلاك مهارات تواصل فعالة وتقبل النقد البناء.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 7,
          'interpretation_text_ar' => 'تشير نتيجتك إلى قدرة مقبولة على التفاعل الاجتماعي، مع وجود بعض التحديات في التواصل أو إدارة العلاقات في بعض المواقف الاجتماعية.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى صعوبات في التواصل مع الآخرين أو فهم احتياجاتهم ومشاعرهم، وقد يؤدي ذلك إلى ضعف العلاقات الاجتماعية أو حدوث مشكلات متكررة في التفاعل الاجتماعي.',
        ),
      ),
    ),
    4 =>
    array (
      'name_ar' => 'البعد الخامس: التطور الشخصي',
      'max_score' => 10,
      'order_index' => 4,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أسعى باستمرار لتطوير نفسي.',
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
          'text_ar' => 'أتعلم من أخطائي السابقة.',
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
          'text_ar' => 'أراجع سلوكي بعد المواقف المهمة.',
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
          'text_ar' => 'أبحث عن فرص جديدة للنمو الشخصي.',
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
          'text_ar' => 'أشعر أنني أتطور مع مرور الوقت.',
          'order_index' => 24,
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
          'low_threshold' => 8,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى حرصك المستمر على تطوير ذاتك وتحسين مهاراتك والاستفادة من خبراتك السابقة. كما تتميز بالقدرة على التعلم من الأخطاء والسعي المستمر للنمو الشخصي والمهني.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 7,
          'interpretation_text_ar' => 'تشير نتيجتك إلى وجود رغبة في التطور وتحسين الذات، إلا أن الجهود المبذولة قد تكون غير منتظمة أو محدودة، مما يجعل عملية النمو الشخصي أبطأ أو أقل وضوحًا.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى ضعف الاهتمام بتطوير الذات أو الاستفادة من الخبرات السابقة، وقد تميل إلى تكرار الأخطاء أو مقاومة التغيير، مما يحد من فرص النمو والتقدم الشخصي.',
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
      'low_threshold' => 34,
      'high_threshold' => 999,
      'description_ar' => 'تشير نتيجتك إلى أن مستوى معرفة الذات لديك مرتفع. فأنت تتمتع بفهم جيد لخصائصك الشخصية، وتدرك مشاعرك ودوافعك بصورة واضحة، وتمتلك رؤية واضحة نسبيًا لقيمك وأهدافك. كما أنك قادر على بناء علاقات اجتماعية إيجابية، وتسعى إلى تطوير نفسك والاستفادة من خبراتك المختلفة. تعكس هذه النتيجة مستوى جيدًا من الوعي الذاتي والنضج الشخصي.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 17,
      'high_threshold' => 33,
      'description_ar' => 'تشير نتيجتك إلى أن مستوى معرفة الذات لديك متوسط. لديك فهم مقبول لجوانب متعددة من شخصيتك ومشاعرك وأهدافك، إلا أن بعض الجوانب ما تزال بحاجة إلى مزيد من الوضوح والتطوير. وقد تتمكن من التعرف على نقاط قوتك وضعفك في كثير من المواقف، مع وجود فرص إضافية لتعزيز فهمك لذاتك وتنمية مهاراتك الشخصية والاجتماعية.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 16,
      'description_ar' => 'تشير نتيجتك إلى أن مستوى معرفة الذات لديك منخفض نسبيًا. وقد تواجه صعوبة في فهم بعض جوانب شخصيتك ودوافعك ومشاعرك، كما قد لا تكون قيمك وأهدافك واضحة بصورة كافية. وقد ينعكس ذلك على طريقة اتخاذك للقرارات أو تفاعلك مع الآخرين. وتُظهر هذه النتيجة أهمية العمل على تنمية الوعي بالذات من خلال التأمل الشخصي والتقييم المستمر للخبرات والمواقف الحياتية.

يُفضّل البدء ببرامج اكتشاف الذات، والوعي بالمشاعر، وبناء الثقة بالنفس، قبل الانتقال إلى البرامج المتقدمة.',
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