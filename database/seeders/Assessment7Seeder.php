<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment7Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مقياس الذكاء العاطفي',
  'category' => 'الذات والشخصية',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى الذكاء العاطفي لديك من خلال مجموعة من العبارات التي تتناول كيفية إدراكك لمشاعرك وفهمها، وقدرتك على إدارتها، ومدى تفهمك لمشاعر الآخرين، وكفاءتك في بناء العلاقات والتواصل معهم. وتساعد نتائج المقياس في تحديد جوانب القوة والجوانب التي يمكن تطويرها في مهاراتك العاطفية والاجتماعية، مما يسهم في فهم أفضل لقدراتك في التعامل مع المواقف الحياتية المختلفة.',
  'programs_ar' => 'أساسيات الذكاء العاطفي، الوعي بالذات واكتشاف المشاعر، التحكم في الانفعالات وإدارة الغضب، إدارة الضغوط النفسية والمرونة الانفعالية، التعاطف وفهم الآخرين، مهارات التواصل الاجتماعي، حل المشكلات وإدارة الخلافات، التعاطف والذكاء الاجتماعي، مهارات التواصل الفعال، إدارة العلاقات وحل النزاعات، الذكاء العاطفي في الحياة الشخصية والمهنية، القيادة بالذكاء العاطفي، الذكاء العاطفي المتقدم، الذكاء العاطفي في بيئة العمل، مهارات التواصل الاستراتيجي، الذكاء العاطفي والقيادة التحويلية',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'المحور الأول: الوعي بالذات الانفعالية',
      'max_score' => 16,
      'order_index' => 0,
      'questions' =>
      array (
        0 => array ('text_ar' => 'أستطيع تحديد المشاعر التي أشعر بها بدقة.', 'order_index' => 0,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أدرك أسباب مشاعري عندما أشعر بالضيق أو السعادة.', 'order_index' => 1,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'ألاحظ التغيرات في حالتي المزاجية بسرعة.', 'order_index' => 2,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أعرف نقاط القوة في شخصيتي.', 'order_index' => 3,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أعرف الجوانب التي أحتاج إلى تطويرها.', 'order_index' => 4,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'أستطيع وصف مشاعري للآخرين بوضوح.', 'order_index' => 5,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 => array ('text_ar' => 'أميز بين المشاعر المتشابهة مثل الغضب والإحباط.', 'order_index' => 6,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 => array ('text_ar' => 'أدرك تأثير مشاعري على قراراتي.', 'order_index' => 7,
          'options' => array (
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
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في التعرف على مشاعرك وفهم أسبابها بشكل واضح. وقد تجد أحيانًا صعوبة في تحديد ما إذا كنت تشعر بالغضب أو القلق أو الإحباط، كما قد لا تنتبه بسهولة إلى تأثير مشاعرك في قراراتك وسلوكك. يساعدك تنمية الوعي الذاتي على فهم نفسك بصورة أفضل واتخاذ قرارات أكثر اتزانًا.

دورة مقترحة لك في هذا المجال: دورة الوعي بالذات واكتشاف المشاعر
1. تعلم كيفية التعرف على المشاعر وتسميتها بدقة.
2. فهم أسباب الانفعالات وتأثيرها على القرارات.
3. تنمية مهارات التأمل الذاتي والمراجعة الشخصية.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 6,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تدرك مشاعرك في كثير من المواقف، إلا أن هذا الإدراك قد لا يكون ثابتًا أو دقيقًا دائمًا. لديك قدرة متوسطة على فهم حالتك الانفعالية وأسبابها، لكن بعض المواقف قد تتطلب منك مزيدًا من التأمل والانتباه لمشاعرك وردود أفعالك.

دورة مقترحة لك في هذا المجال: دورة الوعي بالذات واكتشاف المشاعر
1. تعلم كيفية التعرف على المشاعر وتسميتها بدقة.
2. فهم أسباب الانفعالات وتأثيرها على القرارات.
3. تنمية مهارات التأمل الذاتي والمراجعة الشخصية.',
        ),
        2 =>
        array (
          'level' => 'high',
          'low_threshold' => 11,
          'high_threshold' => 16,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بوعي جيد بمشاعرك وانفعالاتك، وتستطيع التعرف عليها وفهم أسبابها وتأثيرها في سلوكك. كما أنك أكثر قدرة على ملاحظة التغيرات الانفعالية لديك والتعامل معها بطريقة واعية، مما يساعدك على اتخاذ قرارات أكثر توازنًا.',
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'المحور الثاني: إدارة الانفعالات وتنظيمها',
      'max_score' => 16,
      'order_index' => 1,
      'questions' =>
      array (
        0 => array ('text_ar' => 'أتمكن من التحكم في غضبي عند الاستفزاز.', 'order_index' => 8,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أستطيع تهدئة نفسي عند الشعور بالتوتر.', 'order_index' => 9,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أفكر قبل أن أتصرف في المواقف الانفعالية.', 'order_index' => 10,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أستطيع تجاوز المواقف المزعجة خلال فترة مناسبة.', 'order_index' => 11,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'لا أسمح لمشاعري السلبية بالسيطرة على سلوكي.', 'order_index' => 12,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'أتعامل مع الضغوط بطريقة متوازنة.', 'order_index' => 13,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 => array ('text_ar' => 'أستطيع التعبير عن استيائي دون إيذاء الآخرين.', 'order_index' => 14,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 => array ('text_ar' => 'أستعيد هدوئي بسرعة بعد التعرض لموقف صعب.', 'order_index' => 15,
          'options' => array (
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
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في التحكم في انفعالاتك عند التعرض للمواقف الضاغطة أو المثيرة للغضب. وقد تنعكس المشاعر السلبية على تصرفاتك أو قراراتك بصورة أكبر مما ترغب فيه. ويمكن أن يساعدك تطوير مهارات ضبط النفس وإدارة الضغوط على تحسين قدرتك على التعامل مع المواقف المختلفة.

دورة مقترحة لك في هذا المجال: دورة التحكم في الانفعالات وإدارة الغضب
1. اكتساب مهارات ضبط النفس في المواقف الضاغطة.
2. تعلم أساليب التعامل مع الغضب والإحباط والتوتر.
3. تطوير استراتيجيات الاستجابة الهادئة للمواقف المثيرة للانفعال.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 6,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع التحكم في انفعالاتك في بعض المواقف، إلا أنك قد تجد صعوبة في مواقف أخرى تتسم بالضغط أو التوتر الشديد. لديك أساس جيد لإدارة مشاعرك، ويمكنك تعزيز هذه القدرة من خلال اكتساب استراتيجيات أكثر فعالية للتعامل مع الضغوط والانفعالات السلبية.

دورة مقترحة لك في هذا المجال: دورة التحكم في الانفعالات وإدارة الغضب
1. اكتساب مهارات ضبط النفس في المواقف الضاغطة.
2. تعلم أساليب التعامل مع الغضب والإحباط والتوتر.
3. تطوير استراتيجيات الاستجابة الهادئة للمواقف المثيرة للانفعال.',
        ),
        2 =>
        array (
          'level' => 'high',
          'low_threshold' => 11,
          'high_threshold' => 16,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة جيدة على تنظيم مشاعرك وضبط انفعالاتك. فأنت غالبًا قادر على التفكير بهدوء قبل التصرف، والتعامل مع الضغوط بصورة متوازنة، والتعافي من المواقف الصعبة دون أن تؤثر بشكل كبير في أدائك أو علاقاتك.',
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'المحور الثالث: التعاطف وفهم الآخرين',
      'max_score' => 16,
      'order_index' => 2,
      'questions' =>
      array (
        0 => array ('text_ar' => 'أستطيع فهم مشاعر الآخرين حتى لو لم يصرحوا بها.', 'order_index' => 16,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أهتم بمشكلات الآخرين ومشاعرهم.', 'order_index' => 17,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أحاول النظر إلى المواقف من وجهة نظر الآخرين.', 'order_index' => 18,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أتعاطف مع الأشخاص الذين يمرون بظروف صعبة.', 'order_index' => 19,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'ألاحظ الإشارات غير اللفظية التي تعبر عن مشاعر الآخرين.', 'order_index' => 20,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'أتجنب إصدار الأحكام السريعة على الآخرين.', 'order_index' => 21,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 => array ('text_ar' => 'أظهر تفهمًا لمشاعر الأشخاص المختلفين عني.', 'order_index' => 22,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 => array ('text_ar' => 'أستمع للآخرين باهتمام عندما يتحدثون عن مشكلاتهم.', 'order_index' => 23,
          'options' => array (
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
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تجد صعوبة في إدراك مشاعر الآخرين أو فهم وجهات نظرهم. وقد يؤدي ذلك أحيانًا إلى سوء فهم في العلاقات الاجتماعية أو إلى صعوبة في الاستجابة المناسبة لمشاعر الآخرين واحتياجاتهم الانفعالية.

دورة مقترحة لك في هذا المجال: دورة التعاطف وفهم الآخرين
1. تنمية القدرة على إدراك مشاعر الآخرين.
2. تطوير مهارات الاستماع الفعال.
3. تعلم أساليب التواصل القائمة على الاحترام والتفهم.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 6,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تظهر درجة متوسطة من التعاطف مع الآخرين. فأنت تستطيع فهم مشاعرهم في العديد من المواقف، إلا أن قدرتك على إدراك احتياجاتهم الانفعالية أو النظر إلى الأمور من منظورهم قد تختلف من موقف إلى آخر.

دورة مقترحة لك في هذا المجال: دورة التعاطف وفهم الآخرين
1. تنمية القدرة على إدراك مشاعر الآخرين.
2. تطوير مهارات الاستماع الفعال.
3. تعلم أساليب التواصل القائمة على الاحترام والتفهم.',
        ),
        2 =>
        array (
          'level' => 'high',
          'low_threshold' => 11,
          'high_threshold' => 16,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة جيدة على فهم مشاعر الآخرين والتفاعل معها بإيجابية. فأنت تميل إلى الإصغاء والتفهم وإدراك الإشارات الانفعالية المختلفة، مما يساعدك على بناء علاقات أكثر دفئًا وتعاونًا واحترامًا للآخرين.',
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'المحور الرابع: المهارات الاجتماعية وإدارة العلاقات',
      'max_score' => 16,
      'order_index' => 3,
      'questions' =>
      array (
        0 => array ('text_ar' => 'أستطيع تكوين علاقات إيجابية مع الآخرين.', 'order_index' => 24,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أتواصل مع الآخرين بطريقة واضحة ومحترمة.', 'order_index' => 25,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أتعامل بمرونة مع الخلافات.', 'order_index' => 26,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أستطيع إقناع الآخرين بوجهة نظري دون صدام.', 'order_index' => 27,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أتعاون مع الآخرين لتحقيق الأهداف المشتركة.', 'order_index' => 28,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'أحافظ على علاقاتي الاجتماعية المهمة.', 'order_index' => 29,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 => array ('text_ar' => 'أقدم الدعم للآخرين عند الحاجة.', 'order_index' => 30,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 => array ('text_ar' => 'أتمكن من العمل بفاعلية ضمن فريق.', 'order_index' => 31,
          'options' => array (
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
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه بعض التحديات في التواصل مع الآخرين أو بناء العلاقات الاجتماعية والحفاظ عليها. وقد تجد صعوبة في التعامل مع الخلافات أو التعبير عن آرائك واحتياجاتك بطريقة فعالة، مما قد يؤثر في جودة تفاعلاتك الاجتماعية.

دورات مقترحة لك في هذا المجال:
1. دورة مهارات التواصل الاجتماعي
2. دورة حل المشكلات وإدارة الخلافات',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 6,
          'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مهارات اجتماعية مقبولة تساعدك على التواصل والتعاون مع الآخرين في العديد من المواقف. ومع ذلك، قد تحتاج إلى تطوير بعض الجوانب المرتبطة بإدارة الخلافات أو بناء العلاقات أو الحفاظ عليها على المدى الطويل.

دورات مقترحة لك في هذا المجال:
1. دورة مهارات التواصل الاجتماعي
2. دورة حل المشكلات وإدارة الخلافات',
        ),
        2 =>
        array (
          'level' => 'high',
          'low_threshold' => 11,
          'high_threshold' => 16,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بمهارات اجتماعية جيدة وقدرة فعالة على التواصل مع الآخرين وبناء علاقات إيجابية والمحافظة عليها. كما أنك غالبًا قادر على إدارة الخلافات بصورة بناءة والتعاون مع الآخرين وتحقيق التوافق في المواقف الاجتماعية المختلفة.',
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
      'high_threshold' => 21,
      'description_ar' => 'تشير نتيجتك إلى أن قدرتك على التعرف على مشاعرك وفهمها وإدارتها، وكذلك فهم مشاعر الآخرين والتفاعل معهم، تحتاج إلى مزيد من التطوير. قد تواجه أحيانًا صعوبة في التعامل مع الضغوط أو التحكم في الانفعالات أو بناء العلاقات الاجتماعية الإيجابية.

يمكن تحسين هذه المهارات من خلال التدريب على الوعي بالمشاعر، وتنمية مهارات التواصل، وممارسة استراتيجيات تنظيم الانفعالات.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 22,
      'high_threshold' => 43,
      'description_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرًا مناسبًا من مهارات الذكاء العاطفي في بعض المواقف، إلا أن هذه المهارات قد لا تكون مستقرة أو فعالة بالدرجة نفسها في جميع الظروف. لديك القدرة على فهم مشاعرك والتعامل مع الآخرين بدرجة مقبولة، مع وجود فرص واضحة لتعزيز مهارات إدارة الانفعالات والتعاطف والتواصل الاجتماعي بما ينعكس إيجابًا على علاقاتك وأدائك اليومي.',
    ),
    2 =>
    array (
      'level' => 'high',
      'low_threshold' => 44,
      'high_threshold' => 64,
      'description_ar' => 'تشير نتيجتك إلى أنك تتمتع بمستوى جيد من الذكاء العاطفي، حيث تمتلك قدرة عالية على فهم مشاعرك وإدارتها بصورة فعالة، كما تستطيع إدراك مشاعر الآخرين والتفاعل معها بشكل إيجابي. وتدل النتيجة على امتلاكك مهارات جيدة في التواصل وبناء العلاقات والتعامل مع المواقف الضاغطة والخلافات بطريقة متزنة.

ويساعدك هذا المستوى من الذكاء العاطفي على تحقيق توافق أفضل في حياتك الشخصية والاجتماعية والمهنية.

نوصيك بالالتحاق ببرامج تدريبية متقدمة تركز على القيادة، والتأثير، والتوجيه، وإدارة العلاقات المعقدة؛ بهدف استثمار قدراتك الحالية بصورة أكبر وتحويلها إلى مهارات قيادية ومهنية تسهم في تحقيق النجاح الشخصي والمؤسسي وتعزيز قدرتك على دعم الآخرين وتطويرهم.',
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