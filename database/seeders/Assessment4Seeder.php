<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment4Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'تحفيز العاملين ومكافأتهم: كيف تحفز موظفيك؟',
  'category' => 'القيادة والإدارة',
  'description_ar' => 'يساعدك هذا المقياس على التعرف إلى مدى استخدامك لأساليب تحفيز الموظفين وتشجيعهم على الأداء والإنجاز. ولا يهدف إلى إصدار حكم عليك أو تقييمك بشكل رسمي، بل يهدف إلى مساعدتك على اكتشاف نقاط القوة التي تمتلكها في تحفيز فريق العمل، والجوانب التي يمكنك تطويرها لتعزيز دافعية الموظفين ورضاهم وإنتاجيتهم.',
  'programs_ar' => 'القيادة التحفيزية الفعالة، التقدير الوظيفي وإدارة المكافآت، التغذية الراجعة وبناء ثقافة التقدير، إدارة الأداء والتحفيز المستدام، أساسيات القيادة وإدارة العاملين، مهارات التواصل القيادي المؤثر، التحفيز العملي للعاملين، العدالة التنظيمية وإدارة المكافآت',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'التحفيز المعنوي',
      'max_score' => 16,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أحرص على الإشادة بإنجازات العاملين بشكل منتظم.',
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
          'text_ar' => 'أعبّر عن تقديري لجهود العاملين أمام زملائهم عند استحقاق ذلك.',
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
          'text_ar' => 'أشجع العاملين على تطوير مهاراتهم وقدراتهم المهنية.',
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
          'text_ar' => 'أستمع إلى أفكار العاملين ومقترحاتهم باهتمام.',
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
          'text_ar' => 'أوفر بيئة عمل تشجع على المبادرة والإبداع.',
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
          'text_ar' => 'أحرص على إشراك العاملين في القرارات التي تمس أعمالهم.',
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
          'text_ar' => 'أشجع العاملين عند مواجهة التحديات والصعوبات.',
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
          'text_ar' => 'أعمل على تعزيز روح الانتماء والولاء لدى العاملين.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تولي اهتمامًا كبيرًا بالجوانب المعنوية التي تعزز دافعية العاملين. أنت تدرك أن التقدير والاحترام والاستماع إلى الأفكار والمشاركة في اتخاذ القرار من العوامل الأساسية التي ترفع مستوى الحماس والانتماء. كما أنك تهيئ بيئة عمل تشجع العاملين على المبادرة والإبداع وتمنحهم الشعور بأهمية دورهم داخل الفريق.

للمحافظة على هذا المستوى، استمر في تعزيز التواصل الإيجابي مع العاملين، وطوّر أساليب التقدير بما يتناسب مع احتياجاتهم وتوقعاتهم المختلفة.',
          'high_threshold' => 999,
          'low_threshold' => 11,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمارس بعض أساليب التحفيز المعنوي بصورة جيدة، إلا أن هذه الممارسات قد لا تكون منتظمة أو شاملة لجميع العاملين. قد يجد بعض العاملين الدعم والتقدير الذي يحتاجونه، بينما لا يحظى آخرون بالمستوى نفسه من الاهتمام.

من المفيد أن تزيد من فرص التواصل المباشر مع العاملين، وأن تمنح التقدير والتشجيع مساحة أكبر ضمن ممارساتك القيادية اليومية، مع الحرص على إشراك العاملين في مناقشة القضايا المتعلقة بعملهم.',
          'high_threshold' => 10,
          'low_threshold' => 6,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن التحفيز المعنوي لا يمثل جانبًا بارزًا في ممارساتك الحالية. وقد يؤدي ذلك إلى انخفاض الحماس والشعور بالتقدير لدى العاملين، مما ينعكس على مستوى التزامهم وأدائهم.

تحتاج إلى التركيز بصورة أكبر على الإشادة بالجهود والإنجازات، والاستماع إلى العاملين، وإظهار الاهتمام بأفكارهم واحتياجاتهم المهنية. إن تعزيز التحفيز المعنوي يُعد من أقل وسائل التحفيز تكلفة وأكثرها تأثيرًا في رفع الدافعية.',
          'high_threshold' => 5,
          'low_threshold' => 0,
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'العدالة في المكافآت والتقدير',
      'max_score' => 16,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أطبّق معايير واضحة وعادلة عند منح المكافآت.',
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
          'text_ar' => 'أوضح للعاملين أسباب منح المكافآت أو عدم منحها.',
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
          'text_ar' => 'أكافئ الأداء المتميز بغض النظر عن الاعتبارات الشخصية.',
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
          'text_ar' => 'أشعر أن العاملين يدركون عدالة نظام المكافآت في فريق العمل.',
          'order_index' => 11,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أربط المكافآت بمستوى الإنجاز الفعلي.',
          'order_index' => 12,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أتجنب التحيز أو المحاباة عند تقديم الحوافز.',
          'order_index' => 13,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 =>
        array (
          'text_ar' => 'أراجع آليات المكافآت بصورة دورية للتأكد من عدالتها.',
          'order_index' => 14,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 =>
        array (
          'text_ar' => 'أحرص على تكافؤ الفرص بين العاملين للحصول على المكافآت.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تحرص على تطبيق المكافآت والحوافز وفق معايير عادلة وواضحة. كما أنك تسعى إلى بناء الثقة بينك وبين العاملين من خلال الشفافية وتكافؤ الفرص وربط المكافآت بمستوى الإنجاز الفعلي. هذا المستوى يعكس وعيًا قياديًا بأهمية العدالة التنظيمية في تعزيز الرضا الوظيفي والدافعية.

استمر في مراجعة إجراءات المكافآت بصورة دورية للتأكد من استمرار عدالتها ومواءمتها.',
          'high_threshold' => 999,
          'low_threshold' => 11,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى وجود جهود واضحة لتحقيق العدالة في المكافآت، إلا أن بعض الجوانب قد تحتاج إلى مزيد من الوضوح أو الاتساق. فقد تكون معايير المكافآت غير معلنة بشكل كافٍ، أو قد تختلف آليات التطبيق من موقف إلى آخر.

ينبغي عليك تعزيز الشفافية في توضيح أسس منح المكافآت، والتأكد من أن جميع العاملين يدركون المعايير التي يتم الاستناد إليها في التقدير والتحفيز.',
          'high_threshold' => 10,
          'low_threshold' => 6,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى وجود تحديات في تطبيق العدالة المتعلقة بالمكافآت والتقدير. وقد يؤدي ذلك إلى شعور بعض العاملين بعدم المساواة أو ضعف الثقة في آليات التقدير المعتمدة.

أنت بحاجة إلى مراجعة نظام المكافآت المتبع لديك، ووضع معايير واضحة ومعلنة للجميع، والحرص على ربط المكافآت بالأداء والإنجاز الفعلي بعيدًا عن أي اعتبارات شخصية أو غير موضوعية.',
          'high_threshold' => 5,
          'low_threshold' => 0,
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'الحوافز المادية وغير المادية',
      'max_score' => 16,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أستخدم أكثر من أسلوب لتحفيز العاملين (مادي ومعنوي).',
          'order_index' => 16,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أحرص على مكافأة الإنجازات الاستثنائية في الوقت المناسب.',
          'order_index' => 17,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أقدم فرص تطوير أو تدريب للعاملين المتميزين.',
          'order_index' => 18,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أمنح العاملين صلاحيات أو مسؤوليات أكبر كمكافأة للتميز.',
          'order_index' => 19,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أراعي احتياجات العاملين المختلفة عند تقديم الحوافز.',
          'order_index' => 20,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أتابع أثر الحوافز على أداء العاملين ومستوى رضاهم.',
          'order_index' => 21,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 =>
        array (
          'text_ar' => 'أستخدم الحوافز لتعزيز العمل الجماعي وليس الإنجاز الفردي فقط.',
          'order_index' => 22,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 =>
        array (
          'text_ar' => 'أعمل على استمرارية برامج التحفيز وعدم اقتصارها على مناسبات محددة.',
          'order_index' => 23,
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستخدم مجموعة متنوعة من الحوافز التي تلبي احتياجات العاملين المختلفة. فأنت لا تقتصر على المكافآت المادية فقط، بل توظف أيضًا الحوافز المعنوية وفرص التطوير والتدريب والتفويض والتمكين. يعكس ذلك قدرتك على التعامل مع الفروق الفردية بين العاملين وتوظيف الحوافز بصورة تسهم في رفع الأداء والمحافظة على الدافعية على المدى الطويل.',
          'high_threshold' => 999,
          'low_threshold' => 11,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستخدم بعض أساليب الحوافز بشكل جيد، إلا أن التنوع أو الاستمرارية في تطبيقها ما زالت بحاجة إلى تطوير. وقد تعتمد في بعض الأحيان على نوع واحد من الحوافز أكثر من غيره.

يمكنك زيادة فاعلية ممارساتك من خلال تنويع الحوافز وتخصيصها بما يتناسب مع احتياجات العاملين المختلفة، ومتابعة أثرها على مستوى الأداء والرضا الوظيفي.',
          'high_threshold' => 10,
          'low_threshold' => 6,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى محدودية استخدام الحوافز المادية وغير المادية أو عدم الاستفادة الكاملة منها في إدارة العاملين. وقد يؤدي ذلك إلى انخفاض مستوى الحماس والشعور بقلة التقدير لدى بعض العاملين.

ينبغي عليك توسيع دائرة الحوافز المستخدمة، والاهتمام بالمكافآت المعنوية وفرص النمو المهني إلى جانب الحوافز المادية، بما يسهم في تعزيز الالتزام والأداء.',
          'high_threshold' => 5,
          'low_threshold' => 0,
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'متابعة الأداء والتحفيز المستدام',
      'max_score' => 12,
      'order_index' => 3,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أحدد أهدافًا واضحة للعاملين يمكن قياسها ومتابعتها.',
          'order_index' => 24,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أقدم تغذية راجعة بناءة للعاملين بشكل مستمر.',
          'order_index' => 25,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أناقش مع العاملين سبل تحسين أدائهم وتطويره.',
          'order_index' => 26,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أحتفل بالإنجازات الفردية والجماعية عند تحققها.',
          'order_index' => 27,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أتعرف على أسباب انخفاض الدافعية لدى العاملين وأسعى لمعالجتها.',
          'order_index' => 28,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أعمل على بناء ثقافة تقدير وتحفيز داخل فريق العمل.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتبنى نهجًا مستدامًا في تحفيز العاملين من خلال المتابعة المستمرة للأداء وتقديم التغذية الراجعة والتوجيه المناسب. كما أنك تهتم بالاحتفاء بالإنجازات ومعالجة أسباب انخفاض الدافعية قبل تفاقمها. هذا المستوى يعكس فهمًا متقدمًا لدور القائد في المحافظة على الحافزية وتحويل التحفيز إلى ثقافة عمل مستمرة وليست مجرد ممارسات مؤقتة.',
          'high_threshold' => 999,
          'low_threshold' => 9,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتابع أداء العاملين وتقدم لهم الدعم في بعض المواقف، إلا أن هذه الممارسات قد لا تتم بصورة منتظمة أو منهجية، وقد يؤدي ذلك إلى تفاوت مستويات الدافعية بين العاملين.

من المهم أن تجعل التغذية الراجعة والمتابعة الدورية جزءًا أساسيًا من عملك القيادي، وأن تحرص على الاحتفاء بالإنجازات ومعالجة المشكلات التي تؤثر على الدافعية في وقت مبكر.',
          'high_threshold' => 8,
          'low_threshold' => 5,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن متابعة الأداء والتحفيز المستدام لا تحظى بالاهتمام الكافي ضمن ممارساتك القيادية الحالية. وقد يؤدي ذلك إلى ضعف وضوح التوقعات لدى العاملين، وتراجع الحافزية بمرور الوقت.

أنت بحاجة إلى وضع أهداف واضحة للعاملين، وتقديم تغذية راجعة منتظمة، ومناقشة فرص التطوير والتحسين معهم بشكل مستمر. كما أن الاحتفاء بالنجاحات ومعالجة أسباب انخفاض الدافعية سيساعدانك على بناء بيئة عمل أكثر إيجابية واستقرارًا.',
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
      'low_threshold' => 41,
      'high_threshold' => 999,
      'description_ar' => 'تشير نتيجتك إلى أنك تمارس دورًا قياديًا فعالًا في تحفيز العاملين وتقدير جهودهم. أنت غالبًا تدرك أهمية التحفيز بوصفه أداة استراتيجية لرفع الأداء وتعزيز الانتماء المؤسسي. كما أنك تستخدم أساليب متنوعة للمكافأة والتقدير وتسعى إلى تحقيق العدالة والشفافية في التعامل مع العاملين.

ورغم هذا المستوى المرتفع، فإن المحافظة على هذا الأداء تتطلب منك الاستمرار في متابعة احتياجات العاملين المتغيرة، وتطوير أساليب التحفيز بما يتناسب مع تطلعاتهم ومستجدات بيئة العمل. احرص على تقييم أثر برامج التحفيز بصورة دورية والتأكد من وصولها إلى جميع العاملين بعدالة وفاعلية.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 21,
      'high_threshold' => 40,
      'description_ar' => 'تشير نتيجتك إلى أن لديك ممارسات إيجابية في مجال التحفيز والمكافآت، إلا أن تطبيقها لا يزال بحاجة إلى مزيد من الاتساق والانتظام. قد تكون بعض أساليب التحفيز موجودة لديك، لكنها لا تُمارَس بصورة شاملة أو مستمرة مع جميع العاملين.

ينبغي عليك التركيز بشكل أكبر على تنويع أساليب التحفيز، وتعزيز العدالة والشفافية في منح المكافآت، وإشراك العاملين في بيئة عمل تشجع المبادرة والتميز. كما يوصى بأن تتابع أثر ممارساتك التحفيزية على أداء العاملين ورضاهم، وأن تجعل التقدير والتشجيع جزءًا ثابتًا من أسلوبك القيادي اليومي.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 20,
      'description_ar' => 'تشير نتيجتك إلى أن ممارسات التحفيز والمكافآت لديك محدودة أو غير منتظمة، الأمر الذي قد يؤثر سلبًا على دافعية العاملين ومستوى التزامهم وأدائهم. وقد يشعر بعض العاملين بعدم التقدير أو بعدم وضوح العلاقة بين الجهد المبذول والمكافأة المستحقة.

تحتاج إلى مراجعة أسلوبك الحالي في إدارة التحفيز والاعتراف بالإنجازات، والعمل على بناء نظام أكثر عدالة ووضوحًا واستمرارية. ابدأ بتقديم التغذية الراجعة الإيجابية بصورة منتظمة، وتقدير الإنجازات مهما كانت بسيطة، وإشراك العاملين في القرارات المتعلقة بعملهم، مع وضع معايير واضحة للمكافآت والحوافز. إن تطوير هذه الجوانب سيساعدك على رفع مستوى الدافعية وتحسين الأداء الفردي والجماعي داخل فريق العمل.',
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