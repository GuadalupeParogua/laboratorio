<?php

use App\Http\Controllers\EncargadoController;
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
    return view('login');
})->name('login');

Route::get('/login', [EncargadoController::class, 'loginView'])->name('login.view')->middleware('guest:admin');
Route::post('/login', [EncargadoController::class, 'login'])->name('login')->middleware('guest:admin');

Route::middleware('auth:admin')->group(function () {
    Route::post('/logout',[EncargadoController::class,'logout'])->name('logout');
    Route::get('/menu', [EncargadoController::class, 'menu'])->name("menu");
});