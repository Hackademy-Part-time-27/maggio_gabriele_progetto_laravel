<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'homePage'])->name('welcome');

Route::get('/contacts',[PageController::class,'contacts'] )->name('contacts');

Route::get('/about-me',[PageController::class,'aboutMe'])->name('about-me');


Route::get('/articles',[PageController::class,'articles'])->name('articles');

Route::get('/articolo/{article?}',[PageController::class,'article'])->name('article');
