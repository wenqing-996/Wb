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
    return view('welcome');
});

Route::get('/someData', function ($someData) {
    return view('welcome', ['someData' => $someData]);
});

Route::get('/home', function () {
    return"This is the home page";
});

Route::get('/anotherhome', function () {
    return"This is the anotherhome page";
});

Route::get('User/{id?}', function ($id = 'wen qing') {
    return"User page".$id;
});