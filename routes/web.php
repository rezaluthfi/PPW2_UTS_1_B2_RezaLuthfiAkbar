<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;


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

Route::get('/players', [PlayerController::class, 'index'])->name('pemain.index');
Route::get('/players/create', [PlayerController::class, 'create'])->name('pemain.create');
Route::post('/players', [PlayerController::class, 'store'])->name('pemain.store');

Route::delete('/players/{id}', [PlayerController::class, 'destroy'])->name('pemain.destroy');

Route::get('/players/{id}/edit', [PlayerController::class, 'edit'])->name('pemain.edit');
Route::put('/players/{id}', [PlayerController::class, 'update'])->name('pemain.update');

Route::get('/players/{id}', [PlayerController::class, 'show'])->name('pemain.show');
