@extends('layouts.user')
@section('title', 'إجراء الاختبار')

@push('styles')
<style>
:root{
    --navy: #14213d;
    --navy-soft: #1e3a5f;
    --accent: #0ea472;
    --warning: #f5a623;
    --danger: #e5484d;
    --bg: #f6f7fb;
    --surface: #ffffff;
    --border: #e6e9f0;
    --text: #1e293b;
    --text-muted: #64748b;
    --radius-lg: 18px;
    --radius-md: 14px;
    --radius-sm: 10px;
    --shadow-sm: 0 2px 10px rgba(15, 23, 42, .05);
    --shadow-md: 0 10px 28px rgba(15, 23, 42, .09);
}

body{ background: var(--bg); }

.exam-container{
    max-width: 1180px;
    margin: 0 auto;
    padding: 8px 4px 100px;
}
@media (min-width: 768px){
    .exam-container{ padding: 24px 15px 40px; }
}

/* ===== Top bar ===== */
.exam-topbar{
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-sm);
    padding: 10px 12px;
    position: sticky;
    top: 6px;
    z-index: 1000;
    margin-bottom: 14px;
}
@media (min-width: 768px){
    .exam-topbar{ padding: 14px 20px; top: 10px; margin-bottom: 20px; }
}
.exam-topbar-row1{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
    border-bottom: 1px solid var(--border);
    padding-bottom: 8px;
    margin-bottom: 8px;
}
.exam-topbar-row1 h1{
    font-size: .92rem;
    font-weight: 700;
    color: var(--navy);
    margin: 0;
    line-height: 1.4;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
@media (min-width: 768px){ .exam-topbar-row1 h1{ font-size: 1.05rem; } }

.btn-finish{
    background: var(--danger);
    color: #fff;
    border: none;
    border-radius: 999px;
    padding: 8px 14px;
    font-weight: 700;
    font-size: .82rem;
    white-space: nowrap;
    flex-shrink: 0;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.btn-finish:hover{ background: #d13c40; color: #fff; }

.exam-topbar-row2{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
}
.q-count-badge{
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(14, 164, 114, .1);
    color: var(--accent);
    padding: 6px 12px;
    border-radius: 999px;
    font-size: .82rem;
    font-weight: 700;
}
.btn-map{
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: var(--bg);
    border: 1px solid var(--border);
    color: var(--navy);
    padding: 6px 12px;
    border-radius: 999px;
    font-size: .82rem;
    font-weight: 700;
}
.timer-box{
    display: flex;
    align-items: center;
    padding: 6px 12px;
    border-radius: 999px;
    background: #fef2f2;
    border: 1px solid #fecaca;
    flex-shrink: 0;
}
.timer-box .bi{ color: var(--danger); font-size: .85rem; margin-inline-end: 6px; }
.timer-box #exam-timer{
    font-weight: 700;
    color: var(--danger);
    font-family: 'Courier New', monospace;
    font-size: .92rem;
    direction: ltr;
}
@keyframes pulse{
    0% { opacity: 1; transform: scale(1); }
    50% { opacity: .85; transform: scale(.98); }
    100% { opacity: 1; transform: scale(1); }
}

.progress-mini{
    height: 5px;
    background: var(--bg);
    border-radius: 999px;
    overflow: hidden;
    margin-top: 10px;
}
.progress-mini > div{
    height: 100%;
    background: var(--accent);
    border-radius: 999px;
    transition: width .25s ease;
    width: 0%;
}

/* ===== Question card ===== */
.question-card{
    background: var(--surface);
    border-radius: var(--radius-lg);
    padding: 18px 14px;
    margin-bottom: 14px;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border);
    display: none;
}
@media (min-width: 768px){
    .question-card{ padding: 32px; margin-bottom: 20px; }
}
.question-card.active{
    display: block;
    animation: fadeIn .35s cubic-bezier(.4,0,.2,1);
}
@keyframes fadeIn{
    from { opacity: 0; transform: translateY(12px); }
    to { opacity: 1; transform: translateY(0); }
}
.question-text{
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 20px;
    line-height: 1.7;
}
@media (min-width: 768px){ .question-text{ font-size: 1.25rem; } }

.multi-hint{
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: #fffbeb;
    color: #b45309;
    border: 1px solid #fde68a;
    font-size: .78rem;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 999px;
    margin-inline-start: 8px;
}

.option-label{
    display: flex;
    align-items: center;
    padding: 13px 15px 13px 44px;
    border: 1.5px solid var(--border);
    border-radius: var(--radius-sm);
    margin-bottom: 10px;
    cursor: pointer;
    transition: all .15s ease;
    font-size: .94rem;
    color: var(--text-muted);
    background: var(--surface);
    position: relative;
    min-height: 48px;
}
@media (min-width: 768px){
    .option-label{ padding: 16px 20px 16px 48px; font-size: 1rem; }
}
.option-label:hover{ background: var(--bg); border-color: #d6dbe6; }
.option-input:checked + .option-label{
    border-color: var(--accent);
    background: rgba(14, 164, 114, .06);
    color: var(--navy);
    font-weight: 700;
}
.option-input:checked + .option-label::before{
    content: '\F26A';
    font-family: 'bootstrap-icons';
    position: absolute;
    left: 16px;
    font-size: 1.2rem;
    color: var(--accent);
}
.option-input:focus-visible + .option-label{
    outline: 2px solid var(--accent);
    outline-offset: 2px;
}

.flag-row{
    margin-top: 18px;
    padding-top: 14px;
    border-top: 1px solid var(--border);
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 8px;
}
.flag-row input{
    width: 38px; height: 20px;
    cursor: pointer;
    accent-color: var(--warning);
}
.flag-row label{
    color: #b45309;
    font-weight: 700;
    font-size: .88rem;
    cursor: pointer;
}

/* ===== Sidebar / question navigator ===== */
.exam-sidebar{
    background: var(--surface);
    border-radius: var(--radius-lg);
    padding: 20px;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border);
    position: sticky;
    top: 100px;
}
.sidebar-title{
    font-weight: 800;
    color: var(--navy);
    font-size: .95rem;
    margin-bottom: 4px;
}
.sidebar-sub{ color: var(--text-muted); font-size: .8rem; margin-bottom: 14px; }

.q-grid-container{
    max-height: 46vh;
    overflow-y: auto;
    padding-inline-end: 4px;
}
.q-grid-container::-webkit-scrollbar{ width: 4px; }
.q-grid-container::-webkit-scrollbar-thumb{ background: var(--border); border-radius: 10px; }

.q-grid{
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(42px, 1fr));
    gap: 8px;
}
.q-btn{
    width: 100%;
    aspect-ratio: 1;
    border-radius: 10px;
    border: 1.5px solid var(--border);
    background: var(--bg);
    color: var(--text-muted);
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all .15s ease;
    font-size: .88rem;
}
.q-btn:hover{ background: var(--border); color: var(--text); }
.q-btn.current{
    border-color: var(--accent);
    background: #fff;
    color: var(--accent);
    box-shadow: 0 3px 8px rgba(14, 164, 114, .2);
}
.q-btn.answered{ background: var(--accent); border-color: var(--accent); color: #fff; }
.q-btn.flagged{ background: var(--warning); border-color: var(--warning); color: #fff; }

.q-legend{
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 16px;
    font-size: .76rem;
    color: var(--text-muted);
}
.q-legend span{ display: inline-flex; align-items: center; gap: 5px; }
.q-legend i{ width: 10px; height: 10px; border-radius: 3px; display: inline-block; }

/* Mobile offcanvas navigator */
.offcanvas.exam-offcanvas{
    border-radius: 20px 20px 0 0;
    max-height: 78vh;
}
.offcanvas.exam-offcanvas .offcanvas-header{
    border-bottom: 1px solid var(--border);
}
.offcanvas.exam-offcanvas .offcanvas-title{
    font-weight: 800;
    color: var(--navy);
    font-size: 1rem;
}

/* ===== Sticky bottom action bar (mobile-first, thumb reachable) ===== */
.nav-buttons{
    position: sticky;
    bottom: 0;
    background: var(--surface);
    border-top: 1px solid var(--border);
    padding: 12px 4px calc(12px + env(safe-area-inset-bottom));
    margin: 0 -4px;
    display: flex;
    gap: 10px;
    box-shadow: 0 -6px 18px rgba(15, 23, 42, .06);
    z-index: 900;
}
@media (min-width: 768px){
    .nav-buttons{
        position: static;
        box-shadow: none;
        border-top: none;
        background: transparent;
        margin: 20px 0 0;
        padding: 0;
        justify-content: space-between;
    }
}
.nav-buttons .btn{
    flex: 1;
    border-radius: var(--radius-sm);
    padding: 13px;
    font-weight: 700;
    font-size: .98rem;
    display: flex;
    align-items: center;
    justify-content: center;
}
@media (min-width: 768px){
    .nav-buttons .btn{ flex: none; min-width: 160px; }
}
</style>
@endpush

@section('content')
@php
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
    <!-- Top bar -->
    <div class="exam-topbar">
        <div class="exam-topbar-row1">
            <h1>{{ $session->gradedExam->title_ar }}</h1>
            <button type="button" class="btn-finish trigger-submit"><i class="bi bi-check2-all"></i> إنهاء الاختبار</button>
        </div>
        <div class="exam-topbar-row2">
            <span class="q-count-badge"><i class="bi bi-list-ol"></i> سؤال <span id="current-q-number">1</span> من {{ $session->total_questions }}</span>

            <button type="button" class="btn-map d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#examMapOffcanvas" aria-controls="examMapOffcanvas">
                <i class="bi bi-grid-3x3-gap-fill"></i> خريطة الأسئلة
            </button>

            @if($hasTimer)
            <div class="timer-box" id="timer-container">
                <i class="bi bi-stopwatch"></i>
                <div id="exam-timer">00:00:00</div>
            </div>
            @endif
        </div>
        <div class="progress-mini"><div id="progress-mini-bar"></div></div>
    </div>

    <div class="row g-3 g-lg-4">
        <!-- Main Form Area -->
        <div class="col-lg-8">
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
                                <span class="multi-hint"><i class="bi bi-info-circle"></i> اختر {{ $correctCount }} إجابات</span>
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

                        <div class="flag-row">
                            <input class="flag-toggle" type="checkbox" id="flag_{{ $index }}">
                            <label for="flag_{{ $index }}"><i class="bi bi-flag-fill"></i> تعليم السؤال لمراجعته لاحقاً</label>
                        </div>
                    </div>
                @endforeach

                <div class="nav-buttons">
                    <button type="button" id="btn-prev" class="btn btn-outline-secondary" style="visibility: hidden;">
                        <i class="bi bi-arrow-right me-1"></i> السابق
                    </button>

                    <button type="button" id="btn-next" class="btn btn-primary">
                        التالي <i class="bi bi-arrow-left ms-1"></i>
                    </button>

                    <button type="button" id="btn-submit" class="btn btn-success trigger-submit" style="display: none;">
                        إنهاء الاختبار <i class="bi bi-check-circle ms-1"></i>
                    </button>
                </div>
            </form>
        </div>

        <!-- Desktop sidebar navigator -->
        <div class="col-lg-4 d-none d-lg-block">
            <div class="exam-sidebar">
                <div class="sidebar-title">خريطة الأسئلة</div>
                <div class="sidebar-sub">اضغط على أي رقم للانتقال مباشرة إلى السؤال</div>
                <div class="q-grid-container">
                    <div class="q-grid">
                        @for($i = 0; $i < $session->total_questions; $i++)
                            <button type="button" class="q-btn" data-index="{{ $i }}">{{ $i + 1 }}</button>
                        @endfor
                    </div>
                </div>
                <div class="q-legend">
                    <span><i style="background: var(--accent);"></i> تمت الإجابة</span>
                    <span><i style="background: var(--warning);"></i> معلّم للمراجعة</span>
                    <span><i style="background: var(--border);"></i> لم تتم الإجابة</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile question navigator (bottom sheet) -->
<div class="offcanvas offcanvas-bottom exam-offcanvas" tabindex="-1" id="examMapOffcanvas" aria-labelledby="examMapOffcanvasLabel" style="direction: rtl; text-align: right;">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="examMapOffcanvasLabel">خريطة الأسئلة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="إغلاق"></button>
    </div>
    <div class="offcanvas-body">
        <div class="sidebar-sub mb-2">اضغط على أي رقم للانتقال مباشرة إلى السؤال</div>
        <div class="q-grid-container" style="max-height: 50vh;">
            <div class="q-grid">
                @for($i = 0; $i < $session->total_questions; $i++)
                    <button type="button" class="q-btn" data-index="{{ $i }}">{{ $i + 1 }}</button>
                @endfor
            </div>
        </div>
        <div class="q-legend">
            <span><i style="background: var(--accent);"></i> تمت الإجابة</span>
            <span><i style="background: var(--warning);"></i> معلّم للمراجعة</span>
            <span><i style="background: var(--border);"></i> لم تتم الإجابة</span>
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

    function showQuestion(index) {
        currentIndex = index;

        $('.question-card').removeClass('active');
        $(`.question-card[data-index="${currentIndex}"]`).addClass('active');

        $('#current-q-number').text(currentIndex + 1);

        if (currentIndex === 0) {
            $('#btn-prev').css('visibility', 'hidden');
        } else {
            $('#btn-prev').css('visibility', 'visible');
        }

        if (currentIndex === totalQuestions - 1) {
            $('#btn-next').hide();
            $('#btn-submit').show();
        } else {
            $('#btn-next').show();
            $('#btn-submit').hide();
        }

        updateQuestionMap();

        var offcanvasEl = document.getElementById('examMapOffcanvas');
        var offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasEl);
        if (offcanvasInstance) offcanvasInstance.hide();
    }

    function isCurrentAnswered(index) {
        let card = $(`.question-card[data-index="${index}"]`);

        if (card.find('.flag-toggle').is(':checked')) {
            return true;
        }

        let isMulti = card.data('is-multi');
        let requiredCount = parseInt(card.data('required-count'), 10);
        let checkedCount = card.find('.option-input:checked').length;

        if (isMulti === true) {
            return (checkedCount === requiredCount);
        }
        return (checkedCount > 0);
    }

    function updateQuestionMap() {
        let answeredCount = 0;

        $('.question-card').each(function() {
            let idx = $(this).data('index');
            let isFlagged = $(this).find('.flag-toggle').is(':checked');
            let checkedCount = $(this).find('.option-input:checked').length;
            let isMulti = $(this).data('is-multi');
            let requiredCount = parseInt($(this).data('required-count'), 10);

            let isAnswered = isMulti === true ? (checkedCount === requiredCount) : (checkedCount > 0);
            if (isAnswered) answeredCount++;

            let btns = $(`.q-btn[data-index="${idx}"]`);
            btns.removeClass('answered flagged current');

            if (isFlagged) {
                btns.addClass('flagged');
            } else if (isAnswered) {
                btns.addClass('answered');
            }

            if (idx === currentIndex) {
                btns.addClass('current');
            }
        });

        let pct = totalQuestions > 0 ? Math.round((answeredCount / totalQuestions) * 100) : 0;
        $('#progress-mini-bar').css('width', pct + '%');
    }

    $('.option-input').on('change', function() {
        let card = $(this).closest('.question-card');
        let isMulti = card.data('is-multi');
        let requiredCount = parseInt(card.data('required-count'), 10);

        if (isMulti === true) {
            let checkedInputs = card.find('.option-input:checked');
            if (checkedInputs.length > requiredCount) {
                $(this).prop('checked', false);
                alert(`هذا السؤال يتطلب اختيار ${requiredCount} إجابات فقط.`);
                return;
            }
        }
        updateQuestionMap();
    });

    $('.flag-toggle').on('change', function() {
        updateQuestionMap();
    });

    $('.q-btn').on('click', function() {
        let idx = parseInt($(this).data('index'), 10);
        showQuestion(idx);
    });

    $('#btn-next').on('click', function() {
        if (!isCurrentAnswered(currentIndex)) {
            alert('يرجى اختيار إجابة للسؤال الحالي أو تعليمه للمراجعة قبل الانتقال للسؤال التالي.');
            return;
        }
        if (currentIndex < totalQuestions - 1) {
            showQuestion(currentIndex + 1);
        }
    });

    $('#btn-prev').on('click', function() {
        if (currentIndex > 0) {
            showQuestion(currentIndex - 1);
        }
    });

    $('.trigger-submit').on('click', function(e) {
        e.preventDefault();

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
            if (confirm('هل أنت متأكد من تسليم الاختبار؟')) {
                $('#exam-form').submit();
            }
        }
    });

    $(document).on('click', '.jump-to-q', function() {
        let idx = parseInt($(this).data('index'), 10);
        $('#reviewModal').modal('hide');
        showQuestion(idx);
    });

    $('#btn-force-submit').on('click', function() {
        if (confirm('سيتم إنهاء الاختبار بالرغم من وجود أسئلة غير مجابة بالكامل. هل أنت متأكد؟')) {
            $('.option-input, .flag-toggle').prop('disabled', true);
            $('#btn-force-submit').prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> جاري التسليم...');
            $('#exam-form').submit();
        }
    });

    showQuestion(0);

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
                $('#timer-container').css('animation', 'pulse 1s infinite');
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