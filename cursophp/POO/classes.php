<?php

class Pessoa{
    //Atributos
    var $nome;

    //getters e Setters
    function setNome($nome_definido){
        $this->nome  = $nome_definido;
    }
    function getNome(){
        return $this->nome;
    }
  
}

$pessoa = new Pessoa();

$pessoa ->setNome('David');
echo $pessoa->getNome();

?>