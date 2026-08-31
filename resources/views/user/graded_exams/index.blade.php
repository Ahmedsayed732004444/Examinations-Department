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
    font-size: 2rem;
    margin-bottom: 10px;
}

.page-subtitle {
    color: #64748b;
    font-size: 1rem;
}

.exam-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.exam-card:hover {
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    border-color: #cbd5e1;
}

.exam-info h3 {
    color: #1a2b56;
    font-weight: 700;
    font-size: 1.3rem;
    margin-bottom: 8px;
}

.exam-info p {
    color: #64748b;
    font-size: 0.95rem;
    margin-bottom: 15px;
    max-width: 600px;
}

.exam-meta {
    display: flex;
    gap: 20px;
    color: #94a3b8;
    font-size: 0.85rem;
}

.exam-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
}

.btn-start-exam {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: #ffffff;
    border: none;
    padding: 12px 25px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
}

.btn-start-exam:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
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
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="exams-list">
        @forelse($exams as $exam)
            <div class="exam-card">
                <div class="exam-info">
                    <h3>{{ $exam->title_ar }}</h3>
                    <p>{{ $exam->description_ar ?: 'لا يوجد وصف متوفر.' }}</p>
                    <div class="exam-meta">
                        <span><i class="bi bi-question-circle"></i> {{ $exam->total_questions }} سؤال</span>
                        @if($exam->time_limit_min)
                            <span><i class="bi bi-clock"></i> {{ $exam->time_limit_min }} دقيقة</span>
                        @endif
                    </div>
                </div>
                <div class="exam-action">
                    <form action="{{ route('user.graded_exams.start', $exam->id) }}" method="POST" id="form-start-{{ $exam->id }}">
                        @csrf
                        <button type="button" class="btn-start-exam btn-open-modal" data-id="{{ $exam->id }}" data-title="{{ $exam->title_ar }}" data-q="{{ $exam->total_questions }}" data-time="{{ $exam->time_limit_min }}">
                            بدء الاختبار <i class="bi bi-arrow-left"></i>
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="text-center py-5">
                <i class="bi bi-journal-x text-muted mb-3" style="font-size: 3rem;"></i>
                <h4 class="text-muted">لا توجد شهادات متوفرة حالياً</h4>
            </div>
        @endforelse
    </div>
</div>

<!-- Intro Modal -->
<div class="modal fade" id="examIntroModal" tabindex="-1" aria-labelledby="examIntroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title fw-bold text-primary" id="examIntroModalLabel">تأكيد بدء الاختبار</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
          <h4 class="fw-bold mb-3">الاختبار التجريبي للشهادة الاحترافية</h4>
          <h5 class="text-primary mb-4" id="modal-exam-title"></h5>
          
          <h6 class="fw-bold text-secondary border-bottom pb-2 mb-3">وصف الاختبار</h6>
          <p class="mb-4">اختبار تجريبي لقياس مدى استيعابك لمفاهيم التسويق الأساسية وتقييم جاهزيتك قبل التقدم للاختبار النهائي للشهادة.</p>
          
          <h6 class="fw-bold text-secondary border-bottom pb-2 mb-3">بيانات الاختبار</h6>
          <ul class="list-unstyled mb-4" style="line-height: 1.8;">
              <li><i class="bi bi-dot text-primary"></i> <strong>عدد الأسئلة:</strong> <span id="modal-exam-questions"></span> سؤالًا</li>
              <li><i class="bi bi-dot text-primary"></i> <strong>مدة الاختبار:</strong> <span id="modal-exam-time"></span></li>
              <li><i class="bi bi-dot text-primary"></i> <strong>درجة الاجتياز:</strong> 70%</li>
              <li><i class="bi bi-dot text-primary"></i> <strong>عدد المحاولات:</strong> مفتوح</li>
              <li><i class="bi bi-dot text-primary"></i> <strong>نوع الأسئلة:</strong> صح وخطأ واختيار من متعدد</li>
              <li><i class="bi bi-dot text-primary"></i> <strong>ظهور النتيجة:</strong> فور انتهاء الاختبار</li>
          </ul>

          <h6 class="fw-bold text-secondary border-bottom pb-2 mb-3">تعليمات الاختبار</h6>
          <ol class="mb-4" style="line-height: 1.8;">
              <li>اقرأ السؤال وجميع البدائل بعناية قبل الإجابة.</li>
              <li>قد يحتوي سؤال الاختيار من متعدد على <strong>إجابة صحيحة واحدة أو أكثر</strong>.</li>
              <li>إذا كان للسؤال أكثر من إجابة صحيحة، فسيتم تحديد <strong>عدد الإجابات المطلوب اختيارها</strong>.</li>
              <li>يمكنك التنقل بين الأسئلة ومراجعة إجاباتك قبل إنهاء الاختبار.</li>
              <li>تأكد من الإجابة عن جميع الأسئلة قبل الضغط على <strong>«إنهاء الاختبار»</strong>.</li>
              <li>هذا اختبار تجريبي للتدريب وقياس الجاهزية، وليس اختبار الشهادة النهائي المعتمد.</li>
          </ol>
          
          <div class="alert alert-warning py-2 mb-4">
              <strong><i class="bi bi-exclamation-triangle"></i> تنبيه:</strong><br>
              قد يحتوي سؤال الاختيار من متعدد على إجابة صحيحة واحدة أو أكثر. اقرأ السؤال والبدائل بعناية وحدد الإجابة أو الإجابات الصحيحة.
          </div>

          <h6 class="fw-bold text-secondary border-bottom pb-2 mb-3">إقرار المتدرب</h6>
          <div class="form-check">
              <input class="form-check-input border-secondary" type="checkbox" id="agreeCheckbox" style="transform: scale(1.2); margin-left: 10px;">
              <label class="form-check-label fw-bold cursor-pointer" for="agreeCheckbox" style="cursor: pointer;">
                  قرأت تعليمات الاختبار وفهمتها، وأوافق على بدء الاختبار.
              </label>
          </div>
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
        <button type="button" class="btn btn-success" id="btn-confirm-start" disabled>ابدأ الاختبار <i class="bi bi-play-circle ms-1"></i></button>
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
