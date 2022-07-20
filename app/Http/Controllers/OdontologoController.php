<?php

namespace App\Http\Controllers;

use App\Models\odontologo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreodontologoRequest;
use App\Http\Requests\UpdateodontologoRequest;
use App\Models\clinica;
use App\Models\persona;
//use GuzzleHttp\Psr7\Request;

class OdontologoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $persona = persona::where('tipo','O')->get();
        $odontologo = odontologo::all();
        $persona->load('odontologo');
        // $clinica = clinica::all();
        return view('gestionar_odontologo.index', compact('persona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clinica = clinica::all();
        return view('gestionar_odontologo.create',compact('clinica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreodontologoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'ci' => 'required|max:50|unique:personas',
            'email' => 'max:50|unique:personas',
            'telefono' => 'integer',
            'direccion' => 'required|max:50',
            'correo' => 'max:50|unique:personas',
            ]
        );
        $persona = new persona();
        $persona->ci = $request->ci;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;
        $persona->correo = $request->correo;
        $persona->tipo = $request->tipo;
        $persona->save();

        $odontologo = new odontologo();
        $odontologo->id_persona = $persona->id;
        $odontologo->id_clinica = $request->id_clinica;
        //$odontologo->nombre = $request->nombre;
        $odontologo->especialidad = $request->especialidad;
        $odontologo->save();
        return redirect()->route('odontologos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\odontologo  $odontologo
     * @return \Illuminate\Http\Response
     */
    public function show(odontologo $odontologo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\odontologo  $odontologo
     * @return \Illuminate\Http\Response
     */
    public function edit($id_persona)
    {
        $clinica = clinica::all();
        $persona = persona::findOrFail($id_persona);
        $odontologo = odontologo::all();
        $persona->load('odontologo');
        return view('gestionar_odontologo.edit', compact('persona','clinica'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateodontologoRequest  $request
     * @param  \App\Models\odontologo  $odontologo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_persona)
    {
        $persona = persona::find($id_persona);
        $persona->ci = $request->ci;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;
        $persona->correo = $request->correo;
        $persona->tipo = $request->tipo;
        $persona->update();

        $odontologo = odontologo::where('id_persona',$id_persona)->first();

        $odontologo->id_clinica = $request->id_clinica;
        $odontologo->especialidad = $request->especialidad;

        $odontologo->update();
        return redirect()->route('odontologos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\odontologo  $odontologo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_persona)
    {
        $persona = persona::findOrFail($id_persona);
        $odontologo = odontologo::where('id_persona',$id_persona)->first();
        $odontologo->delete();
        $persona->delete();
        return redirect()->route('odontologos.index');

    }
}
