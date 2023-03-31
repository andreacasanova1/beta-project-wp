
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content=" <?php the_fiel  ( 'options_website_color','option'); ?>
        <title><?php wp_title ( '' ); ?></title>
        <link href="style.css" rel="stylesheet">

        <?php the_fiel  ( 'options_head_scripts','option' ); ?>
        <?php wp_head(); ?>
</head>
    <body> <?php body_class(); ?>>
        <header class="site-header">
            <div>

                <h1>                    
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php bloginfo ( 'template_url' ); ?>/images/logo-loosing-my-mind.svg" alt="<?php bloginfo ( 'name' ); ?>">
                    </a>                
                </h1>
                <nav>

                    <?php
                
                        wp_nav_menu ( array
                        (
                            'theme_location' => 'header-menu',
                            'container' => false
                        ));
                    
                    ?>

                </nav>

            </div>
        </header>