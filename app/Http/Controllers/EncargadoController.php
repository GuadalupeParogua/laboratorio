<?php

namespace App\Http\Controllers;

use App\Models\encargado;
//use App\Models\persona;
use Illuminate\Http\Request;
use App\Http\Requests\StoreencargadoRequest;
use App\Http\Requests\UpdateencargadoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradores= encargado::all();
        return view('gestionar_encargado.index', compact('administradores'));
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
    public function store(StoreencargadoRequest $request)
    {
        //
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
    public function edit(encargado $encargado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateencargadoRequest  $request
     * @param  \App\Models\encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateencargadoRequest $request, encargado $encargado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function destroy(encargado $encargado)
    {
        //
    }
}
