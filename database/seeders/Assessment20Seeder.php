<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment20Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'ولاؤك لعملك الحالي',
  'category' => 'مقاييس التوجيه والتوافق المهني',
  'description_ar' => 'يهدف هذا المقياس إلى مساعدتك في التعرف على مستوى ارتباطك بجهة عملك، وفهم الجوانب التي تعزز شعورك بالانتماء والالتزام تجاهها. كما يساعدك على تحديد نقاط القوة وفرص التطوير في علاقتك المهنية بالمنظمة، بما يسهم في تعزيز رضاك الوظيفي، ورفع مستوى مشاركتك وإسهامك في تحقيق أهداف العمل.',
  'programs_ar' => 'القيادة المؤثرة وإدارة التغيير والابتكار، إعداد القيادات وإدارة المشاريع وإدارة المواهب، القيادة الأخلاقية والنزاهة المؤسسية والاستدامة، دورات في مجال الولاء العاطفي، دورات في مجال الولاء الاستمراري، دورات في مجال الولاء المعياري (الأخلاقي)',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'الولاء العاطفي',
      'max_score' => 14,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أشعر بوجود جو أخوي داخل العمل.',
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
          'text_ar' => 'المناخ الودي السائد يدفعني إلى التمسك بالبقاء في عملي.',
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
          'text_ar' => 'لدي الاستعداد لتقديم أقصى جهد لإنجاح عملي الحالي.',
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
          'text_ar' => 'أفخر عندما أخبر الأشخاص الآخرين بأنني عضو في عملي الحالي.',
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
          'text_ar' => 'أرتاح عند القيام بالمهام التي تُوكل إليّ في العمل.',
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
          'text_ar' => 'أشعر بأن لجهة عملي مكانة عالية في نفسي.',
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
          'text_ar' => 'أعتبر نجاح جهة عملي جزءًا من نجاحي الشخصي.',
          'order_index' => 6,
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
          'low_threshold' => 10,
          'high_threshold' => 999,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بمستوى مرتفع من الولاء العاطفي لعملك الحالي. فلديك رغبة قوية في البقاء في منظمتك نابعة من تقبّلك لأهدافها وقيمها، ولديك مشاعر إيجابية نحوها ودرجة رضا عالية عنها. كما أن معرفتك بخصائص عملك ودرجة استقلاليتك مرتفعة، وتُتاح لك المشاركة الفعالة في اتخاذ القرارات وحل المشكلات، مما يجعلك تتبنى مشكلات المنظمة كما لو كانت مشكلاتك الخاصة.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 6,
          'high_threshold' => 9,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك درجة متوسطة من الولاء العاطفي لمنظمتك. فرغبتك في البقاء فيها نابعة من تقبّل متوسط لأهدافها وقيمها، ومشاعرك الإيجابية نحوها ودرجة رضاك عنها متوسطة. كما أن معرفتك بخصائص عملك ودرجة استقلاليتك متوسطة، وتُتاح لك المشاركة في اتخاذ القرارات وحل المشكلات أحيانًا.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى الولاء العاطفي لديك منخفض، وهذه النتيجة مؤشر على رغبتك في ترك عملك؛ فأنت لا تتقبل قيمه وأهدافه بدرجة كافية، ولديك مشاعر سلبية نحو المنظمة التي تعمل بها ودرجة رضا منخفضة عنها. كما أن معرفتك بخصائص عملك ودرجة استقلاليتك منخفضة، ولا تُتاح لك المشاركة الفعالة في اتخاذ القرارات وحل المشكلات.',
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'الولاء الاستمراري',
      'max_score' => 14,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أنا على استعداد لقبول أي عمل لكي أحتفظ بوظيفتي الحالية.',
          'order_index' => 7,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أرفض ترك عملي إذا تلقيت عرضًا براتب أفضل.',
          'order_index' => 8,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'من الصعب عليّ التكيف إذا انتقلت إلى جهة عمل أخرى.',
          'order_index' => 9,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أحقق مكاسب وظيفية على المدى البعيد عند بقائي في العمل الحالي.',
          'order_index' => 10,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'لدي ثقة بأن جهة عملي أكثر أمنًا وظيفيًا من الجهات الأخرى.',
          'order_index' => 11,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'توفر لي جهة عملي مزايا لا توفرها غيرها من الجهات الأخرى.',
          'order_index' => 12,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 =>
        array (
          'text_ar' => 'عملي الحالي يلبي طموحاتي المستقبلية.',
          'order_index' => 13,
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
          'low_threshold' => 10,
          'high_threshold' => 999,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بمستوى مرتفع من الولاء الاستمراري لعملك الحالي. فأنت مقتنع بأن المنافع والمزايا والفرص التي تقدمها لك المنظمة تبرر بقاءك فيها واستمرارك في العطاء لها، وتشعر أنك لن تحصل على منافع ومزايا مماثلة لو تركت عملك الحالي، ولديك رغبة كبيرة في عدم تركه بسبب ما يترتب على ذلك من خسارة مادية واجتماعية.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 6,
          'high_threshold' => 9,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك درجة متوسطة من الولاء الاستمراري لمنظمتك. فأنت مقتنع بدرجة متوسطة بأن المنافع والمزايا التي تقدمها لك المنظمة تبرر بقاءك فيها، وتفكر أحيانًا في ترك العمل لاعتقادك بإمكانية الحصول على منافع مماثلة في مكان آخر، ولديك رغبة متوسطة في الاستمرار بجهة عملك.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى الولاء الاستمراري لديك منخفض. فأنت مقتنع بأن المنافع والمزايا التي تقدمها لك المنظمة محدودة ولا تبرر بقاءك فيها، وتشعر أنه بإمكانك الحصول على منافع ومزايا مماثلة أو أفضل لو تركت عملك الحالي، ولديك رغبة كبيرة في تركه والانتقال إلى جهة أخرى.',
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'الولاء المعياري (الأخلاقي)',
      'max_score' => 14,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'يستحق عملي الحالي الإخلاص والتقدير.',
          'order_index' => 14,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'العمل الذي أقوم به له أولوية في حياتي.',
          'order_index' => 15,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'يوجد تطابق بين قيمي وقيم جهة عملي.',
          'order_index' => 16,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أقبل أي عمل أُكلَّف به من منطلق التزامي بواجباتي.',
          'order_index' => 17,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أشعر بالتزام أخلاقي يدفعني للاستمرار في جهة عملي الحالية.',
          'order_index' => 18,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 =>
        array (
          'text_ar' => 'أشعر بالولاء لجهة العمل التي أعمل بها.',
          'order_index' => 19,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 =>
        array (
          'text_ar' => 'لدي حماس في أداء عملي.',
          'order_index' => 20,
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
          'low_threshold' => 10,
          'high_threshold' => 999,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بمستوى مرتفع من الولاء المعياري (الأخلاقي) لعملك الحالي. فأنت تشعر بالتزام نحو البقاء في جهة عملك، ناتج عن الدعم المناسب الذي تتلقاه من المنظمة وتمكينك من المشاركة والتفاعل الإيجابي. وتشعر أخلاقيًا وأدبيًا بضرورة الاستمرار والبقاء في المنظمة الحالية، وتخشى أن تترك انطباعًا سيئًا لدى زملائك لو تركتها، مما يجعلك تبقى فيها التزامًا بهذا الشعور الأخلاقي تجاه المهنة والمنظمة.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 6,
          'high_threshold' => 9,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك درجة متوسطة من الولاء المعياري (الأخلاقي) لمنظمتك. فأنت تشعر بدرجة متوسطة بالالتزام نحو البقاء في جهة عملك، وتشعر أحيانًا أخلاقيًا وأدبيًا بضرورة الاستمرار فيها، وتخشى أحيانًا أن تترك انطباعًا سيئًا لدى زملائك لو تركتها.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى الولاء المعياري (الأخلاقي) لديك منخفض. فأنت لا تشعر بالتزام كافٍ نحو البقاء في جهة عملك، ولا تشعر أخلاقيًا وأدبيًا بضرورة الاستمرار فيها، ولا تتخوف من ترك انطباع سيئ لدى زملائك لو تركتها، مما يجعلك تميل إلى التفكير في ترك جهة العمل.',
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
      'low_threshold' => 29,
      'high_threshold' => 999,
      'description_ar' => 'تشير نتيجتك إلى أنك تتمتع بمستوى مرتفع من الولاء لعملك الحالي؛ فلديك قوة انتماء لمنظمتك ومساهمة فعالة بها من خلال الارتباط النفسي الذي يربطك بها، مما يدفعك للاندماج في العمل وتبني قيم المنظمة. وأنت تميل نحو المشاركة المستمرة في أنشطتها حرصًا منك على عدم فقدان مكاسبك فيها، ولديك استعداد لبذل درجات عالية من الجهد لصالح جهة عملك، ورغبة قوية في البقاء فيها والقبول بأهدافها وقيمها. كما أن لديك شعورًا إيجابيًا تجاه المنظمة وإخلاصًا لها، وتحرص على البقاء فيها من خلال بذل الجهد بما يعزز نجاحها ويجعلك تفضّلها على غيرها، وأنت في حالة من الرضا والتفاعل مع جهة عملك وزملائك.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 15,
      'high_threshold' => 28,
      'description_ar' => 'تشير نتيجتك إلى أن لديك درجة متوسطة من الانتماء لمنظمتك ومساهمة متوسطة بها، من خلال الارتباط النفسي الذي يربطك بها، مما يدفعك للاندماج في العمل وتبني قيم المنظمة بدرجة متوسطة. وأنت تميل بدرجة متوسطة نحو المشاركة في أنشطة المنظمة، ولديك استعداد بدرجة متوسطة لبذل الجهد لصالح جهة عملك، ورغبة متوسطة للبقاء فيها والقبول بأهدافها وقيمها. كما أن لديك شعورًا إيجابيًا بدرجة متوسطة تجاه المنظمة والإخلاص لها، وأنت في حالة متوسطة من الرضا والتفاعل مع جهة عملك وزملائك.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 14,
      'description_ar' => 'تشير نتيجتك إلى أن مستوى الولاء لديك منخفض؛ فليس لديك قوة انتماء كافية لمنظمتك، ومساهمتك بها ليست فعالة، واندماجك في العمل ضعيف، ولا تتبنى قيم المنظمة بالقدر الكافي. وأنت لا تميل إلى المشاركة المستمرة في أنشطة المنظمة، وليس لديك استعداد كبير لبذل درجات عالية من الجهد لصالح جهة عملك. كما أن رغبتك في البقاء في العمل الحالي والقبول بأهدافه وقيمه محدودة، وليس لديك شعور إيجابي كافٍ تجاه المنظمة أو إخلاص لها، ولست في حالة رضا وتفاعل كبيرين مع جهة عملك وزملائك.

عليك أن تحدد نقاط ضعفك وأن تنمي مهاراتك بالتدريب المتخصص، أو تفكر في تغيير جهة عملك.',
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