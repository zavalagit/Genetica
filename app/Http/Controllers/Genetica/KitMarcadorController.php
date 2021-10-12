<?php

namespace App\Http\Controllers\Genetica;

use App\Http\Controllers\Controller;
use App\Models\Genetica\Kit;
use App\Models\Genetica\Marcador;
use Illuminate\Http\Request;

class KitMarcadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pluck para armar key->valor
        $kit = Kit::findOrFail(1);
        $marcadores = Marcador::get();
        $KitMarcadores = Marcador::with('kits')->get()->pluck('kits', 'id')->toArray();
        return view('genetica.kit-marcador.index', compact('kit', 'marcadores', 'KitMarcadores'));
        //dd($KitMarcadores);
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
            $marcadores = new Marcador();
            if ($request->input('estado') == 1) {
                $marcadores->find($request->input('marcador_id'))->kits()->attach($request->input('kit_id'));
                return response()->json(['respuesta' => 'El marcador se asigno con el kit']);
            } else {
                $marcadores->find($request->input('marcador_id'))->kits()->detach($request->input('kit_id'));
                return response()->json(['respuesta' => 'El marcador se elimino del kit']);
            }
        } else {
            abort(404);
        }
    }

    
}
