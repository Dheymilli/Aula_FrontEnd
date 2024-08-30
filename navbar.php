<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício Bootstrap</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <!--Início da NavBar-->
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> <img src="./img/logo.jpeg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Nosso Sol</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Orçamentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Fale Conosco</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Instalações</a>
              </li>
            </ul>
          </div>
          <div class="text-end">
            <a href="login.html"><button type="button" class="btn btn-success me-2">Login</button></a>
            <a href="cadastro.html"><button type="button" class="btn btn-warning">Cadastro</button></a>
                </div>
        </div>
      </nav>
     <!--Fim do NavBar-->