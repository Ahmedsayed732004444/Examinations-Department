<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class Assessment12Seeder extends Seeder
{
    public function run()
    {
        $assData = array (
  'title_ar' => 'هل أنت قادر على النجاح في وظيفتك / مهنتك؟',
  'category' => 'الكفاءة الشخصية والنجاح المهني',
  'description_ar' => 'يهدف هذا المقياس إلى التعرف على مستوى امتلاكك للمقومات والمهارات المرتبطة بالنجاح في الوظيفة، من خلال استكشاف جوانب متعددة تشمل الكفاءة المهنية، والالتزام والانضباط، والعلاقات والتواصل في بيئة العمل، والدافعية نحو التطور المهني. وتساعد نتائج المقياس في تحديد مستوى قدرتك على النجاح الوظيفي والجوانب التي تتميز بها والجوانب التي يمكن تعزيزها وتطويرها.',
  'programs_ar' => 'القيادة الإدارية، التفكير الاستراتيجي، إدارة المشروعات، الابتكار في بيئة العمل، اتخاذ القرار، إدارة التغيير، الذكاء العاطفي في القيادة، التخطيط المهني المتقدم، برنامج الاستعداد للنجاح الوظيفي، برنامج بناء الثقة والكفاءة المهنية، برنامج الالتزام والانضباط الوظيفي، برنامج مهارات التواصل والعمل الجماعي، برنامج الدافعية المهنية والتطوير الذاتي، برنامج تطوير الكفاءة المهنية، برنامج إدارة الوقت والإنجاز، برنامج مهارات التواصل في بيئة العمل، برنامج التطوير الذاتي والتخطيط المهني',
  'time_limit_min' => 15,
  'is_active' => true,
  'dimensions' =>
  array (
    0 =>
    array (
      'name_ar' => 'البعد الأول: الكفاءة المهنية',
      'max_score' => 10,
      'order_index' => 0,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أمتلك المهارات اللازمة لأداء مهام عملي بكفاءة.',
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
          'text_ar' => 'أستطيع حل المشكلات التي تواجهني أثناء العمل.',
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
          'text_ar' => 'أتعلم بسرعة أي مهارات جديدة تتطلبها الوظيفة.',
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
          'text_ar' => 'أشعر بالثقة عند تنفيذ مسؤولياتي الوظيفية.',
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
          'text_ar' => 'أحقق الأهداف المطلوبة مني في العمل.',
          'order_index' => 4,
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مهارات ومعارف مهنية جيدة، وتستطيع أداء مهامك الوظيفية بكفاءة، كما أنك قادر على التعامل مع المشكلات المهنية وإيجاد الحلول المناسبة لها.',
          'high_threshold' => 999,
          'low_threshold' => 8,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مقبولًا من المهارات والخبرات المهنية التي تمكنك من أداء مهامك الأساسية، إلا أنك ما زلت بحاجة إلى تطوير بعض الجوانب المهنية لزيادة كفاءتك.',
          'high_threshold' => 7,
          'low_threshold' => 4,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تحتاج إلى تطوير بعض المهارات والمعارف المهنية المرتبطة بعملك. وقد تواجه صعوبة في التعامل مع بعض متطلبات الوظيفة أو حل المشكلات المهنية بكفاءة.',
          'high_threshold' => 3,
          'low_threshold' => 0,
        ),
      ),
    ),
    1 =>
    array (
      'name_ar' => 'البعد الثاني: الالتزام والانضباط',
      'max_score' => 10,
      'order_index' => 1,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'ألتزم بمواعيد الحضور والانصراف.',
          'order_index' => 5,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أنجز المهام المطلوبة في الوقت المحدد.',
          'order_index' => 6,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أتحمل مسؤولية أخطائي وأسعى لتصحيحها.',
          'order_index' => 7,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'ألتزم بقوانين وأنظمة جهة العمل.',
          'order_index' => 8,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أحرص على تقديم أفضل أداء ممكن باستمرار.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك شخص ملتزم ومنضبط في عملك، وتحرص على أداء واجباتك المهنية وتحمل مسؤولياتك بكفاءة، مما يسهم في تعزيز نجاحك الوظيفي.',
          'high_threshold' => 999,
          'low_threshold' => 8,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تلتزم بدرجة مقبولة بالأنظمة والتعليمات الوظيفية، وتتحمل مسؤولياتك إلى حد معقول، مع إمكانية تعزيز مستوى الانضباط والالتزام لديك.',
          'high_threshold' => 7,
          'low_threshold' => 4,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه صعوبة في الالتزام الكامل بمتطلبات العمل أو تحمل المسؤوليات الوظيفية بالشكل المطلوب، الأمر الذي قد يؤثر في مستوى أدائك المهني.',
          'high_threshold' => 3,
          'low_threshold' => 0,
        ),
      ),
    ),
    2 =>
    array (
      'name_ar' => 'البعد الثالث: العلاقات والتواصل',
      'max_score' => 10,
      'order_index' => 2,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'أستطيع التواصل بفعالية مع الزملاء.',
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
          'text_ar' => 'أتقبل النقد البناء وأستفيد منه.',
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
          'text_ar' => 'أعمل بروح الفريق عند الحاجة.',
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
          'text_ar' => 'أتعامل باحترام مع جميع من أعمل معهم.',
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
          'text_ar' => 'أستطيع التعبير عن أفكاري بوضوح في بيئة العمل.',
          'order_index' => 14,
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مهارات جيدة في التواصل والتفاعل مع الآخرين، وتستطيع بناء علاقات مهنية إيجابية والعمل بروح الفريق، مما يدعم نجاحك في بيئة العمل.',
          'high_threshold' => 999,
          'low_threshold' => 8,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك مهارات تواصل مقبولة تساعدك على بناء علاقات مهنية مناسبة، إلا أنك قد تستفيد من تطوير قدرتك على التعاون والتفاعل مع الآخرين.',
          'high_threshold' => 7,
          'low_threshold' => 4,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك قد تواجه بعض الصعوبات في التواصل مع الآخرين أو العمل ضمن فريق، الأمر الذي قد يؤثر في جودة علاقاتك المهنية.',
          'high_threshold' => 3,
          'low_threshold' => 0,
        ),
      ),
    ),
    3 =>
    array (
      'name_ar' => 'البعد الرابع: الدافعية والتطوير الذاتي',
      'max_score' => 10,
      'order_index' => 3,
      'questions' =>
      array (
        0 =>
        array (
          'text_ar' => 'لدي رغبة مستمرة في تطوير نفسي مهنيًا.',
          'order_index' => 15,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        1 =>
        array (
          'text_ar' => 'أسعى لاكتساب خبرات جديدة في مجال عملي.',
          'order_index' => 16,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        2 =>
        array (
          'text_ar' => 'أبحث عن حلول مبتكرة لتحسين الأداء.',
          'order_index' => 17,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        3 =>
        array (
          'text_ar' => 'أستمتع بالتحديات المهنية الجديدة.',
          'order_index' => 18,
          'options' =>
          array (
            0 => array ('label_ar' => 'نعم', 'score_value' => 2, 'order_index' => 0),
            1 => array ('label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1),
            2 => array ('label_ar' => 'لا', 'score_value' => 0, 'order_index' => 2),
          ),
        ),
        4 =>
        array (
          'text_ar' => 'أؤمن بقدرتي على التقدم والنجاح في عملي.',
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
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك دافعية عالية نحو النجاح والتطور المهني، وتسعى باستمرار إلى تطوير مهاراتك وقدراتك واكتساب خبرات جديدة تساعدك على التميز في عملك.',
          'high_threshold' => 999,
          'low_threshold' => 8,
        ),
        1 =>
        array (
          'level' => 'medium',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أنك تمتلك دافعية معتدلة نحو التطور المهني، وتسعى أحيانًا إلى تحسين أدائك واكتساب خبرات جديدة، مع إمكانية زيادة اهتمامك بالتعلم المستمر.',
          'high_threshold' => 7,
          'low_threshold' => 4,
        ),
        2 =>
        array (
          'level' => 'low',
          'interpretation_text_ar' => 'تشير نتيجتك إلى أن رغبتك في التعلم والتطوير المهني قد تكون محدودة نسبيًا، وقد تحتاج إلى تعزيز دافعيتك نحو اكتساب مهارات وخبرات جديدة.',
          'high_threshold' => 3,
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
      'low_threshold' => 28,
      'high_threshold' => 999,
      'description_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مرتفعًا من المقومات المرتبطة بالنجاح الوظيفي. فأنت تتمتع بقدرات ومهارات تساعدك على أداء مهامك بكفاءة، وتظهر التزامًا جيدًا تجاه عملك، وتسعى إلى تطوير نفسك باستمرار. هذه المؤشرات تعزز فرص نجاحك وتقدمك المهني.',
    ),
    1 =>
    array (
      'level' => 'low',
      'low_threshold' => 0,
      'high_threshold' => 13,
      'description_ar' => 'تشير نتيجتك إلى أنك لا تمتلك حاليًا القدر الكافي من المقومات التي تساعدك على النجاح في وظيفتك بالشكل المطلوب. قد تواجه بعض الصعوبات في أداء المهام أو الالتزام بمتطلبات العمل أو التفاعل الفعال مع الآخرين. من المفيد أن تعمل على تطوير مهاراتك المهنية وزيادة دافعيتك نحو الإنجاز والتعلم المستمر.',
    ),
    2 =>
    array (
      'level' => 'medium',
      'low_threshold' => 14,
      'high_threshold' => 27,
      'description_ar' => 'تشير نتيجتك إلى أنك تمتلك مستوى مقبولًا من المقومات اللازمة للنجاح في وظيفتك. لديك العديد من نقاط القوة التي تساعدك على أداء عملك، إلا أن هناك بعض الجوانب التي تحتاج إلى مزيد من التطوير والتحسين. إن الاستثمار في تنمية مهاراتك وخبراتك المهنية قد يسهم في رفع مستوى نجاحك الوظيفي.',
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