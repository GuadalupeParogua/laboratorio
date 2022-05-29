<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facedes\Auth;
use App\Http\Controllers\AreaAlmacenamientoController;

/* Auth:routes(['verify'=>true]); */

Route::group(['middleware'], function () {
    route::get('area.index', [AreaAlmacenamientoController::class, 'index'])->name('area.index');
    route::get('area.create', [AreaAlmacenamientoController::class, 'create'])->name('area.create');
    route::get('area.edit/{id}', [AreaAlmacenamientoController::class, 'edit'])->name('area.edit');
    route::post('area.store', [AreaAlmacenamientoController::class, 'store'])->name('area.store');
    route::delete('area.destroy/{id}', [AreaAlmacenamientoController::class, 'destroy'])->name('area.destroy');
    route::put('area.update/{id}', [AreaAlmacenamientoController::class, 'update'])->name('area.update');
});
