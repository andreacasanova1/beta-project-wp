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
            <div>
                <h1>
                    
                   <!--es mas tocha ? <a href="<?php bloginfo ( 'url' ); ?>"> -->
                    <a href="<?php echo home_url ( '/blog/' ); ?>">
                        <img src="images/logo-negro.svg" alt="Salustiano logo">
                    </a>
                   
                </h1>
            </div>
            <nav>
                <div class="topbar"> 
                    <nav class="topbar__nav-container"> 
                        <img class="topbar__nav-logo" src="img/landing/logo 400px.png" alt="logo-salustiano">
                        <ul class="topbar__nav-ul">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Productos y Servicios</a></li>
                            <li><a href="#">Galería de Arte</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">Carrito</a></li>
                        </ul>
                    </nav> 
                    <div class="menu-burger">
                        <span class="line1__menu-burger"></span>
                        <span class="line2__menu-burger"></span>
                        <span class="line3__menu-burger"></span>
                    </div> 
                </div>
            </nav>
        </header>     
            
       

    