<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\HorasController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asignaturas', [AsignaturaController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaturas');
Route::get('/asignaturas/create', [AsignaturaController::class, 'create'])->middleware(['auth', 'verified'])->name('asignaturas.create');
Route::post('/asignaturas/create', [AsignaturaController::class, 'store'])->middleware(['auth', 'verified'])->name('asignaturas.store');
Route::get('/asignaturas/edit/{id}', [AsignaturaController::class, 'edit'])->middleware(['auth', 'verified'])->name('asignaturas.edit');
Route::put('/asignaturas/edit/{id}', [AsignaturaController::class, 'update'])->middleware(['auth', 'verified'])->name('asignaturas.update');
Route::get('/asignaturas/delete/{id}', [AsignaturaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('asignaturas.destroy');

Route::get('/horas', [HorasController::class, 'index'])->middleware(['auth', 'verified'])->name('horas');
Route::get('/horas/create', [HorasController::class, 'create'])->middleware(['auth', 'verified'])->name('horas.create');
Route::post('/horas/create', [HorasController::class, 'store'])->middleware(['auth', 'verified'])->name('horas.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/asignaturas', function () {
//     return view('asignaturas');
// })->middleware(['auth', 'verified'])->name('asignaturas');

// Route::get('/horas', function () {
//     return view('horas');
// })->middleware(['auth', 'verified'])->name('horas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
