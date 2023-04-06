<!doctype html>

<html <?php language_attributes(); ?>>
 
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#000000">
        <link rel="stylesheet" href="<?php bloginfo ('stylesheet_url');?>">
        <title>
            Salustiano Casanova
        </title>

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
    <!--HEADER-->
        <header class="site-header">
            
            <nav>
                <div class="topbar"> 
                    <nav class="topbar__nav-container"> 
                    <a href="<?php echo home_url ( '/front-page/' ); ?>">   
                        <img class="topbar__nav-logo" src="<?php bloginfo ( 'template_url' ); ?>/images/logo-400px.png" alt="<?php bloginfo ( 'name' ); ?>">
                    </a>   
                        <ul class="topbar__nav-ul">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="<?php echo home_url ( '/productos-y-servicios/' ); ?>">Productos y Servicios</a></li>
                            <li><a href="<?php echo home_url ( '/galeria-de-arte/' ); ?>">Galería de Arte</a></li>
                            <li><a href="<?php echo home_url ( '/blog/' ); ?>">Blog</a></li>
                            <li><a href="<?php echo home_url ( '/contacto/' ); ?>">Contacto</a></li>
                            <li><a href="<?php echo home_url ( '/nosotros/' ); ?>">Nosotros</a></li>
                            <li><a href="<?php echo home_url ( '/carrito/' ); ?>">Carrito</a></li>
                        </ul>
                           
                    </nav> 
                        
                    
                    <div class="menu-burger">
                        <span class="line1__menu-burger"></span>
                        <span class="line2__menu-burger"></span>
                        <span class="line3__menu-burger"></span>
                    </div> 
                </div>
            </nav>
          
       

    