@extends('layouts.user')
@section('title', 'تقرير نتيجة المقياس - ' . (is_array($assessment) ? $assessment['title_ar'] : $assessment->title_ar))

@push('styles')
<link href="{{ asset('css/report-pdf.css') }}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
@endpush

@section('content')
@php
    // 1. Recover Eloquent Models from Session
    $assessmentObj = $session->assessment;
    $resObj = $session->result;
    $recObj = $assessmentObj->recommendations()->where('level', $resObj->level)->first();

    // 2. Map basic variables
    $pct = $max_score > 0 ? round($total_score / $max_score * 100) : 0;
    
    $lvlData = [
        'excellent' => ['label' => 'متميز', 'degree' => 'متميز'],
        'advanced'  => ['label' => 'متقدم', 'degree' => 'متقدم'],
        'good'      => ['label' => 'جيد', 'degree' => 'جيد'],
        'average'   => ['label' => 'متوسط', 'degree' => 'متوسط'],
        'weak'      => ['label' => 'ضعيف', 'degree' => 'ضعيف'],
        'high'   => ['label' => 'متميز', 'degree' => 'متميز'],
        'medium' => ['label' => 'جيد', 'degree' => 'جيد'],
        'low'    => ['label' => 'ضعيف', 'degree' => 'ضعيف'],
    ];

    $isHighestDimension = $assessmentObj->scoring_type === 'highest_dimension';
    if ($isHighestDimension) {
        $highestLabel = $level;
        if (empty(trim($highestLabel))) {
            $highestScore = -1;
            foreach ($resObj->dimensionScores as $ds) {
                if ($ds->score > $highestScore) {
                    $highestScore = $ds->score;
                    $highestLabel = trim(str_replace('محور', '', $ds->dimension->name_ar));
                }
            }
        }
        $mainLvl = ['label' => $highestLabel, 'degree' => $highestLabel];
    } else {
        if ($pct >= 67) $levelKey = 'high';
        elseif ($pct >= 34) $levelKey = 'medium';
        else $levelKey = 'low';
        $mainLvl = $lvlData[$levelKey];
    }

    // 3. Strengths & Weaknesses
    $strengths = [];
    $weaknesses = [];
    foreach($resObj->dimensionScores as $ds) {
        $ds_score_pct = $ds->max_score > 0 ? round(($ds->score / $ds->max_score) * 100) : 0;
        if (in_array($ds->level, ['excellent', 'advanced', 'high']) || $ds_score_pct >= 60) {
            $strengths[] = (object)['title' => $ds->dimension->name_ar, 'desc' => 'تمتلك قدرة عالية في هذا الجانب.'];
        } elseif (in_array($ds->level, ['weak', 'low']) || $ds_score_pct < 40) {
            $weaknesses[] = (object)['title' => $ds->dimension->name_ar, 'desc' => 'تحتاج إلى تطوير واهتمام لتحسين الأداء.'];
        } else {
            $weaknesses[] = (object)['title' => $ds->dimension->name_ar, 'desc' => 'فرصة لتعزيز وتنمية المهارة.'];
        }
    }

    // 4. Recommendation text parsing
    $parsedRecommendation = '';
    $improvementPoints = [];
    if ($recObj && !empty($recObj->description_ar)) {
        $text = strip_tags(Str::markdown($recObj->description_ar));
        if (mb_strpos($text, ':') !== false) {
            $parts = explode(':', $text, 2);
            if (mb_strlen($parts[0]) < 100 && (mb_strpos($parts[0], 'درجة') !== false || mb_strpos($parts[0], 'مستوى') !== false)) {
                $text = trim($parts[1]);
            }
        }
        $introWords = ['تشير نتيجتك', 'تشير نتائجك', 'أنت مستثمر'];
        foreach($introWords as $iw) {
            $pos = mb_strpos($text, $iw);
            if ($pos !== false && $pos < 50) {
                $text = $iw . explode($iw, $text, 2)[1];
                break;
            }
        }
        $adviseKeywords = [
            'لذلك، ننصح', 'لذلك ننصح', 'لذلك، نوصي', 'لذلك نوصي', 'لذلك، احرص', 'لذلك احرص',
            'احرص على', 'يُنصح', 'ينصح', 'نوصي', 'ننصح', 'ولتحسين', 'للتطوير', 'ولتعزيز',
            'تحتاج', 'المطلوب', 'عليك', 'يجب', 'من المهم', 'من الضروري', 'نقترح',
            'يتطلب', 'يتوجب', 'الهدف التدريبي', 'التدريب على', 'ينبغي', 'لذا'
        ];
        foreach($adviseKeywords as $kw) {
            if (mb_strpos($text, $kw) !== false) {
                $parts = explode($kw, $text, 2);
                $text = trim($parts[0]);
                $text = preg_replace('/(\s*لذلك\s*[,،]?\s*|\s*ولهذا\s*[,،]?\s*)$/u', '', $text);
                $impText = $kw . $parts[1];
                $sentences = preg_split('/[.\n]+|،\s+/', $impText);
                foreach($sentences as $s) {
                    $s = trim(ltrim($s, '-*• '));
                    if (str_contains($s, 'البرامج التدريبية') || str_contains($s, 'الدورات المقترحة') || str_contains($s, 'البرامج المقترحة')) continue;
                    if (mb_strlen($s) > 10) $improvementPoints[] = $s;
                }
                break;
            }
        }
        if (!empty($text) && !in_array(mb_substr($text, -1), ['.', '!', '؟', ':'])) {
            $text .= '.';
        }
        $parsedRecommendation = $text;
    }
    // 5. Lists (Certificates, Programs, Roadmap)
    // Convert arrays to objects for the views to consume seamlessly
    $certs = json_decode(json_encode($certificates ?? []));
    $progs = json_decode(json_encode($programs ?? []));
    $planSteps = $roadmap ?? [];

    $tempPlanSteps = json_decode(json_encode($planSteps), true);
    $planSteps = [];
    if (!empty($tempPlanSteps)) {
        foreach($tempPlanSteps as $k => $step) {
            if(is_array($step) && isset($step['title'])) {
                $planSteps[] = $step['title'];
            } else if (is_string($step)) {
                $planSteps[] = $step;
            } else {
                $planSteps[] = '';
            }
        }
    }

    $radarLabels = $chart_data['labels'] ?? [];
    $radarData = $chart_data['data'] ?? [];

    // Replace the global $assessment array with the Object!
    $assessment = $assessmentObj;
    $result = $resObj;
@endphp


<div class="infographic-report">
    <!-- ==================== PAGE 1 ==================== -->
    <div class="a4-page">
        
        <!-- Header -->
        <div class="report-header">
            <div class="header-logo px-4">
                <img src="{{ asset('images/logo.png') }}" alt="دار الرؤى" style="height: 55px; filter: brightness(0) invert(1); margin: 0;">
            </div>
            <div class="header-center-tag">
                <i class="bi bi-shield-check text-darkblue"></i> تقرير احترافي مدعوم بالتحليل العلمي
            </div>
            <div class="d-none d-md-block" style="width: 150px;"></div>
        </div>

        <h1 class="report-main-title">تقرير نتائج {{ $assessment->title_ar }}</h1>
        <p class="report-subtitle">تقرير احترافي يساعدك على فهم نتائجك واتخاذ قرارات تطوير أكثر وضوحاً.</p>

        <div class="page-padding">
            <div class="row gx-4 mb-4">
                <!-- Sidebar -->
                <div class="col-lg-4 col-md-5 col-12 mb-4 mb-md-0">
                    <div class="user-info-card">
                        <div class="row gy-2 gx-2">
                            <div class="col-lg-12 col-6">
                                <div class="info-row m-0">
                                    <div class="info-icon-box"><i class="bi bi-person-fill"></i></div>
                                    <div class="info-text-box">
                                        <div class="info-label">اسم المستفيد</div>
                                        <div class="info-value">{{ auth()->user()->name }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-6">
                                <div class="info-row m-0">
                                    <div class="info-icon-box"><i class="bi bi-clipboard2-data-fill"></i></div>
                                    <div class="info-text-box">
                                        <div class="info-label">اسم المقياس</div>
                                        <div class="info-value">{{ $assessment->title_ar }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-6">
                                <div class="info-row m-0">
                                    <div class="info-icon-box"><i class="bi bi-calendar-event-fill"></i></div>
                                    <div class="info-text-box">
                                        <div class="info-label">تاريخ التنفيذ</div>
                                        <div class="info-value">{{ $result->created_at->format('d M Y') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-6">
                                <div class="info-row m-0">
                                    <div class="info-icon-box"><i class="bi bi-tags-fill"></i></div>
                                    <div class="info-text-box">
                                        <div class="info-label">رقم التقرير</div>
                                        <div class="info-value">VR-{{ strtoupper(substr($result->id, 0, 8)) }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Overall & Summary -->
                <div class="col-lg-8 col-md-7 col-12">
                    <!-- Score Card -->
                    <div class="overall-result-box">
                        <div class="result-header">
                            <div>
                                <div class="result-title">نتيجتك العامة</div>
                                <div class="level-badge">{{ $isHighestDimension ? 'النمط السائد:' : 'مستوى الجاهزية:' }} {{ $mainLvl['label'] }}</div>
                            </div>
                            <div class="text-end text-darkblue d-flex align-items-center gap-3">
                                <div>
                                    <span class="fw-black" style="font-size: 2.2rem; line-height: 1; letter-spacing: -1px;">{{ $result->total_score }}</span>
                                    <span class="text-muted fw-bold" style="font-size: 0.95rem;">/ {{ $result->max_possible_score }}</span>
                                </div>
                                @php
                                    $circleColor = '#ef4444';
                                    if ($pct >= 67) $circleColor = '#22c55e';
                                    elseif ($pct >= 34) $circleColor = '#f59e0b';
                                @endphp
                                <div class="d-flex justify-content-center align-items-center rounded-circle shadow-sm" style="width: 75px; height: 75px; background-color: {{ $circleColor }}; color: white; font-weight: 900; font-size: 1.6rem; border: 3px solid #f8fafc;">
                                    {{ $pct }}%
                                </div>
                            </div>
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="progress-container">
                            @php
                                // Calculate pin position (RTL means 0% is right, 100% is left)
                                // In HTML RTL, left is right. We use right: X%
                                $pinPos = $pct; 
                            @endphp
                            <div class="progress-pin text-darkblue" style="right: {{ $pinPos }}%;"><i class="bi bi-geo-alt-fill"></i></div>
                            <div class="progress-track">
                                <div class="progress-segment" style="background-color: #ef4444;"></div>
                                <div class="progress-segment" style="background-color: #f59e0b;"></div>
                                <div class="progress-segment" style="background-color: #22c55e;"></div>
                            </div>
                            <div class="progress-labels">
                                <div class="progress-label">منخفض</div>
                                <div class="progress-label">متوسط</div>
                                <div class="progress-label">مرتفع</div>
                            </div>
                        </div>
                    </div>

                @if(!empty($parsedRecommendation))
                    <!-- Summary Card -->
                    <div class="summary-card">
                        <div class="summary-title">
                            <div class="summary-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                            ملخص التقرير
                        </div>
                        <p class="summary-text">
                            {{ $parsedRecommendation }}
                        </p>
                    </div>
                @endif
                </div>

            <!-- Radar -->
            @if(count($radarLabels) > 1)
            <div class="row gx-4 mb-4">
                @if(count($radarLabels) >= 3)
                <div class="col-12 mb-4">
                    <div class="radar-card text-center">
                        <div class="fw-bold text-darkblue mb-3" style="font-size: 1.3rem;">مستوى المهارات</div>
                        <div style="position: relative; height: 380px; max-width: 500px; margin: 0 auto; width: 100%;">
                            <canvas id="skillsRadar"></canvas>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @endif

            <!-- Dimensions Results -->
            @if(!empty($dimensions) && count($dimensions) > 0)
            <h2 class="p2-main-title mt-5 mb-4"><i class="bi bi-layers text-darkblue"></i> تفاصيل نتائج الأبعاد</h2>
            <div class="card shadow-sm border-0 rounded-4 mb-5">
                <div class="card-body p-0">
                    @foreach($dimensions as $index => $dim)
                    <div class="p-4 {{ !$loop->last ? 'border-bottom' : '' }}">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3 gap-2">
                            <h5 class="fw-bold text-darkblue mb-0">{{ $dim['name'] }}</h5>
                            <span class="badge bg-primary rounded-pill px-3 py-2" style="font-size: 0.85rem;">
                                الدرجة: {{ $dim['score'] }} من {{ $dim['max_score'] }} | المستوى: {{ $dim['display_level'] ?? $dim['level'] }}
                            </span>
                        </div>
                        @if(!empty($dim['interpretation']))
                        <p class="text-muted mb-0" style="line-height: 1.8; font-size: 0.95rem; text-align: justify;">
                            {{ $dim['interpretation'] }}
                        </p>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Opportunities (Footer of Page 1 Content) -->
            @if(count($improvementPoints) > 0 || (count($radarLabels) > 1 && count($weaknesses) > 0))
            <h2 class="p2-main-title mt-4"><i class="bi bi-graph-up-arrow text-darkblue"></i> فرص التطوير</h2>
            <div class="opp-card">
                

                @if(count($radarLabels) > 1 && count($weaknesses) > 0)
                <div class="row">
                    @forelse(array_slice($weaknesses, 0, 4) as $wk)
                    <div class="col-lg-3 col-sm-6 col-12 opp-item text-center px-3 mb-3 mb-lg-0" style="border-left: 1px solid #fde68a;">
                        <h6>{{ $wk->title }}</h6>
                        <p>{{ $wk->desc }}</p>
                    </div>
                    @empty
                    @endforelse
                </div>
                @endif

                @if(count($improvementPoints) > 0)
                <div class="{{ (count($radarLabels) > 1 && count($weaknesses) > 0) ? 'mt-4 pt-3' : '' }}" style="{{ (count($radarLabels) > 1 && count($weaknesses) > 0) ? 'border-top: 1px dashed #fde68a;' : '' }}">
                    <ul style="padding-right: 20px; margin-bottom: 0; font-size: 0.95rem; color: #475569; line-height: 1.6;">
                        @foreach($improvementPoints as $pt)
                            <li style="margin-bottom: 6px;"><i class="bi bi-check2-circle text-gold me-2"></i> {{ $pt }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            @endif
        </div>


    </div>


    <!-- ==================== PAGE 2 ==================== -->
    <div class="a4-page">


        <div class="page-padding pt-5 mt-4">
            <h2 class="p2-main-title"><i class="bi bi-bullseye text-darkblue"></i> ماذا تعني هذه النتيجة؟</h2>
            <p class="p2-subtitle">
                تعكس نتيجتك امتلاكك لمجموعة قوية من المهارات التي تؤهلك لتحقيق الأهداف بكفاءة. 
                لتحقيق أقصى استفادة من إمكاناتك، نوصيك بالتركيز على تطوير المهارات المحددة لتعزيز تأثيرك في بيئة العمل.
            </p>

            <!-- Programs -->
            @if(!empty($progs))
            <div class="mb-4">
                <div class="p2-section-title mb-3"><i class="bi bi-mortarboard-fill text-darkblue"></i> البرامج التدريبية المقترحة</div>
                
                @if(!empty($programs_intro))
                    <p class="mb-3" style="color: #1a2b56; line-height: 1.8; font-size: 0.95rem; text-align: justify;">
                        {{ $programs_intro }}
                    </p>
                @endif

                <div class="p2-section-card bg-light-gray border-0 shadow-sm mb-3 p-3">
                    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-2 g-md-3 justify-content-center text-center">
                        @foreach($progs as $prog)
                        <div class="col">
                            <div class="bg-white rounded-4 shadow-sm p-2 h-100 d-flex flex-column align-items-center justify-content-center">
                                @if(isset($prog->icon) && (str_starts_with($prog->icon, 'http') || str_starts_with($prog->icon, '/')))
                                    <img src="{{ str_starts_with($prog->icon, '/') ? asset($prog->icon) : $prog->icon }}" alt="{{ $prog->title ?? '' }}" class="mb-2" style="height: 30px; width: auto; object-fit: contain;">
                                @else
                                    <i class="bi {{ $prog->icon ?? 'bi-journal-bookmark' }} text-secondary mb-2" style="font-size: 1.5rem;"></i>
                                @endif
                                <h6 class="fw-bold text-darkblue mb-0" style="font-size: 0.75rem; line-height: 1.3;">{{ $prog->title ?? '' }}</h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                @if(!empty($programs_outro))
                    <p class="mt-3 mb-2" style="color: #1a2b56; line-height: 1.8; font-size: 0.95rem; text-align: justify;">
                        {{ $programs_outro }}
                    </p>
                @endif
            </div>
            @endif

            <!-- Certificates -->
            @if(!empty($certs))
            <div class="mb-4 p2-section-card bg-light-blue">
                <div class="p2-section-title"><i class="bi bi-award-fill text-darkblue"></i> الشهادات الاحترافية المناسبة</div>
                <div class="p2-section-subtitle">قد تكون مناسبة لك بناءً على نتائج هذا المقياس</div>
                
                @if(!empty($certificates_intro))
                    <p class="mt-3 mb-3" style="color: #1a2b56; line-height: 1.8; font-size: 0.95rem; text-align: justify;">
                        {{ $certificates_intro }}
                    </p>
                @endif
                
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-2 g-md-3 justify-content-center pt-3 pb-2">
                    @foreach($certs as $cert)
                    <div class="col" style="max-width: 180px;">
                        <div class="card border-0 shadow-sm rounded-4 text-center p-2 h-100" style="background-color: #ffffff;">
                            @if(isset($cert->icon) && (str_starts_with($cert->icon, 'http') || str_starts_with($cert->icon, '/')))
                                <div class="mx-auto mb-1 d-flex align-items-center justify-content-center" style="height: 35px;">
                                    <img src="{{ str_starts_with($cert->icon, '/') ? asset($cert->icon) : $cert->icon }}" alt="{{ $cert->title ?? '' }}" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                </div>
                            @else
                                <div class="mx-auto cert-icon {{ $cert->icon ?? 'blue-hexagon' }}" style="transform: scale(0.6); margin-bottom: -15px; margin-top: -15px;">
                                    {{ substr(strtoupper($cert->title ?? ''), 0, 4) }}
                                </div>
                            @endif
                            <h6 class="fw-bold mb-1 text-dark mt-1" style="font-size: 0.75rem; line-height: 1.3;">{{ $cert->title ?? '' }}</h6>
                            @if(!empty($cert->subtitle))
                                <p class="text-muted small mb-0 mt-1" style="font-size: 0.65rem; line-height: 1.3;">{{ $cert->subtitle }}</p>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- 30 Day Plan -->
            @if(count($planSteps) >= 4)
            <div class="p2-section-card bg-light-blue" style="margin-bottom:0;">
                <div class="p2-section-title"><i class="bi bi-calendar3 text-darkblue"></i> خطة تطوير مختصرة (30 يوماً)</div>
                
                <div class="row gx-2 gy-3 mt-4 justify-content-center align-items-stretch">
                    <!-- Step 1 -->
                    <div class="col-lg-3 col-md-6 col-12 d-flex align-items-center">
                        <div class="plan-step shadow-sm border-0 w-100">
                            <h6>الأسبوع الأول</h6>
                            <p>{{ $planSteps[0] ?? 'تحديد الأولويات ووضع خطة يومية.' }}</p>
                            <div class="plan-step-icon"><i class="bi bi-clipboard-check"></i></div>
                        </div>
                        <div class="plan-arrow d-none d-lg-flex ms-2"><i class="bi bi-chevron-left"></i></div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="col-lg-3 col-md-6 col-12 d-flex align-items-center">
                        <div class="plan-step shadow-sm border-0 w-100">
                            <h6>الأسبوع الثاني</h6>
                            <p>{{ $planSteps[1] ?? 'تعلم تقنيات جديدة للعمل.' }}</p>
                            <div class="plan-step-icon"><i class="bi bi-handshake"></i></div>
                        </div>
                        <div class="plan-arrow d-none d-lg-flex ms-2"><i class="bi bi-chevron-left"></i></div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="col-lg-3 col-md-6 col-12 d-flex align-items-center">
                        <div class="plan-step shadow-sm border-0 w-100">
                            <h6>الأسبوع الثالث</h6>
                            <p>{{ $planSteps[2] ?? 'تطبيق الاستراتيجيات عملياً.' }}</p>
                            <div class="plan-step-icon"><i class="bi bi-person-lines-fill"></i></div>
                        </div>
                        <div class="plan-arrow d-none d-lg-flex ms-2"><i class="bi bi-chevron-left"></i></div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="col-lg-3 col-md-6 col-12 d-flex align-items-center">
                        <div class="plan-step shadow-sm border-0 w-100">
                            <h6>الأسبوع الرابع</h6>
                            <p>{{ $planSteps[3] ?? 'مراجعة التقدم وتقييم النتائج.' }}</p>
                            <div class="plan-step-icon"><i class="bi bi-bar-chart-steps"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>

        <!-- Footer Page 2 -->
        <div class="mt-auto py-4 text-center" style="background-color: #f8fafc; border-top: 1px dashed #cbd5e1;">
            <h6 class="text-darkblue fw-bold mb-2">رسالتنا لك</h6>
            <p class="mb-0 mx-auto" style="color: #1e40af; font-size: 0.95rem; max-width: 600px; line-height: 1.6;">
                نتائج هذا المقياس تمثل نقطة بداية لفهم قدراتك. وننصحك بالاستفادة منها في وضع خطة تطوير مستمرة تتناسب مع أهدافك المهنية والشخصية.
            </p>
        </div>
    </div>
</div>

<div class="container mt-4 mb-5 no-print d-flex justify-content-center" style="gap: 15px;">
    <a href="{{ route('dashboard') }}" class="btn btn-light rounded-circle shadow-sm text-darkblue" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;" title="العودة للرئيسية">
        <i class="bi bi-house-door-fill"></i>
    </a>
    <button onclick="window.print()" class="btn btn-primary rounded-circle shadow-lg" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;" title="طباعة التقرير">
        <i class="bi bi-printer-fill"></i>
    </button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('skillsRadar');
    if(ctx) {
        const labels = {!! json_encode($radarLabels) !!};
        const data = {!! json_encode($radarData) !!};
        
        // If there are less than 3 dimensions, a radar chart won't render a polygon. Use bar instead.
        const chartType = labels.length < 3 ? 'bar' : 'radar';
        
        const config = {
            type: chartType,
            data: {
                labels: labels,
                datasets: [{
                    label: 'النسبة المئوية',
                    data: data,
                    backgroundColor: chartType === 'bar' ? '#1e3a8a' : 'rgba(196, 209, 228, 0.7)',
                    borderColor: '#1e3a8a',
                    borderWidth: 2,
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: '#1e3a8a',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverBackgroundColor: '#1e3a8a',
                    pointHoverBorderColor: '#ffffff'
                }]
            },
            options: {
                layout: { padding: 35 },
                responsive: true,
                maintainAspectRatio: false,
                animation: false,
                plugins: {
                    legend: { display: false },
                    datalabels: {
                        display: true,
                        color: '#1e3a8a',
                        font: { family: 'Tajawal', weight: 'bold', size: 11 },
                        formatter: function(value) { return value + '%'; },
                        align: 'start',
                        anchor: 'end',
                        offset: 6
                    }
                }
            },
            plugins: [ChartDataLabels]
        };

        if (chartType === 'radar') {
            config.options.scales = {
                r: {
                    min: 0,
                    max: 100,
                    angleLines: { color: '#e2e8f0' },
                    grid: { color: '#e2e8f0' },
                    pointLabels: {
                        font: { family: 'Tajawal', size: 11, weight: 'bold' },
                        color: '#0f172a'
                    },
                    ticks: { display: false, stepSize: 20 }
                }
            };
        } else {
            config.options.scales = {
                y: {
                    min: 0, max: 100,
                    grid: { color: '#e2e8f0' },
                    ticks: { font: { family: 'Tajawal' } }
                },
                x: {
                    grid: { display: false },
                    ticks: { font: { family: 'Tajawal', weight: 'bold' }, color: '#0f172a' }
                }
            };
        }

        new Chart(ctx, config);
    }
});
</script>
@endsection
