@extends('layouts.dashBoard')

@section('title', 'Profilo CV')

@section('content')

  <div class="col-sm-12 col-lg-10 mb-4">
      @if ($profile->cv != 'cv')
        <embed class='pdf-size' src="{{ asset('storage/'.$profile->cv) }}" type="application/pdf" style="width: 100%; height: 100vh;">
        @else
          <h2>Nessun Curriculum da Visualizzare</h2>
        @endif
</div>
@endsection
