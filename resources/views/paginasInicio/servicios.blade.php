@extends('layouts.app')

@section('content')
<section class="home-section text-center" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-8">
                <br>
                    <br>
                        <h2>
                            SERVICIOS
                        </h2>
                    </br>
                </br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="row">
                        <div class="col-md-4 col-lg-offset-8">
                            <div class="recuadro bounceInUp" data-wow-delay="0.2s">
                                <i aria-hidden="true" class="fa fa-balance-scale iconoxl">
                                </i>
                                <h5 class="tituloServicio">
                                    Asesoría Jurídica y
                                    <br>
                                        Contable especializada
                                    </br>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-offset-8">
                            <a href="/desarrollo">
                                <div class="recuadro bounceInUp" data-wow-delay="0.2s">
                                    <i aria-hidden="true" class="fa fa-cogs icono iconoxl">
                                    </i>
                                    <h5 class="tituloServicio">
                                        Desarrollo Tecnológico
                                        <br>
                                            para entidades públicas
                                        </br>
                                    </h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-offset-8">
                            <a href="/virtual">
                                <div class="recuadro bounceInUp" data-wow-delay="0.2s">
                                    <i aria-hidden="true" class="fa fa-laptop iconoxl">
                                    </i>
                                    <h5 class="tituloServicio">
                                        Formación Virtual
                                    </h5>
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
