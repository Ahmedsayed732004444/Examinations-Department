<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment2Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'هل لديك سمات القائد التحويلي؟',
  'category' => 'القيادة والإدارة',
  'description_ar' => 'يهدف هذا المقياس إلى مساعدتك في التعرف على مدى توفر السمات المرتبطة بالقيادة التحويلية لديك، وهي السمات التي تساعد القائد على إلهام الآخرين، وتحفيزهم نحو التطور والإنجاز، وتشجيع التفكير الإبداعي، وبناء علاقات إيجابية قائمة على الثقة والاحترام. ستسهم نتائج المقياس في زيادة وعيك بنقاط قوتك وفرص التطوير المتاحة أمامك، مما يساعدك على تعزيز قدراتك القيادية والشخصية وتحقيق تأثير إيجابي أكبر في محيطك العملي والاجتماعي.',
  'programs_ar' => 'القيادة التحويلية المتقدمة، التفكير الاستراتيجي، إدارة التغيير، الذكاء العاطفي، الابتكار والقيادة الإبداعية، الإرشاد والتوجيه القيادي، مهارات الاتصال القيادي، بناء الرؤية والأهداف الاستراتيجية، التحفيز وبناء فرق العمل، التمكين القيادي وتفويض الصلاحيات، التغذية الراجعة والتوجيه المهني',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'التأثير القائم على القدوة (الكاريزما)',
      'max_score' => 8,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'يتحلى سلوكي بالقيم المثلى في العمل.',
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
          'text_ar' => 'أثق في قدراتي للتغلب على العقبات التي تواجه المرؤوسين.',
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
          'text_ar' => 'لدي موهبة خاصة في معرفة ما هو المهم بالنسبة للعمل.',
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
          'text_ar' => 'أجعل كل من حولي متحمسًا حول المهام الموكلة لهم.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بمستوى مرتفع من التأثير القائم على القدوة (الكاريزما)، وتمثل نموذجًا يُحتذى به في السلوك الأخلاقي لأتباعك، الذين يثقون بك وبقراراتك وبنزاهة عملك. تبرز قدرتك على الإقناع من خلال ثباتك على القيم والمبادئ عند مواجهة القضايا الصعبة، والتزامك بالأهداف السامية والقرارات الأخلاقية. وبفضل حرصك على تقديم مصلحة أتباعك على مصلحتك الشخصية، وتضحيتك في سبيل الصالح العام، حظيت بتقديرهم واحترامهم العميق. أنت قائد يمتلك رؤية ملهمة، وتتجنب استخدام السلطة لتحقيق مكاسب شخصية، بل توظفها لتحفيز الآخرين نحو تحقيق الرؤية المشتركة، وتشجعهم على الإبداع والتعبير عن آرائهم بحرية، مما يجعلهم أكثر حماسًا والتزامًا بمهامهم.

ننصحك بالاستمرار على هذا النهج المتميز، ومواصلة تطوير ذاتك من خلال جهات مختصة.',
          'high_threshold' => 999,
          'low_threshold' => 6,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى متوسط من حيث التأثير القيادي (الكاريزما)؛ فأنت تمثل قدوة أخلاقية لأتباعك بدرجة متوسطة، مما يجعلهم يثقون في قراراتك وأعمالك بمستوى معتدل. تبرز مهاراتك في الإقناع، وتأكيد القيم والأهداف، والالتزام بالمعايير الأخلاقية، واتخاذ مواقف حازمة في القضايا الصعبة، إلا أن ذلك يحتاج إلى مزيد من التركيز لتعزيزه. كما تحظى بقدر متوسط من احترام وتقدير أتباعك، حيث تسعى لتقديم رؤية قائمة على الاهتمام بالآخرين وتغليب احتياجاتهم على مصلحتك الشخصية، لكن لا تزال هذه الممارسات بحاجة إلى تطوير.

نوصيك بالعمل على رفع مستوى التزامك بهذه المعايير الأخلاقية وتطوير رؤيتك لتكون نموذجًا ملهمًا يقود الآخرين نحو الأهداف المشتركة بفعالية أكبر.',
          'high_threshold' => 5,
          'low_threshold' => 3,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى تأثيرك كقدوة أخلاقية لدى مرؤوسيك منخفض؛ فهم لا يثقون بك ولا بقراراتك، وذلك لغياب ممارسات الإقناع، وتعزيز الثقة، واتخاذ المواقف الحاسمة في القضايا الصعبة، أو تبني القيم والأهداف الجوهرية والالتزام بالمعايير الأخلاقية. وبسبب تركيزك على مصالحك الشخصية بدلًا من تقديم رؤية ملهمة أو إعطاء الأولوية لاحتياجات تابعيك والتضحية لأجلهم، فقد افتقرت إلى احترامهم وتقديرهم. لذا، فإنك لا تشكل قدوة حسنة ولا تمتلك القدرة على قيادة الآخرين أو تحفيزهم على اتباعك.

يتوجب عليك تطوير مهاراتك من خلال التدريب المتخصص.',
          'high_threshold' => 2,
          'low_threshold' => 0,
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'الحفز الإلهامي',
      'max_score' => 12,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أربط تحقيق أهداف العمل بالقيم المثلى.',
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
          'text_ar' => 'أجعل المرؤوسين يتصرفون كقادة.',
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
          'text_ar' => 'أشجع على تفهّم وجهات نظر الآخرين.',
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
          'text_ar' => 'أجعل المرؤوسين يشعرون بأهمية العمل الذي يقومون به.',
          'order_index' => 7,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أعمل على تنمية روح الفريق الواحد بين العاملين.',
          'order_index' => 8,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أخلق نوعًا من التحدي في العمل لتحقيق أداء أفضل.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بمهارة عالية في الحفز الإلهامي؛ فلديك قدرة متميزة على دفع المرؤوسين نحو مستويات أداء استثنائية، وصياغة رؤية مستقبلية مقنعة يتبناها التابعون ويسعون لتحقيقها. وبفضل قدرتك على الارتقاء بتوقعاتهم، تستطيع الوصول إلى نتائج تفوق الأهداف المخططة، كما تبرع في إضفاء المعنى على مهامهم وتحديد التحديات المهنية التي تواجههم. أنت تلهم فريقك بتقديم صورة طموحة للمستقبل، وتُظهر تفاؤلًا وحماسًا يغرس روح التحدي، مع بناء علاقات قوية تعزز الصمود أمام الصعوبات، مما يحوّل المخاطر إلى فرص والضعف إلى قوة. إن سلوكك الشخصي يُعدّ قدوة تحفز التابعين على الالتزام بالرؤية التنظيمية واستكشاف الفرص الجديدة.

ننصحك بالاستمرار على هذا المستوى المتميز من خلال جهات مختصة.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرات متوسطة في الحفز الإلهامي؛ إذ تملك درجة معتدلة من القدرة على تحفيز المرؤوسين لبلوغ مستويات أداء أعلى، وتوصيل رؤية مستقبلية مقنعة لهم، والارتقاء بتوقعاتهم لتحقيق نتائج تفوق الخطط الموضوعة. كما يمكنك -بدرجة متوسطة- تحديد أهداف العمل والتحديات المهنية للموظفين، وبث روح التفاؤل والحماس لديهم، وإثارة روح التحدي من خلال سلوكك المهني، وتشجيعهم على تبني الرؤية التنظيمية للمؤسسة.

ننصحك بالعمل على تطوير هذه الجوانب لتعزيز مهاراتك القيادية.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى الحفز الإلهامي لديك منخفض؛ إذ تفتقر إلى القدرة على دفع مرؤوسيك نحو تحقيق مستويات أداء أعلى، وتعجز عن صياغة رؤية مستقبلية مقنعة لهم. كما تضعف قدرتك على الارتقاء بتوقعاتهم، مما يحول دون تحقيق نتائج تتجاوز الأداء المخطط، فضلًا عن عدم قدرتك على توضيح المعنى الحقيقي لمهامهم أو فهم التحديات المهنية التي يواجهونها. إنك لا تلهمهم برؤية طموحة، ولا تبث فيهم التفاؤل والحماس، أو تدفعهم لمواجهة التحديات، كما تفتقر إلى بناء علاقات قوية أو تشجيع الصمود أمام الصعاب، فلا تحوّل المخاطر إلى فرص أو الضعف إلى قوة.

ننصحك بالعمل على تحديد نقاط ضعفك والتركيز على تطوير مهاراتك من خلال تدريب تخصصي.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'الاستثارة العقلية',
      'max_score' => 14,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أجعل جميع مشكلات العمل قابلة للحل.',
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
          'text_ar' => 'أهتم باكتشاف طرق جديدة لأداء العمل بكفاءة أكثر.',
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
          'text_ar' => 'أشجع على التفكير في التعامل مع أمور العمل بطرق جديدة.',
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
          'text_ar' => 'آخذ الاقتراحات التي يقدمها فريق العمل وأضعها موضع التنفيذ.',
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
          'text_ar' => 'أشجع على التعبير عن آراء وأفكار المرؤوسين.',
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
          'text_ar' => 'أتعامل مع الأخطاء على أنها تجارب عمل مفيدة.',
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
          'text_ar' => 'أعطي وجهات نظر جديدة للأمور التي كانت بالنسبة للمرؤوسين صعبة.',
          'order_index' => 16,
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى متقدمًا في الاستثارة العقلية. تبرز كشخص يلهم فريقه ويحفزهم على التفكير النقدي والإبداعي، مما يضع الابتكار في صلب استراتيجية تطوير المؤسسة. من خلال استعمالك لأسلوب التقمص العاطفي، تستمع إلى أفكار مرؤوسيك ومقترحاتهم، وتتفاعل معهم على المستوى العاطفي، مما يشجعهم على إيجاد حلول مبتكرة لمشكلات المنظمة عبر الحوار وتقديم الأدلة الداعمة لهذه الحلول. كما تسعى لإبعاد فريقك عن الأفكار التقليدية والممارسات المعتادة، وتحثهم على تحديد الحقائق بوضوح والانطلاق نحو التغيير. تشجعهم على المبادرة والتفكير المختلف، وتدفعهم للتعامل مع التحديات من زوايا متعددة وإيجاد طرق جديدة لمعالجتها. بالإضافة إلى ذلك، تعمل على تطوير مهاراتهم في حل المشكلات وتحفيزهم على الابتكار والإبداع، مما يعزز شعورهم بأن تفاعلهم معك يسهم في تطورهم على المستويين الفكري والثقافي، مع تجنب النقد العلني لأي خطأ قد يحدث داخل المجموعة، وبدلًا من ذلك تشجع أعضاء الفريق على تقديم أفكار جديدة وتجربة أساليب مبتكرة دون الخوف من التعرض للنقد.

استمر في الحفاظ على هذا النهج المتميز لتحقيق المزيد من النجاحات.',
          'high_threshold' => 999,
          'low_threshold' => 10,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى متوسط في التحفيز العقلي، تقوم بدعم المرؤوسين بدرجة متوسطة ليبحثوا في طرق أداء العمليات المتميزة عبر طرح الأسئلة، مما يسهل الإبداع والابتكار في خطة تطوير المنظمة، وذلك من خلال ممارستك لأسلوب التقمص العاطفي عبر الاستماع لآرائهم وأفكارهم ومشاركتهم مشاعرهم ومشاريعهم، وهذا لتحفيزهم على إيجاد حلول جديدة لمشكلات المنظمة من خلال الحوار وتقديم الأدلة والبراهين الداعمة للحلول. وتطلب من مرؤوسيك الابتعاد عن الماضي وتوضيح الحقائق التي يعتقدون بها بوضوح بدرجة متوسطة، وتحفز جماعتك على المبادرة والابتكار والإبداع، من خلال تشجيعهم على تغيير أسلوب التفكير في المشكلات الموجودة، والتعامل معها بأساليب جديدة، والنظر إليها من زوايا مختلفة. وأنت تقوم بتطوير مهارات الأفراد في حل المشكلات وتشجعهم على الإبداع بحيث يشعر الفرد أن تواصله معك واحتكاكه بك يؤدي إلى نموه الذهني والثقافي بدرجة متوسطة، وأنت قادر بدرجة متوسطة على تنمية أفكارهم وتعزيز ثقافتهم ورفعهم إلى مستويات جديدة من التفكير والإبداع. وتتجنب الانتقاد العام لأي عضو في المجموعة في حال حدوث خطأ، وتحث الأعضاء على تقديم أفكار جديدة وتجربة مناهج جديدة، ولا تُعرّض أفكارهم للنقد إلا بدرجة متوسطة.

ننصحك بمحاولة تحسينها.',
          'high_threshold' => 9,
          'low_threshold' => 5,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى حماسك العقلي لديك ضعيف، إذ إنك لا تدفع المرؤوسين للتفكير بطرق جديدة تؤدي إلى عمليات متميزة، مما يمنع الإبداع والابتكار من أن يكونا في صميم استراتيجية تطوير المنظمة، ولا تمارس التعاطف من خلال الاستماع لأفكارهم ومقترحاتهم ومشاركتهم مشاعرهم ومشاريعهم، ولا تشجعهم على إيجاد حلول جديدة لمشكلات المنظمة من خلال الحوار وتقديم الأدلة المؤيدة للحلول. ولا تدفع مرؤوسيك لتجاوز الماضي وتوضيح الحقائق التي يؤمنون بها بشكل واضح، ولا تشجعهم على المبادرة والابتكار، ولا تحفزهم على تغيير طريقة تفكيرهم في المشكلات الحالية وتناولها بطرق جديدة ورؤيتها من زوايا مختلفة، ولا تعمل على تطوير مهارات الأفراد في حل المشكلات وتحفزهم على الإبداع بما يجعلهم يشعرون أن التواصل معك يساعد في تطورهم الفكري والثقافي. وأنت غير قادر على تحفيز أفكارهم ورفع ثقافتهم للوصول إلى مستويات جديدة من التفكير والإبداع، وتنتقد الأعضاء في المجموعة في حال وقوع خطأ، ولا تدفع الأعضاء لتقديم أفكار جديدة وتجربة أساليب جديدة، ولا تسمح أبدًا بنقد أفكارهم.

يجب أن تحدد نقاط ضعفك وتطور مهاراتك من خلال التدريب المتخصص.',
          'high_threshold' => 4,
          'low_threshold' => 0,
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'الاهتمام الفردي',
      'max_score' => 16,
      'order_index' => 3,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'عندما يحتاجني الموظف يصل إليّ بسهولة.',
          'order_index' => 17,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أكلّف الموظف بالمهام وفقًا لقدراته.',
          'order_index' => 18,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أراعي الفروق الفردية بين المرؤوسين.',
          'order_index' => 19,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أحاول معرفة ما يريده الموظف وأحاول مساعدته على الحصول عليه.',
          'order_index' => 20,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أعطي اهتمامًا شخصيًا لأولئك الأعضاء الذين يبدو أنهم منعزلون.',
          'order_index' => 21,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أقدّر مجهودات المرؤوسين في العمل.',
          'order_index' => 22,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 =>
        array (
          'text_ar' => 'أشجع على تطوير قدرات المرؤوسين في العمل.',
          'order_index' => 23,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 =>
        array (
          'text_ar' => 'أساعد المرؤوسين في الحصول على احتياجاتهم الوظيفية.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك ذو مستوى مرتفع في الاهتمام الفردي، من ناحية اهتمامك الشخصي بالمرؤوسين، وإدراكك للفروق الفردية بينهم، وتعاملك مع كل موظف وفقًا لظروفه الخاصة، وعملك على تدريبهم وإرشادهم نحو تحقيق المزيد من النمو والتطور. كما أنك تعطي اهتمامًا شخصيًا لحاجات كل فرد لتحقيق الإنجاز والنمو من خلال سلوكك كمدرب وناصح ومتابع، وتعامل كل فرد بصفة مستقلة، وتساهم في حل مشكلاته والوقوف إلى جانبه، وتعترف بالفروق الفردية من حيث الاحتياجات والقدرة على الأداء، وتحرص على إيجاد نظام اتصال فاعل بينك وبين الأفراد.

ننصحك بالاستمرار على هذا المستوى.',
          'high_threshold' => 999,
          'low_threshold' => 12,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك اهتمامًا متوسطًا بالجانب الفردي للمرؤوسين؛ فأنت تدرك الفروق الفردية بينهم وتتعامل مع كل موظف وفقًا لظروفه الخاصة، وتسعى لتوجيههم وتدريبهم لتحقيق النمو والتطور. كما أنك تولي اهتمامًا شخصيًا أحيانًا لاحتياجات الأفراد من خلال دورك كمدرب وناصح ومتابع، وتتعامل مع كل فرد بصفة مستقلة أحيانًا، وتساهم في حل مشكلاته ودعمه أحيانًا، مع إدراكك لتفاوت الاحتياجات والقدرات بين الموظفين، وحرصك أحيانًا على بناء قنوات اتصال فاعلة والاستماع الجيد لهم.

ننصحك بالعمل على تطوير هذه المهارات وتعزيزها.',
          'high_threshold' => 11,
          'low_threshold' => 5,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى الاهتمام الفردي لديك منخفض، من ناحية اهتمامك الشخصي بالمرؤوسين، وإدراكك للفروق الفردية بينهم، وتعاملك مع كل موظف وفقًا لظروفه الخاصة، وعملك على تدريبهم وإرشادهم نحو تحقيق المزيد من النمو والتطور. كما أنك لا تعطي اهتمامًا شخصيًا لحاجات كل فرد لتحقيق الإنجاز والنمو من خلال سلوكك كمدرب وناصح ومتابع، ولا تعامل كل فرد بصفة مستقلة، ولا تساهم في حل مشكلاته والوقوف إلى جانبه، ولا تعترف بالفروق الفردية من حيث الاحتياجات والقدرة على الأداء، ولا تحرص على إيجاد نظام اتصال فاعل بينك وبين الأفراد.

عليك أن تحدد نقاط ضعفك وأن تنمي مهاراتك بالتدريب المتخصص.',
          'high_threshold' => 4,
          'low_threshold' => 0,
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
      'low_threshold' => 40,
      'high_threshold' => 50,
      'description_ar' => 'تشير نتيجتك إلى أنك ذو مستوى مرتفع في القيادة التحويلية؛ حيث تسعى إلى زيادة وعي مرؤوسيك باحتياجاتهم، وتحويل هذا الوعي إلى آمال وتوقعات، فتتولد لديهم الدافعية لإشباع حاجاتهم المتعلقة بإدراك وتحقيق الذات في حياتهم العملية. وتسعى إلى الارتقاء بمستوى مرؤوسيك من أجل الإنجاز والتطور الذاتي، والعمل على تنمية وتطوير الجماعات والمنظمة ككل. وتتوافر لديك القدرة على توصيل رؤية واضحة، والعقلانية في حل المشكلات، وتعطي اهتمامًا شخصيًا للمرؤوسين. هذا المستوى يؤهلك للانتقال من مرحلة امتلاك السمات القيادية إلى مرحلة توظيفها لتحقيق نتائج تنظيمية مستدامة.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 25,
      'high_threshold' => 39,
      'description_ar' => 'تشير نتيجتك إلى أن مهاراتك القيادية التحويلية متوسطة؛ فأنت تسعى بدرجة متوسطة إلى إحداث التغيير في الأداء والأنشطة، والتخلي عن بيروقراطية العمل، والاستماع إلى الموظفين، واهتمامك بكافة فئات العاملين ورعايتهم جاء بدرجة متوسطة. كما أن اتصافك بالشجاعة والدافعية للعمل والقدرة على الإقناع والإقدام بموضوعية وفق خطوات محسوبة ومدروسة كان بدرجة متوسطة. تمتلك بعض خصائص القيادة التحويلية، لكنك تحتاج إلى تعميقها وتطبيقها بصورة أكثر فاعلية.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 24,
      'description_ar' => 'تشير نتيجتك إلى أن مستوى مهارات القيادة التحويلية لديك منخفض؛ فليس لديك رؤية واضحة لضرورة التغيير والتطلع إلى المستقبل، ولا تمتلك شخصية جذابة ومؤثرة تستطيع من خلالها التأثير في سلوكيات العاملين وتوسيع مشاركتهم، كما لا تمتلك السرعة في الاستجابة للتعامل مع أي أمر طارئ. ولا تستطيع تغيير قيم ودوافع مرؤوسيك الحالية وتحويلها للصالح العام للمنظمة من خلال صياغة رؤية مستقبلية تدعم وضع المنظمة المستقبلي.',
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