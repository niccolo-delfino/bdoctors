<section id="jumbo">
  <div class="jumbotron">

    <div class="layer"></div>

    {{-- frecce slider  --}}
    <div class="icon-slider">
      <i v-for="(item, i) in slider" class="fas fa-window-minimize" :class="{active: i == counter}" @click="changeImage(i)"></i>
    </div>


    <!-- Vue: aggiunto effetto fade -->
    <transition-group tag="" name="fade">
      <img v-for="(item, i) in slider" v-if="i == counter" :src="'../../images/' + item.img" :key="item" alt="Slider">
    </transition-group>

    <div class="container ct">
      <transition-group tag="" name="fade">
        <div class="text" v-for="(item, i) in slider" v-if="i == counter" :key="item">
          <div class="texting">
            <h3 class="title">@{{ item.title }}</h3>
            <p class="lo">@{{ item.subtitle }}</p>
            <a :href="item.url" type="button" class="btn mc-edit-btn py-2 px-3">Scopri di più</a>
          </div>
        </div>
      </transition-group>
    </div>
    
  </div>

</section>