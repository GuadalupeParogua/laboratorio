<?php

use Illuminate\Support\Facedes\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\MateriaPrimaController;

/* Auth:routes(['verify'=>true]); */

Route::group(['middleware'], function () {
    route::get('mprimas.index', [MateriaPrimaController::class, 'index'])->name('mprimas.index');
    route::get('mprimas.create', [MateriaPrimaController::class, 'create'])->name('mprimas.create');
    route::get('mprimas.edit/{id}', [MateriaPrimaController::class, 'edit'])->name('mprimas.edit');
    route::post('mprimas.store', [MateriaPrimaController::class, 'store'])->name('mprimas.store');
    route::delete('mprimas.destroy/{id}', [MateriaPrimaController::class, 'destroy'])->name('mprimas.destroy');
    route::put('mprimas.update/{id}', [MateriaPrimaController::class, 'update'])->name('mprimas.update');
});
