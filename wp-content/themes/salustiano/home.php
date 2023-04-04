<?php get_header(); ?>

    <!-- MAIN -->

    <main>

        <!-- BLOG -->

        <section id="blog">

            <?php get_template_part ( 'template-parts/title-subtitle-intro' ); ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article>

                    <header>

                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                        <a class="button mini" href="<?php the_permalink(); ?>"><?php the_field ( 'read_more_text' ); ?></a>

                    </header>

                    <figure>

                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail ( 'large' ); ?></a>

                    </figure>

                </article>

            <?php endwhile; wp_reset_postdata(); ?>

        </section>

    </main>

<?php get_footer(); ?>