@extends('layouts.admin')
@section('title', 'الكوبونات')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>الكوبونات</h2>
    <a href="{{ route('admin.coupons.create') }}" class="btn btn-primary">
        <i class="bi bi-plus"></i> إضافة كوبون
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>اسم الكوبون</th>
                    <th>عدد المقاييس المتاحة</th>
                    <th>تاريخ الانتهاء</th>
                    <th>الحالة</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($coupons as $coupon)
                <tr>
                    <td class="fw-bold">{{ $coupon->title }}</td>
                    <td>{{ $coupon->assessments_limit }}</td>
                    <td>
                        @if($coupon->expires_at)
                            <span class="{{ $coupon->expires_at->isPast() ? 'text-danger' : 'text-success' }}">
                                {{ $coupon->expires_at->format('Y-m-d') }}
                            </span>
                        @else
                            <span class="text-muted">مفتوح</span>
                        @endif
                    </td>
                    <td>
                        @if($coupon->is_active)
                            <span class="badge bg-success">نشط</span>
                        @else
                            <span class="badge bg-danger">غير نشط</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.coupons.edit', $coupon) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.coupons.destroy', $coupon) }}" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذا الكوبون؟');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">لا توجد كوبونات مضافة بعد.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        
        <div class="mt-3">
            {{ $coupons->links() }}
        </div>
    </div>
</div>
@endsection
