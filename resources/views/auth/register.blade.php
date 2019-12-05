@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h4>{{ __('Registro para el curso Nuevas Estrategia de Administración de Pública') }}</h4>
                    </center>
                </div>
                <div class="card-body">
                    <form action="{{ route('inscripcion.save') }}" class="form" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="cursos" value="1">
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
@endsection
