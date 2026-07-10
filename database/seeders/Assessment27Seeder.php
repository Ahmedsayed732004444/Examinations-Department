<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment27Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'الاستعداد الشخصي للتعامل مع الجمهور',
  'category' => 'الكفاءة الشخصية والنجاح المهني',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى استعدادك الشخصي للتعامل مع الجمهور من خلال مجموعة من العبارات التي تتناول أسلوبك في التواصل مع الآخرين، وضبط انفعالاتك، وتقبلك للآخرين، وثقتك بنفسك في المواقف الاجتماعية، وقدرتك على التكيف مع المواقف المختلفة. لا توجد إجابات صحيحة أو خاطئة، لذا يرجى الإجابة بصدق وفق ما يعبر عنك فعلاً.',
  'programs_ar' => 'القيادة والتأثير، التفاوض وإدارة النزاعات، خدمة العملاء الاحترافية، مهارات العرض والتقديم، إدارة فرق العمل، مهارات الاتصال المتقدمة، التعامل مع الشخصيات المختلفة، إدارة الضغوط والمواقف الصعبة، مهارات الإقناع والتأثير، حل المشكلات واتخاذ القرار، مهارات التواصل الفعال، بناء الثقة بالنفس، الذكاء العاطفي وإدارة الانفعالات، المهارات الاجتماعية الأساسية، خدمة العملاء للمبتدئين',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    // المحور الأول: مهارات التواصل
    0 =>
    array (
      'name_ar' => 'المحور الأول: مهارات التواصل',
      'max_score' => 10,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أشعر بالراحة عند التحدث مع أشخاص جدد',
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
          'text_ar' => 'أستطيع التعبير عن أفكاري بوضوح',
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
          'text_ar' => 'أستمع للآخرين باهتمام عند حديثهم معي',
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
          'text_ar' => 'أتمكن من بدء الحوار مع الآخرين بسهولة',
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
          'text_ar' => 'أحرص على استخدام كلمات مهذبة أثناء الحديث',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة جيدة على التعبير عن أفكارك والاستماع للآخرين والتفاعل معهم بصورة إيجابية. كما أنك غالبًا ما تستطيع بناء تواصل فعال يسهم في تعزيز التفاهم والتعاون مع مختلف الأشخاص. من الدورات المقترحة لك: مهارات التفاوض، والعرض والتقديم الاحترافي، وإدارة الاجتماعات.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مهارات تواصل مقبولة تمكّنك من التفاعل مع الآخرين في معظم المواقف، إلا أنك قد تواجه بعض الصعوبات في المواقف التي تتطلب إقناع الآخرين أو إدارة الحوارات المعقدة أو التعبير الدقيق عن أفكارك. من الدورات المقترحة لك: الاتصال المتقدم، ومهارات الإقناع، والتواصل غير اللفظي.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في التعبير عن أفكارك أو إيصال رسائلك للآخرين بصورة واضحة. وقد تميل إلى تجنب بعض المواقف التي تتطلب الحديث مع أشخاص جدد أو المشاركة في النقاشات. كما قد تجد صعوبة في الاستماع الفعال أو في فهم الرسائل التي ينقلها الآخرون أثناء التفاعل معهم. من الدورات المقترحة لك: مهارات التواصل الفعال، وفن الحوار والإصغاء، ومهارات التحدث أمام الآخرين.',
        ),
      ),
    ),
    // المحور الثاني: ضبط الانفعالات
    1 =>
    array (
      'name_ar' => 'المحور الثاني: ضبط الانفعالات',
      'max_score' => 10,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أستطيع التحكم في غضبي عند التعرض للاستفزاز',
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
          'text_ar' => 'أتعامل بهدوء مع المواقف المزعجة.',
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
          'text_ar' => 'أتقبل اختلاف الآراء دون انزعاج شديد.',
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
          'text_ar' => 'أستطيع التفكير بهدوء عند مواجهة مشكلة مفاجئة.',
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
          'text_ar' => 'لا أسمح لمشاعري السلبية بالتأثير على تعاملي مع الآخرين.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك غالبًا ما تحافظ على هدوئك وتوازنك الانفعالي حتى في المواقف الصعبة، وتستطيع التعامل مع الضغوط والخلافات بصورة عقلانية تساعدك على اتخاذ قرارات مناسبة. من الدورات المقترحة لك: القيادة الانفعالية، وإدارة النزاعات، والإرشاد والتوجيه.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع التحكم في انفعالاتك في كثير من المواقف، إلا أن قدرتك على ذلك قد تنخفض عند زيادة الضغوط أو عند التعرض لمواقف غير متوقعة أو مشحونة عاطفيًا. من الدورات المقترحة لك: إدارة التوتر، والذكاء العاطفي في بيئة العمل، ومهارات التكيف النفسي.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تتأثر انفعاليًا بالمواقف الضاغطة أو الاستفزازية بدرجة أكبر من المطلوب، وقد تجد صعوبة في المحافظة على هدوئك أو اتخاذ قرارات متزنة أثناء التوتر أو الخلافات. من الدورات المقترحة لك: إدارة الغضب، والذكاء العاطفي، وإدارة الضغوط النفسية.',
        ),
      ),
    ),
    // المحور الثالث: التقبل الاجتماعي والتعاطف
    2 =>
    array (
      'name_ar' => 'المحور الثالث: التقبل الاجتماعي والتعاطف',
      'max_score' => 10,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أحاول فهم وجهة نظر الآخرين قبل الحكم عليهم.',
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
          'text_ar' => 'أشعر باهتمام تجاه مشكلات الآخرين.',
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
          'text_ar' => 'أتعامل باحترام مع الأشخاص المختلفين عني.',
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
          'text_ar' => 'أحرص على مساعدة الآخرين عندما أستطيع.',
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
          'text_ar' => 'أراعي مشاعر الآخرين أثناء الحديث معهم.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة جيدة على فهم الآخرين وتقدير مشاعرهم واحترام اختلافاتهم، مما يساعدك على بناء علاقات إيجابية قائمة على الاحترام والتعاون المتبادل. من الدورات المقترحة لك: الإرشاد والتوجيه، وبناء فرق العمل، وإدارة العلاقات المهنية.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تبدي قدرًا معقولًا من التفهم والتقبل للآخرين، إلا أن قدرتك على إدراك مشاعرهم أو التعامل مع اختلافاتهم قد تحتاج إلى مزيد من التطوير في بعض المواقف. من الدورات المقترحة لك: خدمة العملاء، والتواصل الإنساني، والتواصل بين الثقافات.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في فهم مشاعر الآخرين أو تقدير وجهات نظرهم، وقد يؤثر ذلك على جودة تفاعلك الاجتماعي وقدرتك على بناء علاقات إيجابية ومستقرة. من الدورات المقترحة لك: الذكاء الاجتماعي، ومهارات التعاطف، والعلاقات الإنسانية.',
        ),
      ),
    ),
    // المحور الرابع: الثقة بالنفس في المواقف الاجتماعية
    3 =>
    array (
      'name_ar' => 'المحور الرابع: الثقة بالنفس في المواقف الاجتماعية',
      'max_score' => 10,
      'order_index' => 3,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أستطيع التحدث أمام مجموعة من الأشخاص دون تردد كبير.',
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
          'text_ar' => 'أثق بقدرتي على تكوين علاقات إيجابية مع الآخرين.',
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
          'text_ar' => 'لا أشعر بالارتباك الشديد عند مقابلة أشخاص لأول مرة.',
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
          'text_ar' => 'أستطيع تقديم نفسي للآخرين بطريقة مناسبة.',
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
          'text_ar' => 'أواجه المواقف الاجتماعية الجديدة بثقة.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بثقة جيدة في قدراتك الاجتماعية، وتستطيع التفاعل مع الآخرين والمبادرة بالتواصل معهم دون شعور كبير بالقلق أو التردد. من الدورات المقترحة لك: القيادة الشخصية، والتفاوض، والتأثير في الآخرين.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مقبولًا من الثقة بالنفس، إلا أنك قد تشعر ببعض التردد في المواقف التي تتطلب مواجهة عدد كبير من الأشخاص أو التعامل مع مواقف جديدة وغير مألوفة. من الدورات المقترحة لك: تنمية الشخصية، ومهارات التأثير والإقناع، ومهارات العرض والتقديم.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تشعر بالتردد أو القلق عند التعامل مع الآخرين أو عند التواجد في مواقف اجتماعية جديدة، وقد يؤثر ذلك على قدرتك على المبادرة أو التعبير عن أفكارك بثقة. من الدورات المقترحة لك: بناء الثقة بالنفس، والتغلب على الخجل الاجتماعي، والتحدث أمام الجمهور.',
        ),
      ),
    ),
    // المحور الخامس: المرونة والاستجابة للمواقف
    4 =>
    array (
      'name_ar' => 'المحور الخامس: المرونة والاستجابة للمواقف',
      'max_score' => 10,
      'order_index' => 4,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أستطيع التكيف مع الشخصيات المختلفة.',
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
          'text_ar' => 'أغير أسلوبي في الحديث بما يتناسب مع الموقف.',
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
          'text_ar' => 'أتعامل مع المواقف غير المتوقعة بمرونة',
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
          'text_ar' => 'أتعلم من أخطائي في التعامل مع الآخرين.',
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
          'text_ar' => 'أتقبل الملاحظات التي تساعدني على تحسين سلوكي.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة جيدة على التكيف مع الظروف المختلفة والتعامل مع التغيرات والمواقف غير المتوقعة بمرونة وكفاءة، كما أنك قادر على تعديل أساليبك وسلوكك بما يتناسب مع متطلبات الموقف. من الدورات المقترحة لك: إدارة الأزمات، والتفكير الاستراتيجي، والقيادة في البيئات المتغيرة.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 4,
          'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع التكيف مع بعض التغيرات والمواقف الجديدة، إلا أنك قد تحتاج إلى وقت أطول للتأقلم أو إلى دعم إضافي في المواقف الأكثر تعقيدًا. من الدورات المقترحة لك: التفكير الإبداعي، وإدارة الأولويات، واتخاذ القرار.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تجد صعوبة في التكيف مع التغيرات المفاجئة أو التعامل مع الشخصيات والظروف المختلفة، وقد تفضل البيئات المستقرة والروتينية على المواقف المتغيرة. من الدورات المقترحة لك: إدارة التغيير، والمرونة النفسية، وحل المشكلات.',
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
      'high_threshold' => 50,
      'description_ar' => 'تشير نتيجتك إلى أنك تمتلك استعدادًا جيدًا للتعامل مع الجمهور، وأن لديك مجموعة من السمات والمهارات التي تساعدك على بناء علاقات إيجابية مع الآخرين والتفاعل معهم بفاعلية. كما تعكس نتيجتك قدرتك على التواصل بوضوح، وضبط انفعالاتك، وفهم الآخرين، والتكيف مع المواقف المختلفة.

ومن المتوقع أن تكون أكثر قدرة على النجاح في المجالات التي تتطلب تواصلًا مباشرًا مع الجمهور، مثل خدمة العملاء، والاستقبال، والعلاقات العامة، والتسويق، والإرشاد، وغيرها من المهن التي تعتمد على التفاعل الإنساني. ومع ذلك فإن تطوير هذه المهارات بشكل مستمر يساعدك على الوصول إلى مستويات أعلى من التميز المهني والشخصي.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 17,
      'high_threshold' => 33,
      'description_ar' => 'تشير نتيجتك إلى أنك تمتلك أساسًا جيدًا للتعامل مع الجمهور، وتستطيع التفاعل مع الآخرين في كثير من المواقف بصورة مقبولة. إلا أنك قد تشعر أحيانًا بالتردد أو التوتر في بعض المواقف الاجتماعية أو عند مواجهة أشخاص ذوي طباع صعبة أو ظروف غير متوقعة.

كما توضح النتيجة أن لديك عددًا من المهارات المناسبة للتعامل مع الجمهور، إلا أن مستوى أدائك قد يختلف من موقف إلى آخر تبعًا للظروف المحيطة وطبيعة الأشخاص الذين تتعامل معهم. ويُتوقع أن يسهم التدريب المتخصص والممارسة العملية في رفع مستوى كفاءتك بشكل واضح.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 16,
      'description_ar' => 'تشير نتيجتك إلى أن التعامل المباشر مع الجمهور قد يشكل تحديًا بالنسبة لك في الوقت الحالي. وقد تميل إلى الشعور بعدم الارتياح عند التواصل مع أشخاص جدد أو في المواقف التي تتطلب التفاعل المستمر مع الآخرين. كما قد تواجه صعوبة في التعبير عن أفكارك بوضوح، أو التحكم في انفعالاتك عند التعرض للضغوط، أو التكيف مع المواقف الاجتماعية المتنوعة.

ولا تعني هذه النتيجة عدم قدرتك على النجاح في الوظائف التي تتطلب التعامل مع الجمهور، وإنما تشير إلى أن مستوى استعدادك الحالي يحتاج إلى تنمية وتدريب قبل الالتحاق بمثل هذه الأعمال. ومع التدريب والممارسة المنتظمة يمكن تحسين هذه المهارات بشكل ملحوظ.',
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