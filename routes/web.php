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

/** GOOGLE AUTH */
Route::get('/auth/google/redirect', [AuthBlogController::class, 'redirect'])->name('auth.google.redirect');
Route::get('/auth/google/callback', [AuthBlogController::class, 'callback'])->name('auth.google.callback');


/** SEE POSTS */
Route::get('/post/{slug}', [BlogController::class, 'showPost'])->name('blog.post');

/** SEE CATEGORIES */
Route::get('/categories', [BlogController::class, 'viewAllCategories'])->name('blog.categories');

/** CONTACT PAGE */
Route::get('/contact', [BlogController::class, 'contact'])->name('blog.contact');
