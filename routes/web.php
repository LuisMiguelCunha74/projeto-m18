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

//Atores
Route::get('/Atores', 'App\Http\Controllers\AtoresController@index')->name('Atores.index');

Route::get('/Atores/{num}/show', 'App\Http\Controllers\AtoresController@show')->name('Atores.show');

Route::get('/Atores/create', 'App\Http\Controllers\AtoresController@create')->name('atores.create');

Route::post('/Atores', 'App\Http\Controllers\AtoresController@store')->name('atores.store');

Route::get('/Atores/{num}/edit', 'App\Http\Controllers\AtoresController@edit')->name('atores.edit');

Route::patch('/Atores', 'App\Http\Controllers\AtoresController@update')->name('atores.update');

Route::get('Atores/{num}/delete', 'App\Http\Controllers\AtoresController@delete')->name('atores.delete');

Route::delete('/Atores', 'App\Http\Controllers\AtoresController@destroy')->name('atores.destroy');
    
//Filmes
Route::get('/Filmes', 'App\Http\Controllers\FilmesController@index')->name('Filmes.index');

Route::get('/Filmes/{numero}/show', 'App\Http\Controllers\FilmesController@show')->name('Filmes.show');



//generos
Route::get('/Generos', 'App\Http\Controllers\GenerosController@index')->name('Generos.index');

Route::get('/Generos/{numero}/show', 'App\Http\Controllers\GenerosController@show')->name('Generos.show');
