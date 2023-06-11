<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', [MasterController::class, 'index'])->name('master.index');
Route::get('/master/create', [MasterController::class, 'create'])->name('master.create');
Route::post('/master', [MasterController::class, 'store'])->name('master.store');
Route::get('/master/{id}/edit', [MasterController::class, 'edit'])->name('master.edit');
Route::put('/master/{id}', [MasterController::class, 'update'])->name('master.update');
Route::delete('/master/{id}', [MasterController::class, 'destroy'])->name('master.destroy');
