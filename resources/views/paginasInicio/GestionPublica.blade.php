@extends('layouts.app')

@section('content')
<section class="home-section text-center" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-8">
                <br>
                    <br>
                        <h2>
                            ESCUELA DE FORMACIÓN EN GESTIÓN PÚBLICA
                        </h2>
                    </br>
                </br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <strong>
                                <p class="subtitle">
                                    DIPLOMADOS DISPONIBLES
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}
                    <div class="row">
                        <div class="col-lg-8 ">
                            <a href="/ContAdmPub">
                                  <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                    <p class="tituloProgramaDisp">
                                        Nuevas Estrategia de Administración de Pública
                                    </p>
                                </div>
                            </a>
                        </div>
                   

                             <div class="col-lg-4 ">
                            <a class="ingresoAulaTx" href="/registro">
                                <div class="ingresoAula bounceInUp" data-wow-delay="0.2s">
                                    <strong>
                                        <p class="ingresoAulaTx">
                                            Matricularse
                                        </p>
                                    </strong>
                                </div>
                            </a>
                        </div> 
                        
                        </div>
                    {{-- programa 2---------------------------------------------- --}}
                    <div class="row">
                        <div class="col-sm-8 ">
                            <div class="programas bounceInUp" data-wow-delay="0.2s">
                                <p class="tituloPrograma">
                                    Derecho de Policía y Derecho Procesal Policivo
                                </p>
                            </div>
                        </div>


                        
                             <div class="col-lg-4 ">
                            <a class="ingresoAulaTx2" href="#">
                                <div class="ingresoAula2 bounceInUp" data-wow-delay="0.2s">
                                    <strong>
                                        <p class="ingresoAulaTx2">
                                            Proximamente...
                                        </p>
                                    </strong>
                                </div>
                            </a>
                        </div> 
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
<br>
</br>
@endsection
