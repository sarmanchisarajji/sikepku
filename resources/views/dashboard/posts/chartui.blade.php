@extends('dashboard.layouts.main')
@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4" style="font-size: 16px">
            <span class="text-muted fw-light">Diagram /</span> Kriteria
        </h4>
        <div class="row">
            <div class="col">
                <div class="programming-stats">
                    <h5 class="card-title">Diagram Kriteria Tata Pamong <br>Terhadap Pengguna Lulusan</h5>

                    <div class="chart-container">
                        <canvas class="my-chart" id="tata-pamong-chart"></canvas>
                    </div>

                    <div class="details">
                        <ul id="tata-pamong-details"></ul>
                    </div>

                    <!-- Button to export data to CSV -->
                    <button type="button" class="btn btn-primary mt-4"
                        onclick="exportToCSV('tata_pamong_data.csv', jumlahJawaban)">
                        Export to CSV
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const jumlahJawaban = @json($jumlahJawaban);

        const tataPamongChart = document.getElementById("tata-pamong-chart").getContext("2d");
        const tataPamongDetails = document.getElementById("tata-pamong-details");


        new Chart(tataPamongChart, {
            type: "doughnut",
            data: {
                labels: ['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
                datasets: [{
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
                }, ],
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

        // new Chart(penelitianChart, {
        //     type: "doughnut",
        //     data: {
        //         labels: ['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
        //         datasets: [{
        //             label: "Tingkat Kepuasan",
        //             data: [
        //                 jumlahJawaban.sangat_tidak_puas,
        //                 jumlahJawaban.tidak_puas,
        //                 jumlahJawaban.cukup_puas,
        //                 jumlahJawaban.puas,
        //                 jumlahJawaban.sangat_puas
        //             ],
        //             backgroundColor: [
        //                 'rgba(255, 99, 132, 0.6)',
        //                 'rgba(255, 159, 64, 0.6)',
        //                 'rgba(255, 205, 86, 0.6)',
        //                 'rgba(75, 192, 192, 0.6)',
        //                 'rgba(54, 162, 235, 0.6)'
        //             ],
        //         }, ],
        //     },
        //     options: {
        //         borderWidth: 10,
        //         borderRadius: 2,
        //         hoverBorderWidth: 0,
        //         plugins: {
        //             legend: {
        //                 display: false,
        //             },
        //         },
        //     },
        // });

        const populateUl = (ul, jumlahJawaban) => {
            ul.innerHTML = "";
            const labels = ['sangat_tidak_puas', 'tidak_puas', 'cukup_puas', 'puas', 'sangat_puas'];
            labels.forEach((l, i) => {
                const label = l.replace(/_/g, ' ');
                let li = document.createElement("li");
                li.innerHTML = `${label}: <span class='percentage'>${jumlahJawaban[l]}%</span>`;
                ul.appendChild(li);
            });
        };

        populateUl(tataPamongDetails, jumlahJawaban);
        populateUl(penelitianDetails, jumlahJawaban);

        // Fungsi untuk mengekspor data ke dalam format CSV
        function exportToCSV(filename, data) {
            const csvData = [];

            // Header CSV
            const headers = ['Label', 'Jumlah'];

            // Menambahkan header ke data CSV
            csvData.push(headers.join(','));

            // Menambahkan baris data ke data CSV
            for (const label in data) {
                if (data.hasOwnProperty(label)) {
                    const row = [label, data[label]];
                    csvData.push(row.join(','));
                }
            }

            // Membuat teks CSV
            const csvText = csvData.join('\n');

            // Membuat objek blob
            const blob = new Blob([csvText], {
                type: 'text/csv'
            });

            // Membuat URL objek blob
            const url = window.URL.createObjectURL(blob);

            // Membuat elemen <a> untuk men-trigger unduhan
            const a = document.createElement('a');
            a.style.display = 'none';
            a.href = url;
            a.download = filename;

            // Men-trigger klik pada elemen <a> untuk mengunduh
            document.body.appendChild(a);
            a.click();

            // Menghapus elemen <a> setelah selesai
            window.URL.revokeObjectURL(url);
            document.body.removeChild(a);
        }
    </script>
@endsection
