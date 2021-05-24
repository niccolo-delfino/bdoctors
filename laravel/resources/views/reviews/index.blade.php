
@extends('layouts.dashBoard')

@section('title', 'Recensioni')

@section('content')


  <div id="accordion" class="col-sm-12 col-lg-10 ">

    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">



    <h4 class="mb-3" style="color: #32c69a">Recensioni ricevute</h4>
    <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
      <div class="bg-white rounded shadow-sm p-2 mb-2 restaurant-detailed-ratings-and-reviews shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
        @foreach ($user as $element)
          @foreach ($reviews as $item)
            @if ($element->email == $item->email_user)

              {{-- <a href="#" class="btn btn-outline-primary btn-sm float-right">Top Rated</a> --}}
              <div class="reviews-members pt-4 pb-4 border-bottom">
                <div class="media mc-reviews">

                  <img alt="Generic placeholder image" src="{{ asset('images/user.png') }}" class="mr-3 rounded-pill">

                  <div class="media-body">
                      @for ($i = 0; $i < $item->vote; $i++)
                        <span class="fa fa-star mc-reviews"></span>
                      @endfor

                      <div class="reviews-members-header mc-reviews-text">

                        <p class="text-gray m-0 p-0 mb-1">Recensione inviata il {{
                           $item->created_at->format('d.m.y') }}</p>
                      </div>




                    {{-- <div style="color: #32c69a; font-weight: bold;">{{ $item->vote }}</div> --}}
                    @if ($item->text != '')
                      <div class="reviews-members-body mt-3">
                        <p>{{ $item->text }}</p>
                      </div>
                    @endif
                  </div>

                  {{-- FORM DELETE ITEM  --}}
                  <form action="{{ route('review.destroy', $item->id)}}"  method="post">

                    {{-- TOKEN  --}}
                    @csrf

                    {{-- METHODO DELETE  --}}
                    @method('DELETE')

                    <button type="submit" class="btn-margin btn btn-sm btn-danger mt-5 mr-" style="background-color: none;"><i class="fas fa-trash-alt"></i></button>


                  </form>
                  {{--END FORM DELETE ITEM  --}}


                </div>
              </div>
            @endif
          @endforeach
        @endforeach

      </div>
    </div>
  </div>

</div>
@endsection
