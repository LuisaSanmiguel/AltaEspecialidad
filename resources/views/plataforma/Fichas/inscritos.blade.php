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

                                            <p class="subtitle">
                                        <strong> Inscritos a la fFicha: {{$ficha->name}}</strong>
                                            </p>

                                    </div>
                                </div>
                            <table id="example" class="table table-responsive table-bordered cell-border table-hover text-center" >

                                                <thead>
                                                    <tr class="active">
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Nombre</th>
                                                        <th class="text-center">Email</th>
                                                        <th class="text-center">Ciudad</th>
                                                    </tr>
                                                </thead>

                                                    <tbody>
                                                         @foreach($ficha->fichasUser as $inscrito)
                                                        <tr>
                                                          <td>  {{ $inscrito->user->id}}</td>
                                                          <td>  {{ $inscrito->user->name }}</td>
                                                          <td>  {{ $inscrito->user->email }}</td>
                                                          <td>  {{ $inscrito->user->ciudad->nombre }}</td>
                                                      </tr>
                                                        @endforeach
                                                    </tbody>
                                    </table>

                             <div class="row">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <a href="{{route('curso.index')}}" style="text-decoration:none;color:white;" >
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
