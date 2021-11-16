<?php

namespace App\Http\Controllers\Genetica;

use App\Http\Controllers\Controller;
use App\Models\Genetica\Secuenciavalor;
use App\Models\Genetica\Str;
use Illuminate\Http\Request;

class CoincidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         $secuencias = Secuenciavalor::where('str_id', '<>', $id)->get();
         //dd($secuencias);
         $busqueda_marcador = Secuenciavalor::where('str_id',$id)->pluck('marcador_id');
         $busqueda_valor = Secuenciavalor::where('str_id',$id)->pluck('valor');
         $lista_str = collect([]);
         //$lista = collect([]);

        for ($i=0; $i < count($busqueda_valor); $i++){
            $encontre = $secuencias->where('valor', $busqueda_valor[$i])->where('marcador_id', $busqueda_marcador[$i]);
            //$lista->push($encontre->pluck('str_id'));
            $lista_str = $lista_str->concat($encontre->pluck('str_id')->unique());
        }
        //dd($lista->all());
         $resultado_busqueda = $lista_str->countBy();
         //dd($resultado_busqueda->all());
        return view('genetica.coincidencia.index' , compact('resultado_busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
