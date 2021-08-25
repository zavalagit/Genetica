@extends('plantilla')

@section('titulo')
    VISTA DE MENÚ
@endsection

@section("css")
     <link href="{{asset("js/jquery-nestable/jquery.nestable.css")}}" rel="stylesheet" type="text/css" />
     <style media="screen">
        .card-header{
                    background: #1488CC;  /* fallback for old browsers */
                    background: -webkit-linear-gradient(to right, #2B32B2, #1488CC);  /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to right, #2B32B2, #1488CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */   
                    color:white;
                }
    </style>        
@endsection

@section("scriptsPlugins")
<script src="{{asset('js/jquery-nestable/jquery.nestable.js')}}"</script>
@endsection

@section("scripts")
<script src="{{asset('js/pages/scripts/admin/menu/index.js')}}" type="text/javascript"></script>
@endsection


@section('contenido')

<div style="height: 50px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-header text-center">VISTA DE MENÚS</div>
                    <div class="card-body">
                        @csrf
                        <div class="dd" id="nestable">
                            <ol class="dd-list">
                                @foreach ($menus as $key => $item)
                                    @if ($item["menu_id"] != 0)
                                        @break
                                    @endif
                                    @include("admin.menu.menu-item",["item" => $item])
                                @endforeach
                            </ol>
                        </div>
                    </div>   
                </div>
            </div>       
        </div>                  
    </div>

    
@endsection