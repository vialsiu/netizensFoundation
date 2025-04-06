<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'home'])->name('blog.home');

Route::get('/post/{slug}', [BlogController::class, 'showPost'])->name('blog.post');
