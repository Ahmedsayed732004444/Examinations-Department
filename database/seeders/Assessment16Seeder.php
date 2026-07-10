<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment16Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مقياس مهارات الاتصال',
  'category' => 'مقاييس الاتصال والعلاقات المهنية',
  'description_ar' => 'صُمم هذا المقياس لمساعدتك على التعرف إلى مستوى مهارات الاتصال لديك في عدد من الجوانب الأساسية التي تؤثر في تفاعلك اليومي مع الآخرين، مثل الاستماع الفعال، والتعبير اللفظي، والتواصل غير اللفظي، والذكاء العاطفي في الاتصال، والإقناع والتأثير، وإدارة العلاقات الاجتماعية. ويهدف إلى تزويدك بصورة واضحة عن نقاط القوة التي تمتلكها والجوانب التي قد تحتاج إلى مزيد من التطوير، بما يسهم في تعزيز كفاءتك التواصلية وتحسين جودة علاقاتك الشخصية والمهنية.',
  'programs_ar' => 'القيادة التواصلية، التأثير والإقناع المتقدم، التفاوض الاحترافي، إدارة الحوار في المواقف المعقدة، مهارات التحدث أمام الجمهور، العرض والتقديم الاحترافي، الذكاء العاطفي المتقدم في بيئات العمل، التواصل القيادي وإدارة الفرق، الإرشاد والتوجيه المهني، مهارات التيسير وإدارة الاجتماعات وورش العمل، أساسيات مهارات الاتصال والتواصل، مهارات الاستماع الفعال، التعبير عن الذات وبناء الثقة بالنفس، إدارة الانفعالات أثناء التواصل، بناء العلاقات الاجتماعية الإيجابية، حل المشكلات وإدارة الخلافات، لغة الجسد والتواصل غير اللفظي، مهارات الاتصال الفعال المتقدمة، مهارات العرض والتقديم، الذكاء العاطفي في بيئة العمل، مهارات الحوار وإدارة النقاش، التواصل غير اللفظي ولغة الجسد، مهارات العمل الجماعي والتعاون',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'البعد الأول: مهارات الاستماع الفعال',
      'max_score' => 20,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أركز انتباهي على المتحدث حتى ينتهي من حديثه.',
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
          'text_ar' => 'أتجنب مقاطعة الآخرين أثناء الكلام.',
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
          'text_ar' => 'أستوعب الأفكار الرئيسية من حديث الآخرين.',
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
          'text_ar' => 'أطلب التوضيح عندما لا أفهم ما يقال.',
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
          'text_ar' => 'أظهر اهتمامي بالحديث من خلال الإيماءات المناسبة.',
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
          'text_ar' => 'أتذكر المعلومات المهمة التي أسمعها.',
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
          'text_ar' => 'أستطيع التمييز بين الحقائق والآراء أثناء الاستماع.',
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
          'text_ar' => 'أنتبه للمشاعر التي يعبر عنها المتحدث.',
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
          'text_ar' => 'أعيد صياغة ما سمعته للتأكد من فهمي الصحيح.',
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
          'text_ar' => 'أتفاعل مع المتحدث بطريقة تشجعه على الاستمرار.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بمهارات استماع فعالة. تنصت باهتمام للآخرين، وتفهم ما يرغبون في إيصاله، وتمنحهم الشعور بالتقدير والاحترام أثناء التواصل، مما يساعدك على بناء علاقات إيجابية ومثمرة.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مقبولًا من مهارات الاستماع. غالبًا ما تتمكن من فهم الأفكار الرئيسية في الحديث، إلا أنك قد لا تحافظ على هذا المستوى في جميع المواقف. ويمكن أن يسهم تطوير مهارات التركيز والاستماع العميق في زيادة فاعلية تواصلك.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مهارات الاستماع لديك تحتاج إلى مزيد من التطوير. قد تجد صعوبة في التركيز على حديث الآخرين أو فهم رسائلهم بصورة كاملة، مما قد يؤثر في جودة تواصلك وعلاقاتك. يساعدك تنمية مهارات الإنصات والانتباه والتفاعل مع المتحدث على تحسين فهمك للآخرين وتعزيز فعالية تواصلك.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'البعد الثاني: التعبير اللفظي',
      'max_score' => 20,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أعبر عن أفكاري بوضوح.',
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
          'text_ar' => 'أستخدم كلمات مناسبة للموقف.',
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
          'text_ar' => 'أشرح وجهة نظري بطريقة مفهومة.',
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
          'text_ar' => 'أرتب أفكاري قبل التحدث.',
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
          'text_ar' => 'أتحدث بثقة أمام الآخرين.',
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
          'text_ar' => 'أستطيع إيصال رسالتي دون غموض.',
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
          'text_ar' => 'أختار الوقت المناسب لطرح آرائي.',
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
          'text_ar' => 'أستخدم أمثلة لتوضيح أفكاري.',
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
          'text_ar' => 'أتكيف في حديثي مع مستوى المستمعين.',
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
          'text_ar' => 'أستطيع إدارة الحوار بفاعلية.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرة جيدة على التعبير عن أفكارك ومشاعرك بوضوح وثقة. وتستطيع إيصال رسالتك بطريقة منظمة ومفهومة، مما يعزز من جودة تواصلك مع الآخرين.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع التعبير عن أفكارك بدرجة مقبولة في العديد من المواقف. ومع ذلك، قد تواجه بعض الصعوبات في المواقف التي تتطلب دقة أكبر أو ثقة أعلى في الحديث. ويمكن أن يؤدي التدريب المستمر إلى تحسين قدرتك على التعبير والتأثير.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في التعبير الواضح عن أفكارك وآرائك. وربما تجد تحديات في تنظيم حديثك أو إيصال رسالتك بالصورة التي تقصدها. تطوير مهارات التحدث وتنظيم الأفكار سيساعدك على زيادة وضوحك وثقتك في التواصل.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'البعد الثالث: التواصل غير اللفظي',
      'max_score' => 20,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أحافظ على تواصل بصري مناسب أثناء الحديث.',
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
          'text_ar' => 'تتوافق تعبيرات وجهي مع ما أقوله.',
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
          'text_ar' => 'أستخدم لغة جسد إيجابية.',
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
          'text_ar' => 'ألاحظ الإشارات غير اللفظية لدى الآخرين.',
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
          'text_ar' => 'أستخدم نبرة صوت مناسبة للموقف.',
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
          'text_ar' => 'أتحكم في حركاتي أثناء التحدث.',
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
          'text_ar' => 'أستطيع تفسير بعض الرسائل غير اللفظية بدقة.',
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
          'text_ar' => 'أظهر الاحترام من خلال سلوكي الجسدي.',
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
          'text_ar' => 'أنتبه للمسافة المناسبة أثناء التواصل.',
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
          'text_ar' => 'أستخدم الإيماءات لتعزيز المعنى.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستخدم الإشارات غير اللفظية بفاعلية وتفهم دلالاتها لدى الآخرين. ويساعدك ذلك على إيصال رسائلك بصورة أكثر وضوحًا وفهم الرسائل الضمنية أثناء التفاعل الاجتماعي.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تدرك بعض جوانب التواصل غير اللفظي وتستخدمها في مواقف معينة. إلا أن وعيك بهذه المهارات واستخدامك لها لا يزال بحاجة إلى مزيد من التطوير لتحقيق تأثير أكبر في التواصل.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن استخدامك أو فهمك للإشارات غير اللفظية قد يكون محدودًا. وقد لا تنتبه بدرجة كافية إلى لغة الجسد أو تعبيرات الوجه أو نبرة الصوت، مما قد يقلل من فاعلية تواصلك.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'البعد الرابع: الذكاء العاطفي في الاتصال',
      'max_score' => 20,
      'order_index' => 3,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أتحكم في انفعالاتي أثناء النقاش.',
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
          'text_ar' => 'أتفهم مشاعر الآخرين أثناء الحوار.',
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
          'text_ar' => 'أتعاطف مع الآخرين عند الحديث عن مشكلاتهم.',
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
          'text_ar' => 'أتجنب الردود الانفعالية السريعة.',
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
          'text_ar' => 'أستطيع التعبير عن مشاعري بطريقة مناسبة.',
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
          'text_ar' => 'أراعي مشاعر الآخرين عند تقديم النقد.',
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
          'text_ar' => 'أهدئ المواقف المتوترة بالحوار.',
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
          'text_ar' => 'أتقبل اختلاف وجهات النظر.',
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
          'text_ar' => 'أظهر الاحترام حتى عند الخلاف.',
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
          'text_ar' => 'أعتذر عندما أخطئ في التواصل.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة جيدة على فهم مشاعرك ومشاعر الآخرين وإدارتها بصورة إيجابية. ويساعدك ذلك على بناء علاقات صحية والتعامل مع المواقف المختلفة بمرونة واحترام.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مقبولًا من الوعي بالمشاعر وإدارتها أثناء التواصل. وفي بعض المواقف تنجح في ضبط انفعالاتك وفهم الآخرين، إلا أن هذا لا يحدث دائمًا بالدرجة نفسها.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في إدارة مشاعرك أو فهم مشاعر الآخرين أثناء التواصل. وقد يؤثر ذلك في قدرتك على التعامل مع المواقف الانفعالية أو الخلافات بطريقة فعالة.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
      ),
    ),
    4 =>
    array (
      'name_ar' => 'البعد الخامس: الإقناع والتأثير',
      'max_score' => 20,
      'order_index' => 4,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أقدم حججًا منطقية لدعم آرائي.',
          'order_index' => 40,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أستطيع التأثير في الآخرين بطريقة إيجابية.',
          'order_index' => 41,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أستخدم الأدلة عند عرض أفكاري.',
          'order_index' => 42,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أتعامل مع الاعتراضات بهدوء.',
          'order_index' => 43,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أعدّل أسلوبي لإقناع أشخاص مختلفين.',
          'order_index' => 44,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أركز على النقاط المشتركة أثناء النقاش.',
          'order_index' => 45,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 =>
        array (
          'text_ar' => 'أستطيع التفاوض للوصول إلى حلول مناسبة.',
          'order_index' => 46,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 =>
        array (
          'text_ar' => 'أوضح فوائد المقترحات التي أقدمها.',
          'order_index' => 47,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        8 =>
        array (
          'text_ar' => 'أستمع للآراء المخالفة قبل الرد.',
          'order_index' => 48,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        9 =>
        array (
          'text_ar' => 'أستخدم أساليب إقناع أخلاقية ومحترمة.',
          'order_index' => 49,
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرة جيدة على الإقناع والتأثير الإيجابي في الآخرين. وتستطيع عرض أفكارك بطريقة منطقية والتعامل مع الاعتراضات بمرونة واحترام.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك بعض المهارات الإقناعية التي تساعدك على التأثير في الآخرين في مواقف معينة. ومع ذلك، قد لا يكون تأثيرك ثابتًا أو فعالًا بالدرجة نفسها في جميع المواقف.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تجد صعوبة في التأثير في الآخرين أو عرض أفكارك بطريقة مقنعة. وقد تحتاج إلى تطوير مهارات عرض الحجج والتفاوض والتعامل مع وجهات النظر المختلفة.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
      ),
    ),
    5 =>
    array (
      'name_ar' => 'البعد السادس: إدارة العلاقات والتفاعل الاجتماعي',
      'max_score' => 20,
      'order_index' => 5,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أبادر بالتواصل مع الآخرين.',
          'order_index' => 50,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أكوّن علاقات إيجابية بسهولة.',
          'order_index' => 51,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أحافظ على العلاقات المهنية والشخصية.',
          'order_index' => 52,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أتعامل باحترام مع مختلف الأشخاص.',
          'order_index' => 53,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أتعاون مع الآخرين لتحقيق الأهداف.',
          'order_index' => 54,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أحل الخلافات بالحوار.',
          'order_index' => 55,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 =>
        array (
          'text_ar' => 'أشارك بفاعلية في العمل الجماعي.',
          'order_index' => 56,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 =>
        array (
          'text_ar' => 'أقدم التغذية الراجعة بطريقة بناءة.',
          'order_index' => 57,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        8 =>
        array (
          'text_ar' => 'أتقبل التغذية الراجعة من الآخرين.',
          'order_index' => 58,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        9 =>
        array (
          'text_ar' => 'أظهر المرونة في التعامل مع الآخرين.',
          'order_index' => 59,
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة جيدة على بناء العلاقات والمحافظة عليها والتعامل الإيجابي مع الآخرين. وتساعدك هذه المهارات على النجاح في المواقف الاجتماعية والمهنية المختلفة.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع بناء علاقات إيجابية والتفاعل مع الآخرين بدرجة مقبولة. إلا أن بعض المواقف الاجتماعية قد تتطلب منك مزيدًا من المرونة أو المهارة في إدارة العلاقات.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه بعض الصعوبات في بناء العلاقات أو المحافظة عليها أو التعامل مع المواقف الاجتماعية المختلفة. وقد تستفيد من تنمية مهارات التعاون والحوار وحل الخلافات.',
          'high_threshold' => 6,
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
      'low_threshold' => 81,
      'high_threshold' => 120,
      'description_ar' => 'تشير نتائجك إلى أنك تتمتع بمستوى مرتفع من مهارات الاتصال. وتمتلك قدرات جيدة في الاستماع والتعبير والتفاعل الاجتماعي وإدارة العلاقات، مما يساعدك على التواصل بفاعلية وبناء علاقات إيجابية ومؤثرة في مختلف المواقف.',
    ),
    1 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 40,
      'description_ar' => 'تشير نتائجك إلى أن مهارات الاتصال لديك تحتاج إلى تطوير في عدد من الجوانب الأساسية. وقد تواجه صعوبات في فهم الآخرين أو التعبير عن أفكارك أو إدارة العلاقات الاجتماعية. ويُتوقع أن يسهم التدريب والممارسة الواعية في تحسين كفاءتك التواصلية بشكل ملحوظ.',
    ),
    2 =>
    array (
      'level' => 'medium',
      'low_threshold' => 41,
      'high_threshold' => 80,
      'description_ar' => 'تشير نتائجك إلى أنك تمتلك مستوى متوسطًا من مهارات الاتصال. وتستطيع التواصل بفاعلية في العديد من المواقف، إلا أن بعض الجوانب لا تزال بحاجة إلى مزيد من التطوير لتعزيز قدرتك على التفاعل والتأثير في الآخرين.',
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