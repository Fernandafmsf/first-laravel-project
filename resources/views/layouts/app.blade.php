<!--Nesse arquivo definimos uma estrutura basica para as telas e o conteudo vai ser definido na tela propriamente dita-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>@yield('title') - GN </title>
</head>
<body>
  
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid m-2">
      <a class="navbar-brand" href="/jogos">Cadastro de Jogos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class=" navbar-collapse collapse" id="navbarNav">
  
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/home">Listar</a>
          </li>
          
        </ul>
  
      </div>
    </div>
  </nav>
 
  @yield('content')
  
</body>
</html>

