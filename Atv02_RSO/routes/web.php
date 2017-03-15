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

Route::get('/',['as'=>'home.index','uses'=>'IndexController@index']);//home

Route::get('/produtosall',['as'=>'produtosall.index','uses'=>'ProdutosAllController@index']);//produtos sem login

//, 'middleware'=>'auth' -> colocar em admin
//Rota de Compra

Route::get('/comprar',['as'=>'produtosall.carrinho','uses'=>'ProdutosAllController@comprar']);
//Rotas Administrador

Route::get('admin/produto/index',['as'=>'admin.produtos.index','uses'=>'ProdutosController@index']);//->middleware('auth');
Route::get('admin/produto/create',['as'=>'admin.produtos.create','uses'=>'ProdutosController@create']);//->middleware('auth');
Route::post('admin/produto/store',['as'=>'admin.produtos.store','uses'=>'ProdutosController@store']);//->middleware('auth');
Route::get('admin/produto/edit/{id}',['as'=>'admin.produtos.edit','uses'=>'ProdutosController@edit']);//->middleware('auth');
Route::put('admin/produto/update/{id}',['as'=>'admin.produtos.update','uses'=>'ProdutosController@update']);//->middleware('auth');
Route::get('admin/produto/destroy/{id}',['as'=>'admin.produtos.destroy','uses'=>'ProdutosController@destroy']);//->middleware('auth');

//Rotas Operador
Route::get('operador/produto/index',['as'=>'operador.produtos.index','uses'=>'OperadorProdutosController@index']);
Route::post('operador/produto/store',['as'=>'operador.produtos.store','uses'=>'OperadorProdutosController@store']);
Route::get('operador/produto/edit/{id}',['as'=>'operador.produtos.edit','uses'=>'OperadorProdutosController@edit']);
Route::put('operador/produto/update/{id}',['as'=>'operador.produtos.update','uses'=>'OperadorProdutosController@update']);

//Rotas Cliente
    //Compra
    //Alterar dados pessais -> nome, senha, email
Route::get('cliente/userdata/index',['as'=>'cliente.userdata.index','uses'=>'UserController@index']);
Route::get('cliente/userdata/edit/{id}',['as'=>'cliente.userdata.edit','uses'=>'UserController@edit']);
Route::put('cliente/userdata/update/{id}',['as'=>'cliente.userdata.update','uses'=>'UserController@update']);


//rotas de autenticaçao'


Route::get('/auth/login', 'HomeController@index');

Route::get('/auth/register', 'homeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
