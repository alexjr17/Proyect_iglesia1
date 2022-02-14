<div x-data="{ 'showModal': false }">
    <h1 class="h1 text-center">Eventos</h1>
    <x-jet-input class="w-full" type="text" placeholder="Ano-mes-dia | 2022-02-02" wire:model="search"/>
    <div class="sm:flex-wrap md:flex-nowrap md:flex-col overflow-scroll sm:h-80 md:h-[120rem]">
        @foreach ($eventos as $evento)
            <div class="sm:flex sm:flex-nowrap bg-white rounded-xl shadow-md">
                <div class="p-6 grid grid-cols-1">
                    <h1 class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $evento->title }}</h1>

                    @livewire('estado-fecha', ['evento' => $evento], key($evento->id))
                    <p>
                        {{ Str::limit($evento->descripcion, 20) }}
                        <a class="text-blue-400 text-sm hover:underline cursor-pointer"
                            wire:click="show({{ $evento }})" @click="showModal = true">Mostrar</a>

                    </p>

                    <span>
                        Creado: {{ $evento->created_at->diffForHumans() }}
                    </span>
                </div>
            </div>
            <br>
        @endforeach

        <x-modal>

            @isset($show_evento)

                <!-- imagen -->
                <div class="">
                    <img src="https://th.bing.com/th/id/R.c838eca71a1f1a08ca0817ae3e45523d?rik=RDRZ5Ds1lz7nnA&pid=ImgRaw&r=0"
                        alt="">
                </div>

                <!--Title-->
                <div class="flex justify-between items-center">
                    {{ $show_evento->title }}
                </div>

                <!-- content -->
                <div>
                    {{ $show_evento->descripcion }}
                    <p>{{ $show_evento->start->toFormattedDateString() }}</p>
                    <p>...</p>
                </div>
            @endisset
        </x-modal>
    </div>
</div>
