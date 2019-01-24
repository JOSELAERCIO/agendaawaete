<?php get_header(); ?>
<main id="main">

    <section class="content -home">
        
        <?php 
            $args = array(
                'post_type' => 'post',
                'page_id' => 64
            );

            $main_post = new WP_Query( $args );
            
            if ( $main_post->have_posts() ): 
             
                while( $main_post->have_posts() ):  
                    $main_post->the_post();
            ?>
                <header class="post-header">
                    <h1 class="post-title">
                        <?php the_title(); ?>
                    </h1>
                </header>
                <?php
                   the_content();
                ?>
                <?php 
                endwhile;
                wp_reset_postdata();
            endif;
        ?>

    </section>
    
</main>
<?php get_footer(); ?>