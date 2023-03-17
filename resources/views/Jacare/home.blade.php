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
        <h1>Cadastre seu Jaré conosco :X</h1>

        <a href="{{route('jacare.create')}}">Cadastre aqui</a>

        <a href="{{route('jacare.index')}}">Veja os jacarés já cadastrados</a>
    </body>
</html>
