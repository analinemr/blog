<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;

//Route::get('/', function () {
//    return view('welcome');
//});

// PÁGINA PRINCIPAL
Route::get('/', [SiteController::class, 'index'])->name('site.princiapal');

// Postagens por categoria
Route::get('/PostagemByCategoriaId/{id}', [SiteController::class, 'PostagemByCategoriaId'])->name('site.PostagemByCategoriaId');

// Postagens por Autor
Route::get('/PostagemByAutorId/{id}', [SiteController::class, 'PostagemByAutorId'])->name('site.PostagemByAutorId');


//======

Auth::routes();

// AUTENTICAÇÃO - SENHA (Faz com que só quem estiver logado consiga acessar as informações dentro da rota)
Route::middleware(['auth'])->group(function () {

        //HOME USUÁRIO
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
        Route::get( '/postagem', [PostagemController::class, 'index'])->name('postagem.index');
        // Create (Criar)
        Route::get( '/postagem/create', [PostagemController::class, 'create'])->name('postagem.create');
        //Inserção da postagem
        Route::post( '/postagem', [PostagemController::class, 'store'])->name('postagem.store');
        // Visualizar
        Route::get( '/postagem/{id}', [PostagemController::class, 'show'])->name('postagem.show');
        // Editar
        Route::get( '/postagem/{id}/edit', [PostagemController::class, 'edit'])->name('postagem.edit');
        // Méthod PUT
        Route::put( '/postagem/{id}', [PostagemController::class, 'update'])->name('postagem.update');
        // Delete
        Route::delete( '/postagem/{id}', [PostagemController::class, 'destroy'])->name('postagem.destroy');

        // ADMIN/ALTERAR SENHA
        Route::get( '/admin/alterarSenha', [UserController::class, 'alterarSenha'])->name('admin.alterarSenha');
        //envio de nova senha
        Route::put( '/admin/updateSenha', [UserController::class, 'updateSenha'])->name('admin.updateSenha');

// FECHAMENTO DE AUTENTICAÇÃO - SENHA (Faz com que só quem estiver logado consiga acessar as informações)
});