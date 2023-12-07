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

    public function create(){
        return view ('jogos.create');

    }

    public function store(Request $request){
        Jogo::create($request->all()); //salvando os dados enviados do form atraves do model 
        return redirect()->route('jogos-index'); //retornando a view 

    }

    public function edit(Jogo $jogo){
        // //$jogos=Jogo::where('id', $id)->first();
        // //if(!empty($jogos)){
        //       return view('jogos.edit', compact('jogo'));
            
        // }else{
        //     return redirect()->route('jogos-index');
        // }

        return view('jogos.edit', compact('jogo'));
        
    }

    public function update(Request $request, Jogo $jogo){
        
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor,

        ];
        $jogo->update($data);
        return redirect()->route('jogos-index');
    }

    public function destroy(Jogo $jogo){
        //Jogo::where('id', $id)->delete();
        $jogo->delete();
        return redirect()->route('jogos-index');
    }
}
