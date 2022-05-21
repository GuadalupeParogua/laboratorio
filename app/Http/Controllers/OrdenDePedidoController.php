<?php

namespace App\Http\Controllers;

use App\Models\orden_de_pedido;
use App\Http\Requests\Storeorden_de_pedidoRequest;
use App\Http\Requests\Updateorden_de_pedidoRequest;

class OrdenDePedidoController extends Controller
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
     * @param  \App\Http\Requests\Storeorden_de_pedidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeorden_de_pedidoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orden_de_pedido  $orden_de_pedido
     * @return \Illuminate\Http\Response
     */
    public function show(orden_de_pedido $orden_de_pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orden_de_pedido  $orden_de_pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(orden_de_pedido $orden_de_pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateorden_de_pedidoRequest  $request
     * @param  \App\Models\orden_de_pedido  $orden_de_pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Updateorden_de_pedidoRequest $request, orden_de_pedido $orden_de_pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orden_de_pedido  $orden_de_pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(orden_de_pedido $orden_de_pedido)
    {
        //
    }
}
