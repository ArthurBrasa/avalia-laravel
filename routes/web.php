<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartamentoController;

use App\Http\Controllers\ProfessoresController;

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

Route::get('/professores',  [ProfessoresController::class, 'index'] )->name('professores');

Route::get('/diciplinas', function(){
    return view('system.diciplinas');
})->name('diciplinas');

Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento');
