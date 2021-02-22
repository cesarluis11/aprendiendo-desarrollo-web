@extends('layout')

@section('contenido')
<div class="panel panel-primary">
  <div class="panel-heading" align="center">Listado de SKU'S</div>
    <div class="panel-body">
       <div class="table-responsive">
        <table class="display responsive no-wrap" id="busqueda-table" width="100%">
            <thead>
                <tr>
                    <th>Grupo</th>
                    <th>Rama</th>
                    <th>Articulo</th>
                    <th>Descripcion1</th>
                    <th>Descripcion2</th>
                    <th>ClaveFabricante</th>
                    <th>Categoria</th>
                    <th>PrecioLista</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tfoot style="display: table-header-group;" >
             <tr>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
             </tr>
        </tfoot>
        </table>
       </div>
    </div>
</div>
@stop

@push('scripts')
<script>
$(function() {
    $('#busqueda-table').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        language: {
                url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        ajax: '{!! route('datos.anyData') !!}',
        columns: [
            { data: 'Grupo', name: 'Grupo' },
            { data: 'Rama', name: 'Rama' },
            { data: 'Articulo', name: 'Articulo' },
            { data: 'Descripcion1', name: 'Descripcion1' },
            { data: 'Descripcion2', name: 'Descripcion2' },
            { data: 'ClaveFabricante', name: 'ClaveFabricante' },
            { data: 'Categoria', name: 'Categoria' },
            { data: 'PrecioLista', name: 'PrecioLista'},
            { data: 'CodigoAlterno', name: 'CodigoAlterno',
                render: function( data, type, full, meta ) {
                        return "<img src=\"http://192.168.254.11/BakanCotizador/imgart/" + data + ".jpg\" height=\"50\"/>";

                }
            }
        ]
        // initComplete: function () {
        //     this.api().columns([2,3,4,5,6,7]).every(function () {
        //         var input = document.createElement("input");
        //         var column = this;
        //         $(input).appendTo($(column.footer()).empty())
        //         .on('change', function () {
        //             column.search($(this).val(), false, false, true).draw();
        //         });
        //     });
        // }
    });
});

</script>

@endpush
