<?php
/* 
    Template Name: Blog    
*/
?>
<?php get_header(); ?>
<main id="main">

    <section class="content -blog">
      
      <?php 

      $args = array(
          'posts_per_page' => 10,
      );

      $recent_posts = new WP_Query( $args );

      if ( $recent_posts->have_posts() ) :
        while( $recent_posts->have_posts() ) :
            $recent_posts->the_post(); ?>

            <?php get_template_part('parts/recent-posts'); ?>
            
            <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
      
    </section>
    
</main>
<?php get_footer(); ?>