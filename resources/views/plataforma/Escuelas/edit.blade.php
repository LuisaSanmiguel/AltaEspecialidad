@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                            EDITAR ESCUELA
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}

       <form   action="{{ route('escuela.update',$carrera->id )}}" class="form" method="POST">
       @csrf
         <input name="_method" type="hidden" value="PUT">
       <table id="example" class="table table-bordered cell-border table-hover" >

      <thead>
							<tr class="active">

								<th colspan="2"class="text-center">Modifique los datos de la Escuela</th>


							</tr>
						</thead>


                            </tr>


                            <tbody>
                          <tr>
                           	<td class="text-center">Nombre</td> <td class="text-center"><input style="width:100%" id="nombre" name="nombre" type="text" placeholder="Nombre de Escuela" value="{{$carrera->nombre}}" required/></td>
                            </tr>

                               <tr>
                         	<td class="text-center">Estado</td>
                              <td class="text-center"> <select id="estado" name="estado"class="form-control" >
                               <option value="0" {{($carrera->activo==0 ? 'selected' : '')}}>Inactivo</option>

                                 <option value="1" {{($carrera->activo==1 ? 'selected' : '')}}>Activo</option>

                                </select>
                                </td>
                            </tr>

                           <tr>
                           <td class="text-center">Costo</td> <td class="text-center"><input style="width:100%" type="text" id="costo" name="costo" placeholder="Costo de Escuela"  value="{{$carrera->costo}}" required /></td>
                            </tr>


                            </tbody>

              </table>
                            <div class="row">

                                    <div class="col-lg-4 ">
                                    </div>

                                    <div class="col-lg-2 ">

                                            <button type="submit" class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                                <p class="tituloProgramaDisp">
                                            Guardar
                                                </p>
                                            </button>
                                    </div>

                                    <div class="col-lg-2 ">
                                        <a href="{{route('escuela.index')}}" style="padding:10px;text-decoration:none;color:white;    margin-top: 10px !important;
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
@endsection

@section('js')

@stop
