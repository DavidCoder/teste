<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>David Mendoza</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">

        <?php wp_head(); ?>
    </head>
<body <?php body_class();?>>
<header> 
    <div class="barra-topo container"> 
        <div class="row"> 
            <div class="redes-sociais col-md-4">Redes Sociais</div> 
            <div class="pesquisa col-md-8"> pesquisa</div>
        </div><!--/row--> 


    </div><!--/barra-topo--> 

        <div class="area-menu container"> 
            <div class="logo col-md-3">Logo</div>
            <div class="menu-principal col-md-9 text-right">
            <!--Função WP que mostra o Menu no Tema-->
            <?php wp_nav_menu( array('theme_location' => 'meu_menu_principal'));?>
            </div>
        </div>



</header>
<!--FINAL HEADER-->

