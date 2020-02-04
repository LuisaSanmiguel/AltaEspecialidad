@extends('layouts.app')

@section('content')
@section('css')
  
@stop
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                    <div class="card-header">
                        Bienvenidos al Aula Virtual

                        
                           </div>
                      </div>

                       @foreach($cursos as $curso)
                </center>
                <div class="card-body" >
                      <div class="row">
                            <div class="col-lg-12 col-lg-offset-8">

                                    <ul class="nav nav-tabs" id="myTab">
                              
                                        <li class=" tabs active"><a class="tituloTabs" data-toggle="tab" href="#home">{{strtoupper($curso->nombre)}}</a></li>
                                  @if($curso->curso_id==1)
                                        <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="#menu1">Capacitaciones</a></li>
                                @endif
                             @if($curso->aprobo==1)
                                 <li class="tabs"><a class="tituloTabs" data-toggle="tab" href="#certificacion">Certificación</a></li>
                                   @endif
                                    </ul>

                            </div>
                        </div>

             <div class="tab-content">

                <div id="home" class="tab-pane fade in active">

                    <div class="row" >
                        <ul class="list-group" style="width:100%;">
                          <li class="list-group-item"><b>ENTIDAD:</b> MUNICIPIO DE PROVIDENCIA Y SANTA CATALINA ISLAS</li>
                          <li class="list-group-item"><b>NOMBRE:</b> {{Auth::user()->name}}</li>
                          <li class="list-group-item"><b>DOCUMENTO:</b> {{Auth::user()->inscripcion->typeDoc}} - {{Auth::user()->inscripcion->numDc}}</li>
                          <li class="list-group-item"><b>CODIGO:</b> ({{Auth::user()->id}})</li>
                      
                          <li class="list-group-item"><b>{{strtoupper($curso->nombre)}}</b> {{ strtoupper($curso->curso) }}</li>
                          <li class="list-group-item"><b>FECHA DE INICIO: </b>{{date('d-m-Y', strtotime($curso->fecha_ini))}}</li>
                          @endforeach
                        </ul>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>DESCARGA DE CARTILLAS</h4>
                        </div>
                        <br><br>
                        <div class="col-md-12">

                         @if($curso->curso_id==1)
                            <a href="{{asset('file/cartillas/cartilla_comunicacion_asertiva.pdf')}}" target="_blank">Cartilla comunicación asertiva</a><br>
                            <a href="{{asset('file/cartillas/Cartilla_trabajo_en_equipo.pdf')}}" target="_blank">Cartilla trabajo en equipo</a>
                        @else
                        <p>Aún no hay material disponible</p>
                         @endif
                        </div>

                        <br><br><br><br>


                        </div>
                 </div>

              
                <div id="menu1" class="tab-pane">
                
{{-- 
                  <a class="example-image-link" href="{{asset('\img\capacitacion\Capacitacion (1).mp4')}}" data-lightbox="example-set" data-title="Primer Piso">
                <video class="example-image" src="{{asset('\img\capacitacion\Capacitacion (1).mp4')}}" alt=""></video></a> --}}
                 
                <a class="example-image-link" href="{{asset('/img/capacitacion/Capacitacion(1).jpeg')}}" data-lightbox="example-set" data-title="Capacitación Alta Especialidad">
                <img class="example-image" src="{{asset('/img/capacitacion/Capacitacion(1).jpeg')}}" alt="" /></a>

                <a class="example-image-link" href="{{asset('/img/capacitacion/Capacitacion(2).jpeg')}}" data-lightbox="example-set" data-title="Capacitación Alta Especialidad">
                <img class="example-image" src="{{asset('/img/capacitacion/Capacitacion(2).jpeg')}}" alt="" /></a>

 
                <a class="example-image-link" href="{{asset('/img/capacitacion/Capacitacion(3).jpeg')}}" data-lightbox="example-set" data-title="Capacitación Alta Especialidad">
                <img class="example-image" src="{{asset('/img/capacitacion/Capacitacion(3).jpeg')}}" alt="" /></a>

                <a class="example-image-link" href="{{asset('/img/capacitacion/Capacitacion(4).jpeg')}}" data-lightbox="example-set" data-title="Capacitación Alta Especialidad">
                <img class="example-image" src="{{asset('/img/capacitacion/Capacitacion(4).jpeg')}}" alt="" /></a>

                <a class="example-image-link" href="{{asset('/img/capacitacion/Capacitacion(5).jpeg')}}" data-lightbox="example-set" data-title="Capacitación Alta Especialidad">
                <img class="example-image" src="{{asset('/img/capacitacion/Capacitacion(5).jpeg')}}" alt="" /></a>


                <a class="example-image-link" href="{{asset('/img/capacitacion/Capacitacion(7).jpeg')}}" data-lightbox="example-set" data-title="Capacitación Alta Especialidad">
                <img class="example-image" src="{{asset('/img/capacitacion/Capacitacion(7).jpeg')}}" alt="" /></a>

                <a class="example-image-link" href="{{asset('/img/capacitacion/Capacitacion(6).jpeg')}}" data-lightbox="example-set" data-title="Capacitación Alta Especialidad">
                <img class="example-image" src="{{asset('/img/capacitacion/Capacitacion(6).jpeg')}}" alt="" /></a>

             

                <a class="example-image-link" href="{{asset('/img/capacitacion/Capacitacion(8).jpeg')}}" data-lightbox="example-set" data-title="Capacitación Alta Especialidad">
                <img class="example-image" src="{{asset('/img/capacitacion/Capacitacion(8).jpeg')}}" alt="" /></a>


                       </div>



         <div id="certificacion" class="tab-pane">
                <iframe width="100%" height="400" 

                src="{{asset('/file/diplomas/'.$curso->curso_id."/".$curso->numDc.'.pdf')}}"  frameborder="0"></iframe>


                       </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
   <script>
      $(document).foundation();
    </script>
@stop