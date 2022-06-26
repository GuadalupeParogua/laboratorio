<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facedes\Auth;
use App\Http\Controllers\OrdenDePedidoController;

/* Auth:routes(['verify'=>true]); */

Route::group(['middleware'], function () {
    route::get('orden_pedido.index', [OrdenDePedidoController::class, 'index'])->name('orden_pedido.index');
    route::get('orden_pedido.create', [OrdenDePedidoController::class, 'create'])->name('orden_pedido.create');
    route::get('orden_pedido.edit/{id}', [OrdenDePedidoController::class, 'edit'])->name('orden_pedido.edit');
    route::post('orden_pedido.store', [OrdenDePedidoController::class, 'store'])->name('orden_pedido.store');
    route::delete('orden_pedido.destroy/{id}', [OrdenDePedidoController::class, 'destroy'])->name('orden_pedido.destroy');
    route::put('orden_pedido.update/{id}', [OrdenDePedidoController::class, 'update'])->name('orden_pedido.update');
});
