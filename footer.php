<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Deeblogi
 */
?>
	
</div><!-- #page -->
	<div class="authors-block">
		<div class="container hidden-xs hidden-sm">
			<h2 class="centered-text">Deeblogin kirjoittajat</h2>
			<div class="row">
				<?php
					$blogusers = get_users( array( 'role' => 'author' ) );
					foreach ( $blogusers as $user ) {
				?>
						<div class="col-md-3 authors-block-item"><a href="<?php echo get_author_posts_url($user->id); ?>"><?php echo get_avatar($user->id, 64); ?><?php echo $user->first_name . " " . $user->last_name; ?></a></div>
				<?php
					}
				?>
			</div>
		</div>
		
		<div class="container hidden-md hidden-lg">
			<h2 class="centered-text">Kirjoittajat</h2>
			<div class="row draggable">
				<?php
					$blogusers = get_users( array( 'role' => 'author' ) );
					foreach ( $blogusers as $user ) {
				?>
						<div class="col-xs-4 authors-block-item" ><a href="<?php echo get_author_posts_url($user->id); ?>"><?php echo get_avatar($user->id, 64); ?></a><?php //echo $user->first_name . " " . $user->last_name; ?></div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<footer class="page-footer" role="contentinfo">
		<div class="container sponsors">
			<div class="site-info row">
				
				<div class="col-xs-12 col-sm-6 col-md-2 sponsor-container">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ray_tukee.png" class="sponsor-image">
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-2 sponsor-container">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ufd.png" class="sponsor-image">
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-2 sponsor-container">
					<img src="<?php echo get_template_directory_uri(); ?>/img/yksi_elama.png" class="sponsor-image">
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-3 sponsor-container">
					<img src="<?php echo get_template_directory_uri(); ?>/img/diabetesliitto.png" class="sponsor-image">
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-3 sponsor-container">
					<p class="centered-text"><a href="http://facebook.com/" target="_blank">Deeblogi Facebookissa <i class="fa fa-angle-double-right"></i></a><br>
					<a href="http://twitter.com" target="_blank">Twitter @Deeblogi <i class="fa fa-angle-double-right"></i></a></p>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer>



<?php wp_footer(); ?>
</body>

<script>

	$(function() {
		$( ".draggable" ).draggable({
			axis: "x"
		});
	});
	
</script>

</html>