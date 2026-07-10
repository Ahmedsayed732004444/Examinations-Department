<?php
$mdFile = "C:\\Users\\AIO\\Downloads\\combined_fixed_clean_final.md";
$content = file_get_contents($mdFile);
$lines = explode("\n", $content);

$mdAssessments = [];
foreach ($lines as $line) {
    $trimLine = trim($line);
    if (preg_match('/^#\s+(.+)$/', $trimLine)) {
        if (!preg_match('/^##/', $trimLine)) {
            $mdAssessments[] = $trimLine;
        }
    }
}
echo "Assessments Count: " . count($mdAssessments) . "\n";
print_r($mdAssessments);
