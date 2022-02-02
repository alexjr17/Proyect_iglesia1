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
    {{-- <div class="swiper-slide">
      <img
        class="object-cover w-full h-96"
        src="https://source.unsplash.com/collection/190727/3000x900"
        alt="apple watch photo"
      />
    </div>
    <div class="swiper-slide">
      <img
        class="object-cover w-full h-96"
        src="https://source.unsplash.com/collection/190728/3000x900"
        alt="apple watch photo"
      />
    </div> --}}
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
