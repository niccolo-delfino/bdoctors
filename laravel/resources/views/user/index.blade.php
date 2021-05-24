@extends('layouts.dashBoard')

@section('title', 'DashBoard Utente')

@section('content')

  <div class="col-sm-12 col-lg-10 ">

    {{-- STATUS MODIFICHE-AGGIUNTE-CANCELLAZIONI --}}
    @if (session('status'))
      <div class="alert alert-primary">
          {{ session('status') }}
      </div>
    @endif

    @if (count($profilo) < 1)

      {{-- BOX 1: hidden on small screen  --}}
      <div class="d-none d-md-block card-body card mb-4 p-0 col-md-6 col-lg-5 offset-lg-1 mc-user mc-mt flip-card pl-2 pr-2">
        <div class="flip-card-inner">
          <div class="flip-card-front mc-card1">
          </div>
          <div class="flip-card-back mc">
            <div class="mc-text">
              <p style="width: 250px;">Completa la registrazione creando il tuo profilo dottore</p>
              <a class="btn btn-light" href="{{ route('profilo.create') }}">Crea profilo</a>
            </div>
          </div>
        </div>
      </div>

      {{-- BOX 1: visible only on small screen  --}}
      <div class="card-body card col-sm-12 mb-4 p-0 d-md-none mc-user mc-mt pl-2 pr-2 mc-container-card-mobile mr-2">
        <div class="flip-card-inner mc-card-mobile">
          <div class="mc-text">
            <p style="width: 230px;">Completa la registrazione creando il tuo profilo dottore</p>
            <a class="btn mc-edit-btn" href="{{ route('profilo.create') }}">Crea profilo</a>
          </div>
        </div>
      </div>

    @endif

    @foreach ($profilo as $item)

      <div class="row">

        {{-- BOX 1: hidden on small screen  --}}
        <div class="d-none d-md-block card-body card mb-4 p-0 col-md-6 col-lg-5 offset-lg-1 mc-user mc-mt flip-card pl-2 pr-2">
          <div class="flip-card-inner">
            <div class="flip-card-front mc-card1">
            </div>
            <div class="flip-card-back mc">
              <div class="mc-text">
                <h3>Dr. {{ $item->user->surname }}</h3>
                <p>{{ $item->user->specialization }}</p>
                <a class="btn btn-light" href="{{ route('profilo.index') }}">Profilo</a>
              </div>
            </div>
          </div>
        </div>

        {{-- BOX 1: visible only on small screen  --}}
        <div class="card-body card col-sm-12 mb-4 p-0 d-md-none mc-user mc-mt pl-2 pr-2 mc-container-card-mobile ml-2 mr-2">
          <div class="flip-card-inner mc-card-mobile">
            <div class="mc-text">
              <h3>Dr. {{ $item->user->surname }}</h3>
              <p>{{ $item->user->specialization }}</p>
              <a class="btn mc-edit-btn" href="{{ route('profilo.index') }}">Profilo</a>
            </div>
          </div>
        </div>

        {{-- BOX 2: hidden on small screen  --}}
        <div class="d-none d-md-block card-body card mb-4 p-0 col-sm-12 col-md-6 col-lg-5 mc-user mc-mt flip-card pl-2 pr-2">
          <div class="flip-card-inner">
            <div class="flip-card-front mc-card2">
            </div>
            <div class="flip-card-back">
              <div class="mc-text">
                <h3>Posta in arrivo</h3>
                <p>Controlla chi ti ha scritto</p>
                <a class="btn btn-light" href="{{ route('message.index') }}">Scopri</a>
              </div>
            </div>
          </div>
        </div>

        {{-- BOX 2: visible only on small screen  --}}
        <div class="card-body card col-sm-12 mb-4 p-0 d-md-none mc-user mc-mt pl-2 pr-2 mc-container-card-mobile ml-2 mr-2">
          <div class="flip-card-inner mc-card-mobile">
            <div class="mc-text">
              <h3>Posta in arrivo</h3>
              <p>Controlla chi ti ha scritto</p>
              <a class="btn mc-edit-btn" href="{{ route('message.index') }}">Scopri</a>
            </div>
          </div>
        </div>

        {{-- BOX 3: hidden on small screen  --}}
        <div class="d-none d-md-block card-body card mb-4 p-0 col-sm-12 col-md-6 col-lg-5 offset-lg-1 mc-user mc-mt flip-card pl-2 pr-2">
          <div class="flip-card-inner">
            <div class="flip-card-front mc-card3">
            </div>
            <div class="flip-card-back">
              <div class="mc-text">
                <h3>Recensioni</h3>
                <p>I riscontri dei tuoi pazienti</p>
                <a class="btn btn-light" href="{{ route('review.index') }}">Scopri</a>
              </div>
            </div>
          </div>
        </div>

        {{-- BOX 3: visible only on small screen  --}}
        <div class="card-body card col-sm-12 mb-4 p-0 d-md-none mc-user mc-mt pl-2 pr-2 mc-container-card-mobile ml-2 mr-2">
          <div class="flip-card-inner mc-card-mobile">
            <div class="mc-text">
              <h3>Recensioni</h3>
              <p>I riscontri dei tuoi pazienti</p>
              <a class="btn mc-edit-btn" href="{{ route('review.index') }}">Scopri</a>
            </div>
          </div>
        </div>

        {{-- BOX 4: hidden on small screen  --}}
        <div class="d-none d-md-block card-body card mb-4 p-0 col-sm-12 col-md-6 col-lg-5 mc-user mc-mt flip-card pl-2 pr-2">
          <div class="flip-card-inner">
            <div class="flip-card-front mc-card4">
            </div>
            <div class="flip-card-back">
              <div class="mc-text">
                <h3>Promo</h3>
                <p>Sponsorizza il tuo profilo</p>
                <a class="btn btn-light" href="{{ route('payment.request', $item->user_id)}}">Attiva</a>
              </div>
            </div>
          </div>
        </div>

        {{-- BOX 4: visible only on small screen  --}}
        <div class="card-body card col-sm-12 mb-4 p-0 d-md-none mc-user mc-mt pl-2 pr-2 mc-container-card-mobile ml-2 mr-2">
          <div class="flip-card-inner mc-card-mobile">
            <div class="mc-text">
              <h3>Promo</h3>
              <p>Sponsorizza il tuo profilo</p>
              <a class="btn mc-edit-btn" href="{{ route('payment.request', $item->user_id)}}">Attiva</a>
            </div>
          </div>
        </div>

        {{-- BOX 5: hidden on small screen  --}}
        <div class="d-none d-md-block card-body card mb-4 p-0 col-sm-12 col-lg-10 mc-user mc-no-border offset-lg-1 pl-2 pr-2">
          <div class="flip-card-inner">
            <div class="flip-card-front mc-card5">
              <div class="mc-text-lastcard">
                <h2>Stats</h2>
                <p>Visualizza le tue statistiche</p>
                <a class="btn mr-1 mc-edit-btn" href="{{ route('statistiche') }}">Scopri</a>
              </div>
            </div>
          </div>
        </div>

        {{-- BOX 5: visible only on small screen  --}}
        <div class="card-body card col-sm-12 mb-4 p-0 d-md-none mc-user mc-mt pl-2 pr-2 mc-container-card-mobile ml-2 mr-2">
          <div class="flip-card-inner mc-card-mobile">
            <div class="mc-text">
              <h3>Stats</h3>
              <p>Visualizza statistiche</p>
              <a class="btn mr-1 mc-edit-btn" href="{{ route('statistiche') }}">Scopri</a>
            </div>
          </div>
        </div>

      </div>


@endforeach

</div>



@endsection
