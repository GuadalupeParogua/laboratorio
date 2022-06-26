<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facedes\Auth;
use App\Http\Controllers\PagoController;

/* Auth:routes(['verify'=>true]); */

Route::group(['middleware'], function () {

    route::get('pago.index', [PagoController::class, 'index'])->name('pago.index');
    route::get('pago.create', [PagoController::class, 'create'])->name('pago.create');
    route::get('pago.edit/{id}', [PagoController::class, 'edit'])->name('pago.edit');
    route::post('pago.store', [PagoController::class, 'store'])->name('pago.store');
    route::delete('pago.destroy/{id}', [PagoController::class, 'destroy'])->name('pago.destroy');
    route::put('pago.update/{id}', [PagoController::class, 'update'])->name('pago.update');

});
