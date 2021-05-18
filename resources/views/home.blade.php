<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FindColab</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ftco-navbar-light py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">FindCollab</a>
            <div class="navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item active px-2 mx-1"><a class="nav-link" href="{{ route('register') }}">Registrar-se</a></li>
                    <li class="nav-item active px-2 mx-1"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section>
    <div class="container" id="container">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-md-6" id="container-center" >
                <div class="row justify-content-center">
                    <button type="button" class="col-3 btn btn-outline-dark btn-lg px-2 mx-1">Canditado</button>
                    <button type="button" class="col-3 btn btn-outline-dark btn-lg px-2 mx-1">Empresa</button>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="bg-dark py-2 text-center text-light">
    <h5 class="text-secondary">FindCollab</h5>
    <p class="text-muted">Copyright 2021 - Todos os direitos Reservados</p>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
