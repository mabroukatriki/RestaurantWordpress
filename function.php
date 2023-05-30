<?php 
function register_custom_menus() {
    register_nav_menus( array(
        'about-menu' => 'Menu for About page',
        'menu-menu' => 'Menu for Menu page',
    ) );
}
add_action( 'init', 'register_custom_menus' );
