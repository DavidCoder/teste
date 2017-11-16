<?php

    //Funções que serão carregadas pelo Wordpress

    //Função que carrega os scripts.
    function carrega_scripts(){

    /*função que enfileira os arquivos de estilos a carregar. 
    (identificador, função que chama o camino do tema, contatena com o caminho do estilo na pasta css, Se existe alguma folha de estilo que seria carregada antes do template.css, Versão da folha css, qual tipo de midia a que o arquivo css se refere)*/

    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', 
    array(), '1.0', 'all');

    //chama o arquivo template.js
    wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', 
    array(), null, true);

    //incluindo Bootstrap.
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', 
    array(), '3.3.7', 'all');

    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', 
    array('jquery'), null, true);

    }
    /*dentermina uma ação em um momento de execução(momento de execução que engancha, função a ser enganchada)*/ 

    add_action( 'wp_enqueue_scripts', 'carrega_scripts');


    //Função que cria Menu.

    register_nav_menus(
    array(
       'meu_menu_principal' => 'Menu Principal', 
       'meu_menu_rodape' => 'Menu Rodape'
    )
 );

    //ADICIONA SUPORTE AO TEMA

    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
?>



