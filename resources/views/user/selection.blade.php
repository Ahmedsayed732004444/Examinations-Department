@extends('layouts.user')
@section('title', 'اختر الخدمة')

@push('styles')
<style>
.selection-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: calc(100vh - 200px);
    padding: 40px 20px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.selection-title {
    color: #1a2b56;
    font-weight: 800;
    font-size: 2rem;
    margin-bottom: 10px;
    text-align: center;
}

.selection-subtitle {
    color: #64748b;
    font-size: 1rem;
    margin-bottom: 40px;
    text-align: center;
}

.options-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    max-width: 800px;
    width: 100%;
}

.option-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 40px 30px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    cursor: pointer;
    border: 2px solid transparent;
    text-decoration: none;
    color: inherit;
}

.option-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    border-color: #1a2b56;
}

.option-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2.5rem;
}

.assessments-icon {
    background: linear-gradient(135deg, #1a2b56 0%, #2d4a7c 100%);
    color: #ffffff;
}

.certificates-icon {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: #ffffff;
}

.option-title {
    color: #1a2b56;
    font-weight: 800;
    font-size: 1.4rem;
    margin-bottom: 10px;
}

.option-description {
    color: #64748b;
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 20px;
}

.option-features {
    text-align: right;
    margin-top: 20px;
}

.option-features li {
    color: #4a5568;
    font-size: 0.85rem;
    margin-bottom: 8px;
    padding-right: 25px;
    position: relative;
}

.option-features li::before {
    content: "✓";
    position: absolute;
    right: 0;
    color: #10b981;
    font-weight: bold;
}

.coming-soon-badge {
    background: #fbbf24;
    color: #1a2b56;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 700;
    display: inline-block;
    margin-top: 10px;
}

@media (max-width: 768px) {
    .selection-container {
        padding: 30px 15px;
        min-height: calc(100vh - 250px);
    }
    
    .selection-title {
        font-size: 1.5rem;
    }
    
    .options-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .option-card {
        padding: 30px 20px;
    }
}
</style>
@endpush

@section('content')
<div class="selection-container">
    <h1 class="selection-title">مرحباً بك في دار الرؤى</h1>
    <p class="selection-subtitle">اختر الخدمة التي تريدها للبدء</p>
    
    <div class="options-grid">
        <!-- Assessments Option -->
        <a href="{{ route('dashboard.assessments') }}" class="option-card">
            <div class="option-icon assessments-icon">
                <i class="bi bi-journal-check"></i>
            </div>
            <h3 class="option-title">المقاييس</h3>
            <p class="option-description">
                اكتشف قدراتك ومهاراتك من خلال مقاييس علمية معتمدة وتقارير تفصيلية
            </p>
            <ul class="option-features list-unstyled">
                <li>مقاييس شخصية ومهنية متنوعة</li>
                <li>تقارير مفصلة وشاملة</li>
                <li>نتائج فورية ودقيقة</li>
            </ul>
        </a>
        
        <!-- Professional Certificates Option -->
        <a href="{{ route('user.graded_exams.index') }}" class="option-card">
            <div class="option-icon certificates-icon">
                <i class="bi bi-award"></i>
            </div>
            <h3 class="option-title">الشهادات الاحترافية</h3>
            <p class="option-description">
                احصل على شهادات احترافية معتمدة تعزز مسارك المهني
            </p>
            <ul class="option-features list-unstyled">
                <li>شهادات معتمدة دولياً</li>
                <li>برامج تدريبية متخصصة</li>
                <li>اعتراف مهني واسع</li>
            </ul>
        </a>
    </div>
</div>
@endsection