@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                                        <strong>
                                            <p class="subtitle">
                                        CURSOS
                                            </p>
                                        </strong>
                                    </div>
                                </div>




                            <table id="example" class="table table-bordered cell-border table-hover" >

                                                <thead>
                                                    <tr class="active">
                                                        <th class="text-center">Escuela</th>
                                                        <th class="text-center">Nombre</th>
                                                        <th class="text-center">Estado</th>
                                                        <th class="text-center" colspan="3">Acciones</th>
                                                    </tr>
                                                </thead>

                                                    <tbody>
                                                        @foreach($cursos as $curso)
                                                        <tr>
                                                                <td>  {{ $curso->carrera->nombre}}</td>
                                                                <td>  {{ $curso->curso }}</td>

                                                                @if ( $curso->activo == 1 )
                                                                        <td>Activo</td>
                                                                    @else
                                                                        <td>Inactivo</td>
                                                                @endif
                                                                <td >
                                                                    <a href="{{route('curso.edit',$curso->id)}}" class="btn btn-sm btn-amarillo"><span class="fa fa-pencil" aria-hidden="true"></span></a></td>
                                                                    <td><a href="{{route('fichasCurso',$curso->id)}}" class="btn btn-sm btn-amarillo" title="Fichas"><span class="fa fa-object-group" aria-hidden="true"></span></a></td>
                                                                    <td >   <a href="#" class="btn btn-sm btn-amarillo"><span class="fa fa-close" aria-hidden="true"></span></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                    </table>

                             <div class="row">
                                <div class="col-lg-6 ">
                                   <a href="{{route('curso.create')}}" style="text-decoration:none;color:white;" >
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">

                                         Nuevo Curso

                                        </div></a>

                                </div>

                                <div class="col-lg-6 ">
                                    <a href="{{route('administrar')}}" style="text-decoration:none;color:white;" >
                                         <div class="programasDisp bounceInUp" data-wow-delay="0.2s">

                                         Volver

                                         </div></a>

                                 </div>
                           </div>
                           <br>







            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
   <script>


   </script>
@stop
