<?php
/*
Template Name: 404
*/
?>
<?php get_header();?>
<?php get_template_part('template/modal');?>
<div class="container pagina_404">

	<div class="col-sm-12">
    
		<p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Ops, página não encontrada!</p>
    
        <span>Você será redirecionado em instantes...</span>
        
        <div class="clear" style="margin-bottom:30px;"></div>
        
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
        <span class="sr-only">Loading...</span>
        
        <script>
            window.setTimeout(function(){
                window.location='<?=get_site_url()?>';
            },3000);
        </script>
    
    </div>
	
</div>
<?php get_footer( 'shop' ); ?>
