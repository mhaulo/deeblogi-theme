<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Deeblogi
 */

get_header(); ?>

<div class="navigation_container">
	<?php get_template_part( 'navigation' ); ?> 
</div>

<div class="row page-container "> 
	<?php if ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page'); ?>
	<?php endif; // end of the loop. ?>
</div>

<?php get_footer(); ?>
