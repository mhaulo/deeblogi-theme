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

<article id="post-<?php the_ID(); ?>" class=" <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>featured-post<?php endif; ?> col-xs-12 col-md-6">
		
	<header class="entry-header">
		<div class="entry-content-container entry-meta">	
			<div class="row">
				<div class="col-xs-4 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 article-date-container">
					<?php echo get_the_date(); ?>
				</div>
				
				<div class="col-xs-4 col-sm-2">
					<div class="avatar-container">
						<?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
					</div>
				</div>
				
				<div class="col-xs-4 article-author-container">
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author_meta('user_firstname'); ?> <?php the_author_meta('user_lastname'); ?></a> 
				</div>
			</div>
		</div>
		
		<div class=" entry-content-container entry-title centered-text">
			<h2 class="no-margin"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</div>
		
		
		<div class="post-category-container">
			<?php 
				$cat_array = get_the_category(); 
				reset($cat_array);
				$first_cat = current($cat_array);
			?>
			
			<?php if ( $first_cat != null) : ?>
				<span class="post-category post-category-<?php if ( $first_cat != null) echo $first_cat->slug; ?>">
					<?php if ( $first_cat != null) echo $first_cat->cat_name; ?>
				</span>
			<?php endif; ?>	
		</div>
		
	</header>
		
	<div class="entry-content-container small-article-lift">
		<?php
			if ( is_single() ) {
				the_content();
				echo '<p style="text-align: center;"><i class="fa fa-ellipsis-h"></i></p>';
			}
			else {
				echo '<div class="post_excerpt">';
				the_excerpt(); 
				echo '</div>';
			}
		?>
		
		<div class="read-more-container">
			<span class="read-more"><a href="<?php the_permalink(); ?>">Lue koko juttu <i class="fa fa-angle-double-right"></i></a><span>
		</div>
	</div>
	
	<?php if (is_single()): ?>
		<footer>
			<?php get_template_part('author-info-row', ''); ?>
			<div class="single-post-nav">
				<hr>
				<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<i class="fa fa-arrow-left"></i>', 'Previous post link', 'deeblogi' ) . '</span> %title' ); ?></div>
				
				<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '<i class="fa fa-arrow-right"></i>', 'Next post link', 'deeblogi' ) . '</span>' ); ?></div>
				<div style="clear:both"></div>
				<hr>
			</div>
			
			<?php comments_template( '', true ); ?>
			
		</footer>
	<?php endif; ?>
	
</article><!-- #post -->
