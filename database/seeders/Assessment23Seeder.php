<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment23Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مقياس الاحتراق الوظيفي',
  'category' => 'مقاييس الصحة المهنية',
  'description_ar' => 'صُمم هذا المقياس لمساعدتك على التعرف إلى مستوى الاحتراق الوظيفي لديك، وفهم تأثير ضغوط العمل على صحتك النفسية وطاقتك المهنية وشعورك بالإنجاز في العمل. ولا يُعد هذا المقياس اختبارًا للنجاح أو الفشل، كما أنه ليس أداة للحكم على كفاءتك المهنية، بل وسيلة تساعدك على زيادة وعيك بذاتك المهنية وتحديد الجوانب التي قد تحتاج إلى تطوير أو دعم.',
  'programs_ar' => 'التعافي من الاحتراق الوظيفي، إدارة الطاقة الشخصية والوقاية من الاستنزاف، إعادة بناء الدافعية والمعنى المهني، المرونة النفسية المتقدمة في مواجهة الضغوط، العلاج المعرفي السلوكي للضغوط المهنية (برنامج تدريبي)، إدارة الأعباء المهنية ومنع الإنهاك الوظيفي، الصحة النفسية والرفاه المهني، برنامج الإرشاد المهني الفردي (Coaching)، إدارة الوقت والأولويات المهنية، التوازن بين الحياة والعمل، المرونة النفسية في بيئة العمل، تعزيز الدافعية المهنية، الصحة النفسية المهنية، إدارة الضغوط المهنية، الذكاء العاطفي في بيئة العمل، التعافي النفسي من ضغوط العمل، بناء الصمود والمرونة المهنية، اليقظة الذهنية (Mindfulness) في العمل، إدارة الصراعات وضغوط العلاقات المهنية، استراتيجيات المحافظة على الرفاه الوظيفي',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'الإرهاق الانفعالي والنفسي',
      'max_score' => 20,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أشعر باستنزاف طاقتي بسبب العمل',
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
          'text_ar' => 'أبدأ يوم العمل وأنا أشعر بالتعب',
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
          'text_ar' => 'أجد صعوبة في استعادة نشاطي بعد انتهاء العمل',
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
          'text_ar' => 'أشعر بضغوط مستمرة مرتبطة بمهام العمل',
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
          'text_ar' => 'أشعر بالإرهاق عند التفكير في متطلبات العمل',
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
          'text_ar' => 'أواجه صعوبة في التركيز بسبب الضغوط الوظيفية',
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
          'text_ar' => 'أشعر أن العمل يستهلك معظم طاقتي النفسية',
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
          'text_ar' => 'أعاني من التوتر المرتبط بالعمل حتى خارج أوقات الدوام',
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
          'text_ar' => 'أشعر أن متطلبات العمل تفوق قدرتي على التحمل',
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
          'text_ar' => 'أحتاج إلى وقت طويل للتعافي من ضغوط العمل',
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
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرة جيدة على إدارة الضغوط واستعادة طاقتك النفسية بعد العمل. لديك موارد نفسية جيدة تمكنك من التعامل مع الضغوط المهنية دون استنزاف كبير، وتشعر بالنشاط معظم الوقت، وتستطيع التعافي بعد أيام العمل المجهدة. كما تحتفظ بقدرتك على التركيز والانتباه، ولا تحمل مشكلات العمل معك باستمرار خارج الدوام، وتتمتع بقدرة جيدة على ضبط الانفعالات والصمود النفسي والمرونة المهنية.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى وجود إجهاد نفسي متكرر بدأ يؤثر على راحتك النفسية، لكنه لم يصل بعد إلى مرحلة الاستنزاف الحاد. لديك شعور بالتعب في نهاية يوم العمل، وتزايد الحاجة إلى فترات الراحة، وانخفاض التركيز في بعض الأوقات، والتوتر عند تراكم المهام، والشعور أحيانًا بأن الأعباء تفوق الطاقة المتاحة. أنت في مرحلة إنذار مبكر تستدعي التدخل الوقائي قبل تطور المشكلة.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'high',
          'interpretation_text_ar' => 'تعكس هذه النتيجة حالة استنزاف نفسي وانفعالي واضحة تجعلك تشعر بأنه لم تعد تمتلك الطاقة الكافية لمواصلة العمل بنفس الكفاءة. تعاني من تعب مزمن ومستمر، وتشعر بالإرهاق عند بداية الدوام، وتعاني من صعوبة التركيز واتخاذ القرارات، واضطرابات النوم المرتبطة بالتفكير في العمل، وسرعة الانفعال أو الحساسية الزائدة للمواقف المهنية. ومن التأثيرات المحتملة انخفاض الأداء، وكثرة الأخطاء، وتراجع الرضا الوظيفي، وارتفاع احتمالية الغياب أو طلب الإجازات.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'التبلد المهني وضعف الارتباط بالعمل',
      'max_score' => 20,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أصبحت أقل حماسًا تجاه عملي مقارنة بالسابق',
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
          'text_ar' => 'أؤدي مهامي بشكل آلي دون اهتمام كافٍ',
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
          'text_ar' => 'أشعر بفتور تجاه زملائي أو المستفيدين من خدماتي',
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
          'text_ar' => 'أصبحت أقل اهتمامًا بنتائج عملي',
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
          'text_ar' => 'أشعر بأن العمل مجرد واجب ثقيل',
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
          'text_ar' => 'أتجنب الانخراط في الأنشطة المهنية الإضافية',
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
          'text_ar' => 'أشعر بانخفاض انتمائي للمؤسسة',
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
          'text_ar' => 'أصبحت أقل اهتمامًا بتطوير أدائي المهني',
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
          'text_ar' => 'أفتقد الشعور بالمتعة أثناء أداء العمل',
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
          'text_ar' => 'أشعر برغبة متكررة في الابتعاد عن بيئة العمل',
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
          'level' => 'low',
          'interpretation_text_ar' => 'تشعر بالانتماء المهني وتحتفظ بعلاقتك الإيجابية مع العمل. تهتم بنتائج العمل، ولديك الرغبة في تقديم أداء جيد، والمشاركة الإيجابية مع الزملاء، والشعور بأهمية دورك المهني. ويوجد لديك ارتباط نفسي صحي بالعمل.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'بدأت تظهر لديك مؤشرات فتور أو تراجع في الحماس والارتباط المهني، مثل انخفاض الرغبة في المبادرة، وأداء المهام بشكل روتيني، وتراجع الاهتمام بالتطوير المهني، وتقليل التفاعل مع الأنشطة المؤسسية. أنت في مرحلة انتقالية بين الاندماج المهني والانفصال النفسي عن العمل، ومن التأثيرات المحتملة انخفاض الإبداع وضعف المشاركة وتراجع جودة خدمة المستفيدين.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'high',
          'interpretation_text_ar' => 'يوجد لديك انفصال نفسي واضح عن العمل وفقدان ملحوظ للحماس والانتماء المهني. لديك شعور بأن العمل مجرد عبء، وفقدان الاهتمام بنتائج الأداء، والرغبة المتكررة في ترك العمل، وانخفاض التعاطف مع المستفيدين أو العملاء، والسخرية أو التشاؤم تجاه المؤسسة. ومن المحتمل أن يصاحب ذلك انخفاض الالتزام التنظيمي، وضعف روح الفريق، وزيادة نية ترك العمل، وانخفاض جودة الأداء المهني.',
          'high_threshold' => 999,
          'low_threshold' => 14,
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'انخفاض الشعور بالإنجاز والكفاءة المهنية',
      'max_score' => 20,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أشعر أن إنجازاتي المهنية أقل من المتوقع',
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
          'text_ar' => 'أشك في قدرتي على أداء عملي بكفاءة',
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
          'text_ar' => 'أشعر بأن جهودي لا تحقق نتائج ملموسة',
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
          'text_ar' => 'أجد صعوبة في الشعور بالفخر بإنجازاتي المهنية',
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
          'text_ar' => 'أشعر أن مساهمتي في العمل محدودة',
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
          'text_ar' => 'نادرًا ما أشعر بالنجاح في عملي',
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
          'text_ar' => 'أشعر بأن أدائي يتراجع مع الوقت',
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
          'text_ar' => 'أفتقد الشعور بالتقدم المهني',
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
          'text_ar' => 'أعتقد أن قدراتي المهنية لا تُستثمر بالشكل المناسب',
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
          'text_ar' => 'أشعر بأن عملي لا يحقق أهدافي المهنية',
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
          'level' => 'low',
          'interpretation_text_ar' => 'تشعر بالكفاءة والنجاح والثقة في قدراتك المهنية. لديك ثقة في أدائك، وإحساس بقيمة إنجازاتك، وشعور بالتقدم المهني، وإيمان بجدوى الجهد المبذول، ولديك مستوى جيد من الكفاءة الذاتية المهنية.',
          'high_threshold' => 6,
          'low_threshold' => 0,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'توجد لديك شكوك أو مخاوف متقطعة تتعلق بقدرتك على الإنجاز أو تحقيق الأهداف المهنية. قد تقارن نفسك بالآخرين بصورة متكررة، وتشعر بأن إنجازاتك أقل من المتوقع، ولديك حاجة مستمرة إلى التقدير الخارجي، وانخفاض الثقة في بعض المواقف المهنية، مما قد يؤثر على تردّدك في اتخاذ القرار، وتجنبك للمهام الصعبة، وانخفاض مبادرتك.',
          'high_threshold' => 13,
          'low_threshold' => 7,
        ),
        2 =>
        array (
          'level' => 'high',
          'interpretation_text_ar' => 'تشعر بضعف واضح في الكفاءة المهنية وعدم الرضا عن الإنجازات المحققة. تشعر بالفشل المهني رغم الجهد المبذول، وتعاني من انخفاض الثقة بالنفس، وتعتقد بأن أداءك غير كافٍ، ولديك إحساس بعدم التقدم الوظيفي، وفقدان الشعور بالفخر بإنجازاتك. ومن تأثيرات ذلك ضعف الدافعية، وتجنب المسؤوليات الجديدة، وتراجع التطور المهني، وزيادة احتمالية الانسحاب النفسي من العمل. وقد يكون السبب في ذلك نقص التغذية الراجعة الإيجابية، أو محدودية فرص الترقية، أو غموض معايير النجاح، أو ضعف الثقة المهنية، أو عدم توافق المهام مع القدرات أو التخصص.',
          'high_threshold' => 999,
          'low_threshold' => 14,
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
      'description_ar' => 'تشير هذه النتيجة إلى وجود مستوى مرتفع من الاحتراق الوظيفي، حيث أصبحت الضغوط المهنية تؤثر بصورة واضحة على الحالة النفسية والانفعالية والدافعية المهنية لديك.

من أهم التأثيرات: الشعور المستمر بالإرهاق والاستنزاف، وفقدان الحماس تجاه العمل، وانخفاض الاهتمام بنتائج الأداء، والشعور بالعجز أو عدم الكفاءة، وصعوبة التركيز واتخاذ القرار، والانسحاب من التفاعل المهني والاجتماعي، وزيادة التوتر والانفعال، والشعور بعدم التقدير أو عدم جدوى الجهد المبذول.

وكان لذلك تأثير على الأداء من خلال: انخفاض ملحوظ في الإنتاجية، وزيادة الأخطاء المهنية، وضعف جودة الخدمة أو الإنجاز، وتراجع المبادرة والابتكار، وصعوبة الالتزام بالمواعيد والمتطلبات، وزيادة احتمالات الغياب والتأخر.

التأثير النفسي والصحي المحتمل: قد يرتبط الاحتراق المرتفع بما يلي: اضطرابات النوم، والقلق والتوتر المزمن، والصداع والإجهاد الجسدي، وضعف الرضا عن الحياة، وانخفاض الدافعية العامة، وأعراض اكتئابية لدى بعض الحالات.

يُنصح بتدخل عاجل يشمل: تقييم أسباب الاحتراق داخل بيئة العمل، وتقديم جلسات إرشاد أو دعم نفسي مهني، وتخفيف الأعباء الوظيفية مؤقتًا إن أمكن، وإشراك الموظف في برامج التعافي المهني، وإعداد خطة متابعة دورية كل 3-6 أشهر.',
    ),
    1 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 20,
      'description_ar' => 'تشير هذه النتيجة إلى أنك تتمتع بمستوى جيد من الصحة المهنية والنفسية، وأن الضغوط التي تواجهها تقع ضمن الحدود الطبيعية التي يمكن التعامل معها دون أن تؤثر بشكل كبير على الأداء أو الرضا الوظيفي. فأنت تتسم بالسمات التالية:
- الشعور بالنشاط خلال معظم أيام العمل
- القدرة على التعامل مع المشكلات المهنية بمرونة
- الحفاظ على الحماس والاهتمام بالمهام الوظيفية
- وجود علاقات مهنية إيجابية مع الزملاء والمستفيدين
- الشعور بالرضا عن الإنجازات المهنية
- التوازن المقبول بين العمل والحياة الشخصية

وتؤثر هذه النتيجة إيجابًا على الأداء من حيث: إنتاجية مستقرة، وجودة أداء مرتفعة، وانخفاض احتمالات الغياب أو التسرب الوظيفي، واستعداد جيد للتعلم والتطوير المهني.

أنت لا تحتاج إلى تدخل علاجي، وإنما إلى برامج وقائية تعزز استدامة صحتك المهنية وتحافظ على مستويات الدافعية والإنجاز، وتعزز عوامل الحماية من الاحتراق الوظيفي مستقبلًا.',
    ),
    2 =>
    array (
      'level' => 'medium',
      'low_threshold' => 21,
      'high_threshold' => 40,
      'description_ar' => 'تشير هذه النتيجة إلى وجود علامات أولية أو متوسطة للاحتراق الوظيفي بدأت تؤثر عليك بدرجات متفاوتة. ورغم أنك ما زلت قادرًا على أداء مهامك، فإن استمرار الظروف الحالية قد يؤدي إلى تفاقم المشكلة مستقبلًا.

من المؤشرات السلوكية المتوقعة لديك: الشعور بالإجهاد بصورة متكررة، وانخفاض الحماس لبعض المهام، وصعوبة متزايدة في التركيز، والتذمر من ضغوط العمل، والشعور بأن متطلبات العمل تتزايد باستمرار، وانخفاض الرضا الوظيفي مقارنة بالفترات السابقة، والرغبة أحيانًا في الابتعاد عن بيئة العمل.

ومن التأثيرات على الأداء: انخفاض جزئي في الإنتاجية، وزيادة احتمالات الأخطاء المهنية، وضعف المبادرة والإبداع، وتراجع المشاركة في الأنشطة التطويرية، وانخفاض مستوى التعاون أحيانًا.

إذا استمرت مصادر الضغط دون معالجة فقد يتطور الوضع إلى احتراق وظيفي مرتفع، وزيادة الغياب الوظيفي، وانخفاض الالتزام المؤسسي، والتفكير في ترك العمل أو الانتقال إلى جهة أخرى.

يُنصح بإدخالك في برامج تنموية ووقائية تركز على إدارة الضغوط، وتنظيم الوقت، واستعادة التوازن المهني والنفسي قبل تفاقم الحالة، بهدف خفض مؤشرات الاحتراق الحالية ومنع تطورها إلى مستويات مرتفعة.',
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