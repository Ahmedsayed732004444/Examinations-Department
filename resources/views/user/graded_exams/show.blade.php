@extends('layouts.user')
@section('title', 'إجراء الاختبار')

@push('styles')
<style>
.exam-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 30px 15px;
}
.question-card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    border: 1px solid #e2e8f0;
}
.question-text {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1a2b56;
    margin-bottom: 20px;
}
.option-label {
    display: block;
    padding: 15px;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    margin-bottom: 10px;
    cursor: pointer;
    transition: all 0.2s;
}
.option-label:hover {
    background: #f8fafc;
}
.option-input:checked + .option-label {
    border-color: #3b82f6;
    background: #eff6ff;
    color: #1d4ed8;
}
</style>
@endpush

@section('content')
<div class="exam-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>{{ $session->gradedExam->title_ar }}</h4>
        <span class="badge bg-primary fs-6">{{ $session->total_questions }} سؤال</span>
    </div>

    <form action="{{ route('user.graded_exams.answer', $session->id) }}" method="POST">
        @csrf
        
        @foreach($session->sessionQuestions as $index => $sq)
            <div class="question-card">
                <div class="question-text">
                    {{ $index + 1 }}. {{ $sq->question->text_ar }}
                    @if($sq->question->is_multi_correct)
                        <span class="badge bg-secondary ms-2" style="font-size: 0.7rem;">اختيار متعدد</span>
                    @endif
                </div>
                
                <div class="options-list">
                    @foreach($sq->question->options as $opt)
                        @if($sq->question->is_multi_correct)
                            <input type="checkbox" class="btn-check option-input" 
                                name="answers[{{ $sq->id }}][]" value="{{ $opt->id }}" id="opt_{{ $opt->id }}">
                        @else
                            <input type="radio" class="btn-check option-input" 
                                name="answers[{{ $sq->id }}]" value="{{ $opt->id }}" id="opt_{{ $opt->id }}">
                        @endif
                        <label class="option-label" for="opt_{{ $opt->id }}">
                            {{ $opt->option_text_ar }}
                        </label>
                    @endforeach
                </div>
            </div>
        @endforeach
        
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success btn-lg px-5">إنهاء الاختبار</button>
        </div>
    </form>
</div>
@endsection
