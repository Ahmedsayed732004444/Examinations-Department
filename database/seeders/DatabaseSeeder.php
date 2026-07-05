<?php

namespace Database\Seeders;

use App\Models\AnswerOption;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\DimensionInterpretation;
use App\Models\DimensionScore;
use App\Models\ExamSession;
use App\Models\Question;
use App\Models\Recommendation;
use App\Models\Result;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign keys for SQLite truncation
        DB::statement('PRAGMA foreign_keys = OFF;');

        // Truncate all tables in proper order
        DimensionScore::query()->delete();
        Result::query()->delete();
        UserAnswer::query()->delete();
        ExamSession::query()->delete();
        AnswerOption::query()->delete();
        Question::query()->delete();
        DimensionInterpretation::query()->delete();
        Dimension::query()->delete();
        Recommendation::query()->delete();
        Assessment::query()->delete();

        // Enable foreign keys
        DB::statement('PRAGMA foreign_keys = ON;');

        // Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@alroaya.sa'],
            [
                'name' => 'مدير النظام',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        // Demo User
        User::firstOrCreate(
            ['email' => 'user@alroaya.sa'],
            [
                'name' => 'محمد أحمد',
                'password' => Hash::make('password'),
                'role' => 'user',
            ]
        );

        // Include true assessments data from markdown
        $this->call(AssessmentsSeeder::class);
    }
}
