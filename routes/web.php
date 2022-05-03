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
    $data = [
        'txt' => 'Hello, world!'
    ];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    $data = [
        'txt' => 'About Us'
    ];
    return view('about', $data);
})->name('about');

Route::get('/contact', function () {
    $data = [
        'txt' => 'Contact Us'
    ];
    return view('contact', $data);
})->name('contact');

