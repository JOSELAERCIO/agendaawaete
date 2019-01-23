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