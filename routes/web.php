<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartamentoController;

use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\DiciplinasController;
use App\Http\Controllers\InfosController;
use App\Http\Controllers\InfoMateriasController;

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
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

# Professores
Route::get('/professores',  [ProfessoresController::class, 'index'] )->name('professores');
Route::get('/professores/{nome}', [InfosController::class, 'index'])->name('infoProfessores');

# Matérias
Route::get('/diciplinas',[DiciplinasController::class, 'index'])->name('diciplinas');
Route::get('/diciplinas/{nome}', [InfoMateriasController::class, 'index'])->name('infoMaterias');



Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento');

