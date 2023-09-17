@extends('dashboard.layouts.main')
@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4" style="font-size: 16px">
        <span class="text-muted fw-light">Diagram /</span> Kriteria
    </h4>
    <div class="row">
        <div class="col">
            <div class="programming-stats">
                <h5 class="card-title">Diagram Kriteria Tata Pamong</h5>

                <div class="chart-container">
                    <canvas class="my-chart" id="tata-pamong-chart"></canvas>
                </div>

                <div class="details">
                    <ul id="tata-pamong-details"></ul>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                    name="btn-tambah">
                    <i class="bi bi-pie-chart"></i>
                    Export
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col">
            <div class="programming-stats">
                <h5 class="card-title">Diagram Kriteria Penelitian</h5>

                <div class="chart-container">
                    <canvas class="my-chart1" id="penelitian-chart"></canvas>
                </div>

                <div class="details">
                    <ul id="penelitian-details"></ul>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                    name="btn-tambah">
                    <i class="bi bi-pie-chart"></i>
                    Export
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const jumlahJawaban = @json($jumlahJawaban);

    const tataPamongChart = document.getElementById("tata-pamong-chart").getContext("2d");
    const penelitianChart = document.getElementById("penelitian-chart").getContext("2d");

    const tataPamongDetails = document.getElementById("tata-pamong-details");
    const penelitianDetails = document.getElementById("penelitian-details");

    new Chart(tataPamongChart, {
        type: "doughnut",
        data: {
            labels: ['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
            datasets: [
                {
                    label: "Tingkat Kepuasan",
                    data: [
                        jumlahJawaban.sangat_tidak_puas,
                        jumlahJawaban.tidak_puas,
                        jumlahJawaban.cukup_puas,
                        jumlahJawaban.puas,
                        jumlahJawaban.sangat_puas
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 205, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(54, 162, 235, 0.6)'
                    ],
                },
            ],
        },
        options: {
            borderWidth: 10,
            borderRadius: 2,
            hoverBorderWidth: 0,
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });

    new Chart(penelitianChart, {
        type: "doughnut",
        data: {
            labels: ['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
            datasets: [
                {
                    label: "Tingkat Kepuasan",
                    data: [
                        jumlahJawaban.sangat_tidak_puas,
                        jumlahJawaban.tidak_puas,
                        jumlahJawaban.cukup_puas,
                        jumlahJawaban.puas,
                        jumlahJawaban.sangat_puas
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 205, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(54, 162, 235, 0.6)'
                    ],
                },
            ],
        },
        options: {
            borderWidth: 10,
            borderRadius: 2,
            hoverBorderWidth: 0,
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });

    const populateUl = (ul, jumlahJawaban) => {
        ul.innerHTML = "";
        const labels = ['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'];
        labels.forEach((l, i) => {
            let li = document.createElement("li");
            li.innerHTML = `${l}: <span class='percentage'>${jumlahJawaban[l]}%</span>`;
            ul.appendChild(li);
        });
    };

    populateUl(tataPamongDetails, jumlahJawaban);
    populateUl(penelitianDetails, jumlahJawaban);
</script>
@endsection
