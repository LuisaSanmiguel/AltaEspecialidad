@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                    <div class="card-header">
                        Bienvenidos al Aula Virtual
                    </div>
                </center>
                <div class="card-body">
                    <div class="row">
                        <ul class="list-group">
                          <li class="list-group-item"><b>ENTIDAD:</b> MUNICIPIO DE PROVIDENCIA Y SANTA CATALINA ISLAS</li>
                          <li class="list-group-item"><b>NOMBRE:</b> {{Auth::user()->name}}</li>
                          <li class="list-group-item"><b>DOCUMENTO:</b> {{Auth::user()->inscripcion->typeDoc}} - {{Auth::user()->inscripcion->numDc}}</li>
                          <li class="list-group-item"><b>CODIGO:</b> ({{Auth::user()->id}})</li>
                          <li class="list-group-item"><b>DIPLOMADO:</b> NUEVAS ESTRATEGIAS DE ADMINISTRACIÓN PUBLICA CON ENFOQUE EN RECURSO HUMANO</li>
                          <li class="list-group-item"><b>FECHA DE INICIO:</b> 2 Diciembre de 2019</li>
                        </ul>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>DESCARGA DE CARTILLAS</h4>
                        </div>
                        <br><br>
                        <div class="col-md-12">
                            <a href="{{asset('file/cartillas/cartilla_comunicacion_asertiva.pdf')}}" target="_blank">Cartilla comunicación asertiva</a><br>
                            <a href="{{asset('file/cartillas/Cartilla_trabajo_en_equipo.pdf')}}" target="_blank">Cartilla trabajo en equipo</a>
                        </div>
                        <br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
