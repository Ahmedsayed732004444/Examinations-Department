@extends('layouts.user')
@section('title', 'نتيجة الاختبار')

@section('content')
<div class="container py-5">
    @if($result)
        <div class="text-center mb-5">
            <h1 class="fw-bold text-darkblue mb-3">أداؤك حسب وحدات الاختبار</h1>
            <p class="text-muted fs-5">ترتيب الوحدات من أعلى درجة إلى أقل درجة</p>
        </div>

        <!-- Top Summary -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-0">
                        <div class="row g-0 text-center align-items-center">
                            <div class="col-md-6 p-4 border-end">
                                <h5 class="text-muted mb-2">مستوى الجاهزية:</h5>
                                @php
                                    $readinessColor = 'text-warning';
                                    if ($result->percentage >= 75) $readinessColor = 'text-success';
                                    elseif ($result->percentage < 60) $readinessColor = 'text-danger';
                                @endphp
                                <h2 class="fw-bold {{ $readinessColor }} mb-0">{{ $readinessLevel }}</h2>
                            </div>
                            <div class="col-md-6 p-4">
                                <h5 class="text-muted mb-2">النتيجة الإجمالية</h5>
                                <h1 class="display-3 fw-bold text-darkblue mb-0">{{ floatval($result->percentage) }}%</h1>
                                <h5 class="mt-2 fw-bold {{ $overallPerformance['class'] }}">{{ $overallPerformance['name'] }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Units Table -->
        <div class="card shadow-sm border-0 rounded-4 mb-4 overflow-hidden">
            <div class="table-responsive">
                <table class="table table-borderless table-hover mb-0 align-middle">
                    <thead class="bg-darkblue text-white text-center">
                        <tr>
                            <th class="py-3 px-4 text-end" style="width: 30%">الوحدة</th>
                            <th class="py-3" style="width: 20%">الدرجة</th>
                            <th class="py-3" style="width: 25%">شريط التقدم</th>
                            <th class="py-3" style="width: 10%">النسبة</th>
                            <th class="py-3" style="width: 15%">مستوى الأداء</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($unitsStats as $stat)
                            <tr class="border-bottom">
                                <td class="py-3 px-4 text-end fw-bold">{{ $stat['name'] }}</td>
                                <td class="py-3">{{ floatval($stat['score']) }} من {{ $stat['total'] }}</td>
                                <td class="py-3">
                                    <div class="progress rounded-pill" style="height: 10px;">
                                        <div class="progress-bar {{ $stat['bar_color'] }}" role="progressbar" style="width: {{ $stat['percentage'] }}%" aria-valuenow="{{ $stat['percentage'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="py-3 fw-bold fs-5">{{ $stat['percentage'] }}%</td>
                                <td class="py-3 fw-bold {{ $stat['level_class'] }}">{{ $stat['level_name'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Summary Boxes -->
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card border-danger bg-light-danger h-100 rounded-4">
                    <div class="card-body text-center p-4 d-flex align-items-center justify-content-center gap-3">
                        <div class="rounded-circle border border-danger border-2 text-danger d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 1.5rem;">
                            <i class="bi bi-graph-down-arrow"></i>
                        </div>
                        <div>
                            <h5 class="text-danger mb-1">أولوية المراجعة:</h5>
                            <h6 class="fw-bold mb-1">{{ $lowestUnit ? $lowestUnit['name'] : '-' }}</h6>
                            <h3 class="fw-bold text-danger mb-0">{{ $lowestUnit ? $lowestUnit['percentage'].'%' : '-' }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card border-success bg-light-success h-100 rounded-4">
                    <div class="card-body text-center p-4 d-flex align-items-center justify-content-center gap-3">
                        <div class="rounded-circle border border-success border-2 text-success d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 1.5rem;">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <div>
                            <h5 class="text-success mb-1">أعلى أداء:</h5>
                            <h6 class="fw-bold mb-1">{{ $highestUnit ? $highestUnit['name'] : '-' }}</h6>
                            <h3 class="fw-bold text-success mb-0">{{ $highestUnit ? $highestUnit['percentage'].'%' : '-' }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Legend -->
        <div class="card shadow-sm border-0 rounded-4 mb-5">
            <div class="card-body p-4 d-flex flex-wrap justify-content-around align-items-center text-center gap-3">
                <div>
                    <div class="d-flex align-items-center gap-2 mb-1 justify-content-center">
                        <span class="badge bg-success rounded-circle p-2"></span>
                        <span class="fw-bold text-success">80% فأكثر:</span>
                    </div>
                    <small class="text-muted fw-bold">متميز / جيد جداً</small>
                </div>
                <div>
                    <div class="d-flex align-items-center gap-2 mb-1 justify-content-center">
                        <span class="badge bg-warning rounded-circle p-2"></span>
                        <span class="fw-bold text-warning">70%-79%:</span>
                    </div>
                    <small class="text-muted fw-bold">جيد</small>
                </div>
                <div>
                    <div class="d-flex align-items-center gap-2 mb-1 justify-content-center">
                        <span class="badge rounded-circle p-2" style="background-color: #fd7e14;"></span>
                        <span class="fw-bold" style="color: #fd7e14;">60%-69%:</span>
                    </div>
                    <small class="text-muted fw-bold">مراجعة</small>
                </div>
                <div>
                    <div class="d-flex align-items-center gap-2 mb-1 justify-content-center">
                        <span class="badge bg-danger rounded-circle p-2"></span>
                        <span class="fw-bold text-danger">أقل من 60%:</span>
                    </div>
                    <small class="text-muted fw-bold">تطوير</small>
                </div>
            </div>
        </div>

        <!-- Review Answers Button -->
        <div class="text-center mb-4">
            <button class="btn btn-outline-darkblue btn-lg px-5 rounded-pill shadow-sm" type="button" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#reviewAnswers" aria-expanded="false" aria-controls="reviewAnswers">
                <i class="bi bi-journal-text me-2"></i> مراجعة الإجابات التفصيلية
            </button>
        </div>

        <!-- Review Answers Section -->
        <div class="collapse" id="reviewAnswers">
            <div class="card shadow-sm border-0 rounded-4 mb-5">
                <div class="card-body p-0">
                    <div class="accordion accordion-flush" id="answersAccordion">
                        @foreach($reviewData as $review)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $review['index'] }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $review['index'] }}" aria-expanded="false" aria-controls="collapse{{ $review['index'] }}">
                                        <div class="d-flex w-100 justify-content-between align-items-center pe-3">
                                            <div class="fw-bold">
                                                <span class="badge bg-secondary me-2">{{ $review['index'] }}</span>
                                                {{ $review['text'] }}
                                                @if($review['unit_name'])
                                                    <span class="badge bg-light text-secondary border ms-2 fw-normal" style="font-size: 0.8rem;"><i class="bi bi-book me-1"></i> {{ $review['unit_name'] }}</span>
                                                @endif
                                            </div>
                                            <div>
                                                @if($review['points'] == 1)
                                                    <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> صحيح</span>
                                                @elseif($review['points'] > 0)
                                                    <span class="badge bg-warning"><i class="bi bi-dash-circle me-1"></i> صحيح جزئياً ({{ floatval($review['points']) }})</span>
                                                @else
                                                    <span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i> خاطئ</span>
                                                @endif
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapse{{ $review['index'] }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $review['index'] }}" data-bs-parent="#answersAccordion">
                                    <div class="accordion-body bg-light">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <h6 class="fw-bold text-muted">إجابتك:</h6>
                                                <ul class="list-unstyled mb-0">
                                                    @forelse($review['options'] as $option)
                                                        @if(in_array($option->id, $review['selected_ids']))
                                                            <li class="mb-1"><i class="bi bi-check2-square text-primary me-2"></i> {{ $option->option_text_ar }}</li>
                                                        @endif
                                                    @empty
                                                        <li class="text-muted">لم تقم باختيار إجابة</li>
                                                    @endforelse
                                                    @if(empty($review['selected_ids']))
                                                        <li class="text-muted">لم تقم باختيار إجابة</li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <h6 class="fw-bold text-muted">الإجابة الصحيحة:</h6>
                                                <p class="mb-0 text-success fw-bold"><i class="bi bi-check-circle-fill me-2"></i> {{ $review['correct_options_text'] }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h6 class="fw-bold text-muted"><i class="bi bi-info-circle me-2"></i> التفسير:</h6>
                                            <p class="mb-0">{{ $review['explanation'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    @else
        <div class="text-center">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">جاري التحميل...</span>
            </div>
            <p class="text-muted mt-3">جاري حساب النتيجة...</p>
        </div>
    @endif

    <div class="text-center mt-5">
        <a href="{{ route('user.graded_exams.index') }}" class="btn btn-secondary px-4 rounded-pill">
            العودة للقائمة
        </a>
    </div>
</div>

<style>
    .bg-darkblue { background-color: #1e3a8a; }
    .text-darkblue { color: #1e3a8a; }
    .btn-outline-darkblue {
        color: #1e3a8a;
        border-color: #1e3a8a;
    }
    .btn-outline-darkblue:hover {
        background-color: #1e3a8a;
        color: white;
    }
    .bg-light-danger { background-color: #f8d7da; }
    .bg-light-success { background-color: #d1e7dd; }
</style>
@endsection