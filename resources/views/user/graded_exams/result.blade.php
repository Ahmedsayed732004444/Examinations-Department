@extends('layouts.user')
@section('title', 'نتيجة الاختبار')

@section('content')
<div class="container py-5 text-center">
    @php
        $result = $session->result;
        $passed = $result && $result->pass_status === 'ناجح';
    @endphp

    <i class="bi {{ $passed ? 'bi-check-circle text-success' : 'bi-x-circle text-danger' }} mb-3" style="font-size: 5rem;"></i>

    <h2 class="mb-2">{{ $passed ? 'مبروك! لقد اجتزت الاختبار' : 'للأسف لم تجتز الاختبار هذه المرة' }}</h2>
    <p class="lead mb-4">اختبار "{{ $session->gradedExam->title_ar }}"</p>

    @if($result)
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="display-4 fw-bold {{ $passed ? 'text-success' : 'text-danger' }}">
                            {{ $result->percentage }}%
                        </h1>
                        <div class="d-flex justify-content-around mt-4">
                            <div>
                                <div class="fs-4 fw-bold text-success">{{ $result->correct_count }}</div>
                                <div class="text-muted">إجابة صحيحة</div>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-danger">{{ $result->incorrect_count }}</div>
                                <div class="text-muted">إجابة خاطئة</div>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-secondary">{{ $result->total_questions }}</div>
                                <div class="text-muted">إجمالي الأسئلة</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p class="text-muted mb-4">جاري حساب النتيجة...</p>
    @endif

    <a href="{{ route('user.graded_exams.index') }}" class="btn btn-primary px-4">
        العودة للشهادات
    </a>
</div>
@endsection