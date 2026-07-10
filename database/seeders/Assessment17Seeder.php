<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment17Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'هل تحب العمل في فريق؟',
  'category' => 'مقاييس الاتصال والعلاقات المهنية',
  'description_ar' => 'يهدف هذا المقياس إلى مساعدتك في التعرف على مدى ميلك للعمل ضمن فريق، وفهم نقاط القوة والجوانب التي يمكن تطويرها في مهارات التعاون والتواصل مع الآخرين. وستساعدك نتائج المقياس على تحديد البرامج والأنشطة التطويرية المناسبة لتعزيز قدراتك الشخصية والاجتماعية وتحقيق أداء أفضل في بيئات العمل والتعلم الجماعي.',
  'programs_ar' => 'القيادة التشاركية، إدارة فرق العمل عالية الأداء، التواصل الفعال والتأثير، إدارة الصراعات وحل المشكلات الجماعي، مهارات التعاون الفعال في فرق العمل، التواصل الفعال داخل الفريق، حل المشكلات واتخاذ القرار الجماعي، إدارة الخلافات في بيئة العمل',
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
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أفضل التعاون مع زملائي بدلًا من العمل بمفردي.',
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
          'text_ar' => 'أشارك أفكاري وآرائي مع أعضاء الفريق.',
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
          'text_ar' => 'أستمع لآراء الآخرين وأحترم وجهات نظرهم.',
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
          'text_ar' => 'أشعر بالراحة عند توزيع المهام بين أعضاء الفريق.',
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
          'text_ar' => 'أساعد زملائي عندما يحتاجون إلى الدعم.',
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
          'text_ar' => 'أتحمل المسؤولية تجاه نجاح الفريق.',
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
          'text_ar' => 'أستمتع بحل المشكلات بشكل جماعي.',
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
          'text_ar' => 'أتقبل النقد البنّاء من أعضاء الفريق.',
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
          'text_ar' => 'أفضل الأنشطة الجماعية على الأنشطة الفردية.',
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
      'high_threshold' => 999,
      'description_ar' => 'تشير نتيجتك إلى أنك تتمتع باتجاه إيجابي قوي نحو العمل ضمن فريق، وتستمتع بالتعاون مع الآخرين لتحقيق الأهداف المشتركة. شعارك هو «يد الله مع الجماعة»، وتجد نفسك في العمل الجماعي. فقيمة التعاون لديك ليست اتجاهًا فقط، بل سلوكًا تمارسه فعليًا. كما تتصف بالقدرة على التواصل الفعال، وتبادل الأفكار، واحترام آراء الآخرين، وتحمل المسؤولية الجماعية، مما يجعلك عضوًا فاعلًا ومؤثرًا في فرق العمل المختلفة.',
    ),
    1 =>
    array (
      'level' => 'medium',
      'low_threshold' => 7,
      'high_threshold' => 13,
      'description_ar' => 'تشير نتيجتك إلى أن لديك اتجاهًا معتدلًا نحو العمل الجماعي؛ فأنت تتقبل التعاون مع الآخرين في بعض المواقف، لكنك قد تفضل العمل الفردي في مواقف أخرى. تمتلك بعض مهارات العمل ضمن فريق، إلا أنك تحتاج إلى مزيد من الممارسة والثقة في تبادل الأفكار وتحمل المسؤوليات المشتركة. أنت تمتلك أساسيات العمل الجماعي، لكنك تحتاج إلى تعزيز فاعليتك وتأثيرك داخل الفريق.',
    ),
    2 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 6,
      'description_ar' => 'تشير نتيجتك إلى أنك تميل إلى العمل الفردي أكثر من العمل الجماعي، وقد تشعر بعدم الارتياح عند التعاون مع الآخرين أو المشاركة في الأنشطة المشتركة. كما قد تفضل الاعتماد على نفسك في إنجاز المهام واتخاذ القرارات. أنت بحاجة إلى تنمية مهارات التواصل والتعاون والتفاعل مع الآخرين لتعزيز قدرتك على العمل ضمن فريق.

ننصحك بألا تحوّل نفسك إلى جزيرة معزولة، فالعمل في فريق أصبح ضرورة ليس لاستمرار المنظمة التي تعمل بها في السوق فقط، بل لاستمرارك في منصبك أو عملك أيضًا. كذلك العمل في فريق ينقذك من كثير من الأخطاء، لأن هناك أكثر من عقل يفكر ويخطط وينفذ. عليك أن تثق في نفسك بأنك قادر على العمل مع الآخرين بشكل جماعي. أخيرًا، شاهد مباريات الألعاب الجماعية وستجد أن الفريق الفائز غالبًا هو الذي تعاون لاعبوه معًا.',
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