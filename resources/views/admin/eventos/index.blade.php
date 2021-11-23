@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content')
    <div class="card">
        @livewire('admin.evento-index')   
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
          Launch
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Eventos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        @include('admin.eventos.partials.form')                 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
                        <button type="button" class="btn btn-danger" id="btn-editar">Modificar</button>
                        <button type="button" class="btn btn-warning" id="btn-eliminar">Eliminar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>     
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        
        let formulario = document.querySelector("#form");

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: "es",
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,listWeek'
            },
            
            events: "http://iglesia.test/admin/eventos/mostrar",

            dateClick:function(info){
                $("#evento").modal("show");
            }
          });

          calendar.render();

          document.getElementById("btnGuardar").addEventListener("click", function(){
                const datos= new FormData(formulario);
                console.log(datos);
                console.log(formulario.title.value);

                axios.post("http://iglesia.test/admin/eventos/agregar", datos).
                then(
                    respuesta => {
                        $("#evento").modal("hide");
                    }
                    ).catch(
                        error => {
                            if (error.response) {
                                console.log(error.response.data);
                            }
                        }
                    );
          });
          
        });
  
        
      </script>
@stop