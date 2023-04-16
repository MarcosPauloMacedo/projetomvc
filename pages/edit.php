<?php include_once ('C:\wamp64\www\mvc\config\Routes.php'); 

$routes = new Routes();
$methods = $routes->rota();

$controller = $methods['/edit']['controller'];
$method = $methods['/edit']['method'];

$controller = new $controller;
$datas = $controller->$method();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/reset.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Formulario Cars</title>
</head>
<body>
    <main class="conteudo">
        <section class="container">
            <h1 class="titulo">FORMULARIO DE ACESSO</h1>
            <div>
                <?=$datas?>
            </div>
            <p class="paragrafo">Ja tem uma conta? <span class="negrito">Acessar conta</span></p>
        </section>
        <p class="autor">Create by <span class="nome-autor">Marcos Paulo</span></p>
    </main>
     <script src="./script.js"></script>
</body>
</html>