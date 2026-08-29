@extends('layouts.user')
@section('title', 'قريباً')

@push('styles')
<style>
.coming-soon-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: calc(100vh - 200px);
    padding: 40px 20px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    text-align: center;
}

.coming-soon-icon {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
    font-size: 3rem;
    color: #ffffff;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.4);
    }
    50% {
        transform: scale(1.05);
        box-shadow: 0 0 0 20px rgba(245, 158, 11, 0);
    }
}

.coming-soon-title {
    color: #1a2b56;
    font-weight: 800;
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.coming-soon-description {
    color: #64748b;
    font-size: 1.1rem;
    max-width: 500px;
    line-height: 1.6;
    margin-bottom: 30px;
}

.back-btn {
    background: #1a2b56;
    color: #ffffff;
    border: none;
    padding: 12px 30px;
    border-radius: 10px;
    font-weight: 700;
    font-size: 1rem;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.back-btn:hover {
    background: #0f172a;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(26, 43, 86, 0.3);
}

.features-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    max-width: 600px;
    margin-top: 40px;
}

.feature-item {
    background: #ffffff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}

.feature-item i {
    color: #f59e0b;
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.feature-item h4 {
    color: #1a2b56;
    font-weight: 700;
    font-size: 1rem;
    margin-bottom: 5px;
}

.feature-item p {
    color: #64748b;
    font-size: 0.85rem;
    margin: 0;
}

@media (max-width: 768px) {
    .coming-soon-container {
        padding: 30px 15px;
        min-height: calc(100vh - 250px);
    }
    
    .coming-soon-icon {
        width: 100px;
        height: 100px;
        font-size: 2.5rem;
    }
    
    .coming-soon-title {
        font-size: 2rem;
    }
    
    .coming-soon-description {
        font-size: 1rem;
    }
    
    .features-list {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush

@section('content')
<div class="coming-soon-container">
    <div class="coming-soon-icon">
        <i class="bi bi-award"></i>
    </div>
    
    <h1 class="coming-soon-title">الشهادات الاحترافية</h1>
    <p class="coming-soon-description">
        نعمل حالياً على تطوير نظام الشهادات الاحترافية ليقدم لك أفضل تجربة تعليمية وتدريبية. سيتوفر قريباً بإذن الله.
    </p>
    
    <a href="{{ route('selection') }}" class="back-btn">
        <i class="bi bi-arrow-right"></i>
        العودة للقائمة الرئيسية
    </a>
    
    <div class="features-list">
        <div class="feature-item">
            <i class="bi bi-patch-check"></i>
            <h4>شهادات معتمدة</h4>
            <p>اعتراف دولي ومهني</p>
        </div>
        <div class="feature-item">
            <i class="bi bi-mortarboard"></i>
            <h4>برامج تدريبية</h4>
            <p>محتوى تعليمي متخصص</p>
        </div>
        <div class="feature-item">
            <i class="bi bi-trophy"></i>
            <h4>تطوير مهني</h4>
            <p>تعزيز مسارك المهني</p>
        </div>
    </div>
</div>
@endsection