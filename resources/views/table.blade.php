<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="p-5">
    @php
        $kriteria = App\Models\Kriteria::find($kriteriaId);
        $userId = App\Models\Jawaban::select('users_id')
            ->distinct()
            ->pluck('users_id')
            ->toArray();
        $users = App\Models\Users::whereIn('id', $userId)->get();
    @endphp

    <h4>{{ $kriteria->nama_kriteria }}</h4>
    <table class="table table-bordered border-secondary">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Pertanyaan</th>
                <th scope="col">Jawaban</th>
                <th scope="col">Saran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->nama_lengkap }}</td>
                    <td>{{ $user->nim }}</td>

                    <td>
                        <ul>
                            @php
                                $count = 0;
                            @endphp
                            @foreach ($user->jawaban as $jawaban)
                                @php
                                    $pertanyaan = \App\Models\Pertanyaan::where('id', $jawaban->tbl_pertanyaan_id)
                                        ->where('kriteria_id', $kriteriaId)
                                        ->first();

                                @endphp
                                @if ($pertanyaan->kriteria->nama_kriteria ?? '')
                                    <li>{{ $loop->iteration }}. {{ $pertanyaan->pertanyaan }}</li>
                                    @php
                                        $count++;
                                    @endphp
                                @endif
                            @endforeach
                        </ul>
                    </td>

                    <td>
                        <ul>
                            @for ($i = 0; $i < $count; $i++)
                                <li>
                                    {{ $i + 1 }}. {{ $user->jawaban[$i]->jawaban }}
                                </li>
                            @endfor
                        </ul>
                    </td>

                    <td>
                        {{ $user->saran->saran }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
