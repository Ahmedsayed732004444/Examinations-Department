@extends('layouts.user')
@section('title', 'الشهادات الاحترافية')

@push('styles')
<style>
.exams-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 40px 20px;
}

.page-header {
    text-align: center;
    margin-bottom: 40px;
}

.page-title {
    color: #1a2b56;
    font-weight: 800;
    font-size: 2rem;
    margin-bottom: 10px;
}

.page-subtitle {
    color: #64748b;
    font-size: 1rem;
}

.exam-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.exam-card:hover {
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    border-color: #cbd5e1;
}

.exam-info h3 {
    color: #1a2b56;
    font-weight: 700;
    font-size: 1.3rem;
    margin-bottom: 8px;
}

.exam-info p {
    color: #64748b;
    font-size: 0.95rem;
    margin-bottom: 15px;
    max-width: 600px;
}

.exam-meta {
    display: flex;
    gap: 20px;
    color: #94a3b8;
    font-size: 0.85rem;
}

.exam-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
}

.btn-start-exam {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: #ffffff;
    border: none;
    padding: 12px 25px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
}

.btn-start-exam:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
    color: #ffffff;
}
</style>
@endpush

@section('content')
<div class="exams-container">
    <div class="page-header">
        <h1 class="page-title">الشهادات الاحترافية المتوفرة</h1>
        <p class="page-subtitle">اختر الشهادة التي ترغب في التقدم لها وابدأ الاختبار الآن</p>
    </div>
    
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="exams-list">
        @forelse($exams as $exam)
            <div class="exam-card">
                <div class="exam-info">
                    <h3>{{ $exam->title_ar }}</h3>
                    <p>{{ $exam->description_ar ?: 'لا يوجد وصف متوفر.' }}</p>
                    <div class="exam-meta">
                        <span><i class="bi bi-question-circle"></i> {{ $exam->total_questions }} سؤال</span>
                        @if($exam->time_limit_min)
                            <span><i class="bi bi-clock"></i> {{ $exam->time_limit_min }} دقيقة</span>
                        @endif
                    </div>
                </div>
                <div class="exam-action">
                    <form action="{{ route('user.graded_exams.start', $exam->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-start-exam">
                            بدء الاختبار <i class="bi bi-arrow-left"></i>
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="text-center py-5">
                <i class="bi bi-journal-x text-muted mb-3" style="font-size: 3rem;"></i>
                <h4 class="text-muted">لا توجد شهادات متوفرة حالياً</h4>
            </div>
        @endforelse
    </div>
</div>
@endsection
