<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php
function tho_scripts() {
	wp_enqueue_style('font-awesome',   get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style('bootstrap',      get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_script('bootstrap',     get_template_directory_uri() . '/js/bootstrap.js' );
	wp_enqueue_script('countdown',     get_template_directory_uri() . '/js/jquery.countdown.min.js' );
	wp_enqueue_script('scripts-head',  get_template_directory_uri() . '/js/scripts-head.js');
	wp_enqueue_script('scripts',       get_template_directory_uri() . '/js/scripts.js','','',true );
	wp_enqueue_script('mask',          get_template_directory_uri() . '/js/jquery-maske.js' );
	wp_enqueue_style( 'style',         get_stylesheet_uri() );
	wp_enqueue_style('style-less',     get_template_directory_uri() . '/css/index.less' );
	wp_enqueue_style('responsive',     get_template_directory_uri() . '/css/responsive.less' );
}

add_action( 'wp_enqueue_scripts', 'tho_scripts' );
?>