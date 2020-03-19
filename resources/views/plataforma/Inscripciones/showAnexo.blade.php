@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <center>
                    <div class="card-header">
                        Bienvenido a la Administración del Aula Virtual
                    </div>

  <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class="bounceInUp" data-wow-delay="0.2s">


      <form   action="{{ route('curso.update',$curso->id )}}" class="form" method="POST">
       @csrf
         <input name="_method" type="hidden" value="PUT">
       <table id="example" class="table table-bordered cell-border table-hover text-center" >

      <thead>
							<tr class="active">

                                <th colspan="5"class="text-center">Anexos del estudiante {{$curso->name}}
                                    <br> Curso {{$curso->curso}}</th>


                            </tr>
                            <tr >

								<th class="text-center" style="width:40px;">Item</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Descargar</th>


                            </tr>

						</thead>





                            <tbody>
                                @foreach ($anexos as $i => $anexo)


                                <tr>

                                    <input style="width:100%" class="form-control" id="curso_id" name="curso_id" type="hidden" value="{{$curso->id}}" required/>
                                    <td class="text-center">{{++$i}}</td>
                                    <td class="text-center"><label style="width:100%"  >{{$anexo->nombre}}</label>
                                </td>

                                    <td >
                                        <a href="{{Storage::url($anexo->ruta)}}" target="_blank" class="btn btn-sm btn-amarillo"><span class="fa fa-folder-open-o" aria-hidden="true"></span></a>
                                    </td>

                              </td>

                                </tr>


                            @endforeach
                            </tbody>

              </table>
                            <div class="row">

                                <div class="col-lg-12 ">
                                    <a href="{{route('administrar')}}" style="text-decoration:none;color:white;" >
                                         <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                         Volver
                                         </div>
                                        </a>
                                 </div>


                           </div>
 <br><br><br><br>
           </form>




                     </div>



   </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')

@stop
