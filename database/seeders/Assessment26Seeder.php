<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment26Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مقياس الأنماط الإدراكية',
  'category' => 'الذات والشخصية',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على النمط التمثيلي الغالب لديك (بصري، سمعي، أو حسي) للمساعدة في تحسين أساليب التعلم والتواصل والتدريب. لا توجد إجابات صحيحة أو خاطئة، لذا يرجى الإجابة بصدق وفق ما يعبر عنك فعلاً.',
  'programs_ar' => 'القيادة الشخصية والقيادة التحويلية، التفكير الاستراتيجي، الإبداع والابتكار، مهارات التدريب وإعداد المدربين (TOT)، الذكاء العاطفي المتقدم، مهارات التأثير والإقناع، إدارة التغيير، إدارة المشروعات، اتخاذ القرار وحل المشكلات المعقدة، بناء وتطوير فرق العمل، مهارات التفكير الإبداعي، مهارات التفكير الناقد، استراتيجيات التعلم المتقدم، الذكاء العاطفي، مهارات الاتصال الفعال، إدارة الوقت وتنظيم الأولويات، مهارات حل المشكلات، استراتيجيات التعلم الفعال، مهارات التعلم الذاتي، تنمية مهارات التركيز والانتباه، الذكاءات المتعددة وتطبيقاتها، مهارات التواصل الشخصي، تنمية القدرات المعرفية، مهارات إدارة المعرفة الشخصية',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'النمط البصري',
      'max_score' => 20,
      'order_index' => 0,
      'questions' =>
      array (
        0 => array ('text_ar' => 'أتذكر المعلومات بشكل أفضل عندما أراها مكتوبة أو مصورة.', 'order_index' => 0,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أفضل استخدام الرسوم البيانية والمخططات أثناء التعلم.', 'order_index' => 1,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أركز على مظهر الأشياء وتفاصيلها البصرية.', 'order_index' => 2,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أستطيع تذكر الوجوه أكثر من الأسماء.', 'order_index' => 3,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أحب تنظيم المعلومات في جداول أو خرائط ذهنية.', 'order_index' => 4,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'أستخدم عبارات مثل "أرى"، "ألاحظ"، "أنظر".', 'order_index' => 5,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 => array ('text_ar' => 'أفضل مشاهدة شرح عملي بدلاً من سماعه فقط.', 'order_index' => 6,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 => array ('text_ar' => 'أتذكر الأماكن من خلال شكلها وتصميمها.', 'order_index' => 7,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        8 => array ('text_ar' => 'أشعر أن الألوان تساعدني على الفهم والتذكر.', 'order_index' => 8,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        9 => array ('text_ar' => 'أفضل قراءة التعليمات بنفسي قبل تنفيذ المهمة.', 'order_index' => 9,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن النمط البصري ليس الأسلوب المفضل لديك في التعلم والتواصل، وقد لا تعتمد عليه كثيرًا في استقبال المعلومات أو معالجتها.

الدورات التدريبية المقترحة:
1. تنمية مهارات التعلم المتعدد الحواس
2. استراتيجيات التعلم الفعال
3. المرونة المعرفية وأساليب التعلم',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 7, 'high_threshold' => 13,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستخدم النمط البصري في بعض المواقف، لكنه ليس النمط المسيطر لديك بشكل واضح.

الدورات التدريبية المقترحة:
1. تطوير مهارات التعلم الشخصي
2. استراتيجيات التواصل الفعال
3. مهارات التركيز والانتباه',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 14, 'high_threshold' => 20,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن النمط البصري هو النمط الأكثر تفضيلاً لديك في استقبال المعلومات ومعالجتها وفهمها، وهذا يعني أنك تعتمد بدرجة كبيرة على ما تراه أكثر من اعتمادك على ما تسمعه أو تمارسه عمليًا.

أنت تميل إلى تكوين صورة ذهنية واضحة للأفكار والمواقف، وتساعدك الرسوم التوضيحية والمخططات والجداول والألوان في فهم المعلومات وتذكرها. كما أنك غالبًا ما تلاحظ التفاصيل المرئية بسرعة، وتستطيع تذكر الأماكن والوجوه والأشكال بصورة أفضل من تذكر الأسماء أو التعليمات الشفهية.

عند التعلم أو التدريب، فإنك تستفيد بشكل أكبر عندما تكون المادة منظمة بصريًا، وعندما تتوافر عروض تقديمية أو صور أو أمثلة مرئية تساعدك على ربط المعلومات ببعضها. كما أنك تميل إلى التخطيط المسبق وترتيب الأفكار قبل تنفيذها، وتفضل غالبًا قراءة التعليمات بنفسك بدلاً من الاكتفاء بالاستماع إليها. وقد تجد صعوبة نسبية في متابعة الشروحات الشفهية الطويلة إذا لم تترافق مع وسائل بصرية داعمة.

نقاط القوة المتوقعة لديك: القدرة على الملاحظة الدقيقة، وسرعة استيعاب المعلومات المرئية، والتفكير المنظم، والقدرة على التخطيط والتصور المستقبلي، وتذكر التفاصيل والأماكن والأشكال.

مجالات يمكن تطويرها: مهارات الاستماع الفعال، والتفاعل في المناقشات الشفهية، واكتساب الخبرات العملية المباشرة.

الدورات التدريبية المقترحة:
1. الخرائط الذهنية وتنظيم المعرفة
2. التفكير البصري وتحليل المعلومات
3. تصميم العروض التقديمية الاحترافية
4. التخطيط الاستراتيجي باستخدام الأدوات البصرية
5. القراءة السريعة واستخلاص الأفكار الرئيسة
6. مهارات التصور والإبداع البصري
7. التصميم الجرافيكي الأساسي',
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'النمط السمعي',
      'max_score' => 20,
      'order_index' => 1,
      'questions' =>
      array (
        0 => array ('text_ar' => 'أتعلم بشكل أفضل عندما أستمع إلى الشرح.', 'order_index' => 10,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أتذكر ما يقوله الآخرون بسهولة.', 'order_index' => 11,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أفضل المناقشة والحوار لفهم الأفكار.', 'order_index' => 12,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أستمتع بالمحاضرات والمواد الصوتية.', 'order_index' => 13,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أكرر المعلومات بصوت مرتفع للمساعدة على حفظها.', 'order_index' => 14,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'أنتبه لنبرة الصوت وطريقة الكلام.', 'order_index' => 15,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 => array ('text_ar' => 'أتذكر أسماء الأشخاص أكثر من وجوههم.', 'order_index' => 16,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 => array ('text_ar' => 'أفضل أن يشرح لي أحد المهمة شفهيًا.', 'order_index' => 17,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        8 => array ('text_ar' => 'أستخدم عبارات مثل "أسمع"، "أصغي"، "أقول".', 'order_index' => 18,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        9 => array ('text_ar' => 'تساعدني المناقشات الجماعية على التعلم.', 'order_index' => 19,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن النمط السمعي ليس الأسلوب المفضل لديك في التعلم والتواصل، وقد لا تعتمد عليه كثيرًا في استقبال المعلومات أو معالجتها.

الدورات التدريبية المقترحة:
1. تنمية مهارات التعلم المتعدد الحواس
2. استراتيجيات التعلم الفعال
3. المرونة المعرفية وأساليب التعلم',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 7, 'high_threshold' => 13,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستخدم النمط السمعي في بعض المواقف، لكنه ليس النمط المسيطر لديك بشكل واضح.

الدورات التدريبية المقترحة:
1. تطوير مهارات التعلم الشخصي
2. استراتيجيات التواصل الفعال
3. مهارات التركيز والانتباه',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 14, 'high_threshold' => 20,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن النمط السمعي هو النمط الأكثر تفضيلاً لديك في التعلم والتواصل واكتساب الخبرات، وهذا يعني أنك تعتمد بدرجة كبيرة على الاستماع والمناقشة والحوار لفهم المعلومات واستيعابها.

أنت تميل إلى التعلم من خلال الاستماع إلى الشروحات والمحاضرات والنقاشات، وغالبًا ما تكون قادرًا على تذكر ما تسمعه بشكل أفضل من تذكرك لما تقرؤه أو تراه. كما أنك تستفيد من تبادل الآراء وطرح الأسئلة ومناقشة الأفكار مع الآخرين.

وقد تلاحظ أنك عندما ترغب في فهم موضوع معين فإنك تميل إلى الحديث عنه أو الاستماع إلى شرح شخص آخر، وأنك تستوعب المعلومات بصورة أعمق عندما تُقدم لك لفظيًا. كما أنك غالبًا ما تنتبه إلى نبرة الصوت وطريقة التعبير، وقد تتمتع بقدرة جيدة على التواصل والإقناع وبناء العلاقات. وقد تجد بعض الصعوبة في التعلم من المواد المكتوبة فقط دون شرح أو مناقشة.

نقاط القوة المتوقعة لديك: مهارات تواصل جيدة، والقدرة على الإنصات والاستماع، والتعبير اللفظي الواضح، وسرعة التقاط المعلومات الشفهية، والقدرة على الحوار والإقناع.

مجالات يمكن تطويرها: تنظيم المعلومات بصريًا، واستخدام الوسائل المرئية في التعلم، وتنمية المهارات التطبيقية العملية.

الدورات التدريبية المقترحة:
1. مهارات الاتصال الفعال
2. فن الإلقاء والتحدث أمام الجمهور
3. الاستماع النشط
4. التفاوض والإقناع
5. مهارات الحوار وإدارة النقاش
6. التدريب الإعلامي والصوتي
7. مهارات العرض والتقديم
8. التواصل المؤسسي والمهني',
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'النمط الحسي',
      'max_score' => 20,
      'order_index' => 2,
      'questions' =>
      array (
        0 => array ('text_ar' => 'أتعلم بشكل أفضل من خلال التجربة العملية.', 'order_index' => 20,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أحب لمس الأشياء وتجريبها بنفسي.', 'order_index' => 21,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أتحرك كثيرًا أثناء التفكير أو التعلم.', 'order_index' => 22,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أتذكر ما قمت به أكثر مما رأيته أو سمعته.', 'order_index' => 23,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أفضل الأنشطة التطبيقية على المحاضرات النظرية.', 'order_index' => 24,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'أستخدم عبارات مثل "أشعر"، "ألمس"، "أجرب".', 'order_index' => 25,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 => array ('text_ar' => 'أحتاج إلى ممارسة المهارة حتى أتقنها.', 'order_index' => 26,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 => array ('text_ar' => 'أشعر بالملل عند الجلوس لفترات طويلة دون نشاط.', 'order_index' => 27,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        8 => array ('text_ar' => 'أتعلم بسرعة عندما أشارك فعليًا في المهمة.', 'order_index' => 28,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        9 => array ('text_ar' => 'تساعدني النماذج والأدوات العملية على الفهم.', 'order_index' => 29,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن النمط الحسي ليس الأسلوب المفضل لديك في التعلم والتواصل، وقد لا تعتمد عليه كثيرًا في استقبال المعلومات أو معالجتها.

الدورات التدريبية المقترحة:
1. تنمية مهارات التعلم المتعدد الحواس
2. استراتيجيات التعلم الفعال
3. المرونة المعرفية وأساليب التعلم',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 7, 'high_threshold' => 13,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستخدم النمط الحسي في بعض المواقف، لكنه ليس النمط المسيطر لديك بشكل واضح.

الدورات التدريبية المقترحة:
1. تطوير مهارات التعلم الشخصي
2. استراتيجيات التواصل الفعال
3. مهارات التركيز والانتباه',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 14, 'high_threshold' => 20,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن النمط الحسي هو النمط الأكثر تفضيلاً لديك في التعلم واكتساب المعرفة، وهذا يعني أنك تتعلم بصورة أفضل من خلال الممارسة والتجربة المباشرة والمشاركة الفعلية في الأنشطة.

أنت تميل إلى التعلم عندما تقوم بتنفيذ المهمة بنفسك، وتفضل أن تكون جزءًا من التجربة بدلاً من الاكتفاء بمشاهدتها أو الاستماع إلى شرحها. كما أنك تستوعب المفاهيم بصورة أفضل عندما ترتبط بخبرات واقعية ومواقف عملية.

وتشير النتيجة إلى أنك غالبًا ما تعتمد على الشعور والخبرة الشخصية في فهم الأمور واتخاذ القرارات، وأنك تميل إلى النشاط والحركة والتفاعل مع البيئة المحيطة. كما أنك تتعلم من خلال التجريب والخطأ وتكتسب المهارات بسرعة عندما تتاح لك فرصة التطبيق العملي. وقد تجد أن المحاضرات النظرية الطويلة أقل جاذبية بالنسبة لك.

نقاط القوة المتوقعة لديك: القدرة على التطبيق العملي، وسرعة اكتساب المهارات، والتعلم من الخبرة المباشرة، والمبادرة والتنفيذ، والمرونة في التعامل مع المواقف الواقعية.

مجالات يمكن تطويرها: الصبر على التعلم النظري، وتنمية مهارات التخطيط والتحليل، والاستفادة من المصادر المكتوبة والمرئية.

الدورات التدريبية المقترحة:
1. التعلم بالمشروعات
2. التفكير التصميمي
3. حل المشكلات واتخاذ القرار
4. القيادة الميدانية
5. إدارة الأنشطة والفعاليات
6. التدريب العملي والتطبيقي
7. مهارات العمل الجماعي
8. إدارة المبادرات والمشروعات',
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
      'high_threshold' => 20,
      'description_ar' => 'تشير نتيجتك إلى انخفاض الدرجة الكلية على مقياس الأنماط التمثيلية، مما قد يدل على أنك لا تعتمد بصورة واضحة أو ثابتة على أسلوب محدد في استقبال المعلومات ومعالجتها، أو أنك لا تستخدم إمكاناتك الإدراكية بصورة منظمة أثناء التعلم والتواصل. وقد تواجه أحيانًا صعوبة في تحديد الطريقة الأكثر فاعلية لك في التعلم أو تذكر المعلومات، مما قد يؤثر في سرعة الاستيعاب أو الاحتفاظ بالمعلومات.

كما قد تعكس هذه النتيجة حاجة إلى تنمية الوعي بأساليب التعلم الشخصية واكتشاف الطرق التي تساعدك على تحقيق أفضل أداء في الدراسة أو العمل أو التواصل مع الآخرين.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 21,
      'high_threshold' => 40,
      'description_ar' => 'تشير نتيجتك إلى مستوى متوسط على مقياس الأنماط التمثيلية، مما يدل على أنك تستخدم أكثر من أسلوب في استقبال المعلومات وفهمها، إلا أن تفضيلاتك ليست حادة أو ثابتة بصورة كبيرة. وتُظهر هذه النتيجة قدرًا جيدًا من المرونة في التعامل مع المواقف التعليمية والاجتماعية المختلفة.

ففي بعض المواقف قد تعتمد على المشاهدة، وفي مواقف أخرى على الاستماع أو التجربة العملية، وفقًا لطبيعة المهمة أو البيئة المحيطة. وتمثل هذه النتيجة مؤشرًا إيجابيًا على قابلية التكيف مع أساليب التعلم المتنوعة، إلا أنها تشير أيضًا إلى إمكانية تطوير استراتيجيات أكثر فاعلية للاستفادة من نقاط القوة الشخصية.',
    ),
    2 =>
    array (
      'level' => 'high',
      'low_threshold' => 41,
      'high_threshold' => 60,
      'description_ar' => 'تشير نتيجتك إلى ارتفاع الدرجة الكلية على مقياس الأنماط التمثيلية، مما يدل على امتلاكك مستوى مرتفعًا من الوعي والإدراك في استخدام الحواس والقنوات المختلفة لاستقبال المعلومات ومعالجتها. كما تعكس النتيجة قدرتك على توظيف أساليب متعددة في التعلم والتواصل والتفاعل مع البيئة المحيطة.

وتشير هذه النتيجة إلى أنك غالبًا ما تستفيد من المثيرات البصرية والسمعية والحسية بدرجة جيدة، وأن لديك قدرة على التكيف مع مواقف التعلم المختلفة واختيار الأسلوب الأنسب لفهم المعلومات واستيعابها. كما قد تتميز بسرعة التعلم، والقدرة على اكتساب الخبرات، والمرونة في التعامل مع المواقف الجديدة.

وتعكس النتيجة كذلك استعدادًا جيدًا للتطوير المهني والشخصي، وقدرة على الاستفادة من البرامج التدريبية المتقدمة التي تتطلب تفاعلاً معرفيًا ومهاريًا متنوعًا.',
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