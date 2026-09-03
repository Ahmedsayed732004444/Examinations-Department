@extends('layouts.user')

@section('title', 'تتبع التقدم في الاختبارات')

@push('styles')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
:root{
    --navy: #14213d;
    --navy-soft: #1e3a5f;
    --accent: #0ea472;
    --bg: #f6f7fb;
    --surface: #ffffff;
    --border: #e6e9f0;
    --text: #1e293b;
    --text-muted: #64748b;
    --radius-lg: 18px;
    --radius-sm: 10px;
    --shadow-sm: 0 2px 10px rgba(15, 23, 42, .05);
}

.progress-page{
    background: var(--bg);
    direction: rtl;
    text-align: right;
    padding: 20px 14px 48px;
}
@media (min-width: 768px){
    .progress-page{ padding: 32px 20px 56px; }
}
.progress-container{ max-width: 1100px; margin: 0 auto; }

.progress-topbar{
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin-bottom: 22px;
}
@media (min-width: 768px){
    .progress-topbar{
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 30px;
    }
}
.progress-topbar h2{
    font-weight: 800;
    margin: 0;
    color: var(--navy);
    font-size: 1.25rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
@media (min-width: 768px){
    .progress-topbar h2{ font-size: 1.6rem; }
}
.progress-topbar h2 i{ color: var(--accent); }

.btn-back{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    border: 1px solid var(--border);
    background: var(--surface);
    color: var(--text);
    border-radius: 999px;
    padding: 10px 18px;
    font-weight: 600;
    font-size: .9rem;
    text-decoration: none;
    align-self: flex-start;
    transition: background .15s ease;
}
@media (min-width: 768px){ .btn-back{ align-self: auto; } }
.btn-back:hover{ background: var(--bg); color: var(--text); }

.progress-empty{
    background: var(--surface);
    border: 1px dashed var(--border);
    border-radius: var(--radius-lg);
    text-align: center;
    padding: 56px 20px;
}
.progress-empty i{ font-size: 2.2rem; color: var(--accent); margin-bottom: 12px; display: block; }
.progress-empty h5{ color: var(--navy); font-weight: 700; margin: 0 0 6px; }
.progress-empty p{ color: var(--text-muted); margin: 0; font-size: .9rem; }

.exam-section{
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 18px;
    margin-bottom: 22px;
    box-shadow: var(--shadow-sm);
}
@media (min-width: 768px){
    .exam-section{ padding: 26px; margin-bottom: 28px; }
}
.exam-section h4{
    color: var(--navy);
    font-weight: 800;
    font-size: 1.05rem;
    margin-bottom: 18px;
}
@media (min-width: 768px){ .exam-section h4{ font-size: 1.25rem; } }

.section-label{
    color: var(--text-muted);
    font-weight: 700;
    font-size: .85rem;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.section-label i{ color: var(--accent); }

.chart-container{
    position: relative;
    height: 220px;
    width: 100%;
    margin-bottom: 24px;
}
@media (min-width: 992px){
    .chart-container{ height: 280px; margin-bottom: 0; }
}

/* Attempts: card list on mobile, table on larger screens */
.attempts-list{ display: flex; flex-direction: column; gap: 10px; }
.attempt-card{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    background: var(--bg);
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
    padding: 12px 14px;
}
.attempt-card .attempt-main{ display: flex; flex-direction: column; gap: 4px; }
.attempt-card .attempt-badge{
    background: var(--surface);
    border: 1px solid var(--border);
    color: var(--text);
    font-size: .78rem;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 999px;
    width: fit-content;
}
.attempt-card .attempt-date{
    font-size: .78rem;
    color: var(--text-muted);
    direction: ltr;
    text-align: right;
}
.attempt-card .attempt-score{
    font-weight: 800;
    font-size: .95rem;
    padding: 5px 12px;
    border-radius: 999px;
    color: #fff;
}
.score-success{ background: #10b981; }
.score-warning{ background: #f59e0b; color: #1e293b; }
.score-danger{ background: #ef4444; }
.attempt-card .attempt-view{
    width: 38px; height: 38px;
    display: flex; align-items: center; justify-content: center;
    border-radius: 50%;
    border: 1px solid var(--border);
    color: var(--navy);
    background: var(--surface);
    flex-shrink: 0;
    text-decoration: none;
    transition: background .15s ease;
}
.attempt-card .attempt-view:hover{ background: var(--bg); color: var(--navy); }

@media (min-width: 992px){
    .attempts-list{ max-height: 280px; overflow-y: auto; padding-inline-end: 4px; }
    .attempts-list::-webkit-scrollbar{ width: 4px; }
    .attempts-list::-webkit-scrollbar-thumb{ background: var(--border); border-radius: 10px; }
}
</style>
@endpush

@section('content')
<div class="progress-page">
<div class="progress-container">
    <div class="progress-topbar">
        <h2><i class="bi bi-graph-up-arrow"></i> تتبع التقدم وسجل الاختبارات</h2>
        <a href="{{ route('user.graded_exams.index') }}" class="btn-back">
            <i class="bi bi-arrow-right"></i> العودة للاختبارات
        </a>
    </div>

    @if(empty($progressByExam))
        <div class="progress-empty">
            <i class="bi bi-info-circle"></i>
            <h5>لا يوجد سجل اختبارات مكتملة حتى الآن.</h5>
            <p>ابدأ باجتياز الاختبارات لتتمكن من تتبع مستواك وتقدمك هنا.</p>
        </div>
    @else
        @foreach($progressByExam as $examId => $examData)
            <div class="exam-section">
                <h4>{{ $examData['exam_title'] }}</h4>

                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="section-label"><i class="bi bi-bar-chart-fill"></i> الرسم البياني للتقدم</div>
                        <div class="chart-container">
                            <canvas id="chart-{{ $examId }}"></canvas>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="section-label"><i class="bi bi-journal-text"></i> سجل المحاولات السابقة</div>
                        @php $totalAttempts = count($examData['sessions']); @endphp
                        <div class="attempts-list">
                            @foreach($examData['sessions'] as $index => $session)
                                @php
                                    $scoreClass = 'score-danger';
                                    if($session->result){
                                        $scoreClass = $session->result->percentage >= 70 ? 'score-success' : ($session->result->percentage >= 50 ? 'score-warning' : 'score-danger');
                                    }
                                @endphp
                                <div class="attempt-card">
                                    <div class="attempt-main">
                                        <span class="attempt-badge">محاولة {{ $totalAttempts - $index }}</span>
                                        <span class="attempt-date">{{ $session->completed_at ? $session->completed_at->format('Y-m-d') : '' }}</span>
                                    </div>
                                    @if($session->result)
                                        <span class="attempt-score {{ $scoreClass }}">{{ $session->result->percentage }}%</span>
                                    @else
                                        <span class="attempt-score score-danger">-</span>
                                    @endif
                                    <a href="{{ route('user.graded_exams.result', $session->id) }}" class="attempt-view" aria-label="عرض النتيجة">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @foreach($progressByExam as $examId => $examData)
            @php $safeId = str_replace('-', '', $examId); @endphp
            var ctx{{ $safeId }} = document.getElementById('chart-{{ $examId }}').getContext('2d');
            var gradient{{ $safeId }} = ctx{{ $safeId }}.createLinearGradient(0, 0, 0, 280);
            gradient{{ $safeId }}.addColorStop(0, 'rgba(14, 164, 114, 0.35)');
            gradient{{ $safeId }}.addColorStop(1, 'rgba(14, 164, 114, 0.0)');

            new Chart(ctx{{ $safeId }}, {
                type: 'line',
                data: {
                    labels: {!! json_encode($examData['labels']) !!},
                    datasets: [{
                        label: 'نسبة النجاح %',
                        data: {!! json_encode($examData['data']) !!},
                        borderColor: '#0ea472',
                        backgroundColor: gradient{{ $safeId }},
                        borderWidth: 3,
                        pointBackgroundColor: '#ffffff',
                        pointBorderColor: '#0ea472',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6,
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
                            backgroundColor: '#14213d',
                            padding: 10,
                            titleFont: { family: 'Tajawal', size: 13 },
                            bodyFont: { family: 'Tajawal', size: 13 },
                            callbacks: {
                                label: function(context) { return 'النتيجة: ' + context.parsed.y + '%'; }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            ticks: { stepSize: 20, font: { size: 11 }, callback: function(value) { return value + '%'; } },
                            grid: { borderDash: [5, 5], color: '#e6e9f0' }
                        },
                        x: {
                            ticks: { font: { size: 11 } },
                            grid: { display: false }
                        }
                    }
                }
            });
        @endforeach
    });
</script>
@endpush