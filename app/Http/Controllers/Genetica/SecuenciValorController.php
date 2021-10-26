<?php

namespace App\Http\Controllers\Genetica;

use App\Http\Controllers\Controller;
use App\Models\Genetica\Kit;
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
        //
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
