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
            <h1>Vizualização do Jacaré</h1><br> <br>
                <hr>
                <div>
                    <h1><strong>nome: </strong> {{$jacare->nome}}</h1>
                    <p><strong>peso: </strong> {{$jacare->peso}}</p>
                    <p><strong>sexo: </strong> {{$jacare->sexo}}</p>
                    <p><strong>tamanho: </strong>{{$jacare->tamanho}}</p>
                    <p><strong>vacinado?: </strong>{{$jacare->vacinado}}</p>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-warning"><a href="{{route('jacare.index')}}">voltar para lista de Jacarés</a></button>
                </div>
        </div>
    </body>
</html>
