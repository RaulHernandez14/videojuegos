<?php

use App\Http\Controllers\Controlador_Videojuegos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/index', [Controlador_Videojuegos::class, 'Api'])->name('juegos');
Route::get('/', [Controlador_Videojuegos::class,'index'])->name('juegos');
Route::get('/Api', [Controlador_Videojuegos::class, 'Apifree'])->name('juegos');