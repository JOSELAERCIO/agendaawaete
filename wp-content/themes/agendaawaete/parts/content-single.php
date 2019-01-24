<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
        <h1 class="post-title -single">       
            <?php the_title(); ?>
        </h1>
    </header>
    <?php the_content(); ?>
</article>