 

<!-- FOOTER -->

    <footer>

        <?php bloginfo ( 'description' ); ?>

        <?php

            wp_nav_menu ( array
            (
                'theme_location' => 'footer-menu-left',
                'container' => false,
                'menu_class' => 'left'
            ));

            wp_nav_menu ( array
            (
                'theme_location' => 'footer-menu-right',
                'container' => false,
                'menu_class' => 'right'
            )); 
                
        ?>

    </footer>

    <?php the_fiel  ( 'options_footer_scripts','option'); ?>

    <?php wp_footer(); ?>

    </body>

</html>