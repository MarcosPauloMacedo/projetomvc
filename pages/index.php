<?php include_once ('C:\wamp64\www\mvc\config\Routes.php'); 

$routes = new Routes();
$methods = $routes->rota();

$controller = $methods['/']['controller'];
$method = $methods['/']['method'];

$controller = new $controller;
$datas = $controller->$method();

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
   <div>
        <?=$datas?>
    </div>
</body>
</html>