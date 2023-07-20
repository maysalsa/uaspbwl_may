<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

Route::get('/skincare', [App\Http\Controllers\SkincareController::class, 'index']);
Route::get('/skincare/create', [App\Http\Controllers\SkincareController::class, 'create']);
Route::post('/skincare', [App\Http\Controllers\SkincareController::class, 'store']);
Route::get('/skincare/{id}/edit', [App\Http\Controllers\SkincareController::class, 'edit']);
Route::patch('/skincare/{id}', [App\Http\Controllers\SkincareController::class, 'update']);
Route::delete('/skincare/{id}', [App\Http\Controllers\SkincareController::class, 'destroy']);

