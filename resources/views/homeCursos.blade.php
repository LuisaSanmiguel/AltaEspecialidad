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


                    
  <div class="row">
            <div class="col-md-12 col-lg-offset-8">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                   
                    <div class="row">
                        <div class="col-sm-12 ">
                            <strong>
                                <p class="subtitle">
                               INSCRITO A  CURSOS
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}
   
      

       
      
  @foreach($inscripcions as $inscripcion)
      

         @foreach($cursoInscs as $cursoInsc)

       
             @if($cursoInsc->inscripcion_id == $inscripcion->id)
            

              @foreach($cursos as $curso)
                @if($cursoInsc->curso_id == $curso->id)
                   
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <a href="{{route("detalleCurso", $curso->id) }}">
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                            <p class="tituloProgramaDisp">
                                            {{ $curso->curso }}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                           </div>
                    @else
                    @endif
                @endforeach
             @else
             @endif


            @endforeach 
    @endforeach
                   {{-- @foreach($cursos as $curso) --}}
                    {{-- @if($cursoInsc->curso_id == $curso->id) --}}
                   
                     

                        {{-- @else
                        @endif --}}

                        
                   {{-- @else
                   @endif --}}
                   
              {{-- @endforeach --}}
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
