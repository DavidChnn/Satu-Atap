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
    return view('landingPage');
});

Route::get('/landingPageLogged', function () {
    return view('landingPageLogged');
});

Route::get('/Login', function () {
    return view('login');
});

Route::get('/Register', function () {
    return view('register');
});