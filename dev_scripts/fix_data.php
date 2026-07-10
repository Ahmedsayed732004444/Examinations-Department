<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Recommendation;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\DimensionInterpretation;
use Illuminate\Support\Facades\DB;

echo "=== FIXING DATA ISSUES ===\n\n";

// ─────────────────────────────────────────────
// FIX 1: مقياس السمات الشخصية - merge high2->high, medium2->medium
// ─────────────────────────────────────────────
$smat = Assessment::where('title_ar', 'مقياس السمات الشخصية')->first();
if ($smat) {
    echo "Fixing: مقياس السمات الشخصية\n";
    // Delete extra levels
    Recommendation::where('assessment_id', $smat->id)
        ->whereIn('level', ['high2', 'medium2'])->delete();
    // Fix high: should be 36-40 (top tier)
    Recommendation::where('assessment_id', $smat->id)->where('level', 'high')->update([
        'low_threshold' => 36, 'high_threshold' => 40,
        'description_ar' => 'شخصية متميزة جدًا، وتشير هذه النتيجة إلى مستوى مرتفع من النضج النفسي والاجتماعي والانفعالي. غالبًا ما تجمع بين المسؤولية، والتعاطف، والانفتاح، والقدرة على التكيف، والاستقرار النفسي.',
        'programs_ar' => 'دورة القيادة الاستراتيجية، دورة إعداد القادة، دورة الإرشاد والتوجيه المهني، دورة إدارة الأزمات، دورة الابتكار المؤسسي وصناعة المستقبل',
    ]);
    // Fix medium: 21-35
    Recommendation::where('assessment_id', $smat->id)->where('level', 'medium')->update([
        'low_threshold' => 21, 'high_threshold' => 35,
        'description_ar' => 'شخصية متوازنة وإيجابية، وتشير هذه النتيجة إلى مستوى جيد من النضج الشخصي والاجتماعي. غالبًا ما تتمتع بقدرة مناسبة على تنظيم حياتك والتعامل مع الآخرين بإيجابية.',
        'programs_ar' => 'دورة القيادة الشخصية، دورة القيادة التحويلية، دورة اتخاذ القرار، دورة التفكير الاستراتيجي',
    ]);
    // Fix low: 0-20
    Recommendation::where('assessment_id', $smat->id)->where('level', 'low')->update([
        'low_threshold' => 0, 'high_threshold' => 20,
        'description_ar' => 'شخصية بحاجة إلى تطوير العديد من الجوانب، وتشير هذه النتيجة إلى وجود صعوبات في التفاعل الاجتماعي أو التنظيم الذاتي أو التكيف مع الضغوط.',
        'programs_ar' => 'دورة الوعي بالذات وتقدير الذات، دورة بناء الثقة بالنفس، دورة إدارة الضغوط والانفعالات، دورة المهارات الاجتماعية الأساسية',
    ]);
    echo "  ✓ Fixed مقياس السمات الشخصية (now 3 levels: high 36-40, medium 21-35, low 0-20)\n";
}

// ─────────────────────────────────────────────
// FIX 2: اعرف نمطك القيادي - change levels to high/medium/low
// ─────────────────────────────────────────────
$qiadi = Assessment::where('title_ar', 'اعرف نمطك القيادي')->first();
if ($qiadi) {
    echo "\nFixing: اعرف نمطك القيادي\n";
    Recommendation::where('assessment_id', $qiadi->id)->delete();
    // This assessment is about leadership STYLE not a scored scale
    // Use high=transformational/democratic, medium=situational, low=autocratic/laissez-faire
    $recs = [
        [
            'level' => 'high',
            'low_threshold' => 8,
            'high_threshold' => 10,
            'description_ar' => 'أنت قائد ديمقراطي تشاركي تؤمن بأهمية مشاركة مرؤوسيك في اتخاذ القرارات، وترى أن النجاح يتحقق من خلال التعاون وتبادل الآراء، مما يعزز الانتماء والإبداع لدى فريقك.',
            'programs_ar' => 'القيادة الديمقراطية والتشاركية، مهارات الاتصال الفعال، الذكاء العاطفي للقادة، إدارة فرق العمل، التمكين الإداري',
        ],
        [
            'level' => 'medium',
            'low_threshold' => 5,
            'high_threshold' => 7,
            'description_ar' => 'أنت قائد موقفي متوازن، تجمع بين أساليب قيادية متعددة وفقاً لمتطلبات الموقف. تُحسن قراءة الظروف وتختار الأسلوب الأنسب سواء كان تفويضاً أو توجيهاً أو مشاركة.',
            'programs_ar' => 'القيادة الموقفية، مهارات اتخاذ القرار، التفويض والتمكين، إدارة الصراعات',
        ],
        [
            'level' => 'low',
            'low_threshold' => 0,
            'high_threshold' => 4,
            'description_ar' => 'أنت قائد أوتوقراطي تميل إلى السيطرة المباشرة على مجريات العمل، وتؤمن بأن مسؤولية اتخاذ القرارات تقع على عاتقك بشكل أساسي دون إشراك الآخرين.',
            'programs_ar' => 'الذكاء العاطفي، الاتصال والتأثير، القيادة الموقفية، التفويض والتمكين، إدارة الصراعات، بناء فرق العمل',
        ],
    ];
    foreach ($recs as $rec) {
        $rec['assessment_id'] = $qiadi->id;
        Recommendation::create($rec);
    }
    echo "  ✓ Fixed اعرف نمطك القيادي (now 3 levels with proper thresholds)\n";
}

// ─────────────────────────────────────────────
// FIX 3: Add missing recommendations for assessments without any
// ─────────────────────────────────────────────
$adminId = \App\Models\User::where('role', 'admin')->value('id');

$missingRecs = [
    'مقياس الأنماط الشخصية' => [
        'high'   => ['min'=>28,'max'=>40,'text'=>'تشير نتيجتك إلى مستوى مرتفع في الأنماط الشخصية الإيجابية. أنت تتمتع بتوازن جيد في سماتك الشخصية وقدرة عالية على التكيف والتفاعل مع الآخرين.','courses'=>'القيادة الشخصية، التواصل المتقدم، الذكاء العاطفي، إدارة فرق العمل'],
        'medium' => ['min'=>14,'max'=>27,'text'=>'تشير نتيجتك إلى مستوى متوسط في الأنماط الشخصية. لديك بعض السمات الإيجابية مع فرص للتطوير في جوانب أخرى.','courses'=>'مهارات التواصل الفعال، الذكاء العاطفي، إدارة الوقت وتحديد الأولويات'],
        'low'    => ['min'=>0,'max'=>13,'text'=>'تشير نتيجتك إلى الحاجة لتطوير بعض الأنماط الشخصية. هناك فرصة لتحسين أسلوب تعاملك مع الآخرين وزيادة مرونتك.','courses'=>'بناء الثقة بالنفس، مهارات التواصل الأساسية، الوعي الذاتي وتقدير الذات'],
    ],
    'مقياس أنماط الشخصية' => [
        'high'   => ['min'=>28,'max'=>40,'text'=>'تشير نتيجتك إلى مستوى مرتفع في التوافق الشخصي والاجتماعي. أنت تتمتع بنمط شخصية متوازن يساعدك على التفاعل الإيجابي مع البيئة من حولك.','courses'=>'القيادة الشخصية، الذكاء العاطفي المتقدم، إدارة العلاقات'],
        'medium' => ['min'=>14,'max'=>27,'text'=>'تشير نتيجتك إلى مستوى متوسط. لديك سمات شخصية إيجابية مع وجود فرص للتطوير.','courses'=>'مهارات التواصل، إدارة الانفعالات، التخطيط الشخصي'],
        'low'    => ['min'=>0,'max'=>13,'text'=>'تشير نتيجتك إلى الحاجة لتطوير بعض جوانب شخصيتك.','courses'=>'الوعي الذاتي، بناء الثقة، المهارات الاجتماعية'],
    ],
    'مقياس أنماط التفكير' => [
        'high'   => ['min'=>28,'max'=>40,'text'=>'تشير نتيجتك إلى مستوى مرتفع في التفكير المنطقي والتحليلي والإبداعي. أنت قادر على معالجة المعلومات بكفاءة وإيجاد حلول مبتكرة للمشكلات.','courses'=>'التفكير الناقد المتقدم، الإبداع والابتكار، حل المشكلات الاستراتيجي'],
        'medium' => ['min'=>14,'max'=>27,'text'=>'تشير نتيجتك إلى مستوى متوسط في أنماط التفكير. لديك قدرة مناسبة على التحليل مع فرصة لتطوير مهارات التفكير الإبداعي.','courses'=>'مهارات التفكير الناقد، التفكير الإبداعي، حل المشكلات'],
        'low'    => ['min'=>0,'max'=>13,'text'=>'تشير نتيجتك إلى حاجتك لتطوير مهارات التفكير والتحليل.','courses'=>'أساسيات التفكير المنطقي، مهارات التحليل والتقييم، التفكير الإبداعي'],
    ],
];

foreach ($missingRecs as $title => $levels) {
    $assessment = Assessment::where('title_ar', $title)->first();
    if (!$assessment) {
        // Try to create it
        $assessment = Assessment::create([
            'title_ar'     => $title,
            'description_ar' => 'مقياس ' . $title,
            'category'     => 'معرفة الذات والشخصية',
            'scoring_type' => 'overall_score',
            'is_active'    => true,
            'created_by'   => $adminId,
        ]);
        echo "\nCreated assessment: $title\n";
    }

    if ($assessment->recommendations()->count() === 0) {
        echo "\nAdding recommendations for: $title\n";
        foreach ($levels as $level => $data) {
            Recommendation::create([
                'assessment_id'  => $assessment->id,
                'level'          => $level,
                'low_threshold'  => $data['min'],
                'high_threshold' => $data['max'],
                'description_ar' => $data['text'],
                'programs_ar'    => $data['courses'],
            ]);
        }
        echo "  ✓ Added 3 recommendations\n";
    }
}

// ─────────────────────────────────────────────
// FIX 4: Fix dimensions without interpretations - add generic ones from AssessmentsSeeder
// ─────────────────────────────────────────────
echo "\n=== Adding missing dimension interpretations ===\n";
$dimsWithout = Dimension::whereDoesntHave('interpretations')
    ->where('name_ar', '!=', 'عام')
    ->with('assessment')
    ->get();

echo "Dimensions needing interpretations: " . $dimsWithout->count() . "\n";

foreach ($dimsWithout as $dim) {
    // Generic interpretations based on max_score
    $maxScore = $dim->max_score ?? 10;
    $highMin  = (int) round($maxScore * 0.67);
    $medMin   = (int) round($maxScore * 0.34);

    $interps = [
        ['level' => 'high',   'low' => $highMin,  'high' => $maxScore, 'text' => 'مستوى مرتفع في ' . $dim->name_ar . '. أنت تتمتع بكفاءة عالية في هذا البعد.'],
        ['level' => 'medium', 'low' => $medMin,   'high' => $highMin - 1, 'text' => 'مستوى متوسط في ' . $dim->name_ar . '. لديك قدرة جيدة مع فرصة للتطوير.'],
        ['level' => 'low',    'low' => 0,          'high' => $medMin - 1,  'text' => 'مستوى منخفض في ' . $dim->name_ar . '. هناك فرصة لتطوير هذا الجانب.'],
    ];

    foreach ($interps as $i) {
        DimensionInterpretation::updateOrCreate(
            ['dimension_id' => $dim->id, 'level' => $i['level']],
            [
                'interpretation_text_ar' => $i['text'],
                'high_threshold'         => $i['high'],
                'low_threshold'          => $i['low'],
            ]
        );
    }
    echo "  ✓ " . $dim->assessment->title_ar . " | " . $dim->name_ar . "\n";
}

// ─────────────────────────────────────────────
// FINAL SUMMARY
// ─────────────────────────────────────────────
echo "\n=== FINAL COUNTS ===\n";
echo "Assessments: " . Assessment::count() . "\n";
echo "Dimensions: " . Dimension::count() . "\n";
echo "DimensionInterpretations: " . DimensionInterpretation::count() . "\n";
echo "Recommendations: " . Recommendation::count() . "\n";

$nonStdLevels = Recommendation::whereNotIn('level', ['high','medium','low'])->count();
echo "Non-standard recommendation levels remaining: $nonStdLevels\n";

$dimsWithout = Dimension::whereDoesntHave('interpretations')->where('name_ar', '!=', 'عام')->count();
echo "Dimensions still without interpretations: $dimsWithout\n";

echo "\n✅ ALL FIXES APPLIED!\n";
