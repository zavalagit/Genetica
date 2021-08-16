@extends('plantilla')

@section('titulo')
    Permisos
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
        #tabla-entradas{
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
        th,td{
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

        div.muestra {
            background-color: lightblue;
            width: 1200px;
            height: 110px;
            overflow: auto;
        }

      

   </style>
@endsection

@section('contenido')

<div> 
    <h5 class="text-center">
        @if (count($permisos))
            <b>LISTADO DE PERMISO </b><span class="badge badge-primary badge-pill">{{$permisos->count()}}</span>
        @else
            <b>LISTADO DE PERMISO </b><span class="badge badge-primary badge-pill">0</span>
        @endif
     </h5>
</div>


                <table id="tabla-entradas" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">SLUG</th>
                            <th scope="col">ALGO...</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($permisos))
                            @php
                            $no = 1;
                            @endphp

                                @foreach ($permisos as $key => $permiso)
                                    <tr>
                                        <th class="th-contador" scope="row" width="1.5%">{{$no++}}</th>
                                        <td>{{$permiso->id}}</td>
                                        <td>{{$permiso->nombre}}</td>
                                        <td>{{$permiso->slug}}</td>
                                        <td></td>
                                        
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
          
               
@endsection