@extends('layouts.app')

@section('title','Registrazioni')

@section('content')
<div class="container">

  <div class="marketing row justify-content-center">
    <div class="testo col-lg-4">
      <h5>Nuovi pazienti ti stanno cercando,</h5>
      <h5><span>Noi </span>li aiutiamo a <span>trovarti</span>.</h5>
      <h2>Raggiungi nuovi pazienti</h2>
      <p>Sei un medico? Bool Doctors è il servizio che ti aiuta a trovare nuovi pazienti grazie ad Internet ed a migliorare l'organizzazione della tua vita professionale.
         Ogni giorno più di 60.000 pazienti visitano il nostro sito per cercare un medico: Bool Doctors è un'opportunità irrinunciabile per farti conoscere e ricevere subito prenotazioni reali.</p>
    </div>
    <div class="video col-lg-8">
        <iframe width="660" height="415" src="https://www.youtube.com/embed/83WwRR2T8nQ" title="Bool Doctor" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="prima_img">
      <img src="https://svgsilh.com/svg_v2/2473174.svg" alt="">
    </div>
    <div class="seconda_img">
    </div>
  </div>

<hr>

    <div class="row justify-content-center  pb-5 pt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Cognome') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="surname" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname">

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specialization" class="col-md-4 col-form-label text-md-right">{{ __('Specializzazione') }}</label>

                            <div class="col-md-6">

                                <select class="form-control" name="specialization" id="specialization">
                                    <option >--Seleziona--</option>
                                    <option value="Andrologia">Andrologia</option>
                                    <option value="Cardiologia">Cardiologia</option>
                                    <option value="Dermatologia">Dermatologia</option>
                                    <option value="Diabetologia">Diabetologia</option>
                                    <option value="Endocrinologia">Endocrinologia</option>
                                    <option value="Fisioterapia">Fisioterapia</option>
                                    <option value="Ginecologia">Ginecologia</option>
                                    <option value="Infettologia">Infettologia</option>
                                    <option value="Medicina dello Sport">Medicina dello Sport</option>
                                    <option value="Medico Legale">Medico Legale</option>
                                    <option value="Neurologia">Neurologia</option>
                                    <option value="Oculistica">Oculistica</option>
                                    <option value="Odontoiatria">Odontoiatria</option>
                                    <option value="Oncologia">Oncologia</option>
                                    <option value="Ortopedia">Ortopedia</option>
                                    <option value="Otorinolaringoiatria">Otorinolaringoiatria</option>
                                    <option value="Pediatria">Pediatria</option>
                                    <option value="Pneumologia">Pneumologia</option>
                                    <option value="Psichiatria">Psichiatria</option>
                                    <option value="Psicologia">Psicologia</option>
                                    <option value="Radiologia">Radiologia</option>
                                    <option value="Senologia">Senologia</option>
                                    <option value="Urologia">Urologia</option>
                                </select>

                                @error('specialization')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
