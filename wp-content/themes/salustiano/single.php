<?php get_header(); the_post(); ?>
<h1>donde estoy en single</h1>
     <!-- MAIN -->

     <main>

<!-- single es cada una de las entradas -->

            <section id="secondary-page">
                <header>
                    <h1><?php the_title(); ?>...yo estoy en single en el h1</h1>
                </header>
                <div>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>

                        <!-- SIDEBAR -->
                    <aside>  
                    <?php dynamic_sidebar( 'page-sidebar' ); ?>
                    </aside>
                </div>
                <div class="buttons"> 
                    <a href="<?php echo home_url(); ?>" class="button">soy un boton! Pics!</a>
                    <a href="<?php echo home_url ( '/about/' ); ?>" class="button mini">soy otro boton meet you</a>
                </div>
            </section>
        
        </article>

    </main>