@extends('plantilla')

@section('titulo')
    Crear Menús
@endsection



@section('contenido')

<div > 
    <h5 class="text-center">
        
            <b>CREAR MENÚS </b>
       
     </h5>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 0px; margin-top: 30px;">
    <div class="container-fluid">
        
            <form action="{{route('guardar_menu')}}" id="form-general" class="col-12" method="POST">
                @csrf
                <div class="row">
                    @include('admin.menu.form')
                </div>        
                  
                <div class="row justify-content-between">
                    <dir class="col-sm-4">
                        @include('includes.boton-form-crear')
                    </dir>
                    <dir class="col-sm-6">
                        @include('includes.form-error')
                        @include('includes.mensaje')
                    </dir>
                    
                </div>            
                        
                    
                  
            </form>
        
    </div>
</nav>

<div class="col-auto p-5">
   
</div>  

    
@endsection
