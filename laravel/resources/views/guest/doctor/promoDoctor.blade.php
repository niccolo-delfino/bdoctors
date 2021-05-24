@extends('layouts.app')

@section('title','Pagina Dottori Promo')

@section('content')
 <!-- row doctors -->
 <div class="container">

  <div class=" row doctors_row mc-doctor mt-5 mb-5">

    <!-- STAMPO TUTTI I PROFILI  -->
    @foreach ($profilo as $item)
    <div class="d-flex ">
      <!-- card singolo dottore -->
      @if ($item->promos && $data < $item->end)
          
      <div class="mc-doctor-card  pb-2 m-5">
        @if ($item->photo == 'foto')
        <img class="mc-doctor-img" src="{{ asset('storage/'.$item->photo) }}" alt="{{ $item->user->nome }}">
        @else
        {{-- <img src="{{asset('images/doc_1.jpg')}}" alt="" class="mc-doctor-img"> --}}
        <img src="{{ asset('storage/'.$item->photo) }}" alt="" class="mc-doctor-img">
        @endif
        <div class="mc-doctor-text pl-3 pr-3">
          <h3 class="mt-2 mb-0">Dott. {{ $item->user->surname }}</h3>
          <small>{{ $item->user->specialization }}</small>
        </div>
        <!-- dettagli sul medico -->
        <a href="{{ route('show.doctor', $item->id) }}" class="mc-doctor-details">
          <i class="fas fa-plus"></i>
        </a>
        
      </div>
      @endif
    </div>
  
    @endforeach
        

        
    </div>

  </div>
@endsection
