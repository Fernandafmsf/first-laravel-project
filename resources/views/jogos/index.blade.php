
@extends('layouts.app')<!--Herdando o que tem em layouts.app-->

@section('title', 'Listagem')

@section('content')
 <!--Tudo aqui dentro será renderizado lá no template (layouts.app)-->

 <h2 class="container-md" >Bem vindo!</h2>
 <p class=" container-md">Aqui é possível armazenar seus jogos favoritos! Adicione o nome, ano que jogou pela primeira vez e comentários!Não se esqueça de mencionar o que mais gostou!
  </p>


  <form method= "POST" class="container-md">
    <div class="mb-3">
      <label for="nome">Nome do jogo: </label>
      <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
      <label for="ano">Ano de criaçao: </label>
      <input type="date" name="ano_criacao" class="form-control">
    </div>

    <div class="mb-3">
      <label for="comentario">Valor: </label>
      <input type="number" name="valor" class="form-control">
    </div>
  </form>


  <h2 class="container">Listagem de jogos</h2>
  <table class="table container">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ano de Criaçao</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <tbody>
    @foreach($jogos as $jogo)
      <tr>
        <th scope="row">{{$jogo->id}}</th>
        <td>{{$jogo->nome}}</td>
        <td>{{$jogo->categoria}}</td>
        <td>{{$jogo->ano_criacao}}</td>
        <td>{{$jogo->valor}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>



@endsection




  