@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> <div class="col-lg-12 col-lg-offset-8">

                        <ul class="nav nav-tabs" id="myTab">
                            <li class=" tabs active"><a class="tituloTabs" data-toggle="tab" href="#inscribir">Inscribirse</a></li>
                            <li class=" tabs active"><a class="tituloTabs" data-toggle="tab" href="#registrar">Registrarse</a></li>


                        </ul>

                </div>
                <div class="tab-content">
                    <div id="inscribir" class="tab-pane fade in active">
                        <div class="card-header">
                            <div class="card-header">
                                <center>
                                @foreach($cursos as $curso)
                                    <h4>Inscribirse en el curso {{$curso->curso}} </h4>
                                    @endforeach
                                </center>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <input type="hidden" name="cursos" value="{{$curso->id}}">
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Eléctronico') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Recuérdame') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Ingresar') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Olvido su contraseña?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="registrar" class="tab-pane ">
                <div class="card-header">
                    <center>
                    @foreach($cursos as $curso)
                        <h4>Registro para el curso {{$curso->curso}} </h4>
                    </center>
                </div>
                <div class="card-body">

                    <form action="{{ route('inscripcion.save') }}" class="form" enctype="multipart/form-data" method="POST">
                        @csrf


                          <input type="hidden" name="cursos" value="{{$curso->id}}">
                          @endforeach
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="tipo">
                                {{ __('tipo') }}
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" name="typeDoc">
                                    <option>
                                        CC
                                    </option>
                                    <option>
                                        TI
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="numDc">
                                {{ __('Numero de Identidad') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="identidad" autofocus="" class="form-control @error('numDc') is-invalid @enderror" name="numDc" required="" type="text" value="{{ old('numDc') }}">
                                    @error('numDc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="name">
                                {{ __('Nombre') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="Nombre completo" autofocus="" class="form-control @error('name') is-invalid @enderror" name="name" required="" type="text" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="email">
                                {{ __('Correo Electronico') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="Correo electronico" autofocus="" class="form-control @error('email') is-invalid @enderror" name="email" required="" type="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="direccion">
                                {{ __('Dirección') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="Dirección" autofocus="" class="form-control @error('direccion') is-invalid @enderror" name="direccion" required="" type="text" value="{{ old('direccion') }}">
                                    @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="telefono">
                                {{ __('Telefono') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="Telefono" autofocus="" class="form-control @error('telefono') is-invalid @enderror" name="telefono" required="" type="text" value="{{ old('telefono') }}">
                                    @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="departamento">
                                {{ __('Selecciona un Departamento') }}
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="departamento">
                                    @foreach($departamentos as $departamento)
                                    <option value="{{$departamento->id}}">
                                        {{$departamento->nombre}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="municipio">
                                {{ __('Selecciona un Municipio') }}
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="ciudad" name="ciudad" placeholder="seleccione un departamento">
                                        </select>

                                          {{-- <input type="text" name="ciudad" value="1023"> --}}
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="password">
                                {{ __('Contraseña') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="Contraseña" autofocus="" class="form-control @error('password') is-invalid @enderror" name="password" required="" type="password" value="{{ old('password') }}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="submit" value="Guardar" class="btn btn-primary float-right">
                        </div>
                    </form>
                    <br><br>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
