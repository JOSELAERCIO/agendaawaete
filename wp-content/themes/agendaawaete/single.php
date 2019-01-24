<?php get_header(); ?>
<main id="main">

    <section class="content -single">
        <?php          
            while( have_posts() ):  
                the_post();
                get_template_part('parts/content', 'single');
            endwhile;
        ?>
    </section>
    
</main>
<?php get_footer(); ?>