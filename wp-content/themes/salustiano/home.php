<?php get_header(); ?>

    Estoy en home.php
    
<main>

    <!-- BLOG -->

    <section id="blog">
        

        <header id="intro">

            <h1>Blog <span>noticias del blog pagina de todas</span></h1>
            <p>aqui va todo el Lorem ipsum dolor sit amet 
                consectetur adipisicing elit. Odio necessitatibus 
                in fugiat aut voluptas nemo eligendi, voluptatibus 
                praesentium minus corporis ab ad recusandae officia 
                iusto nobis commodi eos, beatae neque. the author.</p>

        </header>
    <?php while ( have_posts() ) : the_post(); ?>
        <article>

            <header>

                <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?>Titulo del post blog</a></h2>
                <p> <?php the_excerpt(); ?>estracto o parrafo.</p>
                <a class="button mini" href="<?php the_permalink(); ?>">leer más</a>

            </header>

            <figure>

                <a href="<?php the_permalink(); ?>"><img src="http://placekitten.com/150/150" alt="Very cool and SEO friendly description"></a>

            </figure>

        </article>
    <?php endwhile; ?>
        
        


    </section>

</main>

<?php get_footer(); ?>

<main>

