@extends('level.index')

@section('main-content')
    <div class="container">
        <form action="/alumni" method="POST">
            @csrf
            @php
                $no = 1;
            @endphp
            @foreach ($pertanyaan as $pertanyaanItem)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $no++ }}.&nbsp;{{ $pertanyaanItem->pertanyaan }}</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban[{{ $pertanyaanItem->id }}]"
                                id="sangat_puas" value="1" required>
                            <label class="form-check-label" for="sangat_puas">
                                Sangat Puas / Sangat Baik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban[{{ $pertanyaanItem->id }}]"
                                value="2" id="puas" required>
                            <label class="form-check-label" for="puas">
                                Puas / Baik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban[{{ $pertanyaanItem->id }}]"
                                id="cukup_puas" value="3" required>
                            <label class="form-check-label" for="cukup_puas">
                                Cukup Puas / Cukup Baik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban[{{ $pertanyaanItem->id }}]"
                                id="tidak_puas" value="4" required>
                            <label class="form-check-label" for="tidak_puas">
                                Tidak Puas / Tidak Baik
                            </label>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="card mt-3 mb-5">
                <div class="card-body">
                    <h5 class="card-title">Berikan Saran!</h5>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Tulis saran anda" name="saran" required></textarea>
                    </div>
                </div>
            </div>

            <div class="container col-md-8 mb-5 col-sm-5 text-center ">
                <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
            </div>
        </form>
    </div>
@endsection
