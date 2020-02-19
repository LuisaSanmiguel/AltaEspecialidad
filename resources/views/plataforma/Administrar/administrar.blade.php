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
                               Administrar Plataforma
                                </p>
                            </strong>
                        </div>
                    </div>
                    {{-- primer programa --}}





                            <div class="row">
                                <div class="col-lg-12 ">
                                    <a href="{{route('escuela') }}">
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                            <p class="tituloProgramaDisp">
                                             {{ __('ESCUELAS') }}

                                            </p>
                                        </div>
                                    </a>
                                </div>
                           </div>


                          <div class="row">

                            <div class="col-lg-12 ">
                                    <a href="{{route('curso.index') }}">
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">

                                           <p class="tituloProgramaDisp">
                                            {{ __('CURSOS ') }}
                                             </p>
                                        </div>
                                    </a>
                                </div>
                           </div>

                                   <div class="row">
                                <div class="col-lg-12 ">
                                    <a href="{{route('usuarios') }}">
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                            <p class="tituloProgramaDisp">
                                             {{ __('USUARIOS') }}

                                            </p>
                                        </div>
                                    </a>
                                </div>
                           </div>

                  <div class="row">
                                <div class="col-lg-12 ">
                                    <a href="{{route('inscripciones') }}">
                                        <div class="programasDisp bounceInUp" data-wow-delay="0.2s">
                                            <p class="tituloProgramaDisp">
                                             {{ __('INSCRIPCIONES') }}

                                            </p>
                                        </div>
                                    </a>
                                </div>
                           </div>

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
