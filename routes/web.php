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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/nombre', function () {
    return view('diario');
});*/

Route::get('/', 'HomeController@welcome')->name('welcome');

Route::get('/diario', 'HomeController@diario')->name('diario');

Route::get('/juan', 'HomeController@juan')->name('juan');

Route::resource('/blog', 'Postcontroller');