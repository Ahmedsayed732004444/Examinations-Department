<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class AssessmentsDatabaseSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data (optional, but good if we want a fresh start)
        DB::statement('PRAGMA foreign_keys=OFF;');
        Recommendation::truncate();
        DimensionInterpretation::truncate();
        AnswerOption::truncate();
        Question::truncate();
        Dimension::truncate();
        Assessment::truncate();
        DB::statement('PRAGMA foreign_keys=ON;');
        $this->call(Assessment1Seeder::class);
        $this->call(Assessment2Seeder::class);
        $this->call(Assessment3Seeder::class);
        $this->call(Assessment4Seeder::class);
        $this->call(Assessment5Seeder::class);
        $this->call(Assessment6Seeder::class);
        $this->call(Assessment7Seeder::class);
        $this->call(Assessment8Seeder::class);
        $this->call(Assessment9Seeder::class);
        $this->call(Assessment10Seeder::class);
        $this->call(Assessment11Seeder::class);
        $this->call(Assessment12Seeder::class);
        $this->call(Assessment13Seeder::class);
        $this->call(Assessment14Seeder::class);
        $this->call(Assessment15Seeder::class);
        $this->call(Assessment16Seeder::class);
        $this->call(Assessment17Seeder::class);
        $this->call(Assessment18Seeder::class);
        $this->call(Assessment19Seeder::class);
        $this->call(Assessment20Seeder::class);
        $this->call(Assessment21Seeder::class);
        $this->call(Assessment22Seeder::class);
        $this->call(Assessment23Seeder::class);
        $this->call(Assessment24Seeder::class);
        $this->call(Assessment25Seeder::class);
        $this->call(Assessment26Seeder::class);
        $this->call(Assessment27Seeder::class);
    }
}