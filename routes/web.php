<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostagemController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CATEGORIA
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
// Create (Criar)
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
//Inserção da cetegoria
Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
// Visualizar
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');
// Editar
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
// Méthod PUT
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
// Delete
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');

// POSTAGEM
Route::get('/postagem', [PostagemController::class, 'index'])->name('postagem.index');
// Create (Criar)
Route::get('/postagem/create', [PostagemController::class, 'create'])->name('postagem.create');
//Inserção de postagem
Route::post('/postagem', [PostagemController::class, 'store'])->name('postagem.store');
// Visualizar
Route::get('/postagem/{id}', [PostagemController::class, 'show'])->name('postagem.show');
// Editar
Route::get('/postagem/{id}/edit', [PostagemController::class, 'edit'])->name('postagem.edit');
// Méthod PUT
Route::put('/postagem/{id}', [PostagemController::class, 'update'])->name('postagem.update');
// Delete
Route::delete('/postagem/{id}', [PostagemController::class, 'destroy'])->name('postagem.destroy');
