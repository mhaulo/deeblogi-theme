<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deeblogi
 */

get_header(); 
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

?>



<div class="header_image_container">
<?php if ( get_header_image() ) : ?>
	<img src="<?php header_image(); ?>" class="header-image img-responsive" alt="" />
	
<?php endif; ?>
</div>
<div class="navigation_container">
	<?php get_template_part( 'navigation' ); ?> 
</div>	

<div class="row hidden-xs hidden-sm article-loop-container">
	<div class="col-md-9">
		<?php if ( $current_page == 1 ) : ?>
			<?php if ( have_posts() ) : ?>
				<div class="row">
					<?php  $deeblogi_post_index = 0; ?>
					<?php while (have_posts() ) : the_post(); ?>
						<?php 
							if ($deeblogi_post_index <= 1)
								get_template_part( 'content', get_post_format() ); 
							
							if (!is_sticky())
								$deeblogi_post_index++; 
						?>
					<?php endwhile; ?>
				</div>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
				<!-- <p>Ei vielä yhtään kirjoitusta</p> -->
			<?php endif; // end have_posts() check ?>
		<?php endif; ?>
	</div>
	
	<div class="col-md-3">
		<?php 
			if ($current_page == 1)
				get_sidebar(); 
		?>
	</div>
</div>

<?php if ( have_posts() ) : ?>
	<div class="row hidden-xs hidden-sm article-loop-container article-loop-container-minor">
		<div class="row">
			<?php  $deeblogi_post_index = 0; ?>
			<?php rewind_posts(); ?>
			<?php $items_on_row = 0; ?>
			<?php while (have_posts() ) : the_post(); ?>
				<?php 
					if ( ($current_page == 1 && $deeblogi_post_index >= 2) || $current_page > 1)  {
						
						if ($items_on_row == 2) {
							echo '</div>';
							echo '<div class="row hidden-xs hidden-sm article-loop-container article-loop-container-minor">';
							$items_on_row = 0;
						}
						get_template_part( 'content-alt', get_post_format() ); 
						$items_on_row++;
					}
						
					$deeblogi_post_index++; 
					wp_link_pages();
				?>
			<?php endwhile; ?>
		</div>
		
		
		<div class="row page-nav-separator">
			<?php deeblogi_content_nav( 'nav-below' ); ?> 
			<?php 
				if ( $current_page > 1)
					dynamic_sidebar('archive-bottom'); 
			?>
		</div>
			
			
	</div>
	
	
	
	<div class="row hidden-md hidden-lg">
		<div class="col-xs-12 col-md-8 no-padding">
			<div class="row">
				<?php  $deeblogi_post_index = 0; ?>
				<?php rewind_posts(); ?>
				<?php while (have_posts() ) : the_post(); ?>
					<?php 
						get_template_part( 'content', get_post_format() ); 
						
						if (!is_sticky())
							$deeblogi_post_index++; 
							
						wp_link_pages();
					?>
				<?php endwhile; ?>
			</div>
			
			<div class="row page-nav-separator">
				<?php deeblogi_content_nav( 'nav-below' ); ?> 
			</div>
		</div>

		<div class="col-xs-12 col-md-4 sidebar-container">
			<?php //get_sidebar(); ?>
		</div>
	</div>
	
<?php endif; // end have_posts() check ?>





<?php get_footer(); ?>