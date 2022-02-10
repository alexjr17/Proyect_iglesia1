<!-- /modal-->
<div class="mx-auto bg-gray-100 flex items-center justify-center" x-data="{ 'showModal': false }"
    @keydown.escape="showModal = false" x-cloak>
    <p class="mt-2 text-gray-500 col-span-1 ">
        @isset($descripcion)
            {{ $descripcion }}
        @endisset

        @isset($boton)
            {{ $boton }}
        @endisset
    </p>

    <!--Overlay-->
    <div style="background-color: rgba(0,0,0,0.5)" x-show="showModal"
        :class="{ 'fixed inset-0 z-10 flex items-center justify-center': showModal }">
        <!--Dialog-->
        <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-8 text-left px-6 relative overflow-y-auto h-96"
            x-show="showModal" @click.away="showModal = false">

            <button @click="showModal = false"
                class="fixed top-1 right-1 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">X</button>

            {{ $slot }}

            <!--Footer-->
            <div class="flex justify-end pt-2">
                @isset($footer)
                    {{ $footer }}
                @endisset
            </div>
        </div>
    </div><!--Overlay-->
    <!--/Dialog -->
</div><!-- /modal-->

