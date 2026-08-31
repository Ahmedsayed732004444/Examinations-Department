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
    font-size: 1.75rem;
    margin-bottom: 10px;
}

@media (min-width: 768px) {
    .page-title {
        font-size: 2.25rem;
    }
}

.page-subtitle {
    color: #64748b;
    font-size: 1rem;
}

.exam-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 20px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

@media (min-width: 768px) {
    .exam-card {
        padding: 30px;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
}

.exam-card:hover {
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    border-color: #cbd5e1;
}

.exam-info h3 {
    color: #1a2b56;
    font-weight: 700;
    font-size: 1.2rem;
    margin-bottom: 8px;
    line-height: 1.4;
}

@media (min-width: 768px) {
    .exam-info h3 {
        font-size: 1.4rem;
    }
}

.exam-info p {
    color: #64748b;
    font-size: 0.95rem;
    margin-bottom: 15px;
    max-width: 600px;
    line-height: 1.6;
}

.exam-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    color: #64748b;
    font-size: 0.9rem;
    font-weight: 500;
}

.exam-meta span {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: #f8fafc;
    padding: 6px 12px;
    border-radius: 8px;
    border: 1px solid #e2e8f0;
}

.btn-start-exam {
    background: #10b981;
    color: #ffffff;
    border: none;
    padding: 14px 25px;
    border-radius: 10px;
    font-weight: 600;
    font-size: 1.05rem;
    text-decoration: none;
    transition: all 0.3s ease;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    width: 100%;
    cursor: pointer;
}

@media (min-width: 768px) {
    .btn-start-exam {
        width: auto;
        padding: 12px 30px;
    }
}

.btn-start-exam:hover {
    background: #059669;
    transform: translateY(-2px);
    box-shadow: 0 8px 15px rgba(16, 185, 129, 0.25);
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
        <div class="alert alert-danger rounded-3 border-0 shadow-sm">{{ session('error') }}</div>
    @endif

    <div class="exams-list">
        @forelse($exams as $exam)
            <div class="exam-card">
                <div class="exam-info">
                    <h3>{{ $exam->title_ar }}</h3>
                    <p>{{ $exam->description_ar ?: 'لا يوجد وصف متوفر.' }}</p>
                    <div class="exam-meta">
                        <span><i class="bi bi-file-earmark-text text-primary"></i> {{ $exam->total_questions }} سؤال</span>
                        @if($exam->time_limit_min)
                            <span><i class="bi bi-stopwatch text-primary"></i> {{ $exam->time_limit_min }} دقيقة</span>
                        @endif
                    </div>
                </div>
                <div class="exam-action">
                    <form action="{{ route('user.graded_exams.start', $exam->id) }}" method="POST" id="form-start-{{ $exam->id }}" class="m-0">
                        @csrf
                        <button type="button" class="btn-start-exam btn-open-modal" data-id="{{ $exam->id }}" data-title="{{ $exam->title_ar }}" data-q="{{ $exam->total_questions }}" data-time="{{ $exam->time_limit_min }}">
                            بدء الاختبار <i class="bi bi-arrow-left mt-1"></i>
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="text-center py-5">
                <div class="d-inline-flex align-items-center justify-content-center bg-light rounded-circle mb-3" style="width: 80px; height: 80px;">
                    <i class="bi bi-journal-x text-muted" style="font-size: 2.5rem;"></i>
                </div>
                <h5 class="text-muted fw-bold">لا توجد شهادات متوفرة حالياً</h5>
            </div>
        @endforelse
    </div>
</div>

<!-- Intro Modal -->
<div class="modal fade" id="examIntroModal" tabindex="-1" aria-labelledby="examIntroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light d-flex align-items-center">
        <h5 class="modal-title fw-bold text-primary m-0" id="examIntroModalLabel">تأكيد بدء الاختبار</h5>
        <button type="button" class="btn-close m-0 ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-3 p-md-5 text-end" style="text-align: right !important; direction: rtl;">
          
          <div class="text-center text-md-end mb-4">
              <h4 class="fw-bold mb-2">الاختبار التجريبي للشهادة الاحترافية</h4>
              <h5 class="text-primary fw-bold" id="modal-exam-title"></h5>
          </div>
          
          <h6 class="fw-bold text-secondary border-bottom pb-2 mb-3">وصف الاختبار</h6>
          <p class="mb-4 text-muted" style="font-size: 1rem; line-height: 1.6;">اختبار تجريبي لقياس مدى استيعابك لمفاهيم التسويق الأساسية وتقييم جاهزيتك قبل التقدم للاختبار النهائي للشهادة.</p>
          
          <h6 class="fw-bold text-secondary border-bottom pb-2 mb-3">بيانات الاختبار</h6>
          <ul class="list-unstyled mb-4 ps-0 pe-3 text-muted" style="line-height: 2; font-size: 1rem;">
              <li><i class="bi bi-circle-fill text-primary" style="font-size: 0.5rem; margin-left: 8px; vertical-align: middle;"></i> <strong>عدد الأسئلة:</strong> <span id="modal-exam-questions"></span> سؤالًا</li>
              <li><i class="bi bi-circle-fill text-primary" style="font-size: 0.5rem; margin-left: 8px; vertical-align: middle;"></i> <strong>مدة الاختبار:</strong> <span id="modal-exam-time"></span></li>
              <li><i class="bi bi-circle-fill text-primary" style="font-size: 0.5rem; margin-left: 8px; vertical-align: middle;"></i> <strong>درجة الاجتياز:</strong> 70%</li>
              <li><i class="bi bi-circle-fill text-primary" style="font-size: 0.5rem; margin-left: 8px; vertical-align: middle;"></i> <strong>عدد المحاولات:</strong> مفتوح</li>
              <li><i class="bi bi-circle-fill text-primary" style="font-size: 0.5rem; margin-left: 8px; vertical-align: middle;"></i> <strong>نوع الأسئلة:</strong> صح وخطأ واختيار من متعدد</li>
              <li><i class="bi bi-circle-fill text-primary" style="font-size: 0.5rem; margin-left: 8px; vertical-align: middle;"></i> <strong>ظهور النتيجة:</strong> فور انتهاء الاختبار</li>
          </ul>

          <h6 class="fw-bold text-secondary border-bottom pb-2 mb-3">تعليمات الاختبار</h6>
          <ol class="mb-4 ps-0 pe-4 text-muted" style="line-height: 2; font-size: 1rem;">
              <li>اقرأ السؤال وجميع البدائل بعناية قبل الإجابة.</li>
              <li>قد يحتوي سؤال الاختيار من متعدد على <strong class="text-dark">إجابة صحيحة واحدة أو أكثر</strong>.</li>
              <li>إذا كان للسؤال أكثر من إجابة صحيحة، فسيتم تحديد <strong class="text-dark">عدد الإجابات المطلوب اختيارها</strong>.</li>
              <li>يمكنك التنقل بين الأسئلة ومراجعة إجاباتك قبل إنهاء الاختبار.</li>
              <li>تأكد من الإجابة عن جميع الأسئلة قبل الضغط على <strong class="text-dark">«إنهاء الاختبار»</strong>.</li>
              <li>هذا اختبار تجريبي للتدريب وقياس الجاهزية، وليس اختبار الشهادة النهائي المعتمد.</li>
          </ol>
          
          <div class="alert alert-warning py-3 px-3 mb-4 rounded-3 border-warning border-opacity-50 text-end">
              <strong class="d-flex align-items-center mb-2 text-dark"><i class="bi bi-exclamation-triangle-fill text-warning fs-5 ms-2"></i> تنبيه هام:</strong>
              <span class="text-dark" style="font-size: 0.95rem; line-height: 1.6;">قد يحتوي سؤال الاختيار من متعدد على إجابة صحيحة واحدة أو أكثر. اقرأ السؤال والبدائل بعناية وحدد الإجابة أو الإجابات الصحيحة بناءً على المطلوب.</span>
          </div>

          <div class="p-3 bg-light rounded-3 border">
              <h6 class="fw-bold text-dark mb-3">إقرار المتدرب</h6>
              <div class="form-check d-flex align-items-center">
                  <input class="form-check-input border-secondary shadow-sm" type="checkbox" id="agreeCheckbox" style="width: 22px; height: 22px; margin-left: 12px; cursor: pointer;">
                  <label class="form-check-label fw-bold text-dark w-100" for="agreeCheckbox" style="cursor: pointer; font-size: 0.95rem; line-height: 1.5; padding-top: 2px;">
                      قرأت تعليمات الاختبار وفهمتها، وأوافق على بدء الاختبار.
                  </label>
              </div>
          </div>
      </div>
      <div class="modal-footer bg-light d-flex justify-content-between align-items-center w-100">
        <button type="button" class="btn btn-outline-secondary px-4 fw-bold" data-bs-dismiss="modal">إلغاء</button>
        <button type="button" class="btn btn-success px-4 fw-bold" id="btn-confirm-start" disabled>ابدأ الاختبار <i class="bi bi-play-circle-fill ms-2"></i></button>
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
        
        // Default to 120 minutes if not set in DB
        if (!timeMin || timeMin === '') {
            timeMin = 120;
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
