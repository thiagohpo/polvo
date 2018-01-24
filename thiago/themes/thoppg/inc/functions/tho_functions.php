<?php 

if ( ! defined( 'ABSPATH' ) ) { exit; }

//*****************************************
//******** WORDPRESS **********************
//*****************************************

function get_banner($page = ''){
    if(empty($page)):
        get_template_part('banner');
    else:
        get_template_part('banner-'.$page);
    endif;
}

function get_banner_page($id_page=''){
    $args = array(
    'meta_key' => '_page',
    'meta_value' => $id_page,
    'post_type' => 'banner',
    'post_status' => 'Publish',
    'posts_per_page' => -1
);
$posts = get_posts($args);
return $posts;
}
function get_banner_all(){
    $args = array(
    'post_type' => 'banner',
    'post_status' => 'Publish',
    'posts_per_page' => -1
);
$posts = get_posts($args);
return $posts;
}

function get_banner_taxonomy( $id_term = ''){
    $args = array( 
       'post_type' => 'banner', 
       'tax_query'=> array(array(
            'taxonomy' => 'product_cat',
            'field' => 'id',
            'terms' => $id_term,
        ))
    );
    $return = get_posts( $args );
    return $return;
}

function get_id_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
} 

function tho_get_custom_post_by_term($post_type = 'banner',$terms = 'home'){
    $args = array( 
       'post_type' => $post_type, 
       'tax_query'=> array(array(
            'taxonomy' => 'galerias',
            'field' => 'slug',
            'terms' => $terms,
        ))
    );
    $return = get_posts( $args );
    return $return;
}



//*****************************************
//******** WOOCOMMERCE ********************
//*****************************************

function tho_wc_get_cat(){
  $taxonomy     = 'product_cat';
  $orderby      = 'id';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 0;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
		 'parent'       => 0,
         'title_li'     => $title,
         'hide_empty'   => $empty,
		 'exclude'		=> array(274,284)
  );
  
  return get_categories( $args );
}

function tho_wc_get_cat_child($id){
	
	$taxonomy     = 'product_cat';
	$orderby      = 'id';  
	$show_count   = 0;      // 1 for yes, 0 for no
	$pad_counts   = 0;      // 1 for yes, 0 for no
	$hierarchical = 0;      // 1 for yes, 0 for no  
	$title        = '';  
	$empty        = 0;
	
	$args = array(
		'taxonomy'     => $taxonomy,
		'child_of'     => 0,
		'parent'       => $id,
		'orderby'      => $orderby,
		'show_count'   => $show_count,
		'pad_counts'   => $pad_counts,
		'hierarchical' => $hierarchical,
		'title_li'     => $title,
		'hide_empty'   => $empty
	  );
  
  return get_categories( $args );
}
?>