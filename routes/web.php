<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivroController;
use App\Http\Controllers\FuncionarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livros', [LivroController::class, 'index'])->name('livro.index');
Route::get('/livro/create', [LivroController::class, 'create'])->name('livro.create');
Route::post('/livro/store', [LivroController::class, 'store'])->name('livro.store');
Route::get('/livro/edit/{id}', [LivroController::class, 'edit'])->name('livro.edit');
Route::put('/livro/update/{id}', [LivroController::class, 'update'])->name('livro.update');
Route::delete('/livro/destroy/{id}', [LivroController::class, 'destroy'])->name('livro.destroy');

Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('funcionario.index');
Route::get('/funcionario/create', [FuncionarioController::class, 'create'])->name('funcionario.create');
Route::post('/funcionario/store', [FuncionarioController::class, 'store'])->name('funcionario.store');
Route::get('/funcionario/edit/{id}', [FuncionarioController::class, 'edit'])->name('funcionario.edit');
Route::put('/funcionario/update/{id}', [FuncionarioController::class, 'update'])->name('funcionario.update');
Route::delete('/funcionario/destroy/{id}', [FuncionarioController::class, 'destroy'])->name('funcionario.destroy');
