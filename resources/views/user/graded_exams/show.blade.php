@extends('layouts.user')
@section('title', 'إجراء الاختبار')

@push('styles')
<style>
.exam-container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 10px 5px;
}
.question-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 20px 15px;
    margin-bottom: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.03);
    border: 1px solid #f1f5f9;
    display: none;
}
@media (min-width: 768px) {
    .exam-container {
        padding: 30px 15px;
    }
    .question-card {
        padding: 35px;
        margin-bottom: 25px;
    }
}
.question-card.active {
    display: block;
    animation: fadeIn 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(15px); }
    to { opacity: 1; transform: translateY(0); }
}
.question-text {
    font-size: 1.15rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 25px;
    line-height: 1.7;
}
@media (min-width: 768px) {
    .question-text {
        font-size: 1.3rem;
    }
}
.option-label {
    display: flex;
    align-items: center;
    padding: 12px 15px;
    border: 2px solid #f1f5f9;
    border-radius: 12px;
    margin-bottom: 12px;
    cursor: pointer;
    transition: all 0.2s ease;
    font-size: 0.95rem;
    color: #475569;
    background: #ffffff;
    position: relative;
    overflow: hidden;
}
@media (min-width: 768px) {
    .option-label {
        padding: 16px 20px;
        font-size: 1rem;
    }
}
.option-label:hover {
    background: #f8fafc;
    border-color: #e2e8f0;
}
.option-input:checked + .option-label {
    border-color: #3b82f6;
    background: #eff6ff;
    color: #1e3a8a;
    font-weight: 600;
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.08);
}
.option-input:checked + .option-label::before {
    content: '\F26A'; /* bootstrap icon check-circle-fill */
    font-family: 'bootstrap-icons';
    position: absolute;
    left: 20px;
    font-size: 1.25rem;
    color: #3b82f6;
}

/* Sidebar Styles */
.sidebar-map {
    background: #ffffff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.03);
    border: 1px solid #f1f5f9;
    position: sticky;
    top: 90px;
}
.q-grid-container {
    max-height: 50vh;
    overflow-y: auto;
    padding-right: 5px;
}
.q-grid-container::-webkit-scrollbar { width: 4px; }
.q-grid-container::-webkit-scrollbar-track { background: #f8fafc; border-radius: 10px; }
.q-grid-container::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
.q-grid-container::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

.q-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(40px, 1fr));
    gap: 10px;
    margin-top: 15px;
}
@media (max-width: 576px) {
    .q-grid { grid-template-columns: repeat(auto-fill, minmax(36px, 1fr)); gap: 8px; }
}
.q-btn {
    width: 100%;
    aspect-ratio: 1;
    border-radius: 10px;
    border: 1.5px solid #e2e8f0;
    background: #f8fafc;
    color: #64748b;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
    font-size: 0.95rem;
}
.q-btn:hover {
    background: #e2e8f0;
    color: #334155;
}
.q-btn.active {
    border-color: #3b82f6;
    background: #ffffff;
    color: #3b82f6;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(59, 130, 246, 0.15);
}
.q-btn.answered {
    background: #10b981;
    border-color: #10b981;
    color: #ffffff;
}
.q-btn.skipped {
    background: #ef4444;
    border-color: #ef4444;
    color: #ffffff;
}

/* Navigation Buttons */
.nav-buttons {
    display: flex;
    gap: 12px;
    margin-top: 25px;
}
.nav-buttons .btn {
    flex: 1;
    border-radius: 12px;
    padding: 14px;
    font-weight: 700;
    font-size: 1.05rem;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
}
@media (min-width: 768px) {
    .nav-buttons {
        justify-content: space-between;
        gap: 0;
    }
    .nav-buttons .btn {
        flex: none;
        min-width: 160px;
    }
}
@keyframes pulse {
    0% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.85; transform: scale(0.98); }
    100% { opacity: 1; transform: scale(1); }
}
</style>
@endpush

@section('content')
@php
    // Default to 120 minutes if not set
    $timeLimitMinutes = $session->gradedExam->time_limit_min ?? 120;
    $timeLeftSeconds = 0;
    $hasTimer = false;
    
    if ($timeLimitMinutes) {
        $hasTimer = true;
        $startedAt = $session->started_at ?? $session->created_at;
        $endTime = $startedAt->timestamp + ($timeLimitMinutes * 60);
        $timeLeftSeconds = max(0, $endTime - now()->timestamp);
    }
@endphp

<div class="exam-container">
    <!-- Top Sticky/Visible Header with Timer (Compact for Mobile) -->
    <div class="d-flex flex-column mb-3 bg-white p-2 p-md-3 rounded-3 shadow-sm border" style="position: sticky; top: 5px; z-index: 1000;">
        <h1 class="fw-bold text-dark m-0 pb-2 mb-2 border-bottom" style="font-size: 0.95rem; line-height: 1.4;">
            {{ $session->gradedExam->title_ar }}
        </h1>
        <div class="d-flex justify-content-between align-items-center">
            <span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded-pill" style="font-size: 0.85rem;">
                <i class="bi bi-list-ol me-1"></i> {{ $session->total_questions }} سؤال
            </span>
            
            @if($hasTimer)
            <div class="d-flex align-items-center px-2 py-1 rounded-2" id="timer-container" style="background-color: #fef2f2; border: 1px solid #fecaca;">
                <i class="bi bi-stopwatch text-danger me-2" style="font-size: 0.9rem;"></i>
                <div class="fw-bold text-danger font-monospace" id="exam-timer" dir="ltr" style="font-size: 1rem; line-height: 1; padding-top: 2px;">00:00:00</div>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <!-- Sidebar / Question Map -->
        <div class="col-lg-4 col-md-12 mb-4 order-1 order-lg-2">
            <!-- Mobile Toggle Button -->
            <button class="btn btn-outline-primary d-lg-none w-100 mb-2 py-2 fw-bold rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMapCollapse" aria-expanded="false" aria-controls="sidebarMapCollapse" style="border: 2px solid #e2e8f0; color: #475569; background: #f8fafc; font-size: 0.95rem;">
                <i class="bi bi-grid-3x3-gap-fill me-2 text-primary"></i> عرض خريطة الأسئلة
            </button>

            <div class="sidebar-map collapse d-lg-block mt-2 mt-lg-0" id="sidebarMapCollapse">
                <h6 class="fw-bold mb-3 text-center d-none d-lg-block">خريطة الأسئلة</h6>

                <div class="d-flex justify-content-center gap-4 mb-3 small">
                    <div class="d-flex align-items-center gap-1"><span style="width: 14px; height: 14px; background: #22c55e; border-radius: 3px;"></span> مجاب</div>
                    <div class="d-flex align-items-center gap-1"><span style="width: 14px; height: 14px; background: #ef4444; border-radius: 3px;"></span> متروك</div>
                </div>
                <hr>
                <div class="q-grid-container">
                    <div class="q-grid" id="q-grid">
                        <!-- Buttons will be generated by JS -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Form Area -->
        <div class="col-lg-8 col-md-12 mb-4 order-2 order-lg-1">
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
        
        // Auto-close sidebar on mobile after selection
        if (window.innerWidth < 992) {
            let collapseEl = document.getElementById('sidebarMapCollapse');
            if (collapseEl && collapseEl.classList.contains('show')) {
                let bsCollapse = bootstrap.Collapse.getInstance(collapseEl);
                if (bsCollapse) {
                    bsCollapse.hide();
                } else {
                    new bootstrap.Collapse(collapseEl).hide();
                }
            }
        }
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
    // 6. Timer Logic
    const hasTimer = {{ $hasTimer ? 'true' : 'false' }};
    let timeLeft = {{ $timeLeftSeconds }};
    
    if (hasTimer) {
        function updateTimerDisplay() {
            let h = Math.floor(timeLeft / 3600);
            let m = Math.floor((timeLeft % 3600) / 60);
            let s = timeLeft % 60;
            
            let display = '';
            if (h > 0) display += String(h).padStart(2, '0') + ':';
            display += String(m).padStart(2, '0') + ':' + String(s).padStart(2, '0');
            
            $('#exam-timer').text(display);
            
            if (timeLeft <= 300) {
                // last 5 minutes, blink or make it more prominent
                $('#timer-container').removeClass('alert-danger border-opacity-25').addClass('alert-danger fw-bold').css('animation', 'pulse 1s infinite');
            }
        }
        
        updateTimerDisplay();
        
        let timerInterval = setInterval(function() {
            timeLeft--;
            if (timeLeft <= 0) {
                timeLeft = 0;
                clearInterval(timerInterval);
                updateTimerDisplay();
                alert('انتهى الوقت المخصص للاختبار! سيتم تسليم إجاباتك الآن تلقائياً.');
                
                // Disable all inputs so user can't change while submitting
                $('.option-input').prop('disabled', true);
                $('#btn-submit, #btn-next, #btn-prev').prop('disabled', true);
                
                $('#exam-form').submit();
            } else {
                updateTimerDisplay();
            }
        }, 1000);
    }
});
</script>
@endpush
