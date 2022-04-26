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
})->name('home');

Route::get('/uno', function () {
    return view('uno');
})->name('uno');

Route::get('/due', function () {
    return view('due');
})->name('due');

Route::get('/tre', function () {
    return view('tre');
})->name('tre');

Route::get('/quattro', function () {
    return view('quattro');
})->name('quattro');