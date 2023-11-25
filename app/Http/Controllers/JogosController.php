<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        $jogos = Jogo::all(); //pega todos campos e registros da tabela 
        
        return view ( 'jogos.index', ['jogos'=>$jogos]  );
    }
}
