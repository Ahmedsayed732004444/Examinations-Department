<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب — دار الرؤى</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center min-vh-100">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-primary"><i class="bi bi-stars me-2"></i>دار الرؤى</h2>
                <p class="text-muted">إنشاء حساب جديد</p>
            </div>
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4 fw-semibold">تسجيل حساب جديد</h5>

                    @if($errors->any())
                        <div class="alert alert-danger py-2">
                            <ul class="mb-0 small">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label small fw-medium">الاسم الكامل</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" placeholder="الاسم الكامل" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-medium">البريد الإلكتروني</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" placeholder="example@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-medium">رقم الجوال</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                value="{{ old('phone') }}" placeholder="05xxxxxxxx" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-medium">رقم الهوية الوطنية / الإقامة</label>
                            <input type="text" name="national_id" class="form-control @error('national_id') is-invalid @enderror"
                                value="{{ old('national_id') }}" placeholder="1xxxxxxxxx" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-medium">كلمة المرور</label>
                            <input type="password" name="password" class="form-control" placeholder="8 أحرف على الأقل" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-medium">تأكيد كلمة المرور</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="أعد كتابة كلمة المرور" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-person-plus me-1"></i>إنشاء الحساب
                        </button>
                    </form>
                    <hr>
                    <div class="text-center small">
                        لديك حساب بالفعل؟
                        <a href="{{ route('login') }}" class="text-primary text-decoration-none fw-medium">سجّل دخولك</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
