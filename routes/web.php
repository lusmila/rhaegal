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

Route::get('/','HomeController@index')->name('home.index');

Route::get('/Catalogo','CatalogosController@index')->name('catalogo.index');
Route::get('/Catalogos/{id}','CatalogosController@producto')->name('catalogo.producto');
Route::get('/Informacion/{id}','CatalogosController@informacion')->name('catalogo.informacion');
Route::post('/buscador','CatalogosController@buscador');
Route::post('/correo','HomeController@correo')->name('home.correo');
Route::post('/new','HomeController@new')->name('home.new');
Route::post('/cambio_color','CatalogosController@color');