
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

    <div class="container">
        <div class="row justify-content-center py-5 border-bottom">
            <h4>FindCollab</h4>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{ route('usuario_create') }}" class="btn btn-link">Novo</a>
            </div>
        </div>

        @foreach($candidatos as $candidato)
            <div class="row justify-content-center my-1 pt-3 px-3 border card-empresa">
                <div class=col-12>
                    <div class="row">
                        <h3 class="col-8 d-inline">
                            <a href="{{ route('usuario_show', ['id' => $candidato->codigo]) }}" class="text-dark text">{{ $candidato->nome }}</a>
                        </h3>
                        <span class="col-4 d-inline float-right text-right pt-2">{{ $candidato->cnpj_empresa }}</span>
                    </div>
                    <div class="row">
                        <p class="col-8 d-inline pt-2">{{ $candidato->area_atuacao }}</p>
                        <p class="col-4 d-inline float-right text-right pt-2">{{ $candidato->rua.", ".$candidato->numero." - ".$candidato->cidade }}</p>
                    </div>
                </div>
            </div>
        @endforeach
</section>

</body>
</html>
