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
Route::prefix('jogos')->group(function(){
  Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
  
  Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
  
  Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
  
  Route::get('/{id}/edit',[JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
  
  Route::put ('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
});
//regex -> where('id', '[0-9]+'), garante que id seja sempre um numero entre 0 e 9 ou mais caracteres
//seguindo padrao 

Route::fallback(function(){
  return "Erro!";
}); //retorna erro

