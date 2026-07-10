<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment1Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'اعرف نمطك القيادي',
  'category' => 'القيادة والإدارة',
  'description_ar' => 'يهدف هذا المقياس إلى مساعدتك في التعرف على نمط القيادة الذي تميل إليه عند التعامل مع الآخرين وتوجيههم نحو تحقيق الأهداف. سيساعدك على فهم أسلوبك القيادي بشكل أفضل، والتعرف على نقاط القوة التي تمتلكها والجوانب التي يمكنك تطويرها لزيادة فاعليتك في القيادة والتأثير الإيجابي.',
  'programs_ar' => 'الذكاء العاطفي، الاتصال والتأثير، القيادة الموقفية، التفويض والتمكين، إدارة الصراعات، بناء فرق العمل، اتخاذ القرار الاستراتيجي، القيادة الديمقراطية، إدارة التغيير المؤسسي، مهارات المتابعة والمساءلة، مهارات الحزم القيادي',
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
          'level' => 'الأوتوقراطية (التسلطية)',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قائد أوتوقراطي (تسلطي)، تميل إلى السيطرة المباشرة على مجريات العمل، وتؤمن بأن مسؤولية اتخاذ القرارات تقع على عاتقك بشكل أساسي. لذلك تتخذ القرارات بنفسك وتحدد المهام والإجراءات التي يجب على مرؤوسيك اتباعها، مع توقع الالتزام الكامل بتوجيهاتك وتعليماتك دون نقاش أو اعتراض. وترى أن وضوح السلطة وحسم القرارات يسهمان في تحقيق الأهداف بكفاءة وسرعة.

كما أنك تحرص على فرض النظام والانضباط داخل بيئة العمل، وتتابع أداء العاملين بشكل مستمر للتأكد من تنفيذ المهام وفق المعايير والخطط التي وضعتها. وتميل إلى توجيه مرؤوسيك بصورة مباشرة، مع تحديد الأدوار والمسؤوليات بدقة، مما يقلل من الغموض ويضمن سير العمل بالطريقة التي تراها مناسبة.

وتعتمد في قيادتك على استخدام سلطتك الرسمية لإدارة الفريق وتحقيق النتائج المطلوبة، لذلك تكون مشاركتك للعاملين في اتخاذ القرارات محدودة، حيث تفضل الاحتفاظ بالسيطرة على القرارات المهمة وعدم توزيعها بين أفراد الفريق. كما تتوقع من مرؤوسيك الالتزام بالتعليمات واحترام التسلسل الإداري والمحافظة على الانضباط في أداء أعمالهم.

ويعكس هذا الأسلوب شخصيتك الحازمة وقدرتك على اتخاذ القرارات بسرعة، خاصة في الظروف التي تتطلب استجابة فورية أو في البيئات التي تحتاج إلى درجة عالية من التنظيم والرقابة. ومع ذلك، قد يؤدي الاعتماد المفرط على السلطة المركزية إلى تقليل مشاركة العاملين في إبداء آرائهم أو تقديم أفكارهم، وقد يؤثر ذلك في مستوى المبادرة والإبداع لديهم إذا شعروا بأن دورهم يقتصر على تنفيذ الأوامر والتعليمات فقط.',
          'high_threshold' => NULL,
          'low_threshold' => NULL,
        ),
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
          'level' => 'الديمقراطية',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قائد ديمقراطي، تؤمن بأهمية مشاركة مرؤوسيك في اتخاذ القرارات، وترى أن النجاح يتحقق من خلال التعاون وتبادل الآراء بين جميع أفراد الفريق. لذلك تحرص على الاستماع إلى أفكار العاملين ومقترحاتهم قبل اتخاذ القرارات، وتمنحهم الفرصة للتعبير عن وجهات نظرهم والمساهمة في مناقشة القضايا المتعلقة بالعمل.

كما أنك تشجع العمل الجماعي وتحرص على بناء علاقات قائمة على الاحترام والثقة المتبادلة، حيث يشعر أفراد فريقك بأن آراءهم محل تقدير وأن مشاركتهم لها قيمة حقيقية في تطوير العمل وتحقيق الأهداف. ولا تعتمد على إصدار الأوامر بشكل منفرد، بل تميل إلى التشاور وجمع المعلومات من مختلف الأطراف للوصول إلى أفضل الحلول والقرارات الممكنة.

وتتميز بقدرتك على تحقيق التوازن بين الاهتمام بإنجاز المهام والاهتمام بالعاملين، إذ تسعى إلى توفير بيئة عمل إيجابية تشجع على الإبداع والمبادرة وتحمل المسؤولية. كما تحرص على توضيح الأهداف والتوقعات، وتتابع سير العمل مع تقديم الدعم والتوجيه عند الحاجة، مع المحافظة على مساحة مناسبة من الحرية والاستقلالية للعاملين.

ويعكس هذا الأسلوب إيمانك بأهمية التعاون والمشاركة في القيادة، الأمر الذي يسهم في رفع الروح المعنوية وتعزيز الانتماء والالتزام لدى أفراد الفريق. ومع ذلك، قد تستغرق عملية اتخاذ القرار وقتًا أطول بسبب كثرة المشاورات وتعدد الآراء، خاصة في المواقف التي تتطلب سرعة وحسمًا في اتخاذ القرار.',
          'high_threshold' => NULL,
          'low_threshold' => NULL,
        ),
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
          'level' => 'المتساهلة (الفوضوية وعدم التدخل)',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قائد متساهل، تميل إلى ترك مساحة واسعة من الحرية لمرؤوسيك في أداء أعمالهم واتخاذ قراراتهم، وتؤمن بأنهم قادرون على إدارة مهامهم وتحمل مسؤولياتهم دون الحاجة إلى توجيه أو إشراف مستمر منك. لذلك فإنك لا تتدخل كثيرًا في تفاصيل العمل اليومية، بل تكتفي غالبًا بتحديد الأهداف العامة وتترك لأفراد فريقك حرية اختيار الأساليب والوسائل التي يرونها مناسبة لتحقيقها.

كما أنك تميل إلى تفويض الصلاحيات والمسؤوليات بدرجة كبيرة، وتمنح مرؤوسيك ثقة عالية في قدرتهم على إنجاز الأعمال واتخاذ القرارات المناسبة. ولا تفضل استخدام سلطتك بصورة مباشرة أو فرض القيود الصارمة عليهم، بل تمنحهم استقلالية واسعة وتشجعهم على الاعتماد على أنفسهم في معالجة المشكلات ومواجهة التحديات التي قد تعترض طريقهم.

وتتصف أيضًا بقلة المتابعة والرقابة المباشرة، إذ ترى أن الإفراط في الإشراف قد يحد من إبداع العاملين ويؤثر في حريتهم. لذلك فإن تدخلك في سير العمل يكون محدودًا وغالبًا ما يقتصر على الحالات التي تستدعي ذلك.

ويعكس هذا الأسلوب ثقتك بقدرات فريقك ورغبتك في تعزيز روح المبادرة والاستقلالية لديهم، إلا أن هذا النهج قد يؤدي أحيانًا إلى ضعف التنسيق أو عدم وضوح المسؤوليات إذا لم يكن أفراد الفريق يمتلكون الخبرة الكافية أو القدرة على تنظيم أعمالهم بأنفسهم.',
          'high_threshold' => NULL,
          'low_threshold' => NULL,
        ),
      ),
    ),
  ),
  'questions' =>
  array (
  ),
  'recommendations' =>
  array (
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