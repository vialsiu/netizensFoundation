<?php

use App\Http\Controllers\AuthBlogController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/** HOMEPAGE */
Route::get('/', [BlogController::class, 'home'])->name('blog.home');

/** LOGIN AND REGISTER */
Route::get('/login', [AuthBlogController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthBlogController::class, 'loginAction'])->name('auth.loginAction');

Route::get('/register', [AuthBlogController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthBlogController::class, 'registerAction'])->name('auth.registerAction');

Route::get('/logout', [AuthBlogController::class, 'logout'])->name('auth.logout');

/** SEE POSTS */
Route::get('/post/{slug}', [BlogController::class, 'showPost'])->name('blog.post');
