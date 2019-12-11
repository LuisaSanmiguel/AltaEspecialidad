@extends('layouts.app')

@section('content')
<section class="home-section text-center" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-8">
                <br>
                    <br>
                        <h2>
                            ALGUNOS DE NUESTROS CLIENTES
                        </h2>
                       
                </br>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class="bounceInUp" data-wow-delay="0.2s">
                  
                    <div class="row">
                       
                       
                        <div class="col-sm-12 col-md-4 col-lg-offset-8">
                            
                                <div class="ContenidoProg bounceInUp" data-wow-delay="0.2s">
                                    <img src="{{asset('img\Clientes\ContraloriaArchipielago.png')}}" height="70px">
                                    </img>
                                    <p class="clienteTitulo" style="font-size:xx-small;">CONTRALORIA GENERAL DEL DEPARTAMENTO ARCHIPIELAGO DE SAN ANDRES, PROVIDENCIA Y SANTA CATALINA ISLAS

                                    </p>
                                </div>
                           
                        </div>


                        <div class="col-sm-12 col-md-4 col-lg-offset-8">
                          
                                <div class="ContenidoProg bounceInUp" data-wow-delay="0.2s">
                                    <img src="{{asset('img\Clientes\dptoArchipielago.jpg')}}" height="70px">
                                    </img>
                                    <p class="clienteTitulo" style="font-size:xx-small;">
                                       DEPARTAMENTO ARCHIPIELAGO DE SAN ANDRES, PROVIDENCIA Y SANTA CATALINA ISLAS 

                                    </p>
                                </div>
                         
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-offset-8">
                            <div class="ContenidoProg bounceInUp" data-wow-delay="0.2s">
                              <img src="{{asset('img\Clientes\dptoGdot.jpg')}}" height="70px">
                                    </img>
                                    <p class="clienteTitulo" style="font-size:xx-small;">
                                        DEPARTAMENTO DE CUNDINAMARCA - MUNICIPIO DE GIRARDOT 

                                    </p>
                            </div>
                        </div>



                    </div>

                        <div class="row">

                         <div class="col-sm-12 col-md-3 col-lg-offset-8">
                                  
                                </div>

                            <div class="col-sm-12 col-md-3 col-lg-offset-8">
                                    <div class="ContenidoProg bounceInUp" data-wow-delay="0.2s">
                                    <img src="{{asset('img\Clientes\dptoSanAndres.jpg')}}" height="70px">
                                            </img>
                                            <p class="clienteTitulo" style="font-size:xx-small;">
                                            DEPARTAMENTO DE SAN ANDRES - MUNICIPIO DE PROVIDENCIA ISLAS 


                                            </p>
                                    </div>
                                </div>





                                <div class="col-sm-12 col-md-3 col-lg-offset-8">
                                    <div class="ContenidoProg bounceInUp" data-wow-delay="0.2s">
                                    <img src="{{asset('img\Clientes\ConcejoIslas.jpg')}}" height="70px">
                                            </img>
                                            <p class="clienteTitulo" style="font-size:xx-small;">
                                                CONCEJO MUNICIPAL DE PROVIDENCIA Y  SANTA CATALINA ISLAS 


                                            </p>
                                    </div>
                                </div>

                                 <div class="col-sm-12 col-md-3 col-lg-offset-8">
                                   
                                </div>


                                
                        </div>

<br><br>

                </div>
            </div>
        </div>


    </div>
</section>
@endsection
