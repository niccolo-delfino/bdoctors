{{-- FOOTER  --}}
<footer>
  <div class="sfondo">
    <img src="https://storage.googleapis.com/production-powweb-v1-0-9/489/423489/IHszlqoY/a4aba68aa9b3432d9094db150caed387" alt="">
      <div class="contenitore">
        <div class="prova container">
          <div class="conta">
            <div class="box sx">
              <img src="{{asset('images/logo_large_white.png')}}" alt="" id="logo">
              <p>Bool Doctors è il primo sito in Italia di prenotazioni di visite mediche ed esami diagnostici, online dal 2021.</p>
              <p>Crediamo nell'importanza dell'informazione e della trasparenza per aiutare i pazienti a scegliere il medico giusto.</p>
              <ul class="social">
                <li><i class="fab fa-twitter-square"></i></li>
                <li><i class="fab fa-facebook-square"></i></li>
                <li><a href="https://www.youtube.com/channel/UC8aCsxyTkibk2pvgR_5oWJA" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                <li><i class="fab fa-linkedin"></i></li>
              </ul>
              <span>© 2021 Bool Doctors Tutti i diritti riservati</span>
            </div>
            <div class="box cc">
              <form action="mailto:biffi94@me.com" method="post">
                <div class="form">
                  <h2>QUICK CONTACT</h2>
                  <div class="prima_row">
                    <div class="form-group">
                      <label for="name">Nome e Cognome</label>
                      <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="mail">E-mail</label>
                      <input type="email" class="form-control" id="mail">
                    </div>
                  </div>
                  <div class="seconda_row">
                    <div class="form-group">
                      <label for="message">Messaggio</label>
                      <textarea class="form-control" id="message" rows="2"></textarea>
                    </div>
                  </div>
                  <div class="terza_row">
                    <div class="send">
                      <button type="submit" class="btn btn-primary">Invia</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="box dx">
              <div class="iscriviti">
                <img src="https://th.bing.com/th/id/R3f899b9b7951fb3de68882956cda497b?rik=3Cq%2bzQYekf8h3Q&riu=http%3a%2f%2fviswasmctnd.com%2fassets%2fimages%2fresource%2fimage-4.png&ehk=wXTuE%2fG1uHYQ6eUJsLoHoMbiTF9G1eZdjBky3hVHQV0%3d&risl=&pid=ImgRaw" alt="" class="tipa">
                <div class="slogan">
                  <span>Sei un dottore?</span>
                  <button type="button" class="btn btn-primary btn-lg"><a href="{{ route('register') }}">Iscriviti ora!</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="endpage">
        <div class="contenuto container">
          <div class="nav_footer_sx">
          <ul>
            <li><a href="{{ route('home1') }}">Home</a></li>
            <li><a href="{{ route('about_us') }}">Chi siamo</a></li>
            <li><a href="{{ route('specializzazioni.page') }}">Servizi</a></li>
            <li><a href="{{ route('news.page') }}">news</a></li>
            <li><a href="{{ route('contatti.page') }}">Contatti</a></li>
          </ul>
        </div>
          <div class="nav_footer_cc">
            <ul>
              <li><a href="{{ route('show.doctors.promo') }}">Dottori in evidenza</a></li>
              <li><a href="{{ route('show.doctors') }}">Dottori</a></li>
            </ul>
          </div>
        </div>
      </div>
  </div>
</footer>
