<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php

if ( ! function_exists( 'tho_setup' ) ) :
	function tho_setup() {
        
        remove_action('wp_head', 'wp_generator');
		
		//remove_action( 'admin_notices', 'woothemes_updater_notice' );
	
		//Title Support
		add_theme_support( 'title-tag' );

		//Images Support
		add_theme_support( 'post-thumbnails' );
        
        // Enable shortcodes in text widgets
        add_filter('widget_text', 'do_shortcode');
		
		//Custom Logo
		add_theme_support( 'custom-logo', array(
			'height'      => 82,
			'width'       => 184,
			'flex-height' => true,
		) );
		
		// Menu
		register_nav_menus( array(
			'principal' => __( 'Menu Principal', 'tho' ),
			'redes'	=> __( 'Redes Sociais', 'tho' ),
		) );
        
        //sidebars
        register_sidebar( array(
            'name'          => __( 'Barra Lateral', 'tho' ),
            'id'            => 'sidebar',
            'description'   => __( 'Adicione imagens abaixo do banner.', 'tho' ),
            'before_widget' => '<figure id="%1$s" class="widget %2$s">',
            'after_widget'  => '</figure>',
            'before_title'  => '',
            'after_title'   => '',
        ) );
		
		//add_image_size( 'tho-full', 815, 300, array( 'center', 'center' ) ); // Hard crop left top
		//add_image_size( 'tho-large', 575, 390, array( 'center', 'center' ) ); // Hard crop left top
		//add_image_size( 'tho-medium', 285, 190, array( 'center', 'center' ) ); // Hard crop left top
        
    }
    
    add_action( 'after_setup_theme', 'tho_setup' );

endif;
?>