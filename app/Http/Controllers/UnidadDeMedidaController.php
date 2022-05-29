<?php

namespace App\Http\Controllers;

use App\Models\unidad_de_medida;
use Illuminate\Http\Request;


class UnidadDeMedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidad =unidad_de_medida::all();
        return view('unidad_medida.index')->with('unidad', $unidad); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidad_medida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeunidad_de_medidaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unidad= new unidad_de_medida;
        $unidad->nombre = $request->nombre;
        $unidad->abreviatura = $request->abreviatura;
        $unidad->save();
        return redirect()->route('unidadmedida.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\unidad_de_medida  $unidad_de_medida
     * @return \Illuminate\Http\Response
     */
    public function show(unidad_de_medida $unidad_de_medida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unidad_de_medida  $unidad_de_medida
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidad = unidad_de_medida::find($id);
        return view('unidad_medida.edit', compact('unidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateunidad_de_medidaRequest  $request
     * @param  \App\Models\unidad_de_medida  $unidad_de_medida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $unidad = unidad_de_medida::find($id);
        $unidad->nombre = $request->nombre;
        $unidad->abreviatura = $request->abreviatura;
        $unidad->update();
        return Redirect()->route('unidadmedida.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\$unidad_de_medida
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $unidad = unidad_de_medida::find($id);
        $unidad->delete();
        return redirect()->route('unidadmedida.index');
    }
}
