
<div class="bg-blue-500 p-6 rounded-r-lg">
  <form id="form">
    <div class="grid grid-cols-2 text-left gap-4">
      <div class="">
        <label class="text-md text-gray-700">Nombre</label>
        <input type="text" name="nombre" id="nombre" autocomplete="given-name" class="mt-1 focus:ring-blue-700 focus:border-indigo-500 w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <div class="">
        <label class="text-md text-gray-700">Correo</label>
        <input type="text" name="correo" id="correo" autocomplete="given-name" class="mt-1 focus:ring-blue-700 focus:border-indigo-500 w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <div class="col-span-2">
        <label class="text-md text-gray-700">Asunto</label>
        <input type="text" name="asunto" id="asunto" autocomplete="given-name" class="mt-1 focus:ring-blue-700 focus:border-indigo-500 w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>
      <div class="col-span-2">
        <label class="text-md text-gray-700">Mensaje</label>
        <textarea name="mensaje" id="mensaje" class="w-full h-32 max-h-52 mt-1 focus:ring-indigo-500 focus:border-blue-700 w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
      </div>      
    </div> 
  </form>
  <button onclick="enviar()">
    enviar
  </button>
</div>

