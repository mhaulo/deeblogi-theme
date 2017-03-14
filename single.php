<?php
/**
 * The Template for displaying all single posts
 *
 * @package Deeblogi
 */

get_header(); ?>

<div class="navigation_container">
	<?php get_template_part( 'navigation' ); ?> 
</div>

<div class="row page-container "> 
	<?php if ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'blogpost', get_post_format() ); ?>
	<?php endif; // end of the loop. ?>
</div>

<?php get_footer(); ?>
