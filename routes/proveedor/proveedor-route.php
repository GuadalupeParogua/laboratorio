<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facedes\Auth;
use App\Http\Controllers\ProveedorController;

/* Auth:routes(['verify'=>true]); */

Route::group(['middleware'], function () {
    route::get('proveedor.index', [ProveedorController::class, 'index'])->name('proveedor.index');
    route::get('proveedor.create', [ProveedorController::class, 'create'])->name('proveedor.create');
    route::get('proveedor.edit/{id}', [ProveedorController::class, 'edit'])->name('proveedor.edit');
    route::post('proveedor.store', [ProveedorController::class, 'store'])->name('proveedor.store');
    route::delete('proveedor.destroy/{id}', [ProveedorController::class, 'destroy'])->name('proveedor.destroy');
    route::put('proveedor.update/{id}', [ProveedorController::class, 'update'])->name('proveedor.update');
});
