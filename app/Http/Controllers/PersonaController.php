<?php

namespace App\Http\Controllers;

use App\Models\persona;
use App\Http\Requests\StorepersonaRequest;
use App\Http\Requests\UpdatepersonaRequest;
use App\Models\encargado;
use App\Models\odontologo;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionar_persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepersonaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepersonaRequest $request)
    {
        if ($request->tipo == 'O') {
            $validate = $request->validate(['especialidad' => 'required|max:3']);
        }
        if ($request->tipo == 'A') {
            $validate = $request->validate(['usuario' => 'required|string|min:3|max:15|unique:encargados']);
            $validate2 = $request->validate(['password' => 'required|string|min:4|confirmed']);

        }
        $persona = new Persona($request->only([
            'ci', 'nombre', 'apellido', 'url_huella', 'tel', 'email',
            'foto', 'fecha_naci', 'genero', 'tipo',
        ]));

        $persona->save();

        if ($request->tipo == 'C') {
            $cliente = new odontologo();
            $cliente->edad = $request->input('edad');
            $cliente->persona_id = $persona->id;
            $cliente->save();
        }
        if ($request->tipo == 'A') {
            $administrador = new encargado();
            $administrador->persona_id = $persona->id;
            $administrador->usuario = $request->usuario;
            $administrador->password = bcrypt($request->input('password'));
            $administrador->save();
        }
        if ($request->tipo == 'C') {
            return redirect()->route('personas.clientes.index'); 
        }
        if ($request->tipo == 'A') {
            return redirect()->route('personas.administradores.index'); 
        }
        return redirect()->route('menu'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->load('administrador');
        $persona->load('cliente');
        $persona->load('instructor');
        return view('gestionar_persona.edit', ['persona' => $persona]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepersonaRequest  $request
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepersonaRequest $request, $id)
    {
        $persona_ci = Persona::where('ci', $request->ci)
            ->where('id', '!=', $id)->first();
        if (!is_null($persona_ci)) {
            return back()->withErrors(['Ci ya esta registrado, intente con otro']);
        }

        $persona_email = Persona::where('email', $request->email)
            ->where('id', '!=', $id)->first();
        if (!is_null($persona_email)) {
            return back()->withErrors(['Email ya esta registrado, intente con otro']);
        }
        //actualiza la infomarcion y redirecciona
        $persona = Persona::findOrFail($id);
        $personaAux = $request->only([
            'ci', 'nombre', 'apellido', 'url_huella', 'tel', 'email',
            'fecha_naci',
        ]);
        $persona->update($personaAux);

        return redirect()->route('menu');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        if  ($persona->tipo == 'C') {
            $cliente = odontologo::where('persona_id', $id)->first();
            $cliente->delete();
        } else {
            $instructor = encargado::where('persona_id', $id)->first();
            $instructor->delete();
        }
        $persona->delete();
        return redirect()->route('menu');
    }
}
