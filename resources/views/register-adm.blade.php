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
        <div class="row justify-content-center">
            <div class="col-md-6 border rounded my-5" id="container-center">
                <div class="text-center py-2">
                    <h3>Crie sua conta</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <form action="{{ route('adm_store') }}" method="POST" class="form-group">
                        {{ csrf_field() }}
                            <label for="email" class="px-2 mt-3">E-mail:</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Exmplo@findcollab.com.br" value="{{ $adm->email ?? '' }}">
                            <div class="row">
                                <div class="col-6">
                                    <label for="senha" class="px-2 mt-3">Senha:</label>
                                    <input type="password" name="senha" id="senha" class="form-control" placeholder="*******" value="">
                                </div>
                                <div class="col-6">
                                    <label for="confSenha" class="px-2 mt-3">Confirmar senha:</label>
                                    <input type="password" name="confSenha" id="confSenha" class="form-control" placeholder="*******">
                                </div>
                            </div>
                            <div class="text-center bg-light d-none mt-3" id="message-error">
                                <span class="text-danger ">Senhas diferentes!</span>
                            </div>
                            <button type="submit" class="form-control btn btn-secondary mt-4">Salvar</button>
                        </form>

                        @isset($adm)
                            <form action="{{ route('usuario_destroy', ["id" => $adm->codigo]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="form-control btn btn-link">Remover</button>
                            </form>
                        @endisset
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
