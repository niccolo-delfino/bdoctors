{{-- WEB HOME PAGE  --}}
@extends('layouts.app')

@section('title','Home Page')

@section('content')
<div class="jumbo ">
  @include( 'partials.jumbo' )
</div>
<section class="intro pt-4 pb-4" >
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
  <section class="papaya">
    <div id="scene">
      <div id="left-zone">
        <ul class="list">
          <li class="item">
            <input type="radio" id="ramouno_riga" name="carousel" checked="checked"/>
            <label class="label_ramouno" for="ramouno_riga">Medicina dello Sport</label>
            <div class="content content_ramouno"><span class="picto"></span>
              <h1>Medicina dello Sport</h1>
              <p>La medicina dello sport è una branca della medicina che si occupa dello sport, dell'esercizio fisico e delle patologie ad essi correlate assumendo un ruolo indispensabile nella preparazione degli atleti professionisti. </p>
            </div>
          </li>
          <li class="item">
            <input type="radio" id="seconda_riga" name="carousel" checked="checked"/>
            <label class="label_ramodue" for="seconda_riga">Ginecologia</label>
            <div class="content content_ramodue"><span class="picto"></span>
              <h1>Ginecologia</h1>
              <p>La ginecologia è una branca della medicina che si occupa talvolta della fisiologia, ma soprattutto della patologia inerenti all'apparato genitale femminile. È il corrispettivo dell'andrologia, la scienza che si occupa invece della fisiologia e delle disfunzioni dell'apparato riproduttore e apparato uro-urogenitale maschile. </p>
            </div>
          </li>
          <li class="item">
            <input type="radio" id="terza_riga" name="carousel" checked="checked"/>
            <label class="label_ramotre" for="terza_riga">Psichiatria</label>
            <div class="content content_ramotre"><span class="picto"></span>
              <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fit.cleanpng.com%2Fkisspng-bpdkfw%2F&psig=AOvVaw1SZ_g1BDnlGIeA2tIlJmll&ust=1618854547162000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOjbtqatiPACFQAAAAAdAAAAABAD" alt="">
              <h1>Psichiatria</h1>
              <p>La psichiatria è la branca specialistica della medicina che si occupa dello studio sperimentale, della prevenzione, della cura e della riabilitazione dei disturbi mentali. Essa è definibile come una "disciplina di sintesi", in quanto il mantenimento e il perseguimento della salute mentale.</p>
            </div>
          </li>
          <li class="item">
            <input type="radio" id="quarta_riga" name="carousel" checked="checked"/>
            <label class="label_ramoquattro" for="quarta_riga">Pediatria</label>
            <div class="content content_ramoquattro"><span class="picto"></span>
              <h1>Pediatria</h1>
              <p>La pediatria è una branca della medicina che si occupa dello sviluppo psicofisico dei bambini e della diagnosi e terapia delle malattie infantili. La neonatologia è la branca della pediatria che si occupa dei neonati entro il primo mese di vita. La cooperazione tra pediatria e ostetricia permette di prevenire le malformazioni del feto e di curare le malattie dalla nascita. </p>
            </div>
          </li>
          <li class="item">
            <input type="radio" id="quinta_riga" name="carousel" checked="checked"/>
            <label class="label_ramocinque" for="quinta_riga">Cardiologia</label>
            <div class="content content_ramocinque"><span class="picto"></span>
              <h1>Cardiologia</h1>
              <p>La cardiologia è quella branca della medicina interna che si occupa dello studio, della diagnosi e della cura delle malattie cardiovascolari acquisite o congenite. La cardiologia è una disciplina che negli anni più recenti si è molto evoluta e al suo interno si sono sviluppate specialità come l'emodinamica e l'elettrofisiologia.</p>
            </div>
          </li>
        </ul>
      </div>
      <div id="middle-border"></div>
      <div id="right-zone"></div>
    </div>
  </section>

  <section>
    <div class="container">
    <div class="marketing row justify-content-center">
      <div class="testo col-lg-5">
        <h5>IL <span>TUO</span> SPECIALISTA</h5>
        <h2>Dottori in evidenza</h2>
        <p>Fai la scelta migliore secondo le tue esigenze trovando lo specialista giusto per te: valuta curriculum e recensioni degli altri pazienti.</p>
        <a href="{{ route('show.doctors.promo') }}">Scopri i dottori<i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      <div class="immagine col-lg-7">
      </div>
    </div>
  </section>

@endsection
