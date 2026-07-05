<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class FinalComprehensiveSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data
        DB::statement('PRAGMA foreign_keys=OFF;');
        Recommendation::truncate();
        DimensionInterpretation::truncate();
        AnswerOption::truncate();
        Question::truncate();
        Dimension::truncate();
        Assessment::truncate();
        DB::statement('PRAGMA foreign_keys=ON;');

        $data = array (
  0 => 
  array (
    'title_ar' => 'اعرف نمطك القيادي',
    'category' => 'القيادة والإدارة',
    'description_ar' => 'يهدف هذا المقياس إلى مساعدتك في التعرف على نمط القيادة الذي تميل إليه.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'القيادة الأوتوقراطية (المتسلطة)',
        'max_score' => 10,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أحدد بنفسي الأهداف وطريقة تنفيذها دون الرجوع للفريق.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتوقع من المرؤوسين تنفيذ التعليمات بدقة دون مناقشة.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتخذ القرارات السريعة بنفسي عندما يتطلب الموقف ذلك.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أراقب أداء الفريق بشكل دقيق لضمان الالتزام بالمعايير.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أرى أن سلطة القائد يجب أن تُحترم ولا تُناقش.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      1 => 
      array (
        'name_ar' => 'القيادة الديمقراطية',
        'max_score' => 10,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أشاور أعضاء الفريق قبل اتخاذ القرارات المصيرية.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أشجع المرؤوسين على تقديم الآراء والمقترحات الجديدة.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أوزّع المهام بناءً على رغبة وقدرات كل فرد في الفريق.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أرحب بالنقد البناء من أعضاء الفريق لتطوير العمل.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أحرص على أن يشعر الجميع بأن لهم دورًا في نجاح القرار.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      2 => 
      array (
        'name_ar' => 'القيادة المتساهلة (الفوضوية)',
        'max_score' => 10,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أترك للفريق حرية اختيار الطريقة المناسبة لإنجاز مهامهم.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتدخل فقط عندما يطلب مني أعضاء الفريق المساعدة.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أمنح المرؤوسين استقلالية كاملة في اتخاذ قرارات العمل اليومية.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أتجنب إصدار تعليمات مفصلة وأكتفي بتحديد الهدف العام.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أثق بقدرة الفريق على إدارة نفسه دون توجيه مستمر مني.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
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
        'level' => 'autocratic',
        'low_threshold' => 8,
        'high_threshold' => 10,
        'description_ar' => 'أنت قائد أوتوقراطي (تسلطي) تميل إلى السيطرة المباشرة على مجريات العمل، وتؤمن بأن مسؤولية اتخاذ القرارات تقع على عاتقك بشكل أساسي.',
        'programs_ar' => 'الذكاء العاطفي، الاتصال والتأثير، القيادة الموقفية، التفويض والتمكين، إدارة الصراعات، بناء فرق العمل',
      ),
      1 => 
      array (
        'level' => 'democratic',
        'low_threshold' => 8,
        'high_threshold' => 10,
        'description_ar' => 'أنت قائد ديمقراطي تؤمن بأهمية مشاركة مرؤوسيك في اتخاذ القرارات، وترى أن النجاح يتحقق من خلال التعاون.',
        'programs_ar' => 'القيادة الديمقراطية والتشاركية، مهارات الاتصال الفعال، الذكاء العاطفي للقادة، إدارة فرق العمل، التمكين الإداري',
      ),
      2 => 
      array (
        'level' => 'laissez_faire',
        'low_threshold' => 8,
        'high_threshold' => 10,
        'description_ar' => 'أنت قائد متساهل تميل إلى ترك مساحة واسعة من الحرية لمرؤوسيك في أداء أعمالهم واتخاذ قراراتهم.',
        'programs_ar' => 'القيادة الموقفية، مهارات المتابعة والمساءلة، اتخاذ القرار وحل المشكلات، إدارة الأداء والتغذية الراجعة',
      ),
    ),
  ),
  1 => 
  array (
    'title_ar' => 'هل لديك سمات القائد التحويلي؟',
    'category' => 'القيادة والإدارة',
    'description_ar' => 'يهدف هذا المقياس إلى مساعدتك في التعرف على مدى توفر السمات المرتبطة بالقيادة التحويلية لديك.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'التأثير القائم على القدوة (الكاريزما)',
        'max_score' => 8,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'يتحلى سلوكي بالقيم المثلى في العمل.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أثق في قدراتي للتغلب على العقبات التي تواجه المرؤوسين.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'لدي موهبة خاصة في معرفة ما هو المهم بالنسبة للعمل.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أجعل كل من حولي متحمسًا حول المهام الموكلة لهم.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      1 => 
      array (
        'name_ar' => 'الحفز الإلهامي',
        'max_score' => 12,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أربط تحقيق أهداف العمل بالقيم المثلى.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أجعل المرؤوسين يتصرفون كقادة.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشجع على تفهّم وجهات نظر الآخرين.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أجعل المرؤوسين يشعرون بأهمية العمل الذي يقومون به.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أعمل على تنمية روح الفريق الواحد بين العاملين.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أخلق نوعًا من التحدي في العمل لتحقيق أداء أفضل.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      2 => 
      array (
        'name_ar' => 'محور التأثير القائم على القدوة (الكاريزما)',
        'max_score' => 8,
        'order_index' => 1,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت تتمتع بمستوى عالٍ من التأثير القائم على القدوة (الكاريزما)، وتُمثل نموذجاً يُحتذى به.',
            'high_threshold' => 8,
            'low_threshold' => 6,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى تأثيرك كقدوة أخلاقية لدى مرؤوسيك منخفض.',
            'high_threshold' => 2,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت في مستوى متوسط من حيث التأثير القيادي (الكاريزما).',
            'high_threshold' => 5,
            'low_threshold' => 3,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'الاستثارة العقلية',
        'max_score' => 14,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أجعل جميع مشكلات العمل قابلة للحل.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أهتم باكتشاف طرق جديدة لأداء العمل بكفاءة أكثر.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشجع على التفكير في التعامل مع أمور العمل بطرق جديدة.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'آخذ الاقتراحات التي يقدمها فريق العمل وأضعها موضع التنفيذ.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أشجع على التعبير عن آراء وأفكار المرؤوسين.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أتعامل مع الأخطاء على أنها تجارب عمل مفيدة.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أعطي وجهات نظر جديدة للأمور التي كانت بالنسبة للمرؤوسين صعبة.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      4 => 
      array (
        'name_ar' => 'محور الحفز الإلهامي',
        'max_score' => 20,
        'order_index' => 2,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت تتمتع بمهارة عالية في الحفز الإلهامي، لديك قدرة على دفع المرؤوسين نحو مستويات أداء استثنائية.',
            'high_threshold' => 20,
            'low_threshold' => 14,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى الحفز الإلهامي لديك منخفض.',
            'high_threshold' => 6,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت تمتلك قدرات متوسطة في الحفز الإلهامي.',
            'high_threshold' => 13,
            'low_threshold' => 7,
          ),
        ),
      ),
      5 => 
      array (
        'name_ar' => 'الاهتمام الفردي',
        'max_score' => 16,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'عندما يحتاجني الموظف يصل إليّ بسهولة.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أكلّف الموظف بالمهام وفقًا لقدراته.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أراعي الفروق الفردية بين المرؤوسين.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أحاول معرفة ما يريده الموظف وأحاول مساعدته على الحصول عليه.',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أعطي اهتمامًا شخصيًا لأولئك الأعضاء الذين يبدو أنهم منعزلون.',
            'order_index' => 21,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أقدّر مجهودات المرؤوسين في العمل.',
            'order_index' => 22,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أشجع على تطوير قدرات المرؤوسين في العمل.',
            'order_index' => 23,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أساعد المرؤوسين في الحصول على احتياجاتهم الوظيفية.',
            'order_index' => 24,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      6 => 
      array (
        'name_ar' => 'محور الاستثارة الفكرية',
        'max_score' => 12,
        'order_index' => 3,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت تتمتع بمستوى عالٍ في الاستثارة الفكرية، تشجع مرؤوسيك على التفكير الإبداعي.',
            'high_threshold' => 12,
            'low_threshold' => 9,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى الاستثارة الفكرية لديك منخفض.',
            'high_threshold' => 4,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'مستوى الاستثارة الفكرية لديك متوسط.',
            'high_threshold' => 8,
            'low_threshold' => 5,
          ),
        ),
      ),
      7 => 
      array (
        'name_ar' => 'محور الاعتبارية الفردية',
        'max_score' => 10,
        'order_index' => 4,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في الاعتبارية الفردية، تهتم بالاحتياجات الفردية لكل مرؤوس.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى الاعتبارية الفردية لديك منخفض.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'مستوى الاعتبارية الفردية لديك متوسط.',
            'high_threshold' => 6,
            'low_threshold' => 4,
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
        'low_threshold' => 40,
        'high_threshold' => 50,
        'description_ar' => 'أنت ذو مستوى مرتفع في القيادة التحويلية. تسعى إلى زيادة وعي مرؤوسيك باحتياجاتهم، وتحويل هذا الوعي إلى آمال وتوقعات.',
        'programs_ar' => 'القيادة التحويلية المتقدمة، التفكير الاستراتيجي، إدارة التغيير، الذكاء العاطفي، الابتكار والقيادة الإبداعية',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 24,
        'description_ar' => 'مستوى مهارات القيادة التحويلية لديك منخفض. ليس لديك رؤية واضحة للحاجة للتغيير والتطلع إلى المستقبل.',
        'programs_ar' => 'برنامج مبادئ القيادة التحويلية، برنامج مهارات الاتصال القيادي، برنامج بناء الرؤية والأهداف، برنامج الذكاء العاطفي في القيادة',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 25,
        'high_threshold' => 39,
        'description_ar' => 'مهاراتك القيادية التحويلية متوسطة. أنت تسعى إلى إحداث التغيير لكن بدرجة متوسطة.',
        'programs_ar' => 'برنامج القيادة التحويلية المتقدمة، برنامج إدارة التغيير، برنامج القيادة الابتكارية، برنامج التمكين القيادي',
      ),
    ),
  ),
  2 => 
  array (
    'title_ar' => 'قيّم مهاراتك الإدارية',
    'category' => 'القيادة والإدارة',
    'description_ar' => 'يهدف هذا المقياس إلى مساعدتك في تقييم مهاراتك الإدارية الأساسية.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'التخطيط',
        'max_score' => 10,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أعرف بوضوح الأهداف الحقيقية للإدارة التي أديرها.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أوضح للمرؤوسين العلاقة بين جهودهم الفردية والجماعية وأهداف الإدارة التي أديرها.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أناقش الخطط مع المرؤوسين.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أضع أهدافًا واضحة وقابلة للقياس بالاشتراك مع المرؤوسين.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أراجع دوريًا طرق وإجراءات العمل التي تتبعها المجموعة داخل الإدارة بغرض تطويرها.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أشرك المرؤوسين في جميع خطوات العملية التخطيطية بالإدارة.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أشيد بجهود المرؤوسين وأعترف بها عندما تتحقق الأهداف.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أقوم بالتنسيق بين خطط العمل داخل الإدارة وكافة الخطط الأخرى، سواء الخاصة برئيسي أو الخاصة بالإدارات الأخرى التي يرتبط نشاطها بنشاط إدارتي.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أقوم بتحويل الأهداف والخطط إلى جداول زمنية وموازنات للتنفيذ.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'تحقق إدارتي دائمًا الأهداف الموضوعة لها.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'مهاراتك في التخطيط الإداري مرتفعة، تضع خططاً واضحة وتتابع تنفيذها.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تحتاج إلى تطوير مهاراتك في التخطيط.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'مهاراتك في التخطيط متوسطة.',
            'high_threshold' => 7,
            'low_threshold' => 4,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'التنظيم',
        'max_score' => 10,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أحتفظ بخريطة تنظيمية مرسومة لإدارتي طبقًا لأحدث التعديلات في الهيكل التنظيمي.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أقوم دائمًا بتطوير الهيكل التنظيمي لإدارتي.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أعيد النظر دوريًا في نطاق الإشراف داخل الإدارة للتوصل إلى نطاق الإشراف الأمثل.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'يتلقى كل فرد في الإدارة الأوامر والتعليمات من رئيس واحد فقط.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أفوض سلطة الاختصاص للأعمال الروتينية على المرؤوسين، بالرغم من استمرار مسؤوليتي عنها أمام رئيسي المباشر.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أنا على دراية كاملة بالمتطلبات الوظيفية (التوصيف الوظيفي) لكافة الوظائف داخل إدارتي.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أقوم شخصيًا بالتوجيه والتوعية للعاملين الجدد في إدارتي.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أقوم دائمًا بربط مستوى أداء المرؤوس بالمكافآت التي يحصل عليها.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أحدد فرص التقدم الوظيفي لكل فرد في إدارتي.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أستخدم أسلوبًا منظمًا ونمطيًا للتوصية بترقية العاملين في إدارتي.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'مهاراتك في التنظيم مرتفعة، تستطيع ترتيب الموارد والمهام بكفاءة.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تحتاج إلى تطوير مهاراتك في التنظيم.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'مهاراتك في التنظيم متوسطة.',
            'high_threshold' => 7,
            'low_threshold' => 4,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'التوجيه',
        'max_score' => 10,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أقوم بمراجعة وتقييم كافة الظروف قبل أن أتخذ قرارًا أو أصدر أمرًا.',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أقوم دائمًا بحصر البدائل المتاحة وتقييمها قبل أن أتخذ قرارًا.',
            'order_index' => 21,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'إن النتائج المترتبة على تنفيذ قراراتي وأوامري تثبت دائمًا أنني كنت على صواب.',
            'order_index' => 22,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'يناسب سلوكي القيادي كلًا من طبيعة مرؤوسي وطبيعة المهام المسؤول عنها أمام رئيسي المباشر.',
            'order_index' => 23,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أتيح للمرؤوسين في إدارتي حرية كاملة في إبداء وجهة نظرهم في حل المشكلات وتعديل طرق وإجراءات العمل المتبعة.',
            'order_index' => 24,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أوجّه التقدير للمرؤوس الذي يحقق النتائج المطلوبة وأعترف بجهده.',
            'order_index' => 25,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'يشعر المرؤوسون بالفخر والاعتزاز عند إنجازهم للمهام المطلوبة منهم وفق المعايير المحددة لها.',
            'order_index' => 26,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'يشعر المرؤوس بأن الفرصة متاحة أمامه للتقدم (في الوظيفة أو الراتب أو الحوافز)، كما يشعر بأنني سأسانده في هذا التقدم إذا كان أداؤه متميزًا.',
            'order_index' => 27,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'يسعى المرؤوسون في إدارتي إلى تقبل المزيد من المستويات فيما يتعلق بالمهام المطلوبة منهم.',
            'order_index' => 28,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أشعر بالرضا الكامل نحو مجموعة المرؤوسين في إدارتي، سواء من حيث ترابطها أو إنجازها.',
            'order_index' => 29,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'مهاراتك في التوجيه مرتفعة، تستطيع إرشاد وتوجيه الآخرين بفاعلية.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تحتاج إلى تطوير مهاراتك في التوجيه.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'مهاراتك في التوجيه متوسطة.',
            'high_threshold' => 7,
            'low_threshold' => 4,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'الرقابة',
        'max_score' => 10,
        'order_index' => 4,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'ترتبط المعايير الرقابية ارتباطًا وثيقًا بأهداف الخطط.',
            'order_index' => 30,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'إن المعلومات الرقابية التي تصلني عن مدى تقدم التنفيذ تجعلني على دراية كاملة بمدى تحقق الأهداف.',
            'order_index' => 31,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أرجع الأثر للمرؤوسين عن مدى تقدمهم في التنفيذ.',
            'order_index' => 32,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'المرؤوسون مسؤولون عن كافة عناصر المصروفات والتكاليف التي يمكن أن يتحكموا فيها أثناء تنفيذ المهام المطلوبة منهم.',
            'order_index' => 33,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أجتمع مع المرؤوسين على فترات متقاربة للتعرف على آرائهم لتحسين الأداء.',
            'order_index' => 34,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أشجع المرؤوسين على تصحيح الانحرافات في أدائهم دون الرجوع إليّ.',
            'order_index' => 35,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'يتم تصحيح أي انحراف أثناء التنفيذ بمجرد حدوثه.',
            'order_index' => 36,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أبحث دائمًا عن الأسباب الحقيقية التي تعوق التنفيذ السليم وأسعى إلى علاجها في أسرع وقت ممكن.',
            'order_index' => 37,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'إن الوقت الذي أستغرقه في متابعة التنفيذ وتصحيح انحرافاته كان له ما يبرره.',
            'order_index' => 38,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أشعر أن النتائج التي تحققها المجموعة تبرر الجهد الرقابي الذي أبذله.',
            'order_index' => 39,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'مهاراتك في الرقابة والمتابعة مرتفعة.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تحتاج إلى تطوير مهاراتك في الرقابة والمتابعة.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'مهاراتك في الرقابة متوسطة.',
            'high_threshold' => 7,
            'low_threshold' => 4,
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
        'low_threshold' => 28,
        'high_threshold' => 40,
        'description_ar' => 'تشير نتيجتك إلى مستوى مرتفع من المهارات الإدارية. أنت تمتلك قدرة جيدة على التخطيط والتنظيم والتوجيه والرقابة.',
        'programs_ar' => 'القيادة الاستراتيجية، إدارة التغيير، إدارة الأزمات، صناعة القرار الاستراتيجي',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 13,
        'description_ar' => 'تشير نتيجتك إلى حاجتك لتطوير مهاراتك الإدارية الأساسية.',
        'programs_ar' => 'أساسيات الإدارة، مهارات التخطيط والتنظيم، القيادة الأساسية',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 14,
        'high_threshold' => 27,
        'description_ar' => 'تشير نتيجتك إلى مستوى متوسط من المهارات الإدارية.',
        'programs_ar' => 'برنامج مهارات الإدارة الفعّالة، برنامج القيادة والتوجيه، برنامج إدارة الأداء',
      ),
    ),
  ),
  3 => 
  array (
    'title_ar' => 'تحفيز العاملين ومكافأتهم',
    'category' => 'التوجيه والتوافق المهني',
    'description_ar' => 'يساعدك هذا المقياس على التعرف إلى مدى استخدامك لأساليب تحفيز الموظفين وتشجيعهم على الأداء والإنجاز. ولا يهدف إلى إصدار حكم عليك أو تقييمك بشكل رسمي، بل يهدف إلى مساعدتك على اكتشاف نقاط القوة التي تمتلكها في تحفيز فريق العمل، والجوانب التي يمكنك تطويرها لتعزيز دافعية الموظفين ورضاهم وإنتاجيتهم.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'متابعة الأداء والتحفيز المستدام',
        'max_score' => 12,
        'order_index' => 1,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة ممتازة على متابعة أداء الفريق وتوفير التحفيز المستدام.',
            'high_threshold' => 12,
            'low_threshold' => 9,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى وجود فرصة لتطوير مهاراتك في متابعة أداء الفريق.',
            'high_threshold' => 4,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى امتلاكك قدرة معقولة على متابعة الأداء وتحفيز الفريق.',
            'high_threshold' => 8,
            'low_threshold' => 5,
          ),
        ),
      ),
    ),
    'questions' => 
    array (
      0 => 
      array (
        'text_ar' => 'أحرص على الإشادة بإنجازات العاملين بشكل منتظم.',
        'order_index' => 0,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      1 => 
      array (
        'text_ar' => 'أعبّر عن تقديري لجهود العاملين أمام زملائهم عند استحقاق ذلك.',
        'order_index' => 1,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'text_ar' => 'أشجع العاملين على تطوير مهاراتهم وقدراتهم المهنية.',
        'order_index' => 2,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      3 => 
      array (
        'text_ar' => 'أستمع إلى أفكار العاملين ومقترحاتهم باهتمام.',
        'order_index' => 3,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      4 => 
      array (
        'text_ar' => 'أوفر بيئة عمل تشجع على المبادرة والإبداع.',
        'order_index' => 4,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      5 => 
      array (
        'text_ar' => 'أحرص على إشراك العاملين في القرارات التي تمس أعمالهم.',
        'order_index' => 5,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      6 => 
      array (
        'text_ar' => 'أشجع العاملين عند مواجهة التحديات والصعوبات.',
        'order_index' => 6,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      7 => 
      array (
        'text_ar' => 'أعمل على تعزيز روح الانتماء والولاء لدى العاملين.',
        'order_index' => 7,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      8 => 
      array (
        'text_ar' => 'أطبّق معايير واضحة وعادلة عند منح المكافآت.',
        'order_index' => 8,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      9 => 
      array (
        'text_ar' => 'أوضح للعاملين أسباب منح المكافآت أو عدم منحها.',
        'order_index' => 9,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      10 => 
      array (
        'text_ar' => 'أكافئ الأداء المتميز بغض النظر عن الاعتبارات الشخصية.',
        'order_index' => 10,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      11 => 
      array (
        'text_ar' => 'أشعر أن العاملين يدركون عدالة نظام المكافآت في فريق العمل.',
        'order_index' => 11,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      12 => 
      array (
        'text_ar' => 'أربط المكافآت بمستوى الإنجاز الفعلي.',
        'order_index' => 12,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      13 => 
      array (
        'text_ar' => 'أتجنب التحيز أو المحاباة عند تقديم الحوافز.',
        'order_index' => 13,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      14 => 
      array (
        'text_ar' => 'أراجع آليات المكافآت بصورة دورية للتأكد من عدالتها.',
        'order_index' => 14,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      15 => 
      array (
        'text_ar' => 'أحرص على تكافؤ الفرص بين العاملين للحصول على المكافآت.',
        'order_index' => 15,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      16 => 
      array (
        'text_ar' => 'أستخدم أكثر من أسلوب لتحفيز العاملين (مادي ومعنوي).',
        'order_index' => 16,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      17 => 
      array (
        'text_ar' => 'أحرص على مكافأة الإنجازات الاستثنائية في الوقت المناسب.',
        'order_index' => 17,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      18 => 
      array (
        'text_ar' => 'أقدم فرص تطوير أو تدريب للعاملين المتميزين.',
        'order_index' => 18,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      19 => 
      array (
        'text_ar' => 'أمنح العاملين صلاحيات أو مسؤوليات أكبر كمكافأة للتميز.',
        'order_index' => 19,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      20 => 
      array (
        'text_ar' => 'أراعي احتياجات العاملين المختلفة عند تقديم الحوافز.',
        'order_index' => 20,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      21 => 
      array (
        'text_ar' => 'أتابع أثر الحوافز على أداء العاملين ومستوى رضاهم.',
        'order_index' => 21,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      22 => 
      array (
        'text_ar' => 'أستخدم الحوافز لتعزيز العمل الجماعي وليس الإنجاز الفردي فقط.',
        'order_index' => 22,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      23 => 
      array (
        'text_ar' => 'أعمل على استمرارية برامج التحفيز وعدم اقتصارها على مناسبات محددة.',
        'order_index' => 23,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      24 => 
      array (
        'text_ar' => 'أحدد أهدافًا واضحة للعاملين يمكن قياسها ومتابعتها.',
        'order_index' => 24,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      25 => 
      array (
        'text_ar' => 'أقدم تغذية راجعة بناءة للعاملين بشكل مستمر.',
        'order_index' => 25,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      26 => 
      array (
        'text_ar' => 'أناقش مع العاملين سبل تحسين أدائهم وتطويره.',
        'order_index' => 26,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      27 => 
      array (
        'text_ar' => 'أحتفل بالإنجازات الفردية والجماعية عند تحققها.',
        'order_index' => 27,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      28 => 
      array (
        'text_ar' => 'أتعرف على أسباب انخفاض الدافعية لدى العاملين وأسعى لمعالجتها.',
        'order_index' => 28,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      29 => 
      array (
        'text_ar' => 'أعمل على بناء ثقافة تقدير وتحفيز داخل فريق العمل.',
        'order_index' => 29,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
    ),
    'recommendations' => 
    array (
      0 => 
      array (
        'level' => 'high',
        'low_threshold' => 35,
        'high_threshold' => 50,
        'description_ar' => 'تشير نتيجتك إلى مستوى مرتفع في قدرتك على تحفيز العاملين. أنت تمتلك مهارات جيدة في التعرف على احتياجات المرؤوسين وتلبيتها.',
        'programs_ar' => 'القيادة التحويلية، إدارة الأداء المتقدمة، الذكاء العاطفي في القيادة، بناء ثقافة التميز',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 17,
        'description_ar' => 'تشير نتيجتك إلى حاجتك لتطوير مهاراتك في تحفيز العاملين.',
        'programs_ar' => 'أساسيات التحفيز، نظريات الدافعية، مهارات القيادة الأساسية',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 18,
        'high_threshold' => 34,
        'description_ar' => 'تشير نتيجتك إلى مستوى متوسط في تحفيز العاملين.',
        'programs_ar' => 'استراتيجيات التحفيز، إدارة الأداء، بناء فرق العمل المتميزة',
      ),
    ),
  ),
  4 => 
  array (
    'title_ar' => 'هل تفكر بإيجابية؟',
    'category' => 'معرفة الذات والشخصية',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على طبيعة أسلوب التفكير لدى الفرد ومدى ميله إلى النظر للمواقف والأحداث من منظور إيجابي في الحياة اليومية.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'عام',
        'max_score' => 40,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أنظر إلى المواقف الصعبة باعتبارها فرصًا للتعلم والنمو.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتوقع نتائج جيدة في معظم الأمور التي أقوم بها.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أركز على الحلول أكثر من تركيزي على المشكلات.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أستطيع رؤية الجوانب الإيجابية حتى في الظروف غير المريحة.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أثق بقدرتي على تجاوز العقبات والتحديات.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أشعر بالتفاؤل تجاه مستقبلي.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أتعلم من أخطائي بدلًا من لوم نفسي باستمرار.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أعتقد أن الجهد المستمر يؤدي إلى النجاح.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أتحدث مع نفسي بطريقة مشجعة وإيجابية.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أبحث عن الدروس المفيدة في التجارب السلبية.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          10 => 
          array (
            'text_ar' => 'أستمتع بإنجازاتي مهما كانت بسيطة.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          11 => 
          array (
            'text_ar' => 'أرى أن الفشل خطوة نحو النجاح وليس نهاية الطريق.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          12 => 
          array (
            'text_ar' => 'أمتلك القدرة على التحكم في مشاعري السلبية غالبًا.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          13 => 
          array (
            'text_ar' => 'أتوقع الخير عند التعامل مع الآخرين.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          14 => 
          array (
            'text_ar' => 'أشعر بالامتنان لما أملكه في حياتي.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          15 => 
          array (
            'text_ar' => 'أواجه الضغوط بهدوء نسبي.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          16 => 
          array (
            'text_ar' => 'أؤمن بأن لكل مشكلة أكثر من حل.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          17 => 
          array (
            'text_ar' => 'أحافظ على الأمل حتى في الأوقات الصعبة.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          18 => 
          array (
            'text_ar' => 'أركز على ما أستطيع تغييره بدلًا من الانشغال بما لا أستطيع تغييره.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          19 => 
          array (
            'text_ar' => 'أشجع الآخرين وأبث فيهم روح التفاؤل.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
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
        'low_threshold' => 28,
        'high_threshold' => 40,
        'description_ar' => 'تشير هذه النتيجة إلى أنك تتمتع بمستوى مرتفع من التفكير الإيجابي، وتميل إلى رؤية الفرص في التحديات، والتعامل مع المواقف الصعبة بمرونة وتفاؤل.',
        'programs_ar' => 'برنامج القيادة الإيجابية، برنامج المرونة النفسية المتقدمة، برنامج الذكاء العاطفي المتقدم',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 13,
        'description_ar' => 'تشير هذه النتيجة إلى أن التفكير الإيجابي ليس نمطًا ثابتًا لديك في الوقت الحالي، وقد تميل إلى التركيز على المشكلات أو النتائج السلبية أكثر من الفرص والحلول.',
        'programs_ar' => 'برنامج تعديل الأفكار السلبية، برنامج تقدير الذات والوعي بالقدرات الشخصية، برنامج إدارة القلق والتفكير المفرط، برنامج الذكاء الانفعالي',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 14,
        'high_threshold' => 27,
        'description_ar' => 'تشير هذه النتيجة إلى أنك تمتلك قدرًا معقولًا من التفكير الإيجابي، لكن هذا النمط يتأثر أحيانًا بالضغوط أو الظروف المحيطة.',
        'programs_ar' => 'برنامج تنمية التفكير الإيجابي، برنامج بناء الثقة بالنفس، برنامج إدارة الضغوط النفسية، برنامج المرونة النفسية والتكيف، برنامج الامتنان وجودة الحياة',
      ),
    ),
  ),
  5 => 
  array (
    'title_ar' => 'مقياس الثقة بالنفس في بيئة العمل',
    'category' => 'معرفة الذات والشخصية',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى الثقة بالنفس في بيئة العمل من خلال مجموعة من العبارات التي تعكس مشاعرك واتجاهاتك نحو قدراتك المهنية وأدائك الوظيفي.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'عام',
        'max_score' => 30,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أشعر بالثقة عند أداء المهام الموكلة إليّ في العمل.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أستطيع اتخاذ القرارات المتعلقة بعملي دون تردد كبير.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أؤمن بقدرتي على إنجاز الأعمال المطلوبة بكفاءة.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أستطيع التعبير عن آرائي المهنية أمام الزملاء والمسؤولين.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أتعامل مع المشكلات المهنية بثقة وهدوء.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أعتقد أن لدي المهارات اللازمة للنجاح في عملي.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أتحمل مسؤولية نتائج عملي بثقة.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أستطيع التكيف مع المهام الجديدة بسرعة.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'لا أشعر بالخوف من ارتكاب الأخطاء أثناء العمل.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أثق بقدرتي على تحقيق أهدافي المهنية.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          10 => 
          array (
            'text_ar' => 'أشارك بفاعلية في المناقشات والاجتماعات المهنية.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          11 => 
          array (
            'text_ar' => 'أستطيع إنجاز الأعمال حتى في الظروف الضاغطة.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          12 => 
          array (
            'text_ar' => 'أقبل التحديات المهنية الجديدة بثقة.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          13 => 
          array (
            'text_ar' => 'أشعر أن زملائي يثقون بقدراتي المهنية.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          14 => 
          array (
            'text_ar' => 'أتمتع بدرجة عالية من الثقة بالنفس في مجال عملي.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
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
        'low_threshold' => 21,
        'high_threshold' => 30,
        'description_ar' => 'تشير النتيجة إلى ارتفاع مستوى الثقة بالنفس لديك، وقدرتك على أداء المهام بكفاءة، واتخاذ القرارات المناسبة، والتعامل الإيجابي مع التحديات والضغوط المهنية.',
        'programs_ar' => 'دورات القيادة الإدارية، إدارة الفرق، التخطيط الاستراتيجي، الذكاء العاطفي، التفاوض والإقناع، إدارة التغيير',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 10,
        'description_ar' => 'تشير نتيجتك إلى انخفاض مستواك في الثقة بالنفس، مما قد ينعكس على قدرتك في اتخاذ القرارات، والمشاركة في العمل، ومواجهة التحديات المهنية.',
        'programs_ar' => 'بناء الثقة بالنفس وتقدير الذات، التغلب على الخوف والقلق في بيئة العمل، مهارات التواصل الأساسي، إدارة الضغوط المهنية، التفكير الإيجابي',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 11,
        'high_threshold' => 20,
        'description_ar' => 'تشير النتيجة إلى امتلاكك مستوى متوسطًا من الثقة بالنفس، حيث تظهر قدرًا مقبولًا من الاعتماد على الذات والكفاءة المهنية، مع الحاجة إلى مزيد من التطوير.',
        'programs_ar' => 'مهارات الاتصال والتواصل الفعال، مهارات العرض والتقديم، اتخاذ القرار وحل المشكلات، إدارة الوقت، الذكاء العاطفي في بيئة العمل',
      ),
    ),
  ),
  6 => 
  array (
    'title_ar' => 'مقياس الذكاء العاطفي',
    'category' => 'معرفة الذات والشخصية',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى الذكاء العاطفي لديك من خلال مجموعة من العبارات التي تتناول كيفية إدراكك لمشاعرك وفهمها، وقدرتك على إدارتها، ومدى تفهمك لمشاعر الآخرين.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'المحور الأول: الوعي بالذات الانفعالية',
        'max_score' => 16,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستطيع تحديد المشاعر التي أشعر بها بدقة.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أدرك أسباب مشاعري عندما أشعر بالضيق أو السعادة.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'ألاحظ التغيرات في حالتي المزاجية بسرعة.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أعرف نقاط القوة في شخصيتي.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أعرف الجوانب التي أحتاج إلى تطويرها.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أستطيع وصف مشاعري للآخرين بوضوح.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أميز بين المشاعر المتشابهة مثل الغضب والإحباط.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أدرك تأثير مشاعري على قراراتي.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بوعي جيد بمشاعرك وانفعالاتك، وتستطيع التعرف عليها وفهم أسبابها وتأثيرها في سلوكك.',
            'high_threshold' => 16,
            'low_threshold' => 11,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في التعرف على مشاعرك وفهم أسبابها بشكل واضح.',
            'high_threshold' => 5,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تدرك مشاعرك في كثير من المواقف، إلا أن هذا الإدراك قد لا يكون ثابتًا أو دقيقًا دائمًا.',
            'high_threshold' => 10,
            'low_threshold' => 6,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'المحور الثاني: إدارة الانفعالات وتنظيمها',
        'max_score' => 16,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أتمكن من التحكم في غضبي عند الاستفزاز.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أستطيع تهدئة نفسي عند الشعور بالتوتر.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أفكر قبل أن أتصرف في المواقف الانفعالية.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أستطيع تجاوز المواقف المزعجة خلال فترة مناسبة.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'لا أسمح لمشاعري السلبية بالسيطرة على سلوكي.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أتعامل مع الضغوط بطريقة متوازنة.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أستطيع التعبير عن استيائي دون إيذاء الآخرين.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أستعيد هدوئي بسرعة بعد التعرض لموقف صعب.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة جيدة على تنظيم مشاعرك وضبط انفعالاتك. فأنت غالبًا قادر على التفكير بهدوء قبل التصرف.',
            'high_threshold' => 16,
            'low_threshold' => 11,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في التحكم في انفعالاتك عند التعرض للمواقف الضاغطة.',
            'high_threshold' => 5,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع التحكم في انفعالاتك في بعض المواقف، إلا أنك قد تجد صعوبة في مواقف أخرى تتسم بالضغط.',
            'high_threshold' => 10,
            'low_threshold' => 6,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'المحور الثالث: التعاطف وفهم الآخرين',
        'max_score' => 16,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستطيع فهم مشاعر الآخرين حتى لو لم يصرحوا بها.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أهتم بمشكلات الآخرين ومشاعرهم.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أحاول النظر إلى المواقف من وجهة نظر الآخرين.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أتعاطف مع الأشخاص الذين يمرون بظروف صعبة.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'ألاحظ الإشارات غير اللفظية التي تعبر عن مشاعر الآخرين.',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أتجنب إصدار الأحكام السريعة على الآخرين.',
            'order_index' => 21,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أظهر تفهمًا لمشاعر الأشخاص المختلفين عني.',
            'order_index' => 22,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أستمع للآخرين باهتمام عندما يتحدثون عن مشكلاتهم.',
            'order_index' => 23,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة جيدة على فهم مشاعر الآخرين والتفاعل معها بإيجابية.',
            'high_threshold' => 16,
            'low_threshold' => 11,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تجد صعوبة في إدراك مشاعر الآخرين أو فهم وجهات نظرهم.',
            'high_threshold' => 5,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تظهر درجة متوسطة من التعاطف مع الآخرين، وتستطيع فهم مشاعرهم في العديد من المواقف.',
            'high_threshold' => 10,
            'low_threshold' => 6,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'المحور الرابع: المهارات الاجتماعية وإدارة العلاقات',
        'max_score' => 16,
        'order_index' => 4,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستطيع تكوين علاقات إيجابية مع الآخرين.',
            'order_index' => 24,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتواصل مع الآخرين بطريقة واضحة ومحترمة.',
            'order_index' => 25,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتعامل بمرونة مع الخلافات.',
            'order_index' => 26,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أستطيع إقناع الآخرين بوجهة نظري دون صدام.',
            'order_index' => 27,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أتعاون مع الآخرين لتحقيق الأهداف المشتركة.',
            'order_index' => 28,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أحافظ على علاقاتي الاجتماعية المهمة.',
            'order_index' => 29,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أقدم الدعم للآخرين عند الحاجة.',
            'order_index' => 30,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أتمكن من العمل بفاعلية ضمن فريق.',
            'order_index' => 31,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بمهارات اجتماعية جيدة وقدرة فعالة على التواصل مع الآخرين وبناء علاقات إيجابية.',
            'high_threshold' => 16,
            'low_threshold' => 11,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه بعض التحديات في التواصل مع الآخرين أو بناء العلاقات الاجتماعية.',
            'high_threshold' => 5,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مهارات اجتماعية مقبولة تساعدك على التواصل والتعاون مع الآخرين في العديد من المواقف.',
            'high_threshold' => 10,
            'low_threshold' => 6,
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
        'low_threshold' => 44,
        'high_threshold' => 64,
        'description_ar' => 'تشير نتيجتك إلى أنك تتمتع بمستوى جيد من الذكاء العاطفي، حيث تمتلك قدرة عالية على فهم مشاعرك وإدارتها بصورة فعالة، كما تستطيع إدراك مشاعر الآخرين والتفاعل معها بشكل إيجابي.',
        'programs_ar' => 'القيادة بالذكاء العاطفي، الذكاء العاطفي المتقدم، مهارات التواصل الاستراتيجي، الذكاء العاطفي والقيادة التحويلية',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 21,
        'description_ar' => 'تشير نتيجتك إلى أن قدرتك على التعرف على مشاعرك وفهمها وإدارتها، وكذلك فهم مشاعر الآخرين والتفاعل معهم، تحتاج إلى مزيد من التطوير.',
        'programs_ar' => 'دورة أساسيات الذكاء العاطفي، دورة الوعي بالذات واكتشاف المشاعر، دورة التحكم في الانفعالات وإدارة الغضب، دورة إدارة الضغوط النفسية، دورة التعاطف وفهم الآخرين',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 22,
        'high_threshold' => 43,
        'description_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرًا مناسبًا من مهارات الذكاء العاطفي في بعض المواقف، إلا أن هذه المهارات قد لا تكون مستقرة أو فعالة بالدرجة نفسها في جميع الظروف.',
        'programs_ar' => 'دورة الوعي بالذات وفهم المشاعر، إدارة الانفعالات والضغوط النفسية، التعاطف والذكاء الاجتماعي، مهارات التواصل الفعال، إدارة العلاقات وحل النزاعات',
      ),
    ),
  ),
  7 => 
  array (
    'title_ar' => 'مقياس السمات الشخصية',
    'category' => 'معرفة الذات والشخصية',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى بعض السمات الشخصية لديك، مثل مهارات التواصل، والثقة بالنفس، والتنظيم الذاتي، والاستقرار الانفعالي.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'عام',
        'max_score' => 40,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستمتع بالتعرف على أشخاص جدد والتفاعل معهم.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أكمل المهام التي أبدأها حتى لو كانت صعبة.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشعر بالقلق أو التوتر بسهولة عند مواجهة المشكلات. *(عبارة معكوسة)*',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أحرص على مساعدة الآخرين عندما يحتاجون إلى الدعم.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أحب تجربة أفكار أو أنشطة جديدة وغير مألوفة.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أفضل العمل ضمن فريق على العمل بمفردي.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أنظم وقتي وأضع خططًا واضحة لتحقيق أهدافي.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أتأثر بالنقد بشكل كبير. *(عبارة معكوسة)*',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أتقبل اختلاف آراء الآخرين باحترام.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أستمتع بالتعلم واكتساب معارف جديدة باستمرار.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          10 => 
          array (
            'text_ar' => 'أجد سهولة في بدء المحادثات مع الغرباء.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          11 => 
          array (
            'text_ar' => 'ألتزم بالمواعيد والوعود التي أقطعها على نفسي.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          12 => 
          array (
            'text_ar' => 'أشعر بالإحباط بسرعة عند الفشل. *(عبارة معكوسة)*',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          13 => 
          array (
            'text_ar' => 'أتعاطف مع مشاعر الآخرين وأتفهم ظروفهم.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          14 => 
          array (
            'text_ar' => 'أستمتع بالتفكير في حلول مبتكرة للمشكلات.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          15 => 
          array (
            'text_ar' => 'أشارك بفاعلية في الأنشطة الاجتماعية.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          16 => 
          array (
            'text_ar' => 'أتحمل المسؤولية عن أخطائي وأعمل على إصلاحها.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          17 => 
          array (
            'text_ar' => 'أستطيع الحفاظ على هدوئي في المواقف الضاغطة. *(انتبه: هذه العبارة وردت ضمن قائمة العبارات المعكوسة 3-8-13-18 في الأصل رغم أن صياغتها إيجابية — يُرجى مراجعة مُعِد المقياس لتأكيد اتجاه التصحيح الصحيح لهذه العبارة تحديدًا)*',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          18 => 
          array (
            'text_ar' => 'أبحث عن التعاون أكثر من المنافسة مع الآخرين.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          19 => 
          array (
            'text_ar' => 'أستمتع باستكشاف وجهات نظر وثقافات مختلفة.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
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
        'low_threshold' => 36,
        'high_threshold' => 40,
        'description_ar' => 'شخصية متميزة جدًا، وتشير هذه النتيجة إلى مستوى مرتفع من النضج النفسي والاجتماعي والانفعالي. غالبًا ما تجمع بين المسؤولية، والتعاطف، والانفتاح، والقدرة على التكيف، والاستقرار النفسي.',
        'programs_ar' => 'دورة القيادة الاستراتيجية، دورة إعداد القادة، دورة الإرشاد والتوجيه المهني، دورة إدارة الأزمات، دورة الابتكار المؤسسي وصناعة المستقبل',
      ),
      1 => 
      array (
        'level' => 'high2',
        'low_threshold' => 31,
        'high_threshold' => 35,
        'description_ar' => 'شخصية قوية ومتقدمة، وتدل هذه النتيجة على تمتعك بمجموعة واسعة من السمات الإيجابية. أنت غالبًا شخص منظم، متعاون، منفتح على الخبرات الجديدة.',
        'programs_ar' => 'دورة القيادة الشخصية، دورة القيادة التحويلية، دورة إدارة فرق العمل عالية الأداء، دورة التخطيط الشخصي والاستراتيجي',
      ),
      2 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 10,
        'description_ar' => 'شخصية بحاجة إلى تطوير العديد من الجوانب، وتشير هذه النتيجة إلى وجود صعوبات في التفاعل الاجتماعي أو التنظيم الذاتي أو التكيف مع الضغوط.',
        'programs_ar' => 'دورة الوعي بالذات وتقدير الذات، دورة بناء الثقة بالنفس، دورة إدارة الضغوط والانفعالات، دورة المهارات الاجتماعية الأساسية',
      ),
      3 => 
      array (
        'level' => 'medium',
        'low_threshold' => 21,
        'high_threshold' => 30,
        'description_ar' => 'شخصية متوازنة وإيجابية، وتشير هذه النتيجة إلى مستوى جيد من النضج الشخصي والاجتماعي. غالبًا ما تتمتع بقدرة مناسبة على تنظيم حياتك والتعامل مع الآخرين.',
        'programs_ar' => 'دورة القيادة الشخصية، دورة القيادة التحويلية، دورة اتخاذ القرار وحل المشكلات المتقدمة، دورة التفكير الاستراتيجي',
      ),
      4 => 
      array (
        'level' => 'medium2',
        'low_threshold' => 11,
        'high_threshold' => 20,
        'description_ar' => 'شخصية متوسطة الاستقرار، تمتلك بعض السمات الإيجابية، لكنك قد تُظهرها في مواقف معينة دون غيرها.',
        'programs_ar' => 'دورة مهارات التواصل الفعال، دورة الذكاء العاطفي، دورة إدارة الوقت وتحديد الأولويات، دورة التفكير الإبداعي وحل المشكلات',
      ),
    ),
  ),
  8 => 
  array (
    'title_ar' => 'معرفة الذات',
    'category' => 'الذات والشحصيه',
    'description_ar' => '',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'الوعي بالذات',
        'max_score' => 10,
        'order_index' => 1,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تدل هذه النتيجة على أنك تمتلك فهمًا واضحًا لذاتك، وتعرف نقاط قوتك وضعفك، وتدرك دوافعك الشخصية وأسباب سلوكياتك المختلفة.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تعكس نتيجتك صعوبة في فهم الذات وتحديد الخصائص الشخصية والدوافع الداخلية.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى امتلاكك معرفة عامة بذاتك، إلا أن بعض الجوانب الشخصية قد لا تكون واضحة بشكل كافٍ.',
            'high_threshold' => 7,
            'low_threshold' => 4,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'الوعي الانفعالي',
        'max_score' => 10,
        'order_index' => 2,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تدل النتيجة على قدرتك على التعرف على مشاعرك وفهم أسبابها والتعبير عنها بصورة مناسبة، مع قدرتك الجيدة على ضبط الانفعالات وإدارتها.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى ضعف القدرة على التعرف على المشاعر أو فهمها، وقد تواجه صعوبات في التعبير عن انفعالاتك أو تنظيمها.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع إدراك بعض مشاعرك وانفعالاتك، لكنك قد تواجه صعوبة أحيانًا في فهم أسبابها أو التحكم فيها.',
            'high_threshold' => 7,
            'low_threshold' => 4,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'القيم والأهداف',
        'max_score' => 10,
        'order_index' => 3,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تدل النتيجة على وضوح القيم والمبادئ الشخصية لديك، وامتلاكك أهدافًا محددة تسعى لتحقيقها.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تعكس نتيجتك غموضًا في القيم أو الأهداف الشخصية، وقد تجد صعوبة في تحديد اتجاهاتك المستقبلية.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير النتيجة إلى وجود بعض القيم والأهداف لديك، إلا أنها قد لا تكون محددة أو واضحة بصورة كافية.',
            'high_threshold' => 7,
            'low_threshold' => 4,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'العلاقات الاجتماعية',
        'max_score' => 10,
        'order_index' => 4,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تدل النتيجة على قدرتك الجيدة على بناء العلاقات الإيجابية والمحافظة عليها، وفهم مشاعر الآخرين واحترام آرائهم.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تعكس النتيجة صعوبات في التواصل مع الآخرين أو فهم احتياجاتهم ومشاعرهم.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير النتيجة إلى قدرة مقبولة على التفاعل الاجتماعي، مع وجود بعض التحديات في التواصل أو إدارة العلاقات.',
            'high_threshold' => 7,
            'low_threshold' => 4,
          ),
        ),
      ),
      4 => 
      array (
        'name_ar' => 'التطور الشخصي',
        'max_score' => 10,
        'order_index' => 5,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تدل النتيجة على حرصك المستمر على تطوير ذاتك وتحسين مهاراتك والاستفادة من خبراتك السابقة.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تعكس النتيجة ضعف الاهتمام بتطوير الذات أو الاستفادة من الخبرات السابقة.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير النتيجة إلى وجود رغبة في التطور وتحسين الذات، إلا أن الجهود المبذولة قد تكون غير منتظمة أو محدودة.',
            'high_threshold' => 7,
            'low_threshold' => 4,
          ),
        ),
      ),
    ),
    'questions' => 
    array (
      0 => 
      array (
        'text_ar' => 'أعرف نقاط قوتي بوضوح.',
        'order_index' => 0,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      1 => 
      array (
        'text_ar' => 'أستطيع تحديد نقاط الضعف التي أحتاج إلى تطويرها.',
        'order_index' => 1,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'text_ar' => 'أفهم الأسباب التي تدفعني لاتخاذ قراراتي.',
        'order_index' => 2,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      3 => 
      array (
        'text_ar' => 'أستطيع وصف شخصيتي للآخرين بدقة.',
        'order_index' => 3,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      4 => 
      array (
        'text_ar' => 'أدرك تأثير مشاعري على سلوكي.',
        'order_index' => 4,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      5 => 
      array (
        'text_ar' => 'أستطيع التعرف على مشاعري عندما أشعر بها.',
        'order_index' => 5,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      6 => 
      array (
        'text_ar' => 'أعرف ما الذي يسبب لي التوتر أو القلق.',
        'order_index' => 6,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      7 => 
      array (
        'text_ar' => 'أستطيع التعبير عن مشاعري بطريقة مناسبة.',
        'order_index' => 7,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      8 => 
      array (
        'text_ar' => 'ألاحظ التغيرات في حالتي النفسية بسرعة.',
        'order_index' => 8,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      9 => 
      array (
        'text_ar' => 'أفهم كيف تؤثر مشاعري على علاقاتي مع الآخرين.',
        'order_index' => 9,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      10 => 
      array (
        'text_ar' => 'لدي قيم ومبادئ واضحة ألتزم بها.',
        'order_index' => 10,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      11 => 
      array (
        'text_ar' => 'أعرف ما الذي أريده من حياتي على المدى البعيد.',
        'order_index' => 11,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      12 => 
      array (
        'text_ar' => 'أتخذ قراراتي بما يتوافق مع قيمي الشخصية.',
        'order_index' => 12,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      13 => 
      array (
        'text_ar' => 'لدي أهداف محددة أسعى لتحقيقها.',
        'order_index' => 13,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      14 => 
      array (
        'text_ar' => 'أراجع أهدافي بشكل دوري.',
        'order_index' => 14,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      15 => 
      array (
        'text_ar' => 'أعرف كيف يراني الآخرون بشكل عام.',
        'order_index' => 15,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      16 => 
      array (
        'text_ar' => 'أتقبل الملاحظات والنقد البناء.',
        'order_index' => 16,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      17 => 
      array (
        'text_ar' => 'أفهم تأثير تصرفاتي على الآخرين.',
        'order_index' => 17,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      18 => 
      array (
        'text_ar' => 'أستطيع بناء علاقات إيجابية مع من حولي.',
        'order_index' => 18,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      19 => 
      array (
        'text_ar' => 'أوازن بين احتياجاتي الشخصية واحتياجات الآخرين.',
        'order_index' => 19,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      20 => 
      array (
        'text_ar' => 'أسعى باستمرار لتطوير نفسي.',
        'order_index' => 20,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      21 => 
      array (
        'text_ar' => 'أتعلم من أخطائي السابقة.',
        'order_index' => 21,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      22 => 
      array (
        'text_ar' => 'أراجع سلوكي بعد المواقف المهمة.',
        'order_index' => 22,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      23 => 
      array (
        'text_ar' => 'أبحث عن فرص جديدة للنمو الشخصي.',
        'order_index' => 23,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      24 => 
      array (
        'text_ar' => 'أشعر أنني أتطور مع مرور الوقت.',
        'order_index' => 24,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
    ),
    'recommendations' => 
    array (
      0 => 
      array (
        'level' => 'high',
        'low_threshold' => 34,
        'high_threshold' => 50,
        'description_ar' => 'تشير نتيجتك إلى أن مستوى معرفة الذات لديك مرتفع. فأنت تتمتع بفهم جيد لخصائصك الشخصية، وتدرك مشاعرك ودوافعك بصورة واضحة، وتمتلك رؤية واضحة نسبيًا لقيمك وأهدافك. كما أنك قادر على بناء علاقات اجتماعية إيجابية وتسعى إلى تطوير نفسك والاستفادة من خبراتك المختلفة.',
        'programs_ar' => 'دورات القيادة الذاتية، دورات الذكاء العاطفي المتقدم، دورات التخطيط الاستراتيجي الشخصي، دورات القيادة والتأثير الاجتماعي',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 16,
        'description_ar' => 'تشير نتيجتك إلى أن مستوى معرفة الذات لديك منخفض نسبيًا. وقد تواجه صعوبة في فهم بعض جوانب شخصيتك ودوافعك ومشاعرك، كما قد لا تكون قيمك وأهدافك واضحة بصورة كافية.',
        'programs_ar' => 'برنامج اكتشاف الذات، برنامج الوعي بالمشاعر والانفعالات، برنامج بناء الثقة بالنفس، برنامج تحديد القيم والاتجاهات الشخصية، برنامج المهارات الاجتماعية الأساسية، برنامج الإرشاد النفسي الجمعي',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 17,
        'high_threshold' => 33,
        'description_ar' => 'تشير نتيجتك إلى أن مستوى معرفة الذات لديك متوسط. لديك فهم مقبول لجوانب متعددة من شخصيتك ومشاعرك وأهدافك، إلا أن بعض الجوانب ما تزال بحاجة إلى مزيد من الوضوح والتطوير.',
        'programs_ar' => 'برنامج تنمية الوعي الذاتي المتقدم، برنامج الذكاء الانفعالي، برنامج التخطيط الشخصي وصياغة الأهداف، برنامج مهارات التواصل والعلاقات الاجتماعية، برنامج النمو والتطوير الشخصي',
      ),
    ),
  ),
  9 => 
  array (
    'title_ar' => 'مقياس استثمار الوقت',
    'category' => 'الكفاءة الشخصية والنجاح المهني',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى استثمارك للوقت من خلال استكشاف السلوكيات والممارسات المرتبطة بالتخطيط وتنظيم الأولويات.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'التخطيط وإدارة الوقت',
        'max_score' => 8,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أضع أهدافًا واضحة لما أريد إنجازه خلال اليوم أو الأسبوع.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أحدد أولوياتي قبل البدء في أداء المهام.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أخصص وقتًا محددًا للمهام المهمة وألتزم به.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أراجع خططي بشكل دوري للتأكد من سيرها بالشكل المطلوب.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      1 => 
      array (
        'name_ar' => 'استثمار الوقت بفعالية',
        'max_score' => 8,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستغل أوقات الفراغ في أنشطة مفيدة أو تطوير مهاراتي.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أحرص على إنجاز الأعمال المهمة قبل الانشغال بالأمور الثانوية.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أبحث باستمرار عن طرق تساعدني على أداء المهام بكفاءة أعلى.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أوازن بين الدراسة أو العمل والأنشطة الشخصية والترفيهية.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      2 => 
      array (
        'name_ar' => 'أولًا: التخطيط وإدارة الوقت',
        'max_score' => 8,
        'order_index' => 1,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مهارات جيدة في التخطيط وإدارة الوقت. فأنت تحدد أهدافك وأولوياتك بوضوح وتعمل وفق خطة تساعدك على استثمار وقتك بكفاءة.',
            'high_threshold' => 8,
            'low_threshold' => 6,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك لا تمارس التخطيط للوقت بصورة كافية.',
            'high_threshold' => 2,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمارس التخطيط وإدارة الوقت بدرجة متوسطة.',
            'high_threshold' => 5,
            'low_threshold' => 3,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'مواجهة مضيعات الوقت',
        'max_score' => 8,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أتجنب التسويف وتأجيل المهام دون مبرر.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتحكم في الوقت الذي أقضيه على وسائل التواصل الاجتماعي أو التطبيقات الترفيهية.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتعامل مع المقاطعات والمشتتات بطريقة تقلل من تأثيرها على إنجازي.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'ألتزم بإنهاء المهام في الوقت المحدد غالبًا.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      4 => 
      array (
        'name_ar' => 'ثانيًا: استثمار الوقت بفعالية',
        'max_score' => 8,
        'order_index' => 2,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تحسن استثمار وقتك وتوظفه في أنشطة تسهم في تحقيق أهدافك.',
            'high_threshold' => 8,
            'low_threshold' => 6,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أن الوقت المتاح لك لا يُستثمر بالشكل الذي يحقق أقصى فائدة ممكنة.',
            'high_threshold' => 2,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستثمر وقتك بصورة مقبولة، إلا أن هناك فرصًا أكبر لتحسين كفاءة استخدامه.',
            'high_threshold' => 5,
            'low_threshold' => 3,
          ),
        ),
      ),
      5 => 
      array (
        'name_ar' => 'تقييم العائد من الوقت',
        'max_score' => 8,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أشعر أن الوقت الذي أقضيه يساهم في تحقيق أهدافي المستقبلية.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتعلم من أخطائي السابقة في إدارة الوقت وأحاول تحسين أدائي.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أقيّم مدى استفادتي من وقتي في نهاية اليوم أو الأسبوع.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'ألاحظ تقدمًا مستمرًا في إنجازاتي نتيجة حسن استثماري للوقت.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      6 => 
      array (
        'name_ar' => 'ثالثًا: مواجهة مضيعات الوقت',
        'max_score' => 8,
        'order_index' => 3,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرة جيدة على إدارة المشتتات وتقليل تأثيرها على إنتاجيتك.',
            'high_threshold' => 8,
            'low_threshold' => 6,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أن مضيعات الوقت تؤثر فيك بدرجة كبيرة.',
            'high_threshold' => 2,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع التعامل مع بعض مضيعات الوقت، إلا أن تأثيرها لا يزال موجودًا.',
            'high_threshold' => 5,
            'low_threshold' => 3,
          ),
        ),
      ),
      7 => 
      array (
        'name_ar' => 'رابعًا: تقييم العائد من الوقت',
        'max_score' => 8,
        'order_index' => 4,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تدرك العلاقة بين استخدام الوقت وتحقيق الأهداف.',
            'high_threshold' => 8,
            'low_threshold' => 6,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك لا تقوم بتقييم استخدامك للوقت بصورة كافية.',
            'high_threshold' => 2,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تراجع استفادتك من الوقت في بعض الأحيان.',
            'high_threshold' => 5,
            'low_threshold' => 3,
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
        'low_threshold' => 22,
        'high_threshold' => 32,
        'description_ar' => 'تشير نتائجك إلى أنك تدير وقتك بوعي وفعالية، وتحرص على توجيهه نحو أنشطة تحقق أهدافك وتدعم نموك.',
        'programs_ar' => 'دورات القيادة، الإدارة الاستراتيجية، إدارة المشاريع، الإنتاجية المتقدمة، التحول الرقمي',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 10,
        'description_ar' => 'تشير إجاباتك إلى أن جزءًا كبيرًا من وقتك قد يضيع في أنشطة لا تحقق لك فائدة ملموسة.',
        'programs_ar' => 'دورة أساسيات إدارة الوقت، دورة التغلب على التسويف، دورة بناء العادات الشخصية الإيجابية، دورة إدارة المشتتات الرقمية',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 11,
        'high_threshold' => 21,
        'description_ar' => 'توضح نتائجك أنك تمتلك بعض الممارسات الإيجابية في إدارة الوقت، إلا أنها لا تزال بحاجة إلى مزيد من الاستمرارية والتنظيم.',
        'programs_ar' => 'دورة التخطيط الشخصي وتحديد الأولويات، دورة إدارة الوقت المتقدمة، دورة الإنتاجية الشخصية، دورة مهارات التركيز',
      ),
    ),
  ),
  10 => 
  array (
    'title_ar' => 'الإبداع',
    'category' => 'الكفاءة الشخصية والنجاح المهني',
    'description_ar' => '',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'محور الأصالة',
        'max_score' => 8,
        'order_index' => 1,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في محور الأصالة، حيث لديك القدرة على إنتاج أفكار تتسم بالجدية، وأنت قادر على ابتكار أشياء أو أفكار لم يسبق إليها أحد.',
            'high_threshold' => 8,
            'low_threshold' => 6,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى الأصالة لديك منخفض، عليك تنمية هذه المهارة بالتدريب المتخصص.',
            'high_threshold' => 2,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت ذو مستوى متوسط في الأصالة، حيث لديك قدرة متوسطة على إنتاج أفكار تتسم بالجدية.',
            'high_threshold' => 5,
            'low_threshold' => 3,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'محور الطلاقة',
        'max_score' => 8,
        'order_index' => 2,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في محور الطلاقة، حيث لديك القدرة على استدعاء المعلومات وتداعياتها بخصوبة فكرية عالية.',
            'high_threshold' => 8,
            'low_threshold' => 6,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى الطلاقة لديك منخفض، فليس لديك القدرة على إنتاج عدد مناسب من البدائل أو الأفكار.',
            'high_threshold' => 2,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت ذو مستوى متوسط في الطلاقة، والخصوبة الفكرية لديك متوسطة.',
            'high_threshold' => 5,
            'low_threshold' => 3,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'محور المرونة',
        'max_score' => 8,
        'order_index' => 3,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في محور المرونة، حيث لديك القدرة على تغيير الحالة الذهنية بتغيير الموقف.',
            'high_threshold' => 8,
            'low_threshold' => 6,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى المرونة لديك منخفض، فليس لديك القدرة على التحرر من الأنماط التقليدية في التفكير.',
            'high_threshold' => 2,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت ذو مستوى متوسط في المرونة.',
            'high_threshold' => 5,
            'low_threshold' => 3,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'محور الحساسية للمشكلات',
        'max_score' => 8,
        'order_index' => 4,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في الحساسية للمشكلات، حيث لديك القدرة على رؤية المشكلات في الموقف الواحد رؤية واضحة.',
            'high_threshold' => 8,
            'low_threshold' => 6,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى الحساسية للمشكلات لديك منخفض.',
            'high_threshold' => 2,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت ذو مستوى متوسط في الحساسية للمشكلات.',
            'high_threshold' => 5,
            'low_threshold' => 3,
          ),
        ),
      ),
      4 => 
      array (
        'name_ar' => 'محور القدرة على التحليل والربط',
        'max_score' => 8,
        'order_index' => 5,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في القدرة على التحليل والربط، حيث لديك القدرة على التوصل إلى العناصر المكوِّنة للأشياء المركبة.',
            'high_threshold' => 8,
            'low_threshold' => 6,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى القدرة على التحليل والربط لديك منخفض.',
            'high_threshold' => 2,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت ذو مستوى متوسط في القدرة على التحليل والربط.',
            'high_threshold' => 5,
            'low_threshold' => 3,
          ),
        ),
      ),
    ),
    'questions' => 
    array (
      0 => 
      array (
        'text_ar' => 'أنجز أعمالي بأسلوب متجدد.',
        'order_index' => 0,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      1 => 
      array (
        'text_ar' => 'أشعر بالملل من تكرار الإجراءات المتبعة في إنجاز المهام.',
        'order_index' => 1,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'text_ar' => 'أحاول الابتعاد عن تقليد الآخرين في حل المشكلات.',
        'order_index' => 2,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      3 => 
      array (
        'text_ar' => 'أمتلك القدرة على تقديم أفكار جديدة.',
        'order_index' => 3,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      4 => 
      array (
        'text_ar' => 'أمتلك القدرة على تقديم عدد من الحلول الجديدة للمشكلات التي تواجهني.',
        'order_index' => 4,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      5 => 
      array (
        'text_ar' => 'أتصف بالسرعة في طرح الأفكار والحلول.',
        'order_index' => 5,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      6 => 
      array (
        'text_ar' => 'أتصف بالتلقائية عند تقديم أفكار جديدة للتطوير.',
        'order_index' => 6,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      7 => 
      array (
        'text_ar' => 'أمتلك القدرة على تقديم أكثر من فكرة خلال فترة زمنية قصيرة.',
        'order_index' => 7,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      8 => 
      array (
        'text_ar' => 'أحرص على معرفة الرأي المخالف لرأيي للاستفادة منه.',
        'order_index' => 8,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      9 => 
      array (
        'text_ar' => 'أقبل تغيير موقفي عندما أقتنع بعدم صحته.',
        'order_index' => 9,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      10 => 
      array (
        'text_ar' => 'أحبذ إجراء تغييرات جديدة في بين فترة وأخرى.',
        'order_index' => 10,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      11 => 
      array (
        'text_ar' => 'لدي القدرة على النظر للأشياء من زوايا مختلفة.',
        'order_index' => 11,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      12 => 
      array (
        'text_ar' => 'أتنبأ بالمشكلات قبل حدوثها.',
        'order_index' => 12,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      13 => 
      array (
        'text_ar' => 'أخطط لمواجهة المشكلات الممكن حدوثها.',
        'order_index' => 13,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      14 => 
      array (
        'text_ar' => 'أحرص على معرفة أوجه القصور أو الضعف فيما أقوم به.',
        'order_index' => 14,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      15 => 
      array (
        'text_ar' => 'أمتلك رؤية دقيقة لاكتشاف المشكلات التي يعاني منها الآخرون.',
        'order_index' => 15,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      16 => 
      array (
        'text_ar' => 'أمتلك القدرة على تنظيم أفكاري.',
        'order_index' => 16,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      17 => 
      array (
        'text_ar' => 'أحتاج إلى تعليمات مفصلة عند تكليفي بمهام جديدة.',
        'order_index' => 17,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      18 => 
      array (
        'text_ar' => 'لدي القدرة على تجزئة المهام.',
        'order_index' => 18,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
      19 => 
      array (
        'text_ar' => 'لدي القدرة على تحليل المهام.',
        'order_index' => 19,
        'options' => 
        array (
          0 => 
          array (
            'label_ar' => 'نعم',
            'score_value' => 2,
            'order_index' => 0,
          ),
          1 => 
          array (
            'label_ar' => 'إلى حد ما',
            'score_value' => 1,
            'order_index' => 0,
          ),
          2 => 
          array (
            'label_ar' => 'لا',
            'score_value' => 0,
            'order_index' => 0,
          ),
        ),
      ),
    ),
    'recommendations' => 
    array (
      0 => 
      array (
        'level' => 'high',
        'low_threshold' => 27,
        'high_threshold' => 40,
        'description_ar' => 'أنت شخص مبتكر، ولديك مزيج من القدرات التي تمكنك من إنتاج فكرة جديدة، متميزة، قابلة للتطبيق. قادر على ابتكار آليات وطرق وأساليب تعمل على الاستخدام الأمثل للإمكانات المتاحة.',
        'programs_ar' => 'التفكير التصميمي، حل المشكلات واتخاذ القرار الإبداعي، إدارة الابتكار المؤسسي، القيادة الابتكارية وإدارة التغيير، مختبر الابتكار التطبيقي',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 13,
        'description_ar' => 'أنت شخص يحتاج إلى تطوير قدراته الإبداعية. ليس لديك حالياً القدرات الكافية التي تمكنك من إنتاج أفكار جديدة قابلة للتطبيق.',
        'programs_ar' => 'أساسيات الإبداع الإداري، مهارات التفكير الناقد والإبداعي، حل المشكلات واتخاذ القرار، مهارات الاتصال والعمل الجماعي',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 14,
        'high_threshold' => 26,
        'description_ar' => 'أنت مشروع شخص على بداية طريق الابتكار، وقدراتك متوسطة في الجوانب الخاصة بتقديم أفكار جديدة.',
        'programs_ar' => 'التفكير الإبداعي المتقدم، التصميم الابتكاري، القيادة الابتكارية، إدارة التغيير والابتكار، حل المشكلات بطرق إبداعية',
      ),
    ),
  ),
  11 => 
  array (
    'title_ar' => 'هل أنت قادر على النجاح في وظيفتك / مهنتك؟',
    'category' => 'الكفاءة الشخصية والنجاح المهني',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى امتلاكك للمقومات والمهارات المرتبطة بالنجاح في الوظيفة.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'البعد الأول: الكفاءة المهنية',
        'max_score' => 10,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أمتلك المهارات اللازمة لأداء مهام عملي بكفاءة.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أستطيع حل المشكلات التي تواجهني أثناء العمل.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتعلم بسرعة أي مهارات جديدة تتطلبها الوظيفة.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أشعر بالثقة عند تنفيذ مسؤولياتي الوظيفية.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أحقق الأهداف المطلوبة مني في العمل.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مهارات ومعارف مهنية جيدة، وتستطيع أداء مهامك الوظيفية بكفاءة.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تحتاج إلى تطوير بعض المهارات والمعارف المهنية المرتبطة بعملك.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مقبولاً من المهارات والخبرات المهنية، إلا أنك ما زلت بحاجة إلى تطوير.',
            'high_threshold' => 7,
            'low_threshold' => 4,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'البعد الثاني: الالتزام والانضباط',
        'max_score' => 10,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'ألتزم بمواعيد الحضور والانصراف.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أنجز المهام المطلوبة في الوقت المحدد.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتحمل مسؤولية أخطائي وأسعى لتصحيحها.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'ألتزم بقوانين وأنظمة جهة العمل.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أحرص على تقديم أفضل أداء ممكن باستمرار.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك شخص ملتزم ومنضبط في عملك، وتحرص على أداء واجباتك المهنية وتحمل مسؤولياتك بكفاءة.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في الالتزام الكامل بمتطلبات العمل.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تلتزم بدرجة مقبولة بالأنظمة والتعليمات الوظيفية.',
            'high_threshold' => 7,
            'low_threshold' => 4,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'البعد الثالث: العلاقات والتواصل',
        'max_score' => 10,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستطيع التواصل بفعالية مع الزملاء.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتقبل النقد البناء وأستفيد منه.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أعمل بروح الفريق عند الحاجة.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أتعامل باحترام مع جميع من أعمل معهم.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أستطيع التعبير عن أفكاري بوضوح في بيئة العمل.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مهارات جيدة في التواصل والتفاعل مع الآخرين.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه بعض الصعوبات في التواصل مع الآخرين.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مهارات تواصل مقبولة تساعدك على بناء علاقات مهنية مناسبة.',
            'high_threshold' => 7,
            'low_threshold' => 4,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'البعد الرابع: الدافعية والتطوير الذاتي',
        'max_score' => 10,
        'order_index' => 4,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'لدي رغبة مستمرة في تطوير نفسي مهنيًا.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أسعى لاكتساب خبرات جديدة في مجال عملي.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أبحث عن حلول مبتكرة لتحسين الأداء.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أستمتع بالتحديات المهنية الجديدة.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أؤمن بقدرتي على التقدم والنجاح في عملي.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك دافعية عالية نحو النجاح والتطور المهني.',
            'high_threshold' => 10,
            'low_threshold' => 8,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أن رغبتك في التعلم والتطوير المهني قد تكون محدودة نسبياً.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك دافعية معتدلة نحو التطور المهني.',
            'high_threshold' => 7,
            'low_threshold' => 4,
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
        'low_threshold' => 28,
        'high_threshold' => 40,
        'description_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مرتفعاً من المقومات المرتبطة بالنجاح الوظيفي. فأنت تتمتع بقدرات ومهارات تساعدك على أداء مهامك بكفاءة.',
        'programs_ar' => 'دورات القيادة الإدارية، التفكير الاستراتيجي، إدارة المشروعات، الابتكار في بيئة العمل، اتخاذ القرار، إدارة التغيير',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 13,
        'description_ar' => 'تشير نتيجتك إلى أنك لا تمتلك حالياً القدر الكافي من المقومات التي تساعدك على النجاح في وظيفتك.',
        'programs_ar' => 'برنامج الاستعداد للنجاح الوظيفي، برنامج بناء الثقة والكفاءة المهنية، برنامج الالتزام والانضباط الوظيفي، برنامج الدافعية المهنية والتطوير الذاتي',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 14,
        'high_threshold' => 27,
        'description_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مقبولاً من المقومات اللازمة للنجاح في وظيفتك.',
        'programs_ar' => 'برنامج تطوير الكفاءة المهنية، برنامج إدارة الوقت والإنجاز، برنامج مهارات التواصل في بيئة العمل، برنامج التطوير الذاتي والتخطيط المهني',
      ),
    ),
  ),
  12 => 
  array (
    'title_ar' => 'مهارة اتخاذ القرار',
    'category' => 'الكفاءة الشخصية والنجاح المهني',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى مهارة اتخاذ القرار لديك من خلال مجموعة من العبارات التي تعكس مواقف وسلوكيات مرتبطة بعملية اتخاذ القرار.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'عام',
        'max_score' => 30,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أحدد المشكلة بوضوح قبل اتخاذ أي قرار.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أجمع المعلومات اللازمة قبل اتخاذ القرار.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أدرس البدائل المختلفة قبل اختيار أحدها.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أقارن بين مزايا وعيوب البدائل المتاحة.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أعتمد على الحقائق والمعلومات عند اتخاذ القرار.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أفكر في النتائج المتوقعة قبل اتخاذ القرار.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أستشير الآخرين عند الحاجة قبل اتخاذ قرار مهم.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أتحمل مسؤولية القرارات التي أتخذها.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أتعلم من أخطائي السابقة عند اتخاذ قرارات جديدة.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أستطيع اتخاذ القرار في الوقت المناسب.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          10 => 
          array (
            'text_ar' => 'أختار البديل الأنسب بعد التفكير في الخيارات المتاحة.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          11 => 
          array (
            'text_ar' => 'أوازن بين الفوائد والمخاطر قبل اتخاذ القرار.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          12 => 
          array (
            'text_ar' => 'أضع أهدافي في الاعتبار عند اتخاذ قراراتي.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          13 => 
          array (
            'text_ar' => 'أستطيع اتخاذ قرارات مناسبة في المواقف الصعبة.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          14 => 
          array (
            'text_ar' => 'أشعر بالثقة عند اتخاذ القرارات المهمة.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
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
        'low_threshold' => 21,
        'high_threshold' => 30,
        'description_ar' => 'تشير نتيجتك إلى قدرتك العالية على تحديد المشكلات وتحليلها بصورة دقيقة، وجمع المعلومات اللازمة، وتقييم البدائل المتاحة وفق أسس موضوعية.',
        'programs_ar' => 'برنامج القيادة واتخاذ القرارات الاستراتيجية، برنامج إدارة الأزمات، برنامج التفكير الإبداعي والابتكار، برنامج تحليل البيانات',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 10,
        'description_ar' => 'تشير نتيجتك إلى أنك تواجه صعوبة في تحديد المشكلة بدقة، وجمع المعلومات المناسبة، والمفاضلة بين البدائل.',
        'programs_ar' => 'دورة أساسيات اتخاذ القرار وحل المشكلات، دورة مهارات التفكير المنطقي، دورة جمع المعلومات وتحليلها، دورة بناء الثقة بالنفس',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 11,
        'high_threshold' => 20,
        'description_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرة مقبولة على التعامل مع المواقف التي تتطلب اتخاذ قرارات.',
        'programs_ar' => 'دورة مهارات اتخاذ القرار الفعّال، دورة التفكير الناقد، دورة تقييم البدائل وإدارة المخاطر، ورش عمل تطبيقية',
      ),
    ),
  ),
  13 => 
  array (
    'title_ar' => 'هل تخطط؟',
    'category' => 'الكفاءة الشخصية والنجاح المهني',
    'description_ar' => 'يهدف هذا المقياس إلى مساعدتك على التعرف إلى مستوى مهاراتك في التخطيط.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'عام',
        'max_score' => 40,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أحدد أهدافي بوضوح قبل البدء في أي مهمة.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أضع خطة عمل لتحقيق أهدافي.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أحدد أولويات المهام التي أقوم بها.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أخصص وقتًا للتفكير في خطوات العمل قبل تنفيذه.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أضع جدولًا زمنيًا لإنجاز أعمالي.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'ألتزم بالمواعيد التي أحددها لنفسي.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أوزع وقتي وفقًا لأهمية المهام.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أراجع خططي بشكل دوري.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أقيّم مدى نجاح خططي بعد تنفيذها.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أعدّل خططي عندما تقتضي الظروف ذلك.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          10 => 
          array (
            'text_ar' => 'أتوقع المشكلات المحتملة قبل حدوثها.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          11 => 
          array (
            'text_ar' => 'أضع حلولًا بديلة للمواقف الطارئة.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          12 => 
          array (
            'text_ar' => 'أجمع المعلومات اللازمة قبل اتخاذ القرارات المهمة.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          13 => 
          array (
            'text_ar' => 'أحرص على تنظيم الموارد المتاحة لدي قبل البدء بالعمل.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          14 => 
          array (
            'text_ar' => 'أجزّئ الأهداف الكبيرة إلى أهداف فرعية قابلة للتنفيذ.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          15 => 
          array (
            'text_ar' => 'أحدد النتائج المتوقعة قبل تنفيذ أي خطة.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          16 => 
          array (
            'text_ar' => 'أتابع تقدم العمل للتأكد من تحقيق الأهداف المحددة.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          17 => 
          array (
            'text_ar' => 'أستفيد من خبراتي السابقة عند وضع الخطط الجديدة.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          18 => 
          array (
            'text_ar' => 'أحرص على التنسيق المسبق مع الآخرين عند تنفيذ الأعمال المشتركة.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          19 => 
          array (
            'text_ar' => 'أشعر أن التخطيط يساعدني على تحقيق أهدافي بكفاءة أكبر.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
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
        'high_threshold' => 40,
        'description_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مرتفعًا من مهارات التخطيط، وتحرص على تحديد الأهداف وتنظيم الوقت والموارد.',
        'programs_ar' => 'التخطيط الاستراتيجي، إدارة المشروعات، التخطيط المستقبلي، الابتكار في حل المشكلات',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 13,
        'description_ar' => 'تشير نتيجتك إلى أن التخطيط ليس ممارسة منتظمة في أنشطتك اليومية.',
        'programs_ar' => 'أساسيات التخطيط وتنظيم الحياة اليومية، بناء عادة التخطيط، إدارة الوقت للمبتدئين',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 14,
        'high_threshold' => 26,
        'description_ar' => 'تشير نتيجتك إلى أنك تمارس التخطيط في بعض المواقف، إلا أن هذه الممارسة ليست ثابتة أو شاملة.',
        'programs_ar' => 'البرنامج الأول: التخطيط الشخصي الفعّال وإدارة الأولويات، البرنامج الثاني: التخطيط واتخاذ القرار، البرنامج الثالث: التخطيط الاستراتيجي الشخصي',
      ),
    ),
  ),
  14 => 
  array (
    'title_ar' => 'القدرة على التفاوض والحوار وإقناع الآخرين',
    'category' => 'مهارات التواصل والعمل الجماعي',
    'description_ar' => 'يهدف هذا المقياس إلى مساعدتك على التعرف إلى مستوى قدرتك على التفاوض والحوار وإقناع الآخرين.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'عام',
        'max_score' => 40,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستطيع عرض وجهة نظري بوضوح أثناء النقاش.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أستمع باهتمام لآراء الآخرين قبل الرد عليها.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أبحث عن حلول وسط عند وجود خلاف.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أتمكن من إقناع الآخرين بأفكاري باستخدام الحجج المنطقية.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أحافظ على هدوئي أثناء الحوار حتى عند الاختلاف.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أستطيع التفاوض للوصول إلى نتائج مرضية لجميع الأطراف.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أختار الكلمات المناسبة عند مناقشة القضايا الحساسة.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أتفهم احتياجات الطرف الآخر أثناء التفاوض.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أستطيع تغيير أسلوب حديثي بما يتناسب مع الشخص الذي أحاوره.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أعرض الأدلة والأمثلة لدعم آرائي.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          10 => 
          array (
            'text_ar' => 'أتجنب مقاطعة الآخرين أثناء حديثهم.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          11 => 
          array (
            'text_ar' => 'أتمكن من معالجة الاعتراضات بطريقة مقنعة.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          12 => 
          array (
            'text_ar' => 'أشعر بالثقة عند التحدث أمام مجموعة من الأشخاص.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          13 => 
          array (
            'text_ar' => 'أحرص على بناء علاقة إيجابية مع الطرف الآخر أثناء التفاوض.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          14 => 
          array (
            'text_ar' => 'أستطيع التأثير في قرارات الآخرين بطريقة إيجابية.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          15 => 
          array (
            'text_ar' => 'أبحث عن نقاط الاتفاق قبل التركيز على نقاط الخلاف.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          16 => 
          array (
            'text_ar' => 'أتمكن من إقناع الآخرين دون اللجوء إلى الضغط أو التهديد.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          17 => 
          array (
            'text_ar' => 'أستطيع إدارة الحوار عندما يحتد النقاش.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          18 => 
          array (
            'text_ar' => 'أراجع موقفي إذا وجدت أن رأي الطرف الآخر أكثر منطقية.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          19 => 
          array (
            'text_ar' => 'أحقق غالبًا أهدافي من خلال الحوار والتفاوض.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
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
        'low_threshold' => 28,
        'high_threshold' => 42,
        'description_ar' => 'تشير نتيجتك إلى تمتعك بمهارات جيدة في التفاوض والحوار والإقناع. فأنت مفاوض جيد وناجح، وتحقق الأهداف التي تريدها.',
        'programs_ar' => 'التفاوض الاستراتيجي المتقدم، القيادة والتأثير المؤسسي، الوساطة وتسوية النزاعات، الذكاء العاطفي المتقدم',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 13,
        'description_ar' => 'تشير نتيجتك إلى ضعف نسبي في مهارات التفاوض والحوار والإقناع.',
        'programs_ar' => 'أساسيات مهارات التواصل الفعال، مهارات الاستماع الفعال، الثقة بالنفس وفن التعبير، إدارة الانفعالات أثناء الحوار',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 14,
        'high_threshold' => 27,
        'description_ar' => 'تشير نتيجتك إلى امتلاكك مستوى مقبولًا من مهارات التفاوض والحوار والإقناع مع وجود حاجة إلى تطوير.',
        'programs_ar' => 'مهارات التفاوض الاحترافي، فن الإقناع والتأثير، إدارة الخلافات وحل النزاعات، الذكاء العاطفي في الحوار',
      ),
    ),
  ),
  15 => 
  array (
    'title_ar' => 'مقياس مهارات الاتصال',
    'category' => 'مهارات التواصل والعمل الجماعي',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى مهارات الاتصال لديك من خلال أبعاد متعددة.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'البعد الأول: مهارات الاستماع الفعال',
        'max_score' => 20,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أركز انتباهي على المتحدث حتى ينتهي من حديثه.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتجنب مقاطعة الآخرين أثناء الكلام.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أستوعب الأفكار الرئيسية من حديث الآخرين.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أطلب التوضيح عندما لا أفهم ما يقال.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أظهر اهتمامي بالحديث من خلال الإيماءات المناسبة.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أتذكر المعلومات المهمة التي أسمعها.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أستطيع التمييز بين الحقائق والآراء أثناء الاستماع.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أنتبه للمشاعر التي يعبر عنها المتحدث.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أعيد صياغة ما سمعته للتأكد من فهمي الصحيح.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أتفاعل مع المتحدث بطريقة تشجعه على الاستمرار.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بمهارات استماع فعالة. تنصت باهتمام للآخرين، وتفهم ما يرغبون في إيصاله.',
            'high_threshold' => 20,
            'low_threshold' => 14,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أن مهارات الاستماع لديك تحتاج إلى مزيد من التطوير.',
            'high_threshold' => 6,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مقبولًا من مهارات الاستماع.',
            'high_threshold' => 13,
            'low_threshold' => 7,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'البعد الثاني: التعبير اللفظي',
        'max_score' => 20,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أعبر عن أفكاري بوضوح.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أستخدم كلمات مناسبة للموقف.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشرح وجهة نظري بطريقة مفهومة.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أرتب أفكاري قبل التحدث.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أتحدث بثقة أمام الآخرين.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أستطيع إيصال رسالتي دون غموض.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أختار الوقت المناسب لطرح آرائي.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أستخدم أمثلة لتوضيح أفكاري.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أتكيف في حديثي مع مستوى المستمعين.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أستطيع إدارة الحوار بفاعلية.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرة جيدة على التعبير عن أفكارك ومشاعرك بوضوح وثقة.',
            'high_threshold' => 20,
            'low_threshold' => 14,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في التعبير الواضح عن أفكارك.',
            'high_threshold' => 6,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع التعبير عن أفكارك بدرجة مقبولة.',
            'high_threshold' => 13,
            'low_threshold' => 7,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'البعد الثالث: التواصل غير اللفظي',
        'max_score' => 20,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أحافظ على تواصل بصري مناسب أثناء الحديث.',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'تتوافق تعبيرات وجهي مع ما أقوله.',
            'order_index' => 21,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أستخدم لغة جسد إيجابية.',
            'order_index' => 22,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'ألاحظ الإشارات غير اللفظية لدى الآخرين.',
            'order_index' => 23,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أستخدم نبرة صوت مناسبة للموقف.',
            'order_index' => 24,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أتحكم في حركاتي أثناء التحدث.',
            'order_index' => 25,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أستطيع تفسير بعض الرسائل غير اللفظية بدقة.',
            'order_index' => 26,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أظهر الاحترام من خلال سلوكي الجسدي.',
            'order_index' => 27,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أنتبه للمسافة المناسبة أثناء التواصل.',
            'order_index' => 28,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أستخدم الإيماءات لتعزيز المعنى.',
            'order_index' => 29,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستخدم الإشارات غير اللفظية بفاعلية وتفهم دلالاتها.',
            'high_threshold' => 20,
            'low_threshold' => 14,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أن استخدامك للإشارات غير اللفظية قد يكون محدودًا.',
            'high_threshold' => 6,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تدرك بعض جوانب التواصل غير اللفظي.',
            'high_threshold' => 13,
            'low_threshold' => 7,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'البعد الرابع: الذكاء العاطفي في الاتصال',
        'max_score' => 20,
        'order_index' => 4,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أتحكم في انفعالاتي أثناء النقاش.',
            'order_index' => 30,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتفهم مشاعر الآخرين أثناء الحوار.',
            'order_index' => 31,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتعاطف مع الآخرين عند الحديث عن مشكلاتهم.',
            'order_index' => 32,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أتجنب الردود الانفعالية السريعة.',
            'order_index' => 33,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أستطيع التعبير عن مشاعري بطريقة مناسبة.',
            'order_index' => 34,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أراعي مشاعر الآخرين عند تقديم النقد.',
            'order_index' => 35,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أهدئ المواقف المتوترة بالحوار.',
            'order_index' => 36,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أتقبل اختلاف وجهات النظر.',
            'order_index' => 37,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أظهر الاحترام حتى عند الخلاف.',
            'order_index' => 38,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أعتذر عندما أخطئ في التواصل.',
            'order_index' => 39,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة جيدة على فهم مشاعرك ومشاعر الآخرين وإدارتها بصورة إيجابية.',
            'high_threshold' => 20,
            'low_threshold' => 14,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في إدارة مشاعرك أثناء التواصل.',
            'high_threshold' => 6,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مقبولًا من الوعي بالمشاعر أثناء التواصل.',
            'high_threshold' => 13,
            'low_threshold' => 7,
          ),
        ),
      ),
      4 => 
      array (
        'name_ar' => 'البعد الخامس: الإقناع والتأثير',
        'max_score' => 20,
        'order_index' => 5,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أقدم حججًا منطقية لدعم آرائي.',
            'order_index' => 40,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أستطيع التأثير في الآخرين بطريقة إيجابية.',
            'order_index' => 41,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أستخدم الأدلة عند عرض أفكاري.',
            'order_index' => 42,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أتعامل مع الاعتراضات بهدوء.',
            'order_index' => 43,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أعدّل أسلوبي لإقناع أشخاص مختلفين.',
            'order_index' => 44,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أركز على النقاط المشتركة أثناء النقاش.',
            'order_index' => 45,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أستطيع التفاوض للوصول إلى حلول مناسبة.',
            'order_index' => 46,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أوضح فوائد المقترحات التي أقدمها.',
            'order_index' => 47,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أستمع للآراء المخالفة قبل الرد.',
            'order_index' => 48,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أستخدم أساليب إقناع أخلاقية ومحترمة.',
            'order_index' => 49,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك قدرة جيدة على الإقناع والتأثير الإيجابي في الآخرين.',
            'high_threshold' => 20,
            'low_threshold' => 14,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تجد صعوبة في التأثير في الآخرين.',
            'high_threshold' => 6,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك بعض المهارات الإقناعية.',
            'high_threshold' => 13,
            'low_threshold' => 7,
          ),
        ),
      ),
      5 => 
      array (
        'name_ar' => 'البعد السادس: إدارة العلاقات والتفاعل الاجتماعي',
        'max_score' => 20,
        'order_index' => 6,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أبادر بالتواصل مع الآخرين.',
            'order_index' => 50,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أكوّن علاقات إيجابية بسهولة.',
            'order_index' => 51,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أحافظ على العلاقات المهنية والشخصية.',
            'order_index' => 52,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أتعامل باحترام مع مختلف الأشخاص.',
            'order_index' => 53,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أتعاون مع الآخرين لتحقيق الأهداف.',
            'order_index' => 54,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أحل الخلافات بالحوار.',
            'order_index' => 55,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أشارك بفاعلية في العمل الجماعي.',
            'order_index' => 56,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أقدم التغذية الراجعة بطريقة بناءة.',
            'order_index' => 57,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أتقبل التغذية الراجعة من الآخرين.',
            'order_index' => 58,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أظهر المرونة في التعامل مع الآخرين.',
            'order_index' => 59,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تتمتع بقدرة جيدة على بناء العلاقات والمحافظة عليها.',
            'high_threshold' => 20,
            'low_threshold' => 14,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه بعض الصعوبات في بناء العلاقات.',
            'high_threshold' => 6,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تستطيع بناء علاقات إيجابية بدرجة مقبولة.',
            'high_threshold' => 13,
            'low_threshold' => 7,
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
        'description_ar' => 'تشير نتيجتك إلى أنك تتمتع بمهارات اتصال عالية في مختلف أبعادها من الاستماع والتعبير والتواصل غير اللفظي.',
        'programs_ar' => 'مهارات التفاوض، العرض والتقديم الاحترافي، إدارة الاجتماعات، القيادة والتأثير',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 40,
        'description_ar' => 'تشير نتيجتك إلى حاجتك لتطوير مهارات الاتصال الأساسية.',
        'programs_ar' => 'دورة أساسيات التواصل، دورة الاستماع الفعال، دورة التعبير عن الذات',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 41,
        'high_threshold' => 80,
        'description_ar' => 'تشير نتيجتك إلى امتلاكك مهارات اتصال مقبولة مع فرص للتطوير.',
        'programs_ar' => 'دورة مهارات التواصل الفعال، دورة التعبير اللفظي، دورة لغة الجسد',
      ),
    ),
  ),
  16 => 
  array (
    'title_ar' => 'هل تحب العمل في فريق؟',
    'category' => 'مهارات التواصل والعمل الجماعي',
    'description_ar' => 'يهدف هذا المقياس إلى مساعدتك في التعرف على مدى ميلك للعمل ضمن فريق.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'عام',
        'max_score' => 20,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستمتع بالعمل مع الآخرين لتحقيق هدف مشترك.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أفضل التعاون مع زملائي بدلًا من العمل بمفردي.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشارك أفكاري وآرائي مع أعضاء الفريق.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أستمع لآراء الآخرين وأحترم وجهات نظرهم.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أشعر بالراحة عند توزيع المهام بين أعضاء الفريق.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أساعد زملائي عندما يحتاجون إلى الدعم.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أتحمل المسؤولية تجاه نجاح الفريق.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أستمتع بحل المشكلات بشكل جماعي.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أتقبل النقد البنّاء من أعضاء الفريق.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أفضل الأنشطة الجماعية على الأنشطة الفردية.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
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
        'low_threshold' => 14,
        'high_threshold' => 20,
        'description_ar' => 'تشير هذه النتيجة إلى أنك تتمتع باتجاه إيجابي قوي نحو العمل ضمن فريق، وتستمتع بالتعاون مع الآخرين لتحقيق الأهداف المشتركة.',
        'programs_ar' => 'برنامج القيادة التشاركية، برنامج إدارة فرق العمل عالية الأداء، التواصل الفعال والتأثير، إدارة الصراعات وحل المشكلات الجماعي',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 6,
        'description_ar' => 'تشير هذه النتيجة إلى أنك تميل إلى العمل الفردي أكثر من العمل الجماعي.',
        'programs_ar' => 'أساسيات العمل ضمن فريق، مهارات التواصل وبناء العلاقات المهنية، الذكاء العاطفي في بيئة العمل، بناء الثقة والعمل التعاوني',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 7,
        'high_threshold' => 13,
        'description_ar' => 'تشير هذه النتيجة إلى أنك لديك اتجاه معتدل نحو العمل الجماعي.',
        'programs_ar' => 'مهارات التعاون الفعال، التواصل الفعال داخل الفريق، حل المشكلات واتخاذ القرار الجماعي، إدارة الخلافات في بيئة العمل',
      ),
    ),
  ),
  17 => 
  array (
    'title_ar' => 'التوجيه المهني',
    'category' => 'التوجيه والتوافق المهني',
    'description_ar' => 'يهدف هذا المقياس إلى مساعدتك في استكشاف ميولك المهنية وتحديد مسارك الوظيفي المناسب.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'البعد الأول: معرفة الذات المهنية',
        'max_score' => 14,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أعرف نقاط القوة التي أتميز بها.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أعرف المهارات التي أجيدها أكثر من غيري.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أستطيع تحديد المجالات المهنية التي تناسب شخصيتي.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أعرف اهتماماتي المهنية بشكل واضح.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أدرك جوانب الضعف التي أحتاج إلى تطويرها.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أستطيع وصف قدراتي للآخرين بسهولة.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أعرف الأعمال التي لا تتناسب مع ميولي.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'لدي تصور واضح عن طموحاتي المهنية.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أستطيع اتخاذ قرارات مهنية بناءً على قدراتي الحقيقية.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أثق بقدرتي على النجاح في المجال المهني الذي أختاره.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى امتلاكك وعيًا مرتفعًا بقدراتك ومهاراتك واهتماماتك وقيمك المهنية.',
            'high_threshold' => 14,
            'low_threshold' => 10,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى وجود فرصة لتعزيز معرفتك بذاتك المهنية.',
            'high_threshold' => 4,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى امتلاكك وعيًا متوسطًا بذاتك المهنية.',
            'high_threshold' => 9,
            'low_threshold' => 5,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'البعد الثاني: المعرفة بالمهن وسوق العمل',
        'max_score' => 14,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أبحث عن معلومات حول المهن المختلفة.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أعرف متطلبات المهن التي أهتم بها.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتابع التغيرات في سوق العمل.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أعرف التخصصات المطلوبة في المستقبل.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أمتلك معلومات كافية عن فرص العمل المتاحة.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أستطيع المقارنة بين المهن المختلفة.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أعرف المؤهلات اللازمة للمهنة التي أرغب بها.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أستفيد من مصادر متنوعة للحصول على معلومات مهنية.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'لدي معرفة بالمهارات المطلوبة لدى أصحاب العمل.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أستطيع تحديد المهن التي تتناسب مع مؤهلاتي.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك معرفة جيدة بسوق العمل ومتطلبات المهن المختلفة.',
            'high_threshold' => 14,
            'low_threshold' => 10,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى حاجتك لتعزيز معرفتك بسوق العمل والمهن المختلفة.',
            'high_threshold' => 4,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى امتلاكك معرفة متوسطة بسوق العمل.',
            'high_threshold' => 9,
            'low_threshold' => 5,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'البعد الثالث: اتخاذ القرار المهني',
        'max_score' => 14,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستطيع اختيار البدائل المهنية المناسبة لي.',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أفكر جيدًا قبل اتخاذ قرار مهني.',
            'order_index' => 21,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أجمع المعلومات قبل اتخاذ أي قرار يتعلق بمستقبلي.',
            'order_index' => 22,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أتحمل مسؤولية قراراتي المهنية.',
            'order_index' => 23,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أستطيع تحديد أولوياتي المهنية.',
            'order_index' => 24,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أوازن بين مزايا وعيوب الخيارات المهنية المختلفة.',
            'order_index' => 25,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أثق بقدرتي على اتخاذ قرارات مهنية سليمة.',
            'order_index' => 26,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أطلب المشورة عند الحاجة لاتخاذ قرار مهني.',
            'order_index' => 27,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أضع أهدافًا واضحة قبل اتخاذ القرار.',
            'order_index' => 28,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أستطيع تعديل قراراتي إذا ظهرت معلومات جديدة.',
            'order_index' => 29,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى امتلاكك مهارة عالية في اتخاذ القرارات المهنية.',
            'high_threshold' => 14,
            'low_threshold' => 10,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى وجود فرصة لتطوير مهارتك في اتخاذ القرارات المهنية.',
            'high_threshold' => 4,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى امتلاكك قدرة معقولة على اتخاذ القرارات المهنية.',
            'high_threshold' => 9,
            'low_threshold' => 5,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'البعد الرابع: التخطيط المهني',
        'max_score' => 14,
        'order_index' => 4,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أضع أهدافًا مهنية طويلة المدى.',
            'order_index' => 30,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أحدد خطوات واضحة لتحقيق أهدافي المهنية.',
            'order_index' => 31,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أخصص وقتًا لتطوير مهاراتي المهنية.',
            'order_index' => 32,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أشارك في أنشطة تساعدني على تحقيق أهدافي المهنية.',
            'order_index' => 33,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أراجع خططي المهنية بشكل دوري.',
            'order_index' => 34,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أضع بدائل في حال تعذّر تحقيق هدفي الأول.',
            'order_index' => 35,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أستثمر الفرص المتاحة لتطوير مستقبلي المهني.',
            'order_index' => 36,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أحرص على اكتساب خبرات جديدة.',
            'order_index' => 37,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أعمل وفق خطة محددة لتحقيق أهدافي المهنية.',
            'order_index' => 38,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'لدي رؤية واضحة لمستقبلي المهني.',
            'order_index' => 39,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى امتلاكك مهارة عالية في التخطيط المهني.',
            'high_threshold' => 14,
            'low_threshold' => 10,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى وجود فرصة لتطوير مهاراتك في التخطيط المهني.',
            'high_threshold' => 4,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى امتلاكك قدرة متوسطة على التخطيط المهني.',
            'high_threshold' => 9,
            'low_threshold' => 5,
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
        'low_threshold' => 38,
        'high_threshold' => 56,
        'description_ar' => 'تشير نتيجتك إلى مستوى مرتفع في التوجيه المهني. أنت تمتلك وعياً جيداً بذاتك المهنية وبسوق العمل وقادر على اتخاذ قرارات مهنية مدروسة.',
        'programs_ar' => 'التخطيط المهني المتقدم، القيادة المهنية، ريادة الأعمال',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 18,
        'description_ar' => 'تشير نتيجتك إلى حاجتك لتطوير وعيك المهني وتحديد مسارك.',
        'programs_ar' => 'أساسيات التوجيه المهني، معرفة الذات المهنية، استكشاف سوق العمل',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 19,
        'high_threshold' => 37,
        'description_ar' => 'تشير نتيجتك إلى مستوى متوسط في التوجيه المهني.',
        'programs_ar' => 'برامج التوجيه المهني، استكشاف الميول المهنية، التخطيط للمسيرة المهنية',
      ),
    ),
  ),
  18 => 
  array (
    'title_ar' => 'حب العمل',
    'category' => 'التوجيه والتوافق المهني',
    'description_ar' => 'يهدف هذا المقياس إلى قياس مدى حبك لعملك وانتمائك إليه.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'عام',
        'max_score' => 40,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أشعر بالسعادة عندما أؤدي عملي.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أستمتع بالمهام المرتبطة بعملي.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أبذل جهدًا إضافيًا لإنجاز العمل بصورة أفضل.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أشعر بالفخر عندما أنجز عملي بنجاح.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أحرص على تطوير مهاراتي المتعلقة بالعمل.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أفضّل الانشغال بالعمل على قضاء الوقت دون هدف.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أشعر بالحماس عند بدء يوم العمل.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أبحث عن حلول للمشكلات التي تواجهني في العمل.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'ألتزم بإنجاز المهام حتى دون رقابة مباشرة.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أشعر بأن عملي له قيمة ومعنى بالنسبة لي.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          10 => 
          array (
            'text_ar' => 'أشارك بأفكار جديدة لتحسين العمل.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          11 => 
          array (
            'text_ar' => 'أشعر بالرضا بعد الانتهاء من واجباتي المهنية.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          12 => 
          array (
            'text_ar' => 'أستمر في أداء العمل حتى عند مواجهة الصعوبات.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          13 => 
          array (
            'text_ar' => 'أعتبر النجاح في العمل من أهدافي المهمة.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          14 => 
          array (
            'text_ar' => 'أتحدث عن عملي بإيجابية أمام الآخرين.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          15 => 
          array (
            'text_ar' => 'أشعر بالملل بسرعة أثناء أداء عملي.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          16 => 
          array (
            'text_ar' => 'أتمنى غالبًا لو لم أكن مضطرًا للقيام بعملي.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          17 => 
          array (
            'text_ar' => 'أؤجل المهام الوظيفية دون سبب مقنع.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          18 => 
          array (
            'text_ar' => 'أشعر بأن العمل عبء ثقيل عليّ.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          19 => 
          array (
            'text_ar' => 'أفتقد الدافعية للقيام بواجبات العمل.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'العبارات من 1 إلى 15',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'العبارات من 16 إلى 20',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
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
        'high_threshold' => 40,
        'description_ar' => 'تشير نتيجتك إلى مستوى مرتفع من حب العمل والانتماء المهني. أنت تشعر بشغف حقيقي تجاه ما تقوم به.',
        'programs_ar' => 'القيادة المهنية، تطوير مسار الأعمال، ريادة الأعمال',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 13,
        'description_ar' => 'تشير نتيجتك إلى انخفاض في مستوى حب العمل والانتماء المهني.',
        'programs_ar' => 'إعادة اكتشاف الهدف المهني، الصحة النفسية في العمل، التوجيه المهني',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 14,
        'high_threshold' => 26,
        'description_ar' => 'تشير نتيجتك إلى مستوى متوسط من حب العمل.',
        'programs_ar' => 'تطوير الدافعية المهنية، استكشاف الشغف الوظيفي، بناء الهوية المهنية',
      ),
    ),
  ),
  19 => 
  array (
    'title_ar' => 'ولاؤك لعملك الحالي',
    'category' => 'التوجيه والتوافق المهني',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى ولائك لمنظمتك الحالية.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'الولاء العاطفي',
        'max_score' => 14,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أشعر بوجود جو أخوي داخل العمل.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'المناخ الودي السائد يدفعني إلى التمسك بالبقاء في عملي.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'لدي الاستعداد لتقديم أقصى جهد لإنجاح عملي الحالي.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أفخر عندما أخبر الأشخاص الآخرين بأنني عضو في عملي الحالي.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أرتاح عند القيام بالمهام التي تُوكل إليّ في العمل.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أشعر بأن لجهة عملي مكانة عالية في نفسي.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أعتبر نجاح جهة عملي جزءًا من نجاحي الشخصي.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في ولاءك العاطفي للعمل الحالي، ولديك مشاعر إيجابية قوية نحو المنظمة.',
            'high_threshold' => 14,
            'low_threshold' => 10,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى الولاء العاطفي لديك منخفض، ولديك مشاعر سلبية نحو المنظمة.',
            'high_threshold' => 5,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'لديك درجة متوسطة من الولاء العاطفي لمنظمتك.',
            'high_threshold' => 9,
            'low_threshold' => 6,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'الولاء الاستمراري',
        'max_score' => 14,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أنا على استعداد لقبول أي عمل لكي أحتفظ بوظيفتي الحالية.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أرفض ترك عملي إذا تلقيت عرضًا براتب أفضل.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'من الصعب عليّ التكيف إذا انتقلت إلى جهة عمل أخرى.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أحقق مكاسب وظيفية على المدى البعيد عند بقائي في العمل الحالي.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'لدي ثقة بأن جهة عملي أكثر أمنًا وظيفيًا من الجهات الأخرى.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'توفر لي جهة عملي مزايا لا توفرها غيرها من الجهات الأخرى.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'عملي الحالي يلبي طموحاتي المستقبلية.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في ولاءك الاستمراري، مقتنع بأن المنافع تبرر البقاء.',
            'high_threshold' => 14,
            'low_threshold' => 10,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى الولاء الاستمراري لديك منخفض، لديك رغبة في الانتقال.',
            'high_threshold' => 5,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'لديك درجة متوسطة من الولاء الاستمراري.',
            'high_threshold' => 9,
            'low_threshold' => 6,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'الولاء المعياري (الأخلاقي)',
        'max_score' => 14,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'يستحق عملي الحالي الإخلاص والتقدير.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'العمل الذي أقوم به له أولوية في حياتي.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'يوجد تطابق بين قيمي وقيم جهة عملي.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أقبل أي عمل أُكلَّف به من منطلق التزامي بواجباتي.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أشعر بالتزام أخلاقي يدفعني للاستمرار في جهة عملي الحالية.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أشعر بالولاء لجهة العمل التي أعمل بها.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'لدي حماس في أداء عملي.',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في الولاء المعياري، تشعر بالالتزام الأخلاقي تجاه البقاء.',
            'high_threshold' => 14,
            'low_threshold' => 10,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'مستوى الولاء المعياري لديك منخفض.',
            'high_threshold' => 5,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'لديك درجة متوسطة من الولاء المعياري.',
            'high_threshold' => 9,
            'low_threshold' => 6,
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
        'high_threshold' => 42,
        'description_ar' => 'تشير نتيجتك إلى مستوى مرتفع من الولاء لمنظمتك. لديك قوة انتماء عالية ومساهمتك فعالة.',
        'programs_ar' => 'القيادة التحويلية، تعزيز الانتماء المؤسسي، بناء ثقافة الولاء',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 14,
        'description_ar' => 'تشير نتيجتك إلى مستوى منخفض من الولاء لمنظمتك.',
        'programs_ar' => 'الولاء العاطفي، الولاء الاستمراري، الولاء المعياري الأخلاقي',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 15,
        'high_threshold' => 28,
        'description_ar' => 'تشير نتيجتك إلى مستوى متوسط من الولاء لمنظمتك.',
        'programs_ar' => 'الولاء العاطفي، الولاء الاستمراري، الولاء المعياري الأخلاقي',
      ),
    ),
  ),
  20 => 
  array (
    'title_ar' => 'الرضا الوظيفي',
    'category' => 'التوجيه والتوافق المهني',
    'description_ar' => 'مقياس الرضا الوظيفي هو أداة تساعدك على التعرف إلى مستوى رضاك عن مختلف جوانب عملك.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'الحوافز المادية',
        'max_score' => 10,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'تتناسب ساعات العمل مع أجري الشهري.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'يتناسب راتبي مع الجهد الذي أبذله.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'يتناسب راتبي مع المستوى المعيشي السائد في البلد.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'يتناسب راتبي مع الشهادة الدراسية التي أحملها.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'يكفي الراتب لحاجاتي الأساسية.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت راض بدرجة كبيرة عن الحوافز المادية التي يقدمها لك العمل الحالي.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت غير راض عن الحوافز المادية التي يقدمها لك العمل الحالي.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت راض بدرجة متوسطة عن الحوافز المادية.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'الثواب الاجتماعي',
        'max_score' => 10,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'يقدّر أفراد أسرتي أهمية عملي.',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أشعر بالتقدير من المحيطين بي.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'يحترم الآخرون إنجازاتي المهنية.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'يتقبل المحيطون بي عملي الحالي.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'تشجيع المحيطين بي يدفعني لإنجاز مهام عملي.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'لديك رضا مرتفع عن الثواب الاجتماعي، فرص الترقية والتقدير والاعتراف بالجهد.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'ليس لديك رضا عن الثواب الاجتماعي في عملك.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'لديك رضا بدرجة متوسطة عن الثواب الاجتماعي.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'التطور والترقي الوظيفي',
        'max_score' => 12,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'مناسبة فرص الترقي الوظيفي.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'توفير الاستقرار الوظيفي.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'هذه الوظيفة مناسبة لي.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'خدمة هذا العمل لمستقبلي الوظيفي.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'وجود فرص التدريب المؤدية للترقية.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'وجود مسارات متنوعة وثرية للترقي الوظيفي.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت راض بدرجة عالية عن فرص التطور والترقي الوظيفي.',
            'high_threshold' => 12,
            'low_threshold' => 9,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت غير راض عن فرص التطور والترقي الوظيفي.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت راض بدرجة متوسطة عن فرص التطور والترقي.',
            'high_threshold' => 8,
            'low_threshold' => 4,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'العلاقة بالزملاء',
        'max_score' => 12,
        'order_index' => 4,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'هناك ود في علاقتي بزملائي.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'يوجد تعاون بيني وبين زملائي في العمل.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'هناك تواصل إنساني بيني وبين زملائي.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'يقدّر زملائي أفكاري ومقترحاتي.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'تتاح الفرصة لي لتكوين صداقات كثيرة.',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'تتوافر فرص العمل بروح الجماعة.',
            'order_index' => 21,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت راض بشكل كبير على علاقتك بالزملاء في العمل.',
            'high_threshold' => 12,
            'low_threshold' => 9,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت غير راض على علاقتك بالزملاء في العمل.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت راض بدرجة متوسطة على علاقتك بالزملاء.',
            'high_threshold' => 8,
            'low_threshold' => 4,
          ),
        ),
      ),
      4 => 
      array (
        'name_ar' => 'الرضا عن الذات',
        'max_score' => 12,
        'order_index' => 5,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'يتناسب عملي مع إمكاناتي.',
            'order_index' => 22,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أحقق ذاتي في عملي.',
            'order_index' => 23,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشعر بالرضا عن عملي الحالي.',
            'order_index' => 24,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'يتيح لي العمل فرص الإبداع والابتكار.',
            'order_index' => 25,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أشعر بالقدرة على الإنجاز في مجال عملي.',
            'order_index' => 26,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أحب الاستمرار في العمل الحالي.',
            'order_index' => 27,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت راض بدرجة عالية عن ذاتك في العمل، ترى أن العمل يتناسب مع إمكاناتك.',
            'high_threshold' => 12,
            'low_threshold' => 9,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت غير راض عن ذاتك في العمل.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت راض بدرجة متوسطة عن ذاتك في العمل.',
            'high_threshold' => 8,
            'low_threshold' => 4,
          ),
        ),
      ),
      5 => 
      array (
        'name_ar' => 'توافر متطلبات العمل',
        'max_score' => 10,
        'order_index' => 6,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'تتوافر متطلبات العمل في مكان عملي.',
            'order_index' => 28,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتلقى المعونة والأدوات الكافية لإنجاز عملي.',
            'order_index' => 29,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'تتوافر التجهيزات للقيام بالنشاطات المختلفة.',
            'order_index' => 30,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'يتناسب المبنى مع طبيعة العمل.',
            'order_index' => 31,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'مناسبة الإضاءة والأثاث.',
            'order_index' => 32,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'لديك مستوى عال من الرضا عن توافر متطلبات العمل والأدوات اللازمة لإنجازه.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت غير راض عن توافر متطلبات العمل.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'لديك مستوى متوسط من الرضا عن توافر متطلبات العمل.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      6 => 
      array (
        'name_ar' => 'الإدارة والقيادة',
        'max_score' => 14,
        'order_index' => 7,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'حسن تعامل المدير معي.',
            'order_index' => 33,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'يتقبل المدير اقتراحاتي بحماس.',
            'order_index' => 34,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'يقدّر رئيسي الجهد الذي أبذله في العمل.',
            'order_index' => 35,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'يشاركني مديري مشاركة وجدانية عندما تواجهني أزمة.',
            'order_index' => 36,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'مديري لديه القدرة على توزيع العمل بعدالة.',
            'order_index' => 37,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'مديري متعاون في العمل.',
            'order_index' => 38,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'وجود قدر معقول من الصلاحيات لدي لأداء مهامي.',
            'order_index' => 39,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'بدرجة عالية',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'بدرجة متوسطة',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'غير راضٍ',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت راض بدرجة كبيرة عن المشرفين والقيادات لديك.',
            'high_threshold' => 14,
            'low_threshold' => 10,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت غير راض عن المشرفين والقيادات لديك.',
            'high_threshold' => 4,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت راض بدرجة متوسطة عن المشرفين والقيادات.',
            'high_threshold' => 9,
            'low_threshold' => 5,
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
        'high_threshold' => 80,
        'description_ar' => 'لديك مجموعة من المشاعر الإيجابية التي تبديها نحو عملك. وحالتك النفسية والسلوكية إيجابية نتيجة إدراكك للمستوى الذي يحققه العمل لك من إشباع فكري ووظيفي.',
        'programs_ar' => 'القيادة التحويلية في المؤسسات، إدارة المواهب والتعاقب الوظيفي، الإرشاد والتوجيه المهني، صناعة القادة',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 26,
        'description_ar' => 'لديك مجموعة من المشاعر السلبية نحو عملك، وحالتك النفسية والسلوكية سلبية.',
        'programs_ar' => 'دورة إدارة الضغوط والاحتراق الوظيفي، دورة الدافعية الذاتية، دورة حل المشكلات، دورة الصحة النفسية والرفاه الوظيفي',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 27,
        'high_threshold' => 53,
        'description_ar' => 'لديك مجموعة من المشاعر المتأرجحة بين الإيجابية والسلبية نحو عملك.',
        'programs_ar' => 'دورة إدارة الوقت والأولويات، دورة مهارات التواصل، دورة العمل الجماعي، دورة الإبداع والابتكار، دورة تعزيز الانتماء والولاء',
      ),
    ),
  ),
  21 => 
  array (
    'title_ar' => 'مقياس الإرهاق المهني',
    'category' => 'الصحة المهنية',
    'description_ar' => 'يهدف هذا المقياس إلى قياس مستوى الإرهاق المهني من خلال ثلاثة أبعاد رئيسية.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'البعد الأول: الإجهاد والإنهاك النفسي',
        'max_score' => 10,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أشعر بالتعب والإرهاق في نهاية يوم العمل',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أجد صعوبة في استعادة نشاطي بعد ساعات العمل',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشعر بأن متطلبات العمل تفوق طاقتي',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أعاني من التوتر بسبب ضغوط العمل',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أشعر بالإجهاد حتى قبل بدء يوم العمل',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      1 => 
      array (
        'name_ar' => 'البعد الأول: الإرهاق العاطفي',
        'max_score' => 16,
        'order_index' => 1,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى مرتفع من الإرهاق العاطفي في العمل.',
            'high_threshold' => 16,
            'low_threshold' => 12,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى منخفض من الإرهاق العاطفي.',
            'high_threshold' => 5,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى متوسط من الإرهاق العاطفي.',
            'high_threshold' => 11,
            'low_threshold' => 6,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'البعد الثاني: التبلد والانفصال عن العمل',
        'max_score' => 16,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أصبحت أقل حماسًا للعمل مقارنة بالسابق',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أشعر بأن عملي أصبح روتينيًا ومملًا',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أجد نفسي أقل اهتمامًا بمشكلات المستفيدين أو العملاء',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أشعر برغبة في تجنب بعض مهام العمل',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أشعر أحيانًا بعدم الانتماء لبيئة العمل',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى مرتفع من التبلد والانفصال عن العمل.',
            'high_threshold' => 16,
            'low_threshold' => 12,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى منخفض من التبلد.',
            'high_threshold' => 5,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى متوسط من التبلد.',
            'high_threshold' => 11,
            'low_threshold' => 6,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'البعد الثالث: انخفاض الإنجاز المهني',
        'max_score' => 16,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أشعر أن إنتاجيتي أقل مما ينبغي',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أشك في قدرتي على أداء عملي بكفاءة',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أجد صعوبة في تحقيق أهداف العمل المطلوبة',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أشعر بأن جهودي لا تحقق نتائج ملموسة',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أشعر بأن أدائي المهني يتراجع مع الوقت',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى مرتفع من الشعور بانخفاض الإنجاز المهني.',
            'high_threshold' => 16,
            'low_threshold' => 12,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى منخفض من الشعور بانخفاض الإنجاز.',
            'high_threshold' => 5,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى متوسط.',
            'high_threshold' => 11,
            'low_threshold' => 6,
          ),
        ),
      ),
      4 => 
      array (
        'name_ar' => 'البعد الرابع: الأعراض الجسدية المرتبطة بالعمل',
        'max_score' => 10,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أعاني من الصداع أو آلام جسدية مرتبطة بضغوط العمل',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أواجه اضطرابات في النوم بسبب التفكير في العمل',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشعر بإرهاق جسدي متكرر أثناء العمل',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أعاني من ضعف التركيز خلال ساعات العمل',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أشعر بأن ضغوط العمل تؤثر في صحتي العامة',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
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
        'low_threshold' => 33,
        'high_threshold' => 48,
        'description_ar' => 'تشير نتيجتك إلى مستوى مرتفع من الإرهاق المهني. تعاني من إنهاك عاطفي وتبلد ومشاعر سلبية تجاه عملك.',
        'programs_ar' => 'إدارة الإرهاق المهني، الصحة النفسية، المرونة الانفعالية، إعادة بناء الدافعية',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 16,
        'description_ar' => 'تشير نتيجتك إلى مستوى منخفض من الإرهاق المهني.',
        'programs_ar' => 'الحفاظ على الرفاه الوظيفي، الوقاية من الإرهاق المهني',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 17,
        'high_threshold' => 32,
        'description_ar' => 'تشير نتيجتك إلى مستوى متوسط من الإرهاق المهني.',
        'programs_ar' => 'التوازن المهني، إدارة الضغوط، تجديد الطاقة',
      ),
    ),
  ),
  22 => 
  array (
    'title_ar' => 'مقياس الاحتراق الوظيفي',
    'category' => 'الصحة المهنية',
    'description_ar' => 'يهدف هذا المقياس إلى قياس مستوى الاحتراق الوظيفي لديك.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'الإرهاق الانفعالي والنفسي',
        'max_score' => 14,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أشعر باستنزاف طاقتي بسبب العمل',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أبدأ يوم العمل وأنا أشعر بالتعب',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أجد صعوبة في استعادة نشاطي بعد انتهاء العمل',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أشعر بضغوط مستمرة مرتبطة بمهام العمل',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أشعر بالإرهاق عند التفكير في متطلبات العمل',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أواجه صعوبة في التركيز بسبب الضغوط الوظيفية',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أشعر أن العمل يستهلك معظم طاقتي النفسية',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أعاني من التوتر المرتبط بالعمل حتى خارج أوقات الدوام',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أشعر أن متطلبات العمل تفوق قدرتي على التحمل',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أحتاج إلى وقت طويل للتعافي من ضغوط العمل',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى مرتفع من الإرهاق الانفعالي والنفسي.',
            'high_threshold' => 14,
            'low_threshold' => 10,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى منخفض من الإرهاق الانفعالي.',
            'high_threshold' => 4,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى متوسط من الإرهاق الانفعالي.',
            'high_threshold' => 9,
            'low_threshold' => 5,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'التبلد المهني وضعف الارتباط بالعمل',
        'max_score' => 14,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أصبحت أقل حماسًا تجاه عملي مقارنة بالسابق',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أؤدي مهامي بشكل آلي دون اهتمام كافٍ',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشعر بفتور تجاه زملائي أو المستفيدين من خدماتي',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أصبحت أقل اهتمامًا بنتائج عملي',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أشعر بأن العمل مجرد واجب ثقيل',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أتجنب الانخراط في الأنشطة المهنية الإضافية',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أشعر بانخفاض انتمائي للمؤسسة',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أصبحت أقل اهتمامًا بتطوير أدائي المهني',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أفتقد الشعور بالمتعة أثناء أداء العمل',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أشعر برغبة متكررة في الابتعاد عن بيئة العمل',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى مرتفع من التبلد المهني وضعف الارتباط بالعمل.',
            'high_threshold' => 14,
            'low_threshold' => 10,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى منخفض من التبلد المهني.',
            'high_threshold' => 4,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى متوسط من التبلد المهني.',
            'high_threshold' => 9,
            'low_threshold' => 5,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'انخفاض الشعور بالإنجاز والكفاءة المهنية',
        'max_score' => 12,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أشعر أن إنجازاتي المهنية أقل من المتوقع',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أشك في قدرتي على أداء عملي بكفاءة',
            'order_index' => 21,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشعر بأن جهودي لا تحقق نتائج ملموسة',
            'order_index' => 22,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أجد صعوبة في الشعور بالفخر بإنجازاتي المهنية',
            'order_index' => 23,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أشعر أن مساهمتي في العمل محدودة',
            'order_index' => 24,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'نادرًا ما أشعر بالنجاح في عملي',
            'order_index' => 25,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أشعر بأن أدائي يتراجع مع الوقت',
            'order_index' => 26,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أفتقد الشعور بالتقدم المهني',
            'order_index' => 27,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أعتقد أن قدراتي المهنية لا تُستثمر بالشكل المناسب',
            'order_index' => 28,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أشعر بأن عملي لا يحقق أهدافي المهنية',
            'order_index' => 29,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى شعور مرتفع بانخفاض الإنجاز والكفاءة المهنية.',
            'high_threshold' => 12,
            'low_threshold' => 9,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى منخفض من الشعور بانخفاض الإنجاز.',
            'high_threshold' => 4,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى متوسط من الشعور بانخفاض الإنجاز.',
            'high_threshold' => 8,
            'low_threshold' => 5,
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
        'high_threshold' => 40,
        'description_ar' => 'تشير نتيجتك إلى مستوى مرتفع من الاحتراق الوظيفي. تعاني من إرهاق عاطفي ونفسي شديد يؤثر على أدائك.',
        'programs_ar' => 'إدارة الاحتراق الوظيفي، الصحة النفسية في العمل، المرونة النفسية، إدارة الضغوط',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 13,
        'description_ar' => 'تشير نتيجتك إلى مستوى منخفض من الاحتراق الوظيفي. حافظ على هذا الوضع الإيجابي.',
        'programs_ar' => 'الوقاية من الاحتراق الوظيفي، الرفاه الوظيفي، جودة الحياة المهنية',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 14,
        'high_threshold' => 26,
        'description_ar' => 'تشير نتيجتك إلى مستوى متوسط من الاحتراق الوظيفي.',
        'programs_ar' => 'التوازن بين العمل والحياة، إدارة الضغوط، تجديد الطاقة المهنية',
      ),
    ),
  ),
  23 => 
  array (
    'title_ar' => 'مقياس السلامة والصحة المهنية',
    'category' => 'الصحة المهنية',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى وعيك بمتطلبات السلامة والصحة المهنية في بيئة عملك.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'البعد الأول: الوعي بمفاهيم السلامة والصحة المهنية',
        'max_score' => 10,
        'order_index' => 0,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أدرك أهمية تطبيق إجراءات السلامة في بيئة العمل',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أعرف المخاطر المحتملة المرتبطة بطبيعة عملي',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أفهم التعليمات الخاصة بالسلامة المهنية في المؤسسة',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أعرف إجراءات الإبلاغ عن الحوادث والإصابات',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أدرك مسؤولياتي الشخصية تجاه السلامة المهنية',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      1 => 
      array (
        'name_ar' => 'البعد الأول: بيئة العمل الآمنة',
        'max_score' => 10,
        'order_index' => 1,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'بيئة عملك آمنة ومناسبة ومتوافقة مع معايير السلامة.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'بيئة عملك تحتاج إلى تحسينات في معايير السلامة.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'بيئة عملك في مستوى متوسط من الأمان.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'البعد الثاني: الالتزام بإجراءات السلامة',
        'max_score' => 10,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'ألتزم باستخدام معدات الوقاية الشخصية عند الحاجة',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أطبق تعليمات السلامة أثناء أداء العمل',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتجنب السلوكيات التي قد تسبب حوادث مهنية',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أشارك في الأنشطة المتعلقة بالسلامة المهنية',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'ألتزم بإرشادات الطوارئ والإخلاء',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى مرتفع من الالتزام بإجراءات السلامة المهنية.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى حاجتك لتعزيز التزامك بإجراءات السلامة.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى متوسط من الالتزام بإجراءات السلامة.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'البعد الثالث: بيئة العمل الآمنة',
        'max_score' => 10,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'تتوفر في مكان العمل وسائل السلامة الأساسية',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'تتم صيانة المعدات والأجهزة بشكل دوري',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'توجد مخارج طوارئ واضحة وسهلة الوصول',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'تتوفر لوحات وإرشادات السلامة في أماكن مناسبة',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'يتم التخلص من المخلفات بطريقة آمنة',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
        ),
      ),
      4 => 
      array (
        'name_ar' => 'البعد الثالث: الوعي بالمخاطر',
        'max_score' => 10,
        'order_index' => 3,
        'questions' => 
        array (
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى مرتفع من الوعي بالمخاطر المهنية وكيفية التعامل معها.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تحتاج لتطوير وعيك بالمخاطر المهنية.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'وعيك بالمخاطر المهنية في مستوى متوسط.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      5 => 
      array (
        'name_ar' => 'البعد الرابع: الاستعداد للطوارئ وإدارة المخاطر',
        'max_score' => 10,
        'order_index' => 4,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أعرف إجراءات التعامل مع الحرائق',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أعرف كيفية استخدام أدوات الإطفاء الأولية',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشارك في تدريبات الإخلاء والطوارئ',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أستطيع التصرف بصورة مناسبة عند حدوث حادث',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أعرف الجهات المسؤولة عن إدارة الأزمات والطوارئ',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى مرتفع من الاستعداد للطوارئ وإدارة المخاطر.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى حاجتك لتعزيز استعدادك للطوارئ.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير نتيجتك إلى مستوى متوسط من الاستعداد للطوارئ.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      6 => 
      array (
        'name_ar' => 'البعد الخامس: الثقافة التنظيمية للسلامة',
        'max_score' => 10,
        'order_index' => 5,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'تشجع الإدارة العاملين على الالتزام بالسلامة المهنية',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'تتم مناقشة قضايا السلامة بشكل دوري',
            'order_index' => 21,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'يتم التعامل بجدية مع المخاطر المهنية المُبلَّغ عنها',
            'order_index' => 22,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'تتوفر برامج تدريبية منتظمة في السلامة المهنية',
            'order_index' => 23,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'يسود التعاون بين العاملين لتعزيز بيئة عمل آمنة',
            'order_index' => 24,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تعمل في بيئة تتميز بثقافة تنظيمية قوية للسلامة.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير نتيجتك إلى ضعف في الثقافة التنظيمية للسلامة.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'ثقافة السلامة في مؤسستك في مستوى متوسط.',
            'high_threshold' => 6,
            'low_threshold' => 4,
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
        'description_ar' => 'تشير نتيجتك إلى مستوى مرتفع من الوعي بالسلامة المهنية والالتزام بإجراءاتها.',
        'programs_ar' => 'قيادة ثقافة السلامة، إدارة الصحة المهنية المتقدمة، الاعتماد في السلامة المهنية',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 16,
        'description_ar' => 'تشير نتيجتك إلى حاجتك لتطوير وعيك بمتطلبات السلامة والصحة المهنية.',
        'programs_ar' => 'أساسيات السلامة والصحة المهنية، تحديد المخاطر والوقاية منها',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 17,
        'high_threshold' => 33,
        'description_ar' => 'تشير نتيجتك إلى مستوى متوسط من الوعي بالسلامة المهنية.',
        'programs_ar' => 'تطبيقات السلامة المهنية، إدارة المخاطر، أسس الصحة والسلامة',
      ),
    ),
  ),
  24 => 
  array (
    'title_ar' => 'مقياس مستوى ضغوط العمل',
    'category' => 'الصحة المهنية',
    'description_ar' => 'يهدف هذا المقياس إلى مساعدتك على التعرف إلى مستوى ضغوط العمل التي تواجهها.',
    'time_limit_min' => 15,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'العبء الوظيفي (كمية العمل)',
        'max_score' => 12,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'تتغير المسئوليات في العمل باستمرار',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'المهام الموكلة لي صعبة وغير واضحة',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أُكلَّف بتأدية عدة مهام ومسئوليات متنوعة في وقت واحد',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'عدم الحصول على وقت للراحة أثناء الدوام الرسمي',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'المهام التي يتطلب مني تأديتها تزداد تعقيدًا مع مرور الوقت',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'نقص التدريب والخبرة الكافيين لإنجاز الأعمال المطلوبة مني على الوجه الأكمل',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في ضغوط العبء الوظيفي. العمل الزائد يتطلب جهدًا متواصلًا وساعات طويلة.',
            'high_threshold' => 12,
            'low_threshold' => 9,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت ذو مستوى منخفض في ضغوط العبء الوظيفي، وكمية العمل مناسبة.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت ذو مستوى متوسط في ضغوط العبء الوظيفي، وكمية العمل مناسبة إلى حد ما.',
            'high_threshold' => 8,
            'low_threshold' => 4,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'ظروف العمل',
        'max_score' => 10,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'العمل شاق وصعب',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'ساعات العمل طويلة',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'الشعور بالملل من هذا العمل',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'المسئولية الملقاة عليّ كبيرة',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'نقص الوسائل والأدوات اللازمة لأداء المهام',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في ضغوط ظروف العمل، وتعاني من العمل الشاق وطول ساعات العمل.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت ذو مستوى منخفض في ضغوط ظروف العمل.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت ذو مستوى متوسط في ضغوط ظروف العمل.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'صراع الدور',
        'max_score' => 10,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'الأعمال التي أقوم بها بعيدة عن مجال خبراتي السابقة',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'تتدخل الإدارة العليا في أداء عملي بشكل واضح',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'هناك متطلبات متناقضة من جانب القيادة العليا في العمل',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'الشعور بأن متطلبات العمل تتعارض مع واجباتي العائلية',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'الشعور بأن المهام التي أقوم بها غير ضرورية',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في ضغوط صراع الدور، هناك متطلبات متعارضة تقع عليك.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت ذو مستوى منخفض في ضغوط صراع الدور.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت ذو مستوى متوسط في ضغوط صراع الدور.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'غموض الدور',
        'max_score' => 10,
        'order_index' => 4,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'مسئولياتي في العمل غير محددة تحديدًا واضحًا',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'القادة لا يتفهمون طبيعة عملي',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'نوع العمل المطلوب مني القيام به غير محدد بوضوح',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'الأنظمة والتعليمات غير واضحة ومتعددة',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'لا يوجد مسئول مباشر يتم الرجوع إليه عند الحاجة',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في ضغوط غموض الدور، لا تعرف بدقة ما هو متوقع منك.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت ذو مستوى منخفض في ضغوط غموض الدور.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت ذو مستوى متوسط في ضغوط غموض الدور.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      4 => 
      array (
        'name_ar' => 'التطور والترقي الوظيفي',
        'max_score' => 10,
        'order_index' => 5,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'الفرصة المناسبة للترقي في الجهة التي أعمل بها ضعيفة',
            'order_index' => 21,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'بقائي بهذه الوظيفة لا يخدم مستقبلي الوظيفي',
            'order_index' => 22,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أشعر بأنني أعمل في وظيفة غير مناسبة لي',
            'order_index' => 23,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في ضغوط التطور والترقي الوظيفي، تشعر بمحدودية فرص التقدم.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت ذو مستوى منخفض في هذا المحور، فرص التطور متاحة.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت ذو مستوى متوسط في هذا المحور.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      5 => 
      array (
        'name_ar' => 'ضغوط اقتصادية',
        'max_score' => 8,
        'order_index' => 6,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'قلة العائد المادي مقارنة بأية وظيفة أخرى',
            'order_index' => 24,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'العمل لا يوفر لي ولعائلتي التأمين الصحي المناسب',
            'order_index' => 25,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'العائد المادي لا يتناسب مع الجهد المبذول',
            'order_index' => 26,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'العائد المادي لا يتناسب مع مؤهلاتي وخبراتي',
            'order_index' => 27,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'الرواتب لا تُصرف بانتظام',
            'order_index' => 28,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'الحوافز المادية لا تكافئ المجتهد في عمله',
            'order_index' => 29,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 0,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 0,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'أنت ذو مستوى مرتفع في الضغوط الاقتصادية المرتبطة بالعمل.',
            'high_threshold' => 8,
            'low_threshold' => 6,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'أنت ذو مستوى منخفض في الضغوط الاقتصادية.',
            'high_threshold' => 2,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'أنت ذو مستوى متوسط في الضغوط الاقتصادية.',
            'high_threshold' => 5,
            'low_threshold' => 3,
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
        'low_threshold' => 46,
        'high_threshold' => 60,
        'description_ar' => 'أنت ذو مستوى مرتفع في ضغوط العمل. هذه الضغوط قد تكون السبب في معاناتك الصحية وفي الإحباط والقلق والغضب وضعف قدرتك على التركيز.',
        'programs_ar' => 'العبء الوظيفي، ظروف العمل، صراع الدور، غموض الدور، التطور والترقي الوظيفي، الضغوط الاقتصادية',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 29,
        'description_ar' => 'أنت ذو مستوى منخفض في ضغوط العمل. لا تشعر بالملل، وترتفع قدرتك على التركيز واتخاذ القرارات.',
        'programs_ar' => 'التميز في الأداء الوظيفي، التطوير المهني، القيادة الذاتية، الإبداع والابتكار، جودة الحياة الوظيفية',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 30,
        'high_threshold' => 45,
        'description_ar' => 'لديك درجة متوسطة من حجم ضغوط العمل، تشعر بالملل إلى حد ما وقدرتك على التركيز متوسطة.',
        'programs_ar' => 'العبء الوظيفي، ظروف العمل، صراع الدور، غموض الدور، التطور والترقي، الضغوط الاقتصادية',
      ),
    ),
  ),
  25 => 
  array (
    'title_ar' => 'مقياس الأنماط الإدراكية',
    'category' => 'معرفة الذات والشخصية',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على النمط التمثيلي الغالب لديك (بصري، سمعي، أو حسي) للمساعدة في تحسين أساليب التعلم والتواصل والتدريب.',
    'time_limit_min' => NULL,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'النمط البصري',
        'max_score' => 20,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أتذكر المعلومات بشكل أفضل عندما أراها مكتوبة أو مصورة.',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أفضل استخدام الرسوم البيانية والمخططات أثناء التعلم.',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أركز على مظهر الأشياء وتفاصيلها البصرية.',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أستطيع تذكر الوجوه أكثر من الأسماء.',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أحب تنظيم المعلومات في جداول أو خرائط ذهنية.',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أستخدم عبارات مثل "أرى"، "ألاحظ"، "أنظر".',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أفضل مشاهدة شرح عملي بدلاً من سماعه فقط.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أتذكر الأماكن من خلال شكلها وتصميمها.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أشعر أن الألوان تساعدني على الفهم والتذكر.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'أفضل قراءة التعليمات بنفسي قبل تنفيذ المهمة.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتائج المقياس إلى أن النمط البصري هو النمط الأكثر تفضيلاً لديك في استقبال المعلومات. أنت تميل إلى تكوين صورة ذهنية واضحة للأفكار والمواقف.',
            'high_threshold' => 20,
            'low_threshold' => 14,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'انخفاض في النمط البصري، وهو ليس الطريقة المفضلة لديك في التعلم والتواصل.',
            'high_threshold' => 6,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'مستوى متوسط في النمط البصري، تستخدمه في بعض المواقف.',
            'high_threshold' => 13,
            'low_threshold' => 7,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'النمط السمعي',
        'max_score' => 20,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أتعلم بشكل أفضل عندما أستمع إلى الشرح.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتذكر ما يقوله الآخرون بسهولة.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أفضل المناقشة والحوار لفهم الأفكار.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أستمتع بالمحاضرات والمواد الصوتية.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أكرر المعلومات بصوت مرتفع للمساعدة على حفظها.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أنتبه لنبرة الصوت وطريقة الكلام.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أتذكر أسماء الأشخاص أكثر من وجوههم.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أفضل أن يشرح لي أحد المهمة شفهياً.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أستخدم عبارات مثل "أسمع"، "أصغي"، "أقول".',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'تساعدني المناقشات الجماعية على التعلم.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتائج المقياس إلى أن النمط السمعي هو النمط الأكثر تفضيلاً لديك. أنت تميل إلى التعلم من خلال الاستماع والمناقشة والحوار.',
            'high_threshold' => 20,
            'low_threshold' => 14,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'انخفاض في النمط السمعي، وهو ليس الطريقة المفضلة لديك.',
            'high_threshold' => 6,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'مستوى متوسط في النمط السمعي، تستخدمه في بعض المواقف.',
            'high_threshold' => 13,
            'low_threshold' => 7,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'النمط الحسي',
        'max_score' => 20,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أتعلم بشكل أفضل من خلال التجربة العملية.',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أحب لمس الأشياء وتجريبها بنفسي.',
            'order_index' => 21,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتحرك كثيراً أثناء التفكير أو التعلم.',
            'order_index' => 22,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أتذكر ما قمت به أكثر مما رأيته أو سمعته.',
            'order_index' => 23,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أفضل الأنشطة التطبيقية على المحاضرات النظرية.',
            'order_index' => 24,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          5 => 
          array (
            'text_ar' => 'أستخدم عبارات مثل "أشعر"، "ألمس"، "أجرب".',
            'order_index' => 25,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          6 => 
          array (
            'text_ar' => 'أحتاج إلى ممارسة المهارة حتى أتقنها.',
            'order_index' => 26,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          7 => 
          array (
            'text_ar' => 'أشعر بالملل عند الجلوس لفترات طويلة دون نشاط.',
            'order_index' => 27,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          8 => 
          array (
            'text_ar' => 'أتعلم بسرعة عندما أشارك فعلياً في المهمة.',
            'order_index' => 28,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          9 => 
          array (
            'text_ar' => 'تساعدني النماذج والأدوات العملية على الفهم.',
            'order_index' => 29,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير نتائج المقياس إلى أن النمط الحسي هو النمط الأكثر تفضيلاً لديك. أنت تتعلم بصورة أفضل من خلال الممارسة والتجربة المباشرة.',
            'high_threshold' => 20,
            'low_threshold' => 14,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'انخفاض في النمط الحسي.',
            'high_threshold' => 6,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'مستوى متوسط في النمط الحسي.',
            'high_threshold' => 13,
            'low_threshold' => 7,
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
        'high_threshold' => 60,
        'description_ar' => 'تشير نتائجك إلى ارتفاع الدرجة الكلية على مقياس الأنماط التمثيلية، مما يدل على امتلاكك مستوى مرتفعاً من الوعي والإدراك في استخدام الحواس المختلفة لاستقبال المعلومات.',
        'programs_ar' => 'القيادة الشخصية والقيادة التحويلية، التفكير الاستراتيجي، الإبداع والابتكار، مهارات التدريب وإعداد المدربين، الذكاء العاطفي المتقدم',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 20,
        'description_ar' => 'تشير نتائجك إلى انخفاض الدرجة الكلية، مما قد يدل على أنك لا تعتمد بصورة واضحة أو ثابتة على أسلوب محدد في استقبال المعلومات.',
        'programs_ar' => 'استراتيجيات التعلم الفعال، مهارات التعلم الذاتي، تنمية مهارات التركيز والانتباه، الذكاءات المتعددة وتطبيقاتها',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 21,
        'high_threshold' => 40,
        'description_ar' => 'تشير نتائجك إلى مستوى متوسط على مقياس الأنماط التمثيلية، مما يدل على أنك تستخدم أكثر من أسلوب في استقبال المعلومات وفهمها.',
        'programs_ar' => 'مهارات التفكير الإبداعي، مهارات التفكير الناقد، استراتيجيات التعلم المتقدم، الذكاء العاطفي، مهارات الاتصال الفعال',
      ),
    ),
  ),
  26 => 
  array (
    'title_ar' => 'مقياس الاستعداد الشخصي للتعامل مع الجمهور',
    'category' => 'الكفاءة الشخصية والنجاح المهني',
    'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى استعدادك الشخصي للتعامل مع الجمهور.',
    'time_limit_min' => NULL,
    'is_active' => true,
    'dimensions' => 
    array (
      0 => 
      array (
        'name_ar' => 'المحور الأول: مهارات التواصل',
        'max_score' => 10,
        'order_index' => 1,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أشعر بالراحة عند التحدث مع أشخاص جدد',
            'order_index' => 0,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أستطيع التعبير عن أفكاري بوضوح',
            'order_index' => 1,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أستمع للآخرين باهتمام عند حديثهم معي',
            'order_index' => 2,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أتمكن من بدء الحوار مع الآخرين بسهولة',
            'order_index' => 3,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أحرص على استخدام كلمات مهذبة أثناء الحديث',
            'order_index' => 4,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك تتمتع بقدرة جيدة على التعبير عن أفكارك والاستماع للآخرين.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك قد تواجه صعوبة في التعبير عن أفكارك.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك تمتلك مهارات تواصل مقبولة.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      1 => 
      array (
        'name_ar' => 'المحور الثاني: ضبط الانفعالات',
        'max_score' => 10,
        'order_index' => 2,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستطيع التحكم في غضبي عند التعرض للاستفزاز',
            'order_index' => 5,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أتعامل بهدوء مع المواقف المزعجة.',
            'order_index' => 6,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتقبل اختلاف الآراء دون انزعاج شديد.',
            'order_index' => 7,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أستطيع التفكير بهدوء عند مواجهة مشكلة مفاجئة.',
            'order_index' => 8,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'لا أسمح لمشاعري السلبية بالتأثير على تعاملي مع الآخرين.',
            'order_index' => 9,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك غالبًا ما تحافظ على هدوئك وتوازنك الانفعالي.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك قد تتأثر انفعالياً بالمواقف الضاغطة.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك تستطيع التحكم في انفعالاتك في كثير من المواقف.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      2 => 
      array (
        'name_ar' => 'المحور الثالث: التقبل الاجتماعي والتعاطف',
        'max_score' => 10,
        'order_index' => 3,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أحاول فهم وجهة نظر الآخرين قبل الحكم عليهم.',
            'order_index' => 10,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أشعر باهتمام تجاه مشكلات الآخرين.',
            'order_index' => 11,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتعامل باحترام مع الأشخاص المختلفين عني.',
            'order_index' => 12,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أحرص على مساعدة الآخرين عندما أستطيع.',
            'order_index' => 13,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أراعي مشاعر الآخرين أثناء الحديث معهم.',
            'order_index' => 14,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك تتمتع بقدرة جيدة على فهم مشاعر الآخرين وتقدير وجهات نظرهم.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك قد تواجه صعوبة في فهم مشاعر الآخرين.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك تُظهر قدرًا مقبولًا من التعاطف مع الآخرين.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      3 => 
      array (
        'name_ar' => 'المحور الرابع: الثقة بالنفس في المواقف الاجتماعية',
        'max_score' => 10,
        'order_index' => 4,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستطيع التحدث أمام مجموعة من الأشخاص دون تردد كبير.',
            'order_index' => 15,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أثق بقدرتي على تكوين علاقات إيجابية مع الآخرين.',
            'order_index' => 16,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'لا أشعر بالارتباك الشديد عند مقابلة أشخاص لأول مرة.',
            'order_index' => 17,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أستطيع تقديم نفسي للآخرين بطريقة مناسبة.',
            'order_index' => 18,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أواجه المواقف الاجتماعية الجديدة بثقة.',
            'order_index' => 19,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك تمتلك ثقة جيدة بنفسك في المواقف الاجتماعية.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك قد تفتقر إلى الثقة الكافية في المواقف الاجتماعية.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك تمتلك مستوى متوسطًا من الثقة بالنفس.',
            'high_threshold' => 6,
            'low_threshold' => 4,
          ),
        ),
      ),
      4 => 
      array (
        'name_ar' => 'المحور الخامس: التكيف مع المواقف المختلفة',
        'max_score' => 10,
        'order_index' => 5,
        'questions' => 
        array (
          0 => 
          array (
            'text_ar' => 'أستطيع التكيف مع الشخصيات المختلفة.',
            'order_index' => 20,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          1 => 
          array (
            'text_ar' => 'أغير أسلوبي في الحديث بما يتناسب مع الموقف.',
            'order_index' => 21,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          2 => 
          array (
            'text_ar' => 'أتعامل مع المواقف غير المتوقعة بمرونة',
            'order_index' => 22,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          3 => 
          array (
            'text_ar' => 'أتعلم من أخطائي في التعامل مع الآخرين.',
            'order_index' => 23,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
          4 => 
          array (
            'text_ar' => 'أتقبل الملاحظات التي تساعدني على تحسين سلوكي.',
            'order_index' => 24,
            'options' => 
            array (
              0 => 
              array (
                'label_ar' => 'نعم',
                'score_value' => 2,
                'order_index' => 0,
              ),
              1 => 
              array (
                'label_ar' => 'إلى حد ما',
                'score_value' => 1,
                'order_index' => 1,
              ),
              2 => 
              array (
                'label_ar' => 'لا',
                'score_value' => 0,
                'order_index' => 2,
              ),
            ),
          ),
        ),
        'interpretations' => 
        array (
          0 => 
          array (
            'level' => 'high',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك تمتلك قدرة جيدة على التكيف مع المواقف المختلفة.',
            'high_threshold' => 10,
            'low_threshold' => 7,
          ),
          1 => 
          array (
            'level' => 'low',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك قد تجد صعوبة في التكيف مع المواقف غير المتوقعة.',
            'high_threshold' => 3,
            'low_threshold' => 0,
          ),
          2 => 
          array (
            'level' => 'medium',
            'interpretation_text_ar' => 'تشير هذه النتيجة إلى أنك تستطيع التكيف بدرجة مقبولة.',
            'high_threshold' => 6,
            'low_threshold' => 4,
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
        'description_ar' => 'تشير هذه النتيجة إلى أنك تمتلك استعداداً جيداً للتعامل مع الجمهور، وأن لديك مجموعة من السمات والمهارات التي تساعدك على بناء علاقات إيجابية.',
        'programs_ar' => 'القيادة والتأثير، التفاوض وإدارة النزاعات، خدمة العملاء الاحترافية، مهارات العرض والتقديم، إدارة فرق العمل',
      ),
      1 => 
      array (
        'level' => 'low',
        'low_threshold' => 0,
        'high_threshold' => 16,
        'description_ar' => 'تشير هذه النتيجة إلى أن التعامل المباشر مع الجمهور قد يشكل تحدياً بالنسبة لك في الوقت الحالي.',
        'programs_ar' => 'مهارات التواصل الفعال، بناء الثقة بالنفس، الذكاء العاطفي وإدارة الانفعالات، خدمة العملاء للمبتدئين',
      ),
      2 => 
      array (
        'level' => 'medium',
        'low_threshold' => 17,
        'high_threshold' => 33,
        'description_ar' => 'تشير هذه النتيجة إلى أنك تمتلك أساساً جيداً للتعامل مع الجمهور، وتستطيع التفاعل مع الآخرين في كثير من المواقف بصورة مقبولة.',
        'programs_ar' => 'مهارات الاتصال المتقدمة، التعامل مع الشخصيات المختلفة، إدارة الضغوط والمواقف الصعبة، مهارات الإقناع والتأثير',
      ),
    ),
  ),
);

        foreach ($data as $assData) {
            $assessment = Assessment::create([
                'title_ar' => $assData['title_ar'],
                'category' => $assData['category'],
                'description_ar' => $assData['description_ar'],
                'time_limit_min' => $assData['time_limit_min'],
                'is_active' => $assData['is_active'],
                'created_by' => \App\Models\User::first()->id
            ]);

            foreach ($assData['dimensions'] as $dimData) {
                $dimension = Dimension::create([
                    'assessment_id' => $assessment->id,
                    'name_ar' => $dimData['name_ar'],
                    'max_score' => $dimData['max_score'],
                    'order_index' => $dimData['order_index'],
                ]);

                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    foreach ($qData['options'] as $optData) {
                        AnswerOption::create([
                            'question_id' => $question->id,
                            'label_ar' => $optData['label_ar'],
                            'score_value' => $optData['score_value'],
                            'order_index' => $optData['order_index'],
                        ]);
                    }
                }

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

            foreach ($assData['questions'] as $qData) {
                $question = Question::create([
                    'assessment_id' => $assessment->id,
                    'dimension_id' => null,
                    'text_ar' => $qData['text_ar'],
                    'order_index' => $qData['order_index'],
                ]);

                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }

            foreach ($assData['recommendations'] as $recData) {
                Recommendation::create([
                    'assessment_id' => $assessment->id,
                    'level' => $recData['level'],
                    'low_threshold' => $recData['low_threshold'],
                    'high_threshold' => $recData['high_threshold'],
                    'description_ar' => $recData['description_ar'],
                    'programs_ar' => $recData['programs_ar'],
                ]);
            }
        }
    }
}