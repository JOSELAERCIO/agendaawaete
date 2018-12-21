<?php
// register main menu
register_nav_menus( array( 'main_menu' => 'Menu Principal' ) );

// add class anchor main menu

function add_class_to_all_menu_anchors( $atts ) {
    
    $atts['class'] = 'menu-item-anchor';
    return $atts;

}
add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );