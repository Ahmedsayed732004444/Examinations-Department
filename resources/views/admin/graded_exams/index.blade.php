@extends('layouts.admin')
@section('title', 'إدارة الشهادات والوحدات')
@section('page-title', 'إدارة الشهادات والوحدات')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0">الشهادات الاحترافية</h5>
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addExamModal">
        <i class="bi bi-plus-circle me-1"></i>إضافة شهادة جديدة
    </button>
</div>

<div class="row">
    @foreach($exams as $exam)
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="card-title fw-bold text-primary mb-0">{{ $exam->title_ar }}</h5>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu shadow-sm text-end">
                            <li><a class="dropdown-item btn-edit-exam" href="#" data-id="{{ $exam->id }}" data-title="{{ $exam->title_ar }}" data-desc="{{ $exam->description_ar }}" data-time="{{ $exam->time_limit_min }}" data-active="{{ $exam->is_active ? 1 : 0 }}"><i class="bi bi-pencil me-2"></i>تعديل الشهادة</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger btn-delete-exam" href="#" data-url="{{ route('admin.graded_exams.destroy', $exam->id) }}"><i class="bi bi-trash me-2"></i>حذف الشهادة</a></li>
                        </ul>
                    </div>
                </div>
                <p class="text-muted small mb-3" style="min-height: 40px;">{{ $exam->description_ar ?: 'لا يوجد وصف' }}</p>
                
                <div class="d-flex justify-content-between mb-3 small">
                    <span class="text-muted"><i class="bi bi-journal-text me-1"></i>{{ $exam->units_count }} وحدة</span>
                    <span class="text-muted"><i class="bi bi-question-circle me-1"></i>{{ $exam->questions_count }} سؤال</span>
                    <span class="badge {{ $exam->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $exam->is_active ? 'مفعل' : 'معطل' }}</span>
                </div>
                
                <hr>
                
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0 fw-semibold text-secondary" style="font-size: 0.85rem;">الوحدات الدراسية</h6>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary py-0 px-2 btn-settings me-1" data-id="{{ $exam->id }}" style="font-size: 0.75rem;">
                            <i class="bi bi-sliders"></i> إعدادات
                        </button>
                        <button class="btn btn-sm btn-outline-primary py-0 px-2 btn-add-unit" data-id="{{ $exam->id }}" style="font-size: 0.75rem;">
                            <i class="bi bi-plus"></i> إضافة وحدة
                        </button>
                    </div>
                </div>
                
                <div class="list-group list-group-flush small" style="max-height: 200px; overflow-y: auto;">
                    @forelse($exam->units as $unit)
                        <div class="list-group-item px-1 py-2 d-flex justify-content-between align-items-center">
                            <span class="text-truncate" title="{{ $unit->title_ar }}">{{ $unit->title_ar }}</span>
                            <div>
                                <button class="btn btn-sm text-primary p-0 mx-1 btn-edit-unit" data-id="{{ $unit->id }}" data-title="{{ $unit->title_ar }}" data-url="{{ route('admin.graded_exams.units.update', $unit->id) }}">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm text-danger p-0 btn-delete-unit" data-url="{{ route('admin.graded_exams.units.destroy', $unit->id) }}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-muted small py-2">لا توجد وحدات</div>
                    @endforelse
                </div>
                
            </div>
            <div class="card-footer bg-white border-top-0 pt-0 d-flex flex-column gap-2">
                <a href="{{ route('admin.graded_exams.questions.index', ['graded_exam_id' => $exam->id]) }}" class="btn btn-light btn-sm w-100">
                    <i class="bi bi-gear me-1"></i>إدارة بنك أسئلة الشهادة
                </a>
                <a href="{{ route('admin.graded_exams.preview', $exam->id) }}" class="btn btn-outline-primary btn-sm w-100">
                    <i class="bi bi-play-circle me-1"></i>اختبار الأسئلة (Preview)
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Add/Edit Exam Modal -->
<div class="modal fade" id="examModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold" id="examModalTitle">إضافة شهادة</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="e-id">
                <div class="mb-3">
                    <label class="form-label small fw-medium">اسم الشهادة *</label>
                    <input type="text" class="form-control" id="e-title">
                </div>
                <div class="mb-3">
                    <label class="form-label small fw-medium">الوصف</label>
                    <textarea class="form-control" id="e-desc" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label small fw-medium">مدة الاختبار (بالدقائق)</label>
                    <input type="number" class="form-control" id="e-time-limit" min="1" value="60" placeholder="مثال: 60 لساعة واحدة">
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="e-active" checked>
                    <label class="form-check-label small" for="e-active">مفعلة وتظهر للمستخدمين</label>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-primary" id="btn-save-exam">حفظ</button>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Unit Modal -->
<div class="modal fade" id="unitModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold" id="unitModalTitle">إضافة وحدة</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="u-exam-id">
                <input type="hidden" id="u-id">
                <input type="hidden" id="u-url">
                <div class="mb-3">
                    <label class="form-label small fw-medium">اسم الوحدة *</label>
                    <input type="text" class="form-control" id="u-title">
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-primary" id="btn-save-unit">حفظ</button>
            </div>
        </div>
    </div>
</div>

<!-- Settings Modal -->
<div class="modal fade" id="settingsModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold">إعدادات وضوابط الامتحان</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="s-exam-id">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small fw-medium">إجمالي الأسئلة في الجلسة</label>
                        <input type="number" class="form-control form-control-sm" id="s-total" min="1">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-medium">حد أسئلة "متعدد الإجابات"</label>
                        <input type="number" class="form-control form-control-sm" id="s-max-multi" min="0">
                    </div>
                    
                    <div class="col-12 mt-4 mb-1">
                        <h6 class="fw-semibold text-primary" style="font-size:0.85rem">نسبة الصعوبة المطلوبة (%)</h6>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label small fw-medium">سهل</label>
                        <input type="number" class="form-control form-control-sm pct-input" id="s-easy" min="0" max="100">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label small fw-medium">متوسط</label>
                        <input type="number" class="form-control form-control-sm pct-input" id="s-medium" min="0" max="100">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label small fw-medium">صعب</label>
                        <input type="number" class="form-control form-control-sm pct-input" id="s-hard" min="0" max="100">
                    </div>
                    
                    <div class="col-12 text-center mt-1">
                        <span id="s-total-pct" class="badge bg-secondary">المجموع: 100%</span>
                    </div>

                    <div class="col-12 mt-3 mb-1">
                        <h6 class="fw-semibold text-primary" style="font-size:0.85rem">قيود التكرار (لتجنب الأنماط)</h6>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-medium">أقصى تكرار لنفس موقع الإجابة</label>
                        <input type="number" class="form-control form-control-sm" id="s-max-ans" min="0" placeholder="مثال: 3">
                        <div class="form-text" style="font-size:0.7rem">ضع 0 للتعطيل</div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-medium">أقصى تكرار من نفس الوحدة</label>
                        <input type="number" class="form-control form-control-sm" id="s-max-unit" min="0" placeholder="مثال: 4">
                        <div class="form-text" style="font-size:0.7rem">ضع 0 للتعطيل</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-primary" id="btn-save-settings">حفظ الإعدادات</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Exam Logic
let isExamEdit = false;

$('[data-bs-target="#addExamModal"]').on('click', function() {
    isExamEdit = false;
    $('#examModalTitle').text('إضافة شهادة جديدة');
    $('#e-id').val('');
    $('#e-title').val('');
    $('#e-desc').val('');
    $('#e-time-limit').val('60'); // Default to 60 minutes
    $('#e-active').prop('checked', true);
    new bootstrap.Modal(document.getElementById('examModal')).show();
});

$('.btn-edit-exam').on('click', function(e) {
    e.preventDefault();
    isExamEdit = true;
    $('#examModalTitle').text('تعديل الشهادة');
    $('#e-id').val($(this).data('id'));
    $('#e-title').val($(this).data('title'));
    $('#e-desc').val($(this).data('desc'));
    $('#e-time-limit').val($(this).data('time'));
    $('#e-active').prop('checked', $(this).data('active') == 1);
    new bootstrap.Modal(document.getElementById('examModal')).show();
});

$('#btn-save-exam').on('click', function() {
    const id = $('#e-id').val();
    const payload = {
        title_ar: $('#e-title').val().trim(),
        description_ar: $('#e-desc').val().trim(),
        time_limit_min: $('#e-time-limit').val() ? parseInt($('#e-time-limit').val()) : null,
        is_active: $('#e-active').is(':checked') ? 1 : 0
    };
    
    if(!payload.title_ar) {
        showAlert('اسم الشهادة مطلوب', 'warning');
        return;
    }
    
    const url = isExamEdit ? `{{ url('admin/graded-exams') }}/${id}` : `{{ route('admin.graded_exams.store') }}`;
    const method = isExamEdit ? 'PUT' : 'POST';
    
    const btn = $(this);
    setLoading(btn, true);
    
    $.ajax({
        url: url,
        method: method,
        contentType: 'application/json',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: JSON.stringify(payload),
        success: function(res) {
            showAlert(res.message, 'success');
            setTimeout(() => location.reload(), 1000);
        },
        error: function(xhr) {
            setLoading(btn, false);
            showAlert('خطأ أثناء الحفظ', 'danger');
        }
    });
});

$('.btn-delete-exam').on('click', function(e) {
    e.preventDefault();
    confirmDelete('سيتم حذف الشهادة. هل أنت متأكد؟', $(this).data('url'), () => location.reload());
});


// Unit Logic
let isUnitEdit = false;

$('.btn-add-unit').on('click', function() {
    isUnitEdit = false;
    $('#unitModalTitle').text('إضافة وحدة جديدة');
    $('#u-exam-id').val($(this).data('id'));
    $('#u-id').val('');
    $('#u-title').val('');
    new bootstrap.Modal(document.getElementById('unitModal')).show();
});

$('.btn-edit-unit').on('click', function(e) {
    e.preventDefault();
    isUnitEdit = true;
    $('#unitModalTitle').text('تعديل الوحدة');
    $('#u-id').val($(this).data('id'));
    $('#u-title').val($(this).data('title'));
    $('#u-url').val($(this).data('url'));
    new bootstrap.Modal(document.getElementById('unitModal')).show();
});

$('#btn-save-unit').on('click', function() {
    const title = $('#u-title').val().trim();
    if(!title) {
        showAlert('اسم الوحدة مطلوب', 'warning');
        return;
    }
    
    const examId = $('#u-exam-id').val();
    const updateUrl = $('#u-url').val();
    
    const url = isUnitEdit ? updateUrl : `{{ url('admin/graded-exams') }}/${examId}/units`;
    const method = isUnitEdit ? 'PUT' : 'POST';
    
    const btn = $(this);
    setLoading(btn, true);
    
    $.ajax({
        url: url,
        method: method,
        contentType: 'application/json',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: JSON.stringify({ title_ar: title }),
        success: function(res) {
            showAlert(res.message, 'success');
            setTimeout(() => location.reload(), 1000);
        },
        error: function(xhr) {
            setLoading(btn, false);
            showAlert('خطأ أثناء الحفظ', 'danger');
        }
    });
});

$('.btn-delete-unit').on('click', function(e) {
    e.preventDefault();
    confirmDelete('هل أنت متأكد من حذف هذه الوحدة؟', $(this).data('url'), () => location.reload());
});

// Settings Logic
$('.btn-settings').on('click', function() {
    const examId = $(this).data('id');
    $('#s-exam-id').val(examId);
    
    const btn = $(this);
    setLoading(btn, true);
    
    $.get(`{{ url('admin/graded-exams') }}/${examId}/settings`, function(res) {
        setLoading(btn, false);
        if(res.success) {
            $('#s-total').val(res.settings.total_questions);
            $('#s-max-multi').val(res.settings.max_multi_correct_questions);
            $('#s-easy').val(parseFloat(res.settings.easy_percentage));
            $('#s-medium').val(parseFloat(res.settings.medium_percentage));
            $('#s-hard').val(parseFloat(res.settings.hard_percentage));
            $('#s-max-ans').val(res.settings.max_consecutive_same_answer || 0);
            $('#s-max-unit').val(res.settings.max_consecutive_same_unit || 0);
            updatePctBadge();
            new bootstrap.Modal(document.getElementById('settingsModal')).show();
        }
    }).fail(function() {
        setLoading(btn, false);
        showAlert('خطأ في جلب الإعدادات', 'danger');
    });
});

$('.pct-input').on('input', updatePctBadge);

function updatePctBadge() {
    const easy = parseFloat($('#s-easy').val()) || 0;
    const med = parseFloat($('#s-medium').val()) || 0;
    const hard = parseFloat($('#s-hard').val()) || 0;
    const total = easy + med + hard;
    
    const badge = $('#s-total-pct');
    badge.text(`المجموع: ${total}%`);
    
    if(Math.abs(total - 100) > 0.01) {
        badge.removeClass('bg-secondary bg-success').addClass('bg-danger');
    } else {
        badge.removeClass('bg-secondary bg-danger').addClass('bg-success');
    }
}

$('#btn-save-settings').on('click', function() {
    const examId = $('#s-exam-id').val();
    
    const payload = {
        total_questions: parseInt($('#s-total').val()) || 0,
        max_multi_correct_questions: parseInt($('#s-max-multi').val()) || 0,
        easy_percentage: parseFloat($('#s-easy').val()) || 0,
        medium_percentage: parseFloat($('#s-medium').val()) || 0,
        hard_percentage: parseFloat($('#s-hard').val()) || 0,
        max_consecutive_same_answer: parseInt($('#s-max-ans').val()) || null,
        max_consecutive_same_unit: parseInt($('#s-max-unit').val()) || null,
    };
    
    if(Math.abs((payload.easy_percentage + payload.medium_percentage + payload.hard_percentage) - 100) > 0.01) {
        showAlert('يجب أن يكون مجموع النسب 100% تماماً', 'warning');
        return;
    }
    
    const btn = $(this);
    setLoading(btn, true);
    
    $.ajax({
        url: `{{ url('admin/graded-exams') }}/${examId}/settings`,
        method: 'PUT',
        contentType: 'application/json',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: JSON.stringify(payload),
        success: function(res) {
            setLoading(btn, false);
            showAlert(res.message, 'success');
            bootstrap.Modal.getInstance(document.getElementById('settingsModal')).hide();
        },
        error: function(xhr) {
            setLoading(btn, false);
            const msg = xhr.responseJSON?.message || 'خطأ أثناء الحفظ';
            showAlert(msg, 'danger');
        }
    });
});

</script>
@endpush
