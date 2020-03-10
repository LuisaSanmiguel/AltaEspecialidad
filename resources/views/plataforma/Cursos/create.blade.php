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
                            NUEVO CURSO
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}

      <form   action="{{ route('curso.store') }}" class="form" method="POST">
     @csrf
       <table id="example" class="table table-bordered cell-border table-hover" >

      <thead>
							<tr class="active">

								<th colspan="2"class="text-center">Ingrese los datos del Nuevo Curso</th>


							</tr>
						</thead>


                            </tr>


                            <tbody>

                            <tr>
                           	<td class="text-center">Carrera</td>
                              <td class="text-center"> <select class="form-control" id="carrera" name="carrera">
                               <option value="0">Seleccione la carrera</option>
                               @foreach($carreras as $carrera)
                                 <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
                                    @endforeach
                                </select>
                                </td>
                            </tr>
                       <tr>
                           	<td class="text-center">Tipo de curso</td>
                              <td class="text-center"> <select id="tipo" name="tipo"class="form-control" >
                               <option value="0">Seleccione el tipo de curso</option>
                               @foreach($tipos as $tipo)
                                 <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                    @endforeach
                                </select>
                                </td>
                            </tr>



                          <tr>
                           	<td class="text-center">Nombre</td> <td class="text-center"><input style="width:100%" class="form-control" id="curso" name="curso" type="text" placeholder="Ingrese el Nombre del curso" required/></td>
                            </tr>
                           <tr>
                           <td class="text-center">Duración</td> <td class="text-center"><input style="width:100%" class="form-control" type="text" id="duracion" name="duracion" placeholder="Ingrese la duración " required /></td>
                            </tr>
                            <tr>
                           	<td class="text-center">Presentación</td> <td class="text-center"><input style="width:100%" class="form-control" id="presentacion" name="presentacion" type="text" placeholder="Ingrese el Nombre del curso" required/></td>
                            </tr>
                           <tr>
                           <td class="text-center">Objetivo General</td> <td class="text-center"><input class="form-control" style="width:100%" type="text" id="obj_general" name="obj_general" placeholder="Ingrese el Objetivo general"required /></td>
                            </tr>

                            <tr>
                           	<td class="text-center">Perfil  Entrada</td> <td class="text-center"><input class="form-control" style="width:100%" id="perfil_entrada" name="perfil_entrada" type="text" placeholder="Ingrese el Perfil de entrada" required/></td>
                            </tr>
                           <tr>
                           <td class="text-center">Perfil Salida</td> <td class="text-center"><input class="form-control" style="width:100%" type="text" id="perfil_salida" name="perfil_salida" placeholder="Ingrese el Perfil de salida" required /></td>
                            </tr>


                            </tbody>

              </table>
                            <div class="row">
                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-2 ">
                                        <button type="submit" class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                            <p class="tituloProgramaDisp">
                                          Crear Curso
                                            </p>
                                        </button>
                                </div>

                                <div class="col-lg-2 ">
                                    <a href="{{route('curso.index')}}" style="padding:10px;text-decoration:none;color:white;    margin-top: 10px !important;
                                    position: absolute;" class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                      Volver
                                    </a>
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
