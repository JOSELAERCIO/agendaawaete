<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
        <h1 class="post-title -single">       
            <?php the_title(); ?>
        </h1>
    </header>
    <div class="post-thumbnail-single-container">
        <?php the_post_thumbnail( 'medium_large', array( 'class' => 'thumbnail-post-single' ) ); ?>
    </div>
    <div class="post-content-single">
        <?php the_content(); ?>
    </div>
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
                <?php get_template_part('parts/svg/archive-block'); ?>
                Ver todos os posts de <?php the_author(); ?>
            </a>
        </div>
    </div>
    <div class="post-meta">
        
        <time class="post-meta-single">
            <?php get_template_part( 'parts/svg/time' ); ?>
            <?php the_date(); ?>
        </time>

        <div class="post-categories-container">
            <?php get_template_part( 'parts/svg/open-folder' ); ?>
            <?php the_category(); ?>
        </div>

        <nav class="navigation-next-preview" role="navigation">
            <div class="nav-previous">
                <?php get_template_part( 'parts/svg/circle-arrow-left' ) ?>
                <?php previous_post_link( '%link' ); ?>  
            </div>
            <div class="nav-next">
                <?php get_template_part( 'parts/svg/circle-arrow-right' ) ?>
                <?php next_post_link('%link'); ?>
            </div>
        </nav>

    </div>
</div>

<?php 
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
?>