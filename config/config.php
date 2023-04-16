<?php
class Config{
    
    public static function conect()
    {
        $host = 'localhost';
        $username = 'root';
        $senha = '';
        $basedados = 'dados';
        
        $conexao = new mysqli($host,$username,
        $senha,$basedados);

        return $conexao;
    }
}
?>