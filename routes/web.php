<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\OdontologoController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/', function () {
    return view('login');
})->name('login');*/

Route::get('/login',[EncargadoController::class, 'loginView'])->name('login.view')->middleware('guest:admin');
Route::post('/login', [EncargadoController::class, 'login'])->name('login')->middleware('guest:admin');

Route::middleware('auth:admin')->group(function () {

    Route::post('/logout',[EncargadoController::class,'logout'])->name('logout');

    Route::get('/menu', [EncargadoController::class, 'menu'])->name("menu");


    //Administrador-encargado
    Route::get('/administradores', [EncargadoController::class, 'index'])
    ->name('administradores.index');
    Route::get('/administradores/create', [EncargadoController::class, 'create'])
        ->name('administradores.create');   
 
    //Cliente-Odontologo
    Route::get('/odontologos', [OdontologoController::class, 'index'])
        ->name('odontologos.index');
    Route::get('/odontologos/create', [OdontologoController::class, 'create'])
        ->name('odontologos.create');    
           
    //Clinica
    Route::get('/clinicas', [ClinicaController::class, 'index'])->name('clinicas.index');
    Route::get('/clinicas/create', [ClinicaController::class, 'create'])
    ->name('clinicas.create');


    //Categorias
    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('/categorias/create', [CategoriaController::class, 'create'])
    ->name('categorias.create');
 
    
});
