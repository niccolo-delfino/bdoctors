@extends('layouts.dashBoard')

@section('title', 'Profilo')

@section('content')


{{-- BOX 1: hidden on small screen  --}}
    @if (count($profilo) < 1)
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
    
    <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center text-center">
            {{-- foto utente --}}
            @if ($item->photo != 'foto' || $item->photo != '')
              <img class="img-size rounded-circle mc-user" src="{{ asset('storage/'.$item->photo) }}" alt="{{ $item->user->nome }}">
              {{-- </div> --}}
            @else
              {{-- <i class="fas fa-user-tie fa-7x mt-5"></i> --}}
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
            @endif
            <div class="mt-3">
              <h4>
                <span class="mc-user">Dr.</span>
                <br>
                {{ $item->user->name }} {{ $item->user->surname }}
              </h4>
              <h6 class='mt-3 mb-4'>Specialista in {{ $item->user->specialization }}</h6>


              {{-- <a href="{{ route('profilo.show', $item->id) }}" class="btn btn-primary">Visualizza CV</a> --}}

              <div class="d-flex mt-4 mb-3">

                <a href="{{ route('profilo.edit', $item->id) }}" class="btn mr-1 mc-edit-btn">Modifica</a>
                {{-- FORM DELETE ITEM  --}}
                <form action="{{ route('profilo.destroy', $item->id)}}"  method="post">
                  {{-- TOKEN  --}}
                  @csrf
                  {{-- METHODO DELETE  --}}
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-dark ml-1">Cancella</button>
                </form>
                {{--END FORM DELETE ITEM  --}}

              </div>



              <!-- {{-- <button class="btn btn-primary">Follow</button>
              <button class="btn btn-outline-primary">Message</button> --}} -->
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- info utente --}}
    <div class="col-sm-12 col-md-8 col-lg-6">
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <h6 class="mb-0">Nome</h6>
            </div>
            <div class="col-md-8 text-secondary">
              {{ $item->user->name }} {{ $item->user->surname }}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <h6 class="mb-0">Email</h6>
            </div>
            <div class="col-sm-8 text-secondary">
              {{ $item->user->email }}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <h6 class="mb-0">Specializzazioni</h6>
            </div>
            <div class="col-sm-8 text-secondary">
              {{ $item->user->specialization }}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <h6 class="mb-0">Telefono</h6>
            </div>
            <div class="col-sm-8 text-secondary">
              {{ $item->phone_num }}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <h6 class="mb-0">Indirizzo personale</h6>
            </div>
            <div class="col-sm-8 text-secondary">
              {{ $item->user->address }}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <h6 class="mb-0">Studio medico</h6>
            </div>
            <div class="col-sm-8 text-secondary">
              <span>{{ $item->office_address }},</span>
              <span>{{ $item->city }}</span>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <h6 class="mb-0">Curriculum</h6>
            </div>
            <div class="col-sm-8 text-secondary mc-user-cv">
              <a href="{{ route('profilo.show', $item->id) }}">Visualizza CV</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
</div>


</div>

@endforeach
@endsection
