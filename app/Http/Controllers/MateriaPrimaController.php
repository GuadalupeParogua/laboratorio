<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;
use App\Models\materia_prima;
use App\Http\Requests\Storemateria_primaRequest;
use App\Http\Requests\Updatemateria_primaRequest;
use App\Models\area_almacenamiento;
use App\Models\unidad_de_medida;

class MateriaPrimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_material=materia_prima::all();
        $mprima = materia_prima::all();
        $categoria = categoria::all();
        $area = area_almacenamiento::all();
        $unidad = unidad_de_medida::all();
        return view('mprima.index', compact('mprima', 'categoria', 'area', 'unidad','lista_material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = categoria::all();
        $area = area_almacenamiento::all();
        $unidad = unidad_de_medida::all();
        return view('mprima.create', compact('categoria', 'area', 'unidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storemateria_primaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'id_unidadMedida'=> 'required',
           'id_area' =>'required',
           'id_categoria'=>'required',

       ]
       );
        $mprima = new materia_prima;
        $mprima->nombre = $request->nombre;
        $mprima->p_venta = $request->p_venta;
        $mprima->p_compra = $request->p_compra;
        $mprima->id_unidadMedida = $request->id_unidadMedida;
        $mprima->id_area = $request->id_area;
        $mprima->id_categoria = $request->id_categoria;
        $mprima->save();
        return redirect()->route('mprimas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materia_prima  $materia_prima
     * @return \Illuminate\Http\Response
     */
    public function show(materia_prima $materia_prima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\materia_prima  $materia_prima
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = categoria::all();
        $area = area_almacenamiento::all();
        $unidad = unidad_de_medida::all();
        $mprima = materia_prima::find($id);
        return view('mprima.edit', compact('mprima','categoria', 'area', 'unidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemateria_primaRequest  $request
     * @param  \App\Models\materia_prima  $materia_prima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'id_unidadMedida'=> 'required',
            'id_area' =>'required',
            'id_categoria'=>'required',

        ]
        );
         $mprima =materia_prima::find($id);
         $mprima->nombre = $request->nombre;
         $mprima->p_venta = $request->p_venta;
         $mprima->p_compra = $request->p_compra;
         $mprima->id_unidadMedida = $request->id_unidadMedida;
         $mprima->id_area = $request->id_area;
         $mprima->id_categoria = $request->id_categoria;
         $mprima->save();
         return redirect()->route('mprimas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materia_prima  $materia_prima
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mprimas=materia_prima::find($id);
        $mprimas->delete();
        return redirect()->route('mprimas.index');
    }
}
