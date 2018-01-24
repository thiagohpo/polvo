<nav>
   <h3 class="page_title">Redes Sociais</h3>
    <?php if ( has_nav_menu( 'redes' ) ) : ?>
    <?php wp_nav_menu( array(
                'menu'              => 'redes',
                'theme_location'    => 'redes',
                'depth'             => 0,
                'menu_class'        => 'nav navbar-nav redes', 
                'menu_id'           => ''
            ) );?>
    <?php endif; ?>
    <div class="clear"></div>
</nav>
<?php
dynamic_sidebar( 'sidebar' );
?>
