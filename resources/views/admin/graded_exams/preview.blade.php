@extends('layouts.admin')
@section('title', 'اختبار الأسئلة - ' . $exam->title_ar)
@section('page-title', 'اختبار الأسئلة - ' . $exam->title_ar)

@section('content')
<style>
    .question-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        padding: 24px;
        margin-bottom: 24px;
        border: 1px solid #e2e8f0;
    }
    .question-header {
        display: flex;
        align-items: baseline;
        gap: 12px;
        margin-bottom: 16px;
    }
    .question-number {
        background: #e0e7ff;
        color: #4338ca;
        padding: 4px 12px;
        border-radius: 8px;
        font-weight: bold;
        font-size: 14px;
        white-space: nowrap;
    }
    .question-text {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e293b;
        margin: 0;
    }
    .options-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }
    .option-label {
        display: flex;
        align-items: center;
        padding: 12px 16px;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.2s;
        margin: 0;
    }
    .option-label:hover {
        background: #f8fafc;
        border-color: #cbd5e1;
    }
    .option-label.correct {
        background: #dcfce7;
        border-color: #22c55e;
        color: #166534;
    }
    .option-label.wrong {
        background: #fee2e2;
        border-color: #ef4444;
        color: #991b1b;
    }
    .explanation-box {
        margin-top: 16px;
        padding: 16px;
        background: #f1f5f9;
        border-right: 4px solid #3b82f6;
        border-radius: 4px;
        display: none;
    }
    .explanation-box.show {
        display: block;
    }
    .unit-badge {
        display: inline-block;
        background: #f3f4f6;
        color: #4b5563;
        font-size: 12px;
        padding: 4px 8px;
        border-radius: 4px;
        margin-bottom: 12px;
    }
</style>

<div class="mb-4">
    <a href="{{ route('admin.graded_exams.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-right me-1"></i> رجوع للامتحانات
    </a>
</div>

<div class="alert alert-info shadow-sm mb-4">
    <h5 class="alert-heading fw-bold mb-2"><i class="bi bi-info-circle me-2"></i>وضع الاختبار السريع (الآدمن)</h5>
    <p class="mb-0">
        هذه الصفحة تعرض <strong>جميع أسئلة الامتحان</strong> في صفحة واحدة لاختبارها ومراجعتها بسرعة.
        <br>
        بمجرد النقر على أي إجابة، سيظهر فوراً ما إذا كانت صحيحة أم خاطئة مع عرض التفسير.
    </p>
</div>

@php
    $globalIndex = 1;
@endphp

@foreach($exam->units as $unit)
    <h3 class="mb-4 mt-5 text-primary fw-bold" style="border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">
        {{ $unit->title_ar }}
    </h3>
    
    @foreach($unit->questions as $question)
        <div class="question-card" id="q-{{ $question->id }}">
            <div class="unit-badge">{{ $unit->title_ar }} (مستوى: {{ __("app.".$question->level) ?? $question->level }})</div>
            
            <div class="question-header">
                <span class="question-number">سؤال {{ $globalIndex++ }}</span>
                <h4 class="question-text">{{ $question->text_ar }}</h4>
            </div>

            <div class="options-list">
                @foreach($question->options as $option)
                    <label class="option-label" data-q-id="{{ $question->id }}" data-is-correct="{{ $option->is_correct ? 'true' : 'false' }}">
                        <input type="{{ $question->is_multi_correct ? 'checkbox' : 'radio' }}" 
                               name="q_{{ $question->id }}{{ $question->is_multi_correct ? '[]' : '' }}" 
                               value="{{ $option->id }}" 
                               class="form-check-input me-3 ms-0 option-input">
                        <span>{{ $option->option_text_ar }}</span>
                    </label>
                @endforeach
            </div>

            @if($question->explanation_ar)
                <div class="explanation-box" id="exp-{{ $question->id }}">
                    <strong>التفسير:</strong>
                    <div class="mt-2">{{ $question->explanation_ar }}</div>
                </div>
            @endif
        </div>
    @endforeach
@endforeach

@push('scripts')
<script>
    $(document).ready(function() {
        $('.option-input').on('change', function() {
            let qId = $(this).closest('.option-label').data('q-id');
            let isMulti = $(this).attr('type') === 'checkbox';
            
            let card = $('#q-' + qId);
            
            if (!isMulti) {
                // For radio buttons, lock the question and show result immediately
                card.find('.option-input').prop('disabled', true);
                
                // Highlight options
                card.find('.option-label').each(function() {
                    let isCorrect = $(this).data('is-correct') === true;
                    let isChecked = $(this).find('.option-input').is(':checked');
                    
                    if (isCorrect) {
                        $(this).addClass('correct');
                    } else if (isChecked && !isCorrect) {
                        $(this).addClass('wrong');
                    }
                });
                
                // Show explanation
                $('#exp-' + qId).addClass('show');
            } else {
                let label = $(this).closest('.option-label');
                let isCorrect = label.data('is-correct') === true;
                let isChecked = $(this).is(':checked');
                
                if (isChecked) {
                    if (isCorrect) {
                        label.addClass('correct');
                    } else {
                        label.addClass('wrong');
                    }
                } else {
                    label.removeClass('correct wrong');
                }
                
                $('#exp-' + qId).addClass('show');
            }
        });
    });
</script>
@endpush
@endsection
