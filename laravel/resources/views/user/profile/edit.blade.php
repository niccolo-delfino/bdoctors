@extends('layouts.dashBoard')

@section('title', 'Modifica Profilo')

@section('content')


    {{-- FORM MODIFICA POST  --}}
    <form action="{{ route('profilo.update', $doctor->id) }}"  method="post" enctype="multipart/form-data" class="col-sm-8">

    {{-- TOKEN  --}}
    @csrf

    {{-- METHODO POST  --}}
    @method('PUT')


    <div class="d-flex justify-content-center">
      <img src="{{ asset('storage/'.$doctor->photo) }}" alt="{{ $doctor->user->name }}" alt="{{ $doctor->user->name }}" class="mc-user rounded-circle mb-3">
    </div>

    <div class="form-group">
      <label for="user">Cognome</label>
      <input value="{{ $doctor->user_name }}" type="text" class="form-control" id="user" name="user_name">
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
      <input value="{{ $doctor->office_address }}"  type="text" class="form-control" id="office_address" name="office_address">
    </div>

    <div class="form-group">
      <label for="user">Città Studio Medico</label>
      <input value="{{ $doctor->city }}" type="text" class="form-control" id="user" name="city">
    </div>

    <div class="custom-file mb-2">
      <input type="file" class="custom-file-input" id="customFile" name="photo">
      <label class="custom-file-label" for="customFile" >Carica foto</label>
    </div>

    <div class="custom-file mb-2">
      <input type="file" class="custom-file-input" id="customFile" name="cv">
      <label class="custom-file-label" for="customFile" >Carica il curriculum</label>
    </div>

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Telefono</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword3" placeholder="Inserisci il numero di telefono" value="{{ $doctor->phone_num }}" name="phone_num">
      </div>
    </div>

    {{-- Input per selezionare le specializzazioni --}}

    <div class="row">

      <div class="col-sm-12 col-md-6">
        {{-- Input per selezionare i servizi --}}
        <div class="form-group row">
          <!-- <div class="col-sm-4"  style="width:50%;">Servizi</div> -->
          <div class="col-sm-8">
            <div class="form-check" style="margin:0; padding:0">
              <div class="form-group form-check" style="margin:0; padding:0">
                <div class="dropdown">
                  <div class="button-group">
                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Seleziona Servizi
                    </button>
                    <ul class="mc-user dropdown-menu">
                      @foreach ($services as $i)
                        <li>
                          <a href="#" class="small" data-value="option1" tabIndex="-1">
                            <input type="checkbox" name="services[]" value="{{ $i->id }}" {{ $doctor->services->contains($i->id) ? 'checked' : '' }}>
                            {{ $i->name }}
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
      </div>

      <div class="form-group row mt-3" style="width:100%">
        <div class="col-sm-12 d-flex justify-content-center" style="width:100%">
          <button type="submit" class="btn btn-primary mc-edit-btn">Modifica</button>
        </div>
      </div>

      <div class="col-sm-12">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
      </div>
</form>



</div>


@endsection
