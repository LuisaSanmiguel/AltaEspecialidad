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
   
      <form   action="{{ route('ficha.update',$ficha->id )}}" class="form" method="POST">
       @csrf
         <input name="_method" type="hidden" value="PUT">
         <table id="example" class="table table-bordered cell-border table-hover" >
      
            <thead>
                                  <tr class="active">
                                      
                                      <th colspan="2"class="text-center">Modifique los datos de la ficha {{$ficha->codigo}}</th>
                                    
                                  
                                  </tr>
                              </thead>
      
      
                                  </tr>
      
      
                                  <tbody> 
                                  
                                  <tr>
                                     <td class="text-center">Curso</td>  
                                    <td class="text-center"> <select class="form-control" id="curso" name="curso">
                                     <option value="0">Seleccione el Curso</option>  
                                     @foreach($cursos as $curso)
                                       <option value="{{$curso->id}}" {{($ficha->curso_id == $curso->id ? 'selected' : '')}}>{{$curso->curso}} </option>   
                                          @endforeach
                                      </select>
                                      </td>
                                  </tr>
                             <tr>
                                     <td class="text-center">Modalidad de curso</td>  
                                    <td class="text-center"> <select id="modalidad" name="modalidad"class="form-control" >
                                     <option value="0">Seleccione la modalidad</option>  
                                     <option value="Mixta" {{($ficha->modalidad == 'Mixta' ? 'selected' : '')}}>Mixta</option>  
                                     <option value="Presencial" {{($ficha->modalidad == 'Presencial' ? 'selected' : '')}}>Presencial</option>  
                                     <option value="Virtual" {{($ficha->modalidad == 'Virtual' ? 'selected' : '')}}>Virtual</option>  
                                      </select>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">Tipo de Oferta</td>  
                                     <td class="text-center"> <select id="oferta" name="oferta"class="form-control" >
                                      <option value="0">Seleccione el tipo de oferta</option>  
                                      <option value="Abierta" {{($ficha->oferta == 'Abierta' ? 'selected' : '')}}>Abierta</option>  
                                      <option value="Cerrada" {{($ficha->oferta == 'Cerrada' ? 'selected' : '')}}>Cerrada</option>  
                                      
                                       </select>
                                       </td>
                                   </tr>
                               
      
                                <tr>
                                     <td class="text-center">Datos de Cuenta bancaria</td> <td class="text-center"><input style="width:100%" class="form-control" id="cuenta" name="cuenta" type="text" placeholder="Ingrese el Número de cuenta, el tipo de cuenta y banco"  value="{{$ficha->cuenta }}" required/></td>
                                  </tr>
                                 <tr>
                                 <td class="text-center">Fecha de Inicio</td> <td class="text-center"><input style="width:100%" class="form-control" type="date" id="fecha_ini" name="fecha_ini" placeholder="Ingrese la fecha de inicio " value="{{$ficha->fecha_ini }}" required /></td>
                                  </tr>
                                  <tr>
                                     <td class="text-center">Fecha de Finalización</td> <td class="text-center"><input style="width:100%" class="form-control" id="fecha_fin" name="fecha_fin" type="date" placeholder="Ingrese la fecha de finalización" value="{{$ficha->fecha_fin }}" required/></td>
                                  </tr>
                                 <tr>
                                 <td class="text-center">Cupo</td> <td class="text-center"><input class="form-control" style="width:100%" type="number" id="cupo" name="cupo" placeholder="Ingrese el Cupo máximo de estudiantes" value="{{$ficha->cupo }}" required /></td>
                                  </tr>
                                  <tr>
                                      <td class="text-center">Estado</td>  
                                     <td class="text-center"> <select id="estado" name="estado"class="form-control" >
                                      <option value="0">Seleccione el estado de la ficha</option>  
                                      <option value="inscripciones"  {{($ficha->estado == 'inscripciones' ? 'selected' : '')}}>Inscripciones</option>  
                                      <option value="en curso"  {{($ficha->estado == 'en curso' ? 'selected' : '')}}>En Curso</option>  
                                      <option value="finalizada"  {{($ficha->estado == 'finalizada' ? 'selected' : '')}}>Finalizada</option> 
                                      
                                       </select>
                                       </td>
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
