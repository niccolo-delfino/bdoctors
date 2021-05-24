@extends('layouts.app')

@section('title', 'Ricerca Medico')

@section('content')

  <div class="container">

    {{-- check invio mex  --}}
    @if (session('status'))
      <div class="alert alert-primary">
        {{ session('status') }}
      </div>
    @endif

    {{-- check invio review  --}}
    @if (session('review'))
      <div class="alert alert-primary">
        {{ session('review') }}
      </div>
    @endif

    {{-- DIV CONTENITORE PER VUE  --}}
    <div id ='app'>

      <div class="box_filtri d-flex">

        {{-- FILTRO CITY --}}
        <div class="box-top pt-4">
          <h3>Filtra per città</h3>
          <select v-model='cerca'>
            <option :value="city" v-for='(city, index) in filtro' >@{{city}}</option>
          </select>
        </div>
        
        {{-- FILTRO SPECIALIZATION  --}}
        <div class="box-top pt-4 ml-5">
          <h3>Filtra per specializzazione</h3>
          <select v-model='cercaSpecializzazione'>
            <option :value="specialization" v-for='specialization in filtroSpecializzazione' >@{{specialization}}</option>
          </select>
        </div>

      </div>
        
      {{-- DIV CARDS  --}}
      <div :class='(cerca == "Seleziona" ? "hide" : "row doctors_row mc-doctor mt-5 mb-5")' class="row doctors_row mc-doctor mt-5 mb-5">
        <span  v-if='cerca == profilo.city || cerca == "All"' v-for= 'profilo in profili'>
          <span  v-if='cercaSpecializzazione == profilo.specialization || cercaSpecializzazione == "All"'>
            {{-- DIV CARD SINGOLA  --}}
            <div v-if='' class="col-12 col-sm-6 col-lg-3 mb-2">
              <div class="mc-doctor-card pb-3">
                <img :src="'/storage/' + profilo.photo" :alt="profilo.user_name" class="mc-doctor-img">
                <h3 class="mt-2 mb-0">Dr.@{{ profilo.user_name}}</h3>
                <small>@{{ profilo.specialization }}</small>
                <p><strong>Num: </strong>@{{ profilo.phone_num }}</p>
                <p><strong>Studio: </strong>@{{ profilo.city }}</p>
                <a :href="'http://127.0.0.1:8000/doctor' + profilo.id " class="mc-doctor-details">
                  <i class="fas fa-plus"></i>
                </a>
                <br>
              </div>
            </div>
          </span>
        </div>
        <!-- DIV CARDS -->

        {{-- DIV RISULTATO RICERCA  --}}
        <div :class='(cerca == "Seleziona" ? "show" : "hide")'  class="row doctors_row mc-doctor mt-5 mb-5">
              
          {{-- STAMPO TUTTI I PROFILO E IL RISULTATO DELLA RICERCA PER CITTA' --}}
          @foreach ($doctor as $item)
          {{-- VISUALIZZO SOLO IL PROFILO E L'INDIRIZZO DOVE I RISPETTIVI USER ID SONO UGUALI  --}}
              
            <div class="col-12 col-sm-6 col-lg-3 mb-2">
              <!-- card singolo dottore -->
              <div class="mc-doctor-card pb-3">
                @if ($item->photo != 'foto')
                  <img class="mc-doctor-img" src="{{ asset('storage/'.$item->photo) }}" alt="{{ $item->user->nome }}">
                @else
                  <img src="{{asset('images/doc_1.jpg')}}" alt="" class="mc-doctor-img">
                @endif
                <div class="mc-doctor-text pl-3 pr-3">
                  <h3 class="mt-2 mb-0">Dr. {{ $item->user->surname }}</h3>
                  <small>{{ $item->user->specialization }}</small>
                  <br>

                  <small class='m-0 pt-2' style="display: inline-block"><strong>Visita a:</strong></small>
                  <br>
                  {{-- Indirizzi studi medici --}}
                  <small>
                    <strong>{{ $item->city }}</strong> 
                    <span>, {{ $item->office_address}}</span>
                  </small>
                <!-- dettagli sul medico -->
                </div>
                  <a href="{{ route('show.doctor', $item->id) }}" class="mc-doctor-details">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>
            </div>

          {{-- FINE SEZIONE RECENSIONE  --}}
        
      @endforeach

    </div>
  </div> 
</div>



@endsection
