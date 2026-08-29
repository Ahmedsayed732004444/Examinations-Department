<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\GradedExam;
use App\Models\GradedExamUnit;
use App\Models\GradedExamQuestion;
use App\Models\GradedExamOption;

class GradedExamsDatabaseSeeder extends Seeder
{
    public function run()
    {
        // تفريغ الجداول قبل إعادة البذر (نفس أسلوب AssessmentsDatabaseSeeder)
        if (DB::connection()->getDriverName() === 'sqlite') {
            DB::statement('PRAGMA foreign_keys=OFF;');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }
        GradedExamOption::truncate();
        GradedExamQuestion::truncate();
        GradedExamUnit::truncate();
        GradedExam::truncate();
        if (DB::connection()->getDriverName() === 'sqlite') {
            DB::statement('PRAGMA foreign_keys=ON;');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }

        // امتحانات موضوعية إضافية تُضاف هنا مستقبلاً بنفس الطريقة:
        $this->call(GradedExamMarketingIbtaSeeder::class);
    }
}
