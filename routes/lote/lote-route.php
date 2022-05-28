<?php

use Illuminate\Support\Facedes\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoteController;


/* Auth:routes(['verify'=>true]); */

Route::group(['middleware'], function () {
    route::get('lote.index', [LoteController::class, 'index'])->name('lote.index');
    route::post('lote.store', [LoteController::class, 'store'])->name('lote.store');
    route::get('lote.pdf/{id}', [LoteController::class, 'ExportPdf'])->name('lote.pdf');



});
