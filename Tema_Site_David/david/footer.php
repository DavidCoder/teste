

<!--INICIO FOOTER-->
<footer>
    <div class="rodape container">
        <div class="row">
            <div class="menu-rodape col-md-12 text-right">
                <?php wp_nav_menu(array('theme_location' => 'meu_menu_rodape')); ?>
            </div>
            <!--/div menu- rodape-->
        </div>
        <!--/div row-->
    </div>
</footer>
<!--FINAL FOOTER-->
<!--função WP p/ Script-->
<?php wp_footer();?>
</body>
</html>