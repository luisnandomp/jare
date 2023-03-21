<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista dos Jacares</title>
        @vite(['resources/scss/app.scss'])
    </head>
    <body>

        <div class="form">
            <h1 align="center">Lista de Jacares</h1><br> <br>

            <div class="container">
                <table class="table table-striped">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tamanho</th>
                    <th></th>
                    @foreach ($jacares as $jacare)
                        <tr>
                            <td align="center">{{ $jacare->id }}</td>
                            <td>{{ $jacare->nome }}</td>
                            <td>{{ $jacare->tamanho }}<strong> m</strong></td>
                            <td>
                                <a class="btn btn-primary" href="{{route('jacare.show', $jacare->id)}}" role="button">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
                <div>
                    <button type="button" class="btn btn-outline-warning"><a href="{{route('jacare.home')}}">Voltar para o incio</a></button>
                </div>

        </div>
    </body>
</html>
