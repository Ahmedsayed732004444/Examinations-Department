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
    // Default to 30 minutes if not set
    $timeLimitMinutes = $session->gradedExam->time_limit_min ?? 30;
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
        <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
            <h1 class="fw-bold text-dark m-0" style="font-size: 0.95rem; line-height: 1.4;">
                {{ $session->gradedExam->title_ar }}
            </h1>
            <button type="button" class="btn btn-sm btn-danger fw-bold ms-2 trigger-submit shadow-sm" style="white-space: nowrap; font-size: 0.85rem;"><i class="bi bi-check2-all me-1"></i> إنهاء الاختبار</button>
        </div>
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
        <!-- Main Form Area -->
        <div class="col-lg-10 mx-auto col-md-12 mb-4">
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
                        
                        <div class="mt-4 pt-3 border-top text-end">
                            <div class="form-check form-switch d-inline-block">
                                <input class="form-check-input flag-toggle shadow-sm" type="checkbox" id="flag_{{ $index }}" style="width: 40px; height: 20px; cursor: pointer;">
                                <label class="form-check-label text-warning fw-bold ms-2" for="flag_{{ $index }}" style="cursor: pointer; padding-right: 10px;">
                                    <i class="bi bi-flag-fill"></i> تعليم السؤال لمراجعته لاحقاً
                                </label>
                            </div>
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

                    <button type="button" id="btn-submit" class="btn btn-success px-5 py-2 trigger-submit" style="display: none;">
                        إنهاء الاختبار <i class="bi bi-check-circle ms-1"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Review Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title fw-bold text-dark" id="reviewModalLabel">مراجعة الأسئلة</h5>
        <button type="button" class="btn-close m-0 ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="reviewModalBody" style="direction: rtl; text-align: right;">
      </div>
      <div class="modal-footer bg-light justify-content-between">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">رجوع للاختبار</button>
        <button type="button" class="btn btn-danger" id="btn-force-submit">إنهاء الاختبار <i class="bi bi-check-circle"></i></button>
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

    // 2. Navigation Function
    function showQuestion(index) {
        // Update active index
        currentIndex = index;

        // Hide all, show target
        $('.question-card').removeClass('active');
        $(`.question-card[data-index="${currentIndex}"]`).addClass('active');

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

    function isCurrentAnswered(index) {
        let card = $(`.question-card[data-index="${index}"]`);
        
        // If flagged for review, allow skipping
        if (card.find('.flag-toggle').is(':checked')) {
            return true;
        }

        let isMulti = card.data('is-multi');
        let requiredCount = parseInt(card.data('required-count'), 10);
        let checkedCount = card.find('.option-input:checked').length;
        
        if (isMulti === true) {
            return (checkedCount === requiredCount); // MUST select exactly required
        }
        return (checkedCount > 0);
    }

    // Update question map buttons
    function updateQuestionMap() {
        $('.question-card').each(function() {
            let idx = $(this).data('index');
            let isFlagged = $(this).find('.flag-toggle').is(':checked');
            let checkedCount = $(this).find('.option-input:checked').length;
            
            let mapBtn = $(`.map-btn[data-index="${idx}"]`);
            
            if (isFlagged) {
                mapBtn.removeClass('btn-outline-primary btn-success text-white').addClass('btn-warning text-dark').html(`<i class="bi bi-flag-fill"></i> ${idx + 1}`);
            } else if (checkedCount > 0) {
                mapBtn.removeClass('btn-outline-primary btn-warning text-dark').addClass('btn-success text-white').text(idx + 1);
            } else {
                mapBtn.removeClass('btn-success text-white btn-warning text-dark').addClass('btn-outline-primary').text(idx + 1);
            }
        });
    }

    // Listen for option changes to immediately enforce limits
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
        updateQuestionMap();
    });

    // Listen for flag changes
    $('.flag-toggle').on('change', function() {
        updateQuestionMap();
    });

    // 4. Bind Events
    $('#btn-next').on('click', function() {
        if (!isCurrentAnswered(currentIndex)) {
            alert('يرجى اختيار إجابة للسؤال الحالي أو تعليمه للمراجعة قبل الانتقال للسؤال التالي.');
            return;
        }
        if(currentIndex < totalQuestions - 1) {
            showQuestion(currentIndex + 1);
        }
    });

    $('#btn-prev').on('click', function() {
        if(currentIndex > 0) {
            showQuestion(currentIndex - 1);
        }
    });

    $('.trigger-submit').on('click', function(e) {
        e.preventDefault();
        
        // Find incomplete or flagged questions
        let incompleteOrFlagged = [];
        $('.question-card').each(function() {
            let idx = parseInt($(this).data('index'), 10);
            let isMulti = $(this).data('is-multi');
            let requiredCount = parseInt($(this).data('required-count'), 10);
            let checkedCount = $(this).find('.option-input:checked').length;
            let isFlagged = $(this).find('.flag-toggle').is(':checked');
            
            let isAnswered = false;
            if (isMulti === true) {
                isAnswered = (checkedCount === requiredCount);
            } else {
                isAnswered = (checkedCount > 0);
            }

            if (!isAnswered || isFlagged) {
                incompleteOrFlagged.push({ index: idx, flagged: isFlagged, answered: isAnswered });
            }
        });

        if (incompleteOrFlagged.length > 0) {
            let html = '<p class="mb-3 text-muted">لديك أسئلة غير مجابة أو قمت بتحديدها للمراجعة. اضغط على رقم السؤال للعودة إليه:</p><div class="d-flex flex-wrap gap-2">';
            incompleteOrFlagged.forEach(function(item) {
                let badgeClass = item.answered ? 'btn-warning text-dark' : 'btn-danger';
                let icon = item.flagged ? '<i class="bi bi-flag-fill me-1"></i>' : '';
                html += `<button type="button" class="btn btn-sm ${badgeClass} jump-to-q" data-index="${item.index}">${icon}سؤال ${item.index + 1}</button>`;
            });
            html += '</div>';

            $('#reviewModalBody').html(html);
            var reviewModal = new bootstrap.Modal(document.getElementById('reviewModal'));
            reviewModal.show();
        } else {
            if(confirm('هل أنت متأكد من تسليم الاختبار؟')) {
                $('#exam-form').submit();
            }
        }
    });

    // Jump to question from modal
    $(document).on('click', '.jump-to-q', function() {
        let idx = parseInt($(this).data('index'), 10);
        $('#reviewModal').modal('hide');
        showQuestion(idx);
    });

    // Force submit from modal
    $('#btn-force-submit').on('click', function() {
        if(confirm('سيتم إنهاء الاختبار بالرغم من وجود أسئلة غير مجابة بالكامل. هل أنت متأكد؟')) {
            // Disable all inputs so user can't change while submitting
            $('.option-input, .flag-toggle').prop('disabled', true);
            $('#btn-force-submit').prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> جاري التسليم...');
            $('#exam-form').submit();
        }
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
