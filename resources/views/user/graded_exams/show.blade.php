@extends('layouts.user')
@section('title', 'إجراء الاختبار')

@push('styles')
<style>
.exam-container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 30px 15px;
}
.question-card {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 25px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e2e8f0;
    display: none; /* Hidden by default, JS will show the active one */
}
.question-card.active {
    display: block;
    animation: fadeIn 0.3s ease-in-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
.question-text {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1a2b56;
    margin-bottom: 25px;
    line-height: 1.6;
}
.option-label {
    display: block;
    padding: 18px 20px;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    margin-bottom: 12px;
    cursor: pointer;
    transition: all 0.2s;
    font-size: 1.05rem;
    color: #334155;
}
.option-label:hover {
    background: #f8fafc;
    border-color: #cbd5e1;
}
.option-input:checked + .option-label {
    border-color: #3b82f6;
    background: #eff6ff;
    color: #1d4ed8;
    font-weight: 600;
}

/* Sidebar Styles */
.sidebar-map {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e2e8f0;
    position: sticky;
    top: 20px;
}
.q-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(45px, 1fr));
    gap: 10px;
    margin-top: 15px;
}
.q-btn {
    width: 100%;
    aspect-ratio: 1;
    border-radius: 8px;
    border: 1px solid #cbd5e1;
    background: #f8fafc;
    color: #475569;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s;
    font-size: 0.95rem;
}
.q-btn:hover {
    background: #e2e8f0;
}
.q-btn.active {
    border: 2px solid #3b82f6;
    transform: scale(1.05);
    box-shadow: 0 0 10px rgba(59, 130, 246, 0.3);
}
.q-btn.answered {
    background: #22c55e;
    border-color: #22c55e;
    color: #fff;
}
.q-btn.skipped {
    background: #ef4444;
    border-color: #ef4444;
    color: #fff;
}

/* Navigation Buttons */
.nav-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}
</style>
@endpush

@section('content')
<div class="exam-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold" style="color: #1a2b56;">{{ $session->gradedExam->title_ar }}</h4>
        <span class="badge bg-primary fs-6 py-2 px-3">{{ $session->total_questions }} سؤال</span>
    </div>

    <div class="row flex-lg-row flex-column-reverse">
        <!-- Main Form Area -->
        <div class="col-lg-8 col-md-12 mb-4">
            <form id="exam-form" action="{{ route('user.graded_exams.answer', $session->id) }}" method="POST">
                @csrf
                
                @foreach($session->sessionQuestions as $index => $sq)
                    @php
                        $isMulti = $sq->question->is_multi_correct;
                        $correctCount = $isMulti ? $sq->question->options->filter(fn($opt) => $opt->is_correct)->count() : 1;
                    @endphp
                    <div class="question-card" data-index="{{ $index }}" data-is-multi="{{ $isMulti ? 'true' : 'false' }}" data-required-count="{{ $correctCount }}">
                        <div class="question-text">
                            <span class="text-muted me-1">{{ $index + 1 }}.</span> {{ $sq->question->text_ar }}
                            @if($isMulti && $correctCount > 1)
                                <span class="badge bg-warning text-dark ms-2" style="font-size: 0.85rem;">
                                    <i class="bi bi-info-circle me-1"></i> اختر {{ $correctCount }} إجابات
                                </span>
                            @endif
                        </div>
                        
                        <div class="options-list">
                            @foreach($sq->question->options as $opt)
                                @if($isMulti)
                                    <input type="checkbox" class="btn-check option-input" 
                                        name="answers[{{ $sq->id }}][]" value="{{ $opt->id }}" id="opt_{{ $sq->id }}_{{ $opt->id }}">
                                @else
                                    <input type="radio" class="btn-check option-input" 
                                        name="answers[{{ $sq->id }}]" value="{{ $opt->id }}" id="opt_{{ $sq->id }}_{{ $opt->id }}">
                                @endif
                                <label class="option-label" for="opt_{{ $sq->id }}_{{ $opt->id }}">
                                    {{ $opt->option_text_ar }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                
                <div class="nav-buttons">
                    <button type="button" id="btn-prev" class="btn btn-outline-secondary px-4 py-2" style="visibility: hidden;">
                        <i class="bi bi-arrow-right me-1"></i> السابق
                    </button>
                    
                    <button type="button" id="btn-next" class="btn btn-primary px-5 py-2">
                        التالي <i class="bi bi-arrow-left ms-1"></i>
                    </button>

                    <button type="button" id="btn-submit" class="btn btn-success px-5 py-2" style="display: none;">
                        إنهاء الاختبار <i class="bi bi-check-circle ms-1"></i>
                    </button>
                </div>
            </form>
        </div>

        <!-- Sidebar / Question Map -->
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="sidebar-map">
                <h6 class="fw-bold mb-3 text-center">خريطة الأسئلة</h6>
                <div class="d-flex justify-content-center gap-4 mb-3 small">
                    <div class="d-flex align-items-center gap-1"><span style="width: 14px; height: 14px; background: #22c55e; border-radius: 3px;"></span> مجاب</div>
                    <div class="d-flex align-items-center gap-1"><span style="width: 14px; height: 14px; background: #ef4444; border-radius: 3px;"></span> متروك</div>
                </div>
                <hr>
                <div class="q-grid" id="q-grid">
                    <!-- Buttons will be generated by JS -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    const totalQuestions = {{ $session->total_questions }};
    let currentIndex = 0;

    // 1. Generate Sidebar Grid
    for(let i = 0; i < totalQuestions; i++) {
        $('#q-grid').append(`<div class="q-btn" data-target="${i}">${i + 1}</div>`);
    }

    // 2. Navigation Function
    function showQuestion(index) {
        // Mark current as skipped if leaving without answer
        checkAndMarkStatus(currentIndex, true);

        // Update active index
        currentIndex = index;

        // Hide all, show target
        $('.question-card').removeClass('active');
        $(`.question-card[data-index="${currentIndex}"]`).addClass('active');

        // Update grid active state
        $('.q-btn').removeClass('active');
        $(`.q-btn[data-target="${currentIndex}"]`).addClass('active');

        // Toggle Prev button
        if(currentIndex === 0) {
            $('#btn-prev').css('visibility', 'hidden');
        } else {
            $('#btn-prev').css('visibility', 'visible');
        }

        // Toggle Next / Submit buttons
        if(currentIndex === totalQuestions - 1) {
            $('#btn-next').hide();
            $('#btn-submit').show();
        } else {
            $('#btn-next').show();
            $('#btn-submit').hide();
        }
    }

    // 3. Status Checking (Answered vs Skipped)
    function checkAndMarkStatus(index, isNavigatingAway = false) {
        let card = $(`.question-card[data-index="${index}"]`);
        let isMulti = card.data('is-multi');
        let requiredCount = parseInt(card.data('required-count'), 10);
        let checkedCount = card.find('.option-input:checked').length;
        
        let hasAnswer = false;
        if (isMulti === true) {
            hasAnswer = (checkedCount === requiredCount); // MUST select exactly required
        } else {
            hasAnswer = (checkedCount > 0);
        }

        let btn = $(`.q-btn[data-target="${index}"]`);

        if (hasAnswer) {
            btn.addClass('answered').removeClass('skipped');
        } else {
            btn.removeClass('answered');
            // Only mark as skipped (red) if we explicitly navigated away or hit next/prev
            if(isNavigatingAway) {
                btn.addClass('skipped');
            }
        }
    }

    // Listen for option changes to immediately mark green and enforce limits
    $('.option-input').on('change', function() {
        let card = $(this).closest('.question-card');
        let isMulti = card.data('is-multi');
        let requiredCount = parseInt(card.data('required-count'), 10);
        
        if (isMulti === true) {
            let checkedInputs = card.find('.option-input:checked');
            if (checkedInputs.length > requiredCount) {
                $(this).prop('checked', false); // Revert the check
                alert(`هذا السؤال يتطلب اختيار ${requiredCount} إجابات فقط.`);
                return; // Stop execution
            }
        }
        
        let cardIndex = card.data('index');
        checkAndMarkStatus(cardIndex);
    });

    // 4. Bind Events
    $('#btn-next').on('click', function() {
        if(currentIndex < totalQuestions - 1) {
            showQuestion(currentIndex + 1);
        }
    });

    $('#btn-prev').on('click', function() {
        if(currentIndex > 0) {
            showQuestion(currentIndex - 1);
        }
    });

    $('.q-btn').on('click', function() {
        let target = $(this).data('target');
        showQuestion(target);
    });

    $('#btn-submit').on('click', function(e) {
        e.preventDefault();
        // Mark final question status
        checkAndMarkStatus(currentIndex, true);
        
        let unanswered = $('.q-btn.skipped:not(.answered)').length;
        if(unanswered > 0) {
            if(!confirm(`يوجد لديك ${unanswered} سؤال بدون إجابة (باللون الأحمر). هل أنت متأكد من تسليم الاختبار؟`)) {
                return;
            }
        }
        $('#exam-form').submit();
    });

    // 5. Initialize First Question
    showQuestion(0);
    // Explicitly remove skipped class from the first one on load since they haven't skipped it yet
    $(`.q-btn[data-target="0"]`).removeClass('skipped');
});
</script>
@endpush
