<?php
/*Template Name: Paginas Gerais*/
?>

<!--CHAMANDO O HEADER-->
<?php get_header(); ?>

<!--CHAMANDO A FUNÇÃO DE CUSTOMIZAÇÃO DO HEADER DA PÁGINA FUNCTIONS -->
<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>

<!-- CONTEUDO - PARTE DINAMICA DA PAGINA-->
<div class="conteudo-wrapper">
    <main>
        <section class="conteudo container">
            
                    <!--INICIO LOOP WP-->
                    <?php
                  // SE HOUVER POST
                    if (have_posts()) :
                        //ENQUANTO HOUVER POST, CHAME O POST DE DETERMINADA MANEIRA
                    while (have_posts()) :
                        the_post();
                    ?>

                  <h1><?php the_title(); ?></h1>
                  <p> Publicado em: <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
                  <p><?php the_content(); ?></p>

                <?php
                endwhile;
                else :
                ?>
                    <p>Não tem nada ainda pra mostrar...</p>

                    <?php
                    endif;
                    ?>
                    <!--FINAL LOOP-->
                </div>
                <!--/ div noticias-->

        </section>
    </main>

</div>
<!--/CLASSE CONTEUDO-->

<!--CHAMANDO O FOOTER-->
<?php get_footer(); ?>
