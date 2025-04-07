<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;

// Página principal: listado de libros
Route::get('/', [BookController::class, 'index'])->name('home');

// Rutas para autores y editoriales
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/publishers', [PublisherController::class, 'index'])->name('publishers.index');
Route::get('/books', [BookController::class, 'index'])->name('books.index');