@extends('layouts.user')
@section('title', 'نتيجة الاختبار - ' . $assessment->title_ar)

@push('styles')
<style>
.result-wrapper { font-family: 'Noto Kufi Arabic', sans-serif; color: #1e293b; max-width: 1100px; margin: 0 auto; padding-bottom: 40px; }
.card-custom { border-radius: 16px; border: 1px solid #e2e8f0; background: #fff; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); overflow: hidden; }

/* Header Section */
.header-bg { background: #fff; position: relative; overflow: hidden; }
.header-bg::before { content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 10% 20%, rgba(245, 158, 11, 0.05) 0%, transparent 40%), radial-gradient(circle at 90% 80%, rgba(59, 130, 246, 0.05) 0%, transparent 40%); pointer-events: none; }
.stats-box { border: 1px solid #e2e8f0; border-radius: 12px; padding: 15px; text-align: center; height: 100%; display: flex; flex-direction: column; justify-content: center; background: #f8fafc; }
.stats-box .icon { color: #f59e0b; font-size: 1.5rem; margin-bottom: 8px; }
.stats-box.blue .icon { color: #3b82f6; }
.stats-box.indigo .icon { color: #6366f1; }

/* Circle Chart */
.circular-chart { width: 160px; height: 160px; margin: 0 auto; }
.circle-bg { fill: none; stroke: #f1f5f9; stroke-width: 3; }
.circle { fill: none; stroke-width: 3; stroke-linecap: round; transition: stroke-dasharray 1s ease; }
.percentage { fill: #1e293b; font-size: 0.6em; text-anchor: middle; font-weight: 800; font-family: 'Noto Kufi Arabic'; }
/* Progress Bars */
.dim-progress-bg { height: 8px; background: #f1f5f9; border-radius: 8px; width: 100%; margin-top: 5px; position: relative; overflow: hidden; }
.dim-progress-bar { height: 100%; border-radius: 8px; position: absolute; left: 0; top: 0; }
.dim-card { border-bottom: 1px solid #f1f5f9; padding-bottom: 15px; margin-bottom: 15px; }
.dim-card:last-child { border-bottom: none; padding-bottom: 0; margin-bottom: 0; }
.dim-icon { width: 45px; height: 45px; border-radius: 12px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; color: #64748b; }
/* Lists */
.sw-list { list-style: none; padding: 0; margin: 0; }
.sw-list li { position: relative; padding-right: 28px; margin-bottom: 12px; font-size: 0.9rem; color: #475569; }
.sw-list li::before { content: ""; position: absolute; right: 0; top: 4px; width: 18px; height: 18px; background-size: contain; background-repeat: no-repeat; }
.sw-list.strengths li::before { background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2310b981'%3E%3Cpath d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/%3E%3C/svg%3E"); }
.sw-list.weaknesses li::before { background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ef4444'%3E%3Cpath d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/%3E%3Cpath d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E"); }
/* Footer */
.footer-cta { background: #1a2b56; color: white; border-radius: 16px; padding: 25px; margin-top: 30px; position: relative; overflow: hidden; }
.footer-cta::before { content: ""; position: absolute; right: 0; top: 0; width: 150px; height: 100%; background: linear-gradient(90deg, rgba(245,158,11,0.2) 0%, transparent 100%); pointer-events: none; }

/* Markdown Content */
.markdown-content p:last-child { margin-bottom: 0; }
.markdown-content h1, .markdown-content h2, .markdown-content h3, .markdown-content h4 { font-size: 1rem; font-weight: 800; margin-bottom: 0.5rem; color: #1e293b; }
.markdown-content ul { padding-right: 1.2rem; margin-bottom: 0.5rem; }
.markdown-content strong { color: #1a2b56; }


/* Mobile Optimizations */
@media (max-width: 768px) {
    .result-wrapper { overflow-x: hidden; width: 100%; }
    .stats-box { padding: 10px 5px; }
    .stats-box .fs-5 { font-size: 1rem !important; }
    .stats-box .fs-6 { display: block; font-size: 0.75rem !important; margin-top: 2px; }
    .circular-chart { width: 130px; height: 130px; }
    .header-bg { padding: 1rem !important; }
    .card-body.p-4.p-md-5 { padding: 1.5rem !important; }
}

@media print { .no-print { display:none!important; } body { background:#fff!important; } .card-custom { border:none!important; box-shadow:none!important; } }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush

@section('content')
@php
    $pct = $result->max_possible_score > 0 ? round($result->total_score / $result->max_possible_score * 100) : 0;
    
    // Level configurations
    $lvlData = [
        'high'   => ['class' => 'success', 'color' => '#10b981', 'label' => 'مرتفع'],
        'medium' => ['class' => 'warning', 'color' => '#f59e0b', 'label' => 'متوسط'],
        'low'    => ['class' => 'danger',  'color' => '#ef4444', 'label' => 'منخفض'],
    ];
    $levelKey = in_array($result->level, ['high','medium','low']) ? $result->level : 'low';
    $mainLvl = $lvlData[$levelKey];
    $dashArray = round($pct * 100 / 100) . ' 100';

    // Prepare chart data and strengths/weaknesses
    $chartLabels = [];
    $chartData = [];
    $strengths = [];
    $weaknesses = [];

    $genericIcons = ['bi-diagram-3', 'bi-heart', 'bi-bullseye', 'bi-people', 'bi-graph-up-arrow', 'bi-shield-check'];

    // Assessment image mapping
    $fallbackImage = '1.png';
    $imagesMapping = [
        'الذات' => '1.png',
        'الانفعالي' => '2.png',
        'القيم' => '3.png',
        'التواصل' => '4.png',
        'الشخصي' => '5.png',
        'التفكير' => '1.png',
        'العمل' => '2.png',
        'القيادة' => '3.png',
        'الصحة' => '4.png',
        'الأسرة' => '5.png',
    ];
    foreach($imagesMapping as $key => $img) {
        if(str_contains($assessment->title_ar, $key)) {
            $fallbackImage = $img;
            break;
        }
    }
    $imageName = $assessment->image_url ?: $fallbackImage;

    foreach($result->dimensionScores as $idx => $ds) {
        $chartLabels[] = $ds->dimension->name_ar;
        
        // Map level to ring index: low=1, medium=2, high=3
        $ringValue = match($ds->level) {
            'high'   => 3,
            'medium' => 2,
            default  => 1,
        };
        $chartData[] = $ringValue;

        if ($ds->level === 'high') {
            $strengths[] = "مستوى متميز في: " . $ds->dimension->name_ar;
        } elseif ($ds->level === 'low') {
            $weaknesses[] = "تحتاج إلى تطوير: " . $ds->dimension->name_ar;
        } else {
            $weaknesses[] = "فرصة لتعزيز وتنمية: " . $ds->dimension->name_ar;
        }
    }
@endphp

<div class="result-wrapper">
    <!-- Header Section -->
    <div class="card-custom header-bg mb-4">
        <div class="card-body p-4 p-md-5">
            <div class="row align-items-center flex-column-reverse flex-md-row">
                
                <!-- 3 Stats Cards -->
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="row g-3 h-100">
                        <div class="col-4 col-md-12">
                            <div class="stats-box indigo">
                                <div class="icon"><i class="bi bi-star"></i></div>
                                <div class="text-muted small mb-1">درجتك</div>
                                <div class="fs-5 fw-bold text-navy">{{ $result->total_score }} <span class="fs-6 text-muted fw-normal">من أصل {{ $result->max_possible_score }}</span></div>
                            </div>
                        </div>
                        <div class="col-4 col-md-12">
                            <div class="stats-box blue">
                                <div class="icon"><i class="bi bi-pie-chart"></i></div>
                                <div class="text-muted small mb-1">النسبة</div>
                                <div class="fs-5 fw-bold text-navy">{{ $pct }}%</div>
                            </div>
                        </div>
                        <div class="col-4 col-md-12">
                            <div class="stats-box">
                                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                                <div class="text-muted small mb-1">المستوى</div>
                                <div class="fs-5 fw-bold" style="color: {{ $mainLvl['color'] }}">{{ $mainLvl['label'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Central Circle -->
                <div class="col-md-4 text-center">
                    <svg class="circular-chart" viewBox="0 0 36 36">
                        <path class="circle-bg" d="M18 2.0845 a15.9155 15.9155 0 0 1 0 31.831 a15.9155 15.9155 0 0 1 0 -31.831"/>
                        <path class="circle" stroke="{{ $mainLvl['color'] }}" stroke-dasharray="{{ $dashArray }}" d="M18 2.0845 a15.9155 15.9155 0 0 1 0 31.831 a15.9155 15.9155 0 0 1 0 -31.831"/>
                        <text x="18" y="20.35" class="percentage">{{ $pct }}%</text>
                    </svg>
                    <div class="mt-3">
                        <span class="fs-5 fw-bold" style="color: {{ $mainLvl['color'] }}">مستوى {{ $mainLvl['label'] }}</span>
                    </div>
                </div>

                <!-- Title & Description -->
                <div class="col-md-4 text-center text-md-end mb-4 mb-md-0">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3 overflow-hidden shadow-sm" style="width:75px; height:75px; border: 2px solid #e2e8f0; background: #fff;">
                        <img src="{{ asset('images/dashboard/' . $imageName) }}" alt="{{ $assessment->title_ar }}" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <h2 class="fw-bold text-navy mb-2">{{ $assessment->title_ar }}</h2>
                    <p class="text-muted small mb-3">نتيجتك في اختبار {{ $assessment->title_ar }}</p>
                    @if($recommendation && $recommendation->description_ar)
                        <div class="text-secondary markdown-content" style="font-size: 0.9rem; line-height: 1.6; text-align: right;">
                            {!! Str::markdown($recommendation->description_ar) !!}
                        </div>
                    @else
                        <p class="text-secondary" style="font-size: 0.9rem; line-height: 1.6;">
                            تشير نتيجتك إلى أنك تمتلك مستوى {{ $mainLvl['label'] }} في {{ $assessment->category }}.
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Dimensions Section -->
    <div class="row g-4 mb-4">
        <!-- Radar Chart -->
        <div class="col-lg-5">
            <div class="card-custom h-100 p-4">
                <h5 class="fw-bold text-navy text-center mb-4">نظرة عامة على الأبعاد</h5>
                <div style="position: relative; height: 300px; width: 100%;">
                    <canvas id="radarChart"></canvas>
                </div>
                <div class="text-center text-muted mt-4" style="font-size: 0.8rem;">
                    كلما اتسعت المساحة المظللة، كان مستواك أعلى بشكل عام
                </div>
            </div>
        </div>
        
        <!-- Dimensions Detail -->
        <div class="col-lg-7">
            <div class="card-custom h-100 p-4">
                <h5 class="fw-bold text-navy text-center mb-4">تفصيل الأبعاد</h5>
                @foreach($result->dimensionScores as $idx => $ds)
                    @php
                        $dPct = $ds->max_score > 0 ? round($ds->score / $ds->max_score * 100) : 0;
                        $dLvlKey = in_array($ds->level, ['high','medium','low']) ? $ds->level : 'low';
                        $dLvl = $lvlData[$dLvlKey];
                        $icon = $genericIcons[$idx % count($genericIcons)];
                        $interpretation = $ds->dimension->interpretations->where('level', $ds->level)->first();
                    @endphp
                    <div class="dim-card">
                        <div class="d-flex align-items-center mb-2">
                            <div class="dim-icon me-3"><i class="bi {{ $icon }}"></i></div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <h6 class="fw-bold m-0 text-navy">{{ $ds->dimension->name_ar }}</h6>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-{{ $dLvl['class'] }}-subtle text-{{ $dLvl['class'] }} border border-{{ $dLvl['class'] }}-subtle" style="font-size:0.7rem;">{{ $dLvl['label'] }}</span>
                                        <span class="text-muted small" dir="ltr">{{ $ds->score }}/{{ $ds->max_score }}</span>
                                    </div>
                                </div>
                                <div class="dim-progress-bg">
                                    <div class="dim-progress-bar" style="width: {{ $dPct }}%; background-color: {{ $dLvl['color'] }};"></div>
                                </div>
                            </div>
                        </div>
                        @if($interpretation)
                            <div class="text-muted ps-5 ms-3 markdown-content mt-2" style="font-size: 0.85rem; line-height: 1.5; text-align: right;">
                                {!! Str::markdown($interpretation->interpretation_text_ar) !!}
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Strengths & Weaknesses -->
    <div class="row g-4 mb-4">
        <!-- Weaknesses -->
        <div class="col-md-6">
            <div class="card-custom h-100 p-4" style="background: #fffcfc; border-color: #fee2e2;">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold m-0" style="color: #ef4444;">الجوانب التي تحتاج للتطوير</h5>
                    <i class="bi bi-graph-up-arrow fs-4 text-danger opacity-50"></i>
                </div>
                <ul class="sw-list weaknesses">
                    @forelse($weaknesses as $w)
                        <li>{{ $w }}</li>
                    @empty
                        <li class="text-muted">لا توجد جوانب تحتاج لتطوير عاجل، استمر في أداءك المتميز!</li>
                    @endforelse
                </ul>
            </div>
        </div>
        
        <!-- Strengths -->
        <div class="col-md-6">
            <div class="card-custom h-100 p-4" style="background: #f0fdf4; border-color: #dcfce3;">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold m-0" style="color: #10b981;">نقاط القوة لديك</h5>
                    <i class="bi bi-trophy fs-4 text-success opacity-50"></i>
                </div>
                <ul class="sw-list strengths">
                    @forelse($strengths as $s)
                        <li>{{ $s }}</li>
                    @empty
                        <li class="text-muted">هناك دائمًا فرصة لاكتشاف وتنمية نقاط قوتك بشكل أعمق.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer CTA -->
    <div class="footer-cta d-flex flex-column flex-md-row justify-content-between align-items-center no-print">
        <div class="d-flex align-items-center mb-3 mb-md-0 position-relative z-1">
            <div class="me-3 fs-1 text-warning"><i class="bi bi-gift"></i></div>
            <div>
                <h4 class="fw-bold mb-1 text-white">استثمر في نفسك اليوم</h4>
                <p class="mb-0 text-white-50 small">ابدأ رحلتك التطويرية وحقق أفضل نسخة من نفسك</p>
            </div>
        </div>
        <div class="d-flex gap-2 position-relative z-1">
            <a href="{{ route('dashboard') }}" class="btn bg-white text-navy fw-bold px-4">
                <i class="bi bi-house me-1"></i> العودة للرئيسية
            </a>
            <button onclick="window.print()" class="btn btn-warning fw-bold px-4 text-white">
                <i class="bi bi-file-pdf me-1"></i> تحميل تقرير النتيجة
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Render Radar Chart
    const ctx = document.getElementById('radarChart').getContext('2d');
    const labels = {!! json_encode($chartLabels) !!};
    const data = {!! json_encode($chartData) !!};
    
    new Chart(ctx, {
        type: 'radar',
        data: {
            labels: labels,
            datasets: [{
                label: 'مستوى البعد',
                data: data,
                backgroundColor: 'rgba(245, 158, 11, 0.2)',
                borderColor: '#f59e0b',
                pointBackgroundColor: '#1a2b56',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: '#1a2b56',
                borderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                r: {
                    min: 0,
                    max: 3,
                    angleLines: { color: 'rgba(0, 0, 0, 0.05)' },
                    grid: { color: 'rgba(0, 0, 0, 0.05)' },
                    pointLabels: {
                        font: { family: 'Noto Kufi Arabic', size: 11, weight: 'bold' },
                        color: '#475569'
                    },
                    ticks: {
                        display: false,
                        stepSize: 1
                    }
                }
            },
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#1a2b56',
                    titleFont: { family: 'Noto Kufi Arabic' },
                    bodyFont: { family: 'Noto Kufi Arabic' },
                    rtl: true,
                    callbacks: {
                        label: function(context) {
                            const val = context.raw;
                            if(val === 3) return ' مرتفع';
                            if(val === 2) return ' متوسط';
                            return ' منخفض';
                        }
                    }
                }
            }
        }
    });
});
</script>
@endsection
