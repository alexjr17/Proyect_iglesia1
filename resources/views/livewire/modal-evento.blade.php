<div>
<!--Overlay-->
<div class="overflow-auto" style="background-color: rgba(0, 0, 0, 0.137)" x-show="showModal" :class="{ 'fixed inset-0 z-10 flex items-center justify-center': showModal }">
    <!--Dialog-->
    <div class="flex flex-col bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" @click.away="showModal = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

        <!--Title-->
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Simple Modal!</p>
            <span @click="showModal = false">X</span>
        </div>

        <!-- content -->
        <p>{{$evento->title}}</p>
        <p>...</p>
        <p>...</p>
        <p>...</p>
        <p>...</p>

        <!--Footer-->
        <div class="flex justify-end pt-2">
            <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2" @click="alert('Additional Action');">Action</button>
            <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400" @click="showModal = false">Close</button>
        </div>


    </div>
    <!--/Dialog -->
</div><!-- /Overlay -->
</div>
