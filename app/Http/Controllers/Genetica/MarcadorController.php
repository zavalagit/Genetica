<?php

namespace App\Http\Controllers\Genetica;

use App\Http\Controllers\Controller;
use App\Models\Genetica\Marcador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MarcadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(session()->all());
        can('listar-marcadores');
        //Cache::put('prueba', 'Esto es un dato en cache');
        //Cache:: tags(['permiso'])->put('permiso.1', ['listar-marcadores', 'crear-marcadores']);
        //dd(Cache::tags('permiso')->get('key'));
        //Cache::tags(['permiso'])->flush();
        $marcadores=Marcador::orderBy('id')->get();
        return view('genetica.marcador.index', compact('marcadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        //
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
    public function ver($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
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
    public function actualizar(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //
    }
}
