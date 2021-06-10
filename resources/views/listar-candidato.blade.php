
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilo.css">
</head>
<body>

<section>

    <div class="content">
        <div class="row justify-content-center py-5 border-bottom">
            <input type="text" name="nomeEmpresa" id="nomeEmpresa" class="col-10 border border-secondary rounded py-2 d-inline" />
            <button class="btn btn-primary rounded bg-dark px-4 py-2 mx-1 d-inline">Buscar</button>
        </div>

        @foreach($candidatos as $candidato)
            <div class="row justify-content-center mt-5 pt-3 px-3 border card-empresa">
                <div class=col-12>
                    <div class="row">
                        <h3 class="col-8 d-inline"><a href="/empresa/cadastro" class="text-dark text"></a></h3>
                        <span class="col-4 d-inline float-right text-right pt-2">{{ $candidato->cnpj_empresa }}</span>
                    </div>
                    <div class="row">
                        <p class="col-8 d-inline pt-2">Descricao</p>
                        <p class="col-4 d-inline float-right text-right pt-2">Joaquim Marques Guimaro - 269 - Santa cruz</p>
                        <a href="{{ route('usuario_edit', ['id' => $candidato->codigo]) }}">Editar</a>
                    </div>
                </div>
            </div>
        @endforeach
</section>

</body>
</html>
