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
    public function index(Kit $kit)
    {
        //pluck para armar key->valor
        //$kit = Kit::findOrFail($id);
        $marcadores = Marcador::get();
        $KitMarcadores = Marcador::with('kits')->get()->pluck('kits', 'id')->toArray();
        //dd($KitMarcadores);
        return view('genetica.kit-marcador.index', compact('kit', 'marcadores', 'KitMarcadores'));
        //dd($KitMarcadores);
    }

    public function ordenar(Kit $kit)
    {
        //dd($kit);
        //buscamos el kit
       // $kit = Kit::findOrFail($id);
       
        //obtenemos por medio del kit todos los marcadores relacionados de la tabla kit_marcadores
        $KitMarcadores = $kit->marcadores()->orderBy('orden', 'asc')->get();
        //dd($kit);
        return view('genetica.kit-marcador.ordenar', compact('kit','KitMarcadores'));
        //dd($KitMarcadores);
    }

    public function guardarOrden(Request $request)
    {
        
        //dd($kit);
        
        if ($request->ajax()) {
            $kit = Kit::find($request->input('kit_id'));
            

            foreach ($request->posicion as $or => $marcador_id){ 
                $kit->marcadores()->updateExistingPivot($marcador_id, ['orden' => $or]);
                }
            
            return response()->json(['respuesta' => 'ok']);
           
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
