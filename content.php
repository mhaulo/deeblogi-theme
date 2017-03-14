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

<article id="post-<?php the_ID(); ?>" class=" <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>featured-post<?php endif; ?> col-xs-12">
		
	<header class="entry-header">
		<div class="entry-content-container entry-title visible-xs visible-sm">
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</div>
		
		<div class="visible-md visible-lg">
			<div class="entry-content-container entry-title" style="float:left; max-width: 520px;">
				<?php if ($deeblogi_post_index == 0) : ?>
					<h2 class="heading-shadow"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php else: ?>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<?php endif; ?>
			</div>
			
			<?php 
				$cat_array = get_the_category(); 
				reset($cat_array);
				$first_cat = current($cat_array);
			?>
			
			
			<div class="front-page-author-info front-page-author-info-<?php if ( $first_cat != null) echo $first_cat->slug; ?>">
				<div style="position: absolute; right: 100px;">
					<div class="centered-text">
						<?php echo get_the_date(); ?>
					</div>
				
					<div>
						
						<span class="centered-text post-category-latest-posts post-category post-category-<?php if ( $first_cat != null) echo $first_cat->slug; ?>">
							<?php if ( $first_cat != null) echo $first_cat->cat_name; ?>
						</span>
					</div>
				
					<div class="article-author-container no-padding centered-text">
						<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author_meta('user_firstname'); ?> <?php the_author_meta('user_lastname'); ?></a> 
					</div>
				</div>
				
				<div class="">
					<div class="avatar-container no-margin" style="padding-left: 10px; position: absolute; right: 0; padding-right: 25px;">
						<?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="visible-xs visible-sm" id="post-thumbnail-container">
			<?php 
				if ( $deeblogi_post_index == 0 ) 
					the_post_thumbnail();
			?>
		</div>
		<div class="visible-md visible-lg" style="margin-left: 30px; " id="post-thumbnail-container-mdlg">
			<?php 
				if ( $deeblogi_post_index <= 1 ) 
					the_post_thumbnail();
			?>
		</div>
		
		
		
		<div class="entry-content-container entry-meta visible-xs visible-sm" <?php if ($deeblogi_post_index > 1) echo 'style="display:none !important"';  ?> >	
			<div class="row">
				<div class="col-xs-4 article-date-container">
					<?php echo get_the_date(); ?>
				</div>
				
				<div class="col-xs-4">
					<div class="avatar-container">
						<?php echo get_avatar(get_the_author_meta('ID'), 64); ?> 
					</div>
				</div>
				
				<div class="col-xs-4 article-author-container">
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author_meta('user_firstname'); ?> <?php the_author_meta('user_lastname'); ?></a> 
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 post-category-container">
					<span class="post-category post-category-<?php  if ( $first_cat != null) echo $first_cat->slug; ?>">
						<?php if ( $first_cat != null) echo $first_cat->cat_name; ?>
					</span>
				</div>
			</div>
		</div>
		
			
	</header>
		
	<div class="entry-content-container">
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
