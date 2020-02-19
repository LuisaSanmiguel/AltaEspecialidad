@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center>
                    <div class="card-header">
                        Bienvenidos al Aula Virtual
                    </div>



            <div class="row">
                        <div class="col-md-12 col-lg-offset-8">
                            <div class="wow bounceInUp" data-wow-delay="0.2s">

                                <div class="row">
                                    <div class="col-sm-12 ">

                                            <p class="subtitle">
                                        <strong> Fichas del Curso: {{$curso->curso}}</strong>
                                            </p>

                                    </div>
                                </div>




                            <table id="example" class="table table-responsive table-bordered cell-border table-hover" >

                                                <thead>
                                                    <tr class="active">
                                                        <th class="text-center">id</th>
                                                        <th class="text-center">Codigo</th>
                                                        {{-- <th class="text-center">Curso</th> --}}
                                                        <th class="text-center">Modalidad</th>
                                                        <th class="text-center">Oferta</th>
                                                        <th class="text-center">Cuenta Bancaria</th>
                                                        <th class="text-center">Fecha Inicio</th>
                                                        <th class="text-center">Fecha Final</th>
                                                        <th class="text-center">Cupo</th>

                                                        <th class="text-center">Estado</th>

                                                        <th class="text-center" colspan="2">Acciones</th>
                                                    </tr>
                                                </thead>

                                                    <tbody>
                                                        @foreach($fichas as $ficha)
                                                        <tr>
                                                                <td>  {{ $ficha->id}}</td>
                                                                <td>  {{ $ficha->codigo }}</td>
                                                                {{-- <td>  {{ $ficha->curso->curso}}</td> --}}
                                                                 <td>  {{ $ficha->modalidad }}</td>
                                                                  <td>  {{ $ficha->oferta }}</td>
                                                                   <td>  {{ $ficha->cuenta }}</td>
                                                                    <td>  {{ $ficha->fecha_ini }}</td>
                                                                     <td>  {{ $ficha->fecha_fin}}</td>
                                                                     <td>  {{ $ficha->cupo}}</td>


                                                                        <td>{{$ficha->estado}}</td>

                                                                <td >
                                                                    <a href="{{route('ficha.edit', $ficha->id)}}" class="btn btn-sm btn-amarillo"><span class="fa fa-pencil" aria-hidden="true"></span></a></td>
                                                                  <td >   <a href="#" class="btn btn-sm btn-amarillo"><span class="fa fa-close" aria-hidden="true"></span></a>
                                                                </td>


                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                    </table>

                             <div class="row">
                                <div class="col-lg-6 ">
                                   <a href="{{route('ficha.create')}}" style="text-decoration:none;color:white;" >
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">

                                         Nueva Ficha

                                        </div></a>

                                </div>
                                <div class="col-lg-6 ">
                                    <a href="{{route('curso.index')}}" style="text-decoration:none;color:white;" >
                                         <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                         Volver
                                         </div>
                                        </a>
                                 </div>
                           </div>







            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
   <script>


   </script>
@stop
