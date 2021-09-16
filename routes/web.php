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

Route::get('/', '\App\Http\Controllers\PrincipalController@getViewPrincipal')->name('site.principal');

Route::get('/sobrenos', '\App\Http\Controllers\SobrenosController@getViewSobrenos' )->name('site.sobrenos');

Route::get('/contato', '\App\Http\Controllers\ContatoController@getViewContato' )->name('site.contato');
Route::post('/contato', '\App\Http\Controllers\ContatoController@getViewContato' )->name('site.contato');

Route::get('/login', function () { return "Página de login"; })->name('site.login');

//app
Route::prefix('app')->group( function () {
    Route::get('/clientes', function () { return "Clientes"; })->name('app.clientes');
    Route::get('/fornecedores', '\App\Http\Controllers\FornecedorController@getViewFornecedor' )->name('app.fornecedores');
    Route::get('/produtos', function () { return "Produtos"; })->name('app.produtos');
});

Route::fallback(function () {
    return '<h2>Página não encontrada. <a href="'.route('site.principal').'">Clique aqui</a> para retornar a página principal.</h2>';
});