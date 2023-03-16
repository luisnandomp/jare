<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>cadastro</title>
    </head>
    <body>
        <h1 align="center">Cadastre aqui o seu Jacaré lindo e cheiroso >:D</h1>
        <br>
        <br>
        <div align="center">
        <form action="{{route('jacare.store')}}" method="POST">
            @csrf
            <label for="">nome</label>
            <input type="text" id="nome"> <br>

            <label for="">sexo</label>
            <input type="radio" id="sexo" value="femea"/>Femea
            <input type="radio" id="sexo" value="macho"/>Macho <br>

            <label for="">peso</label>
            <input type="text" id="peso"> <br>

            <label for="">tamanho</label>
            <input type="text" id="tamanho"> <br>

            <label for="">Vacinado?</label>
            <input type="radio" id="vacinado" value="Sim"/>Sim
            <input type="radio" id="vacinado" value="nao" checked>Não <br>

            <input type="submit">
        </div>
        </form>
    </body>
</html>
