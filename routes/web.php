<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatti', function () {
    return view('contatti', ['title' => 'Contacts us in this email: _____@gmail.com!']);
});

Route::get('/chi-sono', function () {
    return view('chi-sono', [
        'h1title' => 'Who are we and what do we do?',
        'descrizione' => 'Our group deals with web development, we are specialized in the sector for over 45 years, we work with seriousness and professionalism without ever lacking in humility.'
    ]);
});

