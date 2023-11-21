<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="height: 1oovh; width: 100%; display: flex; justify-content: center; justify-items: : center;">
    <div style="margin-top: 40px">

        <table border="1" cellspacing="0" cellpadding="5">
            <tr style="font-weight: bold">
                <td>No</td>
                <td>Nama</td>
                <td>NIM</td>
                <td>Pertanyaan</td>
                <td>Jawaban</td>
            </tr>

            @foreach ($data as $index => $item)
                <tr>
                    <td style="width: 3%">{{ $loop->iteration }} </td>
                    <td style="width: 10%">{{ $item->nama_lengkap }}</td>
                    <td style="width: 10%">{{ $item->nim }}</td>

                    <td style="width: 25%">
                        @foreach ($item->jawaban as $index => $jwb)
                            @php
                                $pertanyaan = \App\Models\Pertanyaan::find($jwb->tbl_pertanyaan_id);
                            @endphp
                            {{ $loop->iteration }}. {{ $pertanyaan->pertanyaan }} <br>
                        @endforeach
                    </td>

                    <td style="width: 25%">
                        @foreach ($item->jawaban as $index => $jwb)
                            @if ($index == 0 && $item->jawaban)
                                @foreach ($item->jawaban as $jwbn)
                                    {{ $loop->iteration }}. {{ $jwbn->jawaban }} <br>
                                @endforeach
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
</body>

</html>
