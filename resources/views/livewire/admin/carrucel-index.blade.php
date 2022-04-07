<div>
    @foreach ($carrucels as $carrucel)
        <div class="carrucel static">
            @isset($carrucel->image->url)
                <img class="rounded-lg static w-full" src="{{ Storage::url($carrucel->image->url) }}" alt="">
            @else
                <img id="picture" class="h-40 w-40 rounded-full" id=""
                    src="https://www.freejpg.com.ar/asset/900/d0/d08d/F100008153.jpg" alt="">
            @endisset
            <div class="grid grid-cols-1 content-between absolute top-0 right-0 bg-indigo-500/60 h-full">
                <div class="flex-row w-40 bg-indigo-700/60 rounded-md">
                    <h1 class="bg-green-600 w-full pb-1 z-10 text-center">
                        {{ Str::limit($carrucel->title, 10, '...')  }}
                    </h1>
                    <p class="bg-white/20 z-10 py-6 px-1">
                        {{ Str::limit($carrucel->descripcion, 20, '...')  }}
                    </p>
                    <a href="#">link</a>
                </div>                
            </div>
            <div class="flex grid-cols-1 space-x-2 absolute bottom-0 right-0">
                <a class="btn-edit" href="{{ route('admin.carrucel.edit', $carrucel) }}">Editar</a>
                <form action="{{ route('admin.carrucel.destroy', $carrucel) }}" method="post">
                    @method('delete')
                    @csrf
                    <x-jet-danger-button type="submit">Eliminar</x-jet-danger-button>
                </form>
            </div>
        </div>
    @endforeach
</div>
