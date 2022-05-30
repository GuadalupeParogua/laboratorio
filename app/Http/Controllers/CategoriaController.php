<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Http\Requests\StorecategoriaRequest;
use App\Http\Requests\UpdatecategoriaRequest;

class CategoriaController extends Controller
{
    // public function index()
    // {
    //     $categorias = categoria::all();
    //     return view('gestionar_categoria.index', compact('categorias'));
    // }
    public function index(){
        $categoria = categoria::all();
        return view('gestionar_categoria.index')->with('categoria', $categoria);
    }

    public function create()
    {
        return view('gestionar_categoria.create');
    }

    public function store(Request $request){
        $categoria = new categoria;

        $categoria->nombre = $request->nombre;
        
        if($request->radio == 'producto'){
            $categoria->tipo = 1;
        }elseif($request->radio == 'materia'){
            $categoria->tipo = 0;
        }

        $categoria->save();
        return redirect()->route('categorias.index');
      
    }

    public function edit($id){
        $categoria = categoria::find($id);
        //return $clinica; -Funciona

        return view('gestionar_categoria.edit', compact('categoria'));
        
    }

    public function update(Request $request, $id){
        $categoria = categoria::find($id);
        //return $clinica;
        //return $request->all();
        $categoria->nombre = $request->nombre;
        //return $clinica;
        $categoria->save();
        return redirect()->route('categorias.index');
    }

    public function destroy($id)
    {
        $categorias = categoria::findOrFail($id);
        $categorias->delete();
        return redirect()->route('categorias.index');
    }

}
