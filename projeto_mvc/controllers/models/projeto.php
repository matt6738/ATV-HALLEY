<?php
class Projeto

{
    private $id;
    private $nome;
    private $duracao;
    private $con;

    public function_construct($id=null, $nome=null, $duracao=null)
    {
    $this->id = $id;
    $this->nome = $nome;
    $this->duracao = $duracao;
    $this->con = new PDO (SERVIDOR, USUARIO,SENHA); 
    }

}