<?php

use App\Http\Controllers\inventarioController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [inventarioController::class, 'dashboard'])->name('dashboard');
    Route::get('/nuevo_producto', [inventarioController::class, 'newProduct'])->name('nuevo_producto');
    Route::get('/inventario', [inventarioController::class, 'inventario'])->name('inventario');
});

require __DIR__.'/auth.php';
