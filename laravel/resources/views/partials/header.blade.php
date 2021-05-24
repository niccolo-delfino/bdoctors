<header>

  <nav>
    <div class="nav_top">
      <div class="container">
        <div class="logo">
              <a href="{{ route('home1') }}">
                <img src="{{asset('images/logo_large_black.png')}}" alt="" id="logo">
              </a>
        </div>
        <div class="nav_top_dx">
          <div class="help">
            <ul>
              <li><a href="{{ route('show.doctors.promo') }}">Dottori in evidenza</a></li>
              <li><a href="{{ route('show.doctors') }}">I nostri Dottori</a></li>
            </ul>
          </div>
          <div class="login ml-5 links">
            @if (Route::has('login'))
                    @auth
                        <div>
                          <a href="{{ route('home') }}">Profilo</a>

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class='ml-2' href="{{ route('register') }}">Sei un medico?</a>
                        @endif
                    @endauth
            @endif
          </div>
        </div>


        {{-- MOBILE  --}}
        <div class="nav_top_dx_burger" id="toggle-menu">
          {{-- <i class="fas fa-bars" @click="toggle"></i> --}}
          <button @click="toggle" class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
            <svg width="50" height="50" viewBox="0 0 100 100">
              <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
              <path class="line line2" d="M 20,50 H 80" />
              <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
            </svg>
          </button>

          <div class="mc-toggle" :class="{active1: visible}">

            <div class="search">
              <form action="{{ route('search') }}"  method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group">
                  <input id="search" type="text" name="search" placeholder="Specializzazione O Dott.Cognome">
                </div>
              </form>
            </div>

            <ul>
              <li><a href="{{ route('home1') }}">Home</a></li>
              <li><a href="{{ route('about_us') }}">Chi siamo</a></li>
              <li><a href="{{ route('specializzazioni.page') }}">Servizi</a></li>
              <li><a href="{{ route('show.doctors.promo') }}">Dottori in evidenza</a></li>
              <li><a href="{{ route('show.doctors') }}">I nostri Dottori</a></li>
              <li><a href="{{ route('news.page') }}">news</a></li>
              <li><a href="{{ route('contatti.page') }}">Contatti</a></li>
            </ul>

            <div class="mc-login">
              @if (Route::has('login'))
                @auth
                  <div>
                    <a href="{{ route('home') }}">Profilo</a>

                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                  </div>
              @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                  <a class='ml-2' href="{{ route('register') }}">Sei un medico?</a>
                @endif
              @endauth
            @endif
          </div>
        </div>

        </div>
        {{-- fine mobile  --}}
      </div>
      
    </div>
    <div class="nav_bottom">
      <div class="container">
        <div class="nav_bottom_sx">
          <ul>
            <li><a href="{{ route('home1') }}">Home</a></li>
            <li><a href="{{ route('about_us') }}">Chi siamo</a></li>
            <li><a href="{{ route('specializzazioni.page') }}">Servizi</a></li>
            <li><a href="{{ route('news.page') }}">news</a></li>
            <li><a href="{{ route('contatti.page') }}">Contatti</a></li>

          </ul>
        </div>
        <div class="nav_bottom_dx">

          <div class="search">
            <form action="{{ route('search') }}"  method="post" enctype="multipart/form-data">
              @csrf
              @method('POST')
              <div class="form-group">
                <input id="search" type="text" name="search" placeholder="Specializzazione O Dott.Cognome">
                <button type="submit"><i class="fas fa-search"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>

</header>
