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
  add_theme_support('custom-logo');
  register_nav_menu( 'header', 'Menu en tête' );
  register_nav_menu( 'footer', 'Menu pied de page' );
  add_image_size( 'custom-logo-size', 150, 150, true );
}

// Spécifie les ajouts de styles/plugin/frameworks/library que le thème supporte
function montheme_register_assets() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap');
  wp_enqueue_style('styles_css', get_stylesheet_uri());
  wp_enqueue_script('main-js', get_theme_file_uri('/js/main-script.js'),NULL,microtime(),true);
  wp_register_style('css', './css/style.css');
}

function montheme_title_separator(){
  return '|';
}

function montheme_menu_class($classes){
  $classes[] = 'navItem';
  return $classes; 
}

function montheme_menu_link_class($attrs){
  $attrs['class'] = 'navLink';
  return $attrs; 
}


// ajoute les actions. en fonction de ('quelle actions est effectuée' -> 'quelle fonction cela lance')
// add_action('init', 'register_my_menu');
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
add_theme_support('custom-logo', array(
    'height'      => 150,
    'width'       => 150,
    'flex-height' => true,
    'flex-width'  => true,
  ));
?>
