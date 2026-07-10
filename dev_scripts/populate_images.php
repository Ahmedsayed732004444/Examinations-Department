<?php

use App\Models\Assessment;
use Illuminate\Contracts\Console\Kernel;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Kernel::class);
$kernel->bootstrap();

$images = [
    'معرفة الذات' => '1.png',
    'السمات الشخصية' => '2.png',
    'الثقة في النفس' => '3.png',
    'هل تفكر بإيجابية؟' => '4.png',
    'الذكاء العاطفي' => '5.png',
    'هل أنت قادر على النجاح في وظيفتك / مهنتك؟' => '6.png',
    'الإبداع' => '7.png',
    'استثمار الوقت' => '8.png',
    'هل تخطط؟' => '9.png',
    'مهارة اتخاذ القرار' => '10.png',
    'مهارات الاتصال' => '11.png',
    'القدرة على التفاوض والحوار وإقناع الآخرين' => '12.png',
    'هل تحب العمل في فريق؟' => '13.png',
    'اعرف نمطك القيادي' => '14.png',
    'هل لديك سمات القائد التحويلي؟' => '15.png',
    'قيّم مهارات الإدارة' => '16.png',
    'تحفيز العاملين ومكافأتهم' => '17.png',
    'التوجيه المهني' => '18.png',
    'حب العمل' => '19.png',
    'ولاؤك لعملك الحالي' => '20.png',
    'الرضا الوظيفي' => '21.png',
    'احسب مستوى ضغوط العمل لديك' => '22.png',
    'الاحتراق الوظيفي' => '23.png',
    'الإرهاق المهني' => '24.png',
    'السلامة والصحة المهنية' => '25.png',
];

foreach (Assessment::all() as $assessment) {
    $found = false;
    foreach ($images as $key => $img) {
        if (str_contains($assessment->title_ar, $key)) {
            $assessment->update(['image_url' => $img]);
            $found = true;
            break;
        }
    }
    if (! $found) {
        $assessment->update(['image_url' => '1.png']);
    }
}
echo "Done updating image URLs.\n";
