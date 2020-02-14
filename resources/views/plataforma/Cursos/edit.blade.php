@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center>
                    <div class="card-header">
                        Bienvenido a la Administración del Aula Virtual
                    </div>


                    
  <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                   
                    <div class="row">
                        <div class="col-sm-12 ">
                            <strong>
                                <p class="subtitle">
                            EDITAR CURSO
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}
   
      <form   action="{{ route('curso.update',$curso->id )}}" class="form" >
       @csrf
       @method('_PUT')
       <table id="example" class="table table-bordered cell-border table-hover" >
      
      <thead>
							<tr class="active">
                                
								<th colspan="2"class="text-center">Edite los datos del Curso</th>
                              
							
							</tr>
						</thead>


                            </tr>


                            <tbody> 
                            
                            <tr>
                           	<td class="text-center">Carrera</td>  
                              <td class="text-center"> <select class="form-control" id="carrera" name="carrera">
                          
                               @foreach($carreras as $carrera)
                                 <option value="{{$carrera->id}}" {{($carrera->id==$curso->carrera_id ? 'selected' : '')}}>{{$carrera->nombre}}</option>   
                                    @endforeach
                                </select>
                                </td>
                            </tr>
                       <tr>
                           	<td class="text-center">Tipo de curso</td>  
                              <td class="text-center"> <select id="tipo" name="tipo"class="form-control" >
                               <option value="0">Seleccione el tipo de curso</option>  
                               @foreach($tipos as $tipo)
                                 <option value="{{$tipo->id}}" {{($tipo->id==$curso->tipo_id ? 'selected' : '')}}>{{$tipo->nombre}}</option>   
                                    @endforeach
                                </select>
                                </td>
                            </tr>
                        

                         	<td class="text-center">Estado</td>  
                              <td class="text-center"> <select id="estado" name="estado"class="form-control" >
                               <option value="0" {{($curso->activo==0 ? 'selected' : '')}}>Inactivo</option>  
                              
                                 <option value="1" {{($curso->activo==1 ? 'selected' : '')}}>Activo</option>   
                               
                                </select>
                                </td>
                            </tr>
                         

                          <tr>
                           	<td class="text-center">Nombre</td> <td class="text-center"><input style="width:100%" class="form-control" id="curso" name="curso" type="text" value="{{$curso->curso}}"placeholder="Ingrese el Nombre del curso" required/></td>
                            </tr>
                           <tr>
                           <td class="text-center">Duración</td> <td class="text-center"><input style="width:100%" class="form-control" type="text" id="duracion" name="duracion" value="{{$curso->duracion}}" placeholder="Ingrese la duración " requiered /></td>
                            </tr>
                            <tr>
                           	<td class="text-center">Presentación</td> <td class="text-center"><textarea style="width:100%" class="form-control" id="presentacion" name="presentacion"  type="text" placeholder="Ingrese el Nombre del curso" rows="3" required>{{$curso->presentacion}}</textarea>
                            </tr>
                           <tr>
                           <td class="text-center">Objetivo General</td> <td class="text-center"><textarea class="form-control" style="width:100%" type="text" id="obj_general" name="obj_general"  placeholder="Ingrese el Objetivo general" rows="3" requiered>{{$curso->obj_general}}</textarea></td>
                            </tr>
                        
                            <tr>
                           	<td class="text-center">Perfil  Entrada</td> <td class="text-center"><textarea class="form-control" style="width:100%" id="perfil_entrada" name="perfil_entrada" type="text" placeholder="Ingrese el Perfil de entrada" rows="5" required>{{$curso->perfil_entrada}}</textarea></td>
                            </tr>
                           <tr>
                           <td class="text-center">Perfil Salida</td> <td class="text-center"><textarea class="form-control" style="width:100%" type="text" id="perfil_salida" name="perfil_salida" placeholder="Ingrese el Perfil de salida" rows="4" requiered>{{$curso->perfil_salida}}</textarea></td>
                            </tr>


                            </tbody>

              </table>      
                            <div class="row">
                                <div class="col-lg-12 ">
                                   
                                        <button type="submit" class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                            <p class="tituloProgramaDisp">
                                         Guardar
                                            </p>
                                        </button>
                                
                                </div>
                           </div>
                
           </form>
    

   
                
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
@stop

@section('js')
 
@stop
