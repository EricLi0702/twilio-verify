<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
<<<<<<< HEAD
})->name('register');

Route::get('/verify', function () {
    return view('auth.verify');
})->name('verify');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::post('/', 'AuthController@create')->name('register');
Route::post('/verify', 'AuthController@verify')->name('verify');
=======
});
Route::get('/verify', function () {
    return view('verify');
});
>>>>>>> 549ae26b94a29def8c9e416aa83518aff55ed8c2
