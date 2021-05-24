@extends('layouts.app')

@section('title', 'Check Pagamenti')

@section('content')
<div id="check">

    <div class="container result">

        <div class="row d-flex justify-content-center">

        <div class="card col-8 pt-3 pb-3">

            <div class="card-body d-flex flex-column align-items-center">
            @if(session('status'))
                <div class="check-img">
                    <img src="https://www.bbva.pe/content/dam/public-web/peru/images/microillustrations/micro-card-ok.png.img.320.1580496106469.png" alt="">
                </div>
                <h2>Pagamento riuscito</h2>
            @else
                <h2>Pagamento non riuscito</h2>
                <div class="check-img">
                    <img src="https://www.freeiconspng.com/uploads/error-icon-4.png" alt="">
                </div>
            @endif
            </div>


        </div>

    </div>

    </div>

</div>
@endsection
