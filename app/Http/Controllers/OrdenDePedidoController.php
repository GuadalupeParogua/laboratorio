<?php

namespace App\Http\Controllers;


use App\Models\encargado;
use App\Models\odontologo;
use Illuminate\Http\Request;
use App\Models\orden_de_pedido;
use App\Http\Controllers\Controller;


class OrdenDePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $odontologo= odontologo::all();
        $encargado= encargado::all();
        $orden= orden_de_pedido::all();
        return view('orden_pedido.index',compact('odontologo', 'encargado', 'orden'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $encargado=encargado::all();
        $odontologo= odontologo::all();
        return view('orden_pedido.create',compact('odontologo','encargado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $orden= new orden_de_pedido;

        $orden->detalle=$request->detalle;
        $orden->fechaPedido=$request->fechaPedido;
        $orden->id_odontologo= $request->id_odontologo;
        $orden->id_encargado= $request->id_encargado;

        $orden->save();
        return Redirect()->route('orden_pedido.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orden_de_pedido  $orden_de_pedido
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orden_de_pedido  $orden_de_pedido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orden =orden_de_pedido::find($id);
        return view('orden_pedido.edit',compact('orden'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\orden_de_pedido  $orden_de_pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

         $orden =orden_de_pedido::find($id);
      /*    $orden->detalle = $request->detalle;
         $orden->fechaPedido = $request->fechaPedido; */
         $orden->fechaEntrega = $request->fechaEntrega;
         $orden->estado = $request->estado;

         $orden->save();

         return redirect()->route('orden_pedido.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orden_de_pedido  $orden_de_pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orden= orden_de_pedido::find($id);
        $orden->delete();
    }
}
