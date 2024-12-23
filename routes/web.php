<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/blog/create', [PostController::Class, 'create']);
Route::post('/blog', [PostController::Class, 'store']);
Route::patch('/blog/{post}', [PostController::Class, 'update']);
Route::delete('/blog/{post}', [PostController::Class, 'destroy']);
Route::get('/blog/{post}', [PostController::Class, 'show']);
Route::get('/edit/{post}', [PostController::Class, 'edit']);
Route::get('/blog', [PostController::class, 'index']);

Route::get('/register', [RegisterUserController::Class, 'create']);
Route::post('/register', [RegisterUserController::Class, 'store']);

Route::get('/login', [SessionController::Class, 'create']);
Route::post('/login', [SessionController::Class, 'store']);