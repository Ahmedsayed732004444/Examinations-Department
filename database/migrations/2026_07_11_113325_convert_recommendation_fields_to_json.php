<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $recommendations = DB::table('recommendations')->get();

        foreach ($recommendations as $rec) {
            $certs = [];
            if (!empty($rec->certificates_ar)) {
                $lines = array_filter(array_map('trim', explode("\n", $rec->certificates_ar)));
                foreach ($lines as $line) {
                    $certs[] = [
                        'title' => mb_substr($line, 0, 30), // Short title
                        'subtitle' => $line,
                        'icon' => 'blue-hexagon' // default
                    ];
                }
            }

            $progs = [];
            if (!empty($rec->programs_ar)) {
                $decoded = json_decode($rec->programs_ar, true);
                if (is_array($decoded)) {
                    foreach ($decoded as $p) {
                        $progs[] = [
                            'title' => $p,
                            'icon' => 'bi-journal-bookmark'
                        ];
                    }
                } else {
                    $lines = array_filter(array_map('trim', explode("\n", $rec->programs_ar)));
                    foreach ($lines as $line) {
                        $progs[] = [
                            'title' => $line,
                            'icon' => 'bi-journal-bookmark'
                        ];
                    }
                }
            }

            $plans = [];
            if (!empty($rec->plan_30_days_ar)) {
                $lines = array_filter(array_map('trim', explode("\n", $rec->plan_30_days_ar)));
                $week = 1;
                $arabicWeeks = [1 => 'الأسبوع الأول', 2 => 'الأسبوع الثاني', 3 => 'الأسبوع الثالث', 4 => 'الأسبوع الرابع'];
                foreach ($lines as $line) {
                    $plans[] = [
                        'period' => $arabicWeeks[$week] ?? "الأسبوع {$week}",
                        'title' => $line,
                        'icon' => 'bi-calendar-check'
                    ];
                    $week++;
                }
            }

            DB::table('recommendations')->where('id', $rec->id)->update([
                'certificates_ar' => json_encode($certs, JSON_UNESCAPED_UNICODE),
                'programs_ar' => json_encode($progs, JSON_UNESCAPED_UNICODE),
                'plan_30_days_ar' => json_encode($plans, JSON_UNESCAPED_UNICODE),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Not reversing
    }
};
