<?php

namespace App\Http\Controllers;

use App\Models\tipo_de_pago;
use App\Http\Requests\Storetipo_de_pagoRequest;
use App\Http\Requests\Updatetipo_de_pagoRequest;

class TipoDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storetipo_de_pagoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetipo_de_pagoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_de_pago  $tipo_de_pago
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_de_pago $tipo_de_pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_de_pago  $tipo_de_pago
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_de_pago $tipo_de_pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetipo_de_pagoRequest  $request
     * @param  \App\Models\tipo_de_pago  $tipo_de_pago
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetipo_de_pagoRequest $request, tipo_de_pago $tipo_de_pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_de_pago  $tipo_de_pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_de_pago $tipo_de_pago)
    {
        //
    }
}
