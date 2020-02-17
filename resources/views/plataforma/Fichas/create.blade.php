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
                            NUEVA FICHA
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}
   
      <form   action="{{ route('ficha.store') }}" class="form" method="POST">
     @csrf
       <table id="example" class="table table-bordered cell-border table-hover" >
      
      <thead>
							<tr class="active">
                                
								<th colspan="2"class="text-center">Ingrese los datos de la nueva ficha</th>
                              
							
							</tr>
						</thead>


                            </tr>


                            <tbody> 
                            
                            <tr>
                           	<td class="text-center">Curso</td>  
                              <td class="text-center"> <select class="form-control" id="curso" name="curso">
                               <option value="0">Seleccione el Curso</option>  
                               @foreach($cursos as $curso)
                                 <option value="{{$curso->id}}">{{$curso->curso}}</option>   
                                    @endforeach
                                </select>
                                </td>
                            </tr>
                       <tr>
                           	<td class="text-center">Modalidad de curso</td>  
                              <td class="text-center"> <select id="modalidad" name="modalidad"class="form-control" >
                               <option value="0">Seleccione la modalidad</option>  
                               <option value="Mixta">Mixta</option>  
                               <option value="Presencial">Presencial</option>  
                               <option value="Virtual">Virtual</option>  
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Tipo de Oferta</td>  
                               <td class="text-center"> <select id="oferta" name="oferta"class="form-control" >
                                <option value="0">Seleccione el tipo de oferta</option>  
                                <option value="Abierta">Abierta</option>  
                                <option value="Cerrada">Cerrada</option>  
                                
                                 </select>
                                 </td>
                             </tr>
                         

                          <tr>
                           	<td class="text-center">Datos de Cuenta bancaria</td> <td class="text-center"><input style="width:100%" class="form-control" id="cuenta" name="cuenta" type="text" placeholder="Ingrese el Número de cuenta, el tipo de cuenta y banco" required/></td>
                            </tr>
                           <tr>
                           <td class="text-center">Fecha de Inicio</td> <td class="text-center"><input style="width:100%" class="form-control" type="date" id="fecha_ini" name="fecha_ini" placeholder="Ingrese la fecha de inicio " required /></td>
                            </tr>
                            <tr>
                           	<td class="text-center">Fecha de Finalización</td> <td class="text-center"><input style="width:100%" class="form-control" id="fecha_fin" name="fecha_fin" type="date" placeholder="Ingrese la fecha de finalización" required/></td>
                            </tr>
                           <tr>
                           <td class="text-center">Cupo</td> <td class="text-center"><input class="form-control" style="width:100%" type="number" id="cupo" name="cupo" placeholder="Ingrese el Cupo máximo de estudiantes" required /></td>
                            </tr>
                            <tr>
                                <td class="text-center">Estado</td>  
                               <td class="text-center"> <select id="estado" name="estado"class="form-control" >
                                <option value="0">Seleccione el estado de la ficha</option>  
                                <option value="inscripciones">Inscripciones</option>  
                                <option value="en curso">En Curso</option>  
                                <option value="finalizada">Finalizada</option> 
                                
                                 </select>
                                 </td>
                             </tr>
                         
                           </tbody>

              </table>      
                            <div class="row">
                                <div class="col-lg-12 ">
                                   
                                        <button type="submit" class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                            <p class="tituloProgramaDisp">
                                          Crear Curso
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
