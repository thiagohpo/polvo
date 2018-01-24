<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<?php get_header(''); ?>

<div class="container">
    <section class="row">
        <div class="col-sm-9">
           <h1 class="page_title">Novidades</h1>
           
            <?php while ( have_posts() ) : the_post(); ?>
               <article class="simple-post">
                   <figure class="col-sm-5"><?php the_post_thumbnail('medium');?></figure>
                   <div class="col-sm-7">
                      <?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                       <p><?php the_excerpt(); ?></p>
                       <a class="post_link" href="<?php the_permalink();?>">Continue lendo</a>
                   </div>
                   <div class="clear"></div>
                </article>
            <?php endwhile; wp_reset_query(); ?>
            
            <?php the_posts_pagination( array(
				'prev_text'          => __( '<i class="fa fa-angle-left" aria-hidden="true"></i> Página Anterior', 'tho' ),
				'next_text'          => __( 'Próxima Página <i class="fa fa-angle-right" aria-hidden="true"></i>', 'tho' ),
				'before_page_number' => '',
                'screen_reader_text' => '&nbsp;',
			) );?>
        </div>
        <div class="col-sm-3">
            <?php get_sidebar();?>
        </div>
            
    </section>
</div>

<?php get_footer(); ?>