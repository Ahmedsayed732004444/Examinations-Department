@extends('layouts.admin')
@section('title', 'إعدادات الإحصائيات')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h3 text-gray-800 fw-bold">إعدادات الإحصائيات</h2>
</div>

<div class="card shadow border-0 rounded-4 mb-4">
    <div class="card-body p-4">
        <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf
            @method('PUT')

            <h5 class="fw-bold mb-4 text-primary"><i class="bi bi-graph-up me-2"></i> إحصائيات لوحة تحكم المستخدم</h5>
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">مستخدم من الأفراد والجهات</label>
                    <input type="text" name="stat_users" class="form-control" value="{{ old('stat_users', $settings['stat_users'] ?? '25,000+') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">اختبار ومقياس تم إنجازه</label>
                    <input type="text" name="stat_exams" class="form-control" value="{{ old('stat_exams', $settings['stat_exams'] ?? '10,000+') }}" required>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">مقياس مهني وشخصي معتمد</label>
                    <input type="text" name="stat_assessments" class="form-control" value="{{ old('stat_assessments', $settings['stat_assessments'] ?? '150+') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">مجال ومهارة مختلفة</label>
                    <input type="text" name="stat_fields" class="form-control" value="{{ old('stat_fields', $settings['stat_fields'] ?? '50+') }}" required>
                </div>
            </div>

            <hr class="my-4">

            <div class="text-end">
                <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">
                    <i class="bi bi-save me-1"></i> حفظ التعديلات
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
