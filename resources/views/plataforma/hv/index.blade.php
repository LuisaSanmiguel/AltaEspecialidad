@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center>
                    <div class="card-header">
                        Bienvenidos al Aula Virtual
                    </div>
                </center>
                <div class="row">
                    <div class="col-md-12 col-lg-offset-8">
                        <div class="wow bounceInUp" data-wow-delay="0.2s">

                            <div class="row">
                                <div class="col-sm-12 ">
                                    <strong>
                                        <p class="subtitle">
                                      Hojas de Vidas
                                        </p>
                                    </strong>
                                </div>
                            </div>

                           <table id="example" class="table table-bordered cell-border table-hover" >
                                <thead class="active">
                                    <th class="text-center">#</th>
                                    <th class="text-center">Pdf</th>
                                </thead>

                                <tbody>
                                    @foreach($hvs as $index => $hv)
                        		        <tr>
                                             <td> {{ $index+1 }} </td>
                                             <td> 
                                                <a href="{{ $hv->file }}" class="btn btn-danger" target="_blank">
                                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>  |    
                                                    {{$hv->name_file}}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-lg-6 ">
                                   <a type="button" data-toggle="modal" data-target="#modalCreate" style="text-decoration:none;color:white; width: 100%;" >
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">

                                         Nueva Hoja de Vida

                                        </div></a>

                                </div>
                                <div class="col-lg-6 ">
                                    <a href="{{route('administrar')}}" style="text-decoration:none;color:white;" >
                                         <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                         Volver
                                         </div>
                                        </a>
                                 </div>
                           </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="modalCreate">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Subir Hoja de Vida</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <form method="POST" action="{{route('hoja-vida.store')}}" enctype="multipart/form-data" id="formStore">
            @csrf
            <input type="file" name="hv" class="form-cont">
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
        <button type="button" class="btn btn-primary" onclick="store()">Subir Archivo</button>
      </div>

    </div>
  </div>
</div>
@endsection
@section('css')
    <style>
        label{
            margin: 15px !important;
        }
        </style>
@stop
@section('js')

<script>
    function store(){
        $('#formStore').submit();
    }


    $('#example').DataTable( {
    language: {
     "lengthMenu": "Mostrar _MENU_ registros",
     "zeroRecords": "No se encontraron resultados",
     "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
     "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
     "infoFiltered": "(filtrado de un total de _MAX_ registros)",
     "sSearch": "Buscar:",
     "oPaginate": {
         "sFirst": "Primero",
         "sLast":"Último",
         "sNext":"Siguiente",
         "sPrevious": "Anterior"
      },
      "sProcessing":"Procesando...",
 },
//para usar los botones
"pageLength": 3,
responsive: "true",
dom: 'Bfrtilp',
buttons:[
     {
     extend:    'copyHtml5',
     text:      '<i class="fa fa-clone"></i> ',
     titleAttr: 'Copiar',
     className: 'btn btn-primary'
 },
 {
     extend:    'excelHtml5',
     text:      '<i class="fa fa-file-excel-o"></i> ',
     titleAttr: 'Exportar a Excel',
     className: 'btn btn-success'
 },
 {
     extend:    'pdfHtml5',
     text:      '<i class="fa fa-file-pdf-o"></i> ',
     titleAttr: 'Exportar a PDF',
     message : 'SIEX',
     header :true,
       exportOptions: {
         columns: [ 0,1,2,3,4]
           },
     pageSize: 'LEGAL',
     className: 'btn btn-danger',
      },
 {
     extend:    'print',
     text:      '<i class="fa fa-print"></i> ',
     titleAttr: 'Imprimir',
     className: 'btn btn-info'
 },
]

});

$(document).ready(function() {
   var table = $('#example').DataTable();
} );


</script>

@stop
