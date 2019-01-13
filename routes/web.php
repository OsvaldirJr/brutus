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
Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/dasboard', function () {
    return view('dashboard.relatorio');
});
Route::get('/saida', function () {
    return view('dashboard.saida');
});
Route::get('/funcionarios', function () {
    return view('dashboard.funcionario');
});
Route::post('/funcionarios', 'FuncionarioController@setFuncionario');

Route::get('/produtos', function () {
    return view('dashboard.produto');
});
Route::get('/servicos', function () {
    return view('dashboard.servico');
});