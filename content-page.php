<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Deeblogi
 */
?>

<article id="post-<?php the_ID(); ?>" class="row page col-xs-12 no-margin">
		
	<header class="entry-header">
		<div class="entry-content-container entry-title visible-xs visible-sm">
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</div>
		
		<div class="visible-md visible-lg">
			<div class="entry-content-container entry-title entry-title-single centered-text">
				<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>				
			</div>
		</div>
		
		<div>
			<?php the_post_thumbnail(); ?>
		</div>
		
		
			
	</header>
		
	<div class="entry-content-container page-body-container row">
		<div class="col-xs-12">
			<?php the_content(); ?>
		</div>
	</div>
	
	
</article><!-- #post -->
