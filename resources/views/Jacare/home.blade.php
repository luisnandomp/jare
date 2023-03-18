<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Pag inicial</title>
        @vite(['resources/scss/app.scss'])
    </head>
    <body>
        <div class="form">
            <h1>Cadastre seu Jaré conosco :X</h1> <br> <br>

            <button type="button" class="btn btn-outline-primary"><a href="{{route('jacare.create')}}" class="create">Cadastre aqui</a></button>
            <button type="button" class="btn btn-outline-info"><a href="{{route('jacare.index')}}" class="create">Veja os jacarés já cadastrados</a></button>
        </div>
    </body>
</html>
