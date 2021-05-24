@extends('layouts.app')

@section('title', 'Chi siamo')

@section('content')

  <div class="mini_jumbotron chiSiamo">
      <div class="container">
        <div class="mini_jumbotron_title">
          <h3>Chi siamo</h3>
        </div>
      </div>
      <div class="mini_jumbotron_black"></div>
    </div>

    <section class="about_intro pb-5">
        <div class="container">
          <div class="section_title">
            <h2>Chi siamo?</h2>
            <h4>Ecco qualche parola su di noi</h4>
          </div>
          <div class="about_boxes">
            <div class="about_box">
              <p><span>Bool Doctors</span> è il miglior servizio online in Italia per <strong> prenotare</strong> in modo <strong>facile,
                rapido e trasparente visite specialistiche</strong>, esami diagnostici o altre prestazioni
                sanitarie in forma privata nei giorni e negli orari preferiti, nelle zone della
                città più comode da raggiungere, con i migliori medici o professionisti sanitari
                che operano anche nelle più importanti <strong>strutture pubbliche</strong> e nelle migliori <strong>cliniche
                specializzate</strong>. E' un servizio del quale sul web si sentiva l'esigenza.</p>
            </div>
            <div class="about_box">
              <p><span>Bool Doctors</span> è un servizio che nasce con l'intento di facilitare ed agevolare l'incontro
                tra la domanda diffusa e spesso insoddisfatta degli utenti che finisce per concentrarsi
                in poche grandi strutture pubbliche o private e con tempistiche non gestibili
                dall'utente stesso, con un'offerta anch'essa diffusa di prestazioni mediche o
                sanitarie di ottimo livello da parte di tanti medici specialisti e altri professionisti
                sanitari che operano sul territorio, e che ha solo bisogno di essere portata alla
                conoscenza dei cittadini.</p>
            </div>
            <div class="about_box">
            <div class="about_box_img"></div>
          </div>
          </div>
        </div>
      </section>

      <section class="counter">
        <div class="overlay">
          <div class="container">
          <div class="counter_box">
            <div class="counter_content">
              <i class="far fa-calendar-alt"></i>
              <div class="counter_numero">365</div>
            </div>
            <div class="counter_text">Giorni all'anno</div>
          </div>
          <div class="counter_box">
            <div class="counter_content">
              <i class="far fa-laugh-beam"></i>
              <div class="counter_numero">4,500</div>
            </div>
            <div class="counter_text">Pazienti felici</div>
          </div>
          <div class="counter_box">
            <div class="counter_content">
              <i class="fas fa-user-md"></i>
              <div class="counter_numero">84</div>
            </div>
            <div class="counter_text">Specialisti</div>
          </div>
          <div class="counter_box">
            <div class="counter_content">
              <i class="fas fa-clinic-medical"></i>
              <div class="counter_numero">200</div>
            </div>
            <div class="counter_text">Studi medici</div>
          </div>
          </div>
        </div>
    </section>

<div class="banner">
  <div class="black">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="banner_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
            <div class="banner_content text-xl-left text-center">
              <div class="banner_title">Vuoi prenotare un appuntamento? Ricerca qui il tuo specialista.</div>
              <div class="banner_subtitle">I nostri Dottori e specialisti hanno studi medici in tutta Italia, cerca quello giusto per te.</div>
            </div>
            <div class="button banner_button d-flex flex-column align-items-center justify-content-center ml-xl-auto">
              <a href="{{ route('show.doctors') }}"><span>I nostri Dottori</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="intro pb-4 pt-4">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class=" col-lg-6 d-flex">
        <div class="img w-100 d-flex align-self-stretch align-items-center">
        </div>
      </div>
      <div class="col-lg-6 intro_right d-flex justify-content-end">
        <div class="py-md-5">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mb-4">Servizio gratuito per i pazienti</h2>
              <h6>Per prenotare una visita:</h6>
              <ul>
                <li>Non è richiesto pagamento anticipato</li>
                <li>Non serve la carta di credito per prenotare</li>
                <li>Pagherai la prestazione direttamente al medico</li>
                <li>La prenotazione attraverso iDoctors non prevede costi aggiuntivi</li>
              </ul>
              <p><a href="{{ route('specializzazioni.page') }}" class="btn btn_intro btn-primary py-3 px-4">I nostri servizi</a>
                <a href="{{ route('contatti.page') }}" class="btn btn-success py-3 px-4">Contattaci</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
