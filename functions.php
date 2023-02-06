<?php

function ajouter_styles() {

wp_enqueue_style(   'style-principale',  // identificateur du link css
                    get_template_directory_uri() . '/style.css',  // enroit où se trouve le fichier style.css
                    array(), // les fichiers css qui dépendent de style.css
                    filemtime(get_template_directory() . '/style.css')  // version de notre style.css
); 
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );



/* ----------------------------------- Enregistrement des menus */
function enregistrement_nav_menu(){
    register_nav_menus( array(
        'principal' => 'Menu principal',
        'footer'  => 'Menu pied de page'
    ) );
}
add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );     

/*----------------------------------------- add_theme_support() */
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo',
                    array(
                        'height' => 150,
                        'width'  => 150,
) );
add_theme_support( 'post-thumbnails' );
