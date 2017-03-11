<?php

use App\Http\Controllers;
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



Route::get('/eventos',['as'=>'eventos.index','uses'=>'EventosController@index']);//eventos


//Rotas Administrador





Auth::routes();

Route::get('/auth/atleta/login', 'HomeController@atletalogin');


Route::get('/auth/login', 'HomeController@login');

Route::get('/auth/register', 'HomeController@register');


    Route::get('admin/eventos/index',['as'=>'admin.eventos.index','uses'=>'EventosAdminController@index']);//->middleware('auth');
Route::get('admin/eventos/registros',['as'=>'admin.eventos.registros','uses'=>'EventosController@registros']);//->middleware('auth');
Route::get('admin/eventos/create',['as'=>'admin.eventos.create','uses'=>'EventosAdminController@create']);//->middleware('auth');
Route::post('admin/eventos/store',['as'=>'admin.eventos.store','uses'=>'EventosAdminController@store']);//->middleware('auth');
Route::get('admin/eventos/edit/{id}',['as'=>'admin.eventos.edit','uses'=>'EventosAdminController@edit']);//->middleware('auth');
Route::put('admin/eventos/update/{id}',['as'=>'admin.eventos.update','uses'=>'EventosAdminController@update']);//->middleware('auth');
Route::get('admin/eventos/destroy/{id}',['as'=>'admin.eventos.destroy','uses'=>'EventosAdminController@destroy']);//->middleware('auth');
Route::get('admin/atletas',['as'=>'admin.atletas','uses'=>'AtletaController@atletas']);//->middleware('auth');

Auth::routes();

Route::get('/eventos', 'EventosController@index');
