@extends('layouts.user')
@section('title', 'الرئيسية')

@push('styles')
<style>
/* Reset container padding for full-width mobile experience */
main.container { padding: 0 !important; max-width: 100% !important; background: #fff; }
#alert-container.container { max-width: 100% !important; padding: 0 15px !important; }

/* Global Fonts & Colors */
body { font-family: 'Noto Kufi Arabic', sans-serif; background: #fff; }
.text-primary-custom { color: #1a2b56; } /* Dark Blue */
.text-warning-custom { color: #d97706; } /* Gold/Orange */

/* ── Hero Section ── */
.hero-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 15px;
    background-color: #f8f9fa;
}
.hero-text {
    width: 60%;
    padding-left: 10px;
}
.hero-text h1 {
    color: #1a2b56;
    font-weight: 800;
    font-size: 1.4rem;
    line-height: 1.3;
    margin-bottom: 10px;
}
.hero-text p {
    color: #4a5568;
    font-size: 0.75rem;
    line-height: 1.5;
    margin-bottom: 0;
}
.hero-image-wrap {
    width: 40%;
}
.hero-image {
    width: 100%;
    border-radius: 12px;
}

/* ── Category Filter ── */
.category-filter {
    display: flex;
    justify-content: space-between;
    padding: 15px 10px;
    gap: 8px;
    overflow-x: auto;
    scrollbar-width: none;
}
.category-filter::-webkit-scrollbar { display: none; }
.cat-btn {
    flex: 1;
    text-align: center;
    white-space: nowrap;
    padding: 8px 6px;
    border-radius: 8px;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    color: #4a5568;
    font-weight: 700;
    font-size: 0.7rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    text-decoration: none;
}
.cat-btn.active {
    background: #1a2b56;
    color: #ffffff;
    border-color: #1a2b56;
}

/* ── Stats Row ── */
.stats-row {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 8px;
    padding: 15px 10px;
    background: #fff;
    border-top: 1px solid #f1f5f9;
    border-bottom: 1px solid #f1f5f9;
}
.stat-box {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.stat-box i { font-size: 1.4rem; color: #d97706; margin-bottom: 6px; }
.stat-box h5 { margin: 0; font-weight: 800; color: #1a2b56; font-size: 0.9rem; }
.stat-box p { margin: 0; font-size: 0.6rem; color: #64748b; line-height: 1.3; }

/* ── Assessments Grid ── */
.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 15px 15px;
    background: #fff;
}
.section-header h3 {
    color: #1a2b56;
    font-weight: 800;
    font-size: 1.2rem;
    margin: 0;
}
.section-header a {
    color: #64748b;
    font-size: 0.75rem;
    text-decoration: none;
    font-weight: 700;
}
.assessments-grid {
    padding: 0 12px 20px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: stretch;
    gap: 10px;
    background: #fff;
}
.assessment-card {
    background: #ffffff;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    padding: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.03);
    display: flex;
    flex-direction: column;
    height: 100%;
    width: 100%;
}
.card-header-top {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    gap: 8px;
    margin-bottom: 8px;
}
.card-icon {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: 1.5px solid #1a2b56;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1a2b56;
    font-size: 0.8rem;
    flex-shrink: 0;
}
.card-title-area {
    text-align: right;
    flex-grow: 1;
}
.card-title {
    color: #1a2b56;
    font-weight: bold;
    font-size: 0.8rem;
    line-height: 1.3;
    margin-bottom: 2px;
    min-height: 32px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}
.card-desc {
    color: #64748b;
    font-size: 0.6rem;
    margin-bottom: 8px;
    line-height: 1.3;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}
.assessment-card img.cover {
    width: 100%;
    height: 85px;
    object-fit: cover;
    object-position: center 30%;
    border-radius: 8px;
    margin-bottom: 10px;
}
.card-meta {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    gap: 4px;
    margin-bottom: 10px;
    font-size: 0.55rem;
    color: #64748b;
}
.card-meta div {
    display: flex;
    align-items: center;
    gap: 3px;
    white-space: nowrap;
}
.card-price-row {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    gap: 6px;
    margin-bottom: 10px;
}
.card-price {
    color: #1a2b56;
    font-weight: 800;
    font-size: 0.95rem;
    white-space: nowrap;
}
.card-price span { font-size: 0.6rem; font-weight: normal; }
.btn-primary-custom {
    background: #d97706;
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 6px 0;
    font-weight: 700;
    font-size: 0.65rem;
    white-space: nowrap;
    width: 100%;
    text-align: center;
}
.btn-secondary-custom {
    display: block;
    width: 100%;
    text-align: center;
    color: #1a2b56;
    border: 1px solid #e2e8f0;
    border-radius: 6px;
    padding: 6px;
    font-size: 0.65rem;
    font-weight: 700;
    text-decoration: none;
    background: #fff;
    margin-top: auto;
}

/* ── Desktop Overrides for Assessments Grid ── */
@media (min-width: 768px) {
    .assessments-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        padding: 0 15px 20px;
    }
    .assessment-card { padding: 12px; }
    .card-header-top { gap: 8px; margin-bottom: 8px; }
    .card-icon { width: 32px; height: 32px; font-size: 0.9rem; }
    .card-title { font-size: 0.95rem; line-height: 1.3; min-height: auto; }
    .card-desc { font-size: 0.65rem; -webkit-line-clamp: 2; line-height: 1.4; margin-bottom: 10px; }
    .assessment-card img.cover { height: 120px; border-radius: 8px; margin-bottom: 12px; }
    .card-meta { justify-content: space-between; font-size: 0.65rem; margin-bottom: 12px; gap: 8px; }
    .card-price-row { margin-bottom: 12px; gap: 8px; }
    .card-price { font-size: 1rem; }
    .card-price span { font-size: 0.75rem; }
    .btn-primary-custom { width: auto; padding: 6px 12px; font-size: 0.75rem; border-radius: 6px; }
    .btn-secondary-custom { padding: 6px 12px; font-size: 0.75rem; border-radius: 6px; }
}

@media (min-width: 992px) {
    .assessments-grid { grid-template-columns: repeat(4, 1fr); }
    .assessment-card img.cover { height: 160px; }
    .card-title { font-size: 1.1rem; }
    .card-price { font-size: 1.2rem; }
}

/* ── Features Section ── */
.features-section {
    padding: 20px 15px;
    background: #fff;
    border-top: 1px solid #f1f5f9;
}
.features-title {
    color: #1a2b56;
    font-weight: 800;
    margin-bottom: 20px;
    font-size: 1.1rem;
}
.features-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}
.feature-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 6px;
}
.feature-box i { font-size: 1.5rem; color: #d97706; }
.feature-box h6 { color: #1a2b56; font-weight: 800; margin-bottom: 2px; font-size: 0.75rem; }
.feature-box p { color: #64748b; font-size: 0.55rem; margin: 0; line-height: 1.4; }

/* ── Testimonials ── */
.testimonials-section {
    padding: 20px 15px;
    background: #fff;
    border-top: 1px solid #f1f5f9;
}
.testimonials-title {
    color: #1a2b56;
    font-weight: 800;
    margin-bottom: 20px;
    font-size: 1.1rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}
.testimonial-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 12px;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.testimonial-text {
    font-size: 0.65rem;
    color: #4a5568;
    line-height: 1.6;
    font-weight: 600;
    margin-bottom: 15px;
    text-align: center;
}
.testimonial-text::before { content: "❝"; font-size: 0.9rem; color: #f59e0b; margin-left: 2px; }
.testimonial-text::after { content: "❞"; font-size: 0.9rem; color: #f59e0b; margin-right: 2px; }
.testimonial-user {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 5px;
}
.testimonial-user img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    object-fit: cover;
}
.testimonial-user h6 { margin: 0; color: #1a2b56; font-weight: 800; font-size: 0.65rem; }
.testimonial-user p { margin: 0; color: #64748b; font-size: 0.55rem; }
.stars { color: #f59e0b; font-size: 0.6rem; margin-top: 4px; }

/* ── Footer CTA ── */
.footer-cta {
    background: #1a2b56;
    color: #ffffff;
    padding: 20px 15px;
    text-align: center;
    border-radius: 16px 16px 0 0;
    margin: 15px 15px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.footer-cta-text {
    text-align: right;
}
.footer-cta h4 { font-weight: 800; margin-bottom: 6px; font-size: 1rem; }
.footer-cta p { font-size: 0.65rem; opacity: 0.9; margin-bottom: 0; }
.btn-cta {
    background: #d97706;
    color: #ffffff;
    border: none;
    padding: 10px 18px;
    border-radius: 8px;
    font-weight: 700;
    font-size: 0.75rem;
    text-decoration: none;
    white-space: nowrap;
}
</style>
@endpush

@section('content')

<!-- Hero Section -->
<div class="hero-section" style="padding: 30px 20px; background: linear-gradient(to left, #ffffff, #f8f9fa); border-radius: 0 0 20px 20px; gap: 20px;">
    <div class="hero-text" style="width: 55%; padding-left: 15px;">
        <h1 class="fw-bolder" style="color: #1a2b56; font-size: clamp(1.6rem, 4vw, 3rem); line-height: 1.4; margin-bottom: 12px;">
            المقاييس المهنية<br>والشخصية
        </h1>
        <p style="color: #4a5568; font-size: clamp(0.75rem, 1.5vw, 1.1rem); line-height: 1.6; margin-bottom: 0;">
            اكتشف قدراتك ومهاراتك من خلال مقاييس علمية معتمدة وتقارير تفصيلية تساعدك على التطوير واتخاذ القرارات بثقة.
        </p>
    </div>
    <div class="hero-image-wrap" style="width: 45%; text-align: left;">
        <img src="{{ asset('images/dashboard/hero_banner_1782904656284.png') }}" alt="Hero Banner" class="hero-image" style="width: 100%; max-height: 400px; border-radius: 12px; object-fit: cover;">
    </div>
</div>

<!-- Category Filter -->
<div class="category-filter">
    <a href="javascript:void(0)" class="cat-btn btn-category active" data-filter="all"><i class="bi bi-grid-fill"></i> جميع المقاييس</a>
    <a href="javascript:void(0)" class="cat-btn btn-category" data-filter="مقاييس معرفة الذات والشخصية"><i class="bi bi-person-bounding-box"></i> مقاييس معرفة الذات والشخصية</a>
    <a href="javascript:void(0)" class="cat-btn btn-category" data-filter="مقاييس الكفاءة الشخصية والنجاح المهني"><i class="bi bi-graph-up-arrow"></i> مقاييس الكفاءة الشخصية والنجاح المهني</a>
    <a href="javascript:void(0)" class="cat-btn btn-category" data-filter="مقاييس الاتصال والعلاقات المهنية"><i class="bi bi-chat-quote"></i> مقاييس الاتصال والعلاقات المهنية</a>
    <a href="javascript:void(0)" class="cat-btn btn-category" data-filter="مقاييس القيادة والإدارة"><i class="bi bi-award"></i> مقاييس القيادة والإدارة</a>
    <a href="javascript:void(0)" class="cat-btn btn-category" data-filter="مقاييس التوجيه والتوافق المهني"><i class="bi bi-compass"></i> مقاييس التوجيه والتوافق المهني</a>
    <a href="javascript:void(0)" class="cat-btn btn-category" data-filter="مقاييس الصحة المهنية"><i class="bi bi-heart-pulse"></i> مقاييس الصحة المهنية</a>
</div>

<!-- Stats Row -->
<div class="stats-row">
    <div class="stat-box">
        <i class="bi bi-pie-chart"></i>
        <h5>{{ $siteSettings['stat_fields'] ?? '50+' }}</h5>
        <p>مجال ومهارة<br>مختلفة</p>
    </div>
    <div class="stat-box">
        <i class="bi bi-mortarboard"></i>
        <h5>{{ $siteSettings['stat_assessments'] ?? '150+' }}</h5>
        <p>مقياس مهني<br>وشخصي معتمد</p>
    </div>
    <div class="stat-box">
        <i class="bi bi-journal-check"></i>
        <h5>{{ $siteSettings['stat_exams'] ?? '10,000+' }}</h5>
        <p>اختبار ومقياس<br>تم إنجازه</p>
    </div>
    <div class="stat-box">
        <i class="bi bi-people"></i>
        <h5>{{ $siteSettings['stat_users'] ?? '25,000+' }}</h5>
        <p>مستخدم من الأفراد<br>والجهات</p>
    </div>
</div>

<!-- Assessments Section -->
<div class="section-header">
    <h3>أشهر المقاييس</h3>
</div>

<div class="assessments-grid" id="assessments-container">
    @php
        $images = [
            'معرفة الذات' => '1.png',
            'السمات الشخصية' => '2.png',
            'الثقة في النفس' => '3.png',
            'هل تفكر بإيجابية؟' => '4.png',
            'الذكاء العاطفي' => '5.png',
            'هل أنت قادر على النجاح في وظيفتك / مهنتك؟' => '6.png',
            'الإبداع' => '7.png',
            'استثمار الوقت' => '8.png',
            'هل تخطط؟' => '9.png',
            'مهارة اتخاذ القرار' => '10.png',
            'مهارات الاتصال' => '11.png',
            'القدرة على التفاوض والحوار وإقناع الآخرين' => '12.png',
            'هل تحب العمل في فريق؟' => '13.png',
            'اعرف نمطك القيادي' => '14.png',
            'هل لديك سمات القائد التحويلي؟' => '15.png',
            'قيّم مهارات الإدارة' => '16.png',
            'تحفيز العاملين ومكافأتهم' => '17.png',
            'التوجيه المهني' => '18.png',
            'حب العمل' => '19.png',
            'ولاؤك لعملك الحالي' => '20.png',
            'الرضا الوظيفي' => '21.png',
            'احسب مستوى ضغوط العمل لديك' => '22.png',
            'الاحتراق الوظيفي' => '23.png',
            'الإرهاق المهني' => '24.png',
            'السلامة والصحة المهنية' => '25.png'
        ];
        $icons = [
            'معرفة الذات' => 'bi-person-bounding-box',
            'الشخصية' => 'bi-person-lines-fill',
            'الثقة' => 'bi-person-up',
            'إيجابية' => 'bi-brightness-high',
            'العاطفي' => 'bi-heart-pulse',
            'النجاح' => 'bi-trophy',
            'الإبداع' => 'bi-lightbulb',
            'الوقت' => 'bi-hourglass-split',
            'تخطط' => 'bi-calendar2-check',
            'القرار' => 'bi-signpost-split',
            'الاتصال' => 'bi-chat-right-quote',
            'التفاوض' => 'bi-briefcase',
            'فريق' => 'bi-people',
            'القيادي' => 'bi-award',
            'التحويلي' => 'bi-lightning-charge',
            'الإدارة' => 'bi-diagram-3',
            'تحفيز' => 'bi-stars',
            'التوجيه' => 'bi-compass',
            'حب العمل' => 'bi-heart',
            'ولاؤك' => 'bi-bookmark-star',
            'الرضا' => 'bi-emoji-smile',
            'ضغوط' => 'bi-speedometer2',
            'الاحتراق' => 'bi-fire',
            'الإرهاق' => 'bi-battery-half',
            'السلامة' => 'bi-shield-check',
        ];
        
        $categoryColors = [
            'مقاييس معرفة الذات والشخصية' => ['iconColor' => '#8b5cf6', 'iconBg' => '#f5f3ff', 'titleColor' => '#6d28d9'],
            'مقاييس الكفاءة الشخصية والنجاح المهني' => ['iconColor' => '#3b82f6', 'iconBg' => '#eff6ff', 'titleColor' => '#1d4ed8'],
            'مقاييس الاتصال والعلاقات المهنية' => ['iconColor' => '#14b8a6', 'iconBg' => '#f0fdfa', 'titleColor' => '#0f766e'],
            'مقاييس القيادة والإدارة' => ['iconColor' => '#f59e0b', 'iconBg' => '#fffbeb', 'titleColor' => '#b45309'],
            'مقاييس التوجيه والتوافق المهني' => ['iconColor' => '#f43f5e', 'iconBg' => '#fff1f2', 'titleColor' => '#be123c'],
            'مقاييس الصحة المهنية' => ['iconColor' => '#10b981', 'iconBg' => '#ecfdf5', 'titleColor' => '#047857'],
        ];
    @endphp

    @foreach($assessments as $index => $assessment)
        @php
            $imageName = $assessment->image_url ?: 'default.png'; // admin uploaded image or fallback
            $iconName = 'bi-journal-text'; // default icon
            
            // Basic icon mapping (optional, but keep it minimal or remove entirely)
            // If the user wants no hardcoding, we can just use a default icon for all
            
            $theme = $categoryColors[$assessment->category] ?? ['iconColor' => '#1a2b56', 'iconBg' => '#f8fafc', 'titleColor' => '#1a2b56'];
        @endphp
        <div class="assessment-card" data-category="{{ $assessment->category }}">
            <div class="card-header-top">
                <div class="card-icon" style="color: {{ $theme['iconColor'] }}; background-color: {{ $theme['iconBg'] }}; border: 1.5px solid {{ $theme['iconColor'] }};"><i class="bi {{ $iconName }}"></i></div>
                <div class="card-title-area">
                    <div style="font-size: 0.6rem; color: #f59e0b; margin-bottom: 2px;">
                        @php $r = $assessment->rating ?: 0; @endphp
                        @if($r > 0)
                            <span class="fw-bold me-1">{{ number_format($r, 1) }}</span>
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $r)
                                    <i class="bi bi-star-fill"></i>
                                @elseif($i - 0.5 <= $r)
                                    <i class="bi bi-star-half"></i>
                                @else
                                    <i class="bi bi-star"></i>
                                @endif
                            @endfor
                            <span style="color: #94a3b8; font-size: 0.5rem; margin-right: 2px;">({{ $assessment->rating_count ?: 0 }})</span>
                        @endif
                    </div>
                    <h4 class="card-title" style="color: {{ $theme['titleColor'] }};">{{ $assessment->title_ar }}</h4>
                    <p class="card-desc">{{ $assessment->subtitle_ar ?: ($assessment->description_ar ?: 'لا يوجد وصف متاح') }}</p>
                </div>
            </div>
            
            <img src="{{ asset('images/dashboard/' . $imageName) }}" alt="{{ $assessment->title_ar }}" class="cover">
            
            <div class="card-meta">
                <div><i class="bi bi-clock"></i> {{ $assessment->time_limit_min ? $assessment->time_limit_min . ' دقيقة' : 'مفتوح' }}</div>
                <div><i class="bi bi-ui-checks"></i> {{ $assessment->questions_count ?: 0 }} سؤال</div>
                <div><i class="bi bi-file-earmark-text"></i> تقرير مفصل</div>
            </div>

            @php
                $userSession = $userSessions->firstWhere('assessment_id', $assessment->id);
                $isCompleted = $userSession && $userSession->status === 'completed';
                $isInProgress = $userSession && $userSession->status === 'in_progress';
                $priceLabel = $assessment->price > 0 ? number_format($assessment->price, 0) . ' <span>ر.س</span>' : 'مجاني';
            @endphp
            <div class="card-price-row">
                <div class="card-price">{!! $priceLabel !!}</div>
                @if($isCompleted)
                    <form method="POST" action="{{ route('exam.start', $assessment->id) }}" class="m-0" style="flex: 1; padding-right: 4px;">
                        @csrf
                        <button type="submit" class="btn-primary-custom w-100">إعادة المقياس</button>
                    </form>
                @elseif($isInProgress)
                    <form method="POST" action="{{ route('exam.start', $assessment->id) }}" class="m-0" style="flex: 1; padding-right: 4px;">
                        @csrf
                        <button type="submit" class="btn-primary-custom w-100" style="background: #f59e0b;">استئناف المقياس</button>
                    </form>
                @else
                    <div style="flex: 1; padding-right: 4px;">
                        <button type="button" class="btn-primary-custom w-100" data-bs-toggle="modal" data-bs-target="#paymentCouponModal" data-assessment-id="{{ $assessment->id }}" data-assessment-title="{{ $assessment->title_ar }}" data-assessment-price="{{ $assessment->price > 0 ? number_format($assessment->price, 0) : '0' }}" data-hide-coupon="{{ $assessment->hide_coupon_field ? '1' : '0' }}">
                            ابدأ المقياس
                        </button>
                    </div>
                @endif
            </div>

            @if(!$isCompleted && !$isInProgress)
            <div style="border: 1px dashed #1d4ed8; border-radius: 4px; padding: 4px 2px; margin-bottom: 8px; display: flex; align-items: center; justify-content: center; gap: 4px; background-color: #f8fafc;">
                <i class="bi bi-gift" style="color: #1d4ed8; font-size: 0.8rem;"></i>
                <span style="color: #0f172a; font-size: 0.5rem; font-weight: 700; text-align: center; white-space: nowrap; letter-spacing: -0.3px;">
                    احصل على كوبون
                    <a href="#"
                       class="btn-reveal-coupon"
                       data-assessment-id="{{ $assessment->id }}"
                       data-assessment-title="{{ $assessment->title_ar }}"
                       data-assessment-price="{{ $assessment->price > 0 ? number_format($assessment->price, 0) : '0' }}"
                       data-hide-coupon="{{ $assessment->hide_coupon_field ? '1' : '0' }}"
                       style="color: #1d4ed8; font-weight: 800; text-decoration: underline;"
                    >من هنا</a>
                    لبدء المقياس مجاناً
                </span>
            </div>
            @endif

            @if($isCompleted)
                <a href="{{ route('exam.result', $userSession->id) }}" class="btn-secondary-custom" style="background: #eff6ff; border-color: #bfdbfe; color: #1d4ed8;">
                    <i class="bi bi-file-earmark-check me-1"></i> عرض التقرير
                </a>
            @else
                <a href="#" onclick="alert('ليس لديك نتيجة في هذا المقياس حتى الآن. يرجى أداء المقياس أولاً لاستخراج تقريرك.'); return false;" class="btn-secondary-custom">
                    <i class="bi bi-eye me-1"></i> عرض التقرير
                </a>
            @endif
        </div>
    @endforeach
</div>

@if($myCoupons->count() > 0)
@php
    // Check if there's at least one active coupon to show the container
    $hasActiveCoupon = false;
    foreach($myCoupons as $coupon) {
        $used = $coupon->pivot->used_count ?? 0;
        $remaining = max(0, $coupon->assessments_limit - $used);
        $isExpired = $coupon->expires_at && \Carbon\Carbon::parse($coupon->expires_at)->isPast();
        if (!$isExpired && $remaining > 0) $hasActiveCoupon = true;
    }
@endphp

@if($hasActiveCoupon)
<div class="my-coupons-section mt-5 mb-5 p-4 rounded-4 shadow-sm" style="background-color: #fff; border: 1px solid #e2e8f0;">
    <h4 class="fw-bold mb-4" style="color: #1a2b56;"><i class="bi bi-ticket-perforated text-warning me-2"></i> باقاتي (كوبوناتي النشطة)</h4>
    <div class="row g-4">
        @foreach($myCoupons as $coupon)
            @php
                $used = $coupon->pivot->used_count ?? 0;
                $remaining = max(0, $coupon->assessments_limit - $used);
                $isExpired = $coupon->expires_at && \Carbon\Carbon::parse($coupon->expires_at)->isPast();
            @endphp
            @if(!$isExpired && $remaining > 0)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100" style="border-radius: 10px; border: 1px solid #e2e8f0; background: #fff;">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h6 class="fw-bold text-navy mb-1"><i class="bi bi-ticket-detailed me-1 text-warning"></i> {{ $coupon->title }}</h6>
                                <span class="badge bg-success rounded-pill" style="font-size: 0.7rem;">فعال</span>
                            </div>
                            <div class="text-end">
                                <span class="text-muted" style="font-size: 0.75rem;">المتبقي</span>
                                <div class="fw-bold text-primary" style="font-size: 1.1rem;">{{ $remaining }} <span class="text-muted" style="font-size: 0.75rem;">/ {{ $coupon->assessments_limit }}</span></div>
                            </div>
                        </div>
                        
                        @if($coupon->expires_at)
                            <div class="countdown-timer d-flex justify-content-between align-items-center rounded-3 p-2 mt-2" style="background: #f8fafc; border: 1px solid #f1f5f9;" data-expires="{{ \Carbon\Carbon::parse($coupon->expires_at)->endOfDay()->toIso8601String() }}">
                                <div class="text-muted" style="font-size: 0.7rem;"><i class="bi bi-clock-history me-1"></i> ينتهي خلال:</div>
                                <div class="d-flex gap-1 text-navy fw-bold" dir="ltr" style="font-size: 0.8rem;">
                                    <div><span class="days">00</span><small class="text-muted ms-1" style="font-size:0.6rem">يوم</small></div>:
                                    <div><span class="hours">00</span><small class="text-muted ms-1" style="font-size:0.6rem">س</small></div>:
                                    <div><span class="minutes">00</span><small class="text-muted ms-1" style="font-size:0.6rem">د</small></div>:
                                    <div><span class="seconds">00</span><small class="text-muted ms-1" style="font-size:0.6rem">ث</small></div>
                                </div>
                            </div>
                        @else
                            <div class="text-muted mt-2" style="font-size: 0.75rem;"><i class="bi bi-infinity me-1"></i> صلاحية الكوبون مفتوحة</div>
                        @endif
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>
@endif
@endif

<!-- Features Section -->
<div class="features-section">
    <h3 class="features-title">ماذا ستحصل بعد إكمال المقياس؟</h3>
    <div class="features-grid">
        <div class="feature-box">
            <i class="bi bi-graph-up-arrow"></i>
            <h6>توصيات عملية</h6>
            <p>توصيات قابلة للتطبيق<br>في عملك وحياتك</p>
        </div>
        <div class="feature-box">
            <i class="bi bi-shield-check"></i>
            <h6>فرص التحسين</h6>
            <p>اكتشف المهارات التي تحتاج<br>لتطوير وخطة التحسين</p>
        </div>
        <div class="feature-box">
            <i class="bi bi-bullseye"></i>
            <h6>نقاط القوة</h6>
            <p>تعرف على نقاط قوتك<br>واستخدمها بذكاء</p>
        </div>
        <div class="feature-box">
            <i class="bi bi-file-earmark-richtext"></i>
            <h6>تقرير تفصيلي</h6>
            <p>عن نقاط قوتك<br>وفرص التحسين</p>
        </div>
    </div>
</div>

<!-- Footer CTA -->
<div class="footer-cta">
    <h4>ابدأ رحلتك نحو تطوير ذاتك اليوم</h4>
    <p>اختر المقياس المناسب لك واحصل على تقرير تفصيلي الآن</p>
    <a href="#" class="btn-cta">استعرض جميع المقاييس</a>
</div>

<style>
.custom-pills .nav-link {
    color: #64748b;
    background: #f8fafc;
    border-radius: 10px;
    margin: 0 4px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}
.custom-pills .nav-link.active {
    background: #1a2b56;
    color: #fff;
    border-color: #1a2b56;
    box-shadow: 0 4px 6px -1px rgba(26, 43, 86, 0.2);
}
.custom-pills .nav-link:hover:not(.active) {
    background: #f1f5f9;
}
</style>

{{-- ============================================================
     Coupon Reveal Modal  ("من هنا" button target)
     ============================================================ --}}
<div class="modal fade" id="couponRevealModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 440px;">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">

            {{-- Header --}}
            <div class="modal-header border-0 pb-0 pt-4 px-4" style="background: linear-gradient(135deg,#eff6ff 0%,#dbeafe 100%);">
                <div>
                    <h5 class="modal-title fw-bold mb-0" style="color:#1a2b56;" id="revealModalTitle">كوبون المقياس</h5>
                    <p class="text-muted small mb-0" id="revealModalSub">اضغط لنسخ الكوبون ثم فعّله</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body px-4 pt-3 pb-4" style="background: linear-gradient(135deg,#eff6ff 0%,#dbeafe 100%);">

                {{-- Loading --}}
                <div id="revealLoading" class="text-center py-4">
                    <div class="spinner-border text-primary" role="status"></div>
                    <p class="text-muted small mt-2 mb-0">جارٍ البحث عن كوبون...</p>
                </div>

                {{-- No coupon --}}
                <div id="revealNoCoupon" class="d-none text-center py-3">
                    <i class="bi bi-emoji-frown" style="font-size:2.5rem;color:#94a3b8;"></i>
                    <p class="text-muted mt-2 mb-0 small">لا يوجد كوبون متاح لهذا المقياس حالياً.</p>
                </div>

                {{-- Coupon Card --}}
                <div id="revealCouponCard" class="d-none">
                    <div class="rounded-3 p-4 text-center mb-3" style="background:#fff; border: 2px dashed #1d4ed8; position:relative;">
                        <div class="mb-2">
                            <i class="bi bi-ticket-perforated" style="font-size:2rem; color:#1d4ed8;"></i>
                        </div>
                        <div class="text-muted small mb-1" id="revealCouponTitle"></div>
                        <div class="fw-bold mb-2" style="font-size:0.85rem; color:#64748b;" id="revealCouponDiscount"></div>
                        <div class="d-flex align-items-center justify-content-center gap-2 mb-1">
                            <span id="revealCouponCode"
                                  style="font-size:1.6rem; font-weight:800; letter-spacing:4px; color:#1a2b56; font-family:monospace;"
                            >—</span>
                        </div>
                        <div class="text-muted" style="font-size:0.7rem;" id="revealCouponExpiry"></div>
                    </div>

                    <button type="button" id="btnCopyCoupon"
                            class="btn btn-outline-primary w-100 fw-semibold mb-3" style="border-radius:10px;">
                        <i class="bi bi-clipboard me-1"></i> نسخ الكوبون
                    </button>

                    <button type="button" id="btnGoToApply"
                            class="btn w-100 fw-bold py-2" style="border-radius:10px; background:#f59e0b; color:#fff; border:none;">
                        <i class="bi bi-arrow-left-circle me-1"></i> تطبيق الكوبون وبدء المقياس
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- ============================================================
     Payment / Coupon Modal
     ============================================================ --}}
<div class="modal fade" id="paymentCouponModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 480px;">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
            <div class="modal-header border-0 pt-4 px-4 pb-0">
                <div>
                    <h5 class="modal-title fw-bold mb-1" style="color: #1a2b56;" id="modalAssessmentTitle">عنوان المقياس</h5>
                    <div class="text-muted small" id="modalAssessmentPriceLabel"></div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-4 pb-4 pt-3">

                {{-- Coupon section --}}
                <div id="couponSection">
                    <form method="POST" action="" id="couponStartForm">
                        @csrf
                        <input type="hidden" name="coupon_code" id="hiddenCouponCode">

                        {{-- Step 1: Enter code --}}
                        <div id="couponInputArea">
                            <label class="form-label fw-semibold small text-dark">رمز الكوبون</label>
                            <div class="input-group mb-2">
                                <input type="text" id="couponCodeInput" class="form-control form-control-lg text-start" dir="ltr"
                                    placeholder="أدخل رمز الكوبون..." style="border-radius: 10px 0 0 10px; letter-spacing: 1px;">
                                <button type="button" id="btnVerifyCoupon" class="btn btn-primary px-3" style="border-radius: 0 10px 10px 0;">
                                    <span id="verifyCouponText"><i class="bi bi-search me-1"></i>تحقق</span>
                                    <span id="verifyCouponSpinner" class="spinner-border spinner-border-sm d-none"></span>
                                </button>
                            </div>
                            <div id="couponError" class="text-danger small d-none"></div>
                        </div>

                        {{-- Step 2: Discount breakdown --}}
                        <div id="couponSuccessArea" class="d-none">
                            <div class="rounded-3 p-3 mb-3" style="background: linear-gradient(135deg, #ecfdf5 0%, #f0fdf4 100%); border: 1px solid #bbf7d0;">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:32px;height:32px;background:#10b981;color:#fff;font-size:1rem;flex-shrink:0;">
                                        <i class="bi bi-check-lg"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold small text-success" id="couponSuccessMsg">الكوبون صالح!</div>
                                        <div class="text-muted" style="font-size:0.7rem;" id="couponUsageLabel"></div>
                                    </div>
                                    <button type="button" id="btnChangeCoupon" class="btn btn-sm btn-outline-secondary ms-auto py-0 px-2" style="font-size:0.7rem;">تغيير</button>
                                </div>

                                <div id="pricingBreakdown" class="small pt-2 border-top border-success border-opacity-25">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="text-muted">السعر الأصلي</span>
                                        <span id="breakdownOriginal" class="fw-medium"></span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="text-success"><i class="bi bi-tag me-1"></i>خصم <span id="breakdownPct"></span>%</span>
                                        <span class="text-success fw-medium" id="breakdownDiscount"></span>
                                    </div>
                                    <div class="d-flex justify-content-between fw-bold" style="border-top: 1px dashed #86efac; padding-top:6px; margin-top:4px;">
                                        <span class="text-dark">المبلغ المستحق</span>
                                        <span class="text-primary fs-6" id="breakdownFinal"></span>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" id="btnStartFree" class="btn btn-success w-100 fw-bold py-2 d-none" style="border-radius: 10px;">
                                <i class="bi bi-play-circle me-1"></i> ابدأ المقياس مجاناً
                            </button>

                            <div id="partialPayArea" class="d-none">
                                <div class="alert alert-info small border-0 py-2 mb-2">
                                    <i class="bi bi-info-circle me-1"></i>
                                    يوجد مبلغ متبقٍ. سيُطبق الكوبون بعد إتمام الدفع التجريبي.
                                </div>
                                <button type="submit" class="btn btn-primary w-100 fw-bold py-2" style="border-radius: 10px;">
                                    <i class="bi bi-credit-card me-1"></i> إتمام الدفع التجريبي وبدء المقياس
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <span class="text-muted small">لا يوجد لديك كوبون؟ </span>
                        <button type="button" class="btn btn-link btn-sm small p-0 text-primary text-decoration-none" id="btnSwitchToPay">الدفع الإلكتروني</button>
                    </div>
                </div>

                {{-- Direct Pay section --}}
                <div id="paySection" class="d-none">
                    <div class="text-center py-3">
                        <div class="display-6 fw-bold mb-2" style="color:#1a2b56;" id="payDirectPrice">— ر.س</div>
                        <p class="text-muted small">بوابة الدفع الإلكتروني قيد التجهيز حالياً.</p>
                        <button type="button" class="btn btn-secondary w-100" disabled>متابعة الدفع (قريباً)</button>
                    </div>
                    <div id="btnSwitchToCouponWrap" class="text-center mt-2">
                        <button type="button" class="btn btn-link btn-sm small p-0 text-muted text-decoration-none" id="btnSwitchToCoupon">
                            <i class="bi bi-ticket-perforated me-1"></i>استخدام كوبون
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {

    /* ── Category filter ── */
    const filterBtns = document.querySelectorAll('.btn-category');
    const assessmentCards = document.querySelectorAll('.assessment-card');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            const filterValue = this.getAttribute('data-filter');
            assessmentCards.forEach(card => {
                const show = filterValue === 'all' || card.getAttribute('data-category') === filterValue;
                card.style.display = show ? 'flex' : 'none';
            });
        });
    });

    /* ── Modal logic ── */
    let currentAssessmentId   = null;
    let currentAssessmentPrice = 0;

    const modal = document.getElementById('paymentCouponModal');
    if (!modal) return;

    modal.addEventListener('show.bs.modal', function (event) {
        const btn       = event.relatedTarget;
        if (!btn) return;
        const title     = btn.getAttribute('data-assessment-title');
        const price     = parseFloat(btn.getAttribute('data-assessment-price') || '0');
        const aId       = btn.getAttribute('data-assessment-id');
        const hideCoup  = btn.getAttribute('data-hide-coupon') === '1';

        currentAssessmentId    = aId;
        currentAssessmentPrice = price;

        document.getElementById('modalAssessmentTitle').textContent = title;
        document.getElementById('modalAssessmentPriceLabel').innerHTML =
            price > 0 ? '<span style="color:#d97706;font-weight:700;">' + price + ' ر.س</span>' : '<span class="text-success fw-bold">مجاني</span>';
        document.getElementById('payDirectPrice').innerHTML =
            price > 0 ? price + ' <span class="fs-6">ر.س</span>' : '<span class="text-success">مجاني</span>';

        resetCouponUI();

        var couponSection = document.getElementById('couponSection');
        var paySection    = document.getElementById('paySection');
        var switchWrap    = document.getElementById('btnSwitchToCouponWrap');

        if (hideCoup) {
            couponSection.classList.add('d-none');
            paySection.classList.remove('d-none');
            switchWrap.classList.add('d-none');
        } else {
            couponSection.classList.remove('d-none');
            paySection.classList.add('d-none');
            switchWrap.classList.remove('d-none');
        }

        // Free assessment — quick start
        if (price === 0 && !hideCoup) {
            var form2 = document.getElementById('couponStartForm');
            form2.action = '/exam/' + aId + '/start';
            document.getElementById('couponInputArea').classList.add('d-none');
            document.getElementById('couponSuccessArea').classList.remove('d-none');
            document.getElementById('couponSuccessMsg').textContent = 'هذا المقياس مجاني!';
            document.getElementById('couponUsageLabel').textContent = '';
            document.getElementById('pricingBreakdown').classList.add('d-none');
            document.getElementById('btnStartFree').classList.remove('d-none');
            document.getElementById('partialPayArea').classList.add('d-none');
            document.getElementById('hiddenCouponCode').value = '';
        }
    });

    function resetCouponUI() {
        document.getElementById('couponCodeInput').value = '';
        document.getElementById('couponError').classList.add('d-none');
        document.getElementById('couponError').textContent = '';
        document.getElementById('couponInputArea').classList.remove('d-none');
        document.getElementById('couponSuccessArea').classList.add('d-none');
        document.getElementById('btnStartFree').classList.add('d-none');
        document.getElementById('partialPayArea').classList.add('d-none');
        document.getElementById('pricingBreakdown').classList.remove('d-none');
        document.getElementById('hiddenCouponCode').value = '';
    }

    /* Verify coupon via AJAX */
    document.getElementById('btnVerifyCoupon').addEventListener('click', async function () {
        var code = document.getElementById('couponCodeInput').value.trim();
        var errEl = document.getElementById('couponError');

        if (!code) { errEl.textContent = 'يرجى إدخال رمز الكوبون.'; errEl.classList.remove('d-none'); return; }
        errEl.classList.add('d-none');

        var btnText = document.getElementById('verifyCouponText');
        var spinner = document.getElementById('verifyCouponSpinner');
        btnText.classList.add('d-none'); spinner.classList.remove('d-none');
        this.disabled = true;

        try {
            var res = await fetch('/coupon/validate', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ code: code, assessment_id: currentAssessmentId }),
            });

            var data = await res.json();

            if (data.valid) {
                document.getElementById('hiddenCouponCode').value = code;
                document.getElementById('couponStartForm').action = '/exam/' + currentAssessmentId + '/start';

                document.getElementById('couponSuccessMsg').textContent = data.message;
                document.getElementById('couponUsageLabel').textContent = 'استخدام رقم ' + data.usage_number;
                document.getElementById('breakdownPct').textContent = data.discount;
                document.getElementById('breakdownOriginal').textContent = data.price + ' ر.س';
                document.getElementById('breakdownDiscount').textContent = '‑' + data.discount_amount + ' ر.س';
                document.getElementById('breakdownFinal').textContent = data.is_free ? 'مجاني 🎉' : data.final_price + ' ر.س';

                document.getElementById('couponInputArea').classList.add('d-none');
                document.getElementById('couponSuccessArea').classList.remove('d-none');

                if (data.is_free) {
                    document.getElementById('btnStartFree').classList.remove('d-none');
                    document.getElementById('partialPayArea').classList.add('d-none');
                } else {
                    document.getElementById('btnStartFree').classList.add('d-none');
                    document.getElementById('partialPayArea').classList.remove('d-none');
                }
            } else {
                errEl.textContent = data.message || 'الكوبون غير صالح.';
                errEl.classList.remove('d-none');
            }
        } catch (e) {
            errEl.textContent = 'حدث خطأ أثناء الاتصال بالخادم. حاول مرة أخرى.';
            errEl.classList.remove('d-none');
        } finally {
            btnText.classList.remove('d-none'); spinner.classList.add('d-none');
            this.disabled = false;
        }
    });

    document.getElementById('btnChangeCoupon').addEventListener('click', resetCouponUI);

    document.getElementById('btnSwitchToPay').addEventListener('click', function () {
        document.getElementById('couponSection').classList.add('d-none');
        document.getElementById('paySection').classList.remove('d-none');
    });
    document.getElementById('btnSwitchToCoupon').addEventListener('click', function () {
        document.getElementById('paySection').classList.add('d-none');
        document.getElementById('couponSection').classList.remove('d-none');
    });

    /* ── Countdown Timers ── */
    document.querySelectorAll('.countdown-timer').forEach(function(timer) {
        var expiresAt = new Date(timer.getAttribute('data-expires')).getTime();
        var daysEl    = timer.querySelector('.days');
        var hoursEl   = timer.querySelector('.hours');
        var minsEl    = timer.querySelector('.minutes');
        var secsEl    = timer.querySelector('.seconds');

        var tick = setInterval(function() {
            var diff = expiresAt - Date.now();
            if (diff < 0) {
                clearInterval(tick);
                timer.innerHTML = '<div class="alert alert-danger m-0 py-2 border-0"><i class="bi bi-exclamation-circle me-1"></i> انتهت صلاحية الكوبون</div>';
                return;
            }
            daysEl.textContent  = String(Math.floor(diff / 86400000)).padStart(2, '0');
            hoursEl.textContent = String(Math.floor((diff % 86400000) / 3600000)).padStart(2, '0');
            minsEl.textContent  = String(Math.floor((diff % 3600000) / 60000)).padStart(2, '0');
            secsEl.textContent  = String(Math.floor((diff % 60000) / 1000)).padStart(2, '0');
        }, 1000);
    });
    /* ── Coupon Reveal Modal logic ── */
    let revealAssessmentId   = null;
    let revealAssessmentPrice = 0;
    let revealAssessmentTitle = '';
    let revealHideCoupon = false;
    let revealedCouponCode = '';

    document.querySelectorAll('.btn-reveal-coupon').forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            revealAssessmentId    = this.getAttribute('data-assessment-id');
            revealAssessmentPrice = parseFloat(this.getAttribute('data-assessment-price') || '0');
            revealAssessmentTitle = this.getAttribute('data-assessment-title');
            revealHideCoupon      = this.getAttribute('data-hide-coupon') === '1';

            // Reset UI
            document.getElementById('revealLoading').classList.remove('d-none');
            document.getElementById('revealNoCoupon').classList.add('d-none');
            document.getElementById('revealCouponCard').classList.add('d-none');
            document.getElementById('revealModalTitle').textContent = revealAssessmentTitle;
            document.getElementById('revealModalSub').textContent = 'جارٍ البحث عن كوبون...';

            var revealModal = new bootstrap.Modal(document.getElementById('couponRevealModal'));
            revealModal.show();

            // Fetch coupon
            fetch('/coupon/for-assessment/' + revealAssessmentId, {
                headers: { 'Accept': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
            })
            .then(r => r.json())
            .then(function(data) {
                document.getElementById('revealLoading').classList.add('d-none');
                if (!data.found) {
                    document.getElementById('revealNoCoupon').classList.remove('d-none');
                    document.getElementById('revealModalSub').textContent = '';
                    return;
                }
                revealedCouponCode = data.code;
                document.getElementById('revealCouponTitle').textContent  = data.title;
                document.getElementById('revealCouponCode').textContent   = data.code;
                document.getElementById('revealCouponDiscount').textContent = 'خصم ' + data.discount + '%';
                document.getElementById('revealCouponExpiry').textContent  = data.expires ? 'صالح حتى: ' + data.expires : 'بدون تاريخ انتهاء';
                document.getElementById('revealModalSub').textContent = 'انسخ الكود واضغط تطبيق';
                document.getElementById('revealCouponCard').classList.remove('d-none');
            })
            .catch(function() {
                document.getElementById('revealLoading').classList.add('d-none');
                document.getElementById('revealNoCoupon').classList.remove('d-none');
            });
        });
    });

    // Copy button
    document.getElementById('btnCopyCoupon').addEventListener('click', function() {
        if (!revealedCouponCode) return;
        navigator.clipboard.writeText(revealedCouponCode).then(function() {
            var btn = document.getElementById('btnCopyCoupon');
            btn.innerHTML = '<i class="bi bi-clipboard-check me-1"></i> تم النسخ!';
            btn.classList.remove('btn-outline-primary');
            btn.classList.add('btn-success');
            setTimeout(function() {
                btn.innerHTML = '<i class="bi bi-clipboard me-1"></i> نسخ الكوبون';
                btn.classList.add('btn-outline-primary');
                btn.classList.remove('btn-success');
            }, 2000);
        });
    });

    // Go to apply: close reveal modal, open payment modal with code pre-filled
    document.getElementById('btnGoToApply').addEventListener('click', function() {
        // Close the reveal modal
        bootstrap.Modal.getInstance(document.getElementById('couponRevealModal')).hide();

        // Wait a tick then open payment modal with coupon pre-filled
        setTimeout(function() {
            currentAssessmentId    = revealAssessmentId;
            currentAssessmentPrice = revealAssessmentPrice;

            // Manually trigger the payment modal with correct data
            var payModal = new bootstrap.Modal(document.getElementById('paymentCouponModal'));

            document.getElementById('modalAssessmentTitle').textContent = revealAssessmentTitle;
            document.getElementById('modalAssessmentPriceLabel').innerHTML =
                revealAssessmentPrice > 0
                    ? '<span style="color:#d97706;font-weight:700;">' + revealAssessmentPrice + ' ر.س</span>'
                    : '<span class="text-success fw-bold">مجاني</span>';
            document.getElementById('payDirectPrice').innerHTML =
                revealAssessmentPrice > 0
                    ? revealAssessmentPrice + ' <span class="fs-6">ر.س</span>'
                    : '<span class="text-success">مجاني</span>';

            resetCouponUI();

            // Pre-fill the coupon code and auto-verify it
            document.getElementById('couponCodeInput').value = revealedCouponCode;
            document.getElementById('couponSection').classList.remove('d-none');
            document.getElementById('paySection').classList.add('d-none');
            document.getElementById('couponStartForm').action = '/exam/' + revealAssessmentId + '/start';

            payModal.show();

            // Auto-click verify after the modal opens
            setTimeout(function() {
                document.getElementById('btnVerifyCoupon').click();
            }, 400);
        }, 350);
    });

});
</script>

@endsection
