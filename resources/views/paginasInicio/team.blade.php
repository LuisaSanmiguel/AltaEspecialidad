@extends('layouts.app')

@section('content')
<section class="home-section text-center" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-8">
                <br>
                    <br>
                        <h2>
                            MISIÓN
                        </h2>
                    </br>
                </br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h4>
                               Las personas naturales o jurídicas de derecho público o privadas tendrán a su disposición un bufete de abogados, contadores e ingenieros, así como un equipo de otras disciplinas capaces de brindar seguridad Jurídica y solidez en sus negocios basados en tecnología de punta y herramientas informáticas
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-8">
                    <div class=" bounceInDown">
                        <div class="section-heading">
                            <br>
                                <br>
                                    <h2>
                                        NUESTRO EQUIPO
                                    </h2>
                                </br>
                            </br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
            </div>
        </div>
        <div class="wow bounceInDown" data-wow-delay="0.4s">
            <div class="section-heading">
                <h4>
                    Administrativos
                </h4>
            </div>
        </div>
        <div class="row">
       

      <div class="col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>
                                MG Luis Gilberto Moya
                            </h5>
                            <p class="subtitle">
                                Representante Legal
                            </p>
                            <div class="avatar">
                                <img alt="" class="img-responsive img-circle" src="{{asset('img/team/MG_LUIS_GILBERTO_MOYA.jpg')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

     <div class="col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>
                                Fernanda Castro Rubiano
                            </h5>
                            <p class="subtitle">
                                Subgerente
                            </p>
                            <div class="avatar">
                                <img alt="" class="img-responsive img-circle" src="{{asset('img/team/Fernanda_Castro_Rubiano.jpg')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.8s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>
                                Gloria Maria yepes
                            </h5>
                            <p class="subtitle">
                                Contadora
                            </p>
                            <div class="avatar">
                                <img class="img-responsive img-circle" src="{{asset('img/team/GLORIA_MARIA_YEPES.jpg')}}" width="200"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wow bounceInUp" data-wow-delay="1s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>
                                Yury Alejandra Rodriguez
                            </h5>
                            <p class="subtitle">
                                Asistente Administrativo
                            </p>
                            <div class="avatar">
                                <img alt="" class="img-responsive img-circle" src="{{asset('img/team/YURY_ALEJANDRA_RODRIGUEZ.png')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
                </hr>
            </div>
        </div>
        <div class="wow bounceInDown" data-wow-delay="0.4s">
            <div class="section-heading">
                <h4>
                    Desarrolladores
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <div class="avatar">
                                <img alt="" class="img-responsive img-circle" src="{{asset('img/team/OSCAR_JAVIER_AMORTEGUI.png')}}"/>
                            </div>
                            <h5>
                                Oscar Javier Amortegui
                            </h5>
                            <p class="subtitle">
                                Programador Web
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wow bounceInUp" data-wow-delay="1s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <div class="avatar">
                                <img alt="" class="img-responsive img-circle" src="{{asset('img/team/DEIVITH_BECERRA.png')}}"/>
                            </div>
                            <h5>
                                Deivith Becerra
                            </h5>
                            <p class="subtitle">
                                Ingeniero de Sistemas
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wow bounceInUp" data-wow-delay="1s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <div class="avatar">
                                <img alt="" class="img-responsive img-circle" src="{{asset('img/team/LUISA_SANMIGUEL.jpg')}}"/>
                            </div>
                            <h5>
                                Luisa Patricia Sanmiguel
                            </h5>
                            <p class="subtitle">
                                Ingeniera de Sistemas
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        </br>
    </div>
</section>
@endsection
