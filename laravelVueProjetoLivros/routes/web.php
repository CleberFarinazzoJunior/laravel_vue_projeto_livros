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



//Home da aplicação
Route::get('/', function () {
    return view('welcome');
});


//Recursos
Route::resource('livros', 'LivroController');






//Captura de falhas
Route::fallback(function () {
    //TODO: falta criar a view que vou chamar aqui
    //Direcionar para alguma página que seja handler de erros gerais,
    //como 404 e semelhantes
});





