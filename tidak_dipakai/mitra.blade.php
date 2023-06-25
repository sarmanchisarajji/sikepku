@extends('level.index')

@section('main-content')
    <div class="container">
        @php
            $no = 1;
        @endphp
        @foreach ($pertanyaan as $pertanyaan)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $no++ }}.&nbsp;{{ $pertanyaan->pertanyaan }}</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sangat_puas" id="sangat_puas" value="1">
                        <label class="form-check-label" for="sangat_puas">
                            Sangat Puas / Sangat Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="puas" value="2" id="puas">
                        <label class="form-check-label" for="puas">
                            Puas / Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cukup_puas" id="cukup_puas" value="3">
                        <label class="form-check-label" for="cukup_puas">
                            Cukup Puas / Cukup Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tidak_puas" id="tidak_puas" value="4">
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
                    <textarea class="form-control" rows="5" placeholder="Tulis saran anda" name="saran"></textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
