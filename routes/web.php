<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamController;
use Illuminate\Support\Facades\Route;

// Auth
Route::get('/', fn () => redirect()->route('login'));
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User routes
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/exam/{assessment}/start', [ExamController::class, 'start'])->name('exam.start');
    Route::get('/exam/{session}', [ExamController::class, 'show'])->name('exam.show');
    Route::post('/exam/{session}/answer', [ExamController::class, 'answer'])->name('exam.answer');
    Route::post('/exam/{session}/previous', [ExamController::class, 'previous'])->name('exam.previous');
    Route::get('/exam/{session}/result', [ExamController::class, 'result'])->name('exam.result');
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/assessments', [Admin\AssessmentController::class, 'index'])->name('assessments.index');
    Route::post('/assessments', [Admin\AssessmentController::class, 'store'])->name('assessments.store');
    Route::put('/assessments/{assessment}', [Admin\AssessmentController::class, 'update'])->name('assessments.update');
    Route::delete('/assessments/{assessment}', [Admin\AssessmentController::class, 'destroy'])->name('assessments.destroy');
    Route::post('/assessments/{assessment}/toggle', [Admin\AssessmentController::class, 'toggle'])->name('assessments.toggle');
    Route::get('/assessments/{assessment}', [Admin\AssessmentController::class, 'show'])->name('assessments.show');
    Route::patch('/assessments/{assessment}/settings', [Admin\AssessmentController::class, 'updateSettings'])->name('assessments.settings');

    Route::get('/questions', [Admin\QuestionController::class, 'index'])->name('questions.index');
    Route::post('/questions', [Admin\QuestionController::class, 'store'])->name('questions.store');
    Route::post('/questions/bulk', [Admin\QuestionController::class, 'bulkStore'])->name('questions.bulk');
    Route::get('/questions/by-assessment/{assessment}', [Admin\QuestionController::class, 'byAssessment'])->name('questions.byAssessment');
    Route::post('/assessments/{assessment}/questions/import-csv', [Admin\QuestionController::class, 'importCsv'])->name('questions.importCsv');
    Route::get('/questions/template', [Admin\QuestionController::class, 'downloadTemplate'])->name('questions.template');

    // Admin UX Improvements Routes
    Route::patch('/questions/reorder', [Admin\QuestionController::class, 'reorder'])->name('questions.reorder');
    Route::patch('/questions/bulk-dimension', [Admin\QuestionController::class, 'bulkAssignDimension'])->name('questions.bulkAssignDimension');
    Route::delete('/questions/bulk-delete', [Admin\QuestionController::class, 'bulkDelete'])->name('questions.bulkDelete');
    Route::patch('/questions/{question}/dimension', [Admin\QuestionController::class, 'assignDimension'])->name('questions.assignDimension');
    Route::patch('/questions/{question}', [Admin\QuestionController::class, 'update'])->name('questions.update');
    Route::delete('/questions/{question}', [Admin\QuestionController::class, 'destroy'])->name('questions.destroy');

    Route::get('/exams/create', [Admin\ExamController::class, 'create'])->name('exams.create');
    Route::post('/exams', [Admin\ExamController::class, 'store'])->name('exams.store');

    Route::get('/dimensions/by-assessment/{assessment}', [Admin\DimensionController::class, 'byAssessment'])->name('dimensions.byAssessment');
    Route::patch('/dimensions/reorder', [Admin\DimensionController::class, 'reorder'])->name('dimensions.reorder');
    Route::post('/assessments/{assessment}/dimensions', [Admin\DimensionController::class, 'store'])->name('dimensions.store');
    Route::patch('/dimensions/{dimension}', [Admin\DimensionController::class, 'update'])->name('dimensions.update');
    Route::delete('/dimensions/{dimension}', [Admin\DimensionController::class, 'destroy'])->name('dimensions.destroy');
    Route::post('/dimensions/{dimension}/interpretations', [Admin\DimensionController::class, 'storeInterpretations'])->name('dimensions.interpretations.store');

    Route::get('/recommendations', [Admin\RecommendationController::class, 'index'])->name('recommendations.index');
    Route::post('/recommendations', [Admin\RecommendationController::class, 'store'])->name('recommendations.store');
    Route::delete('/recommendations/{recommendation}', [Admin\RecommendationController::class, 'destroy'])->name('recommendations.destroy');

    Route::get('/statistics', [Admin\StatisticsController::class, 'index'])->name('statistics.index');
    Route::get('/statistics/data', [Admin\StatisticsController::class, 'data'])->name('statistics.data');
    Route::get('/statistics/export-csv', [Admin\StatisticsController::class, 'exportCsv'])->name('statistics.exportCsv');

    Route::resource('coupons', Admin\CouponController::class)->except(['show']);

    Route::get('/users', [Admin\UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}/results', [Admin\UserController::class, 'userResults'])->name('users.results');
});
