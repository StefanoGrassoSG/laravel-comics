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
<<<<<<< HEAD
    $comics = config('comics');
    $nav = config('headernav');
   
    return view('home', [
        'nav' => $nav
    ]);
});

Route::get('/news', function() {
    $comics = config('comics');
    $nav = config('headernav');
   
    return view('news', [
        'nav' => $nav
    ]);
=======
    return view('home');
});

Route::get('/about', function() {
    return view('about');
>>>>>>> 3b62eab80cee43f9a004be450b1c42f6e2084e89
});
