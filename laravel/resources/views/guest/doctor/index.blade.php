@extends('layouts.app')

@section('title','Pagina Dottori')

@section('content')
 {{-- STATUS MEX --}}
  @if (session('status'))
      <div class="alert alert-primary">
          {{ session('status') }}
      </div>
  @endif

  {{-- STATUS REV  --}}
  @if (session('review'))
      <div class="alert alert-primary">
          {{ session('review') }}
      </div>
  @endif

<div class="container">
   <!-- row doctors -->
   <div class="row doctors_row mc-doctor mt-5 mb-5">

    <!-- STAMPO TUTTI I PROFILI  -->
    @foreach ($profilo as $item)

    <div class="col-sm-12 col-md-6 col-lg-3 mb-2">
      <!-- card singolo dottore -->
      <div class="mc-doctor-card pb-3" style="width: 100%;">
        @if ($item->photo == 'foto')
          <img class="mc-doctor-img" src="{{ asset('storage/'.$item->photo) }}" alt="{{ $item->user->nome }}">
        @else
          {{-- <img src="{{asset('images/doc_1.jpg')}}" alt="" class="mc-doctor-img"> --}}
          <img src="{{ asset('storage/'.$item->photo) }}" alt="" class="mc-doctor-img">
        @endif
        <div class="mc-doctor-text pl-3 pr-3">
          <h3 class="mt-2 mb-0"><span style="font-size:18px;">Dott.</span> {{ $item->user->surname }}</h3>
          <small>{{ $item->user->specialization }}</small>
        </div>
        <!-- dettagli sul medico -->
        <a href="{{ route('show.doctor', $item->id) }}" class="mc-doctor-details">
          <i class="fas fa-plus"></i>
        </a>

      </div>
    </div>

    @endforeach

    </div>
  </div>
@endsection
