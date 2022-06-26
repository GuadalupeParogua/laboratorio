<?php

namespace App\Http\Controllers;

use App\Models\pago;
use App\Models\tipo_de_pago;
use Illuminate\Http\Request;
use App\Models\orden_de_pedido;
use App\Http\Requests\StorepagoRequest;
use App\Http\Requests\UpdatepagoRequest;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tipo_pago=tipo_de_pago::all();
        $orden= orden_de_pedido::all();
        $pago = pago::all();
    return view('pagos.index', compact('tipo_pago','orden','pago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_pago=tipo_de_pago::all();
        $orden= orden_de_pedido::all();
        $pago = pago::all();
        return view('pagos.create', compact('orden','tipo_pago','pago'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepagoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pago= new pago;

        $pago->id_ordenpedido=$request->id_ordenpedido;
        $pago->id_tipo=$request->id_tipo;
        $pago->fecha= $request->fecha;
        $pago->estado= $request->estado;

        $pago->save();
        return Redirect()->route('pago.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(pago $pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_pago=tipo_de_pago::all();
        $pago = pago::find($id);
        return view('pagos.edit',compact('tipo_pago', 'pago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepagoRequest  $request
     * @param  \App\Models\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pago =pago::find($id);
        $pago->id_tipo=$request->id_tipo;
        $pago->fecha= $request->fecha;
        $pago->estado= $request->estado;


        $pago->update();
        return redirect()->route('pago.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(pago $pago)
    {
        //
    }
}
