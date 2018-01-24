<?php
add_action('init', 'type_post_banners');
 
function type_post_banners() { 
    $labels = array(
        'name' => _x('Banners', 'post type general name'),
        'singular_name' => _x('Banner', 'post type singular name'),
        'add_new' => _x('Adicionar Novo', 'Novo item'),
        'add_new_item' => __('Novo Item'),
        'edit_item' => __('Editar Item'),
        'new_item' => __('Novo Item'),
        'view_item' => __('Ver Item'),
        'search_items' => __('Procurar Itens'),
        'not_found' =>  __('Nenhum registro encontrado'),
        'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Banners'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,			
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 6,	
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title','editor','thumbnail')
    );

    register_post_type( 'banner' , $args );
    flush_rewrite_rules();
    
    register_taxonomy_for_object_type( 'product_cat', 'banner' );
}


add_action( 'add_meta_boxes', 'add_banner_metaboxes' );
function add_banner_metaboxes() {
	add_meta_box('link_meta_banner', 'Link', 'link_meta_banner', 'banner', 'normal', 'high');
	add_meta_box('pages_meta_banner', 'Mostrar na Página', 'pages_meta_banner', 'banner', 'side', 'low');
}


function link_meta_banner() {
	global $post;
	
	echo '<input type="hidden" name="banner_link_meta_noncename" id="banner_link_meta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	$url = get_post_meta($post->ID, '_url', true);
	
	?>
	<label> URL: <input type="text" name="_url" value="<?=$url?>" class="widefat" /></label>
    <?php
}
function pages_meta_banner() {
	global $post;
	
	echo '<input type="hidden" name="banner_page_meta_noncename" id="banner_page_meta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	$page = get_post_meta($post->ID, '_page', true);
    
    $args = array(
        'depth'                 => 0,
        'child_of'              => 0,
        'selected'              => $page,
        'echo'                  => 1,
        'name'                  => '_page',
        'id'                    => null, // string
        'class'                 => null, // string
        'show_option_none'      => 'Selecione', // string
        'show_option_no_change' => null, // string
        'option_none_value'     => null, // string
    ); 
    wp_dropdown_pages( $args );
}


function save_meta_banner($post_id, $post) {
    
    if(isset($_POST['banner_link_meta_noncename'])){
	
        if ( !wp_verify_nonce( $_POST['banner_link_meta_noncename'], plugin_basename(__FILE__) )) {
            return $post->ID;
        }
    }
    if(isset($_POST['banner_page_meta_noncename'])){
        if( !wp_verify_nonce( $_POST['banner_page_meta_noncename'], plugin_basename(__FILE__) )){
            return $post->ID;
        }
    }
    
    if ( !current_user_can( 'edit_post', $post->ID ))
        return $post->ID;

    $banner_meta['_url'] = isset($_POST['_url']) ? $_POST['_url'] : "";
    $banner_meta['_page'] = isset($_POST['_page']) ? $_POST['_page'] : "";

    foreach ($banner_meta as $key => $value) {
        if( $post->post_type == 'revision' ) return;
        $value = implode(',', (array)$value);
        if(get_post_meta($post->ID, $key, FALSE)) {
            update_post_meta($post->ID, $key, $value);
        } else {
            add_post_meta($post->ID, $key, $value);
        }
        if(!$value) delete_post_meta($post->ID, $key);
    }

}
add_action('save_post', 'save_meta_banner', 1, 2);
?>