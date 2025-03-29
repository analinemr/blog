<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Categoria
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
// Create (Criar)
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
//Inserção da cetegoria 
Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
// Visualizar 
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');
// Editar
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
