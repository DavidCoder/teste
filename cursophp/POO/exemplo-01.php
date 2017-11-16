<?php
class Pessoa {
    public $nome; //Atributo
    public function falar(){ //Método
        return "O meu nome é ".$this->nome;
    }
}

$david = new pessoa();
$david->nome = "David Mendoza";
echo $david->falar();
?>