@extends('plantilla')

@section('titulo')
    KIT-MARCADORES
@endsection

@section('css')
   <style media="screen">
        .text {   
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.7); 
        }

        .btn {
            margin-left: 10px;
            margin-right: 10px;
        }

        .btn-primary {
            font-family: Raleway-SemiBold;
            font-size: 13px;
            color: rgba(58, 133, 191, 0.75);
            letter-spacing: 1px;
            line-height: 15px;
            border: 2px solid rgba(58, 133, 191, 0.75);
            border-radius: 40px;
            background: transparent;
            transition: all 0.3s ease 0s;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
        }
        .btn-primary:hover {
            color: #FFF;
            background: rgba(58, 133, 191, 0.75);
            border: 2px solid rgba(58, 133, 191, 0.75);
        }

        /* pinta la ralla de abajo del imput */
        .active-pink-2 input.form-control[type=text]:focus:not([readonly]) {
            border-bottom: 1px solid #f48fb1;
            box-shadow: 0 1px 0 0 #f48fb1;
        }

        /* modificaciones de las tablas */
        #tabla-rol{
            width: 100% !important;
        }
        #tabla-valores{
            /* width: 180% !important; */
        }

        thead{
            background-color: #394049 !important;
            height: 50px !important;
        }

        th{
            color:#c09f77;
            padding: 8px 0 8px 0;
        }
        th.th-contador{
            background-color:#394049 !important;
            text-align: center;
  
        }
        th{
            padding: 5px 5px !important;
            /* padding-right: 1px;
            padding-right: 1px; */
            border-radius: 0 !important;
            text-align: center;
            
        }
        .thcolorborde{
            border: lightgoldenrodyellow 2px solid;
        }

        .tdcolorborde{
            border: lightcoral 2px solid;
        }
        .trcolorborde{
            border: black 3px solid;
            border-bottom: 3px solid black;
        }

        .colorcol{
            color:#c10f77;
            border-bottom: 1px solid #f48fb1;
        }

        .card-header{
            background: #1488CC;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #2B32B2, #1488CC);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2B32B2, #1488CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */   
            color:white;
            }

           

              

   </style>
@endsection

@section("scripts")
<script src="{{asset('js/genetica/kitmarcadores.js')}}" type="text/javascript"></script>
@endsection

@section('contenido')


                <div style="height: 50px;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('includes.mensaje')
                            <div class="card shadow-lg p-3 mb-5 bg-white ">
                                <div class="card-header text-center">
                                    @if (count($marcadores))
                                        <b>LISTADO DE RELACION KIT CON MARCADORES </b><span class="badge badge-warning badge-pill"></span>
                                    @else
                                        <b>LISTADO DE RELACION KIT CON MARCADORES </b><span class="badge badge-warning badge-pill">0</span>
                                    @endif
                                </div>
                                <div class="card-body">
                                    @csrf
                                    <table id="tabla-rol" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Marcadores</th>
                                                <th scope="col" class="text-center">{{$kit->nombre}}</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($marcadores))
                                                @php
                                                $no = 1;
                                                @endphp
                    
                                                        @foreach ($marcadores as $key => $marcador)
                                                            
                                                            <tr>
                                                                <th class="th-contador" scope="row" width="1.5%">{{$no++}}</th>
                                                                <td class="font-weight-bold"></i> {{$marcador["nombre"]}}</td>
                                                                
                                                                    <td class="text-center">
                                                                        <input
                                                                        type="checkbox"
                                                                        class="kit_marcador"
                                                                        name="kit_marcador[]"
                                                                        data-marcadorid={{$marcador[ "id"]}}
                                                                        value="{{$kit->id}}" {{in_array($kit->id, array_column($KitMarcadores[$marcador["id"]], "id"))? "checked" : ""}}>
                                                                    </td>
                                                                
                                                            </tr>
                                                        @endforeach
                                                        
                                            @else
                                                    <tr class="table-warning">
                                                        <td colspan="12">
                                                            <blockquote>No hay registros</blockquote>
                                                        </td>
                                                    </tr>
                                            @endif
                    
                                        </tbody>
                                    </table> 
                                </div>   
                            </div>
                        </div>       
                    </div>                  
                </div>             
@endsection