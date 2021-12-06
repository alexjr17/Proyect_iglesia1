@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.miembros.create')
        <a class="btn btn-primary float-right" href="{{ route('admin.miembros.create') }}">Crear miembro</a>        
    @endcan

    <h1>Listado de miembros</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif
    @livewire('admin.miembros-index')
@stop



@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script>
    $(document).ready( function () {
        $('#tablaMiembros').DataTable({
            responsive: true,
            autoWidth: false,   
            "language": {
                "lengthMenu": "Mostrar "+
                                        `<select class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value='10'>10</option>
                                            <option value='25'>25</option>
                                            <option value='50'>50</option>
                                            <option value='100'>100</option>
                                            <option value='-1'>all</option>
                                        </select>`+
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
    } );
</script>
{{-- <script>
    $(document).ready(function() {
        $('#tablaMiembros').DataTable( {
            responsive: true,
            autoWidth: false,      
            "language": {
                "lengthMenu": "Mostrar "+
                                        `<select class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value='10'>10</option>
                                            <option value='25'>25</option>
                                            <option value='50'>50</option>
                                            <option value='100'>100</option>
                                            <option value='-1'>all</option>
                                        </select>`+
                                        "Registros por pagina",
                "zeroRecords": "No se encontro este registo",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros)",
                "search": "Buscar",
                "paginate": {
                    'next': 'Siguiente',
                    'previous': 'Anterior'
                }
            }
        } );
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );

</script>
@stop