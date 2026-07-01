@extends('layouts.admin')
@section('title', 'إضافة كوبون')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>إضافة كوبون جديد</h2>
    <a href="{{ route('admin.coupons.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-right"></i> عودة
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('admin.coupons.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="title" class="form-label">اسم الكوبون <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                <div class="form-text">مثال: مبادرة التميز، أو عرض اليوم الوطني. سيظهر هذا الاسم للمستخدم.</div>
            </div>

            <div class="mb-3">
                <label for="assessments_limit" class="form-label">عدد المقاييس المسموحة لكل مستخدم <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="assessments_limit" name="assessments_limit" value="{{ old('assessments_limit', 1) }}" min="1" required>
            </div>

            <div class="mb-3">
                <label for="expires_at" class="form-label">تاريخ انتهاء صلاحية الكوبون</label>
                <input type="date" class="form-control" id="expires_at" name="expires_at" value="{{ old('expires_at') }}">
                <div class="form-text">اختياري. بعد هذا التاريخ لن يظهر الكوبون للمستخدمين.</div>
            </div>

            <div class="mb-4 form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">الكوبون نشط (متاح للاستخدام)</label>
            </div>

            <button type="submit" class="btn btn-primary px-4">حفظ الكوبون</button>
        </form>
    </div>
</div>
@endsection
