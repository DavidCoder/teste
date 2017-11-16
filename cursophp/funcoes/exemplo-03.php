<?php

    $pessoa = array(
        'nome' => 'João',
        'idade'=> 30
    );
    foreach ($pessoa as $value) {  // passagem de valor por referencia com o &, que acessa o endereço de memoria;
                                     // sem o &, é passagem de valor por referencia.
        if (gettype($value) === 'integer') $value += 10;
        echo $value. '<br>';

    }

    print_r($pessoa);
?>