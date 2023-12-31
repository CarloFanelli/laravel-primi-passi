<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $name = 'Carlo';
    $surname = 'Fanelli';
    return view(
        'home',
        ['name' => $name],
        ['surname' => $surname]
    );
});

Route::get('/contact', function () {
    $email = 'Carlo@email.it';
    return view(
        'contact',
        ['email' => $email]
    );
});
