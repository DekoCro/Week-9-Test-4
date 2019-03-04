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
    return view('homepage');
})->name('homepage');

Auth::routes();

Route::get('/hero/{hero_slug}' , 'HeroController@show')->name('show');

Route::get('/hero' , 'HeroController@index');

Route::get('/hero/{hero_slug}/emergency', 'HeroController@create')->name('emergency.create');
Route::post('/hero/{hero_slug}' , 'HeroController@store')->name('emergency.store');



