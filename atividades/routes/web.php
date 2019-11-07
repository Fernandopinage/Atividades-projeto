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

/*

Route::get('/', function () {
    return view('welcome');
});
*/
//////////////////////////////////////////////////////////////
//rota de acesso a tela de login

use App\Http\Controllers\loginController;

route::get('/', 'loginController@login');
//validando login
route::post('validando','loginController@validandoLogin');
//////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////
//rota de acesso a tela home
route::get('home','homeController@home');
route::post('/validar','homeController@validarHome');
//////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////
// rota da tela atividades
route::get('atividade','atividadeController@atividade');