@extends('layouts.user')
@section('title', $assessment->title_ar)

@push('styles')
<style>
/* ── Layout ── */
.exam-wrapper { max-width: 800px; margin: 0 auto; padding: 20px 15px 40px; }

/* ── Progress ── */
.progress-container { width: 100%; max-width: 250px; }
.progress-track { height: 8px; border-radius: 999px; background: #e2e8f0; overflow: hidden; }
.progress-fill {
    height: 100%; border-radius: 999px;
    background: #1a2b56;
    transition: width .4s ease;
}

/* ── Options ── */
.option-card {
    cursor: pointer;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    transition: all .2s ease;
    background: #fff;
    display: flex;
    align-items: center;
    padding: 1.2rem 1.5rem;
    margin-bottom: 1rem;
}
.option-card:hover { border-color: #cbd5e1; background: #f8fafc; }
.option-card.selected { border-color: #f59e0b; background: #fffbeb; }
.option-card input[type=radio] { display: none; }

/* Custom Radio Circle */
.custom-radio {
    width: 24px; height: 24px; border-radius: 50%;
    border: 2px solid #cbd5e1;
    display: flex; align-items: center; justify-content: center;
    margin-left: 15px; /* Margin on left because it's RTL */
    transition: all .2s;
    flex-shrink: 0;
}
.custom-radio::after {
    content: '';
    width: 12px; height: 12px; border-radius: 50%;
    background: #f59e0b;
    transform: scale(0);
    transition: transform .2s cubic-bezier(0.4, 0, 0.2, 1);
}
.option-card.selected .custom-radio { border-color: #f59e0b; }
.option-card.selected .custom-radio::after { transform: scale(1); }

.option-text {
    flex-grow: 1;
    font-size: 1.1rem;
    color: #334155;
    font-weight: 500;
}
.option-card.selected .option-text { color: #1a2b56; font-weight: 700; }

/* ── Question card ── */
#question-card {
    border-radius: 20px; border: 0;
    box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.08);
    background: #ffffff;
    padding: 40px;
}

@media (max-width: 576px) {
    #question-card { padding: 20px 12px; border-radius: 12px; }
    .exam-wrapper { padding: 5px 10px 20px; }
    .header-desktop { display: none !important; }
    .header-mobile { display: flex !important; }
    .option-card { padding: 0.8rem 1rem; margin-bottom: 0.6rem; }
    .option-text { font-size: 0.95rem; }
    #question-text { font-size: 1.15rem; }
    .alert { padding: 0.5rem 0.8rem; font-size: 0.85rem; }
}

/* ── Buttons ── */
#btn-next {
    background: #f59e0b;
    color: #fff;
    border: 0; border-radius: 8px; padding: .6rem 2.5rem;
    font-weight: 700; font-size: 1rem;
    transition: all .2s;
}
#btn-next:not(:disabled):hover { background: #d97706; transform: translateY(-1px); }
#btn-next:disabled { opacity: .5; cursor: not-allowed; }

.btn-prev {
    color: #1a2b56; font-weight: 700; text-decoration: none;
    display: inline-flex; align-items: center; gap: 0.5rem;
    cursor: pointer;
    background: transparent;
    border: none;
    padding: 0;
}
.btn-prev:hover { color: #0d6efd; }
.btn-prev:disabled { opacity: 0.5; cursor: not-allowed; }

.timer-footer { font-size: 0.85rem; color: #64748b; }
</style>
@endpush

@section('content')
<div class="exam-wrapper">

    <div class="card" id="question-card">
        {{-- Header Desktop --}}
        <div class="d-none d-sm-flex justify-content-between align-items-start mb-5 header-desktop">
            <div class="progress-container mt-2">
                <div class="d-flex justify-content-between small text-muted mb-2">
                    <span id="q-pct" class="fw-bold text-dark">{{ $progress['percentage'] }}%</span>
                    <span>السؤال <strong id="q-current">{{ $progress['current'] }}</strong> من <strong>{{ $progress['total'] }}</strong></span>
                </div>
                <div class="progress-track">
                    <div class="progress-fill" id="progress-bar" style="width:{{ $progress['percentage'] }}%"></div>
                </div>
            </div>
            
            <div class="text-end">
                <h4 class="fw-bold mb-1" style="color: #1a2b56;">{{ $assessment->title_ar }}</h4>
                <span class="text-muted small">{{ $assessment->description_ar ?: 'اختبار لقياس مستوى السمات لديك' }}</span>
            </div>
        </div>

        {{-- Header Mobile --}}
        <div class="d-flex d-sm-none flex-column mb-3 header-mobile">
            <div class="text-center mb-3">
                <h6 class="fw-bold mb-1" style="color: #1a2b56;">{{ $assessment->title_ar }}</h6>
                <span class="text-muted" style="font-size: 0.75rem;">{{ $assessment->description_ar ?: 'اختبار لقياس مستوى السمات لديك' }}</span>
            </div>
            <div class="progress-container w-100 mx-auto" style="max-width: 100%;">
                <div class="d-flex justify-content-between text-muted mb-1" style="font-size: 0.8rem;">
                    <span id="q-pct-mobile" class="fw-bold text-dark">{{ $progress['percentage'] }}%</span>
                    <span>السؤال <strong id="q-current-mobile">{{ $progress['current'] }}</strong> من <strong>{{ $progress['total'] }}</strong></span>
                </div>
                <div class="progress-track">
                    <div class="progress-fill" id="progress-bar-mobile" style="width:{{ $progress['percentage'] }}%"></div>
                </div>
            </div>
        </div>

        {{-- Question Text --}}
        <h3 class="text-center fw-bold mb-1 mt-4" id="question-text" style="color: #1a2b56;">{{ $nextQuestion->text_ar }}</h3>
        <p class="text-center text-muted small mb-4" style="font-size: 0.8rem;">اختر الإجابة التي تعبر عن رأيك بدقة</p>

        {{-- Options --}}
        <div class="d-flex flex-column" id="options-container">
            @foreach($nextQuestion->answerOptions as $i => $option)
            <label class="option-card" data-option-id="{{ $option->id }}">
                <input type="radio" name="selected_option" value="{{ $option->id }}">
                <div class="custom-radio"></div>
                <span class="option-text">{{ $option->label_ar }}</span>
                @if(str_contains($option->label_ar, 'نعم') || str_contains($option->label_ar, 'أوافق'))
                    <span class="fs-4 ms-2">👍</span>
                @elseif(str_contains($option->label_ar, 'لا') || str_contains($option->label_ar, 'أرفض'))
                    <span class="fs-4 ms-2">👎</span>
                @elseif(str_contains($option->label_ar, 'حد ما') || str_contains($option->label_ar, 'محايد'))
                    <span class="fs-4 ms-2">😐</span>
                @endif
            </label>
            @endforeach
        </div>

        {{-- Error Banner --}}
        <div id="error-banner" class="alert alert-danger py-2 mt-3 d-none text-center" role="alert">
            <i class="bi bi-wifi-off me-1"></i>مشكلة في الاتصال.
            <button class="btn btn-sm btn-danger ms-2" id="btn-retry">إعادة المحاولة</button>
        </div>

        {{-- Bottom Actions --}}
        <div class="mt-4 d-flex justify-content-between align-items-center">
            <button type="button" class="btn-prev" id="btn-prev" style="{{ $progress['current'] > 1 ? '' : 'visibility: hidden;' }}">
                <i class="bi bi-arrow-right"></i> السابق
            </button>
            
            <button type="button" class="btn ms-auto" id="btn-next" disabled>
                <span id="btn-text">التالي <i class="bi bi-chevron-left ms-1" style="font-size: 0.8em;"></i></span>
                <span id="btn-spinner" class="spinner-border spinner-border-sm d-none" role="status"></span>
            </button>
        </div>

        {{-- Footer Info --}}
        <div class="text-center mt-5 timer-footer d-flex justify-content-center align-items-center gap-2">
            @if($assessment->time_limit_min)
                <span><i class="bi bi-stopwatch"></i> الوقت المتبقي: <span id="timer-text">{{ sprintf('%02d:%02d', $assessment->time_limit_min, 0) }}</span></span>
                <span class="text-muted">|</span>
            @endif
            <span>تبقى <span id="q-remaining">{{ $progress['total'] - $progress['current'] }}</span> سؤال</span>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
const SESSION_ID  = '{{ $session->id }}';
const ANSWER_URL  = '{{ route('exam.answer', $session->id) }}';
const PREV_URL    = '{{ route('exam.previous', $session->id) }}';
const CSRF        = $('meta[name="csrf-token"]').attr('content');
const TIME_LIMIT  = {{ $assessment->time_limit_min ?? 'null' }};
const TOTAL_Q     = {{ $progress['total'] }};
const OPTION_LETTERS = ['أ','ب','ج','د','هـ','و','ز','ح'];

let currentQuestion = {
    id:             '{{ $nextQuestion->id }}',
    text_ar:        {!! Js::from($nextQuestion->text_ar) !!},
    is_reversed:    {{ $nextQuestion->is_reversed ? 'true' : 'false' }},
    dimension_name: {!! Js::from($nextQuestion->dimension?->name_ar) !!},
    options:        {!! json_encode($nextQuestion->answerOptions->map(fn($o) => ['id' => $o->id, 'label_ar' => $o->label_ar])) !!}
};

let selectedOptionId = null;
let pendingAnswer    = null;
let timerInterval    = null;
let timeLeft         = TIME_LIMIT ? TIME_LIMIT * 60 : 0;
const LS_KEY         = `exam_${SESSION_ID}`;

/* ── Timer ── */
if (TIME_LIMIT) {
    timerInterval = setInterval(() => {
        timeLeft--;
        const m = String(Math.floor(timeLeft / 60)).padStart(2,'0');
        const s = String(timeLeft % 60).padStart(2,'0');
        $('#timer-text').text(`${m}:${s}`);
        if (timeLeft <= 0) { clearInterval(timerInterval); submitCurrent(true); }
    }, 1000);
}

/* ── Option selection ── */
$(document).on('click', '.option-card', function () {
    $('.option-card').removeClass('selected');
    $('.option-card').find('input[type=radio]').prop('checked', false);
    
    $(this).addClass('selected');
    $(this).find('input[type=radio]').prop('checked', true);
    
    selectedOptionId = $(this).data('option-id');
    $('#btn-next').prop('disabled', false);
});

/* ── Next / Prev ── */
$('#btn-next').on('click', function () { if (selectedOptionId) submitCurrent(false); });
$('#btn-retry').on('click', function () {
    if (pendingAnswer) { $('#error-banner').addClass('d-none'); doSubmit(pendingAnswer.qId, pendingAnswer.optId); }
});

$('#btn-prev').on('click', function () {
    $(this).prop('disabled', true);
    $.ajax({
        url: PREV_URL, method: 'POST',
        headers: { 'X-CSRF-TOKEN': CSRF },
        success(res) {
            updateProgressAndLoadQuestion(res);
            $('#btn-prev').prop('disabled', false);
        },
        error() {
            $('#btn-prev').prop('disabled', false);
            alert('حدث خطأ أثناء العودة للسؤال السابق.');
        }
    });
});

function submitCurrent(isTimeout) {
    const qId  = currentQuestion.id;
    const optId = isTimeout ? (selectedOptionId || currentQuestion.options[0].id) : selectedOptionId;
    pendingAnswer = { qId, optId };
    try { const d = JSON.parse(localStorage.getItem(LS_KEY)||'{}'); d[qId]=optId; localStorage.setItem(LS_KEY,JSON.stringify(d)); } catch(e){}
    doSubmit(qId, optId);
}

function doSubmit(qId, optId) {
    $('#btn-next').prop('disabled', true);
    $('#btn-text').addClass('d-none');
    $('#btn-spinner').removeClass('d-none');
    $.ajax({
        url: ANSWER_URL, method: 'POST', contentType: 'application/json',
        headers: { 'X-CSRF-TOKEN': CSRF },
        data: JSON.stringify({ question_id: qId, selected_option_id: optId }),
        success(res) {
            $('#btn-spinner').addClass('d-none'); $('#btn-text').removeClass('d-none');
            updateProgressAndLoadQuestion(res);
        },
        error() {
            $('#btn-spinner').addClass('d-none'); $('#btn-text').removeClass('d-none');
            $('#btn-next').prop('disabled', false);
            $('#error-banner').removeClass('d-none');
        }
    });
}

function updateProgressAndLoadQuestion(res) {
    if (res.is_last) {
        clearInterval(timerInterval);
        localStorage.removeItem(LS_KEY);
        window.location.href = res.redirect;
        return;
    }
    // Update progress
    const p = res.progress;
    $('#progress-bar, #progress-bar-mobile').css('width', p.percentage + '%');
    $('#q-current, #q-current-mobile').text(p.current);
    $('#q-pct, #q-pct-mobile').text(p.percentage + '%');
    $('#q-remaining').text(p.total - p.current);
    
    // Toggle Prev Button
    if (p.current > 1) {
        $('#btn-prev').css('visibility', 'visible');
    } else {
        $('#btn-prev').css('visibility', 'hidden');
    }
    
    // Load next
    currentQuestion = res.next_question;
    selectedOptionId = null;
    loadQuestion(res.next_question);
}

function loadQuestion(q) {
    // Dimension badge (if any)
    if (q.dimension_name) {
        $('#dim-name').text(q.dimension_name);
        $('#dim-badge, #dim-badge-wrapper').removeClass('d-none');
    } else {
        $('#dim-badge, #dim-badge-wrapper').addClass('d-none');
    }
    // Reversed notice
    q.is_reversed ? $('#reversed-notice').removeClass('d-none') : $('#reversed-notice').addClass('d-none');
    // Question text
    $('#question-text').text(q.text_ar);
    // Options
    let html = '';
    q.options.forEach((opt) => {
        let emoji = '';
        if(opt.label_ar.includes('نعم') || opt.label_ar.includes('أوافق')) emoji = '👍';
        else if(opt.label_ar.includes('لا') || opt.label_ar.includes('أرفض')) emoji = '👎';
        else if(opt.label_ar.includes('حد ما') || opt.label_ar.includes('محايد')) emoji = '😐';
        
        let emojiHtml = emoji ? `<span class="fs-4 ms-2">${emoji}</span>` : '';
        
        html += `<label class="option-card" data-option-id="${opt.id}">
            <input type="radio" name="selected_option" value="${opt.id}">
            <div class="custom-radio"></div>
            <span class="option-text">${opt.label_ar}</span>
            ${emojiHtml}
        </label>`;
    });
    $('#options-container').html(html);
    $('#btn-next').prop('disabled', true);
    $('#error-banner').addClass('d-none');
    pendingAnswer = null;
    // Animate
    $('#question-card').css('opacity', 0).animate({ opacity: 1 }, 280);
}
</script>
@endpush
