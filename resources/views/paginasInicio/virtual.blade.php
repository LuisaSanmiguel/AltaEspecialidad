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
                    <div class="row">
                        <div class="col-sm-4 col-lg-offset-8">
                         <a href="/GestionPublica" class="botonA">
                            <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                <p class="tituloProgramaDisp">
                                    Escuela de formación en Gestión Pública
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
                                        ¡GRATIS!
                                    </p>
                                   
                                </strong>  
                                
                           
                            </div>
                        </div>
                    
                   <div class="col-sm-4 col-lg-offset-8">
                             <a class="ingresoAulaTx" href="/home">
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
                    {{-- programa 2---------------------------------------------- --}}
                    <div class="row">
                        <div class="col-sm-4 col-lg-offset-8">
                            <div class="programas bounceInUp" data-wow-delay="0.2s">
                                <p class="tituloPrograma">
                                    Escuela de formación Política
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
                        <div class="col-sm-4 col-lg-offset-8">
                            <div class="programasgratis bounceInUp" data-wow-delay="0.2s">
                                <strong>
                                    <p class="tituloGratis">
                                        ¡GRATIS!
                                    </p>
                                </strong>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-sm-4 col-lg-offset-8">
                            <div class="programas bounceInUp" data-wow-delay="0.2s">
                                <p class="tituloPrograma">
                                    Escuela de formación Ciencias Contables
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-offset-8">
                            <div class=" bounceInUp" data-wow-delay="0.2s">
                                <p class="tituloPrograma">
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-offset-8">
                            <div class=" bounceInUp" data-wow-delay="0.2s">
                                <p class="tituloPrograma">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-lg-offset-8">
                            <div class="programas bounceInUp" data-wow-delay="0.2s">
                                <p class="tituloPrograma">
                                    Escuela de formación Ciencias Jurídicas
                                </p>
                            </div>
                        </div>
                        <div class=" col-sm-4 col-lg-offset-8">
                            <div class=" bounceInUp" data-wow-delay="0.2s">
                                <h5 class="tituloPrograma">
                                </h5>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-lg-offset-8">
                            <div class="programas bounceInUp" data-wow-delay="0.2s">
                                <p class="tituloPrograma">
                                    Escuela de formación Desarrollo Software
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-offset-8">
                            <div class=" bounceInUp" data-wow-delay="0.2s">
                                <h5 class="tituloPrograma">
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-offset-8">
                            <div class=" bounceInUp" data-wow-delay="0.2s">
                                <h5 class="tituloPrograma">
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4 col-lg-offset-8">
                          <div class="programas bounceInUp" data-wow-delay="0.2s">
                              <p class="tituloPrograma">
                                  Escuela de Formación Mercadeo y Publicidad
                              </p>
                          </div>
                      </div>
                      <div class="col-sm-4 col-lg-offset-8">
                          <div class=" bounceInUp" data-wow-delay="0.2s">
                              <h5 class="tituloPrograma">
                              </h5>
                          </div>
                      </div>
                      <div class="col-sm-4 col-lg-offset-8">
                          <div class=" bounceInUp" data-wow-delay="0.2s">
                              <h5 class="tituloPrograma">
                              </h5>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-4 col-lg-offset-8">
                          <div class="programas bounceInUp" data-wow-delay="0.2s">
                              <p class="tituloPrograma">
                                  Escuela de Formación en Emprendimiento
                              </p>
                          </div>
                      </div>
                      <div class="col-sm-4 col-lg-offset-8">
                          <div class=" bounceInUp" data-wow-delay="0.2s">
                              <h5 class="tituloPrograma">
                              </h5>
                          </div>
                      </div>
                      <div class="col-sm-4 col-lg-offset-8">
                          <div class=" bounceInUp" data-wow-delay="0.2s">
                              <h5 class="tituloPrograma">
                              </h5>
                          </div>
                      </div>
                  </div>
                  <br><br>
                  <div class="float-right">
                      <a class=" btn btn-register" style="float: right;" href="{{ route('login') }}">
                          Aula Virtual Ingresar
                      </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
