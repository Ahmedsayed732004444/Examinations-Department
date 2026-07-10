<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment24Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مقياس السلامة والصحة المهنية',
  'category' => 'مقاييس الصحة المهنية',
  'description_ar' => 'صُمم هذا المقياس لمساعدتك على التعرف بصورة أفضل على مستوى وعيك وممارساتك المتعلقة بالسلامة والصحة المهنية في بيئة العمل، وذلك من خلال استكشاف جوانب متعددة تشمل معرفتك بمفاهيم السلامة، ومدى التزامك بالإجراءات الوقائية، واستعدادك للتعامل مع حالات الطوارئ، وإسهامك في تعزيز ثقافة السلامة داخل جهة عملك.

لا يهدف هذا المقياس إلى الحكم عليك أو تقييم أدائك الوظيفي، وإنما يهدف إلى مساعدتك في اكتشاف نقاط القوة التي تمتلكها في مجال السلامة والصحة المهنية، وتحديد الجوانب التي يمكن تطويرها من خلال التدريب والتعلم والممارسة المستمرة.',
  'programs_ar' => 'القيادة في السلامة المهنية، إدارة المخاطر المتقدمة، التدقيق على نظم السلامة والصحة المهنية، تحليل الأسباب الجذرية للحوادث، تطبيق مواصفة ISO 45001، بناء ثقافة السلامة المؤسسية، إعداد قادة وسفراء السلامة المهنية، تقييم المخاطر المهنية، إدارة السلامة في بيئة العمل، التحقيق في الحوادث المهنية، إدارة الطوارئ والأزمات، السلامة السلوكية، التفتيش على السلامة المهنية، تطبيق معايير السلامة الدولية، أساسيات السلامة والصحة المهنية، التعرف على المخاطر المهنية، معدات الوقاية الشخصية واستخدامها الصحيح، الإسعافات الأولية الأساسية، مكافحة الحرائق والإخلاء، السلوك الآمن في بيئة العمل',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'البعد الأول: الوعي بمفاهيم السلامة والصحة المهنية',
      'max_score' => 10,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أدرك أهمية تطبيق إجراءات السلامة في بيئة العمل',
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
          'text_ar' => 'أعرف المخاطر المحتملة المرتبطة بطبيعة عملي',
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
          'text_ar' => 'أفهم التعليمات الخاصة بالسلامة المهنية في المؤسسة',
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
          'text_ar' => 'أعرف إجراءات الإبلاغ عن الحوادث والإصابات',
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
          'text_ar' => 'أدرك مسؤولياتي الشخصية تجاه السلامة المهنية',
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
          'low_threshold' => 7,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بمستوى مرتفع من الوعي بمفاهيم السلامة والصحة المهنية، وتدرك المخاطر المحتملة في بيئة العمل، كما أنك قادر على فهم الإجراءات الوقائية وتطبيقها بصورة صحيحة.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك معرفة مقبولة بمفاهيم السلامة والصحة المهنية، وتدرك بعض المخاطر المرتبطة بعملك، إلا أنك لا تزال بحاجة إلى تعميق فهمك وربط المعرفة النظرية بالمواقف العملية التي تواجهها في بيئة العمل.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك بحاجة إلى تعزيز معرفتك بمفاهيم السلامة والصحة المهنية. وقد تواجه صعوبة في التعرف على المخاطر المهنية أو فهم الإجراءات الوقائية المناسبة في بيئة العمل. كما قد يؤدي نقص المعرفة إلى زيادة احتمالية التعرض للحوادث أو اتخاذ قرارات غير آمنة أثناء العمل.',
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'البعد الثاني: الالتزام بإجراءات السلامة',
      'max_score' => 10,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'ألتزم باستخدام معدات الوقاية الشخصية عند الحاجة',
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
          'text_ar' => 'أطبق تعليمات السلامة أثناء أداء العمل',
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
          'text_ar' => 'أتجنب السلوكيات التي قد تسبب حوادث مهنية',
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
          'text_ar' => 'أشارك في الأنشطة المتعلقة بالسلامة المهنية',
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
          'text_ar' => 'ألتزم بإرشادات الطوارئ والإخلاء',
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
          'low_threshold' => 7,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك ملتزم بإجراءات السلامة بشكل واضح ومستمر، وتحرص على تطبيق التعليمات الوقائية والمحافظة على سلامتك وسلامة الآخرين أثناء العمل.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تلتزم بإجراءات السلامة في كثير من المواقف، إلا أن التزامك قد يختلف باختلاف الظروف أو طبيعة العمل. وتحتاج إلى تعزيز الممارسات الوقائية حتى تصبح جزءًا ثابتًا من سلوكك المهني اليومي.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك لا تطبق إجراءات السلامة بصورة منتظمة، وقد تتجاهل بعض التعليمات أو الممارسات الوقائية المهمة. وهذا قد يعرضك وزملاءك لمخاطر وإصابات يمكن تجنبها.',
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'البعد الثالث: بيئة العمل الآمنة',
      'max_score' => 10,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'تتوفر في مكان العمل وسائل السلامة الأساسية',
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
          'text_ar' => 'تتم صيانة المعدات والأجهزة بشكل دوري',
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
          'text_ar' => 'توجد مخارج طوارئ واضحة وسهلة الوصول',
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
          'text_ar' => 'تتوفر لوحات وإرشادات السلامة في أماكن مناسبة',
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
          'text_ar' => 'يتم التخلص من المخلفات بطريقة آمنة',
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
          'low_threshold' => 7,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك وعيًا جيدًا بعناصر السلامة في بيئة العمل، وتستطيع ملاحظة المخاطر المحتملة والمساهمة في المحافظة على بيئة عمل آمنة.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تدرك العديد من عناصر السلامة الموجودة في بيئة العمل، إلا أنك قد لا تتمكن دائمًا من تقييم مدى كفايتها أو الإبلاغ عن المخاطر المحتملة بالشكل المناسب.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في التعرف على عناصر السلامة الموجودة في بيئة العمل أو ملاحظة أوجه القصور التي قد تؤثر في سلامتك وسلامة الآخرين.',
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'البعد الرابع: الاستعداد للطوارئ وإدارة المخاطر',
      'max_score' => 10,
      'order_index' => 3,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أعرف إجراءات التعامل مع الحرائق',
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
          'text_ar' => 'أعرف كيفية استخدام أدوات الإطفاء الأولية',
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
          'text_ar' => 'أشارك في تدريبات الإخلاء والطوارئ',
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
          'text_ar' => 'أستطيع التصرف بصورة مناسبة عند حدوث حادث',
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
          'text_ar' => 'أعرف الجهات المسؤولة عن إدارة الأزمات والطوارئ',
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
          'low_threshold' => 7,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك مستعد بدرجة جيدة للتعامل مع حالات الطوارئ، وتمتلك القدرة على التصرف السليم في المواقف الحرجة وتقليل آثارها السلبية.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك معرفة أساسية بإجراءات الطوارئ، إلا أنك تحتاج إلى مزيد من التدريب العملي والتطبيقات الميدانية لرفع مستوى جاهزيتك.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد لا تعرف الإجراءات المناسبة للتعامل مع الحوادث أو الطوارئ، وقد تواجه صعوبة في اتخاذ القرارات السريعة والصحيحة في المواقف الحرجة.',
        ),
      ),
    ),
    4 =>
    array (
      'name_ar' => 'البعد الخامس: الثقافة التنظيمية للسلامة',
      'max_score' => 10,
      'order_index' => 4,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'تشجع الإدارة العاملين على الالتزام بالسلامة المهنية',
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
          'text_ar' => 'تتم مناقشة قضايا السلامة بشكل دوري',
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
          'text_ar' => 'يتم التعامل بجدية مع المخاطر المهنية المُبلَّغ عنها',
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
          'text_ar' => 'تتوفر برامج تدريبية منتظمة في السلامة المهنية',
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
          'text_ar' => 'يسود التعاون بين العاملين لتعزيز بيئة عمل آمنة',
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
          'low_threshold' => 7,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تسهم بفاعلية في دعم ثقافة السلامة داخل المؤسسة، وتشجع الآخرين على الالتزام بالممارسات الآمنة، وتدرك أهمية العمل الجماعي في الحد من المخاطر المهنية.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تدعم ممارسات السلامة بدرجة مقبولة، إلا أنك تحتاج إلى زيادة مشاركتك وتأثيرك الإيجابي في نشر ثقافة السلامة بين زملائك.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن دورك في دعم ثقافة السلامة داخل المؤسسة ما زال محدودًا، وقد لا تشارك بصورة فعالة في الأنشطة أو المبادرات المتعلقة بالسلامة المهنية.',
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
      'description_ar' => 'تشير نتيجتك إلى أنك تتمتع بمستوى مرتفع من الوعي والالتزام بممارسات السلامة والصحة المهنية. كما أنك تدرك المخاطر المهنية المحتملة وتلتزم بالإجراءات الوقائية وتشارك في تعزيز بيئة عمل آمنة. وتعكس هذه النتيجة قدرتك على أن تكون عنصرًا داعمًا للسلامة داخل المؤسسة، وأن تسهم في نشر الثقافة الوقائية بين زملائك وتحسين ممارسات السلامة في بيئة العمل.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 17,
      'high_threshold' => 33,
      'description_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى جيدًا من المعرفة والممارسات المتعلقة بالسلامة والصحة المهنية، إلا أن هناك بعض الجوانب التي تحتاج إلى مزيد من التطوير. وقد تكون ملتزمًا بإجراءات السلامة في معظم الأوقات، لكنك بحاجة إلى تعزيز مهاراتك في التعامل مع المخاطر والطوارئ وتطبيق إجراءات السلامة بصورة أكثر كفاءة. كما تدل النتيجة على أنك تمتلك أساسًا جيدًا يمكن البناء عليه للوصول إلى مستوى متقدم في السلامة المهنية.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 16,
      'description_ar' => 'تشير نتيجتك إلى أنك قد لا تمتلك المعرفة الكافية بالمخاطر المهنية الموجودة في بيئة عملك، أو أنك لا تطبق إجراءات السلامة بصورة منتظمة. وقد تواجه صعوبة في التعامل مع المواقف الطارئة أو الاستجابة للحوادث المهنية بالشكل المطلوب. كما تدل النتيجة على حاجتك إلى تنمية مهاراتك الأساسية في مجال السلامة والصحة المهنية، مما يساعدك على حماية نفسك وزملائك وتقليل احتمالية التعرض للإصابات أو الحوادث أثناء العمل.',
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