<?php
/* 
    Template Name: Blog    
*/
?>
<?php get_header(); ?>
<main id="main">

    <section class="content">
      
      <?php 

            $recent_posts = wp_get_recent_posts(); 
            foreach( $recent_posts as $recent ) {
                echo '<article>
                        <header>
                            <a href="'. get_permalink( $recent["ID"] ) .'">'.$recent["post_title"].'</a>
                            <p>' .wp_trim_excerpt( $recent["post_content"] ). '</p>
                        </header>
                     </article>';                
            }
            wp_reset_query();
            
      ?>
       
    </section>
    
</main>
<?php get_footer(); ?>