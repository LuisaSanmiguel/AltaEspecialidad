@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center>

                    <div class="card-header">
                        Bienvenido a la Administración del Aula Virtual
                    </div>

                    <div class="wow col-lg-12 col-lg-offset-8">
                        <ul class="nav nav-tabs" id="">
                            <li class="tabs"><a class="tituloTabs"  href="{{route('curso.edit',$curso->id)}}">Datos Básicos</a></li>
                            <li class="tabs active"><a class="tituloTabs" data-toggle="tab" href="#menu1">Caracteristicas</a></li>
                            <li class="tabs"><a class="tituloTabs" href="{{ route('AnexoCurso.edit',$curso->id )}}">Anexos</a></li>

                        </ul>
                    </div>


                    <div class="row">
                            <div class="col-md-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <table id="" class="table table-bordered cell-border table-hover" >
                                        <thead>
                                                            <tr class="active">

                                                                <th colspan="4"class="text-right">Agregue nueva característica para el Curso  <a href="{{route('crearCarac', $curso->id)}}"  class="btn btn-sm btn-rojo"><span class="fa fa-plus" aria-hidden="true"></span></a></th>
                                                                </tr>


                                        </thead>
                                    </table>

                                    <div class="wow col-lg-12 col-lg-offset-8">

                                        <table id="" class="table table-bordered cell-border table-hover" >
                                            <thead>
                                                <tr class="active">
                                                    <th colspan="2"class="text-center">Edite los datos del Curso {{$curso->curso}}</th>
                                                </tr>
                                            </thead>
                                        </table>

                                        <ul class="nav nav-tabs" id="myTab">
                                            <li class="tabs active"><a class="tituloTabs"  data-toggle="tab" href="#objetivo">Objetivos</a></li>
                                            <li class="tabs "><a class="tituloTabs" data-toggle="tab" href="#competencia">Competencias</a></li>
                                            <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="#ejes">Ejes</a></li>
                                            <li class="tabs"><a class="tituloTabs" data-toggle="tab"  href="#desarrollo">Desarrollo</a></li>
                                            <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="#material">Materiales</a></li>
                                            <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="#bibliografia">Bibliografia</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



              </div>
  <form   action="{{ route('cursoCarac.update',$curso->id )}}" class="form" method="POST">

                                                <div class="tab-content">
                                                    @csrf
                                                                <input name="_method" type="hidden" value="PUT">


                                                                                    <div id="objetivo" class="tab-pane fade in active">
                                                                                        <table id="example" class="table table-bordered cell-border table-hover" >
                                                                                            <thead>
                                                                                                    <tr>
                                                                                                            <th class="text-center" style="width:40px;">Caracteristica</th>
                                                                                                            <th class="text-center">Información</th>
                                                                                                            <th class="text-center">Eliminar</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                            <tbody>
                                                                                        @foreach($caracteristicas_curso as  $caracteristica_curso)

                                                                                            @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 1)
                                                                                                <tr>

                                                                                                <td class="text-center"><strong> Objetivos Específicos </strong></td>

                                                                                            <td class="text-center">  <input name="ids[]" type="hidden" value="{{$caracteristica_curso->id}}"/>
                                                                                                <textarea style="width:100%" class="form-control" id="carac.{{$caracteristica_curso->id}}" name="carac.{{$caracteristica_curso->id}}" type="text"  placeholder="Ingrese la característica del curso" required rows="2" >{{ $caracteristica_curso->contenido }}</textarea>
                                                                                                    </td>
                                                                                                    <td class="text-center">
                                                                                                        <a href="{{route('cursoCarac.destroy',$caracteristica_curso->id)}}" class="btn btn-sm btn-rojo"><span class="fa fa-close" aria-hidden="true"></span></a>
                                                                                                  </td>
                                                                                                    @else
                                                                                                </tr>
                                                                                                @endif

                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                                    </div>

                                                                                    <div id="competencia" class="tab-pane ">
                                                                                        <table id="example" class="table table-bordered cell-border table-hover" >
                                                                                            <thead>
                                                                                                    <tr>
                                                                                                            <th class="text-center" style="width:40px;">Caracteristica</th>
                                                                                                            <th class="text-center">Información</th>
                                                                                                            <th class="text-center">Eliminar</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                            <tbody>

                                                                                                @foreach($caracteristicas_curso as $caracteristica_curso)
                                                                                                    @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 2)

                                                                                                    <tr>
                                                                                                    <td class="text-center"><strong> Competencias Genéricas</strong></td>
                                                                                                        <td class="text-center">
                                                                                                            <input name="ids[]" type="hidden" value="{{$caracteristica_curso->id}}"/>
                                                                                                            <textarea style="width:100%" class="form-control" id="carac.{{$caracteristica_curso->id}}" name="carac.{{$caracteristica_curso->id}}" type="text"  placeholder="Ingrese la característica del curso" required rows="2" >{{ $caracteristica_curso->contenido }}</textarea>
                                                                                                                </td>
                                                                                                                <td class="text-center">
                                                                                                                    <a href="{{route('cursoCarac.destroy',$caracteristica_curso->id)}}" class="btn btn-sm btn-rojo"><span class="fa fa-close" aria-hidden="true"></span></a>
                                                                                                              </td>
                                                                                                                @else
                                                                                                        </tr>
                                                                                                        @endif

                                                                                                @endforeach


                                                                                            @foreach($caracteristicas_curso as $caracteristica_curso)
                                                                                                    @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 3)

                                                                                                    <tr>

                                                                                                        <td class="text-center"> <strong> Competencias Específicas</strong></td>

                                                                                                            <td class="text-center">
                                                                                                                <input name="ids[]" type="hidden" value="{{$caracteristica_curso->id}}"/>
                                                                                                            <textarea style="width:100%" class="form-control" id="carac.{{$caracteristica_curso->id}}" name="carac.{{$caracteristica_curso->id}}" type="text"  placeholder="Ingrese la característica del curso" required rows="2" > {{ $caracteristica_curso->contenido }}</textarea>
                                                                                                                </td>
                                                                                                                <td class="text-center">
                                                                                                                    <a href="{{route('cursoCarac.destroy',$caracteristica_curso->id)}}" class="btn btn-sm btn-rojo"><span class="fa fa-close" aria-hidden="true"></span></a>
                                                                                                              </td>
                                                                                                                @else
                                                                                                            </tr>
                                                                                                            @endif

                                                                                            @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>

                                                                                    <div id="ejes" class="tab-pane ">
                                                                                        <table id="example" class="table table-bordered cell-border table-hover" >
                                                                                            <thead>
                                                                                                    <tr>
                                                                                                            <th class="text-center" style="width:40px;">Caracteristica</th>
                                                                                                            <th class="text-center">Información</th>
                                                                                                            <th class="text-center">Eliminar</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                            <tbody>
                                                                                                @foreach($caracteristicas_curso as $caracteristica_curso)
                                                                                                        @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 4)
                                                                                                        <tr>
                                                                                                            <td class="text-center"><strong>Ejes Temáticos/ Contenidos:</strong></td>
                                                                                                                <td class="text-center">
                                                                                                                    <input name="ids[]" type="hidden" value="{{$caracteristica_curso->id}}"/>
                                                                                                                <textarea style="width:100%" class="form-control" id="carac.{{$caracteristica_curso->id}}" name="carac.{{$caracteristica_curso->id}}" type="text"  placeholder="Ingrese la característica del curso" required rows="2" > {{ $caracteristica_curso->contenido }}</textarea>
                                                                                                                    </td>
                                                                                                                    <td class="text-center">
                                                                                                                        <a href="{{route('cursoCarac.destroy',$caracteristica_curso->id)}}" class="btn btn-sm btn-rojo"><span class="fa fa-close" aria-hidden="true"></span></a>
                                                                                                                  </td>
                                                                                                                    @else
                                                                                                        </tr>
                                                                                                                @endif
                                                                                                    @endforeach
                                                                                                </tbody>
                                                                                            </table>
                                                                                    </div>

                                                                                    <div id="desarrollo" class="tab-pane ">
                                                                                        <table id="example" class="table table-bordered cell-border table-hover" >
                                                                                            <thead>
                                                                                                    <tr>
                                                                                                            <th class="text-center" style="width:40px;">Caracteristica</th>
                                                                                                            <th class="text-center">Información</th>
                                                                                                            <th class="text-center">Eliminar</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                            <tbody>
                                                                                        @foreach($caracteristicas_curso as $caracteristica_curso)
                                                                                                @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 5)
                                                                                                <tr>
                                                                                                        <td class="text-center"><strong>Desarrollo:</strong></td>
                                                                                                        <td class="text-center"><input name="ids[]" type="hidden" value="{{$caracteristica_curso->id}}"/>
                                                                                                            <textarea style="width:100%" class="form-control" id="carac.{{$caracteristica_curso->id}}" name="carac.{{$caracteristica_curso->id}}" type="text"  placeholder="Ingrese la característica del curso" required rows="3" > {{ $caracteristica_curso->contenido }}</textarea></td>

                                                                                                            <td class="text-center">
                                                                                                                <a href="{{route('cursoCarac.destroy',$caracteristica_curso->id)}}" class="btn btn-sm btn-rojo"><span class="fa fa-close" aria-hidden="true"></span></a>
                                                                                                          </td>
                                                                                                            @else
                                                                                                    </tr>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                                    </div>

                                                                                    <div id="material" class="tab-pane ">
                                                                                        <table id="example" class="table table-bordered cell-border table-hover" >
                                                                                            <thead>
                                                                                                    <tr>
                                                                                                            <th class="text-center" style="width:40px;">Caracteristica</th>
                                                                                                            <th class="text-center">Información</th>
                                                                                                            <th class="text-center">Eliminar</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                            <tbody>
                                                                                            @foreach($caracteristicas_curso as $caracteristica_curso)
                                                                                                @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 6)
                                                                                                <tr>   <td class="text-center"><strong> Descripción de los materiales de apoyo</strong></td>

                                                                                                    <td class="text-center"><input name="ids[]" type="hidden" value="{{$caracteristica_curso->id}}"/>
                                                                                                        <textarea style="width:100%" class="form-control" id="carac.{{$caracteristica_curso->id}}" name="carac.{{$caracteristica_curso->id}}" type="text"  placeholder="Ingrese la característica del curso" required rows="3" > {{ $caracteristica_curso->contenido }}</textarea></td>
                                                                                                        <td class="text-center">
                                                                                                            <a href="{{route('cursoCarac.destroy',$caracteristica_curso->id)}}" class="btn btn-sm btn-rojo"><span class="fa fa-close" aria-hidden="true"></span></a>
                                                                                                      </td>

                                                                                                        @else
                                                                                                    </tr>
                                                                                                    @endif
                                                                                            @endforeach
                                                                                        </tbody>
                                                                                    </table>

                                                                                    </div>


                                                                                    <div id="bibliografia" class="tab-pane ">
                                                                                        <table id="example" class="table table-bordered cell-border table-hover" >
                                                                                            <thead>
                                                                                                    <tr>
                                                                                                            <th class="text-center" style="width:40px;">Caracteristica</th>
                                                                                                            <th class="text-center">Información</th>
                                                                                                            <th class="text-center">Eliminar</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                            <tbody>
                                                                                            @foreach($caracteristicas_curso as $caracteristica_curso)
                                                                                            @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 7)

                                                                                            <tr>
                                                                                                    <td class="text-center"><strong>Bibliografía:</strong></td>
                                                                                                    <td class="text-center"><input name="ids[]" type="hidden" value="{{$caracteristica_curso->id}}"/>
                                                                                                        <textarea style="width:100%" class="form-control" id="carac.{{$caracteristica_curso->id}}" name="carac.{{$caracteristica_curso->id}}" type="text"  placeholder="Ingrese la característica del curso" required rows="3" > {{ $caracteristica_curso->contenido }}</textarea></td>

                                                                                                        <td class="text-center">
                                                                                                            <a href="{{route('cursoCarac.destroy',$caracteristica_curso->id)}}" class="btn btn-sm btn-rojo"><span class="fa fa-close" aria-hidden="true"></span></a>
                                                                                                      </td>
                                                                                                        @else
                                                                                                    @endif
                                                                                                </tr>
                                                                                            @endforeach


                                                                                    </tbody>
                                                                                </table>
                                                                         
                                                                                 </div>

       <div class="row">
                                                                                                <div class="col-lg-4 "> </div>
                                                                                                <div class="col-lg-2 ">
                                                                                                        <button type="submit" class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                                                                                            <p class="tituloProgramaDisp">
                                                                                                        Guardar
                                                                                                            </p>
                                                                                                        </button>
                                                                                                </div>
                                                                                                <div class="col-lg-2 ">
                                                                                                    <a href="{{route('curso.index')}}" style="padding:10px;text-decoration:none;color:white; margin-top: 10px !important;
                                                                                                    position: absolute;" class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                                                                                    Volver
                                                                                                    </a>
                                                                                                </div>
                                                                                        </div>
                                       
<br><br><br>         </div>
    </form>

                                </div>
                            </div>

</div>

@stop


