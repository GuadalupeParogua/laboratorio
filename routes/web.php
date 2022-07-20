<?php

use App\Models\tipo_de_pago;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\OdontologoController;
use App\Http\Controllers\TipoDePagoController;
use App\Http\Controllers\AreaAlmacenamientoController;

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


    //Administrador-encargado--listo
    Route::get('/administradores', [EncargadoController::class, 'index'])
    ->name('administradores.index');
    Route::get('/administradores/create', [EncargadoController::class, 'create'])
    ->name('administradores.create');
    route::get('administradores.edit/{id_persona}', [EncargadoController::class, 'edit'])
    ->name('administradores.edit');
    route::post('administradores.store', [EncargadoController::class, 'store'])
    ->name('administradores.store');
    route::delete('administradores.destroy/{id_persona}', [EncargadoController::class, 'destroy'])
    ->name('administradores.destroy');
    route::put('administradores.update/{id_persona}', [EncargadoController::class, 'update'])
    ->name('administradores.update');

    //Cliente-Odontologo--listo
    Route::get('/odontologos', [OdontologoController::class, 'index'])
    ->name('odontologos.index');
    Route::get('/odontologos/create', [OdontologoController::class, 'create'])
    ->name('odontologos.create');
    route::get('odontologos.edit/{id_persona}', [OdontologoController::class, 'edit'])
    ->name('odontologos.edit');
    route::post('odontologos.store', [OdontologoController::class, 'store'])
    ->name('odontologos.store');
    route::delete('odontologos.destroy/{id_persona}', [OdontologoController::class, 'destroy'])
    ->name('odontologos.destroy');
    route::put('odontologos.update/{id_persona}', [OdontologoController::class, 'update'])
    ->name('odontologos.update');

    //Clinica--listo
    Route::get('/clinicas', [ClinicaController::class, 'index'])->name('clinicas.index');
    Route::get('/clinicas/create', [ClinicaController::class, 'create'])->name('clinicas.create');
    Route::post('/clinicas', [ClinicaController::class, 'store'])->name('clinicas.store');
    Route::delete('/clinicas.destroy/{id}',[ClinicaController::class, 'destroy'])->name('clinicas.destroy');
    Route::put('/clinicas/{id}',[ClinicaController::class, 'update'])->name('clinicas.update');
    Route::get('/clinicas/{id}/edit', [ClinicaController::class, 'edit'])->name('clinicas.edit');


    //Categorias--listo
    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
    Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
    Route::delete('/categorias.destroy/{id}',[CategoriaController::class, 'destroy'])->name('categorias.destroy');
    Route::put('/categorias/{id}',[CategoriaController::class, 'update'])->name('categorias.update');
    Route::get('/categorias/{id}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');

    //TipoDePago y el listo xd?
    Route::get('/tipo_de_pago', [TipoDePagoController::class, 'index'])->name('tipo_de_pago.index');
    Route::get('/tipo/create', [TipoDePagoController::class, 'create'])->name('tipo_de_pago.create');
    route::get('/tipo.edit/{id}', [TipoDePagoController::class, 'edit'])->name('tipo_de_pago.edit');
    route::post('/tipo.store', [TipoDePagoController::class, 'store'])->name('tipo_de_pago.store');
    route::delete('/tipo.destroy/{id}', [TipoDePagoController::class, 'destroy'])->name('tipo_de_pago.destroy');
    route::put('/tipo.update/{id}', [TipoDePagoController::class, 'update'])->name('tipo_de_pago.update');


    /* Area Almacenamiento */
    route::get('area.index', [AreaAlmacenamientoController::class, 'index'])->name('area.index');
    route::get('area.create', [AreaAlmacenamientoController::class, 'create'])->name('area.create');
    route::get('area.edit/{id}', [AreaAlmacenamientoController::class, 'edit'])->name('area.edit');
    route::post('area.store', [AreaAlmacenamientoController::class, 'store'])->name('area.store');
    route::delete('area.destroy/{id}', [AreaAlmacenamientoController::class, 'destroy'])->name('area.destroy');
    route::put('area.update/{id}', [AreaAlmacenamientoController::class, 'update'])->name('area.update');
});
