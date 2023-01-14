<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'wpbf-icon-font','wpbf-style','wpbf-style','wpbf-responsive' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// --------------- END ENQUEUE PARENT ACTION --------------- //

// Spécifie les actions que le thème peut supporter 
function montheme_supports() {
    add_theme_support('title-tag');
    add_theme_support( 'menus' );
    register_nav_menu( 'header', 'Menu en tête' );
}

// Spécifie les ajouts de styles/plugin/frameworks/library que le thème supporte
function montheme_register_assets() {
    wp_register_style('css', './style.css');
    wp_enqueue_style('css');
}

function montheme_title_separator(){
    return '|';
}

// ajoute les actions. en fonction de ('quelle actions est effectuée' -> 'quelle fonction cela lance')
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');

?>
