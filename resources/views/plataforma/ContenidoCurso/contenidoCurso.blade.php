@extends('layouts.app')

@section('content')
@section('css')

@stop
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                    <div class="card-header">
                        Bienvenidos al Aula Virtual


                           </div>


                       @foreach($cursos as $curso) @endforeach
                </center>
                <div class="card-body" >
                      <div class="row">
                            <div class="col-lg-12 col-lg-offset-8">

                                    <ul class="nav nav-tabs" id="myTab">

                                        <li class=" tabs active"><a class="tituloTabs" data-toggle="tab" href="#home">{{strtoupper($curso->nombre)}}</a></li>

                                        <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="#menu1">DOCUMENTOS DEL CURSO</a></li>
                                        <li class="tabs"><a class="tituloTabs" href="{{route('AnexoInscripcion.edit',$curso->inscripcion)}}">SUS DOCUMENTOS</a></li>
                                        @if($curso->aprobo==1)
                                            <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="#certificacion">Certificación</a></li>
                                            @endif
                                    </ul>

                            </div>
                        </div>

             <div class="tab-content">

                <div id="home" class="tab-pane fade in active">

                    <div class="row" >
                        <ul class="list-group" style="width:100%;">

                          <li class="list-group-item"><b>NOMBRE:</b> {{Auth::user()->name}}  </li>
                          <li class="list-group-item"><b>FICHA: </b> {{ $curso->codigo}}</li>
                          <li class="list-group-item"><b>MODALIDAD: </b> {{ $curso->modalidad}}</li>
                          <li class="list-group-item"><b>FECHA DE INICIO: </b> {{ $curso->fecha_ini}}</li>
                          <li class="list-group-item"><b>FECHA DE FINALIZACIÓN: </b> {{ $curso->fecha_fin}}</li>


                          <br><br>
                        </ul>
                    </div>
                    <p class="text-center"> <b>{{strtoupper($curso->nombre)}}</b><br>
                         {{ strtoupper($curso->curso) }}</p>

                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                        <div class="row">
                            <div class="col-lg-12 col-lg-offset-6">

                                <p>


                                    <strong>
                                        Duración:
                                    </strong>
                                   {{ $curso->duracion}}
                                </p>
                            </div>
                        </div>

                        {{-- ContenidoProg --}}
                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Presentación:
                                        </strong>
                                       {{ $curso->presentacion}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Objetivo General:
                                        </strong>
                                        {{ $curso->obj_general}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Objetivos Específicos:
                                        </strong>

                                         @foreach($caracteristicas_curso as $caracteristica_curso)
                                                @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 1)

                                                <li>
                                                {{ $caracteristica_curso->contenido }}
                                                    </li>
                                                @else
                                                @endif

                                         @endforeach


                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Competencias Genéricas:
                                        </strong>

                                         @foreach($caracteristicas_curso as $caracteristica_curso)
                                                @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 2)

                                                <li>
                                                {{ $caracteristica_curso->contenido }}
                                                    </li>
                                                @else
                                                @endif

                                         @endforeach


                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Competencias Específicas:
                                        </strong>

                                         @foreach($caracteristicas_curso as $caracteristica_curso)
                                                @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 3)

                                                <li>
                                                {{ $caracteristica_curso->contenido }}
                                                    </li>
                                                @else
                                                @endif

                                         @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Perfil de Entrada:
                                        </strong>
                                       {{ $curso->perfil_entrada}}

                                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Perfil de Salida:
                                        </strong>
                                     {{ $curso->perfil_salida}}


                                       </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Ejes Temáticos/ Contenidos:
                                        </strong>
                                               @foreach($caracteristicas_curso as $caracteristica_curso)
                                                @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 4)

                                                <li>
                                                {{ $caracteristica_curso->contenido }}
                                                    </li>
                                                @else
                                                @endif

                                         @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Desarrollo:
                                        </strong>

                                         @foreach($caracteristicas_curso as $caracteristica_curso)
                                                @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 5)

                                                <li>
                                                {{ $caracteristica_curso->contenido }}
                                                    </li>
                                                @else
                                                @endif

                                         @endforeach

                                        </br>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Descripción de los materiales de apoyo didáctico contemplados en el Módulo:
                                        </strong>

                                         @foreach($caracteristicas_curso as $caracteristica_curso)
                                                @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 6)

                                                <li>
                                                {{ $caracteristica_curso->contenido }}
                                                    </li>
                                                @else
                                                @endif

                                         @endforeach

                                        </br>
                                    </p>
                                </div>
                            </div>
                        </div>



                     <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Bibliografía:
                                        </strong>

                                         @foreach($caracteristicas_curso as $caracteristica_curso)
                                                @if($caracteristica_curso->curso_id == $curso->id and $caracteristica_curso->caracteristica_id == 7)

                                                <li>
                                                {{ $caracteristica_curso->contenido }}
                                                    </li>
                                                @else
                                                @endif

                                         @endforeach

                                        </br>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>




                 </div>


                <div id="menu1" class="tab-pane">

                    <div class="row">
                        <div class="col-md-12">
                            <br><br>
                            <h4>Documentos</h4>
                        </div>

                        <br><br>

                        <div class="col-md-12">

                            @if($curso->curso_id==1)
                                <a href="{{asset('file/cartillas/cartilla_comunicacion_asertiva.pdf')}}" target="_blank">Cartilla comunicación asertiva</a><br>
                                <a href="{{asset('file/cartillas/Cartilla_trabajo_en_equipo.pdf')}}" target="_blank">Cartilla trabajo en equipo</a>
                             @else
                                <p>Aún no hay material disponible</p>
                             @endif
                        </div>

                        <br><br><br><br>


                        </div>


                       </div>



         <div id="certificacion" class="tab-pane">
                <iframe width="100%" height="400"

                src="{{asset('/file/diplomas/'.$curso->curso_id."/".$curso->numDc.'.pdf')}}"  frameborder="0"></iframe>


                       </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
   <script>
      $(document).foundation();
    </script>
@stop
