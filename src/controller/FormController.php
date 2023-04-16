<?php 
include_once('C:\wamp64\www\mvc\src\model\FormularioTable.php');
include_once('C:\wamp64\www\mvc\src\view\Views.php');

class FormController extends FormularioTable{
    public $datas;

    public function index()
    {
        $this->datas = $this->datasAll();
        $index = Views::index($this->datas);

        if(!empty($_GET))
        {
            $this->delete();
        }

        return $index;
    }

    public function add()
    {   
        if(!empty($_POST)){
           $this->newData();
        }

        $add = Views::enviarAdd();
        return $add;
    }

    public function edit()
    {
        $info = $this->listDate();
        
        $edit = Views::edit($info[0]['nome'],$info[0]['email'],
        $info[0]['telefone'],$info[0]['endereco']);

        if(!empty($_POST) && !empty($_GET))
        {
            $this->editDate();
        }

        return $edit;
    }
}