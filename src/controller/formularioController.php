<?php
include_once('../../config/config.php');

$datas = mysqli_query($conexao,"SELECT * FROM formulario");

if(!empty($_POST))
{
$validateEmail = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL); // faz uma validação de dados antes de enviar para o banco
//existe também o FILTER_SANITIZE
// var_dump($validateEmail);
// exit;

$name = filter_input(INPUT_POST,'name');                                                                             
$email = filter_input(INPUT_POST,'email');
$tel= filter_input(INPUT_POST,'tel');
$address = filter_input(INPUT_POST,'address');

$result = mysqli_query($conexao, "INSERT INTO formulario(nome,email,telefone,endereco) VALUES ('$name','$email','$tel','$address')");
header("location: index.php");
}
// else
// {
//     $name = filter_input(INPUT_POST,'name');                                                                             
//     $email = filter_input(INPUT_POST,'email');
//     $tel= filter_input(INPUT_POST,'tel');
//     $address = filter_input(INPUT_POST,'address');
//     $id = !empty($_GET['id']) ? $_GET['id'] : null;

//     mysqli_query($conexao,"UPDATE formulario SET nome='$name',email='$email',tel='$tel',endereco='$address' WHERE id=$id"
//     );
// }

if(!empty($_GET))
{
    $id = $_GET['id'];
    mysqli_query($conexao,"DELETE FROM formulario where id = $id");
    header('location: index.php');
}
?>