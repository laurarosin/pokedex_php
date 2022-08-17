<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pokemon</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/nome/save" method="post">
        <fieldset>
            <legend>Cadastro de pokemon</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="descricao">descricao:</label>
            <input id="descricao" name="descricao" value="<?= $model->descricao ?>" type="text" />

            <label for="">habilidade:</label>
            <input id="habilidade" name="habilidade" value="<?= $model->habilidade ?>" type="text" />

            <label for="tipo">tipo:</label>
            <input id="tipo" name="tipo" value="<?= $model->tipo ?>" type="text" />

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>