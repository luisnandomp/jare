<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista dos Jacares</title>
    </head>
    <body>
        <h1>Lista de Jacares</h1>
            <div>
                <table border="1" width="90%">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tamanho</th>
                    <th></th>
                    @foreach ($jacares as $jacare)
                        <tr>
                            <td align="center">{{ $jacare->id }}</td>
                            <td>{{ $jacare->nome }}</td>
                            <td>{{ $jacare->tamanho }}</td>
                            <td>
                                <a href="{{route('jacare.show', $jacare->id)}}">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
                <div>
                <a href="{{route('jacare.home')}}">Voltar para o incio</a>
                </div>
    </body>
</html>
