<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment3Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'قيّم مهاراتك الإدارية',
  'category' => 'القيادة والإدارة',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى مهاراتك الإدارية في أربعة مجالات رئيسة هي: التخطيط، والتنظيم، والتوجيه، والرقابة. ويُعدّ هذا المقياس أداة للتطوير المهني والشخصي تساعدك على تحديد نقاط القوة التي تمتلكها والجوانب التي تحتاج إلى مزيد من التحسين، بما يسهم في تعزيز كفاءتك القيادية ورفع مستوى أدائك الإداري.',
  'programs_ar' => 'الإدارة الاستراتيجية المتقدمة، القيادة التنفيذية، إدارة التغيير، إدارة المشاريع الاحترافية، إدارة الابتكار والتحسين المستمر، التحول الرقمي والذكاء الاصطناعي في الإدارة، التخطيط الاستراتيجي وإعداد الخطط التشغيلية، صياغة الأهداف الذكية، إدارة الوقت وتحديد الأولويات، إدارة المخاطر والتخطيط للمستقبل، تنظيم العمل وتوزيع المهام، تفويض الصلاحيات بفاعلية، إدارة فرق العمل، إدارة الموارد وتحسين كفاءة الأداء المؤسسي، القيادة التحفيزية، مهارات الاتصال الإداري الفعال، بناء فرق العمل وتعزيز التعاون، إدارة الاجتماعات واتخاذ القرارات، مؤشرات الأداء الرئيسية (KPIs)، متابعة الأداء وتقويمه، إدارة الجودة والتحسين المستمر، إعداد التقارير وتحليل نتائج الأداء، أساسيات التخطيط الإداري، حل المشكلات واتخاذ القرار، أساسيات التنظيم الإداري، أساسيات القيادة والإشراف، التحفيز وبناء العلاقات المهنية، إدارة النزاعات في بيئة العمل، أساسيات الرقابة الإدارية',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'التخطيط',
      'max_score' => 20,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أعرف بوضوح الأهداف الحقيقية للإدارة التي أديرها.',
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
          'text_ar' => 'أوضح للمرؤوسين العلاقة بين جهودهم الفردية والجماعية وأهداف الإدارة التي أديرها.',
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
          'text_ar' => 'أناقش الخطط مع المرؤوسين.',
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
          'text_ar' => 'أضع أهدافًا واضحة وقابلة للقياس بالاشتراك مع المرؤوسين.',
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
          'text_ar' => 'أراجع دوريًا طرق وإجراءات العمل التي تتبعها المجموعة داخل الإدارة بغرض تطويرها.',
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
          'text_ar' => 'أشرك المرؤوسين في جميع خطوات العملية التخطيطية بالإدارة.',
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
          'text_ar' => 'أشيد بجهود المرؤوسين وأعترف بها عندما تتحقق الأهداف.',
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
          'text_ar' => 'أقوم بالتنسيق بين خطط العمل داخل الإدارة وكافة الخطط الأخرى، سواء الخاصة برئيسي أو الخاصة بالإدارات الأخرى التي يرتبط نشاطها بنشاط إدارتي.',
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
          'text_ar' => 'أقوم بتحويل الأهداف والخطط إلى جداول زمنية وموازنات للتنفيذ.',
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
          'text_ar' => 'تحقق إدارتي دائمًا الأهداف الموضوعة لها.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك ناجح في استشراف المستقبل والتنبؤ به والاستعداد له، وتعتمد على التفكير الخلّاق من خلال بلورة الحقائق والمعلومات عن موقف معين، ومن ثم تقرر من خلاله ماذا تريد أن تعمل، وما هو الواجب عمله، ومتى، وما هي الموارد اللازمة لإنجازه. كما أن لديك القدرة على تحديد الأهداف، ووضع الاستراتيجيات، ورسم السياسات، وتحديد الإجراءات والقواعد، ثم إعداد البرامج الزمنية لوضع الأهداف موضع التنفيذ.

ننصحك بالاستمرار على هذا المستوى.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك ناجح بدرجة متوسطة في استشراف المستقبل والتنبؤ به والاستعداد له، وتعتمد إلى حد ما على التفكير الخلّاق من خلال بلورة الحقائق والمعلومات عن موقف معين، ومن ثم تقرر من خلاله ماذا تريد أن تعمل، وما هو الواجب عمله، ومتى، وما هي الموارد اللازمة لإنجازه. ولديك قدرة متوسطة على تحديد الأهداف، ووضع الاستراتيجيات، ورسم السياسات، وتحديد الإجراءات والقواعد، ثم إعداد البرامج الزمنية لوضع الأهداف موضع التنفيذ.

ننصحك بمحاولة تحسين مستواك في مجال التخطيط.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك لست ناجحًا في استشراف المستقبل والتنبؤ به والاستعداد له، ولا تعتمد على التفكير الخلّاق من خلال بلورة الحقائق والمعلومات عن موقف معين، ومن ثم لا تستطيع أن تقرر من خلاله ماذا تريد أن تعمل، وما هو الواجب عمله، ومتى، وما هي الموارد اللازمة لإنجازه. وليس لديك القدرة على تحديد الأهداف، ووضع الاستراتيجيات، ورسم السياسات، وتحديد الإجراءات والقواعد، ومن ثم إعداد البرامج الزمنية لوضع الأهداف موضع التنفيذ.

عليك أن تحدد نقاط ضعفك المتعلقة بالتخطيط، وأن تنمي مهاراتك بالتدريب المتخصص في هذا المجال.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'التنظيم',
      'max_score' => 20,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أحتفظ بخريطة تنظيمية مرسومة لإدارتي طبقًا لأحدث التعديلات في الهيكل التنظيمي.',
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
          'text_ar' => 'أقوم دائمًا بتطوير الهيكل التنظيمي لإدارتي.',
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
          'text_ar' => 'أعيد النظر دوريًا في نطاق الإشراف داخل الإدارة للتوصل إلى نطاق الإشراف الأمثل.',
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
          'text_ar' => 'يتلقى كل فرد في الإدارة الأوامر والتعليمات من رئيس واحد فقط.',
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
          'text_ar' => 'أفوض سلطة الاختصاص للأعمال الروتينية على المرؤوسين، بالرغم من استمرار مسؤوليتي عنها أمام رئيسي المباشر.',
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
          'text_ar' => 'أنا على دراية كاملة بالمتطلبات الوظيفية (التوصيف الوظيفي) لكافة الوظائف داخل إدارتي.',
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
          'text_ar' => 'أقوم شخصيًا بالتوجيه والتوعية للعاملين الجدد في إدارتي.',
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
          'text_ar' => 'أقوم دائمًا بربط مستوى أداء المرؤوس بالمكافآت التي يحصل عليها.',
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
          'text_ar' => 'أحدد فرص التقدم الوظيفي لكل فرد في إدارتي.',
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
          'text_ar' => 'أستخدم أسلوبًا منظمًا ونمطيًا للتوصية بترقية العاملين في إدارتي.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك القدرة على تحديد الأنشطة والمهام المطلوب إنجازها لتحقيق الأهداف التي سبق تحديدها في وظيفة التخطيط، وأنت قادر على تحديد طبيعة العلاقات التنظيمية وبناء الهيكل التنظيمي الذي يعكس طبيعة الأنشطة والعلاقات التنظيمية بأشكالها المختلفة وبمستوياتها المتنوعة.

ننصحك بالاستمرار على هذا المستوى.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك قدرة متوسطة على تحديد الأنشطة والمهام المطلوب إنجازها لتحقيق الأهداف التي سبق تحديدها في وظيفة التخطيط، وأنت قادر بدرجة متوسطة على تحديد طبيعة العلاقات التنظيمية وبناء الهيكل التنظيمي الذي يعكس طبيعة الأنشطة والعلاقات التنظيمية بأشكالها المختلفة وبمستوياتها المتنوعة.

ننصحك بمحاولة تحسين مهاراتك المتعلقة بالتنظيم.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنه ليس لديك القدرة على تحديد الأنشطة والمهام المطلوب إنجازها لتحقيق الأهداف التي سبق تحديدها في وظيفة التخطيط، وأنت غير قادر على تحديد طبيعة العلاقات التنظيمية وبناء الهيكل التنظيمي الذي يعكس طبيعة الأنشطة والعلاقات التنظيمية بأشكالها المختلفة وبمستوياتها المتنوعة.

عليك أن تحدد نقاط ضعفك وأن تنمي مهاراتك بالتدريب المتخصص في مجال التنظيم.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'التوجيه',
      'max_score' => 20,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أقوم بمراجعة وتقييم كافة الظروف قبل أن أتخذ قرارًا أو أصدر أمرًا.',
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
          'text_ar' => 'أقوم دائمًا بحصر البدائل المتاحة وتقييمها قبل أن أتخذ قرارًا.',
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
          'text_ar' => 'إن النتائج المترتبة على تنفيذ قراراتي وأوامري تثبت دائمًا أنني كنت على صواب.',
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
          'text_ar' => 'يناسب سلوكي القيادي كلًا من طبيعة مرؤوسي وطبيعة المهام المسؤول عنها أمام رئيسي المباشر.',
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
          'text_ar' => 'أتيح للمرؤوسين في إدارتي حرية كاملة في إبداء وجهة نظرهم في حل المشكلات وتعديل طرق وإجراءات العمل المتبعة.',
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
          'text_ar' => 'أوجّه التقدير للمرؤوس الذي يحقق النتائج المطلوبة وأعترف بجهده.',
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
          'text_ar' => 'يشعر المرؤوسون بالفخر والاعتزاز عند إنجازهم للمهام المطلوبة منهم وفق المعايير المحددة لها.',
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
          'text_ar' => 'يشعر المرؤوس بأن الفرصة متاحة أمامه للتقدم (في الوظيفة أو الراتب أو الحوافز)، كما يشعر بأنني سأسانده في هذا التقدم إذا كان أداؤه متميزًا.',
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
          'text_ar' => 'يسعى المرؤوسون في إدارتي إلى تقبل المزيد من المستويات فيما يتعلق بالمهام المطلوبة منهم.',
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
          'text_ar' => 'أشعر بالرضا الكامل نحو مجموعة المرؤوسين في إدارتي، سواء من حيث ترابطها أو إنجازها.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك القدرة على الترتيب المنظم لجهود العاملين في المنظمة لضمان توافق الأداء في العمل الإداري بصورة جماعية مترابطة ومتناغمة تحقيقًا للأهداف المبتغاة من هذا العمل، وتقوم بتوجيه وإرشاد وتحفيز العاملين على نحو يساهم في ضمان تحقيق أفضل النتائج من خلال العمل اليومي المتشابك بينك وبين المرؤوسين، ولديك قدرات عالية في مهارات الاتصال والقيادة والدافعية.

ننصحك بالاستمرار على هذا المستوى.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك قدرة متوسطة على الترتيب المنظم لجهود العاملين في المنظمة لضمان توافق الأداء في العمل الإداري بصورة جماعية مترابطة ومتناغمة تحقيقًا للأهداف المبتغاة من هذا العمل، وتقوم أحيانًا بتوجيه وإرشاد وتحفيز العاملين على نحو يساهم في ضمان تحقيق أفضل النتائج من خلال العمل اليومي المتشابك بينك وبين المرؤوسين، ولديك قدرات متوسطة في مهارات الاتصال والقيادة والدافعية.

ننصحك بمحاولة تحسين مهاراتك الإدارية في الجانب الخاص بالتوجيه.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنه ليس لديك القدرة على الترتيب المنظم لجهود العاملين في المنظمة لضمان توافق الأداء في العمل الإداري بصورة جماعية مترابطة ومتناغمة تحقيقًا للأهداف المبتغاة من هذا العمل، ولا تقوم بتوجيه وإرشاد وتحفيز العاملين على نحو يساهم في ضمان تحقيق أفضل النتائج من خلال العمل اليومي المتشابك بينك وبين المرؤوسين، وليس لديك قدرات عالية في مهارات الاتصال والقيادة والدافعية.

عليك أن تحدد نقاط ضعفك وأن تنمي مهاراتك بالتدريب المتخصص في موضوع التوجيه.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'الرقابة',
      'max_score' => 20,
      'order_index' => 3,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'ترتبط المعايير الرقابية ارتباطًا وثيقًا بأهداف الخطط.',
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
          'text_ar' => 'إن المعلومات الرقابية التي تصلني عن مدى تقدم التنفيذ تجعلني على دراية كاملة بمدى تحقق الأهداف.',
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
          'text_ar' => 'أرجع الأثر للمرؤوسين عن مدى تقدمهم في التنفيذ.',
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
          'text_ar' => 'المرؤوسون مسؤولون عن كافة عناصر المصروفات والتكاليف التي يمكن أن يتحكموا فيها أثناء تنفيذ المهام المطلوبة منهم.',
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
          'text_ar' => 'أجتمع مع المرؤوسين على فترات متقاربة للتعرف على آرائهم لتحسين الأداء.',
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
          'text_ar' => 'أشجع المرؤوسين على تصحيح الانحرافات في أدائهم دون الرجوع إليّ.',
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
          'text_ar' => 'يتم تصحيح أي انحراف أثناء التنفيذ بمجرد حدوثه.',
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
          'text_ar' => 'أبحث دائمًا عن الأسباب الحقيقية التي تعوق التنفيذ السليم وأسعى إلى علاجها في أسرع وقت ممكن.',
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
          'text_ar' => 'إن الوقت الذي أستغرقه في متابعة التنفيذ وتصحيح انحرافاته كان له ما يبرره.',
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
          'text_ar' => 'أشعر أن النتائج التي تحققها المجموعة تبرر الجهد الرقابي الذي أبذله.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك القدرة على التأكد من أن الأداء الفعلي يسير حسب الخطط الموضوعة على نحو يؤكد مدى الاتجاه نحو الهدف، وتصحيح المسار عن طريق اكتشاف الانحرافات وتحديد مواطن الخلل والعمل على تلافي أسبابها باتخاذ إجراءات التصحيح المناسبة ومواجهتها بالأسلوب الملائم.

ننصحك بالاستمرار على هذا المستوى.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك قدرة متوسطة على التأكد من أن الأداء الفعلي يسير حسب الخطط الموضوعة على نحو يؤكد مدى الاتجاه نحو الهدف، وتصحيح المسار عن طريق اكتشاف الانحرافات وتحديد مواطن الخلل والعمل على تلافي أسبابها باتخاذ إجراءات التصحيح المناسبة ومواجهتها بالأسلوب الملائم.

ننصحك بمحاولة تحسينها.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنه ليس لديك القدرة على التأكد من أن الأداء الفعلي يسير حسب الخطط الموضوعة على نحو يؤكد مدى الاتجاه نحو الهدف، وتصحيح المسار عن طريق اكتشاف الانحرافات وتحديد مواطن الخلل والعمل على تلافي أسبابها باتخاذ إجراءات التصحيح المناسبة ومواجهتها بالأسلوب الملائم.

عليك أن تحدد نقاط ضعفك وأن تنمي مهاراتك بالتدريب المتخصص.',
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
      'low_threshold' => 54,
      'high_threshold' => 999,
      'description_ar' => 'تشير نتيجتك إلى أن لديك قدرة عالية على ممارسة الأنشطة المتعلقة بوظائف الإدارة، والتي تتعلق بكل من: التخطيط، والتنظيم، والتوجيه، والرقابة، وتمارس هذه الأنشطة لتحقيق أهداف المنظمة بأعلى كفاءة وأقل تكلفة.

ننصحك بالاستمرار على هذا المستوى. ومن الأفضل أن تهتم بالحصول على برامج تدريبية تركز على المهارات المتقدمة والاستراتيجية بدلًا من أساسيات الإدارة، بهدف الانتقال من مستوى "الإدارة الفعالة" إلى مستوى "القيادة والتأثير المؤسسي"، هذا النوع من البرامج يساعدك على المساهمة في تحقيق الأهداف الاستراتيجية وتطوير الأداء المؤسسي.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 27,
      'high_threshold' => 53,
      'description_ar' => 'تشير نتيجتك إلى أن لديك قدرة متوسطة على ممارسة الأنشطة المتعلقة بوظائف الإدارة، والتي تتعلق بكل من: التخطيط، والتنظيم، والتوجيه، والرقابة. تدل هذه الدرجة على أنك تمتلك مستوى مقبولًا من المهارات الإدارية، إلا أنك تحتاج إلى مزيد من التطوير للوصول إلى مستوى الأداء المرتفع.

ننصحك بتطوير مستواك في هذا المجال عن طريق حضور برامج تدريبية متخصصة في التخطيط والتنظيم والتوجيه والرقابة.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 26,
      'description_ar' => 'تشير نتيجتك إلى أنه ليس لديك القدرة على ممارسة الأنشطة المتعلقة بوظائف الإدارة، والتي تتعلق بكل من: التخطيط، والتنظيم، والتوجيه، والرقابة. تشير هذه الدرجة إلى وجود حاجة إلى تنمية المهارات الإدارية الأساسية، لذلك ينبغي التركيز على البرامج التأسيسية التي تعالج جوانب الضعف الرئيسة قبل الانتقال إلى البرامج المتقدمة.

ننصحك بتطوير نفسك في هذا المجال الهام عن طريق حضور برامج تأسيسية في التخطيط الإداري وحل المشكلات وإدارة الأولويات.',
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