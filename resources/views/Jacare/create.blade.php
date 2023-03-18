<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>cadastro</title>
        @vite(['resources/scss/app.scss'])
    </head>
    <body>
        <form class="row g-3" action="{{route('jacare.store')}}" method="POST">
            <h1 align="center">Cadastre aqui o Seu lindo e cheiroso Jacarézinho</h1>
            @csrf
            <div class="col-md-6">
              <label for="" class="form-label">Nome</label>
              <input type="name" name="nome" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="" class="form-label">Peso</label>
              <input type="number" name="peso" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="" class="form-label">Tamanho</label>
              <input type="number" name="tamanho" class="form-control" id="inputAddress">
            </div>


            <div class="col-md-4">
                <label for="inputState" class="form-label">Sexo</label>
                <select id="inputState" name="sexo" class="form-select">
                  <option selected name="sexo">Macho</option>
                  <option name="sexo">Femêa</option>
                </select>
              </div>

              <div class="col-md-4">
                <label for="inputState" class="form-label">Vacinado?</label>
                <select id="inputState" name="vacinado" class="form-select">
                  <option selected name="vacinado">Sim</option>
                  <option name="vacinado">Não</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
    </body>
</html>
