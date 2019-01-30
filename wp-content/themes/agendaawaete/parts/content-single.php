<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
        <h1 class="post-title -single">       
            <?php the_title(); ?>
        </h1>
    </header>
    <?php the_content(); ?>
</article>

<div class="post-meta-container">
    <div class="entry-author">
        <figure class="avatar-container">
            <?php 
                echo get_avatar( get_the_author_meta( 'ID' ), 32 ); 
            ?>
        </figure>
        <h2 class="author-title">Publicado por <?php the_author(); ?></h2>
        <div class="author-bio">
            <a class="author-link" target="_blank" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                Ver todos os posts de <?php the_author(); ?>
            </a>
        </div>
    </div>
</div>