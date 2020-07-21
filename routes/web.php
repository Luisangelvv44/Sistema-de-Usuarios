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

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::resource('usuarios', 'UserController')->middleware('auth');
Route::resource('roles', 'RoleController')->middleware('auth');

//seccion de Notas

Route::resource('/notas/todas', 'NotasController')->middleware('auth');
Route::get('/notas/favoritas', 'NotasController@favoritas')->middleware('auth');
Route::get('/notas/archivadas', 'NotasController@archivadas')->middleware('auth');