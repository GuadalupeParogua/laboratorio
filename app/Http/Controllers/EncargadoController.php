<?php

namespace App\Http\Controllers;

use App\Models\encargado;
use Illuminate\Http\Request;
use App\Http\Requests\StoreencargadoRequest;
use App\Http\Requests\UpdateencargadoRequest;
use App\Models\persona;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\New_;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $persona = persona::where('tipo','A')->get();
        $persona->load('encargado');
        //$encargado=encargado::all();
        return view('gestionar_encargado.index', compact('persona'));
    }
    public function loginView()
    {      
      return view('login');
    }
    
    public function login(Request $request)
    {
      $validateData = $request->validate([
        'usuario' => ['required', 'max:50'],
        'password' => ['required'],
      ]);
      $encargado = encargado::where('usuario', $request->usuario)->first();
        
      if (is_null($encargado)) {
        return back()->withErrors(['error' => 'el usuario no existe']);
      }

      if (Auth::guard('admin')->attempt(['usuario' => $request->usuario, 'password' => $request->password])) {
  
        return redirect()->route('menu');
      }
      return back()->withErrors(['Error' => 'la contraseña es incorrecta']);
    } 
    
    public function menu()
    {  
      return view('menu');
    }
  

  public function logout(){
    Auth::guard('admin')->logout();
    return redirect()->route('login.view');
  }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('gestionar_encargado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreencargadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $persona = new persona();
        $persona->ci = $request->ci;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;
        $persona->correo = $request->correo;
        $persona->tipo = $request->tipo;
        $persona->save();
        
        $encargado = new encargado();
        $encargado->id_persona = $persona->id;
        $encargado->usuario = $request->usuario;
        $encargado->password = bcrypt($request->input('password'));
        $encargado->save();        
        return redirect()->route('administradores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function show(encargado $encargado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function edit($id_persona)
    { //$proveedor = proveedor::find($id);
      //return view('proveedor.edit', compact('proveedor'));
      $persona = persona::findOrFail($id_persona);
      $persona->load('encargado');
     // return view('gestionar_encargado.edit', ['encargado' => $persona]);
     return view('gestionar_encargado.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateencargadoRequest  $request
     * @param  \App\Models\encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_persona)
    {
      $persona = persona::findOrFail($id_persona);
      $persona->ci = $request->ci;
      $persona->nombre = $request->nombre;
      $persona->apellido = $request->apellido;
      $persona->telefono = $request->telefono;
      $persona->direccion = $request->direccion;
      $persona->correo = $request->correo;
      $persona->tipo = $request->tipo;
      $persona->update();
      
      $encargado =encargado::find($id_persona);
      $encargado->id_persona = $persona->id;
      $encargado->usuario = $request->usuario;
      $encargado->password = bcrypt($request->input('password'));
      $encargado->update();        
      return redirect()->route('administradores.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_persona)
    {
      $persona = persona::findOrFail($id_persona);
      $encargado = encargado::findOrFail($id_persona);
      $encargado->delete();
      $persona->delete();
      return redirect()->route('administradores.index');
    }
}
