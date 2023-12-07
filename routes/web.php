<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartamentoController;

use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\ListaMateriaController;
use App\Http\Controllers\ListaProfessoresController;
use App\Http\Controllers\InfoProfessorController;
use App\Http\Controllers\MateriaController;
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
Route::get('/professores',  [ListaProfessoresController::class, 'index'] )->name('professores');
Route::post('/professores',  [ListaProfessoresController::class, 'search'] )->name('searchProfessor');
Route::middleware(['auth'])->group(function () {
    Route::get('/professores/news',  [ProfessoresController::class, 'index'] )->name('formProfessor')->middleware('auth');
    Route::post('/professores/news',  [ProfessoresController::class, 'store'] )->name('storeProfessor')->middleware('auth');
    Route::delete('/professores/{id}',  [ProfessoresController::class, 'delete'] )->name('deleteProfessor')->middleware('auth');
    Route::get('/professores/t/{id}',  [ProfessoresController::class, 'get'] )->name('updateProfessor')->middleware('auth');
    Route::put('/professores/{id}',  [ProfessoresController::class, 'put'] )->name('updateAdicionar')->middleware('auth');
});


# Matérias
Route::get('/diciplinas',[ListaMateriaController::class, 'index'])->name('diciplinas');
Route::post('/diciplinas',[ListaMateriaController::class, 'search'])->name('searchDiciplinas');

Route::middleware(['auth'])->group(function () {
    Route::get('/diciplinas/new',[MateriaController::class, 'index'])->name('formDiciplinas');
    Route::post('/diciplinas/new',[MateriaController::class, 'store'])->name('storeDiciplinas');
    Route::delete('/diciplinas/{id}',[MateriaController::class, 'delete'])->name('deleteMaterias');
});

Route::get('/diciplinas/{nome}', [InfoMateriasController::class, 'index'])->name('infoMaterias');
Route::get('/professores/{id}',  [InfoProfessorController::class, 'index'] )->name('infoProfessores');



// Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento');

