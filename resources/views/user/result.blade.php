@extends('layouts.user')
@section('title', 'تقرير نتيجة المقياس - ' . $assessment->title_ar)

@push('styles')
<link href="{{ asset('css/report-pdf.css') }}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
@endpush

@section('content')
@php
    $pct = $result->max_possible_score > 0 ? round($result->total_score / $result->max_possible_score * 100) : 0;
    
    // Level configurations (matched to progress bar)
    $lvlData = [
        'excellent' => ['label' => 'متميز', 'degree' => 'متميز'],
        'advanced'  => ['label' => 'متقدم', 'degree' => 'متقدم'],
        'good'      => ['label' => 'جيد', 'degree' => 'جيد'],
        'average'   => ['label' => 'متوسط', 'degree' => 'متوسط'],
        'weak'      => ['label' => 'ضعيف', 'degree' => 'ضعيف'],
        // Legacy fallbacks
        'high'   => ['label' => 'متميز', 'degree' => 'متميز'],
        'medium' => ['label' => 'جيد', 'degree' => 'جيد'],
        'low'    => ['label' => 'ضعيف', 'degree' => 'ضعيف'],
    ];

    $isHighestDimension = $assessment->scoring_type === 'highest_dimension';
    
    if ($isHighestDimension) {
        $levelKey = 'highest';
        $highestLabel = $result->level;
        
        // Fix for legacy empty level bug
        if (empty(trim($highestLabel))) {
            $highestScore = -1;
            foreach ($result->dimensionScores as $ds) {
                if ($ds->score > $highestScore) {
                    $highestScore = $ds->score;
                    $highestLabel = trim(str_replace('محور', '', $ds->dimension->name_ar));
                }
            }
        }
        
        $mainLvl = ['label' => $highestLabel, 'degree' => $highestLabel];
    } else {
        if ($pct >= 80) $levelKey = 'excellent';
        elseif ($pct >= 60) $levelKey = 'advanced';
        elseif ($pct >= 40) $levelKey = 'good';
        elseif ($pct >= 20) $levelKey = 'average';
        else $levelKey = 'weak';
        
        $mainLvl = $lvlData[$levelKey];
    }

    // Data prep
    $strengths = [];
    $weaknesses = [];
    $radarLabels = [];
    $radarData = [];

    foreach($result->dimensionScores as $idx => $ds) {
        $ds_score_pct = $ds->max_score > 0 ? round(($ds->score / $ds->max_score) * 100) : 0;
        // Append percentage to the label so it displays neatly outside the radar chart
        $radarLabels[] = $ds->dimension->name_ar . ' (' . $ds_score_pct . '%)';
        $radarData[] = $ds_score_pct;

        if (in_array($ds->level, ['excellent', 'advanced', 'high']) || $ds_score_pct >= 60) {
            $strengths[] = (object)['title' => $ds->dimension->name_ar, 'desc' => 'تمتلك قدرة عالية في هذا الجانب.'];
        } elseif (in_array($ds->level, ['weak', 'low']) || $ds_score_pct < 40) {
            $weaknesses[] = (object)['title' => $ds->dimension->name_ar, 'desc' => 'تحتاج إلى تطوير واهتمام لتحسين الأداء.'];
        } else {
            $weaknesses[] = (object)['title' => $ds->dimension->name_ar, 'desc' => 'فرصة لتعزيز وتنمية المهارة.'];
        }
    }

    $parsedRecommendation = '';
    $improvementPoints = [];

    if ($recommendation && !empty($recommendation->description_ar)) {
        $text = strip_tags(Str::markdown($recommendation->description_ar));
        
        // 1. Remove grade prefixes (e.g., "مستوى مرتفع (41 درجة فأكثر):")
        if (mb_strpos($text, ':') !== false) {
            $parts = explode(':', $text, 2);
            // If the part before colon is short and contains grade keywords
            if (mb_strlen($parts[0]) < 100 && (mb_strpos($parts[0], 'درجة') !== false || mb_strpos($parts[0], 'مستوى') !== false)) {
                $text = trim($parts[1]);
            }
        }

        // 2. Fallback to remove prefixes without colons
        $introWords = ['تشير نتيجتك', 'تشير نتائجك', 'أنت مستثمر'];
        foreach($introWords as $iw) {
            $pos = mb_strpos($text, $iw);
            if ($pos !== false && $pos < 50) {
                $text = $iw . explode($iw, $text, 2)[1];
                break;
            }
        }

        // 3. Extract recommendations into $improvementPoints
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
                
                // Clean up trailing "لذلك" or "ولهذا" from the summary
                $text = preg_replace('/(\s*لذلك\s*[,،]?\s*|\s*ولهذا\s*[,،]?\s*)$/u', '', $text);
                
                $impText = $kw . $parts[1];
                // Split text into points by dot, line break, or Arabic comma followed by space
                $sentences = preg_split('/[.\n]+|،\s+/', $impText);
                foreach($sentences as $s) {
                    $s = trim($s);
                    // Remove leading dashes or bullets if any
                    $s = ltrim($s, '-*• ');
                    
                    // Skip sentences that mention training programs to avoid duplication with the dedicated section
                    if (str_contains($s, 'البرامج التدريبية') || str_contains($s, 'الدورات المقترحة') || str_contains($s, 'البرامج المقترحة')) {
                        continue;
                    }
                    
                    if (mb_strlen($s) > 10) {
                        $improvementPoints[] = $s;
                    }
                }
                break;
            }
        }

        // Ensure text ends with a dot if it doesn't
        if (!empty($text) && !in_array(mb_substr($text, -1), ['.', '!', '؟', ':'])) {
            $text .= '.';
        }

        $parsedRecommendation = $text;
    }

    // Fallback if no recommendation was parsed
    if (empty($parsedRecommendation)) {
        $parsedRecommendation = 'لديك مستوى ' . ($mainLvl['label'] ?? '') . ' في ' . $assessment->title_ar . '. يظهر قدرتك على التخطيط واتخاذ القرار.';
        $improvementPoints[] = 'نوصيك بالتركيز على تطوير بعض المهارات لتحقيق أداء أكثر توازناً وفاعلية.';
    }

    // Advanced Report Fields (from Assessment DB)
    $certs = $assessment->certificates_ar ? array_map('trim', explode('،', $assessment->certificates_ar)) : [];
    if(empty($certs) && $assessment->certificates_ar) $certs = array_map('trim', explode(',', $assessment->certificates_ar));
    
    $progs = [];
    if (!empty($assessment->programs_ar)) {
        $progs = preg_split('/[،,]+/u', $assessment->programs_ar);
        $progs = array_values(array_filter(array_map('trim', $progs)));
    }
    
    // Hardcode fallbacks if empty to match the design EXACTLY
    if (empty($certs)) {
        $certs = [
            (object)['title' => 'CSM®', 'desc' => 'شهادة إدارة سكرم المعتمد لإدارة المشاريع بفاعلية.', 'logo' => 'CSM'],
            (object)['title' => 'PMP®', 'desc' => 'إدارة المشاريع الاحترافية لتعزيز مهارات إدارة المشاريع.', 'logo' => 'PMP'],
            (object)['title' => 'Lean Six Sigma', 'desc' => 'لتحسين العمليات وزيادة الجودة والكفاءة في العمل.', 'logo' => 'LSS']
        ];
    } else {
        // Map strings to objects for consistency
        $certs = array_map(function($c) { return (object)['title' => $c, 'desc' => 'شهادة احترافية معتمدة.', 'logo' => 'CERT']; }, $certs);
    }

    if (empty($progs)) {
        $progs = [
            (object)['title' => 'القيادة الفعالة وبناء الفرق', 'icon' => 'bi-people'],
            (object)['title' => 'إدارة الوقت وزيادة الإنتاجية', 'icon' => 'bi-clock-history'],
            (object)['title' => 'مهارات التواصل الفعال', 'icon' => 'bi-chat-dots'],
            (object)['title' => 'مهارات التفاوض والإقناع', 'icon' => 'bi-handshake']
        ];
    } else {
        $progs = array_map(function($p) { 
            $icon = 'bi-journal-bookmark';
            if (str_contains($p, 'قياد') || str_contains($p, 'توجيه')) $icon = 'bi-people';
            elseif (str_contains($p, 'تواصل') || str_contains($p, 'اتصال')) $icon = 'bi-chat-dots';
            elseif (str_contains($p, 'وقت') || str_contains($p, 'تخطيط')) $icon = 'bi-clock-history';
            elseif (str_contains($p, 'تفاوض') || str_contains($p, 'إقناع') || str_contains($p, 'علاقات')) $icon = 'bi-handshake';
            elseif (str_contains($p, 'تفكير') || str_contains($p, 'قرار') || str_contains($p, 'إبداع')) $icon = 'bi-lightbulb';
            elseif (str_contains($p, 'ثقة') || str_contains($p, 'ذات')) $icon = 'bi-person-check';
            elseif (str_contains($p, 'سلامة') || str_contains($p, 'ضغوط') || str_contains($p, 'توازن')) $icon = 'bi-heart-pulse';
            
            return (object)['title' => $p, 'icon' => $icon]; 
        }, $progs);
    }
    
    // 30 Day Plan
    $planSteps = $assessment->plan_30_days_ar ? array_map('trim', explode('،', $assessment->plan_30_days_ar)) : [];
    if(empty($planSteps) && $assessment->plan_30_days_ar) $planSteps = array_map('trim', explode(',', $assessment->plan_30_days_ar));
    
    if (empty($planSteps) || count($planSteps) < 4) {
        $planSteps = [
            'تحديد الأولويات ووضع خطة يومية.',
            'تعلم تقنيات التفاوض وممارسة الحالات العملية.',
            'تطبيق استراتيجيات إدارة الضغوط.',
            'مراجعة التقدم وتقييم النتائج.'
        ];
    }
@endphp

<div class="container mb-4 no-print text-end mt-4">
    <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary px-4 me-2">
        <i class="bi bi-house me-1"></i> العودة للرئيسية
    </a>
    <button onclick="window.print()" class="btn btn-primary px-4 fw-bold">
        <i class="bi bi-printer me-1"></i> طباعة التقرير الرسمي
    </button>
</div>

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
            <div class="header-badge">
                الصفحة 1 من 2
            </div>
        </div>

        <h1 class="report-main-title">تقرير النتائج الشخصية والمهنية</h1>
        <p class="report-subtitle">تقرير احترافي يساعدك على فهم نتائجك واتخاذ قرارات تطوير أكثر وضوحاً.</p>

        <div class="page-padding">
            <div class="row gx-4 mb-4">
                <!-- Sidebar -->
                <div class="col-4">
                    <div class="user-info-card">
                        <div class="info-row">
                            <div class="info-icon-box"><i class="bi bi-person-fill"></i></div>
                            <div class="info-text-box">
                                <div class="info-label">اسم المستفيد</div>
                                <div class="info-value">{{ auth()->user()->name }}</div>
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-icon-box"><i class="bi bi-clipboard2-data-fill"></i></div>
                            <div class="info-text-box">
                                <div class="info-label">اسم المقياس</div>
                                <div class="info-value">{{ $assessment->title_ar }}</div>
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-icon-box"><i class="bi bi-calendar-event-fill"></i></div>
                            <div class="info-text-box">
                                <div class="info-label">تاريخ التنفيذ</div>
                                <div class="info-value">{{ $result->created_at->format('d M Y') }}</div>
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-icon-box"><i class="bi bi-tags-fill"></i></div>
                            <div class="info-text-box">
                                <div class="info-label">رقم التقرير</div>
                                <div class="info-value">VR-{{ strtoupper(substr($result->id, 0, 8)) }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Overall & Summary -->
                <div class="col-8">
                    <!-- Score Card -->
                    <div class="overall-result-box">
                        <div class="result-header">
                            <div>
                                <div class="result-title">نتيجتك العامة</div>
                                <div class="level-badge">{{ $isHighestDimension ? 'النمط السائد:' : 'مستوى الجاهزية:' }} {{ $mainLvl['label'] }}</div>
                            </div>
                            <div class="text-end">
                                <span class="result-score-large">{{ $pct }}</span>
                                <span class="result-score-max">من 100</span>
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
                                <div class="progress-segment" style="background-color: #f97316;"></div>
                                <div class="progress-segment" style="background-color: #eab308;"></div>
                                <div class="progress-segment" style="background-color: #22c55e;"></div>
                                <div class="progress-segment" style="background-color: #16a34a;"></div>
                            </div>
                            <div class="progress-labels">
                                <div class="progress-label">ضعيف</div>
                                <div class="progress-label">متوسط</div>
                                <div class="progress-label">جيد</div>
                                <div class="progress-label">متقدم</div>
                                <div class="progress-label">متميز</div>
                            </div>
                        </div>
                    </div>

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
                </div>
            </div>

            <!-- Radar & Strengths -->
            @if(count($radarLabels) > 1)
            <div class="row gx-4 mb-4">
                @if(count($radarLabels) >= 3)
                <div class="col-6">
                    <div class="radar-card">
                        <div class="section-icon-title">مستوى المهارات</div>
                        <div style="position: relative; height: 250px; width: 100%;">
                            <canvas id="skillsRadar"></canvas>
                        </div>
                        <div class="d-flex justify-content-center gap-3 mt-3" style="font-size:0.8rem;">
                            <span class="text-danger"><i class="bi bi-circle-fill"></i> ضعيف</span>
                            <span class="text-warning"><i class="bi bi-circle-fill"></i> متوسط</span>
                            <span class="text-success"><i class="bi bi-circle-fill"></i> جيد</span>
                            <span style="color:#16a34a;"><i class="bi bi-circle-fill"></i> متقدم</span>
                            <span style="color:#15803d;"><i class="bi bi-circle-fill"></i> متميز</span>
                        </div>
                    </div>
                </div>
                @endif
                <div class="{{ count($radarLabels) >= 3 ? 'col-6' : 'col-12' }}">
                    <div class="strengths-card">
                        <div class="section-icon-title">نقاط القوة <i class="bi bi-hand-thumbs-up-fill text-success" style="font-size:1.5rem;"></i></div>
                        <ul class="strengths-list">
                            @forelse($strengths as $st)
                            <li>
                                <div class="strengths-icon"><i class="bi bi-people-fill"></i></div>
                                <div class="strengths-text">
                                    <h6>{{ $st->title }}</h6>
                                    <p>{{ $st->desc }}</p>
                                </div>
                            </li>
                            @empty
                            <li>
                                <div class="strengths-icon bg-secondary"><i class="bi bi-info"></i></div>
                                <div class="strengths-text">
                                    <h6 class="text-secondary">لا يوجد</h6>
                                    <p>لا توجد نقاط قوة بارزة حالياً.</p>
                                </div>
                            </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            @endif

            <!-- Opportunities (Footer of Page 1 Content) -->
            <div class="opp-card">
                <div class="section-icon-title text-gold"><i class="bi bi-bar-chart-fill"></i> فرص التطوير</div>
                
                @if(count($radarLabels) > 1 && count($weaknesses) > 0)
                <div class="row">
                    @forelse(array_slice($weaknesses, 0, 4) as $wk)
                    <div class="col-3 opp-item text-center px-3" style="border-left: 1px solid #fde68a;">
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
                
                @if(count($improvementPoints) == 0 && (count($radarLabels) <= 1 || count($weaknesses) == 0))
                <div class="text-center text-muted">لا توجد مجالات عاجلة للتطوير.</div>
                @endif
            </div>
        </div>

        <!-- Footer Page 1 -->
        <div class="footer-bar">
            <div>نتائج هذا التقرير سرية وتستخدم لأغراض التطوير فقط<br><span style="color:#94a3b8;">جميع الحقوق محفوظة &copy; {{ date('Y') }} دار الرؤى للتدريب والتطوير</span></div>
            <div>
                <i class="bi bi-award-fill footer-medal"></i>
            </div>
        </div>
    </div>


    <!-- ==================== PAGE 2 ==================== -->
    <div class="a4-page">
        <!-- Header -->
        <div class="p2-header">
            <div class="p2-badge">الصفحة 2 من 2</div>
            <div class="p2-logo-box px-4">
                <img src="{{ asset('images/logo.png') }}" alt="دار الرؤى" style="height: 45px; filter: brightness(0) invert(1); margin: 0;">
            </div>
        </div>

        <div class="page-padding">
            <h2 class="p2-main-title"><i class="bi bi-bullseye text-darkblue"></i> ماذا تعني هذه النتيجة؟</h2>
            <p class="p2-subtitle">
                تعكس نتيجتك امتلاكك لمجموعة قوية من المهارات التي تؤهلك لتحقيق الأهداف بكفاءة. 
                لتحقيق أقصى استفادة من إمكاناتك، نوصيك بالتركيز على تطوير المهارات المحددة لتعزيز تأثيرك في بيئة العمل.
            </p>

            <!-- Certificates -->
            <div class="p2-section-card bg-light-blue">
                <div class="p2-section-title"><i class="bi bi-award-fill text-darkblue"></i> الشهادات الاحترافية المناسبة</div>
                <div class="p2-section-subtitle">قد تكون مناسبة لك بناءً على نتائج هذا المقياس</div>
                
                <div class="row gx-3">
                    @foreach(array_slice($certs, 0, 3) as $cert)
                    <div class="col-4">
                        <div class="cert-card">
                            <div class="cert-icon bg-gold">{{ is_object($cert) ? (isset($cert->logo) ? $cert->logo : substr($cert->title,0,3)) : 'C' }}</div>
                            <h6>{{ is_object($cert) ? $cert->title : $cert }}</h6>
                            <p>{{ is_object($cert) ? $cert->desc : 'شهادة احترافية.' }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Programs -->
            <div class="p2-section-card bg-light-gray border-light-blue">
                <div class="p2-section-title"><i class="bi bi-mortarboard-fill text-darkblue"></i> البرامج التدريبية المقترحة</div>
                
                <div class="row gx-3 mt-4">
                    @foreach(array_slice($progs, 0, 8) as $prog)
                    <div class="col-3 mb-3">
                        <div class="prog-card border-0 shadow-sm h-100">
                            <div class="prog-icon"><i class="bi {{ is_object($prog) ? $prog->icon : 'bi-journal' }}"></i></div>
                            <h6>{{ is_object($prog) ? $prog->title : $prog }}</h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- 30 Day Plan -->
            <div class="p2-section-card bg-light-blue" style="margin-bottom:0;">
                <div class="p2-section-title"><i class="bi bi-calendar3 text-darkblue"></i> خطة تطوير مختصرة (30 يوماً)</div>
                
                <div class="d-flex justify-content-between align-items-stretch mt-4" style="gap:10px;">
                    <!-- Step 1 -->
                    <div style="flex:1;">
                        <div class="plan-step shadow-sm border-0">
                            <h6>الأسبوع الأول</h6>
                            <p>{{ $planSteps[0] ?? 'تحديد الأولويات ووضع خطة يومية.' }}</p>
                            <div class="plan-step-icon"><i class="bi bi-clipboard-check"></i></div>
                        </div>
                    </div>
                    <div class="plan-arrow"><i class="bi bi-chevron-left"></i></div>
                    
                    <!-- Step 2 -->
                    <div style="flex:1;">
                        <div class="plan-step shadow-sm border-0">
                            <h6>الأسبوع الثاني</h6>
                            <p>{{ $planSteps[1] ?? 'تعلم تقنيات جديدة للعمل.' }}</p>
                            <div class="plan-step-icon"><i class="bi bi-handshake"></i></div>
                        </div>
                    </div>
                    <div class="plan-arrow"><i class="bi bi-chevron-left"></i></div>
                    
                    <!-- Step 3 -->
                    <div style="flex:1;">
                        <div class="plan-step shadow-sm border-0">
                            <h6>الأسبوع الثالث</h6>
                            <p>{{ $planSteps[2] ?? 'تطبيق الاستراتيجيات عملياً.' }}</p>
                            <div class="plan-step-icon"><i class="bi bi-person-lines-fill"></i></div>
                        </div>
                    </div>
                    <div class="plan-arrow"><i class="bi bi-chevron-left"></i></div>
                    
                    <!-- Step 4 -->
                    <div style="flex:1;">
                        <div class="plan-step shadow-sm border-0">
                            <h6>الأسبوع الرابع</h6>
                            <p>{{ $planSteps[3] ?? 'مراجعة التقدم وتقييم النتائج.' }}</p>
                            <div class="plan-step-icon"><i class="bi bi-bar-chart-steps"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Page 2 -->
        <div class="quote-footer w-100 d-flex align-items-center">
            <!-- Right side (Logo) -->
            <div class="d-flex align-items-center" style="width: 25%;">
                <img src="{{ asset('images/logo.png') }}" alt="دار الرؤى" style="height: 55px; filter: brightness(0) invert(1);">
            </div>
            
            <!-- Center (Message) -->
            <div class="text-center px-4" style="flex-grow: 1;">
                <h5 class="text-white fw-bold mb-2">رسالتنا لك</h5>
                <p class="mb-0 mx-auto" style="color: #cbd5e1; font-size: 0.95rem; max-width: 600px; line-height: 1.6;">
                    نتائج هذا المقياس تمثل نقطة بداية لفهم قدراتك. وننصحك بالاستفادة منها في وضع خطة تطوير مستمرة تتناسب مع أهدافك المهنية والشخصية.
                </p>
            </div>
            
            <!-- Left side (Empty to balance flexbox) -->
            <div style="width: 25%;"></div>
        </div>
    </div>
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
                    backgroundColor: chartType === 'bar' ? 'rgba(30, 58, 138, 0.8)' : 'rgba(30, 58, 138, 0.2)',
                    borderColor: 'rgba(30, 58, 138, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(30, 58, 138, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(30, 58, 138, 1)'
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
                        display: false
                    }
                }
            },
            plugins: [ChartDataLabels]
        };

        if (chartType === 'radar') {
            config.options.scales = {
                r: {
                    angleLines: { color: '#e2e8f0' },
                    grid: { color: '#e2e8f0' },
                    pointLabels: {
                        font: { family: 'Tajawal', size: 11, weight: 'bold' },
                        color: '#0f172a'
                    },
                    ticks: { display: false, min: 0, max: 100, stepSize: 20 }
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
