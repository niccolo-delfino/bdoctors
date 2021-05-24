@extends('layouts.dashBoard')

@section('title', 'Creazione Profilo')

@section('content')


  <div class="col-sm-12 col-lg-10 mb-3">
    <h4 class='mb-4' style="color:#32c69a">Crea il tuo profilo Dottore</h4>

    {{-- controllo sul form di iscrizione   --}}
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('profilo.store') }}"  method="post" enctype="multipart/form-data">
      @csrf
      @method('POST')

      <div class="form-group">
        <label for="user">Cognome</label>
        <input  type="text" class="form-control" id="user" name="user_name">
      </div>

      <div class="form-group">
        <label for="specialization" >Specializzazione</label>
          <select class="form-control" name="specialization" id="specialization">
              <option >--Seleziona--</option>
              @foreach ($specializations as $item)
                <option value="{{ $item->name }}">{{ $item->name }}</option>
              @endforeach
          </select>
      </div>

      <div class="form-group">
        <label for="user">Indirizzo Studio Medico</label>
        <input  type="text" class="form-control" id="office_address" name="office_address">
      </div>

      <div class="form-group">
        <label for="user">Città Studio Medico</label>
        <input type="text" class="form-control" id="user" name="city">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Numero di telefono</label>
        <input type="text" class="form-control" id="phone_num" name="phone_num">
      </div>

      <div class="custom-file mb-2">
        <input type="file" class="custom-file-input" id="customFile" name="photo">
        <label class="custom-file-label" for="customFile" >Carica foto</label>
      </div>

      <div class="custom-file mb-2">
        <input type="file" class="custom-file-input" id="customFile" name="cv">
        <label class="custom-file-label" for="customFile" >Carica il curriculum</label>
      </div>

      {{-- <div class="container">
        <h2>servizi</h2>
        @foreach ($services as $service)
          <div class="form-group form-check">
            <input name='services[]' value="{{ $service->id }}" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleChek1">{{ $service->name }}</label>
          </div>
        @endforeach
      </div> --}}


      {{-- Input per selezionare i servizi --}}
      <div class="form-group row">
        <!-- <div class="col-sm-4"  style="width:50%;">Servizi</div> -->
        <div class="col-sm-8">
          <div class="form-check" style="margin:0; padding:0">
            <div class="form-group form-check" style="margin:0; padding:0">
              <div class="dropdown">
                <div class="button-group">
                  <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Seleziona Servizi
                  </button>
                  <ul class="mc-user dropdown-menu">
                    @foreach ($services as $service)
                      <li>
                        <a href="#" class="small p-2" data-value="option1" tabIndex="-1">
                          <input type="checkbox" name="services[]" value="{{ $service->id }}">
                          {{ $service->name }}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="d-flex justify-content-center">
        <button type="submit" class="btn mr-1 mc-edit-btn">Crea profilo</button>
      </div>
    </form>
  </div>


@endsection
