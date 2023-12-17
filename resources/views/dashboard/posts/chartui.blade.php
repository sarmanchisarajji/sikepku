@extends('dashboard.layouts.main')
@section('main-content')
    <style>
        ul li .percentage {
            font-weight: bold;
        }

        .sangat_tidak_puas {
            color: rgba(255, 99, 132, 0.6);
        }

        .tidak_puas {
            color: rgba(255, 159, 64, 0.6);
        }

        .cukup_puas {
            color: rgba(255, 205, 86, 0.6);
        }

        .puas {
            color: rgba(75, 192, 192, 0.6);
        }

        .sangat_puas {
            color: rgba(54, 162, 235, 0.6);
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4" style="font-size: 16px">
            <span class="text-muted fw-light">Diagram /</span> Persentasi Kepuasan Layanan Berdasarkan Kriteria
        </h4>
        <div class="row">
            @php
                $kriteriaId = App\Models\Kriteria::pluck('id')->toArray();    
            @endphp

            @foreach ($data as $kriteria => $jumlahJawaban)
                <div class="col mb-3">
                    <div class="programming-stats">
                        @php
                            $krt = strtolower(str_replace(' ', '', str_replace(',', '', str_replace('Kriteria', '', $kriteria))));
                            $krtSlug = Str::slug($krt);
                        @endphp
                        <h5 class="card-title">Diagram <br> {{ $kriteria }}</h5>

                        <div class="chart-container">
                            <canvas class="my-chart" id="{{ $krtSlug }}-chart"></canvas>
                        </div>

                        <div class="details">
                            <ul id="{{ $krtSlug }}-details"></ul>
                        </div>

                        <a href="{{ route('export', $kriteriaId[$loop->index]) }}" class="btn btn-primary mt-4">
                            Export to CSV
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // const jumlahJawaban = @json($jumlahJawaban);

        @foreach ($data as $kriteria => $jumlahJawaban)

            @php
                $krt = strtolower(str_replace(' ', '', str_replace(',', '', str_replace('Kriteria', '', $kriteria))));
                $krtSlug = Str::slug($krt);
            @endphp


            const {{ $krtSlug }}Chart = document.getElementById("{{ $krtSlug }}-chart").getContext(
                "2d");
            const {{ $krtSlug }}Details = document.getElementById("{{ $krtSlug }}-details");

            new Chart({{ $krtSlug }}Chart, {
                type: "doughnut",
                data: {
                    labels: ['Sangat Tidak Puas', 'Tidak Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
                    datasets: [{
                        label: "Tingkat Kepuasan",
                        data: [
                            {{ $jumlahJawaban['sangat_tidak_puas'] }},
                            {{ $jumlahJawaban['tidak_puas'] }},
                            {{ $jumlahJawaban['cukup_puas'] }},
                            {{ $jumlahJawaban['puas'] }},
                            {{ $jumlahJawaban['sangat_puas'] }}
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

            const populate{{ $krtSlug }}Ul = (ul, jumlahJawaban) => {
                ul.innerHTML = "";
                const labels = ['sangat_tidak_puas', 'tidak_puas', 'cukup_puas', 'puas', 'sangat_puas'];
                const backgroundColors = ['rgba(255, 99, 132, 0.6)', 'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 205, 86, 0.6)', 'rgba(75, 192, 192, 0.6)', 'rgba(54, 162, 235, 0.6)'
                ];
                labels.forEach((l, i) => {
                    const label = l.replace(/_/g, ' ');
                    let li = document.createElement("li");
                    // li.innerHTML = `${label}: <span class='percentage'>${jumlahJawaban[l]}</span>`;
                    li.innerHTML =
                        `${label}: <span class='percentage' style='color: ${backgroundColors[i]}'>${jumlahJawaban[l]}</span>`;
                    li.classList.add(l); // Tambahkan kelas ke elemen li
                    ul.appendChild(li);
                });
            };

            populate{{ $krtSlug }}Ul({{ $krtSlug }}Details, {!! json_encode($jumlahJawaban) !!});
        @endforeach

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
