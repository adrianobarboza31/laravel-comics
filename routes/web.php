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
    return view('home');
})->name('home');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/prodotti', function () {
    $prodotti = config('pasta.pasta');
    // dd(compact('prodotti'));
    return view('prodotti', compact('prodotti'));
})->name('prodotti');
