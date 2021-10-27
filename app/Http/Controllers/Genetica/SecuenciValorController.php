<?php

namespace App\Http\Controllers\Genetica;

use App\Http\Controllers\Controller;
use App\Models\Genetica\Kit;
use App\Models\Genetica\Secuenciavalor;
use App\Models\Genetica\Str;
use Illuminate\Http\Request;

class SecuenciValorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muestras=Str::orderBy('id')->get();
        return view('genetica.secuencia.index', compact('muestras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $kits=Kit::orderBy('id')->pluck('nombre', 'id')->toArray();
        return view('genetica.secuencia.crear', compact('kits'));
    }

    public function ListaMarcadores(Request $request)
    {
        
        //dd($kit);
        
        if ($request->ajax()) {
            //$kit = Kit::find($request->input('kit_id'));
            //manda el listado de marcadores que corresponden al id del kit y ordenado por la tabla kit_marcadores
            $listamarcadores = Kit::find($request->input('kit_id'))->marcadores()->orderBy('orden', 'asc')->get();
            return view('genetica.secuencia.lista_marcadores', compact('listamarcadores'));

            // foreach ($request->posicion as $or => $marcador_id){ 
            //     $kit->marcadores()->updateExistingPivot($marcador_id, ['orden' => $or]);
            //     }
            
            //return response()->json(['respuesta' => $kit]);
           
        } else {
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        if ($request->ajax()) {
            //guardar en tabla strs
            $str = new Str;
            $str->folio = $request->folio;
            $str->kit_id = $request->kit_id;
            $str->save();
            
            //guardar en tabla secuenciasvalores
            for ($i=0; $i < count($request->valor); $i++) {
                for ($j=1; $j <= count($request->valor[array_keys($request->valor)[$i]]); $j++) {
                    $secuencia = new Secuenciavalor;
                    $secuencia->str_id = $str->id;
                    $secuencia->marcador_id = array_keys($request->valor)[$i];
                    $secuencia->valor = $request->valor[array_keys($request->valor)[$i]][$j];
                    $secuencia->save();
                 }
             }
            //total de marcadores = 16
            //count($request->input('valor')
            //total de valores dentro del marcador 10
            //count($request->valor['10'])
            //para optener todos los indicios -> [10, 2, 18, 17, 25, 12, 13, 14, 16, 4, 24, 5, 15, 3, 11, 29]
            //array_keys($request->valor)[1] da el indicio
            
            return response()->json(['mensaje' => 'ok']);
           
        } else {
            abort(404);
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
