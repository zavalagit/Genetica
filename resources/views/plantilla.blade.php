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

            <!-- Inicio sidebar -->
            @include("sidebar")
            <!-- Fin sidebar -->

            
        </nav>

        <div id="content">
            
            
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
