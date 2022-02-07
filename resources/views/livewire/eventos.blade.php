<h1 class="h1 text-center">Eventos</h1>
<div class="sm:flex-wrap md:flex-nowrap md:flex-col overflow-scroll sm:h-80 md:h-[120rem]">
@foreach ($eventos as $evento)
    <div class="sm:flex sm:flex-nowrap bg-white rounded-xl shadow-md">
        <div class="p-6 grid grid-cols-1">
            <h1 class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$evento->title}}</h1>
            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{$evento->start->toFormattedDateString()}}</a>
            
            <div class="mx-auto bg-gray-100 flex items-center justify-center" x-data="{ 'showModal': false }" @keydown.escape="showModal = false" x-cloak>
                <p class="mt-2 text-gray-500 col-span-1 ">
                    {{Str::limit($evento->descripcion, 20)}}
                    <a class="text-blue-400 text-sm hover:underline cursor-pointer" @click="showModal = true">Mostrar</a>                   
                </p>
                
                <!--Overlay-->
                <div style="background-color: rgba(0,0,0,0.5)" x-show="showModal" :class="{ 'fixed inset-0 z-10 flex items-center justify-center': showModal }">
                    
                    <!--Dialog-->
                    <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-8 text-left px-6 relative overflow-y-auto h-96" x-show="showModal" @click.away="showModal = false">
                        <button @click="showModal = false" class="absolute  top-1 right-1 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">X</button>
                        
                        {{-- imagen --}}
                        <div class="">
                            <img src="https://th.bing.com/th/id/R.c838eca71a1f1a08ca0817ae3e45523d?rik=RDRZ5Ds1lz7nnA&pid=ImgRaw&r=0" alt="">
                        </div>
                        
                        <!--Title-->
                        <div class="flex justify-between items-center">
                            <p class="text-4xl font-bold">{{$evento->title}}</p>
                        </div>

                        <!-- content -->
                        <p>{{$evento->descripcion}}</p>
                        <p>{{$evento->descripcion}}</p>
                        <p>{{$evento->descripcion}}</p>
                        <p>{{$evento->descripcion}}</p>
                        <p>{{$evento->descripcion}}</p>
                        <p>{{$evento->descripcion}}</p>
                        <p>{{$evento->descripcion}}</p>
                        <p>{{$evento->descripcion}}</p>
                        <p>{{$evento->descripcion}}</p>
                        <p>{{$evento->descripcion}}</p>
                        <p>{{$evento->start->toFormattedDateString()}}</p>
                        {{-- <p>{{$evento->end}}</p> --}}
                        <p>...</p>

                        <!--Footer-->
                        <div class="flex justify-end pt-2">
                            <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2" @click="alert('Additional Action');">Action</button>
                        </div>


                    </div>
                    <!--/Dialog -->
                </div><!-- /Overlay -->
            </div>
            
            
            <span>
                {{$evento->created_at->diffForHumans()}}
            </span>
        </div>        
    </div>
    <br>
@endforeach
</div>




