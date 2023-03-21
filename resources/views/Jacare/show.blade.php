<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Jacaré unico</title>
        @vite(['resources/scss/app.scss'])
    </head>
    <body>
        <div class="form">
            <h1>Vizualização dos Jacarés</h1><br> <br>

            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nome: </strong> {{$jacare->nome}} </li>
                <li class="list-group-item"> <strong>Peso: </strong>{{$jacare->peso}}<strong> kg</strong> </li>
                <li class="list-group-item"><strong>Sexo: </strong>{{$jacare->sexo}}</li>
                <li class="list-group-item"><strong>Tamanho: </strong>{{$jacare->tamanho}}<strong> m</strong></li>
                <li class="list-group-item"><strong>Vacinado: </strong>{{$jacare->vacinado}}</li>
            </ul>

          <button type="button" class="btn btn-outline-warning"><a href="{{route('jacare.index')}}">voltar para lista de Jacarés</a></button>
        </div>
    </body>
</html>
