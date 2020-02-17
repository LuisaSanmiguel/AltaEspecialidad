@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                              ESCUELAS
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}
   
      

       <table id="example" class="table table-bordered cell-border table-hover" >
      
      <thead>
							<tr class="active">
                                
							   <th class="text-center">Nombre</th>
                               <th class="text-center">Costo</th> 
                               <th class="text-center">Estado</th>
                               <th class="text-center" colspan="2">Acciones</th>
								
							</tr>
						</thead>



  @foreach($carreras as $carrera)
      

     
       			<tr>
                     
     <td>  {{ $carrera->nombre }}</td>   

            @if($carrera->costo == null)
                        <td> Sin definir </td> 
            @else

            <td> {{ $carrera->costo }} </td> 
            @endif
          
    

     @if ( $carrera->activo == 1 )
         <td>Activo</td> 
      @else 
         <td>Inactivo</td> 
      @endif
         <td >  
                                                                    <a href="{{route('escuela.edit',$carrera->id)}}" class="btn btn-sm btn-amarillo"><span class="fa fa-pencil" aria-hidden="true"></span></a></td> 
                                                                  <td >   <a href="#" class="btn btn-sm btn-amarillo"><span class="fa fa-close" aria-hidden="true"></span></a>
                                                                </td> 
         @endforeach  
</tr>

              </table>      
                            <div class="row">
                                <div class="col-lg-12 ">
                                   <a href="{{route('escuela.create')}}" style="text-decoration:none;color:white;" >
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                           
                                         Nueva Escuela
                                           
                                        </div></a>
                                
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
