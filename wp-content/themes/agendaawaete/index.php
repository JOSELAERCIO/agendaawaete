<?php get_header(); ?>
<main id="main">

    <section class="content">
        <header class="post-header">
            <h1 class="post-title"><?php the_title(); ?></h1>
        </header>
        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : 
                    the_post();
                    the_content();
                endwhile;
            endif;
        ?>
    </section>
    
</main>
<?php get_footer(); ?>