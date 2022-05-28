<?php

namespace App\Http\Controllers;

use App\Models\lote;
use Illuminate\Http\Request;
use App\Http\Requests\StoreloteRequest;
use App\Http\Requests\UpdateloteRequest;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;

class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lote = Lote::all();
        return view('lote.index',compact('lote'));
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
     * @param  \App\Http\Requests\StoreloteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lote= new lote;
        $lote->id_materiaprima=$request->lista_material;
        $lote->f_vencimiento=$request->fecha_c;
        $lote->cantidad=$request->cantidad;
        $lote->save();
        return Redirect()->route('lote.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function show(lote $lote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lotes = lote::find($id);
        return view('lote.edit',compact('lotes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateloteRequest  $request
     * @param  \App\Models\lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lote= lote::find($id);
        $lote->f_entrega=$request->f_entrega;
        $lote->p_compra=$request->p_compra;
        $lote->estado=$request->estado;
        $lote->save();
        return Redirect()->route('lote.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function destroy(lote $lote)
    {
        //
    }
    /* exportacion de pdf de solicitudes de compra */

    public function ExportPdf($id){
        $solicitud=lote::find($id);
        $pdf=PDF::loadView('lote.pdf',compact('solicitud'));
        $pdf->setPaper('carta','portrait');
        //  return $pdf->download('estudiantes.pdf');
        return $pdf->stream('Solicitud.pdf');
    }
}
