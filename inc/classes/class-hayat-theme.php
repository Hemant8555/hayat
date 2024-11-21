<?php
/**
 * Bootstraps the theme
 * 
 * @package Hayat
 */

namespace HAYAT_THEME\Inc;

use HAYAT_THEME\Inc\Traits\Singleton;

class Hayat_Theme{
    use Singleton;
    
    protected function __construct()
    {
        Assets::get_instance();
        $this->set_hooks();
    }

    protected function set_hooks(){

        add_action( 'after_setup_theme',[$this,'setup_theme']);
    }
    public function setup_theme(){
        add_theme_support('title-tag');
        add_theme_support( 'custom-logo', [
            'header-text' => [ 'site-title', 'site-description' ],
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ] );
    }

   
}

?>