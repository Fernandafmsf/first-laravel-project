
@extends('layouts.app')<!--Herdando o que tem em layouts.app-->

@section('title', 'Listagem')

@section('content')
 <!--Tudo aqui dentro será renderizado lá no template (layouts.app)-->
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




  