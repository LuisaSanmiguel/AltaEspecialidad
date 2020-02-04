              @extends('layouts.app')

@section('content')
<section class="home-section text-center" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-8">
                <br>
                    <br>
                        <h2>
                            ESCUELA DE FORMACIÓN VIRTUAL
                        </h2>
                    </br>
                </br>
            </div>
        </div>

            <div class="row">
                            <div class="col-lg-12 ">
                            
                                        <h2>
                                        Programas Disponibles 
                                        </h2>
                            </div>
                        </div>
       
         
         <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class="wow bounceInUp" data-wow-delay="0.2s">


                    <div class="row">
                          
                          
                            <div class="col-sm-4 col-lg-offset-8">
                                <strong>
                                    <p class="subtitle">
                                        PROGRAMAS ACADÉMICOS
                                    </p>
                                </strong>
                            </div>
                            {{-- <div class="col-sm-4 col-lg-offset-8">
                                <strong>
                                    <p class="subtitle">
                                        REGISTRO
                                    </p>
                                </strong>
                            </div> --}}
                            <div class="col-sm-4 col-lg-offset-8">
                                <strong>
                                    <p class="subtitle">
                                        COSTO
                                    </p>
                                </strong>
                            </div>


                    </div>


                    {{-- primer programa --}} 
                    
                    	{{-- <td><a href="{{ route("carrera.edit", $persona->id)}}" class="btn btn-xs btn-info">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
								<td>
									@include('personas.delete', ['persona' => $persona])
								</td> --}}
                  @foreach($carreras as $carrera)
                    @if($carrera->activo==1)
                    <div class="row">
                        <div class="col-sm-4 col-lg-offset-8">
                         <a href="{{route("Cursos", $carrera->id)}}" class="botonA">
                            <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                <p class="tituloProgramaDisp">
                                   {{$carrera->nombre}} 
                                </p>
                            </div>
                             </a>
                        </div>
                        {{-- <div class="col-sm-4 col-lg-offset-8">
                            <a href="/GestionPublica">
                                <div class="programasgratis bounceInUp" data-wow-delay="0.2s">
                                    <strong>
                                        <p class="tituloServiciog">
                                            Matricularse
                                        </p>
                                    </strong>
                                </div>
                            </a>
                        </div> --}}


                        <div class="col-sm-4 col-lg-offset-8">
                            <div class="programasgratis bounceInUp" data-wow-delay="0.2s">
                                <strong>
                                    <p class="tituloGratis">
                                          {{$carrera->costo}} 
                                    </p>
                                   
                                </strong>  
                                
                           
                            </div>
                        </div>
                

                 
					
                      

                    
                   <div class="col-sm-4 col-lg-offset-8">
                             <a class="ingresoAulaTx" href="/homeCursos">
                             <div class="ingresoAula bounceInUp" data-wow-delay="0.2s">
                           
                              
                                    <strong>
                                        <h4 class="ingresoAulaTx">
                                            Ingreso al Aula Virtual
                                        </h4>
                                    </strong>
                                </div>
                            </a>
                        </div>	
                        


        </div>   
         @endif
						@endforeach
 </div>

     </div>
 </div>

        <div class="row">
            <div class="col-lg-12 ">
                <br>
                    <br>
                        <h2>
                         Próximamente 
                        </h2>
            </div>
        </div>

               <div class="col-md-12 col-lg-offset-8">
                <div class="wow2 bounceInUp" data-wow-delay="0.2s">
                   
                   
                    <div class="row">
                            <div class="col-sm-4 col-lg-offset-8">
                                <strong>
                                    <p class="subtitle">
                                        PROGRAMAS ACADÉMICOS
                                    </p>
                                </strong>
                            </div>
                            {{-- <div class="col-sm-4 col-lg-offset-8">
                                <strong>
                                    <p class="subtitle">
                                        REGISTRO
                                    </p>
                                </strong>
                            </div> --}}
                            <div class="col-sm-4 col-lg-offset-8">
                                <strong>
                                    <p class="subtitle">
                                        COSTO
                                    </p>
                                </strong>
                            </div>


                    </div>


                          @foreach($carreras as $carrera)
                    @if($carrera->activo==0)
                    {{-- programa 2---------------------------------------------- --}}
                    <div class="row">
                                        <div class="col-sm-4 col-lg-offset-8">
                                            <div class="programas bounceInUp" data-wow-delay="0.2s">
                                                <p class="tituloPrograma">
                                                        {{$carrera->nombre}} 
                                                </p>
                                            </div>
                                        </div>
                        {{-- <div class="col-sm-4 col-lg-offset-8">
                            <div class="programas bounceInUp" data-wow-delay="0.2s">
                                <p class="tituloPrograma">
                                    Próximamente
                                </p>
                            </div>
                        </div> --}}
                                    @if($carrera->costo=="GRATIS")
                                    <div class="col-sm-4 col-lg-offset-8">
                                        <div class="programasgratis bounceInUp" data-wow-delay="0.2s">
                                            <strong>
                                                <p class="tituloGratis">
                                                    ¡GRATIS!
                                                </p>
                                            </strong>
                                        </div>
                                    </div>
                               
                                        @else   
                                            @endif

                                 

                         
                     </div>  @else  
                     
                     
                     
                     @endif
						@endforeach
                        <br><br>
                  
            </div>
        </div>
    </div>
</section>
@endsection
