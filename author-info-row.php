<div class="row author-info-row">
	<div class="col-xs-6 col-md-2">
		<?php echo get_avatar(get_the_author_meta('ID'), 128); ?>
	</div>
	<div class="col-xs-6 col-md-9 col-md-offset-1">
		<h4><?php the_author_meta('nickname'); ?></h4>
		<p><?php the_author_meta('description'); ?></p>
		<p>
			<a href="/">Kaikki kirjoitukseni</a>
		</p>
	</div>
</div>

