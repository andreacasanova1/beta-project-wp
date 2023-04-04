<?php get_header(); the_post(); ?>

    <!-- MAIN -->

    <main>

        <!-- PAGE -->

        <section id="secondary-page">

            <header>

                <h1><?php the_title(); ?></h1>

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
                
                <a href="<?php echo home_url(); ?>" class="button">This is boooring! Pics!</a>
                <a href="<?php echo home_url ( '/about/' ); ?>" class="button mini">Wanna meet you</a>

            </div>

        </section>

    </main>

<?php get_footer(); ?>