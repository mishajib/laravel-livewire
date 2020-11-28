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
});

Route::view('/livewire', 'livewire');

Route::view('/contact-form', 'contact-form');
Route::view('/count', 'count');

Route::get('/home', \App\Http\Livewire\Home::class);
Route::get('/about', \App\Http\Livewire\About::class);
Route::get('/contact', \App\Http\Livewire\Contact::class);

Auth::routes();

Route::resource('todos', \App\Http\Controllers\TodoController::class);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
