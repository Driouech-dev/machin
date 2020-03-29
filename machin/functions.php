<?php

define('LGMAC_VERSION', '1.0.2');

function lgmac_scripts() {
	wp_enqueue_script('jquery',get_theme_file_uri('js/jquery-3.4.1.min.js',NULL,'3.1.1',true));
    wp_enqueue_script('js',get_theme_file_uri('js/js.js',NULL,'3.1.1',true));
	wp_enqueue_style( 'lgmac_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), LGMAC_VERSION , 'all'    );
	wp_enqueue_style( 'lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_bootstrap-core'), LGMAC_VERSION , 'all'    );

	wp_enqueue_script( 'lgmac_admin_script', get_template_directory_uri() . '/js/machin.js', array('jquery'), LGMAC_VERSION , true    );

wp_enqueue_style('style_css',get_stylesheet_uri());
} //fin function lgmac_scripts

add_action('wp_enqueue_scripts','lgmac_scripts');




function lgmac_admin_scripts() {

	
	wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.css', array(), LGMAC_VERSION );
}	// fin function lgmac_scripts

add_action('admin_init', 'lgmac_admin_scripts');








function lgmac_setup() {


	add_theme_support( 'post-thumbnails' );


	remove_action('wp_head', 'wp_generator');


	add_theme_support('title-tag');

}

add_action('after_setup_theme', 'lgmac_setup');