<?php $routes = include 'C:\wamp64\www\cars\config\routes.php'; 

$controller = $routes['/']['controller'];
$method = $routes['/']['method'];

$instance = new $controller;
$datas = $instance->$method();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Dados formulario</h1>
    <form action="add">
        <button style="margin-bottom:20px">Adicionar cliente</button>
    </form>
    <table>
        <thead>
            <td>Nome</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>Endereco</td>
        </thead>
        <?php foreach($datas as $data): ?>
            <tbody>
                <td><?=$data['nome']?></td>
                <td><?=$data['email']?></td>
                <td><?=$data['telefone']?></td>
                <td><?=$data['endereco']?></td>
                <td>
                    <th><a href="edit.php?id=<?=$data['id']?>">editar</a></th>
                    <th><a href="?id=<?=$data['id']?>">excluir</a></th>
                </td>
            </tbody>
        <?php endforeach ?>
    </table>
</body>
</html>