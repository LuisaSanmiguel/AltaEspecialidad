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
                              ESCUELAS
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}



       <table id="example" class="table table-bordered cell-border table-hover" >

      <thead>
          <tr class="active">
				<th class="text-center">Nombre</th>
                <th class="text-center">Costo</th>
                <th class="text-center">Estado</th>
                <th class="text-center" colspan="3">Acciones</th>
             </tr>
        </thead>

        <tbody>
            @foreach($carreras as $carrera)
                        <tr>

                        <td>  {{ $carrera->nombre }}</td>

                        @if($carrera->costo == null)<td> Sin definir </td>
                            @else <td> {{ $carrera->costo }} </td>
                        @endif

                        @if ( $carrera->activo == 1 )<td>Activo</td>
                        @else <td>Inactivo</td>
                        @endif

                        <td>
                        <a href="{{route('escuela.edit',$carrera->id)}}" class="btn btn-sm btn-amarillo" title="Editar"><span class="fa fa-pencil" aria-hidden="true"></span></a></td>
                        <td><a href="{{route('cursosEscuela',$carrera->id)}}" class="btn btn-sm btn-amarillo" title="Cursos"><span class="fa fa-book" aria-hidden="true"></span></a></td>
                          <td><a href="#" class="btn btn-sm btn-amarillo"><span class="fa fa-close" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                @endforeach
        </tbody>

              </table>
                            <div class="row">
                                <div class="col-lg-6 ">
                                   <a href="{{route('escuela.create')}}" style="text-decoration:none;color:white;" >
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                         Nueva Escuela
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-6 ">
                                    <a href="{{route('administrar')}}" style="text-decoration:none;color:white;" >
                                         <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                         Volver
                                         </div>
                                        </a>
                                 </div>
                           </div>

                     </div>


   </div>

                        <br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')






@stop
