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
                        <div class="col-sm-12 col-lg-offset-8">
                            <a href="/ContAdmPub">
                                <div class="programas bounceInUp" data-wow-delay="0.2s">
                                    <p class="tituloPrograma">
                                        Nuevas Estrategia de Administración de Pública
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    {{-- programa 2---------------------------------------------- --}}
                    <div class="row">
                        <div class="col-sm-12 col-lg-offset-8">
                            <div class="programas bounceInUp" data-wow-delay="0.2s">
                                <p class="tituloPrograma">
                                    Derecho de Policía y Derecho Procesal Policivo
                                </p>
                            </div>
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
