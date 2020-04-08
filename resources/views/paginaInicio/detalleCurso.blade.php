@extends('layouts.app')

@section('content')
<section class="home-section text-center" id="about">
    <div class="container">   
    
        <div class="row">
            <div class="col-lg-12 col-lg-offset-8">
                <br>
                    <br>
                
                        <h2>
                            {{$curso->tipos->nombre}}   
                    {{ $curso->curso}} 
                    
                        </h2>
                    
                    </br>
                </br>
            </div>
        </div>
            <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#curso">Curso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#contenido">Contenido</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#bibliografia">Bibliografia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{$curso->hv ? $curso->hv->file : ''}}" target="_blank">Perfil del Tutor</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active container" id="curso">
            <div class="row" style="align-text:left;">
                <div class="col-md-12 col-lg-offset-8 contenidoPrograma">
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
                        {{-- primer programa --}}
                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Fecha de Inicio:
                                        </strong>
                                        {{ $curso->fichaPrincipal->fecha_ini}} 
                                    </p>
                                </div>
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

                                         @foreach($curso->caracteristicas(1) as $caracteristica_curso)
                                            <li>
                                                {{ $caracteristica_curso->contenido }}
                                            </li>
                                         @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane container" id="contenido">
            <div class="row" style="align-text:left;">
                <div class="col-md-12 col-lg-offset-8 contenidoPrograma">
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                        <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Competencias Genéricas:
                                        </strong>
                                            
                                          @foreach($curso->caracteristicas(2) as $caracteristica_curso)
                                            <li>
                                                {{ $caracteristica_curso->contenido }}
                                            </li>
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
                                          
                                          @foreach($curso->caracteristicas(3) as $caracteristica_curso)
                                            <li>
                                                {{ $caracteristica_curso->contenido }}
                                            </li>
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
                                         @foreach($curso->caracteristicas(4) as $caracteristica_curso)
                                            <li>
                                                {{ $caracteristica_curso->contenido }}
                                            </li>
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
                                       
                                          @foreach($curso->caracteristicas(5) as $caracteristica_curso)
                                            <li>
                                                {{ $caracteristica_curso->contenido }}
                                            </li>
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
                                       
                                          @foreach($curso->caracteristicas(6) as $caracteristica_curso)
                                            <li>
                                                {{ $caracteristica_curso->contenido }}
                                            </li>
                                         @endforeach

                                        </br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane container" id="bibliografia">
              <div class="row" style="align-text:left;">
                <div class="col-md-12 col-lg-offset-8 contenidoPrograma">
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                         <div class="row">
                            <div class="col-sm-12 col-lg-offset-8">
                                <div class=" bounceInUp" data-wow-delay="0.2s">
                                    <p>
                                        <strong>
                                            Bibliografía:
                                        </strong>
                                       
                                         @foreach($curso->caracteristicas(7) as $caracteristica_curso)
                                            <li>
                                                {{ $caracteristica_curso->contenido }}
                                            </li>
                                         @endforeach

                                        </br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
        
    </div>
</section>
@if (Auth::guest())
<div class="container">
    <div class="col-md-7">
        {{-- <a href="{{route('registro')}}" class="btn btn-primary float-right">Registrarse</a> --}}
             <a href="{{route("registro", $curso->id)}}" class="btn btn-primary float-right">Registrarse</a>
    </div>
</div>
@endif
<br><br><br><br>
@endsection
