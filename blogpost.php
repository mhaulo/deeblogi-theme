<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Deeblogi
 */
?>

<article id="post-<?php the_ID(); ?>" class="row blogpost col-xs-12">
		
	<header class="entry-header">
		<div class="entry-content-container entry-title entry-title-single centered-text">
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>				
		</div>
		
		<div class="single-post-thumbnail-container">
			<?php the_post_thumbnail(); ?>
		</div>
	</header>
	
	<div class="row entry-content-container blogpost-container">
		<div class="col-xs-12 col-md-8 blogpost-content">
			<?php the_content(); ?>
		</div>
		
		<div class="col-xs-12 col-md-4 ">
			<div class="row">
				<div class="post-page-author-info">
					<div class="" style="float:left">
						<div class="centered-text">
							<?php echo get_the_date(); ?>
						</div>
					
						<div class="centered-text">
							
							<?php 
								$cat_array = get_the_category(); 
								reset($cat_array);
								$first_cat = current($cat_array);
							?>
							
							<span class="post-category post-category-<?php if ( $first_cat != null) echo $first_cat->slug; ?>">
								<?php if ( $first_cat != null) echo $first_cat->cat_name; ?>
							</span>
							
						</div>
					
						<div class="article-author-container no-padding centered-text">
							<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author_meta('user_firstname'); ?> <?php the_author_meta('user_lastname'); ?></a> 
						</div>
					</div>
									
					<div class="avatar-container no-margin" style="padding-left: 10px;">
						<?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<p class="textwidget no-margin"><?php the_author_meta('description'); ?></p>
				<div class="read-more-container" style="margin-bottom: 40px;">
					<span class="read-more"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Kaikki kirjoitukseni <i class="fa fa-angle-double-right"></i></a><span>
				</div>
			</div>
			
			<div class="row">
				<div class="">
					<?php dynamic_sidebar('blogpost-sidebar-1'); ?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row entry-content-container blogpost-container">
		<div class="single-post-nav">
			<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<i class="fa fa-arrow-left"></i>', 'Previous post link', 'deeblogi' ) . '</span> %title' ); ?></div>
				
			<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '<i class="fa fa-arrow-right"></i>', 'Next post link', 'deeblogi' ) . '</span>' ); ?></div>
			<div style="clear:both"></div>
		</div>
	</div>
	
	<div class="row entry-content-container blogpost-container">
		<div class="col-xs-12 col-md-8">
			<?php comments_template( '', true ); ?>
		</div>
	</div>
		
	
</article><!-- #post -->
