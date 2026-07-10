<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment11Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مقياس الإبداع الإداري',
  'category' => 'الكفاءة الشخصية والنجاح المهني',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على الأنماط والسلوكيات المرتبطة بالإبداع في العمل الإداري، من خلال مجموعة من العبارات التي تتناول أساليب التفكير، والتعامل مع المشكلات، وتطوير الأفكار، والمبادرة في أداء المهام.',
  'programs_ar' => 'التفكير التصميمي، حل المشكلات واتخاذ القرار الإبداعي، إدارة الابتكار المؤسسي، القيادة الابتكارية وإدارة التغيير، استشراف المستقبل والتخطيط الاستراتيجي، الذكاء الاصطناعي والابتكار الإداري، مختبر الابتكار التطبيقي، التفكير الإبداعي المتقدم، التصميم الابتكاري (Design Thinking)، القيادة الابتكارية، إدارة التغيير والابتكار، حل المشكلات واتخاذ القرار بطرق إبداعية، أساسيات الإبداع الإداري، مهارات التفكير الناقد والإبداعي، حل المشكلات واتخاذ القرار، مهارات الاتصال والعمل الجماعي، إدارة الوقت وتحسين الأداء الشخصي',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'محور الأصالة',
      'max_score' => 8,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أنجز أعمالي بأسلوب متجدد.',
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
          'text_ar' => 'أشعر بالملل من تكرار الإجراءات المتبعة في إنجاز المهام.',
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
          'text_ar' => 'أحاول الابتعاد عن تقليد الآخرين في حل المشكلات.',
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
          'text_ar' => 'أمتلك القدرة على تقديم أفكار جديدة.',
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
          'low_threshold' => 6,
          'high_threshold' => 999,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى مرتفع في محور الأصالة، حيث لديك القدرة على إنتاج أفكار تتسم بالجدة، وأنت قادر على ابتكار أشياء أو أفكار لم يسبقك إليها أحد من قبل، وذو تفكير أصيل ولا تكرر أفكار المحيطين بك. ننصحك بالاستمرار على هذا المستوى.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 3,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى متوسط في الأصالة، حيث لديك قدرة متوسطة على إنتاج أفكار تتسم بالجدة، ولست قادرًا بشكل كبير على ابتكار أشياء أو أفكار لم يسبقك إليها أحد من قبل. ننصحك بمحاولة تحسينها.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 2,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى الأصالة لديك منخفض. عليك أن تحدد نقاط ضعفك وأن تنمي مهاراتك بالتدريب المتخصص.',
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'محور الطلاقة',
      'max_score' => 8,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أمتلك القدرة على تقديم عدد من الحلول الجديدة للمشكلات التي تواجهني.',
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
          'text_ar' => 'أتصف بالسرعة في طرح الأفكار والحلول.',
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
          'text_ar' => 'أتصف بالتلقائية عند تقديم أفكار جديدة للتطوير.',
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
          'text_ar' => 'أمتلك القدرة على تقديم أكثر من فكرة خلال فترة زمنية قصيرة.',
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
          'low_threshold' => 6,
          'high_threshold' => 999,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى مرتفع في محور الطلاقة، حيث لديك القدرة على استدعاء المعلومات وتداعياتها، ويمكنك التعبير عنها بالخصوبة الفكرية، وتظهر طلاقتك من خلال كمية الأفكار التي تطرأ على ذهنك عند إثارة مشكلة، كما أن لديك سهولة في توليد الأفكار وسرعة التفكير وسرعة التصنيف، بإعطاء كلمات في نسق محدد أو وفق نظام معلوم. ننصحك بالاستمرار على هذا المستوى.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 3,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى متوسط في الطلاقة، حيث لديك قدرة متوسطة على استدعاء المعلومات وتداعياتها، والخصوبة الفكرية لديك متوسطة. ننصحك بمحاولة تحسينها.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 2,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى الطلاقة لديك منخفض، فليس لديك القدرة على إنتاج عدد مناسب من البدائل أو المترادفات أو الأفكار أو الاستدلالات عند الاستجابة لمثير معين، وليس لديك السرعة في توليدها. عليك أن تحدد نقاط ضعفك وأن تنمي مهاراتك بالتدريب المتخصص.',
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'محور المرونة',
      'max_score' => 8,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أحرص على معرفة الرأي المخالف لرأيي للاستفادة منه.',
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
          'text_ar' => 'أقبل تغيير موقفي عندما أقتنع بعدم صحته.',
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
          'text_ar' => 'أحبذ إجراء تغييرات جديدة في بين فترة وأخرى.',
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
          'text_ar' => 'لدي القدرة على النظر للأشياء من زوايا مختلفة.',
          'order_index' => 11,
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
          'low_threshold' => 6,
          'high_threshold' => 999,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى مرتفع في محور المرونة، حيث لديك القدرة على تغيير الحالة الذهنية بتغيير الموقف الذي يواجهك، فأنت قادر على التحول بسهولة بالمعلومات من اتجاه لآخر، وتتميز بمرونة عالية من التلوّن العقلي، وقادر على تغيير أفكارك لكي تتناسب مع الموقف الإبداعي. ننصحك بالاستمرار على هذا المستوى.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 3,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى متوسط في المرونة، حيث إن قدراتك متوسطة فيما يتعلق بتنوع أفكارك وتحولك بين وجهات النظر المختلفة. ننصحك بمحاولة تحسينها.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 2,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى المرونة لديك منخفض، فليس لديك القدرة الكافية على تغيير أفكارك أو التحول بين وجهات النظر بسهولة. عليك أن تحدد نقاط ضعفك وأن تنمي مهاراتك بالتدريب المتخصص.',
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'محور الحساسية للمشكلات',
      'max_score' => 8,
      'order_index' => 3,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أتنبأ بالمشكلات قبل حدوثها.',
          'order_index' => 12,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أخطط لمواجهة المشكلات الممكن حدوثها.',
          'order_index' => 13,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أحرص على معرفة أوجه القصور أو الضعف فيما أقوم به.',
          'order_index' => 14,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أمتلك رؤية دقيقة لاكتشاف المشكلات التي يعاني منها الآخرون.',
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
          'low_threshold' => 6,
          'high_threshold' => 999,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى مرتفع في الحساسية للمشكلات، حيث لديك القدرة على رؤية الكثير من المشكلات في الموقف الواحد رؤية واضحة، وتحديدها تحديدًا دقيقًا، وتتعرف على حجمها وجوانبها وأبعادها وآثارها، ولديك وعي بالأخطاء ونواحي القصور فيها. وأهم ما في الأمر هنا أنك تملك عنصر الواقعية ورؤية الحقائق كما هي، وتكتشف العلاقات بين هذه الحقائق. ننصحك بالاستمرار على هذا المستوى.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 3,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى متوسط في الحساسية للمشكلات، حيث إن قدراتك متوسطة فيما يتعلق برؤيتك للمشكلات في الأشياء، وتفكيرك في إجراء تحسينات عليها. ننصحك بمحاولة تحسينها.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 2,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى الحساسية للمشكلات لديك منخفض، فليس لديك القدرة على رؤية الكثير من المشكلات في الموقف الواحد رؤية واضحة وتحديدها تحديدًا دقيقًا، ولا تستطيع التعرف على حجمها وجوانبها وأبعادها وآثارها، وليس لديك وعي بالأخطاء ونواحي القصور فيها. كما أنك لا تملك عنصر الواقعية ورؤية الحقائق كما هي، ولا تستطيع اكتشاف العلاقات بين هذه الحقائق. عليك أن تحدد نقاط ضعفك وأن تنمي مهاراتك بالتدريب المتخصص.',
        ),
      ),
    ),
    4 =>
    array (
      'name_ar' => 'محور القدرة على التحليل والربط',
      'max_score' => 8,
      'order_index' => 4,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أمتلك القدرة على تنظيم أفكاري.',
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
          'text_ar' => 'أحتاج إلى تعليمات مفصلة عند تكليفي بمهام جديدة.',
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
          'text_ar' => 'لدي القدرة على تجزئة المهام.',
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
          'text_ar' => 'لدي القدرة على تحليل المهام.',
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
          'low_threshold' => 6,
          'high_threshold' => 999,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى مرتفع في القدرة على التحليل والربط، حيث لديك القدرة على التوصل إلى العناصر التي تتكون منها الأشياء المركبة، ولديك الكفاءة في تحليل عناصر الأشياء، وفهم العلاقات بين هذه العناصر، بالإضافة لقدرتك غير العادية على إعادة تنظيم الأفكار والمفاهيم والناس والأشياء تبعًا لخطة معينة. كما أنك قادر على إيجاد وسائل للربط بين الأفكار بعضها ببعض، وما يحيط بها من متغيرات، وكذلك قدرتك على تكوين عناصر الخبرة وتشكيلها في بناء وترابط جديد. ننصحك بالاستمرار على هذا المستوى.',
        ),
        1 =>
        array (
          'level' => 'medium',
          'low_threshold' => 3,
          'high_threshold' => 5,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك في مستوى متوسط في القدرة على التحليل والربط، حيث إن قدراتك متوسطة فيما يتعلق بالتوصل إلى العناصر التي تتكون منها الأشياء المركبة، وكفاءتك متوسطة في تحليل عناصر الأشياء وفهم العلاقات بين هذه العناصر، بالإضافة لقدرتك المتوسطة على إعادة تنظيم الأفكار والمفاهيم والناس والأشياء تبعًا لخطة معينة. كما أن قدرتك متوسطة فيما يتعلق بإيجاد وسائل للربط بين الأفكار بعضها ببعض، وما يحيط بها من متغيرات، وكذلك قدرتك المتوسطة في تكوين عناصر الخبرة وتشكيلها في بناء وترابط جديد. ننصحك بمحاولة تحسينها.',
        ),
        2 =>
        array (
          'level' => 'low',
          'low_threshold' => 0,
          'high_threshold' => 2,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن مستوى القدرة على التحليل والربط لديك منخفض، فليس لديك القدرة على التوصل إلى العناصر التي تتكون منها الأشياء المركبة، وليس لديك القدرة على تحليل عناصر الأشياء وفهم العلاقات بين هذه العناصر، بالإضافة لقدرتك الضعيفة على إعادة تنظيم الأفكار والمفاهيم والناس والأشياء تبعًا لخطة معينة. كما أن قدراتك ضعيفة في إيجاد وسائل للربط بين الأفكار بعضها ببعض، وما يحيط بها من متغيرات، وكذلك في تكوين عناصر الخبرة وتشكيلها في بناء وترابط جديد. عليك أن تحدد نقاط ضعفك وأن تنمي مهاراتك بالتدريب المتخصص.',
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
      'low_threshold' => 27,
      'high_threshold' => 999,
      'description_ar' => 'تشير نتيجتك إلى أنك شخص مبتكر، ولديك مزيج من القدرات التي تمكنك من إنتاج فكرة جديدة، متميزة، قابلة للتطبيق، بهدف حل مشكلة أو تطوير نظام قائم أو إيجاد مفهوم أو أسلوب عملي لتنفيذ أعمال المنظمة، بشكل يكفل تحقيق الأهداف بكفاءة وفاعلية. كما أنك قادر على امتلاك طرق ومهارات تفكير غير تقليدية وتنميتها وترجمتها إلى الواقع الملموس، مما يسهم في إيجاد أساليب وأفكار جديدة تساعد على إنجاز المهمات بكفاءة وفاعلية. وأنت قادر على إجراء تحسينات فائقة في الاستراتيجيات أو السياسات أو الإجراءات وأدوات وأساليب العمل ومراجعتها من وقت لآخر لضمان جودة العمل، كما أنك قادر على ابتكار آليات وطرق وأساليب واستخدام وسائل متطورة تعمل على الاستخدام الأمثل للإمكانات المتاحة من أجل الوصول للهدف بأقل تكلفة وأسرع وقت. وقدرتك العقلية تنتج فكرًا وعملًا جديدين يتميزان بقدر من الطلاقة والمرونة والأصالة والحساسية للمشكلات.

ننصحك بالاستمرار على طريقتك نفسها في التعامل مع المشكلات المحيطة بك، وبعدم مناقشة أفكارك في مراحلها الأولى مع الأشخاص الذين يكثرون من النقد والتقييم، وبعدم الانشغال كثيرًا بآراء الآخرين.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 14,
      'high_threshold' => 26,
      'description_ar' => 'تشير نتيجتك إلى أنك في بداية طريق الابتكار، وأن قدراتك متوسطة في الجوانب الخاصة بتقديم أفكار جديدة بهدف تطوير العمل، وذلك من أجل ابتكار أساليب وأفكار ووسائل جديدة تساعد على إنجاز عمليات إدارية جديدة واستثمار كافة قدرات العاملين ومواهبهم بما يمكّن الإدارة من تحقيق أهدافها.

راجع إجاباتك مرة أخرى لمعرفة الجوانب التي تحتاج فيها إلى تطوير، فأنت بحاجة إلى تنمية القدرات الموجودة بالفعل لديك وتحويلها إلى مستوى مرتفع.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 13,
      'description_ar' => 'تشير نتيجتك إلى أنك غير مبتكر في الوقت الحالي، وليس لديك بعد القدرات التي تمكنك من إنتاج فكرة جديدة، متميزة، قابلة للتطبيق، بهدف حل مشكلة أو تطوير نظام قائم أو إيجاد مفهوم أو أسلوب عملي لتنفيذ أعمال المنظمة، بشكل يكفل تحقيق الأهداف بكفاءة وفاعلية. كما أنك غير قادر بعد على امتلاك طرق ومهارات تفكير غير تقليدية وتنميتها وترجمتها إلى الواقع الملموس، وغير قادر على إجراء تحسينات فائقة في الاستراتيجيات أو السياسات أو الإجراءات وأدوات وأساليب العمل، أو على ابتكار آليات وطرق وأساليب واستخدام وسائل متطورة تعمل على الاستخدام الأمثل للإمكانات المتاحة من أجل الوصول للهدف بأقل تكلفة وأسرع وقت. وقدرتك العقلية لا تنتج بعد فكرًا وعملًا جديدين يتميزان بقدر من الطلاقة والمرونة والأصالة والحساسية للمشكلات، وقد يكون السبب في ذلك أنت أو البيئة المحيطة بك أو الاثنين معًا.',
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