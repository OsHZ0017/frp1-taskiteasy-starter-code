<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;

/**
 * Basic information like the Home page and About page
 */
Route::get('/', [InfoController::class, 'home'])->name('home');
Route::get('/about', [InfoController::class, 'about'])->name('about');

/**
 * Everything to do with tasks
 */
Route::get('/task', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.show');

/**
 * Everything to do with posts
 */
Route::get('/blog', [PostController::class, 'index'])->name('post.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('post.create');
Route::post('/blog', [PostController::class, 'store'])->name('post.store');
Route::get('/blog/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/blog/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/blog/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/blog/{id}', [PostController::class, 'delete'])->name('post.delete');

Route::resource('projects', ProjectController::class);
