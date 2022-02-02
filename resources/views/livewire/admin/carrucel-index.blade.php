<div class="card">
    <div class="border-collapse bg-[url('https://source.unsplash.com/collection/190727/3000x900')] m-6 px-1">
        @foreach ($carrucels as $carrucel)
        <div class="relative flex fitems-stretch shrink rounded-lg shadow-xl mb-4 h-56 z-0">
            @isset($carrucel->image)
                <img class="rounded-lg static w-full" src="{{Storage::url($carrucel->image->url)}}" alt="">
            @else
                <img class="rounded-lg static" src="https://source.unsplash.com/collection/190727/3000x900" alt="">
            @endisset
            <div class="grid grid-cols-1 content-between absolute">
                <div class="">
                    <h1 class="h1  bg-red-600/60 pb-1 underline decoration-pink-500 z-10 underline-offset-8">{{$carrucel->title}}</h1>
                    <p class="bg-indigo-700/60  text-indigo underline decoration-indigo decoration-4 z-10 underline-offset-8">{{$carrucel->descripcion}}</p>
                    <a href="#">link</a>
                </div>
                <div class="flex space-x-2">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.carrucel.edit', $carrucel) }}">Editar</a>
                    <form action="{{ route('admin.carrucel.destroy', $carrucel) }}" method="post">
                        @method('delete')                            
                        @csrf
                        <button class="btn btn-danger btn-sm md:col-span-1" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    @endforeach
</div>

