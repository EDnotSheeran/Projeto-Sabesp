<?php

use Illuminate\Support\Facades\Route;

//#ACESSANDO DIRETO DA ROTA
// Route::get('users', function () {
//     return view('users.index');
// });

//#ACESSANDO PELO CONTROLLER
Route::get('users', 'UserController@index')->name('users.index');
Route::get('users/create', 'UserController@create')->name('users.create');
Route::post('users', 'UserController@store')->name('users.store');
Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::put('users/{id}', 'UserController@update')->name('users.update');
Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy');

//#EXEMPLO DE ROTAS GET COM PARÂMETROS
// Route::get('/name/{name}', function($name) {
//     return 'Meu nome é ' . $name;
// });

// Route::get('/soma/{num1}/{num2}/{num3}', function ($num1, $num2, $num3) {
//     return 'soma: ' . ($num1 + $num2 + $num3);
// });

// Route::get('/users', function () {
//     return 'página de usuários';
// });

// Route::get('/products', function () {
//     return 'página de produtos';
// });

/*
GET => acessar pela URL
POST => enviar dados (ex: formulários)
PUT => atualizar dados
DELETE => deletar dados
*/
