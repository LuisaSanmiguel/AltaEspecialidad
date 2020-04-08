<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Alta Especialidad SAS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="shortcut icon" href="{{ asset('img\favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img\favicon.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/6e800e0ea1aabedc7054eafa1d6ae693?family=FelixTitlingW00" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--alertas con toast-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    {{-- <link rel="stylesheet" type="text/css" href=""> --}}

    <link href="{{asset('/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!-- Styles -->
    <link href="{{asset('css/navStyle.css')}}" rel="stylesheet">
     <link href="{{asset('css/inicio.css')}}" rel="stylesheet">
      <link href="{{asset('css/team.css')}}" rel="stylesheet">
      <link href="{{asset('css/servicios.css')}}" rel="stylesheet">
      <link href="{{asset('css/virtual.css')}}" rel="stylesheet">


        <link href="{{asset('css/lightbox.css')}}" rel="stylesheet">
        <link href="{{asset('css/screen.css')}}" rel="stylesheet">
        {{-- <link href="{{asset('\css\foundation.css')}}" rel="stylesheet"> --}}



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/img/logoOrigin.png') }}" width="80px"/>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                         <li class="nav-item">
                                <a class="nav-link" href="/inicio">{{ __('Inicio') }}</a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{route('servicios')}}">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('Carreras') }}">Escuela Virtual</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="">Contactenos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('team')}}">Conózcanos</a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{route('clientes')}}">Clientes</a>
                            </li>

                           {{-- <li class="nav-item">
                                <a href="/inscripcion" data-toggle="modal" data-target="#form">Formacion Virtual</a></li>
                                --}}
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Ingresar al Aula</a>
                            </li> --}}
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">



                                    @if(Auth::user()->is_admin)
                                        <a class="dropdown-item" href="{{ route('administrar') }}">Administrar Plataforma</a>
                                        <a class="dropdown-item" href="">Mi Correo</a>
                                    @else
                                        <a class="dropdown-item" href="{{ route('homeCursos') }}">Mis Cursos</a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

 <div style="height:85px;"></div>
        <main class="py-4">

            @yield('content')
        </main>
    </div>

  <div class="row stickyBott">
        <div class="col-4">
            <span>©Alta Especialidad SAS.
            Todos los Derechos Reservados.
            </span>
         </div>
        <div class="col-4 "><span> </span></div>
            <div class="col-4 "><span>
            ¡Garantizamos tu seguridad jurídica…! </span>
            </div>

    </div>



</body>
@yield('css')

{{-- <script src="/js/bootstrap.min.js"></script>    --}}

<!-- Custom Theme JavaScript -->
<script src="/js/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<!--toast-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 @include('layouts/toastRequest')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="\js\jquery.smint.js" ></script>
<script type="text/javascript" src="\js\lightbox.js" ></script>




@yield('js')

{{-- <script type="text/javascript" src="\js\foundation.min.js" ></script> --}}
<script type="text/javascript">
        $(document).ready(function(){
            ciudades()


        })
        $('#departamento').on('click', function(){
          ciudades()
        })

      function ciudades(){
        let departamento = $('#departamento').val()
        $('#ciudad').empty()
        $.get('/ciudad/'+departamento, function(response, state){
                for(i=0; i<response.length; i++){
                console.log(response[i])
                $('#ciudad').append('<option value="'+response[i].id+'">'+response[i].nombre+'</option>')
            }
        })
      }
    </script>
</html>
