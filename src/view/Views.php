<?php 

class Views {
    
    public static function index($dados) { 
        $index = 
        '<table>
            <thead>
                <td>Nome</td>
                <td>Email</td>
                <td>Telefone</td>
                <td>Endereco</td>
            </thead>
        <tbody>';

        foreach($dados as $dado) {
            $index .= 
            '<tr>
                <td>'.$dado['nome'].'</td>
                <td>'.$dado['email'].'</td>
                <td>'.$dado['telefone'].'</td>
                <td>'.$dado['endereco'].'</td>
                <td>'.'<a href='.'edit?id='.$dado['id'].'>editar</a>'.'</td>
                <td>'.'<a href='.'?id='.$dado['id'].'>deletar</a>'.'</td>
            </tr>';
        }

        $index .= '</tbody></table>';
        
        return $index;
    }

    public static function enviarAdd(){
        $form = "
        <form id=".'formulario'." class=".'formulario'."  method=".'POST'.">
            <input class=".'entrada'." type=".'text'." name=".'name'." placeholder="."'digite seu nome completo'"." required>
            <input class=".'entrada'." type=".'email'." name=".'email'." placeholder=".'email'." required>
            <input class=".'entrada'." type=".'tel'." name=".'tel'." placeholder="."'numero de telefone'"." required>
            <input class=".'entrada'." type=".'text'." name=".'address'." placeholder=".'endereco'." required>
        
            <div class=".'botao-container'.">
                <button class=".'botao'.">Access</button>
            </div>
        </form>
        ";

        return $form;
    }

    public static function edit($nome,$email,$tel,$endereco)
    {
        $form = "
        <form id=".'formulario'." class=".'formulario'."  method=".'POST'.">
            <input class=".'entrada'." type=".'text'." name=".'name'." value=".$nome." placeholder="."'digite seu nome completo'"." required>
            <input class=".'entrada'." type=".'email'." name=".'email'." value=".$email." placeholder=".'email'." required>
            <input class=".'entrada'." type=".'tel'." name=".'tel'." value=".$tel." placeholder="."'numero de telefone'"." required>
            <input class=".'entrada'." type=".'text'." name=".'address'." value=".$endereco." placeholder=".'endereco'." required>
        
            <div class=".'botao-container'.">
                <button class=".'botao'.">Access</button>
            </div>
        </form>
        ";

        return $form;   
    }
}