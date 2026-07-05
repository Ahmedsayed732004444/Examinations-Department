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
        <form action="{{ route('admin.coupons.store') }}" method="POST">
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

            {{-- Tiered Discounts --}}
            <div class="card border-primary border-opacity-25 bg-primary-subtle bg-opacity-10 mb-4">
                <div class="card-header bg-transparent border-0 py-3">
                    <h6 class="fw-bold mb-0 text-primary"><i class="bi bi-percent me-2"></i>نسب الخصم المتدرجة</h6>
                    <div class="text-muted small mt-1">حدد خصمًا مختلفًا لكل استخدام. مثال: الأول 100%، الثاني 50%، الثالث 10%</div>
                </div>
                <div class="card-body pt-0">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="discount_percentage" class="form-label fw-semibold">خصم الاستخدام الأول (%) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="discount_percentage" name="discount_percentage" value="{{ old('discount_percentage', 100) }}" min="0" max="100" required>
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="discount_percentage_2nd" class="form-label fw-semibold">خصم الاستخدام الثاني (%)</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="discount_percentage_2nd" name="discount_percentage_2nd" value="{{ old('discount_percentage_2nd') }}" min="0" max="100" placeholder="اتركه فارغاً لعدم التفعيل">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="discount_percentage_3rd" class="form-label fw-semibold">خصم الاستخدام الثالث (%)</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="discount_percentage_3rd" name="discount_percentage_3rd" value="{{ old('discount_percentage_3rd') }}" min="0" max="100" placeholder="اتركه فارغاً لعدم التفعيل">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Limits & Expiry --}}
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label for="assessments_limit" class="form-label fw-semibold">الحد الأقصى للاستخدام لكل مستخدم <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="assessments_limit" name="assessments_limit" value="{{ old('assessments_limit', 1) }}" min="1" required>
                    <div class="form-text">كم مرة يمكن لنفس الشخص (بالهوية/الجوال/الإيميل) استخدام هذا الكوبون؟</div>
                </div>
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
function toggleAssessmentPicker() {
    const all = document.getElementById('applies_to_all');
    const picker = document.getElementById('assessment-picker');
    picker.classList.toggle('d-none', all.checked);
}

function toggleUserPicker() {
    const all = document.getElementById('applies_to_all_users');
    const picker = document.getElementById('user-picker');
    picker.classList.toggle('d-none', all.checked);
}
</script>
@endpush
