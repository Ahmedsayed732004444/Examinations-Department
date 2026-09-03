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
                        <span><i class="bi bi-file-earmark-text text-primary"></i> {{ $exam->constraintSettings ? $exam->constraintSettings->total_questions : 50 }} سؤال</span>
                        @if($exam->time_limit_min)
                            <span><i class="bi bi-stopwatch text-primary"></i> {{ $exam->time_limit_min }} دقيقة</span>
                        @endif
                    </div>
                </div>
                <div class="exam-action">
                    <form action="{{ route('user.graded_exams.start', $exam->id) }}" method="POST" id="form-start-{{ $exam->id }}" class="m-0">
                        @csrf
                        <button type="button" class="btn-start-exam btn-open-modal" data-id="{{ $exam->id }}" data-title="{{ $exam->title_ar }}" data-q="{{ $exam->constraintSettings ? $exam->constraintSettings->total_questions : 50 }}" data-time="{{ $exam->time_limit_min }}">
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

<div class="modal fade" id="examIntroModal" tabindex="-1" aria-labelledby="examIntroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-light d-flex align-items-center py-2 px-3">
        <h6 class="modal-title fw-bold text-primary m-0" id="examIntroModalLabel">تأكيد بدء الاختبار</h6>
        <button type="button" class="btn-close m-0 ms-auto" data-bs-dismiss="modal" aria-label="Close" style="font-size: 0.8rem;"></button>
      </div>
      <div class="modal-body p-3 p-md-4 text-end" style="text-align: right !important; direction: rtl;">
          
          <div class="mb-3 text-center text-md-end">
              <h5 class="text-primary fw-bold" id="modal-exam-title" style="line-height: 1.4;"></h5>
          </div>
          
          <div class="mb-3">
              <h6 class="fw-bold text-secondary mb-2" style="font-size: 0.9rem;">وصف الاختبار:</h6>
              <p class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.5;">اختبار تجريبي لقياس مدى استيعابك للمفاهيم وتقييم جاهزيتك قبل التقدم للاختبار النهائي.</p>
          </div>
          
          <div class="mb-3">
              <h6 class="fw-bold text-secondary mb-2" style="font-size: 0.9rem;">بيانات الاختبار:</h6>
              <div class="d-flex flex-wrap gap-2 text-muted" style="font-size: 0.85rem;">
                  <span class="badge bg-light text-dark border"><i class="bi bi-patch-question text-primary me-1"></i> <span id="modal-exam-questions"></span> سؤال</span>
                  <span class="badge bg-light text-dark border"><i class="bi bi-stopwatch text-primary me-1"></i> <span id="modal-exam-time"></span></span>
                  <span class="badge bg-light text-dark border"><i class="bi bi-arrow-repeat text-primary me-1"></i> محاولات مفتوحة</span>
                  <span class="badge bg-light text-dark border"><i class="bi bi-ui-checks-grid text-primary me-1"></i> صح/خطأ واختياري</span>
              </div>
          </div>

          <div class="mb-3">
              <h6 class="fw-bold text-secondary mb-2" style="font-size: 0.9rem;">تعليمات هامة:</h6>
              <ol class="mb-0 ps-0 pe-3 text-muted" style="line-height: 1.6; font-size: 0.85rem;">
                  <li>اقرأ السؤال والبدائل بعناية.</li>
                  <li>يمكنك مراجعة وتعديل إجاباتك قبل التسليم.</li>
              </ol>
          </div>
          
          <div class="alert alert-warning py-2 px-3 mb-3 rounded-2 border-warning border-opacity-50 text-end">
              <strong class="d-flex align-items-center mb-1 text-dark" style="font-size: 0.85rem;"><i class="bi bi-exclamation-triangle-fill text-warning fs-6 ms-2"></i> تنبيه:</strong>
              <span class="text-dark" style="font-size: 0.8rem; line-height: 1.4;">حدد الإجابة أو الإجابات الصحيحة بناءً على المطلوب في كل سؤال، حيث قد يتطلب سؤال واحد اختيار أكثر من خيار.</span>
          </div>

          <div class="p-2 bg-light rounded-2 border">
              <div class="form-check d-flex align-items-center mb-0">
                  <input class="form-check-input border-secondary shadow-sm" type="checkbox" id="agreeCheckbox" style="width: 18px; height: 18px; margin-left: 10px; cursor: pointer;">
                  <label class="form-check-label fw-bold text-dark w-100" for="agreeCheckbox" style="cursor: pointer; font-size: 0.85rem; line-height: 1.4;">
                      قرأت التعليمات وأوافق على البدء.
                  </label>
              </div>
          </div>
      </div>
      <div class="modal-footer bg-light d-flex justify-content-between py-2 px-3 w-100">
        <button type="button" class="btn btn-sm btn-outline-secondary px-3 fw-bold" data-bs-dismiss="modal">إلغاء</button>
        <button type="button" class="btn btn-sm btn-success px-3 fw-bold" id="btn-confirm-start" disabled>ابدأ الاختبار <i class="bi bi-play-circle-fill ms-1"></i></button>
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
        
        // Default to 30 minutes if not set in DB
        if (!timeMin) {
            timeMin = 30;
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
