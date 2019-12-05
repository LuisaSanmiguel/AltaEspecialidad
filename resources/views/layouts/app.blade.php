<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/6e800e0ea1aabedc7054eafa1d6ae693?family=FelixTitlingW00" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
   

    <link href="\assets\font-awesome\css\font-awesome.css" rel="stylesheet">
  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!-- Styles -->
    <link href="\css\navStyle.css" rel="stylesheet">
     <link href="\css\inicio.css" rel="stylesheet">
      <link href="\css\team.css" rel="stylesheet">
      <link href="\css\servicios.css" rel="stylesheet">
      <link href="\css\virtual.css" rel="stylesheet">
        <!-- Bootstrap Core CSS -->
    {{-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> --}}

    <!-- Fonts -->
   
    <link href="css/animate.css" rel="stylesheet" /> --}}
  
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky">
            <div class="container">
               
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/img/logoRojo2.png') }}" width="150px"/>
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
                                <a class="nav-link" href="/">{{ __('Inicio') }}</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="/team">Quiénes Somos</a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/servicios">Servicios</a>
                            </li>

                           {{-- <li class="nav-item">
                                <a href="/inscripcion" data-toggle="modal" data-target="#form">Formacion Virtual</a></li>
                                --}}
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingreso') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
   <div class="col-4"><span>©Altas Especialidad SAS. 
    Todos los Derechos Reservados.
    </span></div>
    <div class="col-4 "><span> </span></div>
    <div class="col-4 "><span>
    ¡Garantizamos tu seguridad jurídica…! </span></div>
    
    </div>
</body>










        
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  

</html>
