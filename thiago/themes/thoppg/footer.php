<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
</main>
<footer id="footer-principal" class="container-fluid">
    <section class="container">
        <div class="row">

            <div class="col-sm-7 menu-footer">
                <?php if ( has_nav_menu( 'principal' ) ) : ?>
                <?php wp_nav_menu( array(
                    'menu'              => 'principal',
                    'theme_location'    => 'principal',
                    'depth'             => 2,
                    'container'       => '', 
                    'menu_class'     => 'nav navbar-nav', 
                    'menu_id'         => ''
                ) );?>
                <?php endif; ?>
            </div>
            <div class="col-sm-2 redes-footer">
               <h4>Redes Sociais</h4>
                <?php if ( has_nav_menu( 'redes' ) ) : ?>
                <?php wp_nav_menu( array(
                            'menu'              => 'redes',
                            'theme_location'    => 'redes',
                            'depth'             => 0,
                            'menu_class'        => 'nav navbar-nav redes', 
                            'menu_id'           => ''
                        ) );?>
                <?php endif; ?>
            </div>
            <div class="col-sm-3 logo-footer">
                <div class="pull-right"><img src="<?=get_template_directory_uri()?>/images/estrutura/logo-branco.png" alt=""></div>
            </div>
            

        </div>
    </section>

</footer>
</section>

<?php wp_footer(); ?>
</body>

</html>