@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center>
                    <div class="card-header">
                        Bienvenidos al Aula Virtual
                    </div>



            <div class="row">
                        <div class="col-md-12 col-lg-offset-8">
                            <div class="wow bounceInUp" data-wow-delay="0.2s">

                                <div class="row">
                                    <div class="col-sm-12 ">
                                        <strong>
                                            <p class="subtitle">
                                        FICHAS
                                            </p>
                                        </strong>
                                    </div>
                                </div>




                            <table id="example" class="table table-responsive table-bordered cell-border table-hover" >

                                                <thead>
                                                    <tr class="active">
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Codigo</th>
                                                        <th class="text-center">Curso</th>
                                                        <th class="text-center">Modalidad</th>
                                                        <th class="text-center">Oferta</th>
                                                        <th class="text-center">Cuenta Bancaria</th>
                                                        <th class="text-center">Fecha Inicio</th>
                                                        <th class="text-center">Fecha Final</th>
                                                        <th class="text-center">Cupo</th>
                                                        <th class="text-center">Estado</th>
                                                        <th class="text-center" >Editar</th>
                                                        <th class="text-center" >Inactivar</th>
                                                    </tr>
                                                </thead>

                                                    <tbody>
                                                        @foreach($fichas as $ficha)
                                                            <tr>
                                                                    <td>  {{ $ficha->id}}</td>
                                                                    <td>  {{ $ficha->codigo }}</td>
                                                                    <td>  {{ $ficha->curso->curso}}</td>
                                                                    <td>  {{ $ficha->modalidad }}</td>
                                                                    <td>  {{ $ficha->oferta }}</td>
                                                                    <td>  {{ $ficha->cuenta }}</td>
                                                                    <td>  {{ $ficha->fecha_ini }}</td>
                                                                    <td>  {{ $ficha->fecha_fin}}</td>
                                                                    <td>  {{ $ficha->cupo}}</td>
                                                                    <td>{{$ficha->estado}}</td>
                                                                    <td><a href="{{route('ficha.edit', $ficha->id)}}" class="btn btn-sm btn-amarillo"><span class="fa fa-pencil" aria-hidden="true"></span></a></td>
                                                                    <td><a href="#" class="btn btn-sm btn-amarillo"><span class="fa fa-close" aria-hidden="true"></span></a></td>
                                                                </tr>
                                                        @endforeach
                                                    </tbody>
                                    </table>

                             <div class="row">
                                <div class="col-lg-6 ">
                                   <a href="{{route('ficha.create')}}" style="text-decoration:none;color:white;" >
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">

                                         Nueva Ficha

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
        </div>

<br><br>

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
