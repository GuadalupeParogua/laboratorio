<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clinica;
//use App\http\Request\StoreclinicaRequest;

class ClinicaController extends Controller
{
    public function index(){
        $clinica = clinica::all();
        return view('gestionar_clinica.index')->with('clinica', $clinica);
    }
    public function create(){
        return view('gestionar_clinica.create');
    }
    public function store(Request $request){
        $clinica = new clinica;
        $clinica->nombre = $request->nombre;
        $clinica->direccion = $request->direccion;
        $clinica->telefono = $request->telefono;
        $clinica->save();
        return redirect()->route('clinicas.index');
      
    }

    public function edit($id){
        $clinica = clinica::find($id);
        //return $clinica; -Funciona

        return view('gestionar_clinica.edit', compact('clinica'));
        
    }
    public function update(Request $request, $id){
        $clinica = clinica::find($id);
        //return $clinica;
        //return $request->all();
        $clinica->nombre = $request->nombre;
        $clinica->direccion = $request->direccion;
        $clinica->telefono = $request->telefono;
        //return $clinica;
        $clinica->save();
        return redirect()->route('clinicas.index');
    }

    public function destroy($id)
    {
        $clinica = clinica::find($id);
        $clinica->delete();
        return redirect()->route('clinicas.index');
    }
}
