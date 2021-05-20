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
    <div class="container" id="container-meio">
        <div class="row justify-content-center">
            <div class="col-md-6 border rounded" id="container-center">
                <div class="text-center py-2">
                    <h3>Acesse sua conta</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <form action="{{ route('principal') }}" method="POST" class="form-group">
                        {{ csrf_field() }}
                            <label for="username" class="px-2">Nome de usuário</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Nome de usuário">
                            <label for="password" class="px-2 mt-3">Senha</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                            <button type="submit" class="form-control btn btn-secondary mt-4">Entrar</button>
                        </form>
                        <div class="text-center my-2">
                            <a class="link">Registrar-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="bg-dark py-2 text-center text-light">
    <h5 class="text-secondary">FindCollab</h5>
    <p class="text-muted">Copyright 2021 - Todos os direitos Reservados</p>
</footer>
