<style>
    [x-cloak] {
        display: none;
    }

    .duration-300 {
        transition-duration: 300ms;
    }

    .ease-in {
        transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
    }

    .ease-out {
        transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
    }

    .scale-90 {
        transform: scale(.9);
    }

    .scale-100 {
        transform: scale(1);
    }
</style>

<!-- /modal-->
<div class="mx-auto bg-gray-100 flex items-center justify-center" @keydown.escape="showModal = false" x-cloak>
    <!--Overlay-->
    <div style="background-color: rgba(0,0,0,0.5)" x-show="showModal"
        :class="{ 'fixed inset-0 z-10 flex items-center justify-center': showModal }">
        <!--Dialog-->
        <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lgrelative overflow-y-auto flex-col py-2 px-1"
            x-show="showModal" @click.away="showModal = false" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">

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
    </div>
    <!--Overlay-->
    <!--/Dialog -->
</div><!-- /modal-->
