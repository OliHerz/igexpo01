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

// Spécifie toutes les actions que le thème peut supporter  //
function montheme_supports() {
// permet de donner à la page son titre dans le nagivateur
  add_theme_support('title-tag');

// permet d'ajouter les menus personnalisés
  add_theme_support( 'menus' );

// permet d'intégrer un logo personnalisé dans la page (header, footer, ...)
  add_theme_support('custom-logo');

// permet de redimentionner la taille du logo ajouté
  add_image_size( 'custom-logo-size', 150, 150, true );

// permet d'intégrer un walker de la class "walker", un header à mettre en 'Menu de tête', et footer en 'Menu pied de page'
  register_nav_menu( 'walker', 'walker' );
  register_nav_menu( 'header', 'Menu en tête' );
  register_nav_menu( 'footer', 'Menu pied de page' );
}



// Spécifie les ajouts de styles/plugin/frameworks/library que le thème supporte
function montheme_register_assets() {

// Import des font Google
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap');

// Import des icons sur FontAwesome
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
// Import de la feuille de style CSS Info + celle d'Elodie
  wp_enqueue_style('styles_css', get_stylesheet_uri());
  wp_enqueue_script('main-js', get_theme_file_uri('/js/main-script.js'),NULL,microtime(),true);
  wp_register_style('css', './css/style.css');
}

function montheme_title_separator(){
  return '|';
}

// permet de cibler la class Wordpress attribuée aux liens <li> dans la navlist, et changer cette class
function montheme_menu_class($classes){
  $classes[] = 'navItem';
  return $classes; 
}

// permet de cibler la class Wordpress attribuée aux liens <a> dans la navlist, et changer cette class
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