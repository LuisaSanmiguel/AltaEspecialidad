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
                    {{-- <div class="col-lg-12 col-lg-offset-8">

                        <ul class="nav nav-tabs" id="myTab">
                            <li class=" tabs"><a class="tituloTabs" data-toggle="tab" href="#home">Datos Básicos</a></li>
                            <li class="tabs active"><a class="tituloTabs" data-toggle="tab" href="#menu1">Caracteristicas</a></li>
                               <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="{{ route('AnexoCurso.edit',$curso->id )}}">Anexos</a></li>

                        </ul>

                </div> --}}


  <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class="bounceInUp" data-wow-delay="0.2s">

                    {{-- <div class="row">
                        <div class="col-sm-12 ">
                            <strong>
                                <p class="subtitle">
                            EDITAR CURSO
                                </p>
                            </strong>
                        </div>
                    </div> --}}


      <form   action="{{ route('AnexoInscripcion.store' )}}" class="form" method="POST" enctype="multipart/form-data">
       @csrf

       <table id="example" class="table table-bordered cell-border table-hover" >

      <thead>
							<tr class="active">
								<th colspan="2"class="text-center">Crear nuevo anexo <br> Curso {{$curso->curso}}</th>
                            </tr>

                            <tr>
								<th class="text-center" style="width:40px;">Característica</th>
                                <th class="text-center">Información</th>
                            </tr>

						</thead>

                            <tbody>


                                <tr>
                                    <input style="width:100%" class="form-control" id="inscripcion" name="inscripcion" type="hidden" value="{{$curso->inscripcion}}" required/>
                                    <td class="text-center">Nombre</td> <td class="text-center"><input style="width:100%" class="form-control" id="nombre" name="nombre" type="text" placeholder="Ingrese el Nombre del anexo" required/></td>
                                 </tr>
                                 <tr>
                                    <td class="text-center">Anexe documento</td> <td class="text-center"><input style="width:100%" class="form-control" id="file" name="file" type="file"  required/></td>
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
                                    <a href="{{route('AnexoInscripcion.edit',$curso->inscripcion)}}" style="padding:10px;text-decoration:none;color:white;    margin-top: 10px !important;
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
