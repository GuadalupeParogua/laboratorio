<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\producto_final;
use App\Http\Requests\Storeproducto_finalRequest;
use App\Http\Requests\Updateproducto_finalRequest;
use App\Models\categoria;


class ProductoFinalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = categoria::all();
        $producto_final = producto_final::all();
        return view('producto_final.index', compact('producto_final', 'categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto_final = producto_final::all();
        $categoria = categoria::where('tipo','1')->get();    
        return view('producto_final.create', compact('producto_final', 'categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeproducto_finalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:500',
            'precio' => 'required|integer',
  ]);
        $producto_final = new producto_final;
        $producto_final->nombre = $request->nombre;
        $producto_final->descripcion = $request->descripcion;
        $producto_final->precio = $request->precio;
        $producto_final->id_categoria = $request->id_categoria;
        $producto_final->save();
        return redirect()->route('producto_final.index')->with('success', 'Producto creado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto_final  $producto_final
     * @return \Illuminate\Http\Response
     */
    public function show(producto_final $producto_final)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto_final  $producto_final
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto_final = producto_final::find($id);
        $categoria = categoria::where('tipo','1')->get();
        return view('producto_final.edit', compact('producto_final', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproducto_finalRequest  $request
     * @param  \App\Models\producto_final  $producto_final
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:500',
            'precio' => 'required|integer',
    ]);
        $producto_final= producto_final::find($id);
        $producto_final->nombre = $request->nombre;
        $producto_final->descripcion = $request->descripcion;
        $producto_final->precio = $request->precio;
        $producto_final->id_categoria = $request->id_categoria;
        $producto_final->save();
        return redirect()->route('producto_final.index')->with('success', 'Producto actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto_final  $producto_final
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $producto_final = producto_final::find($id);
        $producto_final->delete();
        return redirect()->route('producto_final.index')->with('success', 'Producto eliminado con exito');
    }
}
