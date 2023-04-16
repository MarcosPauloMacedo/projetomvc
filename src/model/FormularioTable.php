<?php
include_once ('C:\wamp64\www\mvc\config\config.php'); 

class FormularioTable{
    
    protected function datasAll()
    {
        $data = mysqli_query(Config::conect(),
        "SELECT * FROM formulario");

        return $data;
    }

    protected function newData()
    {
        $name = filter_input(INPUT_POST,'name');                                                                             
        $email = filter_input(INPUT_POST,'email');
        $tel= filter_input(INPUT_POST,'tel');
        $address = filter_input(INPUT_POST,'address');

        mysqli_query(Config::conect(), "INSERT INTO 
        formulario(nome,email,telefone,endereco) 
        VALUES ('$name','$email','$tel','$address')");

        header("location: index.php");
    }

    protected function listDate() 
    {
        if(!empty($_GET))
        {
            $id = $_GET['id'];
            $dados = mysqli_query(Config::conect(),
            "SELECT * FROM formulario where id = $id");

            $dadosFormatado = [];

            foreach($dados as $dado)
            {
                array_push($dadosFormatado,$dado);
            }

            return $dadosFormatado;
        }
    }

    protected function editDate()
    {
        $name = filter_input(INPUT_POST,'name');
        $email = filter_input(INPUT_POST,'email');
        $tel = filter_input(INPUT_POST,'tel');
        $address = filter_input(INPUT_POST,'address');
        $id = $_GET['id'];
        
        mysqli_query(Config::conect(),"UPDATE formulario SET 
        nome='$name',email='$email',telefone='$tel',
        endereco='$address' WHERE id = $id");

        header('location: index.php');
    }

    protected function delete()
    {   
        $id = $_GET['id'];
        mysqli_query(Config::conect(),
        "DELETE FROM formulario where id = $id");

        header('location: index.php');
    }
}
