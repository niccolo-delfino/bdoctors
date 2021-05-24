@extends('layouts.app')

@section('title','Pagina Dottori Singolo')

  @section('content')

  <div class="container pt-5 box_card_doctor ">

    <div class="box_profilo box">
    @foreach ($doctor as $item)
        
    <div class="col-sm-6 offset-sm-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center text-center">
            @if ($item->photo != 'foto' || $item->photo != '')
              <img class="img-size rounded-circle mc-user" src="{{ asset('storage/'.$item->photo) }}" alt="{{ $item->user->nome }}">
              {{-- </div> --}}
            @else
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
            @endif
            <div class="mt-3">
              <h4>
                <span class="mc-user">Dr.</span>
                <br>
                {{ $item->user->name }} {{ $item->user->surname }}
              </h4>
              <h6 class='mt-3 mb-4'>Specialista in {{ $item->user->specialization }}</h6>

              <div class="d-flex mt-4 mb-3">

                {{-- PULSANTE PER CONTATTARE  --}}
                <button type="button" class="btn mr-1 mc-edit-btn" data-toggle="modal" data-target="#exampleModal"  data-whatever="{{ $item->user->email }}">Contattami</button>
                {{-- PULSANTE RECENSIONE  --}}
                <button type="button" class="btn btn-outline-dark ml-1" data-toggle="modal" data-target="#review"  data-whatever="{{ $item->user->email }}">Scrivi Una Recensione</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- info utente --}}
    <div class="col-sm-6 mt-1 offset-sm-3">
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
              <h6 class="mb-0">Indirizzo Studio</h6>
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
              <button type="button" class="btn btn-outline-dark ml-1" data-toggle="modal" data-target="#cv" >Visualizza CV</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    {{-- REVIEW --}}
        <div id="accordion" class="col-sm-12 col-lg-12 ">

          <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">
          <h4 class="mb-3" style="color: #32c69a">Recensioni ricevute</h4>
          <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
            <div class="bg-white rounded shadow-sm p-2 mb-2 restaurant-detailed-ratings-and-reviews shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
            <div class="bg-white rounded shadow-sm p-2 mb-2 restaurant-detailed-ratings-and-reviews shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
              @if (count($reviews) < 1)
                <h4>Nessuna recensione ricevuta </h4>
              
              @else
                      
              @foreach ($reviews as $element)

                  
                  @if($element->email_user == $item->user->email)

                        <div class="reviews-members pt-4 pb-4 border-bottom">
                          <div class="media mc-reviews">

                            <img alt="Generic placeholder image" src="{{ asset('images/user.png') }}" class="mr-3 rounded-pill">

                            <div class="media-body">
                              @for ($i = 0; $i < $element->vote; $i++)
                                  <span class="fa fa-star mc-reviews"></span>
                              @endfor

                                  <div class="reviews-members-body mt-3">
                                  <p>{{ $element->text }}</p>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                      @endif

                    @endforeach


                  @endif  

                </div>
              </div>
            </div>
            
          </div>
          {{-- REVIEW --}}

  </div>

    {{-- INIZIO SEZIONE CV   --}}
    <div class="modal fade" id="cv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body">
              @if ($item->cv != 'cv' || $item->cv != '')
                  <embed class='pdf-size' src="{{ asset('storage/'.$item->cv) }}" type="application/pdf" style="width:100%;">
              @else
                  <h2>Nessun Curriculum da Visualizzare</h2>
              @endif
          </div>
        </div>
      </div>
    </div>
    {{-- FINE SEZIONE CV  --}}

    {{-- INIZIO SEZIONE RECENSIONE   --}}
    <div class="modal fade" id="review" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuovo Messaggio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('send_review.store') }}"  method="post" enctype="multipart/form-data">
              @csrf
              @method('POST')
              <div  class="form-group sendEmail d-none">
                <label for="recipient-name" class="col-form-label">email_user:</label>
                <input name="email_user" type="text" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label class="col-form-label" for="votoActive">Voto (1-5)</label>
                <input type="text" class="form-control" id="votoActive" name="vote" >
              </div>
              <div class="form-group">
                <label class="col-form-label" for="textActive">Recensione</label>
                <textarea name='text' class="form-control" id="textActive" rows="3"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Invia</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    {{-- FINE SEZIONE RECENSIONE  --}}

    {{-- INIZIO SEZIONE MESSAGGIO   --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuovo Messaggio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('send_message.store') }}"  method="post" enctype="multipart/form-data">
              @csrf
              @method('POST')
              <div  class="form-group sendEmail d-none">
                <label for="recipient-name" class="col-form-label">email_user:</label>
                <input name="email_user" type="text" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label class="col-form-label" for="emailColor">Email</label>
                <input type="text" class="form-control" id="emailColor" name="email" >
              </div>
              <div class="form-group">
                <label class="col-form-label" for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="name">
              </div>
              <div class="form-group">
                <label class="col-form-label" for="cognome">Cognome</label>
                <input type="text" class="form-control" id="cognome" name="surname">
              </div>
              <div class="form-group">
                <label class="col-form-label" for="numero">Numero</label>
                <input type="text" class="form-control" id="numero" name="phone_num">
              </div>
              <div class="form-group">
                <label class="col-form-label" for="text">Messaggio</label>
                <textarea name='message' class="form-control" id="text" rows="3"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Invia</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    {{-- FINE SEZIONE MESSAGGIO   --}}

  @endforeach


  @endsection
