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



  <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class="wow bounceInUp" data-wow-delay="0.2s">

                    <div class="row">
                        <div class="col-sm-12 ">
                            <strong>
                                <p class="subtitle">
                              Inscripciones
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}



       <table id="example" class="table table-bordered cell-border table-hover" >

      <thead>
							<tr class="active">
                             {{-- <th class="text-center">No</th> --}}
                                 <th class="text-center">Tipo de Documento</th>
								<th class="text-center">Número de Documento</th>
                                {{-- <th class="text-center">codigo</th> --}}
								<th class="text-center">Nombre</th>
                                <th class="text-center">Correo</th>
                                 {{-- @foreach($cursos as $curso) --}}

                                <th class="text-center">Inscrito</th>
                                   <th class="text-center">Estado</th>
                                {{-- @endforeach --}}


							</tr>
						</thead>


           @foreach($cursos as $curso)


		<tr>
            {{-- <td>  {{ $user->id }}</td>  --}}
                     <td>  {{ $curso->typeDoc}}</td>
                     <td>  {{ $curso->numDc }}</td>
                     {{-- <td> {{ $inscripcion->user_id }} </td>   --}}
                     <td>  {{ $curso->name }}</td>
                     <td> {{ $curso->email }} </td>
                     <td> {{ $curso->curso }} </td>
                     <td> {{ __($curso->estado) }} </td>

                     </tr>

@endforeach





              </table>
                            <div class="row">
                                <div class="col-lg-6 ">

                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                            <p class="tituloProgramaDisp">

                                            </p>
                                        </div>

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

                        <br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
      "pageLength": 5,
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
