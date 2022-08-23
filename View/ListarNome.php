<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Nomes</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th></th>
            <th>Nome</th>
            <th></th>
            <th>Descricao</th>
            <th></th>
            <th>Habilidade</th>
            <th></th>
            <th>Tipo</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/nome/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/nome/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->nome?></td>
            <td></td>
            <td><?= $item->descricao ?></td>
            <td></td>
            <td><?= $item->habilidade ?></td>
            <td></td>
            <td><?= $item->tipo ?></td>

        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>