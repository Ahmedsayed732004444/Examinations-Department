@extends('layouts.admin')
@section('title', 'الإحصائيات')
@section('page-title', 'الإحصائيات والتقارير')

@push('styles')
<style>
canvas { max-height: 320px; }
</style>
@endpush

@section('content')
<!-- Range selector & Export -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div class="d-flex gap-2">
        @foreach([7=>'أسبوع', 30=>'شهر', 90=>'3 أشهر'] as $days => $label)
            <button class="btn btn-sm {{ $days == 30 ? 'btn-primary' : 'btn-outline-secondary' }} btn-range" data-range="{{ $days }}">
                {{ $label }}
            </button>
        @endforeach
    </div>
    <a href="{{ route('admin.statistics.exportCsv') }}" class="btn btn-sm btn-success shadow-sm">
        <i class="bi bi-file-earmark-excel me-1"></i>تصدير جميع النتائج (CSV)
    </a>
</div>

<div class="row g-4">
    <!-- Daily sessions chart -->
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <h6 class="fw-semibold mb-3"><i class="bi bi-bar-chart text-primary me-2"></i>الجلسات اليومية</h6>
                <canvas id="dailyChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Level distribution -->
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <h6 class="fw-semibold mb-3"><i class="bi bi-pie-chart text-success me-2"></i>توزيع المستويات</h6>
                <div class="mb-3">
                    <label class="form-label small fw-medium">المقياس</label>
                    <select class="form-select form-select-sm" id="level-assessment-filter">
                        <option value="all">كل المقاييس</option>
                    </select>
                </div>
                <canvas id="levelChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Avg score per assessment -->
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <h6 class="fw-semibold mb-3"><i class="bi bi-graph-up text-warning me-2"></i>متوسط الدرجات</h6>
                <canvas id="avgChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Top users -->
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-transparent border-0 py-3">
                <h6 class="mb-0 fw-semibold"><i class="bi bi-trophy text-warning me-2"></i>أكثر المستخدمين نشاطاً</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 small" id="top-users-table">
                    <thead class="table-light">
                        <tr><th>#</th><th>الاسم</th><th>البريد</th><th>الجلسات</th></tr>
                    </thead>
                    <tbody id="top-users-body">
                        <tr><td colspan="4" class="text-center text-muted py-3">جاري التحميل...</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
<script>
Chart.defaults.font.family = 'Noto Kufi Arabic';
Chart.defaults.plugins.legend.labels.usePointStyle = true;

let dailyChart, levelChart, avgChart;
let currentRange = 30;
let statsData = null;

function initCharts() {
    dailyChart = new Chart(document.getElementById('dailyChart'), {
        type: 'bar',
        data: { labels: [], datasets: [{ label: 'الجلسات', data: [], backgroundColor: 'rgba(13,110,253,.7)', borderRadius: 6 }] },
        options: { plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, ticks: { stepSize: 1 } } } }
    });

    levelChart = new Chart(document.getElementById('levelChart'), {
        type: 'doughnut',
        data: {
            labels: ['مرتفع', 'متوسط', 'منخفض'],
            datasets: [{ data: [0,0,0], backgroundColor: ['#198754','#ffc107','#dc3545'], borderWidth: 2 }]
        },
        options: { cutout: '65%', plugins: { legend: { position: 'bottom' } } }
    });

    avgChart = new Chart(document.getElementById('avgChart'), {
        type: 'bar',
        data: { labels: [], datasets: [{ label: 'متوسط الدرجة', data: [], backgroundColor: 'rgba(255,193,7,.8)', borderRadius: 6 }] },
        options: { indexAxis: 'y', plugins: { legend: { display: false } }, scales: { x: { beginAtZero: true } } }
    });
}

function loadStats(range) {
    $.get('{{ route('admin.statistics.data') }}', { range }, function(data) {
        statsData = data;

        // Daily chart
        dailyChart.data.labels = data.dailyData.map(d => d.date);
        dailyChart.data.datasets[0].data = data.dailyData.map(d => d.count);
        dailyChart.update();

        // Populate assessment filter
        const sel = $('#level-assessment-filter');
        sel.find('option:not([value="all"])').remove();
        data.assessments.forEach(a => sel.append(`<option value="${a.id}">${a.title}</option>`));

        // Level chart (all)
        updateLevelChart('all');

        // Avg chart
        avgChart.data.labels = data.avgScores.map(a => a.title);
        avgChart.data.datasets[0].data = data.avgScores.map(a => a.avg);
        avgChart.update();

        // Top users
        let rows = '';
        data.topUsers.forEach((u, i) => {
            rows += `<tr><td>${i+1}</td><td>${u.name}</td><td class="text-muted">${u.email}</td><td><span class="badge bg-primary">${u.exam_sessions_count}</span></td></tr>`;
        });
        $('#top-users-body').html(rows || '<tr><td colspan="4" class="text-center text-muted">لا بيانات.</td></tr>');
    });
}

function updateLevelChart(assessmentId) {
    if (!statsData) return;
    let high = 0, medium = 0, low = 0;
    statsData.assessments.forEach(a => {
        if (assessmentId === 'all' || a.id === assessmentId) {
            high   += a.high;
            medium += a.medium;
            low    += a.low;
        }
    });
    levelChart.data.datasets[0].data = [high, medium, low];
    levelChart.update();
}

$('#level-assessment-filter').on('change', function() { updateLevelChart($(this).val()); });

$('.btn-range').on('click', function() {
    currentRange = parseInt($(this).data('range'));
    $('.btn-range').removeClass('btn-primary').addClass('btn-outline-secondary');
    $(this).removeClass('btn-outline-secondary').addClass('btn-primary');
    loadStats(currentRange);
});

$(document).ready(function() {
    initCharts();
    loadStats(currentRange);
});
</script>
@endpush
