<nav>
    <div class="topbar"> 
        <nav class="topbar__nav-container"> 
            <img class="topbar__nav-logo" src="img/landing/logo 400px.png" alt="logo-salustiano">
            <ul class="topbar__nav-ul">
                <li><a href="#">Inicio</a></li>
                
                <li><a href="<?php echo home_url ( '/productos-y-servicios/' ); ?>">Productos y Servicios</a></li>
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
<?php get_search_form(); ?>