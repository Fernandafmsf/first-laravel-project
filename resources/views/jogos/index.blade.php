
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
      <label for="ano">Ano que jogou: </label>
      <input type="date" name="ano" class="form-control">
    </div>

    <div class="mb-3">
      <label for="comentario">Comentários: </label>
      <textarea name="comentario" cols="30" rows="5" class="form-control" placeholder="Comente sobre o jogo..."></textarea>
    </div>
  </form>


@endsection




  