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

Route::get('/', function(){
    return view('fullname');
})->name('fullname');

Route::get('/age', function(){
    return view('age');
})->name('age');

Route::get('/hobby', function(){
    return view('hobby');
})->name('hobby');

Route::get('/city', function(){
    return view('city');
})->name('city');

Route::get('/country', function(){
    return view('country');
})->name('country');
