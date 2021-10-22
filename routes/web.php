<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return view('login');
});
Route::get('/mpets', function () {
    return view('mpets');
});
Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/indicacoes', function () {
    return view('indicacoes');
});
Route::get('/informacoes', function () {
    return view('informacoes');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dados', function () {
    return view('dados');
});
