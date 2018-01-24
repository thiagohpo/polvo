<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<?php get_header(''); ?>

<?php do_action('woocommerce_before_main_content')?>
    
	<section class="container">
           
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_title('<h1 class="titulo"><span>','</span></h1>');?>
            <?php the_content(); ?>
        <?php endwhile; wp_reset_query(); ?>
    
    </section>

<?php do_action('woocommerce_after_main_content')?>

<?php get_footer(); ?>