<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment21Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'الرضا الوظيفي',
  'category' => 'مقاييس التوجيه والتوافق المهني',
  'description_ar' => 'مقياس الرضا الوظيفي هو أداة تساعدك على التعرف إلى مستوى رضاك عن مختلف جوانب عملك، مثل الحوافز المادية، والتقدير الاجتماعي، وفرص التطور والترقي، والعلاقات مع الزملاء، والرضا عن الذات، وتوافر متطلبات العمل، والإدارة والقيادة. ويهدف المقياس إلى تحديد نقاط القوة والجوانب التي تحتاج إلى تطوير، بما يسهم في تحسين تجربتك الوظيفية، وزيادة شعورك بالرضا والإنجاز، ودعم نموك المهني والشخصي من خلال اقتراح برامج ومبادرات تطويرية مناسبة لاحتياجاتك.',
  'programs_ar' => 'إدارة الضغوط والاحتراق الوظيفي، الدافعية الذاتية والتحفيز المهني، حل المشكلات واتخاذ القرار، إدارة الصراعات والخلافات في العمل، الصحة النفسية والرفاه الوظيفي، بناء الثقة والعلاقات المهنية الإيجابية، التوافق المهني وإعادة اكتشاف الأهداف المهنية، برنامج إرشاد وظيفي فردي أو جماعي، إدارة التغيير والتكيف مع المتغيرات التنظيمية، تعزيز المرونة النفسية والصمود المهني، إدارة الوقت والأولويات، مهارات التواصل الفعال في بيئة العمل، العمل الجماعي وبناء فرق العمل، الإبداع والابتكار في العمل، التخطيط والتطوير المهني، الذكاء العاطفي في العمل، تعزيز الانتماء والولاء المؤسسي، المرونة المهنية والتكيف مع التغيير، القيادة التحويلية في المؤسسات، إدارة المواهب والتعاقب الوظيفي، الإرشاد والتوجيه المهني، الابتكار والتفكير الاستراتيجي، إدارة فرق العمل عالية الأداء، صناعة القادة وبناء الصف الثاني',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'الحوافز المادية',
      'max_score' => 10,
      'order_index' => 0,
      'questions' =>
      array (
        0 => array ('text_ar' => 'تتناسب ساعات العمل مع أجري الشهري.', 'order_index' => 0,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'يتناسب راتبي مع الجهد الذي أبذله.', 'order_index' => 1,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'يتناسب راتبي مع المستوى المعيشي السائد في البلد.', 'order_index' => 2,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'يتناسب راتبي مع الشهادة الدراسية التي أحملها.', 'order_index' => 3,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'يكفي الراتب لحاجاتي الأساسية.', 'order_index' => 4,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك غير راضٍ عن الحوافز المادية التي يقدمها لك العمل الحالي، وهو ما لا يشجعك على بذل الجهد في العمل وتجنيد ما لديك من قدرات. وأنت غير راضٍ عن تناسب ساعات العمل مع أجرك الشهري ومع الجهد الذي تبذله، وهو لا يتناسب مع المستوى المعيشي السائد في البلد ومع الشهادة الدراسية التي تحملها، وهو لا يكفي لحاجاتك الأساسية.',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 4, 'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك راضٍ بدرجة متوسطة عن الحوافز المادية التي يقدمها لك العمل الحالي، وهو ما يشجعك أحيانًا على بذل الجهد في العمل. وأنت راضٍ بدرجة متوسطة عن تناسب ساعات العمل مع أجرك الشهري ومع الجهد الذي تبذله، وهو يتناسب بدرجة متوسطة مع المستوى المعيشي السائد في البلد ومع الشهادة الدراسية التي تحملها.',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 7, 'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك راضٍ بدرجة كبيرة عن الحوافز المادية التي يقدمها لك العمل الحالي، وهو ما يشجعك على بذل قصارى جهدك في العمل وتجنيد ما لديك من قدرات والارتفاع بمستوى كفايتك. فأنت راضٍ بدرجة كبيرة عن تناسب ساعات العمل مع أجرك الشهري ومع الجهد الذي تبذله، وهو يتناسب مع المستوى المعيشي السائد في البلد ومع الشهادة الدراسية التي تحملها، وهو يكفي لحاجاتك الأساسية.',
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'الثواب الاجتماعي',
      'max_score' => 10,
      'order_index' => 1,
      'questions' =>
      array (
        0 => array ('text_ar' => 'يقدّر أفراد أسرتي أهمية عملي.', 'order_index' => 5,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أشعر بالتقدير من المحيطين بي.', 'order_index' => 6,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'يحترم الآخرون إنجازاتي المهنية.', 'order_index' => 7,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'يتقبل المحيطون بي عملي الحالي.', 'order_index' => 8,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'تشجيع المحيطين بي يدفعني لإنجاز مهام عملي.', 'order_index' => 9,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنه ليس لديك رضا عن الثواب الاجتماعي، وهو الحافز الذي من المفترض أن يساعدك ويحقق لك إشباع حاجاتك الأخرى النفسية والاجتماعية، فيزيد من شعورك بالرضا في عملك وولائك له، فيما يتعلق بالتعاون بين زملائك، وفرص الترقية، والاعتراف، والتقدير بالجهد الوظيفي، ومسؤوليات الوظيفة، والأثر الوظيفي، والمشاركة في اتخاذ القرارات، وفرص النمو والابتكار، وفرص التعبير عن الذات وإبداء الرأي والاقتراحات.',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 4, 'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك رضا بدرجة متوسطة عن الثواب الاجتماعي، وهو الحافز الذي يساعدك ويحقق لك إشباع حاجاتك الأخرى النفسية والاجتماعية بدرجة متوسطة، فيزيد من شعورك بالرضا في عملك وولائك له بدرجة متوسطة، فيما يتعلق بالتعاون بين زملائك، وفرص الترقية، والاعتراف، والتقدير بالجهد الوظيفي، ومسؤوليات الوظيفة، والأثر الوظيفي، والمشاركة في اتخاذ القرارات، وفرص النمو والابتكار، وفرص التعبير عن الذات وإبداء الرأي والاقتراحات.',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 7, 'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك رضا مرتفعًا عن الثواب الاجتماعي، وهو الحافز الذي يساعدك ويحقق لك إشباع حاجاتك الأخرى النفسية والاجتماعية، فيزيد من شعورك بالرضا في عملك وولائك له، ويحقق التعاون بين زملائك، ومنها فرص الترقية، والاعتراف، والتقدير بالجهد الوظيفي، ومسؤوليات الوظيفة، والأثر الوظيفي، والمشاركة في اتخاذ القرارات، وفرص النمو والابتكار، وفرص التعبير عن الذات وإبداء الرأي والاقتراحات.',
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'التطور والترقي الوظيفي',
      'max_score' => 12,
      'order_index' => 2,
      'questions' =>
      array (
        0 => array ('text_ar' => 'مناسبة فرص الترقي الوظيفي.', 'order_index' => 10,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'توفير الاستقرار الوظيفي.', 'order_index' => 11,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'هذه الوظيفة مناسبة لي.', 'order_index' => 12,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'خدمة هذا العمل لمستقبلي الوظيفي.', 'order_index' => 13,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'وجود فرص التدريب المؤدية للترقية.', 'order_index' => 14,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'وجود مسارات متنوعة وثرية للترقي الوظيفي.', 'order_index' => 15,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك غير راضٍ عن التطور والترقي الوظيفي والمتعلق بضمان الاستقرار الوظيفي، فأنت غير راضٍ بهذا المجال، مما كان له تأثير سلبي عليك من ناحية وجود القلق والخوف نتيجة الافتقار إلى الضمان الوظيفي، وعدم حصولك على الترقيات المناسبة، حيث لا تتوافر فرص التدريب المؤدية للترقية، ولا توجد مسارات متنوعة للترقي الوظيفي.',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 4, 'high_threshold' => 8,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك راضٍ بدرجة متوسطة عن التطور والترقي الوظيفي والمتعلق بضمان الاستقرار الوظيفي، فأنت مطمئن وراضٍ إلى حد ما بهذا المجال، مما كان له تأثير إيجابي عليك من ناحية الاطمئنان وعدم الخوف نتيجة الضمان الوظيفي، وحصولك على الترقيات المناسبة ليس بالشكل المطلوب، حيث لا تتوافر فرص التدريب المؤدية للترقية بشكل كبير، ولا تتوافر مسارات متنوعة وثرية للترقي الوظيفي بشكل كافٍ.',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 9, 'high_threshold' => 12,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك راضٍ بدرجة عالية عن التطور والترقي الوظيفي والمتعلق بضمان الاستقرار الوظيفي، فأنت مطمئن وراضٍ بهذا المجال، مما كان له تأثير إيجابي عليك من ناحية الاطمئنان وعدم الخوف نتيجة الضمان الوظيفي، وحصولك على الترقيات المناسبة، حيث تتوافر فرص التدريب المؤدية للترقية، وتوجد مسارات متنوعة وثرية للترقي الوظيفي.',
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'العلاقة بالزملاء',
      'max_score' => 12,
      'order_index' => 3,
      'questions' =>
      array (
        0 => array ('text_ar' => 'هناك ود في علاقتي بزملائي.', 'order_index' => 16,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'يوجد تعاون بيني وبين زملائي في العمل.', 'order_index' => 17,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'هناك تواصل إنساني بيني وبين زملائي.', 'order_index' => 18,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'يقدّر زملائي أفكاري ومقترحاتي.', 'order_index' => 19,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'تتاح الفرصة لي لتكوين صداقات كثيرة.', 'order_index' => 20,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'تتوافر فرص العمل بروح الجماعة.', 'order_index' => 21,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك غير راضٍ عن علاقتك بالزملاء في العمل، وهو من العوامل التي قد تجعلك تفكر في عدم الاستمرار في وظيفتك، وهو ما ساعد في عدم رضاك الوظيفي وبالتالي أثّر بشكل سلبي على مستوى ونوعية الأداء. فلديك عدم ود في علاقتك بزملائك، ولا يوجد تعاون بينك وبينهم، كما أنه لا يوجد تواصل إنساني معهم، وهم لا يقدّرون أفكارك ومقترحاتك، ولا تتوافر لديكم في العمل روح الجماعة.',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 4, 'high_threshold' => 8,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك راضٍ بدرجة متوسطة عن علاقتك بالزملاء في العمل، وهو ما ساعد في الشعور بالرضا وبالتالي أثّر بشكل إيجابي (بدرجة متوسطة) على مستوى ونوعية الأداء. فلديك أحيانًا بعض الود في علاقتك بزملائك، ويوجد شيء من التعاون بينك وبينهم، كما أن هناك تواصلًا إنسانيًا محدودًا معهم، وهم يقدّرون أفكارك ومقترحاتك أحيانًا.',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 9, 'high_threshold' => 12,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك راضٍ بشكل كبير عن علاقتك بالزملاء في العمل، وهو من العوامل التي ساعدت في بقائك في عملك واستمرارك في وظيفتك، وهو ما ساعد في رضاك الوظيفي وبالتالي أثّر بشكل إيجابي على مستوى ونوعية الأداء. فلديك ود في علاقتك بزملائك، ويوجد تعاون بينك وبينهم، كما أن هناك تواصلًا إنسانيًا معهم، وهم يقدّرون أفكارك ومقترحاتك، وتتوافر لديكم في العمل روح الجماعة.',
        ),
      ),
    ),
    4 =>
    array (
      'name_ar' => 'الرضا عن الذات',
      'max_score' => 12,
      'order_index' => 4,
      'questions' =>
      array (
        0 => array ('text_ar' => 'يتناسب عملي مع إمكاناتي.', 'order_index' => 22,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أحقق ذاتي في عملي.', 'order_index' => 23,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أشعر بالرضا عن عملي الحالي.', 'order_index' => 24,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'يتيح لي العمل فرص الإبداع والابتكار.', 'order_index' => 25,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أشعر بالقدرة على الإنجاز في مجال عملي.', 'order_index' => 26,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'أحب الاستمرار في العمل الحالي.', 'order_index' => 27,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك غير راضٍ عن ذاتك، حيث إن نظرتك للعمل سلبية وترى أن العمل الحالي لا يتناسب مع إمكاناتك، ولا تحقق ذاتك من خلال هذا العمل، ولا تمتلك المهارات الوظيفية اللازمة لهذه الوظيفة، وتشعر بعدم القدرة على العطاء والإنجاز في مجال العمل، ولا يتيح لك العمل فرص الإبداع والابتكار، ولا تحب الاستمرار في هذا العمل.',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 4, 'high_threshold' => 8,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك راضٍ بدرجة متوسطة عن ذاتك، حيث إن نظرتك للعمل إيجابية إلى حد ما وترى أن العمل الحالي يتناسب مع إمكاناتك، وتحقق ذاتك من خلال هذا العمل، وتمتلك بعض المهارات الوظيفية لهذه الوظيفة، وتشعر بالقدرة أحيانًا على العطاء والإنجاز في مجال العمل، ويتيح لك العمل فرص الإبداع والابتكار أحيانًا.',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 9, 'high_threshold' => 12,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك راضٍ بدرجة عالية عن ذاتك، حيث إن نظرتك للعمل إيجابية وترى أن العمل الحالي يتناسب مع إمكاناتك، وتحقق ذاتك من خلال هذا العمل، وتمتلك المهارات الوظيفية اللازمة لهذه الوظيفة، وتشعر بالقدرة على العطاء والإنجاز في مجال العمل، ويتيح لك العمل فرص الإبداع والابتكار، وتحب الاستمرار في هذا العمل.',
        ),
      ),
    ),
    5 =>
    array (
      'name_ar' => 'توافر متطلبات العمل',
      'max_score' => 10,
      'order_index' => 5,
      'questions' =>
      array (
        0 => array ('text_ar' => 'تتوافر متطلبات العمل في مكان عملي.', 'order_index' => 28,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أتلقى المعونة والأدوات الكافية لإنجاز عملي.', 'order_index' => 29,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'تتوافر التجهيزات للقيام بالنشاطات المختلفة.', 'order_index' => 30,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'يتناسب المبنى مع طبيعة العمل.', 'order_index' => 31,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'مناسبة الإضاءة والأثاث.', 'order_index' => 32,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 3,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك غير راضٍ عن توافر متطلبات العمل، وهو ما يتعلق بالنواحي المادية الخاصة بالعمل، مثل عدم توافر الأدوات والتجهيزات الكافية لإنجازه، وعدم تناسب المبنى أو الإضاءة والأثاث، وعدم توافر التجهيزات للقيام بالنشاطات المختلفة.',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 4, 'high_threshold' => 6,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك مستوى متوسطًا من الرضا عن توافر متطلبات العمل، وهو ما يتعلق بالنواحي المادية الخاصة بالعمل، مثل توافر الأدوات والتجهيزات الكافية لإنجازه، وتناسب المبنى ومناسبة الإضاءة والأثاث بدرجة متوسطة، وتوافر التجهيزات للقيام بالنشاطات المختلفة بشكل جزئي.',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 7, 'high_threshold' => 10,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن لديك مستوى عاليًا من الرضا عن توافر متطلبات العمل، وهو ما يتعلق بالنواحي المادية الخاصة بالعمل، مثل توافر الأدوات والتجهيزات الكافية لإنجازه، وتناسب المبنى ومناسبة الإضاءة والأثاث، وتوافر التجهيزات للقيام بالنشاطات المختلفة.',
        ),
      ),
    ),
    6 =>
    array (
      'name_ar' => 'الإدارة والقيادة',
      'max_score' => 14,
      'order_index' => 6,
      'questions' =>
      array (
        0 => array ('text_ar' => 'حسن تعامل المدير معي.', 'order_index' => 33,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'يتقبل المدير اقتراحاتي بحماس.', 'order_index' => 34,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'يقدّر رئيسي الجهد الذي أبذله في العمل.', 'order_index' => 35,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'يشاركني مديري مشاركة وجدانية عندما تواجهني أزمة.', 'order_index' => 36,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'مديري لديه القدرة على توزيع العمل بعدالة.', 'order_index' => 37,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'مديري متعاون في العمل.', 'order_index' => 38,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 => array ('text_ar' => 'وجود قدر معقول من الصلاحيات لدي لأداء مهامي.', 'order_index' => 39,
          'options' => array (
            0 => array ('label_ar' => 'بدرجة عالية', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'بدرجة متوسطة', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'غير راضٍ', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
      ),
      'interpretations' =>
      array (
        0 => array ('level' => 'low', 'low_threshold' => 0, 'high_threshold' => 4,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك غير راضٍ عن المشرفين والقيادات لديك، فالمشرف لا يجعلك محورًا لاهتمامه، إذ يقصر اهتمامه على الإنتاج وأهدافه، ويعتبرك مجرد أداة لتحقيق أهداف العمل، فلا يكسب ولاءك ويجعل مشاعر الاستياء تنتشر بينك وبينه. ولا يتسم بسعة الصدر عند حدوث أخطاء من جانبك، وسلوك المشرف غير متوافق مع تفضيلاتك وخصائصك، مما أضعف رضاك عن العمل. ولا يتقبل المدير اقتراحاتك بحماس، ولا يقدّر الجهد الذي تبذله في العمل، ولا يشاركك مشاركة وجدانية عندما تواجهك أزمة، كما أن مديرك غير متعاون في العمل ولا يعطيك قدرًا من الصلاحيات لأداء مهامك.',
        ),
        1 => array ('level' => 'medium', 'low_threshold' => 5, 'high_threshold' => 9,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك راضٍ بدرجة متوسطة عن المشرفين والقيادات لديك، فالمشرف يجعلك أحيانًا محورًا لاهتمامه، وذلك بتنمية العلاقات المساندة الشخصية بينه وبينك واهتمامه الشخصي بك، وتفهمه وسعة صدره أحيانًا عند حدوث أخطاء من جانبك يكسب ولاءك ويحقق رضا متوسطًا عن العمل. وسلوك المشرف متوافق إلى حد ما مع تفضيلاتك وخصائصك. ويتقبل المدير أحيانًا اقتراحاتك بحماس، ويقدّر أحيانًا الجهد الذي تبذله في العمل، ويشاركك أحيانًا مشاركة وجدانية عندما تواجهك أزمة، كما أن مديرك متعاون إلى حد ما في العمل ويعطيك قدرًا متوسطًا من الصلاحيات لأداء مهامك.',
        ),
        2 => array ('level' => 'high', 'low_threshold' => 10, 'high_threshold' => 14,
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك راضٍ بدرجة كبيرة عن المشرفين والقيادات لديك، فالمشرف يجعلك محورًا لاهتمامه، وذلك بتنمية العلاقات المساندة الشخصية بينه وبينك واهتمامه الشخصي بك، وتفهمه وسعة صدره عند حدوث أخطاء من جانبك يكسب ولاءك ويحقق لك رضا عاليًا عن العمل. وسلوك المشرف متوافق مع تفضيلاتك وخصائصك، مما يُقوّي تأثيره على رضاك عن العمل. ويتقبل المدير اقتراحاتك بحماس، ويقدّر الجهد الذي تبذله في العمل، ويشاركك مشاركة وجدانية عندما تواجهك أزمة، كما أن مديرك متعاون في العمل ويعطيك قدرًا من الصلاحيات لأداء مهامك.',
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
      'high_threshold' => 26,
      'description_ar' => 'تشير نتيجتك إلى أن لديك مجموعة من المشاعر السلبية التي تبديها نحو عملك، مثل الأجر الذي تحصل عليه وفرص الترقية المتاحة، ووجود توتر وقلق وعدم ولاء في محيط العمل الذي تنتمي إليه، قد ينتج عنه عدم الإخلاص في العمل. وحالتك النفسية والسلوكية الناتجة عن إدراكك لمستوى ما يحققه العمل لك من إشباع فكري ووظيفي كانت سلبية، ولديك عدم قناعة وعدم قبول في إشباع حاجاتك ورغباتك الناتجة من الوظيفة، مع شعور بعدم الثقة وعدم الولاء والانتماء، وردود فعل سلبية عن مدى تحقيق العمل لغاياته.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 27,
      'high_threshold' => 53,
      'description_ar' => 'تشير نتيجتك إلى أن لديك مجموعة من المشاعر المتأرجحة بين الإيجابية والسلبية تجاه عملك، مثل الأجر الذي تحصل عليه وفرص الترقية المتاحة، مع معاناة محيط العمل الذي تنتمي إليه من درجة معينة من التوتر والقلق، وولاء للمهنة يتمثل في إخلاصك للعمل والمؤسسة التي تعمل بها بدرجة متوسطة. وحالتك النفسية والسلوكية الناتجة عن إدراكك لمستوى ما يحققه العمل لك من إشباع فكري ووظيفي كانت متوسطة بين الإيجابية والسلبية، ولديك قناعة وقبول متوسطان إلى حد ما في إشباع حاجاتك ورغباتك الناتجة من الوظيفة، مع شعور متأرجح بين الثقة وعدم الثقة، وردود فعل متفاوتة عن مدى تحقيق العمل لغاياته.',
    ),
    2 =>
    array (
      'level' => 'high',
      'low_threshold' => 54,
      'high_threshold' => 80,
      'description_ar' => 'تشير نتيجتك إلى أن لديك مجموعة من المشاعر الإيجابية التي تبديها نحو عملك، مثل الأجر الذي تحصل عليه وفرص الترقية المتاحة، وخلو محيط العمل الذي تنتمي إليه من التوتر والقلق، والولاء للمهنة الذي يتمثل في إخلاصك للعمل والمؤسسة التي تعمل بها. وحالتك النفسية والسلوكية الناتجة عن إدراكك لمستوى ما يحققه العمل لك من إشباع فكري ووظيفي كانت إيجابية، ولديك قناعة وقبول في إشباع حاجاتك ورغباتك الناتجة من الوظيفة، من خلال تفاعلك مع العمل نفسه وبيئة العمل، وشعورك بالثقة والولاء والانتماء، وردود فعلك الإيجابية عن مدى تحقيق العمل لغاياته.',
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