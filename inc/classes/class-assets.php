<?php
/**
 * Theme Assets
 * 
 * @package Hayat
 */
namespace HAYAT_THEME\Inc;

use HAYAT_THEME\Inc\Traits\Singleton;

class Assets{

    use Singleton;
    
    protected function __construct(){
        $this->set_hooks();
        }

    protected function set_hooks(){
        add_action('wp_enqueue_scripts',[$this,'register_styles']);
        add_action('wp_enqueue_scripts',[$this,'register_scripts']);
        }
    public function register_styles(){

        // Register Stylesheet
        wp_register_style('style-css', get_stylesheet_uri() , [] , filemtime(HAYAT_DIR_PATH . '/style.css'),'all');
        wp_register_style('bootstrap-css', HAYAT_DIR_URI . '/assets/src/library/css/bootstrap.min.css' , [] , false , 'all');
    
        // Enqueue Stylesheet
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    
        }

    public function register_scripts(){
    
        // Register Script
        wp_register_script('main-js', HAYAT_DIR_URI . '/assets/main.js' , [] , filemtime(HAYAT_DIR_PATH . '\assets\main.js'),[]);
        wp_register_script('bootstrap-js', HAYAT_DIR_URI . '/assets/src/library/js/bootstrap.min.js' , ['jquery'] , false , []);
           
        // Enqueue Scripts
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    
    }
}