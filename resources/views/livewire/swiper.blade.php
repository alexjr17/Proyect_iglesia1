<style>
  .filtro{
    background-color: rgb(rgb(0, 110, 255), rgba(0, 60, 128, 0), rgba(0, 0, 255, 0))
  }
</style>
<div class="md:h-16"></div>
<div class="swiper mySwiper z-0">
  <div class="swiper-wrapper">    
    @foreach ($carrucels as $carrucel)
    
    <div class="swiper-slide relative flex flex-col w-full h-96">
        @isset($carrucel->image->url)
          <img class="static w-full h-96" src="{{Storage::url($carrucel->image->url)}}" alt="">
        @else
            <img id="picture" class="h-40 w-40 rounded-full" id=""
                src="https://www.freejpg.com.ar/asset/900/d0/d08d/F100008153.jpg" alt="">
        @endisset
        <div class="absolute bottom-4 grid pl-8">
                <h1 class="flex-none underline decoration-pink-500 text-5xl font-bold rounded-lg bottom-2">{{$carrucel->title}}</h1>
                <p class="underline align-baseline">{{$carrucel->descripcion}}</p>
        </div>
    </div>
    @endforeach     
    <div class="filtro static">
    </div>
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
