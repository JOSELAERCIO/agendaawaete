<?php
// register main menu
register_nav_menus( array( 'main_menu' => 'Menu Principal' ) );

// add class anchor main menu

function add_class_to_all_menu_anchors( $atts ) {
    
    $atts['class'] = 'menu-item-anchor';
    return $atts;

}
add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );

add_theme_support( 'post-thumbnails' );

/* Custom Read More */

function wpdocs_excerpt_more( $more ) {
    return '...<br><a class="more-link" href="'.get_the_permalink().'" rel="nofollow">Continue lendo</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/* Add class to first paragraph in content */
function add_class_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="paragraph-content">', $content);
}
add_filter('the_content', 'add_class_paragraph');

/* Comment custom */

function format_comment() { ?>
     <div class="comment-author-avatar">
        <?php echo get_avatar( $comment, 42); ?>
    </div>
    <div class="comment-content">
        <header class="comment-header">
            <div class="comment-author">
                <?php echo get_comment_author(); ?>
            </div>
            <div class="comment-date">
                <?php echo get_comment_date(); ?>
            </div>    
        </header>
        <div class="comment-text">
            <?php echo get_comment_text(); ?>
        </div> 
    </div>
    <div class="comment-reply-link">
         <?php comment_reply_link(); ?>
    </div>
    <?php 
}


    function format_comment_2($comment, $args, $depth) {
    
       $GLOBALS['comment'] = $comment; ?>
       
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
            
            <div class="comment-avatar-author">
                <?php echo get_avatar( $comment, 42 ); ?>
            </div>
           
            <div class="comment-header">
                <span class="comment-author">
                    <?php echo get_comment_author(); ?>
                </span>
                <span class="comment-date">
                    <?php echo get_comment_date(); ?>
                </span> 
            </div>
            
            <?php if ($comment->comment_approved == '0') : ?>
                <em><?php _e('Your comment is awaiting moderation.') ?></em><br />
            <?php endif; ?>
            
            <div class="comment-text">
                <?php comment_text(); ?>
            </div>
            
            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>
        
<?php } 