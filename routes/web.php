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

//Route::get('/home', function () {
//    return view('welcome');
//});



//Route::view('/jogos', 'jogos');
 

//Route::get('/jogos', function(){
//   return "Curso de laravel";
// });


//enviando variavel estatica
//Route::view('/jogos', 'jogos', ['name'=>'GTA']);

//variavel dinamica opcional -> variavel dinamica fica como um parametro dentro da url
//passamos um parametro na url opcional ({name?}). Se for informado, esse valor será passado para a function, que atribuirá esse valor a variavel nomeJogo, exibido na view jogos 

//Route::get('/jogos/{id?}/{name?}', function($id=null, $name=null){
//    return view ( 'jogos', ['idJogo'=>$id, 'nomeJogo'=> $name]);
//})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);
//filtro para receber apenas letras e apenas numeros nos seus respectivos parametros 

Route::get('/jogos', function(){
  return view('jogos');
});

Route::get('/home', function(){
  return view('welcome');
})->name('home-index'); //dando nome pra view welcome, que pode ser usado para chamar a view a partir de um botao 