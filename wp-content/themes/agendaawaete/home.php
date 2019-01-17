<?php get_header(); ?>
<main id="main">

    <section class="content">
        
        <?php if ( have_posts() ): 
             
             while( have_posts() ):  the_post();
            ?>
        <header class="page-header">
            <h1 class="page-title">
                <?php the_title(); ?>
            </h1>
        </header>
        <?php 
            endwhile;
            endif;
        ?>

    </section>
    
</main>
<?php get_footer(); ?>