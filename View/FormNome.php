<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pokemon</title>
    <style>
        label, input { display: block;}
        body {
            background-image: url("https://images.hdqwalls.com/download/riding-pokemon-8k-op-1920x1080.jpg");
        }

        fieldset {
            position: absolute;
            left:25%;
            top: 10%;
            margin-left: -400px;
            margin-top: -40px;
        }
        legend, label {
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            font-size: 40px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        #button{
            background-color: MediumVioletRed;
            padding: 15px 32px;
        }

    </style>
</head>
<body>
    <form action="/nome/save" method="post">
        <fieldset>
            <h1>Cadastro de Pokemon</h1>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="descricao">descricao:</label>
            <input id="descricao" name="descricao" value="<?= $model->descricao ?>" type="text" />

            <label for="">habilidade:</label>
            <input id="habilidade" name="habilidade" value="<?= $model->habilidade ?>" type="text" />

            <label for="tipo">tipo:</label>
            <input id="tipo" name="tipo" value="<?= $model->tipo ?>" type="text" />

            <button type="submit" id="button">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>