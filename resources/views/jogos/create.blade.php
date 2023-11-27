@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')

<div class="container mt-5">

  <h2 class="container-md">Crie um novo jogo</h2>

  <form method="POST" action="{{route('jogos-store')}}" class="container-md">
    @csrf <!--Segurança no formulario, usa tokens -->
    <div class="mb-3">
      <label for="nome">Nome do jogo: </label>
      <input type="text" name="nome" placeholder="Digite um nome..." class="form-control">
    </div>

    <div class="mb-3">
      <label for="categoria">Categoria: </label>
      <input type="text" name="categoria" class="form-control">
    </div>

    <div class="mb-3">
      <label for="ano_criacao">Ano de criaçao: </label>
      <input type="number" name="ano_criacao" class="form-control">
    </div>

    <div class="mb-3">
      <label for="valor">Valor: </label>
      <input type="number" name="valor" class="form-control">
    </div>

    <div class="mb-3">
      <input type="submit" name="submit" class="btn btn-primary">
    </div>
  </form>
</div>

@endsection