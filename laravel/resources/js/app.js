import axios from 'axios';
import Vue from 'vue/dist/vue.js';
require('./bootstrap');

//COMANDO MESSAGGIO FINESTRA MODALE 
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var recipient = button.data('whatever') 
    var modal = $(this)
    modal.find('.modal-title').text('Invia messaggio a: ' + recipient)
    modal.find('.sendEmail input').val(recipient)
  })

// COMANDO RECENSIONE FINESTRA MODALE 
  $('#review').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var recipient = button.data('whatever') 
    var modal = $(this)
    modal.find('.modal-title').text('Invia recensione a: ' + recipient)
    modal.find('.sendEmail input').val(recipient)
  })

  // COMANDO CV FINESTRA MODALE 
  $('#cv').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var recipient = button.data('whatever') 
    var modal = $(this)
    modal.find('.modal-title').text('CV: ')
    modal.find('.sendEmail input').val(recipient)
  })

  // JS PER FLIP CARDS 
  var options = [];

  $( '.dropdown-menu a' ).on( 'click', function( event ) {

    var $target = $( event.currentTarget ),
        val = $target.attr( 'data-value' ),
        $inp = $target.find( 'input' ),
        idx;

    if ( ( idx = options.indexOf( val ) ) > -1 ) {
      options.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
    } else {
      options.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
    }

    $( event.target ).blur();

    console.log( options );
    return false;
  });

let app = new Vue({
  el: '#app',
  data: {
    profili: [],
    filtro: ['All'],
    filtroSpecializzazione: ['All'],
    cerca: 'Seleziona',
    cercaSpecializzazione: 'All'
  },
  mounted(){
    axios
    .get('http://127.0.0.1:8000/api/profili')
    .then((result) => {
      this.profili = result.data.response.profili;
      this.profili.forEach(element => {
        if(!this.filtro.includes(element.city)){
          this.filtro.push(element.city);
        }
        if(!this.filtroSpecializzazione.includes(element.specialization)){
          this.filtroSpecializzazione.push(element.specialization);
          console.log(this.filtroSpecializzazione)
        }
      });
    });
  },
});

// app per slider jumbotron
let app2 = new Vue({
  el: '#jumbo',
  data: {
    slider: [
      {
        title: "Ora in evidenza",
        subtitle: "Scopri i nostri specialisti del momento.",
        img: "cover-doctor-1.jpg",
        url: "http://127.0.0.1:8000/doctor_promo",
      },
      {
        title: "News dal mondo della medicina",
        subtitle: "Scopri i nostri approfondimenti e resta aggiornato sulle novità del settore.",
        img: "cover-doctor-2.jpg",
        url: "http://127.0.0.1:8000/news",

      },
      {
        title: "Un servizio di eccellenza",
        subtitle: "Attivo in tutte le province italiane per offrire una copertura sanitaria con un solo click.",
        img: "cover-doctor-3.jpg",
        url: "http://127.0.0.1:8000/about_us",
      }
    ],
    counter: 0,
  },
  mounted() {
    this.interval = setInterval(this.nextPhotoAutomatic, 5000)
  },
  methods: {
    changeImage(i) {
      this.counter = i;
      clearTimeout(this.interval);
    },
    nextPhotoAutomatic() {
      (this.counter == this.slider.length - 1) ? this.counter = 0 : this.counter++;
    },
  }
});

// app per toggle menu
let app3 = new Vue({
  el: '#toggle-menu',
  data: {
    visible: false,
  },
  methods: {
    toggle() {
      this.visible = !this.visible;
    }
  }
});

