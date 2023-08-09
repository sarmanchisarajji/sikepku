@extends('dashboard.layouts.main')
@section('main-content')
    <style>
        .chart-container {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            width: 100%;
            padding-bottom: 60%;
            /* Atur tinggi grafik sesuai kebutuhan Anda */
            position: relative;
        }
    </style>
    <div class="container-xxl container-p-y">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Jawaban', 'Jumlah'],
                ['Sangat Tidak Puas', {{ $jumlahJawaban['sangat_tidak_puas'] }}],
                ['Tidak Puas', {{ $jumlahJawaban['tidak_puas'] }}],
                ['Cukup Puas', {{ $jumlahJawaban['cukup_puas'] }}],
                ['Puas', {{ $jumlahJawaban['puas'] }}],
                ['Sangat Puas', {{ $jumlahJawaban['sangat_puas'] }}]
            ]);

            var options = {
                title: 'Grafik Kepuasan Pengguna Lulusan Terhadap Kriteria Tata Pamong',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart1);

        function drawChart1() {

            var data = google.visualization.arrayToDataTable([
                ['Jawaban', 'Jumlah'],
                ['Sangat Tidak Puas', {{ $jumlahJawaban['sangat_tidak_puas'] }}],
                ['Tidak Puas', {{ $jumlahJawaban['tidak_puas'] }}],
                ['Cukup Puas', {{ $jumlahJawaban['cukup_puas'] }}],
                ['Puas', {{ $jumlahJawaban['puas'] }}],
                ['Sangat Puas', {{ $jumlahJawaban['sangat_puas'] }}]
            ]);

            var options = {
                title: 'Grafik Kepuasan Pengguna Lulusan Terhadap Kriteria Tata Pamong',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
@endsection

{{-- @extends('dashboard.layouts.main')
@section('main-content')
    <div class="container-xxl container-p-y">
        <canvas id="chart"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const labels = @json(array_keys($jumlahJawaban));
            const data = @json(array_values($jumlahJawaban));

            const chart = new Chart(document.getElementById('chart'), {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(255, 205, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(54, 162, 235, 0.6)'
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        </script>
    </div>
@endsection --}}
