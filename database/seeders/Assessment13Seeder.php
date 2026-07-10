<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment13Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'مهارة اتخاذ القرار',
  'category' => 'الكفاءة الشخصية والنجاح المهني',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى مهارة اتخاذ القرار لديك من خلال مجموعة من العبارات التي تعكس مواقف وسلوكيات مرتبطة بعملية اتخاذ القرار. وستساعد نتائج المقياس في تحديد نقاط القوة والجوانب التي تحتاج إلى تطوير، بما يسهم في تحسين قدرتك على التفكير في البدائل واختيار الأنسب منها واتخاذ قرارات أكثر فاعلية في حياتك الشخصية والمهنية.',
  'programs_ar' => 'برنامج القيادة واتخاذ القرارات الاستراتيجية، برنامج إدارة الأزمات واتخاذ القرار في المواقف الطارئة، برنامج التفكير الإبداعي والابتكار في اتخاذ القرار، برنامج تحليل البيانات ودعم القرار، برنامج التفاوض وحل النزاعات واتخاذ القرارات المشتركة، برنامج القيادة التحويلية وإدارة فرق العمل، ورش عمل متقدمة في دراسة الحالات المعقدة وصنع القرار الاستراتيجي، برنامج الذكاء العاطفي ودوره في اتخاذ القرار القيادي، دورة في مهارات اتخاذ القرار الفعّال، دورة في التفكير الناقد وتحليل المشكلات، دورة في تقييم البدائل وإدارة المخاطر، دورة في التخطيط الاستراتيجي واتخاذ القرارات، دورة في إدارة الوقت ودوره في اتخاذ القرار، ورش عمل تطبيقية تعتمد على دراسة الحالات الواقعية والمحاكاة، دورة في أساسيات اتخاذ القرار وحل المشكلات، دورة في مهارات التفكير المنطقي والمنظم، دورة في جمع المعلومات وتحليلها، دورة في بناء الثقة بالنفس وتحمل المسؤولية، دورة في مهارات التواصل والاستشارة قبل اتخاذ القرار، برامج تدريبية عملية تتضمن مواقف وأنشطة تساعد على ممارسة اتخاذ القرار بصورة تدريجية',
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
        0 => array ('text_ar' => 'أحدد المشكلة بوضوح قبل اتخاذ أي قرار.', 'order_index' => 0,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 => array ('text_ar' => 'أجمع المعلومات اللازمة قبل اتخاذ القرار.', 'order_index' => 1,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 => array ('text_ar' => 'أدرس البدائل المختلفة قبل اختيار أحدها.', 'order_index' => 2,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 => array ('text_ar' => 'أقارن بين مزايا وعيوب البدائل المتاحة.', 'order_index' => 3,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 => array ('text_ar' => 'أعتمد على الحقائق والمعلومات عند اتخاذ القرار.', 'order_index' => 4,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        5 => array ('text_ar' => 'أفكر في النتائج المتوقعة قبل اتخاذ القرار.', 'order_index' => 5,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        6 => array ('text_ar' => 'أستشير الآخرين عند الحاجة قبل اتخاذ قرار مهم.', 'order_index' => 6,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        7 => array ('text_ar' => 'أتحمل مسؤولية القرارات التي أتخذها.', 'order_index' => 7,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        8 => array ('text_ar' => 'أتعلم من أخطائي السابقة عند اتخاذ قرارات جديدة.', 'order_index' => 8,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        9 => array ('text_ar' => 'أستطيع اتخاذ القرار في الوقت المناسب.', 'order_index' => 9,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        10 => array ('text_ar' => 'أختار البديل الأنسب بعد التفكير في الخيارات المتاحة.', 'order_index' => 10,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        11 => array ('text_ar' => 'أوازن بين الفوائد والمخاطر قبل اتخاذ القرار.', 'order_index' => 11,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        12 => array ('text_ar' => 'أضع أهدافي في الاعتبار عند اتخاذ قراراتي.', 'order_index' => 12,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        13 => array ('text_ar' => 'أستطيع اتخاذ قرارات مناسبة في المواقف الصعبة.', 'order_index' => 13,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        14 => array ('text_ar' => 'أشعر بالثقة عند اتخاذ القرارات المهمة.', 'order_index' => 14,
          'options' => array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
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
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 10,
      'description_ar' => 'تشير نتيجتك في مهارة اتخاذ القرار إلى أنك تواجه صعوبة في تحديد المشكلة بدقة، وجمع المعلومات المناسبة، والمفاضلة بين البدائل قبل الاختيار. وقد تميل إلى التردد أو الاعتماد على آراء الآخرين أو اتخاذ قرارات سريعة دون دراسة كافية للنتائج المتوقعة. ويظهر ذلك في ضعف التخطيط، وقلة الثقة بالقرار المتخذ، وصعوبة تحمل مسؤولية نتائجه.

ولا يعني هذا المستوى عدم القدرة على اتخاذ القرار، بل يدل على حاجتك إلى تنمية مهارات التفكير والتحليل، والتدرب على خطوات اتخاذ القرار بصورة أكثر منهجية.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 11,
      'high_threshold' => 20,
      'description_ar' => 'تشير نتيجتك في مهارة اتخاذ القرار إلى أنك تمتلك قدرة مقبولة على التعامل مع المواقف التي تتطلب اتخاذ قرارات، حيث تستطيع تحديد المشكلة وجمع بعض المعلومات المتعلقة بها ودراسة البدائل المتاحة بدرجة معقولة. كما تتمكن من اختيار البديل المناسب في العديد من المواقف، إلا أن أداءك قد يتأثر أحيانًا بالتردد أو نقص المعلومات أو ضغوط الموقف.

ويعكس هذا المستوى امتلاكك لأساس جيد في مهارة اتخاذ القرار، مع حاجتك إلى مزيد من التدريب والخبرة لتعزيز قدرتك على التحليل والتقييم واتخاذ قرارات أكثر فاعلية وثقة.',
    ),
    2 =>
    array (
      'level' => 'high',
      'low_threshold' => 21,
      'high_threshold' => 30,
      'description_ar' => 'تشير نتيجتك في مهارة اتخاذ القرار إلى المستوى المرتفع، وإلى قدرتك العالية على تحديد المشكلات وتحليلها بصورة دقيقة، وجمع المعلومات اللازمة، وتقييم البدائل المتاحة وفق أسس موضوعية ومنطقية. كما تتميز بالقدرة على اختيار البديل الأنسب في الوقت المناسب مع توقع النتائج المحتملة وتحمل مسؤولية القرار المتخذ.

ويعكس هذا المستوى ثقتك في قدراتك، وفاعليتك في التعامل مع المواقف المختلفة، وقدرتك على اتخاذ قرارات مدروسة تسهم في تحقيق الأهداف وحل المشكلات بكفاءة.',
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