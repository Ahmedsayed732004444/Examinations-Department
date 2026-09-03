@extends('layouts.user')
@section('title', 'الشهادات الاحترافية')

@push('styles')
<style>
/* ===== Design tokens (shared visual language for the exams module) ===== */
:root{
    --navy: #14213d;
    --navy-soft: #1e3a5f;
    --accent: #0ea472;
    --accent-dark: #0b8a5f;
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
    --shadow-md: 0 10px 30px rgba(15, 23, 42, .09);
}

.exams-page{
    background: var(--bg);
    min-height: 100%;
    padding: 24px 16px 48px;
}
@media (min-width: 768px){
    .exams-page{ padding: 40px 24px 64px; }
}

.exams-container{
    max-width: 880px;
    margin: 0 auto;
}

/* Header */
.exams-header{
    display: flex;
    flex-direction: column;
    gap: 16px;
    margin-bottom: 28px;
}
@media (min-width: 768px){
    .exams-header{
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 36px;
    }
}
.exams-header h1{
    color: var(--navy);
    font-weight: 800;
    font-size: 1.5rem;
    margin: 0 0 6px;
}
@media (min-width: 768px){
    .exams-header h1{ font-size: 2rem; }
}
.exams-header p{
    color: var(--text-muted);
    margin: 0;
    font-size: .95rem;
}
.btn-progress{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: var(--navy);
    color: #fff;
    border: none;
    border-radius: 999px;
    padding: 12px 22px;
    font-weight: 700;
    font-size: .92rem;
    text-decoration: none;
    white-space: nowrap;
    transition: transform .15s ease, box-shadow .15s ease, background .15s ease;
}
.btn-progress:hover, .btn-progress:focus-visible{
    background: var(--navy-soft);
    color: #fff;
    box-shadow: var(--shadow-md);
}
.btn-progress:active{ transform: scale(.97); }

/* Alert */
.exams-alert{
    background: #fef2f2;
    border: 1px solid #fecaca;
    color: #991b1b;
    border-radius: var(--radius-sm);
    padding: 14px 16px;
    margin-bottom: 20px;
    font-size: .9rem;
}

/* Exam card */
.exams-list{
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.exam-card{
    background: var(--surface);
    border-radius: var(--radius-lg);
    padding: 18px;
    border: 1px solid var(--border);
    box-shadow: var(--shadow-sm);
    transition: box-shadow .2s ease, border-color .2s ease;
}
@media (min-width: 768px){
    .exam-card{
        padding: 26px 28px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
    }
}
.exam-card:hover{
    box-shadow: var(--shadow-md);
    border-color: #d6dbe6;
}

.exam-info h3{
    color: var(--navy);
    font-weight: 700;
    font-size: 1.08rem;
    line-height: 1.4;
    margin: 0 0 6px;
}
@media (min-width: 768px){
    .exam-info h3{ font-size: 1.25rem; }
}
.exam-info p{
    color: var(--text-muted);
    font-size: .9rem;
    line-height: 1.6;
    margin: 0 0 14px;
}
@media (min-width: 768px){
    .exam-info p{ max-width: 520px; }
}

.exam-meta{
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 4px;
}
@media (min-width: 768px){
    .exam-meta{ margin-bottom: 0; }
}
.exam-meta span{
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: var(--bg);
    color: var(--text-muted);
    padding: 6px 12px;
    border-radius: 999px;
    border: 1px solid var(--border);
    font-size: .82rem;
    font-weight: 600;
}
.exam-meta span i{ color: var(--accent); }

.exam-action{ margin-top: 16px; }
@media (min-width: 768px){
    .exam-action{ margin-top: 0; flex-shrink: 0; }
}

.btn-start-exam{
    background: var(--accent);
    color: #fff;
    border: none;
    padding: 15px 24px;
    border-radius: var(--radius-sm);
    font-weight: 700;
    font-size: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    width: 100%;
    min-height: 50px;
    cursor: pointer;
    transition: background .2s ease, transform .15s ease, box-shadow .15s ease;
}
@media (min-width: 768px){
    .btn-start-exam{ width: auto; padding: 13px 28px; }
}
.btn-start-exam:hover, .btn-start-exam:focus-visible{
    background: var(--accent-dark);
    box-shadow: 0 8px 18px rgba(14, 164, 114, .25);
}
.btn-start-exam:active{ transform: scale(.98); }

/* Empty state */
.exams-empty{
    text-align: center;
    padding: 64px 20px;
    background: var(--surface);
    border-radius: var(--radius-lg);
    border: 1px dashed var(--border);
}
.exams-empty .icon-wrap{
    width: 72px; height: 72px;
    display: inline-flex; align-items: center; justify-content: center;
    background: var(--bg);
    border-radius: 50%;
    margin-bottom: 16px;
}
.exams-empty .icon-wrap i{ font-size: 2rem; color: var(--text-muted); }
.exams-empty h5{ color: var(--text-muted); font-weight: 700; margin: 0; }

/* ===== Confirmation sheet ===== */
.exam-modal .modal-dialog{
    margin: 0 auto;
}
@media (max-width: 767.98px){
    .exam-modal .modal-dialog{
        margin: 0;
        display: flex;
        align-items: flex-end;
        min-height: 100vh;
        max-width: 100%;
    }
    .exam-modal .modal-content{
        border-radius: 22px 22px 0 0 !important;
        width: 100%;
        max-height: 90vh;
    }
    .exam-modal.fade .modal-dialog{ transform: translateY(40px); }
    .exam-modal.show .modal-dialog{ transform: translateY(0); }
}
.exam-modal .modal-content{
    border: none;
    border-radius: var(--radius-lg);
    overflow: hidden;
}
.exam-modal .modal-header{
    background: var(--surface);
    border-bottom: 1px solid var(--border);
    padding: 16px 18px;
}
.exam-modal .drag-handle{
    width: 40px; height: 4px;
    background: var(--border);
    border-radius: 999px;
    margin: 8px auto -4px;
}
.exam-modal .modal-title{
    color: var(--navy);
    font-weight: 800;
    font-size: 1rem;
}
.exam-modal .modal-body{ padding: 18px; }
.exam-modal .exam-name{
    color: var(--navy);
    font-weight: 800;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 18px;
    line-height: 1.4;
}
.exam-modal .info-label{
    font-weight: 700;
    color: var(--text-muted);
    font-size: .82rem;
    margin-bottom: 8px;
}
.exam-modal .info-badges{
    display: flex; flex-wrap: wrap; gap: 8px;
}
.exam-modal .info-badges .badge{
    background: var(--bg);
    color: var(--text);
    border: 1px solid var(--border);
    font-weight: 600;
    font-size: .8rem;
    padding: 7px 11px;
    border-radius: 999px;
}
.exam-modal .info-badges .badge i{ color: var(--accent); margin-inline-end: 4px; }
.exam-modal ol{
    margin: 0; padding: 0; list-style: none; counter-reset: steps;
}
.exam-modal ol li{
    counter-increment: steps;
    position: relative;
    padding-inline-end: 28px;
    margin-bottom: 8px;
    font-size: .87rem;
    color: var(--text-muted);
    line-height: 1.5;
}
.exam-modal ol li::before{
    content: counter(steps);
    position: absolute;
    inset-inline-end: 0;
    top: 1px;
    width: 18px; height: 18px;
    background: var(--bg);
    border: 1px solid var(--border);
    border-radius: 50%;
    font-size: .68rem;
    font-weight: 700;
    color: var(--navy);
    display: flex; align-items: center; justify-content: center;
}
.exam-modal .warn-box{
    background: #fffbeb;
    border: 1px solid #fde68a;
    border-radius: var(--radius-sm);
    padding: 12px 14px;
}
.exam-modal .agree-box{
    background: var(--bg);
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
    padding: 14px;
}
.exam-modal .agree-box input{
    width: 20px; height: 20px;
    margin-inline-end: 10px;
    cursor: pointer;
    accent-color: var(--accent);
}
.exam-modal .modal-footer{
    background: var(--surface);
    border-top: 1px solid var(--border);
    padding: 14px 18px calc(14px + env(safe-area-inset-bottom));
    display: flex;
    gap: 10px;
}
.exam-modal .modal-footer .btn{
    flex: 1;
    border-radius: var(--radius-sm);
    font-weight: 700;
    padding: 13px;
}
</style>
@endpush

@section('content')
<div class="exams-page">
<div class="exams-container">
    <div class="exams-header text-center text-md-end">
        <div>
            <h1>الشهادات الاحترافية</h1>
            <p>اختر الشهادة التي ترغب في أداء اختبارها</p>
        </div>
        <a href="{{ route('user.graded_exams.progress') }}" class="btn-progress">
            <i class="bi bi-graph-up-arrow"></i> تتبع تقدمي وسجل الاختبارات
        </a>
    </div>

    @if(session('error'))
        <div class="exams-alert">{{ session('error') }}</div>
    @endif

    <div class="exams-list">
        @forelse($exams as $exam)
            <div class="exam-card">
                <div class="exam-info">
                    <h3>{{ $exam->title_ar }}</h3>
                    <p>{{ $exam->description_ar ?: 'لا يوجد وصف متوفر.' }}</p>
                    <div class="exam-meta">
                        <span><i class="bi bi-file-earmark-text"></i> {{ $exam->constraintSettings ? $exam->constraintSettings->total_questions : 50 }} سؤال</span>
                        @if($exam->time_limit_min)
                            <span><i class="bi bi-stopwatch"></i> {{ $exam->time_limit_min }} دقيقة</span>
                        @endif
                    </div>
                </div>
                <div class="exam-action">
                    <form action="{{ route('user.graded_exams.start', $exam->id) }}" method="POST" id="form-start-{{ $exam->id }}" class="m-0">
                        @csrf
                        <button type="button" class="btn-start-exam btn-open-modal" data-id="{{ $exam->id }}" data-title="{{ $exam->title_ar }}" data-q="{{ $exam->constraintSettings ? $exam->constraintSettings->total_questions : 50 }}" data-time="{{ $exam->time_limit_min }}">
                            بدء الاختبار <i class="bi bi-arrow-left"></i>
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="exams-empty">
                <div class="icon-wrap"><i class="bi bi-journal-x"></i></div>
                <h5>لا توجد شهادات متوفرة حالياً</h5>
            </div>
        @endforelse
    </div>
</div>
</div>

<div class="modal fade exam-modal" id="examIntroModal" tabindex="-1" aria-labelledby="examIntroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="examIntroModalLabel">تأكيد بدء الاختبار</h6>
        <button type="button" class="btn-close m-0 ms-auto" data-bs-dismiss="modal" aria-label="إغلاق"></button>
      </div>
      <div class="modal-body" style="text-align: right; direction: rtl;">

          <div class="exam-name" id="modal-exam-title"></div>

          <div class="mb-3">
              <div class="info-label">وصف الاختبار</div>
              <p class="text-muted mb-0" style="font-size: .85rem; line-height: 1.6;">يهدف هذا الاختبار إلى قياس مدى استيعابك للمفاهيم والمعارف الأساسية في التسويق، ومساعدتك على تقييم جاهزيتك قبل التقدم إلى الاختبار النهائي للشهادة الاحترافية.</p>
          </div>

          <div class="mb-3">
              <div class="info-label">بيانات الاختبار</div>
              <div class="info-badges">
                  <span class="badge"><i class="bi bi-patch-question"></i><span id="modal-exam-questions"></span> سؤال</span>
                  <span class="badge"><i class="bi bi-stopwatch"></i><span id="modal-exam-time"></span></span>
                  <span class="badge"><i class="bi bi-arrow-repeat"></i>محاولات مفتوحة</span>
                  <span class="badge"><i class="bi bi-ui-checks-grid"></i>صح/خطأ واختياري</span>
              </div>
          </div>

          <div class="mb-3">
              <div class="info-label">تعليمات هامة</div>
              <ol>
                  <li>اقرأ السؤال والبدائل بعناية.</li>
                  <li>يمكنك مراجعة وتعديل إجاباتك قبل التسليم.</li>
              </ol>
          </div>

          <div class="warn-box mb-3">
              <strong class="d-flex align-items-center mb-1 text-dark" style="font-size: .85rem;"><i class="bi bi-exclamation-triangle-fill text-warning ms-2"></i> تنبيه:</strong>
              <span class="text-dark" style="font-size: .8rem; line-height: 1.4;">حدد الإجابة أو الإجابات الصحيحة بناءً على المطلوب في كل سؤال، حيث قد يتطلب سؤال واحد اختيار أكثر من خيار.</span>
          </div>

          <div class="agree-box">
              <label class="d-flex align-items-center mb-0 fw-bold text-dark" for="agreeCheckbox" style="cursor: pointer; font-size: .85rem;">
                  <input type="checkbox" id="agreeCheckbox">
                  قرأت التعليمات وأوافق على البدء.
              </label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">إلغاء</button>
        <button type="button" class="btn btn-success" id="btn-confirm-start" disabled>ابدأ الاختبار <i class="bi bi-play-circle-fill ms-1"></i></button>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
    let currentExamId = null;

    $('.btn-open-modal').on('click', function() {
        currentExamId = $(this).data('id');
        let title = $(this).data('title');
        let qCount = $(this).data('q');
        let timeMin = $(this).data('time');

        if (!timeMin) {
            timeMin = 60;
        }

        $('#modal-exam-title').text(title);
        $('#modal-exam-questions').text(qCount || 50);

        let timeText = 'غير محدد';
        if (timeMin) {
            let hours = Math.floor(timeMin / 60);
            let mins = timeMin % 60;
            if (hours > 0 && mins === 0) {
                timeText = (hours == 1 ? 'ساعة واحدة' : (hours == 2 ? 'ساعتان' : hours + ' ساعات'));
            } else if (hours > 0) {
                timeText = hours + ' ساعة و ' + mins + ' دقيقة';
            } else {
                timeText = mins + ' دقيقة';
            }
        }
        $('#modal-exam-time').text(timeText);

        $('#agreeCheckbox').prop('checked', false);
        $('#btn-confirm-start').prop('disabled', true);

        new bootstrap.Modal(document.getElementById('examIntroModal')).show();
    });

    $('#agreeCheckbox').on('change', function() {
        $('#btn-confirm-start').prop('disabled', !$(this).is(':checked'));
    });

    $('#btn-confirm-start').on('click', function() {
        if(currentExamId) {
            $(this).prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> جاري البدء...');
            $('#form-start-' + currentExamId).submit();
        }
    });
</script>
@endpush