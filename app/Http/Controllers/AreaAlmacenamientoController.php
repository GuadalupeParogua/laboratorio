<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\area_almacenamiento;
use App\Http\Requests\Storearea_almacenamientoRequest;
use Illuminate\Support\Facades\Redirect;

class AreaAlmacenamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area_alma=area_almacenamiento::all();
        return view('area_almacenamiento.index')->with('area_alma', $area_alma);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('area_almacenamiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storearea_almacenamientoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $area = new area_almacenamiento;
        $area->nombre = $request->nombre;
        $area->save();

        return Redirect()->route('area.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\area_almacenamiento  $area_almacenamiento
     * @return \Illuminate\Http\Response
     */
    public function show(area_almacenamiento $area_almacenamiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\area_almacenamiento  $area_almacenamiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areas =  area_almacenamiento::find($id);
        return view('area_almacenamiento.edit',compact('areas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatearea_almacenamientoRequest  $request
     * @param  \App\Models\area_almacenamiento  $area_almacenamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $area =  area_almacenamiento::find($id);
        $area->nombre = $request->nombre;
        $area->update();

        return redirect()->route('area.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\area_almacenamiento  $area_almacenamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $area = area_almacenamiento::find($id);
        $area->delete();
        return redirect()->route('area.index');
    }
}
