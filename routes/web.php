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


Auth::routes();
Route::middleware('auth')->group(function (){
    Route::get('/dashboard', 'dashboard@index')->name('dashboard.index');
    Route::get('/', function () {
        return view('welcome');
    });    
    Route::resource('/users', 'UserController');
    Route::resource('/roles', 'RoleController');
    Route::resource('/clientes', 'ClienteController');
    Route::resource('/compras', 'CompraController');
    Route::resource('/vendas', 'VendaController');
    Route::resource('/produtos', 'ProdutoController');
    Route::resource('/fornecedors', 'FornecedorController');
    Route::resource('/departaments','DepartamentController');
    Route::resource('/categories' , 'CategoryController')->except('show');

});