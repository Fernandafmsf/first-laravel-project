<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        //dd("ola mundo"); -> exibe variavel ou mensagem
        $nome = 'Fernanda'; 
        $id=1; //mais seguro passar dados assim visto que nao fica visivel na url 
        return view ( 'jogos.index', ['nome'=>$nome, 'id'=>$id] );
    }
}
