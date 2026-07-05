@extends('layouts.admin')
@section('title', 'تعديل كوبون')
@section('page-title', 'إدارة الكوبونات')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark mb-0">تعديل الكوبون: {{ $coupon->title }}</h2>
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
        <form action="{{ route('admin.coupons.update', $coupon) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Basic Info --}}
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label for="title" class="form-label fw-semibold">اسم الكوبون <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $coupon->title) }}" required>
                </div>
                <div class="col-md-6">
                    <label for="code" class="form-label fw-semibold">رمز الكوبون <span class="text-danger">*</span></label>
                    <input type="text" class="form-control text-start" dir="ltr" id="code" name="code" value="{{ old('code', $coupon->code) }}" required>
                    <div class="form-text">الرمز الذي يدخله المستخدم. يجب أن يكون فريداً.</div>
                </div>
            </div>

            {{-- Tiered Discounts --}}
            <div class="card border-primary border-opacity-25 bg-primary-subtle bg-opacity-10 mb-4">
                <div class="card-header bg-transparent border-0 py-3">
                    <h6 class="fw-bold mb-0 text-primary"><i class="bi bi-percent me-2"></i>نسب الخصم المتدرجة</h6>
                    <div class="text-muted small mt-1">حدد خصمًا مختلفًا لكل استخدام للمستخدم نفسه (بناءً على الهوية/الجوال/الإيميل)</div>
                </div>
                <div class="card-body pt-0">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="discount_percentage" class="form-label fw-semibold">خصم الاستخدام الأول (%) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="discount_percentage" name="discount_percentage" value="{{ old('discount_percentage', $coupon->discount_percentage) }}" min="0" max="100" required>
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="discount_percentage_2nd" class="form-label fw-semibold">خصم الاستخدام الثاني (%)</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="discount_percentage_2nd" name="discount_percentage_2nd" value="{{ old('discount_percentage_2nd', $coupon->discount_percentage_2nd) }}" min="0" max="100" placeholder="فارغ = لا يوجد">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="discount_percentage_3rd" class="form-label fw-semibold">خصم الاستخدام الثالث (%)</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="discount_percentage_3rd" name="discount_percentage_3rd" value="{{ old('discount_percentage_3rd', $coupon->discount_percentage_3rd) }}" min="0" max="100" placeholder="فارغ = لا يوجد">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 p-3 bg-light rounded border">
                        <div class="text-muted small fw-semibold mb-1"><i class="bi bi-info-circle me-1"></i>معاينة التدرج الحالي:</div>
                        <ul class="mb-0 small ps-3">
                            <li>الاستخدام الأول: <strong class="text-success">{{ $coupon->discount_percentage }}%</strong></li>
                            <li>الاستخدام الثاني: <strong>{{ $coupon->discount_percentage_2nd !== null ? $coupon->discount_percentage_2nd . '%' : '— غير مفعّل' }}</strong></li>
                            <li>الاستخدام الثالث: <strong>{{ $coupon->discount_percentage_3rd !== null ? $coupon->discount_percentage_3rd . '%' : '— غير مفعّل' }}</strong></li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Limits & Expiry --}}
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label for="assessments_limit" class="form-label fw-semibold">الحد الأقصى للاستخدام لكل مستخدم <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="assessments_limit" name="assessments_limit" value="{{ old('assessments_limit', $coupon->assessments_limit) }}" min="1" required>
                    <div class="form-text">يُحتسب عبر جميع الحسابات التي تشارك نفس الهوية أو الجوال أو الإيميل.</div>
                </div>
                <div class="col-md-6">
                    <label for="expires_at" class="form-label fw-semibold">تاريخ انتهاء الصلاحية</label>
                    <input type="date" class="form-control" id="expires_at" name="expires_at" value="{{ old('expires_at', $coupon->expires_at?->format('Y-m-d')) }}">
                </div>
            </div>

            {{-- Assessment Scope --}}
            <div class="mb-4">
                <label class="form-label fw-semibold">نطاق تطبيق الكوبون</label>
                @php $appliesToAll = old('applies_to_all_assessments', $coupon->applies_to_all_assessments); @endphp
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="applies_to_all" name="applies_to_all_assessments" value="1" {{ $appliesToAll ? 'checked' : '' }} onchange="toggleAssessmentPicker()">
                    <label class="form-check-label fw-medium" for="applies_to_all">ينطبق على جميع المقاييس</label>
                </div>

                <div id="assessment-picker" class="{{ $appliesToAll ? 'd-none' : '' }}">
                    <label class="form-label text-muted small">اختر المقاييس التي ينطبق عليها الكوبون:</label>
                    <div class="border rounded p-3" style="max-height: 260px; overflow-y: auto;">
                        @foreach($assessments as $assessment)
                            @php
                                $checked = in_array($assessment->id, old('assessment_ids', $couponAssessmentIds));
                            @endphp
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="assessment_ids[]"
                                    id="assessment_{{ $assessment->id }}" value="{{ $assessment->id }}"
                                    {{ $checked ? 'checked' : '' }}>
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
                @php $appliesToAllUsers = old('applies_to_all_users', $coupon->applies_to_all_users); @endphp
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="applies_to_all_users" name="applies_to_all_users" value="1" {{ $appliesToAllUsers ? 'checked' : '' }} onchange="toggleUserPicker()">
                    <label class="form-check-label fw-medium" for="applies_to_all_users">صالح لجميع المستخدمين</label>
                </div>

                <div id="user-picker" class="{{ $appliesToAllUsers ? 'd-none' : '' }}">
                    <label class="form-label text-muted small">اختر الأشخاص المعينين:</label>
                    <div class="border rounded p-3" style="max-height: 260px; overflow-y: auto;">
                        @foreach($users as $user)
                            @php
                                $userChecked = in_array($user->id, old('permitted_user_ids', $couponPermittedUserIds ?? []));
                            @endphp
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="permitted_user_ids[]"
                                    id="user_{{ $user->id }}" value="{{ $user->id }}"
                                    {{ $userChecked ? 'checked' : '' }}>
                                <label class="form-check-label small" for="user_{{ $user->id }}">
                                    {{ $user->name }}
                                    <span class="text-muted">({{ $user->phone ?? $user->email }})</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Usage Stats --}}
            <div class="alert alert-light border mb-4">
                <div class="fw-semibold small mb-1"><i class="bi bi-bar-chart me-1"></i>إحصاءات الاستخدام الحالية:</div>
                @php
                    $totalUsages = $coupon->users->sum('pivot.used_count');
                    $uniqueUsers = $coupon->users->count();
                @endphp
                <div class="d-flex gap-4 small text-muted mt-2">
                    <span><i class="bi bi-people me-1"></i>عدد المستخدمين: <strong class="text-dark">{{ $uniqueUsers }}</strong></span>
                    <span><i class="bi bi-hash me-1"></i>إجمالي مرات الاستخدام: <strong class="text-dark">{{ $totalUsages }}</strong></span>
                </div>
            </div>

            {{-- Status --}}
            <div class="mb-4 form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active" value="1" {{ old('is_active', $coupon->is_active) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">الكوبون نشط (متاح للاستخدام)</label>
            </div>

            <button type="submit" class="btn btn-primary px-5">
                <i class="bi bi-save me-1"></i> تحديث الكوبون
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
