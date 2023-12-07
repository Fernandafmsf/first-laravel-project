<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    //definindo quais colunas da tabela sao preenchiveis 
    protected $fillable = [
        'nome',
        'categoria',
        'ano_criacao',
        'valor',
    ]; 

    public function getRouteKeyName(){
        return 'nome';
    }
}
