@extends('layouts.app')

@section('title', 'Edição')

@section('content')

<div class="container mt-5">

  <h2 class="container-md">Editar jogo</h2>

  <form method="POST" action="{{ route('jogos-update', ['id'=>$jogos->id]) }}" class="container-md">
    @csrf <!--Segurança no formulario, usa tokens -->
    @method('PUT')
    <div class="mb-3">
      <label for="nome">Nome do jogo: </label>
      <input type="text" name="nome" placeholder="Digite um nome..." class="form-control" value="{{$jogos->nome}}">
    </div>

    <div class="mb-3">
      <label for="categoria">Categoria: </label>
      <input type="text" name="categoria" class="form-control" value="{{$jogos->categoria}}">
    </div>

    <div class="mb-3">
      <label for="ano_criacao">Ano de criaçao: </label>
      <input type="number" name="ano_criacao" class="form-control" value="{{$jogos->ano_criacao}}">
    </div>

    <div class="mb-3">
      <label for="valor">Valor: </label>
      <input type="number" name="valor" class="form-control" value="{{$jogos->valor}}">
    </div>

    <div class="mb-3">
      <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
    </div>
  </form>
</div>

@endsection