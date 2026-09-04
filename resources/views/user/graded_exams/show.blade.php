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

/* ===== Top bar (مبسّط ومضغوط أكتر) ===== */
.exam-topbar{
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-sm);
    padding: 8px 10px;
    position: sticky;
    top: 6px;
    z-index: 1000;
    margin-bottom: 8px;
}
@media (min-width: 768px){
    .exam-topbar{ padding: 12px 18px; top: 10px; margin-bottom: 14px; }
}
.exam-topbar-row1{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 8px;
    padding-bottom: 6px;
    margin-bottom: 6px;
    border-bottom: 1px solid var(--border);
}
.exam-topbar-row1 h1{
    font-size: .85rem;
    font-weight: 700;
    color: var(--navy);
    margin: 0;
    line-height: 1.3;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    flex: 1;
    min-width: 0;
}
@media (min-width: 768px){ .exam-topbar-row1 h1{ font-size: 1.05rem; } }

/* زر التسليم: رمادي/باهت ومعطّل الشكل طالما فيه أسئلة بدون إجابة،
   ويتحول تلقائيًا للون الهوية بمجرد اكتمال الإجابة على كل الأسئلة.
   لا يوجد تسليم جزئي إطلاقًا. */
.btn-finish{
    border: none;
    border-radius: 999px;
    padding: 7px 12px;
    font-weight: 700;
    font-size: .74rem;
    white-space: nowrap;
    flex-shrink: 0;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: background .15s ease, color .15s ease;
}
@media (min-width: 768px){ .btn-finish{ font-size: .82rem; padding: 8px 14px; } }
.btn-finish.not-ready{
    background: var(--bg);
    color: var(--text-muted);
    border: 1px solid var(--border);
}
.btn-finish.is-ready{
    background: var(--navy);
    color: #fff;
}
.btn-finish.is-ready:hover{ background: var(--navy-soft); color: #fff; }

.exam-topbar-row2{
    display: flex;
    align-items: center;
    gap: 6px;
    flex-wrap: nowrap;
}
.q-count-badge, .btn-map, .timer-box{
    font-size: .72rem;
    padding: 5px 9px;
    border-radius: 999px;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    white-space: nowrap;
}
@media (min-width: 768px){
    .q-count-badge, .btn-map, .timer-box{ font-size: .82rem; padding: 6px 12px; }
}
.q-count-badge{
    background: rgba(14, 164, 114, .1);
    color: var(--accent);
    font-weight: 700;
}
.btn-map{
    background: var(--bg);
    border: 1px solid var(--border);
    color: var(--navy);
    font-weight: 700;
    margin-inline-start: auto;
}
.btn-map .map-label{ display: none; }
@media (min-width: 420px){ .btn-map .map-label{ display: inline; } }

.timer-box{
    background: #fef2f2;
    border: 1px solid #fecaca;
    flex-shrink: 0;
}
.timer-box .bi{ color: var(--danger); font-size: .8rem; }
.timer-box #exam-timer{
    font-weight: 700;
    color: var(--danger);
    font-family: 'Courier New', monospace;
    direction: ltr;
}
@keyframes pulse{
    0% { opacity: 1; transform: scale(1); }
    50% { opacity: .85; transform: scale(.98); }
    100% { opacity: 1; transform: scale(1); }
}

.progress-mini{
    height: 4px;
    background: var(--bg);
    border-radius: 999px;
    overflow: hidden;
    margin-top: 8px;
}
.progress-mini > div{
    height: 100%;
    background: var(--accent);
    border-radius: 999px;
    transition: width .25s ease;
    width: 0%;
}

/* ===== Fix mode strip (شكل مختلف تمامًا عن أي حاجة تانية في الصفحة عمدًا) =====
   خلفية داكنة + نص أبيض عشان يبان بوضوح إنه مسار مختلف عن الأسئلة العادية،
   مش مجرد تنبيه أصفر شبه علامة "تعليم للمراجعة". */
.fix-mode-strip{
    display: none;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    background: linear-gradient(135deg, #7c3aed, #6d28d9);
    color: #fff;
    border-radius: var(--radius-sm);
    padding: 10px 12px;
    margin-bottom: 10px;
    position: relative;
    box-shadow: 0 6px 16px rgba(109, 40, 217, .25);
}
.fix-mode-strip .fix-icon{
    width: 30px; height: 30px;
    border-radius: 50%;
    background: rgba(255,255,255,.18);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    animation: pulse 1.4s infinite;
}
.fix-mode-strip .fix-text{
    font-size: .82rem;
    font-weight: 700;
    line-height: 1.4;
}
.fix-mode-strip .fix-text small{
    display: block;
    font-weight: 500;
    opacity: .85;
    font-size: .72rem;
}
.fix-mode-strip .btn-fix-next{
    background: #fff;
    color: #6d28d9;
    border: none;
    border-radius: 999px;
    padding: 8px 16px;
    font-weight: 800;
    font-size: .82rem;
    white-space: nowrap;
    flex-shrink: 0;
}
.fix-mode-strip .btn-fix-close{
    position: absolute;
    top: -8px;
    left: -8px;
    width: 24px; height: 24px;
    border-radius: 50%;
    background: #fff;
    color: #6d28d9;
    border: none;
    display: flex; align-items: center; justify-content: center;
    font-size: .8rem;
    box-shadow: var(--shadow-sm);
}

/* ===== Question card ===== */
.question-card{
    background: var(--surface);
    border-radius: var(--radius-lg);
    padding: 18px 16px;
    margin-bottom: 12px;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border);
    display: none;
}
@media (min-width: 768px){
    .question-card{ padding: 28px 30px; margin-bottom: 20px; }
}
.question-card.active{
    display: block;
    animation: fadeIn .35s cubic-bezier(.4,0,.2,1);
}
@keyframes fadeIn{
    from { opacity: 0; transform: translateY(12px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Header row: question number (right) + mark-for-review star pill (left) */
.q-card-head{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-bottom: 16px;
}
.q-card-head .q-badge-number{
    font-weight: 800;
    font-size: .98rem;
    color: var(--navy);
}
@media (min-width: 768px){ .q-card-head .q-badge-number{ font-size: 1.08rem; } }

.btn-mark-star{
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: var(--surface);
    border: 1.5px solid var(--border);
    border-radius: 999px;
    padding: 7px 14px;
    font-size: .8rem;
    font-weight: 700;
    color: var(--text-muted);
    cursor: pointer;
    transition: all .15s ease;
    line-height: 1;
}
.btn-mark-star .star-icon{
    font-size: .95rem;
    line-height: 1;
}
.btn-mark-star:hover{ border-color: #d6dbe6; }
.btn-mark-star.is-marked{
    background: #fffbeb;
    border-color: var(--warning);
    color: #b45309;
}
.btn-mark-star .flag-toggle-input{
    position: absolute;
    width: 1px; height: 1px;
    opacity: 0;
    pointer-events: none;
}

.question-text{
    font-size: 1.02rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 18px;
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
    justify-content: space-between;
    padding: 13px 15px;
    border: 1.5px solid var(--border);
    border-radius: var(--radius-sm);
    margin-bottom: 10px;
    cursor: pointer;
    transition: all .15s ease;
    font-size: .94rem;
    color: var(--text);
    background: var(--surface);
    position: relative;
    min-height: 48px;
}
@media (min-width: 768px){
    .option-label{ padding: 16px 20px; font-size: 1rem; }
}
.option-label:hover{ background: var(--bg); border-color: #d6dbe6; }

/* Custom radio/checkbox bullet, positioned at the visual end (left in RTL) */
.option-label::after{
    content: '';
    width: 21px;
    height: 21px;
    border-radius: 50%;
    border: 1.5px solid #c3c9d6;
    background: var(--surface);
    flex-shrink: 0;
    transition: all .15s ease;
}

.option-input:checked + .option-label{
    border-color: var(--navy);
    background: var(--bg);
    color: var(--navy);
    font-weight: 700;
}
.option-input:checked + .option-label::after{
    border-color: var(--navy);
    background: var(--navy);
    box-shadow: inset 0 0 0 4px var(--surface);
}
.option-input:focus-visible + .option-label{
    outline: 2px solid var(--navy);
    outline-offset: 2px;
}

.flag-row{
    margin-top: 16px;
    padding-top: 12px;
    border-top: 1px solid var(--border);
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 8px;
}
.flag-row .flag-hint{
    color: var(--text-muted);
    font-weight: 500;
    font-size: .72rem;
    margin-inline-start: auto;
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
    position: relative;
}
.q-btn:hover{ background: var(--border); color: var(--text); }
.q-btn.current{
    border-color: var(--accent);
    background: #fff;
    color: var(--accent);
    box-shadow: 0 3px 8px rgba(14, 164, 114, .2);
}
.q-btn.answered{ background: var(--accent); border-color: var(--accent); color: #fff; }
.q-btn.unanswered{ background: var(--bg); border-color: var(--border); color: var(--text-muted); }
.q-btn.has-flag::after{
    content: '';
    position: absolute;
    top: -3px; left: -3px;
    width: 9px; height: 9px;
    border-radius: 50%;
    background: var(--warning);
    border: 1.5px solid #fff;
}

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
.q-legend i.dot-flag{ border-radius: 50%; background: var(--warning); }

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
    transition: background .15s ease, color .15s ease, opacity .15s ease;
}
@media (min-width: 768px){
    .nav-buttons .btn{ flex: none; min-width: 160px; }
}
/* حالة "غير جاهز للتسليم" لزر التسليم السفلي */
.nav-buttons .btn.trigger-submit.not-ready{
    background: var(--bg);
    color: var(--text-muted);
    border: 1px solid var(--border);
}
.nav-buttons .btn.trigger-submit.is-ready{
    background: var(--accent);
    color: #fff;
    border: none;
}
.submit-hint{
    text-align: center;
    color: var(--text-muted);
    font-size: .76rem;
    margin-top: -4px;
    margin-bottom: 10px;
}

/* ===== Marked-questions review modal (shown before final submit) ===== */
.review-modal .modal-content{
    border: none;
    border-radius: var(--radius-lg);
    overflow: hidden;
}
.review-modal .modal-header{
    background: var(--surface);
    border-bottom: 1px solid var(--border);
    padding: 16px 18px;
}
.review-modal .modal-title{
    color: var(--navy);
    font-weight: 800;
    font-size: 1rem;
}
.review-modal .modal-body{ padding: 20px; }

.review-modal .review-head{
    display: flex;
    align-items: center;
    gap: 9px;
    margin-bottom: 10px;
}
.review-modal .review-head .dot{
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--warning);
    flex-shrink: 0;
}
.review-modal .review-head h6{
    margin: 0;
    font-size: .95rem;
    font-weight: 800;
    color: var(--text);
}
.review-modal .review-lead{
    font-size: .86rem;
    color: var(--text-muted);
    line-height: 1.7;
    margin-bottom: 14px;
}

.review-chip-row{
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 4px;
}
.review-chip{
    min-width: 42px;
    height: 42px;
    padding: 0 8px;
    border-radius: 10px;
    border: 1.5px solid var(--warning);
    background: #fffbeb;
    color: #b45309;
    font-weight: 800;
    font-size: .9rem;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: transform .1s ease;
}
.review-chip:hover{ transform: translateY(-1px); }

.review-all-clear{
    display: flex;
    align-items: center;
    gap: 10px;
    background: #ecfdf5;
    border: 1px solid #a7f3d0;
    border-radius: var(--radius-sm);
    padding: 14px 16px;
    font-size: .86rem;
    font-weight: 700;
    color: #059669;
}

.review-modal .modal-footer{
    background: var(--surface);
    border-top: 1px solid var(--border);
    padding: 14px 18px;
    display: flex;
    gap: 10px;
}
.review-modal .modal-footer .btn{
    flex: 1;
    border-radius: var(--radius-sm);
    font-weight: 700;
    padding: 12px;
}
</style>
@endpush

@section('content')
@php
    $timeLimitMinutes = $session->gradedExam->time_limit_min ?? 60;
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
            <button type="button" class="btn-finish trigger-submit not-ready" id="btn-top-submit">
                <i class="bi bi-send-check"></i> تسليم الاختبار
            </button>
        </div>
        <div class="exam-topbar-row2">
            @if($hasTimer)
            <div class="timer-box" id="timer-container">
                <i class="bi bi-stopwatch"></i>
                <div id="exam-timer">00:00:00</div>
            </div>
            @endif
            <span class="q-count-badge"><span id="current-q-number">1</span>/{{ $session->total_questions }}</span>

            <button type="button" class="btn-map d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#examMapOffcanvas" aria-controls="examMapOffcanvas" aria-label="خريطة الأسئلة">
                <i class="bi bi-grid-3x3-gap-fill"></i> <span class="map-label">الأسئلة</span>
            </button>
        </div>
        <div class="progress-mini"><div id="progress-mini-bar"></div></div>
    </div>

    <!-- Fix mode strip -->
    <div id="fix-mode-strip" class="fix-mode-strip">
        <button type="button" id="btn-fix-close" class="btn-fix-close" aria-label="إغلاق"><i class="bi bi-x"></i></button>
        <div class="fix-icon"><i class="bi bi-magic"></i></div>
        <div class="fix-text">
            استكمال الإجابات والمراجعة
            <small id="fix-mode-count-text">متبقّي 0 سؤال</small>
        </div>
        <button type="button" id="btn-fix-next" class="btn-fix-next">السؤال التالي</button>
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
                        <div class="q-card-head">
                            <span class="q-badge-number">السؤال {{ $index + 1 }}</span>
                            <button type="button" class="btn-mark-star" data-index="{{ $index }}">
                                <input class="flag-toggle flag-toggle-input" type="checkbox" id="flag_{{ $index }}" tabindex="-1">
                                <span class="mark-label">علّم للمراجعة</span>
                                <span class="star-icon">☆</span>
                            </button>
                        </div>

                        <div class="question-text">
                            {{ $sq->question->text_ar }}
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
                            <span class="flag-hint">العلامة شخصية ولا تمنع التسليم</span>
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

                    <button type="button" id="btn-submit" class="btn trigger-submit not-ready" style="display: none;">
                        <i class="bi bi-check-circle me-1"></i> تسليم الاختبار
                    </button>
                </div>
                <div class="submit-hint" id="submit-hint" style="display:none;">
                    أكمل الإجابة على جميع الأسئلة حتى يصبح التسليم متاحًا
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
                    <span><i style="background: var(--border);"></i> بدون إجابة</span>
                    <span><i class="dot-flag"></i> معلّم للمراجعة</span>
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
            <span><i style="background: var(--border);"></i> بدون إجابة</span>
            <span><i class="dot-flag"></i> معلّم للمراجعة</span>
        </div>
    </div>
</div>
<!-- Marked-questions review modal (shown right before final submit) -->
<div class="modal fade review-modal" id="reviewMarkedModal" tabindex="-1" aria-labelledby="reviewMarkedModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="direction: rtl; text-align: right;">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="reviewMarkedModalLabel">تسليم الاختبار</h6>
        <button type="button" class="btn-close m-0 ms-auto" data-bs-dismiss="modal" aria-label="إغلاق"></button>
      </div>
      <div class="modal-body">
        <div id="review-has-marked">
            <div class="review-head">
                <span class="dot"></span>
                <h6>أسئلة معلّمة للمراجعة</h6>
            </div>
            <p class="review-lead">دوس على رقم أي سؤال عشان ترجعله وتراجع إجابتك.</p>
            <div class="review-chip-row" id="review-chip-row"></div>
        </div>
        <div id="review-no-marked" style="display:none;" class="review-all-clear">
            <i class="bi bi-check-circle-fill"></i>
            <span>مفيش أسئلة معلّمة للمراجعة — جاهز للتسليم.</span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">الرجوع للمراجعة</button>
        <button type="button" class="btn btn-success" id="btn-confirm-final-submit">تأكيد التسليم</button>
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

    // ===== Fix mode state =====
    // العلامة (flag) مستقلة تمامًا عن حالة "مجاوب/غير مجاوب" ولا تدخل في هذا المنطق.
    // فقط الأسئلة الفعلية بدون إجابة هي التي تمنع التسليم وتدخل "وضع الاستكمال".
    let fixMode = false;
    let returnToIndex = null;

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

    function isQuestionAnswered(index) {
        let card = $(`.question-card[data-index="${index}"]`);
        let isMulti = card.data('is-multi');
        let requiredCount = parseInt(card.data('required-count'), 10);
        let checkedCount = card.find('.option-input:checked').length;

        if (isMulti === true) {
            return (checkedCount === requiredCount);
        }
        return (checkedCount > 0);
    }

    // الأسئلة اللي لسه بدون إجابات أو متعلمة كمراجعة
    function buildUnansweredList() {
        let list = [];
        for (let i = 0; i < totalQuestions; i++) {
            let isFlagged = $(`.question-card[data-index="${i}"]`).find('.flag-toggle').is(':checked');
            if (!isQuestionAnswered(i) || isFlagged) list.push(i);
        }
        return list;
    }

    function updateQuestionMap() {
        let answeredCount = 0;

        $('.question-card').each(function() {
            let idx = $(this).data('index');
            let isFlagged = $(this).find('.flag-toggle').is(':checked');
            let isAnswered = isQuestionAnswered(idx);
            if (isAnswered) answeredCount++;

            let btns = $(`.q-btn[data-index="${idx}"]`);
            btns.removeClass('answered unanswered current has-flag');

            btns.addClass(isAnswered ? 'answered' : 'unanswered');
            if (isFlagged) btns.addClass('has-flag');
            if (idx === currentIndex) btns.addClass('current');
        });

        let pct = totalQuestions > 0 ? Math.round((answeredCount / totalQuestions) * 100) : 0;
        $('#progress-mini-bar').css('width', pct + '%');

        updateSubmitButtonsState(totalQuestions - answeredCount);
    }

    // يتحكم في شكل أزرار التسليم (فوق وتحت): رمادي/معطّل الشكل لحد ما يجاوب على الكل
    function updateSubmitButtonsState(remainingCount) {
        let ready = remainingCount === 0;
        $('.trigger-submit').toggleClass('is-ready', ready).toggleClass('not-ready', !ready);
        $('#submit-hint').toggle(!ready && currentIndex === totalQuestions - 1);
        refreshFixMode();
    }

    // بيتنادى بعد أي تغيير وهو في وضع الاستكمال: يحدّث العداد، ولو خلصت
    // كل الأسئلة الناقصة يرجّع اليوزر لمكانه الأصلي ويفتح تأكيد التسليم تلقائيًا.
    function refreshFixMode() {
        if (!fixMode) return;

        let list = buildUnansweredList();

        if (list.length === 0) {
            exitFixMode();
            showQuestion(returnToIndex);
            setTimeout(function () {
                confirmAndSubmit();
            }, 300);
            return;
        }

        $('#fix-mode-count-text').text('متبقّي ' + list.length + ' سؤال (للمراجعة أو بدون إجابة)');
    }

    function enterFixMode(firstIndex) {
        returnToIndex = currentIndex;
        fixMode = true;
        showQuestion(firstIndex);
        $('#fix-mode-strip').css('display', 'flex');
        refreshFixMode();
    }

    function exitFixMode() {
        fixMode = false;
        $('#fix-mode-strip').fadeOut(150);
    }

    // الأسئلة المعلّمة للمراجعة (مستقلة تمامًا عن حالة الإجابة)
    function buildMarkedList() {
        let list = [];
        $('.flag-toggle').each(function() {
            if ($(this).is(':checked')) {
                let idx = parseInt($(this).closest('.question-card').data('index'), 10);
                list.push(idx);
            }
        });
        return list.sort((a, b) => a - b);
    }

    function confirmAndSubmit() {
        let marked = buildMarkedList();
        let reviewModalEl = document.getElementById('reviewMarkedModal');
        let reviewModal = bootstrap.Modal.getOrCreateInstance(reviewModalEl);

        if (marked.length > 0) {
            $('#review-has-marked').show();
            $('#review-no-marked').hide();
            let chipRow = $('#review-chip-row').empty();
            marked.forEach(function(idx) {
                let chip = $('<button type="button" class="review-chip"></button>').text(idx + 1);
                chip.on('click', function() {
                    reviewModal.hide();
                    showQuestion(idx);
                });
                chipRow.append(chip);
            });
        } else {
            $('#review-has-marked').hide();
            $('#review-no-marked').show();
        }

        reviewModal.show();
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
        // ملحوظة: لا يوجد أي منطق هنا يمس حالة العلامة (flag) — تفضل زي ما هي
        // إذا كانت محددة، ولا تُشال تلقائيًا عند اختيار إجابة جديدة.
        updateQuestionMap();
    });

    $('.flag-toggle').on('change', function() {
        updateQuestionMap();
    });

    // زرار النجمة "علّم للمراجعة": بيقلب حالة الـ checkbox المخفي ويحدّث الشكل
    $('.btn-mark-star').on('click', function() {
        let checkbox = $(this).find('.flag-toggle');
        let isNowMarked = !checkbox.is(':checked');
        checkbox.prop('checked', isNowMarked).trigger('change');

        $(this).toggleClass('is-marked', isNowMarked);
        $(this).find('.star-icon').text(isNowMarked ? '★' : '☆');
        $(this).find('.mark-label').text(isNowMarked ? 'معلّم للمراجعة' : 'علّم للمراجعة');
    });

    $('#btn-confirm-final-submit').on('click', function() {
        bootstrap.Modal.getOrCreateInstance(document.getElementById('reviewMarkedModal')).hide();
        $('#exam-form').submit();
    });

    $('.q-btn').on('click', function() {
        let idx = parseInt($(this).data('index'), 10);
        showQuestion(idx);
    });

    $('#btn-next').on('click', function() {
        if (currentIndex < totalQuestions - 1) {
            showQuestion(currentIndex + 1);
        }
    });

    $('#btn-prev').on('click', function() {
        if (currentIndex > 0) {
            showQuestion(currentIndex - 1);
        }
    });

    // الضغط على زر التسليم (فوق أو تحت): لو فيه ناقص يبدأ وضع الاستكمال تلقائيًا
    // بدل ما يطلع مودال، ولو كله مجاوب يطلع تأكيد التسليم مباشرة.
    $(document).on('click', '.trigger-submit', function(e) {
        e.preventDefault();
        let list = buildUnansweredList();
        if (list.length > 0) {
            enterFixMode(list[0]);
        } else {
            confirmAndSubmit();
        }
    });

    $('#btn-fix-next').on('click', function() {
        let list = buildUnansweredList().filter(i => i !== currentIndex);
        if (list.length) {
            showQuestion(list[0]);
        } else {
            refreshFixMode();
        }
    });

    $('#btn-fix-close').on('click', function() {
        exitFixMode();
    });

    showQuestion(0);
    updateQuestionMap();

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
                alert('انتهى الوقت المخصص للاختبار! سيتم تسليم إجاباتك الآن تلقائياً بغض النظر عن اكتمالها.');

                $('#btn-submit, #btn-next, #btn-prev, #btn-top-submit').prop('disabled', true);

                // عند انتهاء الوقت فقط: يُسمح بتسليم تلقائي حتى لو ناقص، لأن الوقت انتهى فعليًا
                $('#exam-form').off('submit').submit();
            } else {
                updateTimerDisplay();
            }
        }, 1000);
    }
});
</script>
@endpush