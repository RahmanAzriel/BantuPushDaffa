<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AkunController;
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
Route::prefix('/siswa')->name('siswa.')->group(function () {
    Route::get('/', [App\Http\Controllers\SiswaController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\SiswaController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\SiswaController::class, 'store'])->name('store');
    Route::patch('/update/{id}', [App\Http\Controllers\SiswaController::class, 'update'])->name('update');
    Route::get('/edit/{id}', [App\Http\Controllers\SiswaController::class, 'edit'])->name('edit');
    Route::delete('/delete/{id}', [App\Http\Controllers\SiswaController::class, 'destroy'])->name('destroy');
});

Route::prefix('/akun')->name('akun.')->group(function () {
    Route::get('/', [App\Http\Controllers\AkunController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\AkunController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\AkunController::class, 'store'])->name('store');
    Route::patch('/update/{id}', [App\Http\Controllers\AkunController::class, 'update'])->name('update');
    Route::get('/edit/{id}', [App\Http\Controllers\AkunController::class, 'edit'])->name('edit');
    Route::delete('/delete/{id}', [App\Http\Controllers\AkunController::class, 'destroy'])->name('destroy');
});


