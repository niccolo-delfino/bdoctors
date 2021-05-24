{{-- CONTATTI PAGE --}}
@extends ('layouts.app')

@section('title', 'Contatti')

@section ('content')

<div class="mini_jumbotron contatti">
  <div class="container">
    <div class="mini_jumbotron_title">
      <h3>Contatti Online</h3>
    </div>
  </div>
  <div class="mini_jumbotron_black"></div>
</div>

<div class="campi_contatti pt-5 pb-5">
  <div class="formss">
    <div class="container">

      <form action="{{route('contatti.page.sent')}}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="nameSurname"><h5>Nome e Cognome</h5></label>
          <input type="text" class="form-control plc" id="nameSurname" aria-describedby="emailHelp" placeholder="Il tuo Nome e Cognome" name="name">
          <small id="emailHelp" class="form-text text-muted">Non condivideremo con nessuno i tuoi dati.</small>
        </div>
        <div class="form-group">
          <label for="tel"><h5>Numero di telefono</h5></label>
          <input type="tel" class="form-control plc" id="tel" aria-describedby="emailHelp" placeholder="Il tuo numero di telefono" name="tel">
        </div>
        <div class="form-group">
          <label for="mail"><h5>E-mail</h5></label>
          <input type="email" class="form-control plc" id="mail" aria-describedby="emailHelp" placeholder="E-mail" name="mail">
        </div>

        <div class="form-group">
          <label for="test"><h5>Messaggio</h5></label>
          <textarea class="form-control plc2" id="test" rows="3" placeholder="Il tuo testo del messaggio" name="text"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Invia</button>
      </form>

    </div>

  </div>

</div>

@endsection
