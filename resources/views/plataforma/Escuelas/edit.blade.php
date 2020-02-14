@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                    <div class="card-header">
                        Bienvenido a la Administración del Aula Virtual
                    </div>


                    
  <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                   
                    <div class="row">
                        <div class="col-sm-12 ">
                            <strong>
                                <p class="subtitle">
                            NUEVA ESCUELA
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}
   
      <form   action="{{ route('escuela.store') }}" class="form" method="POST">
     @csrf
       <table id="example" class="table table-bordered cell-border table-hover" >
      
      <thead>
							<tr class="active">
                                
								<th colspan="2"class="text-center">Ingrese los datos de la Nueva Escuela</th>
                              
							
							</tr>
						</thead>


                            </tr>


                            <tbody>
                    <tr>
                           	<td class="text-center">Nombre</td> <td class="text-center"><input style="width:100%" id="nombre" name="nombre" type="text" placeholder="Nombre de Escuela" required/></td>
                            </tr>
                           <tr>
                           <td class="text-center">Costo</td> <td class="text-center"><input style="width:100%" type="text" id="costo" name="costo" placeholder="Costo de Escuela"requiered /></td>
                            </tr>


                            </tbody>

              </table>      
                            <div class="row">
                                <div class="col-lg-12 ">
                                   
                                        <button type="submit" class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                            <p class="tituloProgramaDisp">
                                          Crear Escuela
                                            </p>
                                        </button>
                                
                                </div>
                           </div>
                
           </form>
    

   
                
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
