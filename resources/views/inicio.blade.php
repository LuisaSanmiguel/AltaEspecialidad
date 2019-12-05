@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row FilaInicial">
        <div class="col-lg-8 col-md-8 col-sm-12 ">
            <div class="col-11 intro">
                <p class="msgEmpresa">
                    Contamos con un grupo de empresas 
             especializadas que brindan servicios de alta calidad en:
                </p>
                <div class="row servicios">
                    <div class="col-sm-12 col-md-1">
                        <div class="cajaicono">
                            <i aria-hidden="true" class="fa fa-balance-scale icono">
                            </i>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-11">
                        <p class="msgServicio">
                            Asesoría Jurídica y Contable especializada
                        </p>
                    </div>
                </div>
                <div class="row servicios">
                    <div class="col-sm-12 col-md-1">
                        <div class="cajaicono">
                            <i aria-hidden="true" class="fa fa-cogs icono">
                            </i>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-11">
                        <p class="msgServicio">
                            Desarrollo Tecnológico para entidades públicas
                        </p>
                    </div>
                </div>
                <div class="row servicios">
                    <div class="col-sm-12 col-md-1">
                        <div class="cajaicono">
                            <i aria-hidden="true" class="fa fa-laptop icono">
                            </i>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-11">
                        <p class="msgServicio">
                            Formación Virtual
                        </p>
                    </div>
                </div>
                <br>
                    <br>
                        <p class="msgServicio">
                            ÚNETE A NOSOTROS Y EMPIEZA EL CAMINO HACIA EL ÉXITO!
                        </p>
                    </br>
                </br>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 bannerDer">
            <div class="row">
                <div class="ubicacion col-sm-12">
                    <p class="tituloDer">
                        Altas Especialidad SAS
                    </p>
                    <p class="txtDireccion">
                        UBICACION OFICINA
                        <br>
                            Sede Medellín Carrera 37 A No. 29 – 56 Intr. 2207
                            <br>
                                Barrio el Poblado Medellín
                                <br>
                                    Sede Girardot, Cundinamarca - Carrera 12 # 35-61
                                    <br>
                                        Telefonos: 320 885 80 86 – 314 483 64 23
                                        <br>
                                            Email Info@altaespecialidad.co
                                            <br/>
                                        </br>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6 maps">
                    <iframe height="180" src="https://www.google.com/maps/d/embed?mid=1uS8CTBFkwVcFG2m_Ad4f_XDUz2XO8YDY" width="200">
                    </iframe>
                </div>
                <div class="col-sm-12 col-lg-6 maps">
                    <iframe height="180" src="https://www.google.com/maps/d/embed?mid=1h6K2jImgm-Ob_UXS9SozKfczV254pZ9I" width="200">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
