<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/', \App\Http\Controllers\PostController::class);

Route::get('/kuis2', [PostController::class, 'index'])->name('posts.index');
Route::get('/kuis2/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/kuis2', [PostController::class, 'store'])->name('posts.store');
Route::post('/kuis2', [PostController::class, 'showe'])->name('posts.show');
Route::get('/kuis2/destroy/{id}', [PostController::class, 'destroy'])->name('posts.destroy');