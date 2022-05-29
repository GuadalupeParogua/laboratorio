<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facedes\Auth;
use App\Http\Controllers\UnidadDeMedidaController;

/* Auth:routes(['verify'=>true]); */

Route::group(['middleware'], function () {
    route::get('unidadmedida.index', [UnidadDeMedidaController::class, 'index'])->name('unidadmedida.index');
    route::get('unidadmedida.create', [UnidadDeMedidaController::class, 'create'])->name('unidadmedida.create');
    route::get('unidadmedida.edit/{id}', [UnidadDeMedidaController::class, 'edit'])->name('unidadmedida.edit');
    route::post('unidadmedida.store', [UnidadDeMedidaController::class, 'store'])->name('unidadmedida.store');
    route::delete('unidadmedida.destroy/{id}', [UnidadDeMedidaController::class, 'destroy'])->name('unidadmedida.destroy');
    route::put('unidadmedida.update/{id}', [UnidadDeMedidaController::class, 'update'])->name('unidadmedida.update');
});
