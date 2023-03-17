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
        <form action="{{route('jacare.store')}}" method="POST" align="center">
            @csrf
            <label for="">nome</label>
            <input type="text" id="nome" name="nome"> <br>

            <label for="">peso</label>
            <input type="number" id="peso" name="peso"> <br>

            <label for="">tamanho</label>
            <input type="" id="tamanho" name="tamanho"> <br>

            <label for="">sexo</label>
            <select name="sexo" id="">
            <option value="macho" name="sexo">Macho</option>
            <option value="femea" name="sexo">Femea</option>
            </select><br>

            <label for="">Vacinado?</label>
            <select name="vacinado" id="">
                <option value="sim" name="vacinado">Sim</option>
                <option value="nao" name="vacinado">Não</option>
                </select><br><br>

            <input type="submit" value="enviar">
        </form>
    </body>
</html>
