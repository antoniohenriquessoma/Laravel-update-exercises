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

Route::get('/', 'App\Http\Controllers\IndexController@index')->name('site.index');
Route::get('/login', 'App\Http\Controllers\LoginController@login')->name('site.login');;
Route::get('/contacto', 'App\Http\Controllers\ContactoController@contacto')->name('site.contacto');;
Route::get('/sobrenos', 'App\Http\Controllers\SobrenosController@sobrenos')->name('site.sobrenos');;


Route::prefix('app')->group(function () {
    Route::get('/clientes', 'App\Http\Controllers\ClientesController@clientes')->name('app.clientes');
    Route::get('/fornecedores', 'App\Http\Controllers\FornecedoresController@fornecedores')->name('app.fornecedores');
    Route::get('/produtos', 'App\Http\Controllers\ProdutosController@produtos')->name('app.produtos');

});


Route::fallback(function () {
  echo "<h1> A PAGINA SOLICITADA NÃO EXISTE ".  " </h1>"; 
      return redirect()->route('site.index');
});