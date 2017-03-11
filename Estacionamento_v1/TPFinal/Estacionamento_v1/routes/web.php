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

Auth::routes();

Route::get('/home', 'HomeController@index');
/*
Route::get('veiculos/index',['as'=>'veiculos.index','uses'=>'VeiculosController@index']);//->middleware('auth');
Route::get('veiculos/create',['as'=>'veiculos.create','uses'=>'VeiculosController@create']);//->middleware('auth');
Route::post('veiculos/store',['as'=>'veiculos.store','uses'=>'VeiculosController@store']);//->middleware('auth');
Route::get('veiculos/edit/{id}',['as'=>'veiculos.edit','uses'=>'VeiculosController@edit']);//->middleware('auth');
Route::put('veiculos/update/{id}',['as'=>'veiculos.update','uses'=>'VeiculosController@update']);//->middleware('auth');
Route::get('veiculos/destroy/{id}',['as'=>'veiculos.destroy','uses'=>'VeiculosController@destroy']);//->middleware('auth');*/
Route::get('veiculos/finalizar/{id}',['as'=>'veiculos.finalizar','uses'=>'VeiculosController@finalizar']);//->middleware('auth');


Route::resource('veiculos', 'VeiculosController');
//Route::resource('relatorios', 'RelatorioController');
//Rotas Personalizadas para Relatorios
Route::get('relatorios/meses',['as'=>'relatorios.meses','uses'=>'RelatorioController@mes']);//->middleware('auth');
Route::get('relatorios',['as'=>'relatorios.index','uses'=>'RelatorioController@index']);//->middleware('auth');
Route::get('relatorios/total',['as'=>'relatorios.total','uses'=>'RelatorioController@show']);//->middleware('auth');
Route::get('relatorios/relatoriomes/{id}',['as'=>'relatorios.relatoriomes','uses'=>'RelatorioController@relatoriomes']);//->middleware('auth');
Route::get('relatorios/dia',['as'=>'relatorios.relatoriodia','uses'=>'RelatorioController@relatoriodia']);//->middleware('auth');
Route::get('relatorios/anos',['as'=>'relatorios.anos','uses'=>'RelatorioController@anos']);//->middleware('auth');
Route::get('relatorios/relatorioanos/{id}',['as'=>'relatorios.relatorioanos','uses'=>'RelatorioController@relatorioanos']);//->middleware('auth');








