<?php

use Illuminate\Support\Facades\Route;

//#ACESSANDO DIRETO DA ROTA
// Route::get('users', function () {
//     return view('users.index');
// });

//#ACESSANDO PELO CONTROLLER
Route::view('/', 'index')->name('home');
Route::view('report', 'report')->name('report');
Route::view('about', 'about')->name('about');

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
