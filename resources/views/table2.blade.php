<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="padding: 3% 5%">

    <h4>{{ $kriteria->nama_kriteria }}</h4>

    <h4>User :</h4>
    <ol>
        @foreach ($users as $item)
            <li>
                {{ $item->nama_lengkap }} || {{ $item->nim }}
            </li>
        @endforeach
    </ol>

    <h4>Pertanyaan :</h4>
    <ol>
        @foreach ($question as $item)
            <li>
                {{ $item->pertanyaan }}
            </li>
        @endforeach
    </ol>

    <h4>Jawaban :</h4>
    <ol>
        @foreach ($answer as $item)
            <li>
                {{ $item->jawaban }}
            </li>
        @endforeach
    </ol>

    <table cellspacing=0 cellpadding=10 border=1>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            @php
                $count = count($users);
            @endphp

            @for ($i = 0; $i < $count; $i++)
                <tr>
                    @if ($i == 0)
                        <td rowspan="{{ $count }}">1</td>
                        <td rowspan="{{ $count }}">{{ $users[$i]->nama_lengkap }}</td>
                        <td rowspan="{{ $count }}">{{ $users[$i]->nim }}</td>
                    @endif
                    <td>{{ $question[$i]->pertanyaan }}</td>
                    <td>{{ $answer[$i]->jawaban }}</td>
                </tr>
            @endfor
        </tbody>
    </table>

</body>

</html>
