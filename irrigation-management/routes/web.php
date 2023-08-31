<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\IrrigationController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\MeasureController;
use App\Http\Controllers\SearchController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//clientes
Route::get('/', [ClientController::class, 'index'])->name('clients.index');
Route::get('/cliente/{id}', [ClientController::class, 'show'])->name('client.show');
Route::get('/editar-cliente/{id}', [ClientController::class, 'edit'])->name('client.edit');
Route::put('/actualizar-cliente/{id}', [ClientController::class, 'update'])->name('client.update');
Route::get('/crear-cliente', [ClientController::class, 'create'])->name('client.create');
Route::post('/guardar-cliente', [ClientController::class, 'store'])->name('client.store');
Route::get('/buscar-cliente', [SearchController::class, 'search'])->name('client.search');

//programadores de riego
Route::get('/riego', [IrrigationController::class, 'index'])->name('irrigations.index');

//sensores/sondas
Route::get('/sonda', [SensorController::class, 'index'])->name('sensors.index');

//medidas de las sondas
Route::get('/medidas-sondas', [MeasureController::class, 'index'])->name('measures.index');

//autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
