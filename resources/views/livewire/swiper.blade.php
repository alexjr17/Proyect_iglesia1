<div class="md:h-16"></div>
<div class="swiper mySwiper z-0">
  <div class="swiper-wrapper">
    @foreach ($carrucels as $carrucel)
    
    <div class="swiper-slide relative flex flex-col w-full h-96">
        <img class="static w-full h-96" src="{{Storage::url($carrucel->image->url)}}" alt="">
        <div class="absolute bottom-4 grid">
                <h1 class="h1 flex-none bg-blue-600 rounded-lg">{{$carrucel->title}}</h1><br>
                <p class="">{{$carrucel->descripcion}}</p>          
        </div>
    </div>
    @endforeach     
    
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
<script>
      var swiper = new Swiper('.mySwiper', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
