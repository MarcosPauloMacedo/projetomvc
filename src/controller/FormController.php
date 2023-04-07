<?php 
include_once('../../config/config.php');

class FormController extends Config{
    public $datas;

    public function index()
    {
        $this->conexao();
        $this->datas = mysqli_query($this->conexao,"SELECT * FROM formulario");

        $this->delete();

        return $this->datas;
    }

    public function add()
    {   
        $this->conexao();
        if(!empty($_POST)){
           
            $name = filter_input(INPUT_POST,'name');                                                                             
            $email = filter_input(INPUT_POST,'email');
            $tel= filter_input(INPUT_POST,'tel');
            $address = filter_input(INPUT_POST,'address');

            mysqli_query($this->conexao, "INSERT INTO 
            formulario(nome,email,telefone,endereco) 
            VALUES ('$name','$email','$tel','$address')");
            header("location: index.php");}
    }

    public function edit()
    {
        $this->conexao();
        if(!empty($_GET))
        {
            $id = $_GET['id'];
            $dados = mysqli_query($this->conexao,"SELECT * FROM formulario where id = $id");
            $dadosFormatado = [];

            foreach($dados as $dado)
            {
                array_push($dadosFormatado,$dado);
            }

        }
        
        if(!empty($_POST) && !empty($_GET))
        {
            $name = filter_input(INPUT_POST,'name');
            $email = filter_input(INPUT_POST,'email');
            $tel = filter_input(INPUT_POST,'tel');
            $address = filter_input(INPUT_POST,'address');
            $id = $_GET['id'];
            
            mysqli_query($this->conexao,"UPDATE formulario SET 
            nome='$name',email='$email',telefone='$tel',endereco='$address' WHERE id = $id");

            header('location: index.php');
        }

        return $dadosFormatado;
    }

    public function delete()
    {   
        $this->conexao();
        if(!empty($_GET))
        {
            $id = $_GET['id'];
            mysqli_query($this->conexao,"DELETE FROM formulario where id = $id");
            header('location: index.php');
        }
    }
}