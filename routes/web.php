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

//Pasando la logica de nuetras vista a los controladores
//vistas sin parametros
Route::get('/', ['as'=>'home', 'uses' => 'Pagescontroller@home']);
Route::get('contactos', ['as'=>'contactos', 'uses' => 'Pagescontroller@contactos']);
//vistas con parametros
Route::get('saludos/{nombre?}', ['as'=>'saludos', 'uses' => 'Pagescontroller@saludos'])->where('nombre','[A-Za-a]+');
