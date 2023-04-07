<?php $routes = include 'C:\wamp64\www\cars\config\routes.php'; 

$controller = $routes['/edit']['controller'];
$method = $routes['/edit']['method'];

$instance = new $controller;
$dados = $instance->$method();
$dados = $dados[0];

// var_dump($dados);
// exit;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../webroot/css/reset.css">
    <link rel="stylesheet" href="../../webroot/css/style.css">
    <title>Formulario Cars</title>
</head>
<body>
    <main class="conteudo">
        <section class="container">
            <h1 class="titulo">FORMULARIO DE ACESSO</h1>
            <form id="formulario" class="formulario" method="POST">
                <input class="entrada" type="text" name="name" placeholder="digite seu nome completo" value="<?=$dados['nome']?>" required>
                <input class="entrada" type="email" name="email" placeholder="email" value="<?=$dados['email']?>" required>
                <input class="entrada" type="tel" name="tel" placeholder="numero de telefone" value="<?=$dados['telefone']?>" required>
                <input class="entrada" type="text" name="address" placeholder="endereco" value="<?=$dados['endereco']?>" required>
                
                <div class="botao-container">
                    <button class="botao">Editar</button>
                </div>
            </form>
            <p class="paragrafo">Ja tem uma conta? <span class="negrito">Acessar conta</span></p>
        </section>
        <p class="autor">Create by <span class="nome-autor">Marcos Paulo</span></p>
    </main>
     <script src="./script.js"></script>
</body>
</html>