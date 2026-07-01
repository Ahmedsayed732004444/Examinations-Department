@extends('layouts.admin')
@section('title', 'إدارة التوصيات')
@section('page-title', 'إدارة التوصيات')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="text-muted small mb-0">ضع توصية لكل مستوى (مرتفع / متوسط / منخفض) لكل مقياس.</p>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#recModal">
        <i class="bi bi-plus-circle me-1"></i>إضافة توصية
    </button>
</div>

@forelse($assessments as $assessment)
    @php $recs = $recommendations[$assessment->id] ?? collect(); @endphp
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-transparent border-0 py-3">
            <h6 class="mb-0 fw-semibold">
                <i class="bi bi-collection text-primary me-2"></i>{{ $assessment->title_ar }}
                <span class="text-muted fw-normal small ms-2">{{ $assessment->category }}</span>
            </h6>
        </div>
        <div class="card-body px-4 pb-4 pt-0">
            @if($recs->isEmpty())
                <p class="text-muted small mb-0">لا توجد توصيات لهذا المقياس بعد.</p>
            @else
                <div class="row g-3">
                    @foreach($recs as $rec)
                        @php
                            $lc = match($rec->level) { 'high'=>'success', 'medium'=>'warning', default=>'danger' };
                            $ll = match($rec->level) { 'high'=>'مرتفع', 'medium'=>'متوسط', default=>'منخفض' };
                        @endphp
                        <div class="col-md-4">
                            <div class="border border-{{ $lc }} rounded-3 p-3 h-100">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-{{ $lc }}-subtle text-{{ $lc }} border border-{{ $lc }}-subtle">{{ $ll }}</span>
                                    <button class="btn btn-sm btn-outline-danger btn-delete-rec"
                                            data-id="{{ $rec->id }}"
                                            data-url="{{ route('admin.recommendations.destroy', $rec->id) }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                                <p class="small text-muted mb-2">{{ Str::limit($rec->description_ar, 100) }}</p>
                                <div class="small text-muted">
                                    <span class="badge bg-light text-dark border me-1">حد أعلى: {{ $rec->high_threshold }}</span>
                                    <span class="badge bg-light text-dark border">حد أدنى: {{ $rec->low_threshold }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@empty
    <div class="alert alert-info"><i class="bi bi-info-circle me-2"></i>لا توجد مقاييس بعد.</div>
@endforelse

<!-- Recommendation Modal -->
<div class="modal fade" id="recModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold">إضافة / تحديث توصية</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small fw-medium">المقياس *</label>
                        <select class="form-select" id="r-assessment_id">
                            <option value="">اختر المقياس</option>
                            @foreach($assessments as $a)
                                <option value="{{ $a->id }}">{{ $a->title_ar }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-medium">المستوى *</label>
                        <select class="form-select" id="r-level">
                            <option value="">اختر المستوى</option>
                            <option value="high">مرتفع</option>
                            <option value="medium">متوسط</option>
                            <option value="low">منخفض</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-medium">حد الدرجة المرتفعة *</label>
                        <input type="number" class="form-control" id="r-high_threshold" placeholder="مثال: 40" min="0">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-medium">حد الدرجة المنخفضة *</label>
                        <input type="number" class="form-control" id="r-low_threshold" placeholder="مثال: 20" min="0">
                    </div>
                    <div class="col-12">
                        <label class="form-label small fw-medium">وصف نتيجة هذا المستوى *</label>
                        <textarea class="form-control" id="r-description_ar" rows="3"
                            placeholder="وصف يظهر للمستخدم بناءً على مستواه..."></textarea>
                    </div>
                    <div class="col-12">
                        <label class="form-label small fw-medium">البرامج والتوصيات المقترحة *</label>
                        <textarea class="form-control" id="r-programs_ar" rows="5"
                            placeholder="برنامج أول&#10;برنامج ثانٍ&#10;برنامج ثالث&#10;(برنامج في كل سطر)"></textarea>
                        <div class="form-text">أدخل كل برنامج أو توصية في سطر منفصل.</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-primary" id="btn-save-rec">
                    <span class="btn-text"><i class="bi bi-save me-1"></i>حفظ التوصية</span>
                    <span class="spinner-border spinner-border-sm d-none"></span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$('#btn-save-rec').on('click', function() {
    const btn = $(this);
    const payload = {
        assessment_id:  $('#r-assessment_id').val(),
        level:          $('#r-level').val(),
        description_ar: $('#r-description_ar').val().trim(),
        programs_ar:    $('#r-programs_ar').val().trim(),
        high_threshold: parseInt($('#r-high_threshold').val()) || 0,
        low_threshold:  parseInt($('#r-low_threshold').val()) || 0,
    };

    if (!payload.assessment_id || !payload.level || !payload.description_ar) {
        showAlert('يرجى ملء جميع الحقول المطلوبة.', 'warning'); return;
    }

    setLoading(btn, true);
    $.ajax({
        url: '{{ route('admin.recommendations.store') }}',
        method: 'POST', contentType: 'application/json',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: JSON.stringify(payload),
        success: function(res) {
            setLoading(btn, false);
            bootstrap.Modal.getInstance($('#recModal')).hide();
            showAlert(res.message, 'success');
            setTimeout(() => location.reload(), 1000);
        },
        error: function(xhr) {
            setLoading(btn, false);
            showAlert(xhr.responseJSON?.message || 'حدث خطأ.', 'danger');
        }
    });
});

$(document).on('click', '.btn-delete-rec', function() {
    const url = $(this).data('url');
    confirmDelete('هل تريد حذف هذه التوصية؟', url, () => location.reload());
});
</script>
@endpush
