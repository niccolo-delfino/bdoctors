@extends('layouts.app')

@section('title', 'Richiesta Promo')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://js.braintreegateway.com/web/dropin/1.27.0/js/dropin.min.js"></script>
    <title>Document</title>
</head>
<body>
    @include('partials.header')

    <div id="marsala">

        <div class= "container  p-3">
            @if ( $doctor->promos )
                <h4>La tua attuale Promozione: {{ $doctor->promos }} Scadenza: {{ $doctor->end }}</h4>
            @endif
            <form id="payment-form" action="{{ route("payment.payment", $doctor->id) }}" method="post">
                @csrf
                @method('POST')
                @if ($doctor->promos)
                    <h5>Puoi cambiarla da qui:</h5>
                @else
                    <h3>Rendi più visibile il tuo profilo</h3>
                @endif
                <p>Acquista una delle nostre promo per mettere in risalto il tuo profilo e ricevere più pazienti!</p>
                <div class="promo_box">
                    <h5 class="promo_title">Promo:</h5>
                    <select  name='promo' id="sel">
                        @foreach ($promo as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- BOX CONTAINER PER LISTA PROMO --}}
                <div class="promo_list">

                    <div class="standard_box promo_id">
                        <p><strong class="standard">Standard</strong></p>
                        <p><strong >Durata: </strong> <span>24h.</span></p>
                        <p><strong >Prezzo: </strong> <span>€2.99.</span></p>
                        <p><strong>Descrizione: </strong> <span>La promozione <strong>Standard</strong> ti permettere di mettere in evidenzia il tuo profilo sul nostro sito per le prossime 24h.</span></p>
                    </div>

                    <div class=" premium_box promo_id">
                        <p><strong class="premium">Premium</strong></p>
                        <p><strong>Durata: </strong> <span>72h.</span></p>
                        <p><strong>Prezzo: </strong> <span>€5.99.</span></p>
                        <p><strong>Descrizione: </strong> <span>La promozione <strong>Premium</strong> ti permettere di mettere in evidenzia il tuo profilo sul nostro sito per le prossime 72h.</span></p>
                    </div>

                    <div class=" gold_box promo_id">
                        <p><strong class="gold">Gold</strong></p>
                        <p><strong>Durata: </strong> <span>144h.</span></p>
                        <p><strong>Prezzo: </strong> <span>€9.99.</span></p>
                        <p><strong>Descrizione: </strong> <span>La promozione <strong>Gold</strong> ti permettere di mettere in evidenzia il tuo profilo sul nostro sito per le prossime 144h.</span></p>
                    </div>

                </div>
                {{-- BOX CONTAINER PER LISTA PROMO --}}
                    
                <div class="payment_style" id="dropin-container"></div>
                <input type="hidden" id="nonce" name="payment_method_nonce"/>
                <button class="btn btn_myColor pay" type="submit"> Paga </button>
            </form>
        </div>

    @include('partials.footer')

    </div>

    <script>

        // PRENDO I DATI DEL FORM
        const form = document.querySelector('#payment-form');

        // CREO INTERFACCIA BRAINTREE
        braintree.dropin.create({
        authorization: '{{ $token }}',
        container: '#dropin-container',
        }, 
        (error, dropinInstance) => {
            if(error){
                console.error(error)
            }
            form.addEventListener('submit', event => {
                event.preventDefault();
                dropinInstance.requestPaymentMethod((error, payload) => {
                if (error) {
                    console.error(error);
                }

                //   FACCIO SUBMIT
                document.getElementById('nonce').value = payload.nonce;
                form.submit();
            });
            });
        });

    </script>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
