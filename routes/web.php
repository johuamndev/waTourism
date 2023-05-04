<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\direccionesController;
use App\Http\Controllers\lugaresController;
use App\Http\Controllers\lugarController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [direccionesController::class, 'inicio'])->name('index');

Route::get('/nosotros', [direccionesController::class, 'nosotros'])->name('nosotros');

Route::get('/contact', [direccionesController::class, 'contact'])->name('contact');

Route::get('/lugares', [lugaresController::class, 'index'])->name('lugares');

Route::get('/lugar', [lugarController::class, 'lugar'])->name('lugar');

Route::post('/contact', [direccionesController::class, 'store'])->name('contacto.store');
