<?php

class Config{
    protected string $host;
    protected string $username;
    protected string $senha;
    protected string $basedados;
    protected object $conexao;

    public function conexao()
    {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->senha = '';
        $this->basedados = 'dados';
        $this->conexao = new mysqli($this->host,$this->username,
        $this->senha,$this->basedados);
    }
}
?>