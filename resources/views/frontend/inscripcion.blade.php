@extends('layouts.app')

@section('content')


    <!-- Modal -->
		<div id="form" class="modal fade" role="dialog" >
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title text-center">Formulario de inscripción</h4>
		      </div>
		      <div class="modal-body">
		        <form class="form" method="POST" action="{{ route('inscripcion.save') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
		            <div class="col-md-12">
		                <div class="form-group col-md-2 col-md-offset-2">
		                    <label for="titulo_">Tipo</label>
		                    <select class="form-control" name="typeDoc">
		                        <option>CC</option>
		                        <option>TI</option>
		                    </select>
		                </div>
		                <div class="form-group col-md-6">
		                    <label for="etiquetas_">Numero de Identidad</label>
		                    <input class="form-control" type="number" name="id">
		                </div>
                           <div class="form-group col-md-6">
		                    
		                    <input class="form-control" type="hidden" name="curso" value="6"></input>
		                </div>
		                <hr>
		                <div class="form-group col-md-6">
		                    <label for="titulo_">Nombre</label>
		                    <input type="text" class="form-control" name="name">
		                </div>
                           <div class="form-group col-md-6">
		                    <label for="titulo_">Contraseña</label>
		                    <input type="text" class="form-control" name="password">
		                </div>
		                <div class="form-group col-md-6">
		                    <label for="etiquetas_">Correo Electronico</label>
		                    <input class="form-control" type="email" name="email">
		                </div>
		                <hr>
		                <div class="form-group col-md-6">
		                    <label for="titulo_">Direccion</label>
		                    <input type="text" class="form-control" name="direccion">
		                </div>
		                <div class="form-group col-md-6">
		                    <label for="etiquetas_">Telefono</label>
		                    <input class="form-control" type="number" name="telefono">
		                </div>
		                <div class="form-group col-md-6">
	                    <label for="departamento">Selecciona un Departamento</label>
	                    <select class="form-control" id="departamento">
	                        @foreach($departamentos as $departamento)
	                        <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
	                        @endforeach
	                    </select>
	                	</div>
	                	<div class="form-group col-md-6">
		                    <label for="etiquetas_">Municipio</label>
		                    <select class="form-control" name="ciudad" id="ciudad" placeholder="seleccione un departamento">
		                    </select>
		                </div>
		                <hr>
		               
		                

		                <div class="form-group col-md-6 pull-right">
		                    <button type="submit" class="btn btn-primary">Guardar</button>
		                    <button data-dismiss="modal" class="btn btn-danger">Cancelar</button>
		                </div>

		            </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		      </div>
		    </div>
		  </div>
		</div>
@stop

@section('js')
<script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>	
	<script src="/js/jquery.scrollTo.js"></script>

        <script type="text/javascript">
    	$(document).ready(function(){
    		ciudades()
    	})
        $('#departamento').on('click', function(){
          ciudades()
        })

      function ciudades(){
      	let departamento = $('#departamento').val()
        $('#ciudad').empty()
        $.get('/ciudad/'+departamento, function(response, state){
        		for(i=0; i<response.length; i++){
          		console.log(response[i])
          		$('#ciudad').append('<option value="'+response[i].id+'">'+response[i].nombre+'</option>')
          	}
        })
      }
    </script>
@stop

@section('css')
    <style type="text/css">
        .home-section{
            -webkit-box-shadow: 2px 4px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 2px 4px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 2px 4px 5px 0px rgba(0,0,0,0.75);
            border: 1px solid black;
        }
    </style>

     
@stop

