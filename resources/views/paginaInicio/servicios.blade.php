@extends('layouts.app')

@section('content')
<section class="home-section text-center" id="about">
    <div class="container">


      <div class="row">
                 <div class="col-lg-12 col-lg-offset-8">

                        <ul class="nav nav-tabs" id="myTab">
                            <li class=" tabs active"><a class="tituloTabs" data-toggle="tab" href="#home">Servicios</a></li>
                            <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="#menu1">Productos</a></li>
                      
                        </ul>

                </div>


 <div class="col-lg-12 col-lg-offset-8">
                        <div class="tab-content">

                                            <div id="home" class="tab-pane fade in active">

                                            

                                                        <div class="row">
                                                            <div class="col-lg-4 col-lg-offset-8">
                                                                <br>
                                                                    <br>
                                                                        <h2>
                                                                            SERVICIOS
                                                                        </h2>
                                                                
                                                            </div>
                                                        </div>



                                                        <div class="row">
                                                                <div class="col-lg-12 ">
                                                                    <br>
                                                                
                                                                        <h4 style="text-align:left;"> NUESTRAS LÍNEAS DE TRABAJO SON: </h4>
                                                                </div>
                                                        </div>


                                                        <div class="col-md-12 ">
                                                                    <div style="text-align:left;" class="wow bounceInUp" data-wow-delay="0.2s">
      
         
                                                                                        <li>                                                          
                                                                            Asesoría jurídica, administrativa y financiera a entidades del Estado del orden Nacional y territorial. 
                                                                            </li>
                                                                            
                                                                <li>

                                                                Asesoría Contable y administración de recursos financieros a entidades públicas y privadas y personas naturales. 
                                                                </li>

                                                                <li>
                                                                Elaboración y desarrollo de software a la medida de las necesidades de las entidades del Estado especialmente, guardando la línea jurídica que nos caracteriza.  
                                                                </li>

                                                                <li>
                                                                Capacitación a funcionarios, Gerentes, Concejales, Alcaldes y Gobernadores de las entidades territoriales y veedurías, auditorias, juntas de acción y comunal en general, en gestión y asuntos públicos.  
                                                                </li>
                                                                <li>
                                                                Bufete de abogados para atender diferentes demandas tanto a personas naturales como jurídicas.  
                                                                </li>
                                                                                                                                        
                                                                        
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
                            <a href="{{route('desarrollo') }}">
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
                            <a href="{{route('Carreras') }}">
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
                
                    <div id="menu1" class="tab-pane">

                                            
                                                        <div class="row">
                                                                <div class="col-lg-12 ">
                                                                    <br>
                                                                     <br>
                                                                        <h2 > Productos</h2>
                                                                </div>
                                                        </div>



   <div class="col-md-12 col-lg-offset-8">
                <div class="bounceInUp" data-wow-delay="0.2s">
                    <div class="row">


 <ul class="nav nav-tabs" id="myTab">
                           
                           
                      
                     <li class=" tabs active"><a class="tituloTabs" data-toggle="tab" href="#SIEX">SIEX</a>
                          </li>

                     <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="#ERPSIEX">ERPSIEX</a>
                         </li>

                         <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="#Sconsulta">SIEX Consulta</a>
                         </li>

                         <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="#Sweb">PÁGINAS WEB</a>
                         </li>

                       

                </ul>
                         </div>



                         
                    <div class="col-lg-12 col-lg-offset-8">
                        <div class="tab-content">

                                            <div id="SIEX" class="tab-pane fade in active">

                                                   
                                                            
                                                       

                                                        <div class="col-md-12 col-lg-offset-8"> 
                                                        
                                                        <div class="row">
                                                                <div class="col-lg-12 ">
                                                                    <br>
                                                                     <br>
                                                                        <h2 > SIEX</h2>
                                                                </div>
                                                        </div>
                                                                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                                                                            <p style="text-align:justify;">
                                                                            
                                                                                                                                                                
                                                                                    SIEX es una plataforma tecnológica que enlaza administra y lleva de manera digital los expedientes de diferentes entidades para el control y seguimiento de los requerimientos administrativos y judiciales que la administración pública adelanta contra sus gobernados e igualmente administra y controla los expedientes que se siguen en su contra. 
                                                                                    <br><br>
                                                                                    SIEX permite llevar los expedientes digitalmente con usuario y contraseña para cada uno de los demandados, permitiendo la consulta en forma permanente y contralando su impulso procesal.  
                                                                                    


                                                                                    </p>
                                                                        </div>
                                                            </div>

                                                                <div class="col-sm-12 col-lg-offset-8">
                                                        <a class="tituloSiex" href="http://siex.com.co/">
                                                            <div class="ContenidoProg bounceInUp" data-wow-delay="0.2s">
                                                                <img src="{{asset('img\logoBlancoSiex.png')}}" width="150px">
                                                                </img>
                                                                <p class="">
                                                                    SIEX - SISTEMA INTEGRAL DE EXPEDIENTES VIRTUALES
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                                     


                                 </div>





                                    <div id="ERPSIEX" class="tab-pane">

                                      
                                                                                


                                                        <div class="col-md-12 col-lg-offset-8">


                                                        
                                                        <div class="row">
                                                                <div class="col-lg-12 ">
                                                                    <br>
                                                                     <br>
                                                                        <h2 > ERP - SIEX</h2>
                                                                </div>
                                                        </div>
                                                                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                                                                            <p style="text-align:justify;">
                                                                            
                                                                                                                                                                
                                                                                Este ERP es un sistema integra para la administración pública, que administra desde los recursos financieros, contratación, planeación y jurídica de las entidades del estado.   
 
                                                                         <BR> 
                                   <img class="SImg" width="90%" src="{{asset('img\productos\ERP.jpg')}}">
                                                    </img><BR>
                                                                        El término ERP se refiere a Enterprise Resource Planning, que significa “sistema de planificación de recursos empresariales”. Estos programas se hacen cargo de distintas operaciones internas de una empresa, desde producción a distribución o incluso recursos humanos. 


                                                                                    </p>
                                                                        </div>
                                                            </div>


                                                              <div class="col-sm-12 col-lg-offset-8">
                                            <a class="tituloSiex" href="https://siex-providenciaislas.com.co/">
                                                <div class="ContenidoProg bounceInUp" data-wow-delay="0.2s">
                                                <img src="{{asset('img\siexERP.png')}}" width="170px">
                                                    </img>
                                                    <p class="">
                                                        SIEX - ERP para Entidades Públicas
                                                    </p>
                                                </div>
                                            </a>
                                        </div>


                                 </div>



                                  <div id="Sconsulta" class="tab-pane">

                                        
                                                                                


                                                        <div class="col-md-12 col-lg-offset-8">
                                                         
                                                        <div class="row">
                                                                <div class="col-lg-12 ">
                                                                    <br>
                                                                     <br>
                                                                        <h2 > SIEX - CONSULTA</h2>
                                                                </div>
                                                        </div>
                                                                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                                                                            <p style="text-align:justify;">
                                                                            
                                                                                                                                                                
                                                                            Esta plataforma permite a cualquier ciudadano consultar todos sus expedientes abiertos por las administraciones públicas territoriales que posean convenio con 
                                                                                    </p>

                                                                                                                 <BR> 
                                                                               <img class="SImg" width="90%" src="{{asset('img\productos\CONSULTA.png')}}"></img>
                                                                               
                                                                               <BR>
                                                                        </div>
                                                            </div>


                                 </div>



                                  <div id="Sweb" class="tab-pane">
                                       

                                                                                


                                                        <div class="col-md-12 col-lg-offset-8">


                                                        <div class="row">
                                                                <div class="col-lg-12 ">
                                                                    <br>
                                                                     <br>
                                                                        <h2 > Páginas WEB</h2>
                                                                </div>
                                                        </div>

                                                                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                                                                            <p style="text-align:justify;">
                                                                            
                                                                                                                                                                
                                                                               Elaboramos páginas web acorde con las medidas de nuestros clientes. Aquí algunos de nuestros clientes web.

                                                                               <br>
                                                                            <a href="http://www.posadajasminaplace.com ">   www.posadajasminaplace.com </a>
                                                                                        <br>
                                                                                      <a href="http://www.siex-providenciaislas.com.co">  www.siex-providenciaislas.com.co  </a>
 


                                                                                    </p>
                                                                        </div>
                                                            </div>

                                                             <div class="col-sm-12 col-md-4 col-lg-offset-8">
                                                             <a href="http://www.siex-providenciaislas.com.co">
                                                                    <div class="ContenidoProg bounceInUp" data-wow-delay="0.2s">
                                                                    

                                                                        
                                                                            <img src="{{asset('img\masporlasislas.png')}}" width="150px">
                                                                            </img>
                                                                            <p class="">
                                                                                SIEX - Providencia Isla
                                                                            </p>
                                                                    </div>
                                                                    </a>
                                                                </div>


                                 </div>
                          </div>
                
                
                 </div>


   </div>  
            
            
            
     
   
  
        <div>
   
   
   
    </div>
</section>
<br>
</br>
@endsection
