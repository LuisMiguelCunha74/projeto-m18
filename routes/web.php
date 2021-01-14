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

Route::get('/Filmes/{num}/show', 'App\Http\Controllers\FilmesController@show')->name('Filmes.show');

Route::get('/Filmes/create', 'App\Http\Controllers\FilmesController@create')->name('filmes.create');

Route::post('/Filmes', 'App\Http\Controllers\FilmesController@store')->name('filmes.store');

Route::get('/Filmes/{num}/edit', 'App\Http\Controllers\FilmesController@edit')->name('filmes.edit');

Route::patch('/Filmes', 'App\Http\Controllers\FilmesController@update')->name('filmes.update');

Route::get('Filmes/{num}/delete', 'App\Http\Controllers\FilmesController@delete')->name('filmes.delete');

Route::delete('/Filmes', 'App\Http\Controllers\FilmesController@destroy')->name('filmes.destroy');

//generos
Route::get('/Generos', 'App\Http\Controllers\GenerosController@index')->name('Generos.index');

Route::get('/Generos/{num}/show', 'App\Http\Controllers\GenerosController@show')->name('Generos.show');

Route::get('/Generos/create', 'App\Http\Controllers\GenerosController@create')->name('generos.create');

Route::post('/Generos', 'App\Http\Controllers\GenerosController@store')->name('generos.store');

Route::get('/Generos/{num}/edit', 'App\Http\Controllers\GenerosController@edit')->name('generos.edit');

Route::patch('/Generos', 'App\Http\Controllers\GenerosController@update')->name('generos.update');

Route::get('Generos/{num}/delete', 'App\Http\Controllers\GenerosController@delete')->name('generos.delete');

Route::delete('/Generos', 'App\Http\Controllers\GenerosController@destroy')->name('generos.destroy');
