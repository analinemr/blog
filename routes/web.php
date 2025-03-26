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

// Create

Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');

// Visualizar item

Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');
