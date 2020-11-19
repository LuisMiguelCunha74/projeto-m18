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

Route::get('/Atores', 'App\Http\Controllers\AtoresController@index')->name('Atores.index');

Route::get('/Atores/{num}/show', 'App\Http\Controllers\AtoresController@show')->name('Atores.show');

Route::get('/Filmes', 'App\Http\Controllers\FilmesController@index')->name('Filmes.index');

Route::get('/Filmes/{numero}/show', 'App\Http\Controllers\FilmesController@show')->name('Filmes.show');

Route::get('/Generos', 'App\Http\Controllers\GenerosController@index')->name('Generos.index');

Route::get('/Generos/{numero}/show', 'App\Http\Controllers\GenerosController@show')->name('Generos.show');
