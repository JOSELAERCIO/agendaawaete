<article class="container-post">
    <header class="post-header -title">
        <a class="title-post-link" href="'<?php echo get_the_permalink(); ?>.'"><?php the_title(); ?></a>
    </header>
    <figure class="post-thumbnail"><?php the_post_thumbnail( array(375, 375), array('class' => 'img-thumbnail') ); ?></figure>
    <div class="post-content">
        <p class="excerpt-post">
            <?php echo get_the_excerpt(); ?>
        </p>
    </div>
    <div class="post-date">
        <?php get_template_part('parts/svg/time'); ?>
        <?php echo get_the_date(); ?>
        <?php get_template_part('parts/svg/comments'); ?>
    </div>
</article>