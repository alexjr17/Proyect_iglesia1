{{-- <link
href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
rel="stylesheet"
/>
<!-- Swiper's CSS -->
<link
rel="stylesheet"
href="https://unpkg.com/swiper/swiper-bundle.min.css"
/> --}}
<x-app-layout>
    <div class="swiper mySwiper z-10">
        <div class="swiper-wrapper z-10">
          <div class="swiper-slide z-10">
            <img
              class="object-cover w-full h-96"
              src="https://source.unsplash.com/user/erondu/3000x900"
              alt="apple watch photo"
            />
          </div>
          <div class="swiper-slide">
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
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    
    <div class="container">
        <div class="grid grid-cols-3 gap-4 my-5">
          <div class="col-span-2 grid gap-y-8">

            <div class="">
              <h1 class="h1">Iglesia</h1>
              <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem porro dolor perferendis tenetur facilis corporis esse neque asperiores alias iste delectus maxime minima, aspernatur fugit ipsa consectetur! Enim, dolorum ipsa.</p>
            </div>

            <div class="">
              <h1 class="h1">Nosotros</h1>
              <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem aut, voluptates optio ab, commodi aliquam reprehenderit, beatae quisquam cupiditate ad quia aliquid asperiores natus. Iure deserunt officia sit accusantium! Dicta?</p>
            </div>

            <div class="">
              <h1 class="h1">Contactanos</h1>
              <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, pariatur officiis nisi ratione repudiandae beatae doloribus molestias? Quod recusandae magnam eligendi, optio consequatur autem obcaecati. Vel est nostrum eos soluta.</p>
            </div>

          </div>
          

          <div class="bg-blue-100 text-center">
            <h1 class="h1">Menu</h1>
            <ul class="grid list-outside hover:bg-blue-600">
              <li class="">sobre nosotros</li>
              <li class="">contactanos</li>
              <li class="">mensaje</li>
              <li class="">ubicanos</li>
            </ul>
          </div>
          
        </div>
    </div>    
</x-app-layout>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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