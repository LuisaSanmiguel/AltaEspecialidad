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
                               INSCRITO A CURSOS
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}





              @foreach($cursos as $curso)


                            <div class="row">
                                <div class="col-lg-12 ">
                                    <a href="{{route("contenido", $curso->id) }}">
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                            <p class="tituloProgramaDisp">
                                             {{ $curso->nombre }}
                                             en
                                            {{ $curso->curso }}

                                            </p>
                                        </div>
                                    </a>
                                </div>
                           </div>

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

<br>
  <div class="row">
    <div class="col-md-12 col-lg-offset-8">
        <div class="wow bounceInUp" data-wow-delay="0.2s">

            <div class="row">
                <div class="col-sm-12 ">
                    <strong>
                        <p class="subtitle">
                      CURSOS A LOS QUE PUEDE INSCRIBIRSE
                        </p>
                    </strong>
                </div>
            </div>
            {{-- primer programa --}}


        @foreach($noinscritos as $noinscrito)


        <div class="row">
            <div class="col-lg-9 ">
                <a href="#">
                    <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                        <p class="tituloProgramaDisp">
                         {{ $noinscrito->nombre }}
                         en
                        {{ $noinscrito->curso }}

                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 ">
                <form action="{{ route('inscripcion.save') }}" class="form" enctype="multipart/form-data" method="POST">
                    @csrf


                    <input  type="submit" value="Inscribirse" class="programasDisp bounceInUp text-white" data-wow-delay="0.2s">




                        <input type="hidden" name="cursos" value="{{$noinscrito->id}}">

                    </div>
                 </form>
            </div>
       </div>

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
