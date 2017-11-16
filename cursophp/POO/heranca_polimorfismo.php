<?php

//Classe Mãe ou Superclasse
class Felino{
    //Atributo da Classe
    var $mamifero = 'Sim';

    //Método da Classe
    function correr(){
        echo'Correr como Felino';
    }
}

//Classe Filha ou Subclasse
class Chita extends Felino{

      //Polimorfismo
    function correr(){
        echo 'Correr como Chita a 100Km/H';
    }

}

  


//instanciando a Classe
$chita = new Chita();

echo $chita->mamifero .'<br>';
$chita->correr();

?>