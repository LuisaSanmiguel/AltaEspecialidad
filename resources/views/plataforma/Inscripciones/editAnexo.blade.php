@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <center>
                    <div class="card-header">
                        Bienvenido a la Administración del Aula Virtual
                    </div>
                    <div class="wow col-lg-12 col-lg-offset-8">

                        <ul class="nav nav-tabs" id="myTab">
                            <li class=" tabs active"><a class="tituloTabs" href="{{route('contenido',$curso->id)}}">CURSO</a></li>
                            <li class="tabs"><a class="tituloTabs"  href="{{route('contenido',$curso->id,'#menu1')}}">DOCUMENTOS DEL CURSO</a></li>
                            <li class="tabs active"><a class="tituloTabs" data-toggle="tab" href="#editar">SUS DOCUMENTOS</a></li>

                        </ul>

                </div>


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

                    <table id="" class="table table-bordered cell-border table-hover" >

                        <thead>
                                              <tr class="active">

                                                  <th colspan="4"class="text-right">Agregue nuevo un documento al Curso  <a href="{{route('crearAnexoEst',$curso->inscripcion)}}"  class="btn btn-sm btn-rojo"><span class="fa fa-plus" aria-hidden="true"></span></a></th>
                                                </tr>


                        </thead>
                    </table>
      <form   action="{{ route('curso.update',$curso->id )}}" class="form" method="POST">
       @csrf
         <input name="_method" type="hidden" value="PUT">
       <table id="example" class="table table-bordered cell-border table-hover" >

      <thead>
							<tr class="active">

								<th colspan="5"class="text-center">Edite sus Anexos <br> Curso {{$curso->curso}}</th>


                            </tr>
                            <tr >

								<th class="text-center" style="width:40px;">Item</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Descargar</th>
                                {{-- <th class="text-center">Reemplazar archivo</th>
                                <th class="text-center">Eliminar</th> --}}

                            </tr>

						</thead>





                            <tbody>
                                @foreach ($anexos as $i => $anexo)


                                <tr>

                                    <input style="width:100%" class="form-control" id="curso_id" name="curso_id" type="hidden" value="{{$curso->id}}" required/>
                                    <td class="text-center">{{++$i}}</td>
                                    <td class="text-center"><input style="width:100%" class="form-control" id="nombre" name="nombre" type="text" placeholder="Ingrese el Nombre del anexo" value="{{$anexo->nombre}}" required/>
                                </td>

                                    <td >
                                        <a href="{{Storage::url($anexo->ruta)}}" target="_blank" class="btn btn-sm btn-amarillo"><span class="fa fa-folder-open-o" aria-hidden="true"></span></a>
                                    </td>
{{--
                                   <td class="text-center"><input style="width:100%" class="form-control" id="file" name="file" type="file"  required/></td>
                                   <td class="text-center">
                                    <a href="{{route('AnexoInscripcion.destroy',$anexo->id)}}" class="btn btn-sm btn-amarillo"><span class="fa fa-close" aria-hidden="true"></span></a>
                              </td> --}}

                                </tr>


                            @endforeach
                            </tbody>

              </table>
                            <div class="row">

{{--
                                <div class="col-lg-12 ">
                                        <button type="submit" class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                            <p class="tituloProgramaDisp">
                                         Guardar
                                            </p>
                                        </button>
                                </div> --}}


                           </div>
 <br><br><br><br>
           </form>




                     </div>



   </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')

@stop
