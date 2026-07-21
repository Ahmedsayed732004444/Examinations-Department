@extends('layouts.admin')
@section('title', 'إضافة كوبون')
@section('page-title', 'إدارة الكوبونات')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark mb-0">إضافة كوبون جديد</h2>
    <a href="{{ route('admin.coupons.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-right"></i> عودة
    </a>
</div>

@if($errors->any())
    <div class="alert alert-danger mb-4">
        <ul class="mb-0 small">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <form action="{{ route('admin.coupons.store') }}" method="POST" id="coupon-form">
            @csrf

            {{-- Basic Info --}}
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label for="title" class="form-label fw-semibold">اسم الكوبون <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required placeholder="مثال: مبادرة التميز">
                    <div class="form-text">يظهر هذا الاسم للمستخدم عند التحقق من الكوبون.</div>
                </div>
                <div class="col-md-6">
                    <label for="code" class="form-label fw-semibold">رمز الكوبون <span class="text-danger">*</span></label>
                    <input type="text" class="form-control text-start" dir="ltr" id="code" name="code" value="{{ old('code') }}" required placeholder="مثال: PROMO100">
                    <div class="form-text">الرمز الذي يدخله المستخدم. يجب أن يكون فريداً.</div>
                </div>
            </div>

            {{-- STEP 1: عدد مرات الاستخدام - يؤثر على حقول الخصم --}}
            <div class="card border-warning border-opacity-50 mb-4" style="background: #fffdf0;">
                <div class="card-header bg-transparent border-0 py-3">
                    <h6 class="fw-bold mb-0 text-warning-emphasis">
                        <i class="bi bi-1-circle-fill me-2 text-warning"></i>
                        الخطوة الأولى: حدد عدد مرات الاستخدام المسموحة لكل مستخدم (اختياري)
                    </h6>
                    <div class="text-muted small mt-1">اتركه فارغاً إذا كنت تريد استخداماً غير محدود بنفس نسبة الخصم.</div>
                </div>
                <div class="card-body pt-0">
                    <div class="row align-items-center g-3">
                        <div class="col-md-5">
                            <label for="assessments_limit" class="form-label fw-semibold">
                                عدد مرات الاستخدام
                            </label>
                            <input type="number"
                                   class="form-control form-control-lg fw-bold text-center"
                                   id="assessments_limit"
                                   name="assessments_limit"
                                   value="{{ old('assessments_limit') }}"
                                   min="1" max="10"
                                   placeholder="اتركه فارغاً لعدد غير محدود"
                                   oninput="renderDiscountFields(this.value)">
                            <div class="form-text">اتركه فارغاً للاستخدام غير المحدود، أو حدد عدداً (1-10) لخصم متدرج.</div>
                        </div>
                        <div class="col-md-7">
                            <div class="p-3 rounded border bg-light text-muted small">
                                <i class="bi bi-info-circle me-1 text-primary"></i>
                                <strong>غير محدود:</strong> اترك الحقل فارغاً ليستفيد المستخدم من نسبة الخصم دائماً بدون حد أقصى.<br>
                                <strong>محدد:</strong> أدخل عدداً (مثال: 3) لربط الكوبون بتدرج خصم محدد بعدد المرات.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- STEP 2: نسب الخصم - تظهر ديناميكياً --}}
            <div class="card border-primary border-opacity-25 mb-4" style="background: #f0f4ff;">
                <div class="card-header bg-transparent border-0 py-3">
                    <h6 class="fw-bold mb-0 text-primary">
                        <i class="bi bi-2-circle-fill me-2 text-primary"></i>
                        الخطوة الثانية: حدد نسبة الخصم لكل مرة استخدام
                    </h6>
                    <div class="text-muted small mt-1">حدد خصماً مختلفاً لكل مرة استخدام. مثال: الأولى 100%، الثانية 50%، الثالثة 10%</div>
                </div>
                <div class="card-body pt-0">
                    <div class="row g-3" id="discount-fields-container">
                        {{-- تُنشأ ديناميكياً بالـ JavaScript --}}
                    </div>

                    {{-- معاينة حية --}}
                    <div id="discount-preview" class="mt-3 p-3 bg-white rounded border d-none">
                        <div class="text-muted small fw-semibold mb-2">
                            <i class="bi bi-eye me-1 text-primary"></i>معاينة التدرج:
                        </div>
                        <div id="preview-content" class="d-flex flex-wrap gap-2"></div>
                    </div>
                </div>
            </div>

            {{-- Expiry --}}
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label for="expires_at" class="form-label fw-semibold">تاريخ انتهاء الصلاحية</label>
                    <input type="date" class="form-control" id="expires_at" name="expires_at" value="{{ old('expires_at') }}">
                    <div class="form-text">اختياري. بعد هذا التاريخ لن يكون الكوبون صالحاً.</div>
                </div>
            </div>

            {{-- Assessment Scope --}}
            <div class="mb-4">
                <label class="form-label fw-semibold">نطاق تطبيق الكوبون</label>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="applies_to_all" name="applies_to_all_assessments" value="1" {{ old('applies_to_all_assessments', true) ? 'checked' : '' }} onchange="toggleAssessmentPicker()">
                    <label class="form-check-label fw-medium" for="applies_to_all">ينطبق على جميع المقاييس</label>
                </div>
                <div id="assessment-picker" class="{{ old('applies_to_all_assessments', true) ? 'd-none' : '' }}">
                    <label class="form-label text-muted small">اختر المقاييس التي ينطبق عليها الكوبون:</label>
                    <div class="border rounded p-3" style="max-height: 260px; overflow-y: auto;">
                        @foreach($assessments as $assessment)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="assessment_ids[]"
                                    id="assessment_{{ $assessment->id }}" value="{{ $assessment->id }}"
                                    {{ in_array($assessment->id, old('assessment_ids', [])) ? 'checked' : '' }}>
                                <label class="form-check-label small" for="assessment_{{ $assessment->id }}">
                                    {{ $assessment->title_ar }}
                                    <span class="text-muted">({{ $assessment->category }})</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- User Scope --}}
            <div class="mb-4">
                <label class="form-label fw-semibold">المستخدمين المسموح لهم</label>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="applies_to_all_users" name="applies_to_all_users" value="1" {{ old('applies_to_all_users', true) ? 'checked' : '' }} onchange="toggleUserPicker()">
                    <label class="form-check-label fw-medium" for="applies_to_all_users">صالح لجميع المستخدمين</label>
                </div>
                <div id="user-picker" class="{{ old('applies_to_all_users', true) ? 'd-none' : '' }}">
                    <label class="form-label text-muted small">اختر الأشخاص المعينين (يمكن البحث بالاسم/الجوال):</label>
                    <div class="border rounded p-3" style="max-height: 260px; overflow-y: auto;">
                        @foreach($users as $user)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="permitted_user_ids[]"
                                    id="user_{{ $user->id }}" value="{{ $user->id }}"
                                    {{ in_array($user->id, old('permitted_user_ids', [])) ? 'checked' : '' }}>
                                <label class="form-check-label small" for="user_{{ $user->id }}">
                                    {{ $user->name }}
                                    <span class="text-muted">({{ $user->phone ?? $user->email }})</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Status --}}
            <div class="mb-4 form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">الكوبون نشط (متاح للاستخدام)</label>
            </div>

            <button type="submit" class="btn btn-primary px-5">
                <i class="bi bi-save me-1"></i> حفظ الكوبون
            </button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
// ترتيب الأرقام بالعربية
const ordinals = ['الأولى','الثانية','الثالثة','الرابعة','الخامسة','السادسة','السابعة','الثامنة','التاسعة','العاشرة'];
const fieldNames = ['discount_percentage','discount_percentage_2nd','discount_percentage_3rd',
                    'discount_percentage_4th','discount_percentage_5th','discount_percentage_6th',
                    'discount_percentage_7th','discount_percentage_8th','discount_percentage_9th','discount_percentage_10th'];
const oldValues = {
    discount_percentage:       '{{ old("discount_percentage", 100) }}',
    discount_percentage_2nd:   '{{ old("discount_percentage_2nd", "") }}',
    discount_percentage_3rd:   '{{ old("discount_percentage_3rd", "") }}',
};

const badgeColors = ['success','primary','warning','info','secondary','dark','danger','success','primary','warning'];

function renderDiscountFields(count) {
    count = parseInt(count) || 1;
    count = Math.max(1, Math.min(10, count));

    const container = document.getElementById('discount-fields-container');
    const preview   = document.getElementById('discount-preview');
    const previewContent = document.getElementById('preview-content');

    container.innerHTML = '';
    previewContent.innerHTML = '';

    // حساب عرض الأعمدة
    let colClass = 'col-md-4';
    if (count === 1) colClass = 'col-md-4';
    else if (count === 2) colClass = 'col-md-6';
    else if (count <= 4) colClass = 'col-md-3';
    else colClass = 'col-md-4';

    for (let i = 0; i < count; i++) {
        const name  = fieldNames[i] ?? `discount_percentage_${i + 1}`;
        const label = `الاستخدام ${ordinals[i]}`;
        const isFirst = i === 0;
        const savedVal = oldValues[name] ?? '';
        const badgeColor = badgeColors[i];

        const col = document.createElement('div');
        col.className = colClass;
        col.innerHTML = `
            <div class="position-relative">
                <label for="${name}" class="form-label fw-semibold d-flex align-items-center gap-2">
                    <span class="badge bg-${badgeColor} rounded-pill" style="min-width:26px;">${i + 1}</span>
                    ${label}
                    ${isFirst ? '<span class="text-danger">*</span>' : ''}
                </label>
                <div class="input-group">
                    <input type="number"
                           class="form-control discount-input"
                           id="${name}"
                           name="${name}"
                           value="${savedVal || (isFirst ? 100 : '')}"
                           min="0" max="100"
                           ${isFirst ? 'required' : ''}
                           placeholder="${isFirst ? '100' : 'مثال: 50'}"
                           data-index="${i}"
                           oninput="updatePreview()">
                    <span class="input-group-text fw-bold">%</span>
                </div>
                ${isFirst ? '<div class="form-text text-success fw-medium"><i class="bi bi-check-circle me-1"></i>مطلوب</div>' : '<div class="form-text">اختياري</div>'}
            </div>`;
        container.appendChild(col);
    }

    preview.classList.toggle('d-none', count < 1);
    updatePreview();
}

function updatePreview() {
    const inputs = document.querySelectorAll('.discount-input');
    const previewContent = document.getElementById('preview-content');
    previewContent.innerHTML = '';

    inputs.forEach((input, i) => {
        const val = input.value;
        const badge = document.createElement('span');
        const color = badgeColors[i];
        badge.className = `badge bg-${color}-subtle text-${color}-emphasis border border-${color}-subtle px-3 py-2 rounded-pill fs-6`;
        badge.style.fontFamily = 'monospace';
        badge.innerHTML = `<span class="text-muted small ms-1">المرة ${ordinals[i]}:</span> ${val !== '' ? val + '%' : '—'}`;
        previewContent.appendChild(badge);
    });
}

function toggleAssessmentPicker() {
    const all = document.getElementById('applies_to_all');
    document.getElementById('assessment-picker').classList.toggle('d-none', all.checked);
}

function toggleUserPicker() {
    const all = document.getElementById('applies_to_all_users');
    document.getElementById('user-picker').classList.toggle('d-none', all.checked);
}

// تهيئة أولية
const initCount = parseInt(document.getElementById('assessments_limit').value) || 1;
renderDiscountFields(initCount);
</script>
@endpush
