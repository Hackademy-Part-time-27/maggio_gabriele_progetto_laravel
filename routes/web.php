<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,'homePage'])->name('welcome');

Route::get('/contacts',[ContactController::class,'viewForm'] )->name('contacts');
Route::post('/contacts/send',[ContactController::class,'send'] )->name('contacts.send');

Route::get('/about-me',[PageController::class,'aboutMe'])->name('about-me');


Route::get('/articles',[PageController::class,'articles'])->name('articles');

Route::get('/articolo/{article?}',[PageController::class,'article'])->name('article');
