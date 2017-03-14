<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="row" style="height: 30px; padding-left: 10px; padding-right: 10px;">
		<div class="col-xs-12 col-md-9" style="padding-left: 0;">
			<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="" />
		</div>
		<div class="col-xs-12 col-md-3" style="padding-left: 0; padding-right: 0;">
			<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
		</div>
	</div>
</form>
