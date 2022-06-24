<?php

namespace App\Http\Controllers;

use App\Models\tipo_de_pago;
use App\Http\Requests\Storetipo_de_pagoRequest;
use App\Http\Requests\Updatetipo_de_pagoRequest;
use Illuminate\Http\Request;

class TipoDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_de_pagos = tipo_de_pago::all();
        return view('tipo_de_pago.index')->with('tipo_de_pagos', $tipo_de_pagos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_de_pago.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storetipo_de_pagoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_de_pago = new tipo_de_pago();
        $tipo_de_pago->tipo = $request->tipo;
        $tipo_de_pago->save();
        return redirect()->route('tipo_de_pago.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_de_pago  $tipo_de_pago
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_de_pago $tipo_de_pago)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_de_pago  $tipo_de_pago
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $tipo_de_pago = tipo_de_pago::find($id);
        return view('tipo_de_pago.edit')->with('tipo_de_pago', $tipo_de_pago);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetipo_de_pagoRequest  $request
     * @param  \App\Models\tipo_de_pago  $tipo_de_pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo_de_pago = tipo_de_pago::find($id);
        $tipo_de_pago->tipo = $request->tipo;
        $tipo_de_pago->update();
        return redirect('tipo_de_pago');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_de_pago  $tipo_de_pago
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_de_pago = tipo_de_pago::find($id);
        $tipo_de_pago->delete();
        return redirect('tipo_de_pago');
    }
}
