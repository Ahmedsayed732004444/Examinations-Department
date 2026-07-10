<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Assessment;
use App\Models\Dimension;

// 1. Delete mistaken empty assessments
$mistakes = [
    'مقياس الأنماط الشخصية',
    'مقياس أنماط الشخصية',
    'مقياس أنماط التفكير'
];
$deletedMistakes = Assessment::whereIn('title_ar', $mistakes)->whereDoesntHave('questions')->delete();
echo "Deleted $deletedMistakes mistaken empty assessments.\n";

// 2. Map DOCX titles to OLD titles
$mapping = [
    'معرفة الذات' => 'مقياس معرفة الذات',
    'الإبداع' => 'مقياس الإبداع الإداري',
    'تحفيز العاملين ومكافأتهم' => 'تحفيز العاملين ومكافأتهم: كيف تحفز موظفيك؟'
];

foreach ($mapping as $docxTitle => $oldTitle) {
    $oldAssessment = Assessment::where('title_ar', $oldTitle)->first();
    $newAssessment = Assessment::where('title_ar', $docxTitle)->whereDoesntHave('questions')->first();
    
    if ($oldAssessment && $newAssessment) {
        // Clean up old dimensions/recommendations
        $oldAssessment->dimensions()->delete();
        $oldAssessment->recommendations()->delete();
        
        // Move new dimensions/recommendations to old assessment
        Dimension::where('assessment_id', $newAssessment->id)->update(['assessment_id' => $oldAssessment->id]);
        \App\Models\Recommendation::where('assessment_id', $newAssessment->id)->update(['assessment_id' => $oldAssessment->id]);
        
        // Update old title to match new one
        $oldAssessment->update(['title_ar' => $docxTitle]);
        
        // Delete new empty assessment
        $newAssessment->delete();
        echo "Merged '$oldTitle' into '$docxTitle'\n";
    } elseif ($oldAssessment && !$newAssessment) {
        $oldAssessment->update(['title_ar' => $docxTitle]);
        echo "Updated title of '$oldTitle' to '$docxTitle'\n";
    } else {
        echo "Could not find both for mapping '$oldTitle' -> '$docxTitle'\n";
    }
}

// 3. Any other empty assessment?
$emptyAssessments = Assessment::whereDoesntHave('questions')->get();
foreach ($emptyAssessments as $empty) {
    echo "Notice: Assessment '{$empty->title_ar}' has 0 questions (ID: {$empty->id}). Keep it as it is a new assessment from DOCX.\n";
}

echo "Done.\n";
