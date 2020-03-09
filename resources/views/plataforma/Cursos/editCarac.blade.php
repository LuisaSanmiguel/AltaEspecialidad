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
                    <div class="wow col-lg-12 col-lg-offset-8">

                        <ul class="nav nav-tabs" id="myTab">
                            <li class=" tabs"><a class="tituloTabs"  href="{{route('curso.edit',$curso->id)}}">Datos Básicos</a></li>
                            <li class="tabs active"><a class="tituloTabs" data-toggle="tab" href="#menu1">Caracteristicas</a></li>
                            <li class="tabs"><a class="tituloTabs" href="{{ route('AnexoCurso.edit',$curso->id )}}">Anexos</a></li>

                        </ul>

                </div>


  <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class=" bounceInUp" data-wow-delay="0.2s">

                    {{-- <div class="row">
                        <div class="col-sm-12 ">
                            <strong>
                                <p class="subtitle">
                            EDITAR CURSO
                                </p>
                            </strong>
                        </div>
                    </div> --}}


      <form   action="{{ route('curso.update',$curso->id )}}" class="form" method="POST">
       @csrf
         <input name="_method" type="hidden" value="PUT">
       <table id="example" class="table table-bordered cell-border table-hover" >

      <thead>
							<tr class="active">

								<th colspan="2"class="text-center">Edite los datos del Curso {{$curso->curso}}</th>


                            </tr>
                            <tr >

								<th class="text-center" style="width:40px;">Caracteristica</th>
                                <th class="text-center">Información</th>

                            </tr>

						</thead>




                            <tbody>





                            @foreach($caracteristicas_curso as $i => $caracteristica_curso)

                            @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 1)
                                <tr>
                                <td class="text-center"><strong>{{++$i}}- Objetivos Generales </strong></td>

                               <td class="text-center">
                                 <textarea style="width:100%" class="form-control" id="curso" name="curso" type="text"  placeholder="Ingrese el Nombre del curso" required rows="2" >{{ $caracteristica_curso->contenido }}</textarea>
                                    </td>
                                    @else
                                 </tr>
                                 @endif

                         @endforeach





             @foreach($caracteristicas_curso as $i => $caracteristica_curso) <tr>
                   @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 1)
                      <td class="text-center"> <strong>{{++$i}}- Objetivos Especificos</strong></td>

                      <td class="text-center">
                        <textarea style="width:100%" class="form-control" id="curso" name="curso" type="text"  placeholder="Ingrese el Nombre del curso" required rows="2" >{{ $caracteristica_curso->contenido }}</textarea>
                           </td>
                           @else
                      </tr>
                       @endif

                @endforeach




                                @foreach($cursos as $curso)
                                @foreach($caracteristicas_curso as $caracteristica_curso)
                                @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 2)

                                <tr>
                                  <td class="text-center"><strong> Competencias Genéricas</strong></td>
                                       <td class="text-center">
                                         <textarea style="width:100%" class="form-control" id="curso" name="curso" type="text"  placeholder="Ingrese el Nombre del curso" required rows="2" >{{ $caracteristica_curso->contenido }}</textarea>
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
                                          <textarea style="width:100%" class="form-control" id="curso" name="curso" type="text"  placeholder="Ingrese el Nombre del curso" required rows="2" > {{ $caracteristica_curso->contenido }}</textarea>
                                             </td>
                                             @else
                                        </tr>
                                        @endif

                                  @endforeach


                                  @foreach($caracteristicas_curso as $caracteristica_curso)
                                  @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 4)

                                 <tr>

                                       <td class="text-center"><strong>Ejes Temáticos/ Contenidos:</strong></td>

                                        <td class="text-center">
                                          <textarea style="width:100%" class="form-control" id="curso" name="curso" type="text"  placeholder="Ingrese el Nombre del curso" required rows="2" > {{ $caracteristica_curso->contenido }}</textarea>
                                             </td>
                                             @else
                                        </tr>  @endif

                                  @endforeach

                                  @foreach($caracteristicas_curso as $caracteristica_curso)
                                  @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 6)

                                 <tr>

                                         <td class="text-center"><strong>Desarrollo:</strong></td>

                                        <td class="text-center">
                                          <textarea style="width:100%" class="form-control" id="curso" name="curso" type="text"  placeholder="Ingrese el Nombre del curso" required rows="3" > {{ $caracteristica_curso->contenido }}</textarea>
                                             </td>
                                             @else
                                        </tr>
                                         @endif

                                  @endforeach


                                  @foreach($caracteristicas_curso as $caracteristica_curso)

                                      @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 6)
                                       <tr>   <td class="text-center"><strong> Descripción de los materiales de apoyo</strong></td>

                                        <td class="text-center">
                                          <textarea style="width:100%" class="form-control" id="curso" name="curso" type="text"  placeholder="Ingrese el Nombre del curso" required rows="3" > {{ $caracteristica_curso->contenido }}</textarea>
                                             </td>
                                             @else
                                        </tr>
                                        @endif

                                  @endforeach

                                  @foreach($caracteristicas_curso as $caracteristica_curso)
                                  @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 7)

                                 <tr>

                                         <td class="text-center"><strong>Bibliografía:</strong></td>

                                        <td class="text-center">
                                          <textarea style="width:100%" class="form-control" id="curso" name="curso" type="text"  placeholder="Ingrese el Nombre del curso" required rows="3" > {{ $caracteristica_curso->contenido }}</textarea>
                                             </td>
                                             @else
                                         @endif
                                            </tr>
                                  @endforeach



                                              @endforeach

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
