<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;

Route::get('/post', [PostController::class, 'index'])->name('posts.all');  
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create'); 
Route::post('/post', [PostController::class, 'store'])->name('posts.store');
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/post/{title}', [PostController::class, 'show'])->name('posts.detail');
Route::put('/post/{id}', [PostController::class, 'update'])->name('posts.update');  
Route::delete('/post/{id}/destroy', [PostController::class, 'destroy'])->name('posts.delete');
