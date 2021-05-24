<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoolDoctors-@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- CODICE NECESSARIO PER DASHBOARD --}}

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <style media="screen"></style>

    <!-- Library Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>


    <body>
        {{-- timbro header pagine --}}
        @include( 'partials.header' )
    <main>


    <div class="container pt-4 pb-4">
    <div class="row mt-4">
        <!-- DASHBOARD DESKTOP -->
        <nav class="sidebar d-none d-lg-block col-lg-2 rounded mb-4 rounded" style="background-color:rgba(49, 58, 70); height:408px;"   >
        <div class="sidebar-sticky mt-2">
            <ul class="nav flex-column">

            <li class="nav-item mb-0">
                <a class="nav-link text-white mc-dash p-1 pb-3 {{ (request()->route()->getName() == 'home') ? 'active' : '' }}" href="{{ url('user') }}">
                  <i class="dash fas fa-home text-white"></i>
                  Home
                </a>
            </li>

            <hr class='mt-1' style="width: 80%;">

            <li class="nav-item">
                <a class="nav-link text-white mc-dash p-1 pb-3 {{ (request()->route()->getName() == 'profilo.index') ? 'active' : '' }}" href="{{ route('profilo.index') }}">
                <i class="dash far fa-user text-white"></i>
                Profilo
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white mc-dash p-1 pb-3 {{ (request()->route()->getName() == 'message.index') ? 'active' : '' }}" href="{{ route('message.index') }}">
                <i class="far fa-envelope text-white"></i>
                Messaggi
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white mc-dash p-1 pb-3 {{ (request()->route()->getName() == 'review.index') ? 'active' : '' }}" href="{{ route('review.index') }}">
                <i class="far fa-star text-white"></i>
                Recensioni
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white mc-dash p-1 pb-3 {{ (request()->route()->getName() == 'statistiche') ? 'active' : '' }}" href="{{ route('statistiche') }}">
                <i class="fas fa-chart-line text-white"></i>
                Statistiche
                </a>
            </li>

            </ul>
        </div>
        </nav>


        {{-- DASHBOARD MOBILE  --}}
        <div class="d-lg-none col-sm-12 p-0 mb-3">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4" style="width: 100%;">
              <h5 class="text-white h4">Dashboard</h5>
              <ul class="nav flex-column mt-4">

                <li class="nav-item mb-0">
                  <a class="nav-link text-light mc-dash {{ (request()->route()->getName() == 'home') ? 'active' : '' }}" href="{{ route('home') }}">
                    <i class="dash fas fa-home ext-light"></i>
                    Home Dashboard <span class="sr-only">(current)</span>
                  </a>
                </li>
                <hr class="bg-secondary">

                <li class="nav-item">
                  <a class="nav-link text-light mc-dash {{ (request()->route()->getName() == 'profilo.index') ? 'active' : '' }}" href="{{ route('profilo.index') }}">
                    <i class="dash far fa-user ext-light"></i>
                    Profilo
                  </a>
                </li>
                <hr class="bg-secondary">

                <li class="nav-item">
                  <a class="nav-link text-light mc-dash {{ (request()->route()->getName() == 'message.index') ? 'active' : '' }}" href="{{ route('message.index') }}">
                    <i class="far fa-envelope ext-light"></i>
                    Messaggi
                  </a>
                </li>
                <hr class="bg-secondary">

                <li class="nav-item">
                  <a class="nav-link text-light mc-dash {{ (request()->route()->getName() == 'review.index') ? 'active' : '' }}" href="{{ route('review.index') }}">
                    <i class="far fa-star ext-light"></i>
                    Recensioni
                  </a>
                </li>
                <hr class="bg-secondary">

                <li class="nav-item">
                  <a class="nav-link text-light mc-dash {{ (request()->route()->getName() == 'statistiche') ? 'active' : '' }}" href="{{ route('statistiche') }}">
                    <i class="fas fa-chart-line text-white"></i>
                    Statistiche
                  </a>
                </li>

              </ul>



            </div>
          </div>
          <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>
        </div>

        @yield('content')

    </main>
    {{-- timbro footer pagine --}}
    @include( 'partials.footer' )

    <script src=" {{asset('js/app.js')}}"></script>

</body>
</html>
