@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Recuperar Contraseña</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label>Ingresa tu correo electrónico al cual enviaremos un enlace para recuperar el acceso a tu cuenta.</label>
                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electronico" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="mt-3">
                            <div class="btn-group col-sm">
                                <button type="button" onclick="location.href='{{ route('login') }}'" class="btn btn-xs btn-secondary font-weight-medium auth-form-btn" title="Regresar al login"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Recuperar contraseña</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
