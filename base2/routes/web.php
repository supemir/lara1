<?php

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

Route::get('/fataye', function  () {
 
    return  "abdo fataye";
})->middleware('auth');

Route::get('personne/{nom}/{age}', function ($nom,$age) {
    return "salut $nom , tu as $age ans    ";
})->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
