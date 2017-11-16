<?php

class Veiculo{

    /*public
    private
    protected
     */
    //nao usaremos mais o var
     private $placa;
     private $cor;
     protected $tipo = 'Camionete';

     public function setPlaca($parametro_placa){

         //validacao da placa

         $this->placa = $parametro_placa;
     }

     public function getPlaca(){
         return $this->placa;
     }
}

class Carro extends Veiculo{
    public function exibirTipo(){
        echo $this->tipo;
    }
}

//$veiculo = new Veiculo();
//$veiculo->setPlaca('CZG 7171');
//echo $veiculo->placa;
//echo $veiculo->getplaca();

$carro = new Carro();
$carro->exibirTipo();

?>