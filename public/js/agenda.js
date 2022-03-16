
let formulario = document.querySelector("#form");

document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        initialView: 'dayGridMonth',
        locale: "es",
        displayEventTime: false,
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth'
        },

        eventSources: {
            url: baseURL + "/admin/eventos/mostrar",
            method: 'POST',
            extraParams: {
                _token: formulario._token.value
            }
        },
        // events: baseURL+"/admin/eventos/mostrar",
        dateClick: function (info) {
            formulario.reset();
            formulario.start.value = info.dateStr;
            formulario.end.value = info.dateStr;
            $("#evento").modal("show");
            $("#btnGuardar").removeClass('d-none');
            $("#btnEliminar").addClass('d-none');
            $("#btnModificar").addClass('d-none');
            $('#error-title').addClass('hidden');
            $('#error-descripcion').addClass('hidden');
            $('#error-start').addClass('hidden');
            $('#error-end').addClass('hidden');
        },
        eventClick: function (info) {
            var evento = info.event;
            console.log(evento);

            axios.post(baseURL + "/admin/eventos/editar/" + info.event.id).
                then(
                    (respuesta) => {
                        calendar.refetchEvents();
                        formulario.id.value = respuesta.data.id;
                        formulario.title.value = respuesta.data.title;
                        formulario.descripcion.value = respuesta.data.descripcion;
                        formulario.start.value = respuesta.data.start;
                        formulario.end.value = respuesta.data.end;
                        $("#evento").modal("show");
                        $("#btnGuardar").addClass('d-none');
                        $("#btnEliminar").removeClass('d-none');
                        $("#btnModificar").removeClass('d-none');
                        $('#error-title').addClass('hidden');
                        $('#error-descripcion').addClass('hidden');
                        $('#error-start').addClass('hidden');
                        $('#error-end').addClass('hidden');

                    }
                ).catch(
                    error => {
                        if (error.response) {
                            console.log(error.response.data);
                        }
                    }
                );
        }
    });

    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click", function () {
        enviardatos("/admin/eventos/agregar");
    });

    document.getElementById("btnEliminar").addEventListener("click", function () {

        //la función confirm nos regresa true si es seleccionado si, sino nos regresa false.
        if (confirm("¿Confirma ELIMINAR: " + formulario.title.value + "?")) {
            enviardatos("/admin/eventos/borrar/" + formulario.id.value);
        } else {
            alert("Cancelado")
        }

    });
    document.getElementById("btnModificar").addEventListener("click", function () {
        if (confirm("¿Confirma ACTUALIZAR : " + formulario.title.value + "?")) {
            enviardatos("/admin/eventos/actualizar/" + formulario.id.value);
            alert("¡Se ACTULIZO: " + formulario.title.value + "!")
        } else {
            alert("Cancelado")
        }

    });

    function enviardatos(url) {
        const datos = new FormData(formulario);
        console.log(datos);
        // console.log(datos);
        // console.log(formulario.title.value);

        const nuevaURL = baseURL + url;

        axios.post(nuevaURL, datos).
            then(
                (respuesta) => {
                    calendar.refetchEvents();
                    $("#evento").modal("hide");
                }
            ).catch(
                error => {
                    if (error.response) {
                        if (error.response.data.errors.title) {
                            $('#error-title').removeClass('hidden').text(error.response.data.errors.title);
                        } else {
                            $('#error-title').addClass('hidden')
                        }
                        if (error.response.data.errors.descripcion) {
                            $('#error-descripcion').removeClass('hidden').text(error.response.data.errors.descripcion);
                        } else {
                            $('#error-descripcion').addClass('hidden')
                        }
                        if (error.response.data.errors.start) {
                            $('#error-start').removeClass('hidden').text(error.response.data.errors.start);
                        } else {
                            $('#error-start').addClass('hidden')
                        }
                        if (error.response.data.errors.end) {
                            $('#error-end').removeClass('hidden').text(error.response.data.errors.end);
                        } else {
                            $('#error-end').addClass('hidden')
                        }
                        console.log(error.response.data);
                    } else {
                        $('#error-title').addClass('hidden')
                    }
                }
            );
    }

    function validete(object) {
        return (typeof object !== 'undefined');
    }

});

