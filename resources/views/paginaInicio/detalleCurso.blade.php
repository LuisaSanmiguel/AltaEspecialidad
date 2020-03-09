@extends('layouts.app')

@section('content')
<section class="home-section text-center" id="about">
    <div class="container">   
    
    @foreach($cursos as $curso)
        @foreach($tipos as $tipo)
            @if($tipo->id == $curso->id_tipo)
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-8">
                        <br>
                            <br>
                        
                                <h2>
                                    {{$tipo->nombre}}   
                            {{ $curso->curso}} 
                            
                                </h2>
                            
                            </br>
                        </br>
                    </div>
                </div>
                @else

                   @endif
         @endforeach
     
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
                                    {{ $curso->fecha_ini}} 
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
                  @endforeach
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="col-md-7">
        {{-- <a href="{{route('registro')}}" class="btn btn-primary float-right">Registrarse</a> --}}
             <a href="{{route("registro", $curso->id)}}" class="btn btn-primary float-right">Registrarse</a>
    </div>
</div>
<br><br><br><br>
@endsection
