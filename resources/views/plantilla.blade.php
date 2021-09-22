<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf8_decode()">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   

   <link rel="stylesheet" href="{{asset('css/bootstrap4css/bootstrap.min.css')}}">

   <link rel="stylesheet" href="{{asset('css/estilo3.css')}}">
   <link rel="stylesheet" href="{{asset('css/estilo4.css')}}">
   <link rel="stylesheet" href="{{asset('css/custom.css')}}">

   <link rel="stylesheet" href="{{asset('css/jquery-confirmv3/jquery-confirm.min.css')}}">
   
   <link rel="stylesheet" href="{{asset('alertifyjs/css/alertify.min.css')}}">
   <link rel="stylesheet" href="{{asset('alertifyjs/css/themes/default.min.css')}}">
   
   
   <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
   <title>@yield('titulo', 'Genetica')</title>
   
   <!--css para las vistas-->
   @yield('css')


</head>

<header>
    <section class="wrapper">
        <nav class="navbar navbar-expand flex-column flex-md-row navbar-light bg-light" style="margin-bottom: 0px; padding-bottom: 1px; padding-top: 1px;"> 
            <div class="container-fluid">
                
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i> 
                        <span>Menu</span>
                    </button>

                    {{-- <button type="button" id="sidebarCollapse" class="btn btn-danger" onclick="{{route('logout')}}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Salir</span>
                    </button> --}}
                    
                    
                        <h2>Bienvanido {{session()->get('nombre_usuario') ?? 'Invitado'}}</h2>
                
                    
                
            </div>

        </nav>
    </section>
  </header>




<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-angle-double-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>Quimica Genetica</h3>
            </div>
    
            <ul class="list-unstyled components">
                {{-- <p>Genetica ADN</p> --}}
                {{-- <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">ADN</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li> --}}
                
                <li>
                    {{-- <a href="#">About</a> --}}
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"><i style="color:rgb(24, 24, 231);" class="fas fa-dna"></i>&nbsp&nbspMuestras ADN</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="/muestras">TODOS</a>
                        </li>
                        <li>
                            <a href="/kit">POR KIT</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('logout')}}">Salir</a>
                </li>
                {{-- <li>
                    <a href="#">Contact</a>
                </li> --}}
            </ul>
        </nav>

        <div id="content">
            
            {{-- <h2>Collapsible Sidebar Using Bootstrap 4</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="line"></div>
            <h2>Lorem Ipsum Dolor</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="line"></div>
            <h2>Lorem Ipsum Dolor</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="line"></div>
            <h3>Lorem Ipsum Dolor</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
            
            <main style="margin-bottom: 0px; margin-top: 30px;">
                @yield('contenido')
             </main>

        </div>
            <!-- Dark Overlay element -->
                <div class="overlay"></div>

    </div>

   

<!--JS-->
<script src="{{asset('js/jquery/jquery-3.3.1.min.js')}}"></script>	 
<script src="{{asset('js/popper/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap4js/bootstrap.min.js')}}"></script>
<!-- Plugins que solo se ocupen en paginas especiales -->	 	
@yield("scriptsPlugins")
<script src="{{asset('js/pages/scripts/admin/scripts.js')}}"></script>
<script src="{{asset('js/bootstrap4js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/bootstrap4js/sidebarcollapse3.js')}}"></script>
<script src="{{asset('js/funciones.js')}}"></script>

<script src="{{asset('js/jquery-confirmv3/jquery-confirm.min.js')}}"></script>

<script src="{{asset('alertifyjs/alertify.min.js')}}"></script>

@yield("scripts")
</body>
</html>
