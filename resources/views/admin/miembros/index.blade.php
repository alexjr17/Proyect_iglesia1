@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="flex justify-between">
        <h1 class="pb-0">Listado de miembros</h1>

        @can('admin.miembros.create')
            <a class="btn-edit" href="{{ route('admin.miembros.create') }}">Crear miembro</a>
        @endcan
    </div>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">    
        @livewire('admin.miembros-index')
    </div>
@stop



@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.bootstrap4.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     var table = $('#tablaMiembros').DataTable( {
        //         lengthChange: false,
        //         dom: 'Bfrtip',
        //         buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
        //         responsive: true,
        //         autoWidth: false,   
        //         "language": {
        //             "lengthMenu": "Mostrar "+
        //                                     `<select class="custom-select custom-select-sm form-control form-control-sm">
    //                                         <option value='10'>10</option>
    //                                         <option value='25'>25</option>
    //                                         <option value='50'>50</option>
    //                                         <option value='100'>100</option>
    //                                         <option value='-1'>all</option>
    //                                     </select>`+
        //                                     "Registros por pagina",
        //             "zeroRecords": "No se encontro este registo",
        //             "info": "Mostrando la pagina _PAGE_ de _PAGES_",
        //             "infoEmpty": "No records available",
        //             "infoFiltered": "(filtrado de _MAX_ registros)",
        //             "search": "Buscar",
        //             // "paginate": {
        //             //     'next': 'Siguiente',
        //             //     'previous': 'Anterior'
        //             // }
        //         }
        //     } );

        //     table.buttons().container()
        //         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
        // } );
        $(document).ready(function() {

            var printCounter = 0;
            // Append a caption to the table before the DataTables initialisation
            $('#tablaMiembros').append(
                '<caption class"btn btn-danger" style="caption-side: bottom">A fictional company\'s staff table.</caption>'
            );


            $('#tablaMiembros').DataTable({
                dom: 'lBfrtip',
                buttons: [
                    'copy',
                    {
                        extend: 'excel',
                        messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                    },
                    {
                        extend: 'pdf',
                        messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.',
                        messageBottom: '<div class"pt-16">firma________</div>'
                    },
                    {
                        extend: 'print',
                        messageTop: function() {
                            printCounter++;

                            if (printCounter === 1) {
                                return 'This is the first time you have printed this document.';
                            } else {
                                return 'You have printed this document ' + printCounter + ' times';
                            }
                        },
                        messageBottom: null
                    }
                ],
                responsive: true,
                autoWidth: false,
                "language": {
                    "lengthMenu": "Mostrar " +
                        `<select class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value='10'>10</option>
                                            <option value='25'>25</option>
                                            <option value='50'>50</option>
                                            <option value='100'>100</option>
                                            <option value='-1'>all</option>
                                        </select>` +
                        "Registros por pagina",
                    "zeroRecords": "No se encontro este registo",
                    "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtrado de _MAX_ registros)",
                    "search": "Buscar",
                    // "paginate": {
                    //     'next': 'Siguiente',
                    //     'previous': 'Anterior'
                    // }
                }
            });
        });
    </script>
@stop
