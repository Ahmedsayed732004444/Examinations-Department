@extends('layouts.user')

@section('title', 'تتبع التقدم في الاختبارات')

@push('styles')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .progress-container {
        direction: rtl;
        text-align: right;
    }
    .exam-section {
        background-color: #fff;
        border-radius: 12px;
        padding: 24px;
        margin-bottom: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .chart-container {
        position: relative;
        height: 300px;
        width: 100%;
        margin-bottom: 30px;
    }
</style>
@endpush

@section('content')
<div class="container py-4 progress-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold m-0"><i class="bi bi-graph-up-arrow me-2 text-primary"></i> تتبع التقدم وسجل الاختبارات</h2>
        <a href="{{ route('user.graded_exams.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-right me-1"></i> العودة للاختبارات
        </a>
    </div>

    @if(empty($progressByExam))
        <div class="alert alert-info text-center py-5">
            <i class="bi bi-info-circle display-4 d-block mb-3"></i>
            <h5 class="mb-0">لا يوجد سجل اختبارات مكتملة حتى الآن.</h5>
            <p class="text-muted mt-2">ابدأ باجتياز الاختبارات لتتمكن من تتبع مستواك وتقدمك هنا.</p>
        </div>
    @else
        @foreach($progressByExam as $examId => $examData)
            <div class="exam-section">
                <h4 class="fw-bold mb-4 text-primary">{{ $examData['exam_title'] }}</h4>
                
                <div class="row">
                    <div class="col-lg-7">
                        <h6 class="text-muted mb-3"><i class="bi bi-bar-chart-fill me-1"></i> الرسم البياني للتقدم</h6>
                        <div class="chart-container">
                            <canvas id="chart-{{ $examId }}"></canvas>
                        </div>
                    </div>
                    
                    <div class="col-lg-5">
                        <h6 class="text-muted mb-3"><i class="bi bi-journal-text me-1"></i> سجل المحاولات السابقة</h6>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>المحاولة</th>
                                        <th>التاريخ</th>
                                        <th>النتيجة</th>
                                        <th>التفاصيل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        // Reverse the sessions to show highest attempt number first
                                        $totalAttempts = count($examData['sessions']);
                                    @endphp
                                    @foreach($examData['sessions'] as $index => $session)
                                        <tr>
                                            <td><span class="badge bg-secondary">محاولة {{ $totalAttempts - $index }}</span></td>
                                            <td class="small" dir="ltr">{{ $session->completed_at ? $session->completed_at->format('Y-m-d') : '' }}</td>
                                            <td>
                                                @if($session->result)
                                                    @php
                                                        $badgeClass = $session->result->percentage >= 70 ? 'success' : ($session->result->percentage >= 50 ? 'warning text-dark' : 'danger');
                                                    @endphp
                                                    <span class="badge bg-{{ $badgeClass }} fw-bold" style="font-size:0.85rem">
                                                        {{ $session->result->percentage }}%
                                                    </span>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('user.graded_exams.result', $session->id) }}" class="btn btn-sm btn-outline-primary py-0 px-2" style="font-size: 0.8rem;">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @foreach($progressByExam as $examId => $examData)
            @php $safeId = str_replace('-', '', $examId); @endphp
            var ctx{{ $safeId }} = document.getElementById('chart-{{ $examId }}').getContext('2d');
            var gradient{{ $safeId }} = ctx{{ $safeId }}.createLinearGradient(0, 0, 0, 300);
            gradient{{ $safeId }}.addColorStop(0, 'rgba(59, 130, 246, 0.4)');
            gradient{{ $safeId }}.addColorStop(1, 'rgba(59, 130, 246, 0.0)');
            
            new Chart(ctx{{ $safeId }}, {
                type: 'line',
                data: {
                    labels: {!! json_encode($examData['labels']) !!},
                    datasets: [{
                        label: 'نسبة النجاح %',
                        data: {!! json_encode($examData['data']) !!},
                        borderColor: '#3b82f6',
                        backgroundColor: gradient{{ $safeId }},
                        borderWidth: 3,
                        pointBackgroundColor: '#ffffff',
                        pointBorderColor: '#3b82f6',
                        pointBorderWidth: 2,
                        pointRadius: 5,
                        pointHoverRadius: 7,
                        fill: true,
                        tension: 0.3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            backgroundColor: '#1e293b',
                            padding: 10,
                            titleFont: { family: 'Tajawal', size: 14 },
                            bodyFont: { family: 'Tajawal', size: 14 },
                            callbacks: {
                                label: function(context) { return 'النتيجة: ' + context.parsed.y + '%'; }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            ticks: { stepSize: 20, callback: function(value) { return value + '%'; } },
                            grid: { borderDash: [5, 5], color: '#e2e8f0' }
                        },
                        x: { grid: { display: false } }
                    }
                }
            });
        @endforeach
    });
</script>
@endpush
