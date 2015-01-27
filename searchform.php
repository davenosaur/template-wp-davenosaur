<form role="search" method="get" id="searchform" action="<php echo home_url('/'); ?>">
	<div><label>
		<span class="screen-reader-text" for="s">Buscar</span>
		<input type="search" value=""   name="s" id="s"  placeholder="<?php the_search_query(); ?>" />
	</label>
	<input type="submit" id="searchsubmit" value="Buscar">
</div>
</form>