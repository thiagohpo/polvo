<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
	<label>
		<input type="search" class="search-field" placeholder="Pesquisar" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
</form>