<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Deeblogi
 */
?>
<?php global $deeblogi_post_index; ?>

<article id="post-<?php the_ID(); ?>" class="centered-text <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>featured-post<?php endif; ?> col-xs-12">
		
	Ei kirjoituksia
	
</article><!-- #post -->
