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

    return "home page";
});

Route::prefix('adminPost')->group(function(){
    Route::get('/', 'AdminController@show');
    Route::get('/add', 'AdminController@add');
    Route::get('/edit/{id}', 'AdminController@edit');
    Route::get('/delete/{id}', 'AdminController@delete');

});
