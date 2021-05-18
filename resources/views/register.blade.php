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
                        <form class="form-group">
                            <label for="nome" class="px-2">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
                            <div class="row">
                                <div class="col-6">
                                    <label for="rg" class="px-2 mt-3">RG:</label>
                                    <input type="text" name="rg" id="rg" class="form-control" placeholder="00.000.000-0">
                                </div>
                                <div class="col-6">
                                    <label for="cpf" class="px-2 mt-3">CPF:</label>
                                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00">
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <label for="sexo" class="px-2 mt-2 col-3">Sexo:</label>
                                <div class="form-check form-check-inline col-4">
                                    <input type="radio" name="masc" id="masc" class="form-check-input" value="m" />
                                    <label for="masc" class="form-check-label">Maculino</label>
                                </div>
                                <div class="form-check form-check-inline col-4">
                                    <input type="radio" name="femi" id="femi" class="form-check-input" value="f" />
                                    <label for="femi" class="form-check-label">Feminino</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="dtNasc" class="px-2 mt-3">Data de nascimento:</label>
                                    <input type="date" name="dtNasc" id="dtNasc" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label for="telefone" class="px-2 mt-3">Telefone:</label>
                                    <input type="text" name="telefone" id="telefone" class="form-control" placeholder="(00) 00000-0000">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <label for="logradouro" class="px-2 mt-3">Logradouro:</label>
                                    <input type="text" name="logradouro" id="logradouro" class="form-control" placeholder="Logradouro">
                                </div>
                                <div class="col-2">
                                    <label for="numero" class="px-2 mt-3">N°:</label>
                                    <input type="text" name="numero" id="numero" class="form-control px-2" placeholder="000">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="cep" class="px-2 mt-3">CEP:</label>
                                    <input type="text" name="cep" id="cep" class="form-control" placeholder="00.000-000">
                                </div>
                                <div class="col-7">
                                    <label for="bairro" class="px-2 mt-3">Bairro:</label>
                                    <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <label for="cidade" class="px-2 mt-3">Cidade:</label>
                                    <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade">
                                </div>
                                <div class="col-4">
                                    <label for="estado" class="px-2 mt-3">Estado:</label>
                                    <input type="text" name="estado" id="estado" class="form-control" placeholder="Estado">
                                </div>
                            </div>
                            <label for="email" class="px-2 mt-3">E-mail:</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Exmplo@findcollab.com.br">
                            <div class="row">
                                <div class="col-6">
                                    <label for="senha" class="px-2 mt-3">Senha:</label>
                                    <input type="text" name="senha" id="senha" class="form-control" placeholder="*******">
                                </div>
                                <div class="col-6">
                                    <label for="confSenha" class="px-2 mt-3">Confirmar senha:</label>
                                    <input type="text" name="confSenha" id="confSenha" class="form-control" placeholder="*******">
                                </div>
                            </div>
                            <div class="text-center bg-light d-none mt-3" id="message-error">
                                <span class="text-danger ">Senhas diferentes!</span>
                            </div>
                            <button type="submit" class="form-control btn btn-secondary mt-4">Registrar-se</button>
                        </form>
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
