<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Jacaré unico</title>
    </head>
    <body>
        <h1>Vizualização do Jacaré</h1>
            <hr>
            <div>
                <h5><strong>nome: </strong> {{$jacare->nome}}</h1>
                <p><strong>peso: </strong> {{$jacare->peso}}</p>
                <p><strong>sexo: </strong> {{$jacare->sexo}}</p>
                <p><strong>tamanho: </strong>{{$jacare->tamanho}}</p>
                <p>d<strong>vacinado?: </strong>{{$jacare->vacinado}}</p>
            </div>
            <div>
                <a href="{{route('jacare.index')}}">voltar para lista de Jacarés</a>
            </div>
    </body>
</html>
