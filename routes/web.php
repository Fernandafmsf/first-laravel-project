<?php
use App\Http\Controllers\JogosController;
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


//criando grupo com prefixo jogos -> todas as rotas criadas dentro desse grupo terao o prefixo jogos
Route::group([
  'controller'=> \App\Http\Controllers\JogosController::class,
  'prefix' => 'jogos'
], function()
{
  Route::get('','index')->name('jogos-index');
  Route::get('create','create')->name('jogos-create');
  Route::post('','store')->name('jogos-store');
  Route::get('{id}/edit','edit')->name('jogos-edit');
  Route::put('{id}', 'update')->name('jogos-update');
  Route::delete('{id}', 'destroy')->name('jogos-destroy');

});

//regex -> where('id', '[0-9]+'), garante que id seja sempre um numero entre 0 e 9 ou mais caracteres
//seguindo padrao 

Route::fallback(function(){
  return "Erro!";
}); //retorna erro

