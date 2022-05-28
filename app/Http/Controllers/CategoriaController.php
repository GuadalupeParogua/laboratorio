<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Http\Requests\StorecategoriaRequest;
use App\Http\Requests\UpdatecategoriaRequest;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = categoria::all();
        return view('gestionar_categoria.index', compact('categorias'));
    }

    public function create()
    {
        return view('gestionar_categoria.create');
    }

    public function store(StorecategoriaRequest $request)
    {
        $categorias = new categoria($request->all());
        $categorias->save();
        return redirect()->route('categorias.index');
    }

    public function edit($id)
    {
        $categorias = categoria::findOrFail($id);
        return view('gestionar_categoria.edit', compact('categorias'));
    }

    public function update(UpdatecategoriaRequest $request, $id)
    {
        $categorias = categoria::findOrFail($id);
        $categorias->update($request->all());
        return redirect()->route('categorias.index');
    }

    public function destroy($id)
    {
        $categorias = categoria::findOrFail($id);
        $categorias->delete();
        return redirect()->route('categorias.index');
    }

}
