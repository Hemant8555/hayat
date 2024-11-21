<?php
/**
 * Theme Functions
 * 
 * @package Hayat
 */
use ParagonIE\Sodium\Core\Curve25519\Ge\P2;

if ( ! defined( 'HAYAT_DIR_PATH' ) ) {
    define( 'HAYAT_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined ('HAYAT_DIR_URI' ) ) {
    define( 'HAYAT_DIR_URI', untrailingslashit ( ( get_template_directory_uri() ) ) );
}

if ( ! defined ('HAYAT_DIR_PATH' ) ) {
    define( 'HAYAT_DIR_PATH', untrailingslashit ( ( get_template_directory() ) ) );
}

require_once HAYAT_DIR_PATH . '/inc/helpers/autoloader.php';

function hayat_theme_get_instance(){
    \HAYAT_THEME\Inc\HAYAT_THEME::get_instance();
}

hayat_theme_get_instance();

function hayat_enqueue_scripts(){
    
   
}
?>