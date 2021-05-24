@extends('layouts.dashBoard')

@section('title','Dottori pagina messaggi')

@section('content')

    <div id="accordion" class="col-sm-12 col-lg-10 mb-4">

    <h4 class='mb-4' style="color:#32c69a">Messaggi ricevuti</h4>


    @foreach ($user as $item)
    @foreach ($message as $key => $element)
    @if ($item->email == $element->email_user)
        {{-- card collapsible  --}}
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0 d-flex">
              <button class="btn btn-link flex-grow-1" data-toggle="collapse" data-target="{{'#collapse' . $key}}" aria-expanded="true" aria-controls="collapseOne">
                <p class="p-0 m-0 d-flex justify-content-between" >
                  <span class="text-body">{{ $element->name . ' ' . $element->surname }}</span>
                  <span class="text-body">{{ $element->created_at->format('d.m.y') }} ore {{ $element->created_at->format('G:i') }}</span>
                </p>

              </button>
            </h5>
          </div>

          <div id="{{'collapse' . $key}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <p class="mb-1"><strong>Mail</strong>: <em>{{ $element->email }}</em></p>
              <p class="mb-1"><strong>Tel</strong>: {{ $element->phone_num }}</p>
              {{ $element->message }}
              {{-- FORM DELETE ITEM  --}}
              <form action="{{ route('message.destroy', $element->id)}}"  method="post">

                {{-- TOKEN  --}}
                @csrf

                {{-- METHODO DELETE  --}}
                @method('DELETE')

                <button type="submit" class="btn btn-sm btn-outline-danger mt-3">Cancella Messaggio</button>

              </form>
              {{--END FORM DELETE ITEM  --}}
            </div>
          </div>
        </div>

        @endif
        @endforeach
    @endforeach

</div>

@endsection
