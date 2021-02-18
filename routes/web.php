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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function(){
    Route::resource('Item','ItemController');

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/contato', function () {
        return view('contato');
    });


    Route::get('/carrinho', function()
    {
        return view('carrinho');
    });

    Route::get('/sobre', function () {
        return view('sobre');
    });
});



