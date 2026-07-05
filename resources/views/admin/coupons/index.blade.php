@extends('layouts.admin')
@section('title', 'الكوبونات')
@section('page-title', 'إدارة الكوبونات')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark mb-0"><i class="bi bi-ticket-perforated me-2 text-primary"></i>الكوبونات</h2>
    <a href="{{ route('admin.coupons.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i> إضافة كوبون
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>اسم الكوبون</th>
                        <th>رمز الكوبون</th>
                        <th>الخصم المتدرج</th>
                        <th class="text-center">الحد الأقصى</th>
                        <th>النطاق</th>
                        <th>الصلاحية</th>
                        <th class="text-center">الحالة</th>
                        <th class="text-center">الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($coupons as $coupon)
                    <tr>
                        <td class="fw-bold">{{ $coupon->title }}</td>
                        <td>
                            <code class="bg-light border rounded px-2 py-1 text-dark small">{{ $coupon->code ?? '—' }}</code>
                        </td>
                        <td>
                            <div class="d-flex gap-1 flex-wrap">
                                <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill">{{ $coupon->discount_percentage }}%</span>
                                @if($coupon->discount_percentage_2nd !== null)
                                    <span class="badge bg-warning-subtle text-warning border border-warning-subtle rounded-pill">{{ $coupon->discount_percentage_2nd }}%</span>
                                @endif
                                @if($coupon->discount_percentage_3rd !== null)
                                    <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle rounded-pill">{{ $coupon->discount_percentage_3rd }}%</span>
                                @endif
                            </div>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-2">{{ $coupon->assessments_limit }}</span>
                        </td>
                        <td>
                            @if($coupon->applies_to_all_assessments)
                                <span class="text-muted small"><i class="bi bi-globe2 me-1"></i>جميع المقاييس</span>
                            @else
                                <span class="text-muted small"><i class="bi bi-funnel me-1"></i>مقاييس محددة ({{ $coupon->assessments()->count() }})</span>
                            @endif
                        </td>
                        <td>
                            @if($coupon->expires_at)
                                <span class="{{ $coupon->expires_at->isPast() ? 'text-danger' : 'text-success' }} small">
                                    <i class="bi bi-calendar3 me-1"></i>{{ $coupon->expires_at->format('Y-m-d') }}
                                </span>
                            @else
                                <span class="text-muted small"><i class="bi bi-infinity me-1"></i>مفتوح</span>
                            @endif
                        </td>
                        <td class="text-center">
                            @if($coupon->is_active && (!$coupon->expires_at || !$coupon->expires_at->isPast()))
                                <span class="badge bg-success rounded-pill">نشط</span>
                            @elseif($coupon->expires_at && $coupon->expires_at->isPast())
                                <span class="badge bg-secondary rounded-pill">منتهي الصلاحية</span>
                            @else
                                <span class="badge bg-danger rounded-pill">متوقف</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('admin.coupons.edit', $coupon) }}" class="btn btn-sm btn-outline-primary me-1" title="تعديل">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.coupons.destroy', $coupon) }}" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذا الكوبون؟');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" title="حذف"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted py-5">
                            <i class="bi bi-ticket display-4 d-block mb-3 text-secondary"></i>
                            لا توجد كوبونات مضافة بعد.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($coupons->hasPages())
            <div class="p-3 border-top">
                {{ $coupons->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
