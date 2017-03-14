<?php
/**
 * Template Name: Kirjoittajat-sivu
 *
 * @package Deeblogi
 */


get_header(); ?>

<div class="navigation_container">
	<?php get_template_part( 'navigation' ); ?> 
</div>

<div class="row page-container "> 
	<article id="post-<?php the_ID(); ?>" class="row  col-xs-12 no-margin">
		
		<header class="entry-header">
			<div class="entry-content-container entry-title entry-title-single centered-text" style="margin-left: 0;">
				<h1 style="margin-top: 25px; margin-bottom: 5px;"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>				
			</div>
			
			<div>
				<?php the_post_thumbnail(); ?>
			</div>
		</header>
		
		<div class="row entry-content-container blogpost-container" style="padding-left: 20px; padding-right: 20px; padding-bottom: 150px;">
			<div class="col-xs-12">
				<?php
					$blogusers = get_users( array( 'role' => 'author') );
					foreach ( $blogusers as $user ) :
				?>
						<a name="author<?php echo $user->id; ?>"></a>
						<div class="row author-collage">
							<div class="col-xs-12 col-md-3">
								<?php echo get_avatar($user->id, 210); ?>
							</div>
							
							<div class="col-xs-12 col-md-9">
								<h2><?php echo $user->first_name . " " . $user->last_name; ?></h2>
								<p><?php the_author_meta('description', $user->id); ?></p>
								<p><span class="read-more"><a href="<?php echo get_author_posts_url($user->id); ?>">Näytä kirjoitukset <i class="fa fa-angle-double-right"></i></a><span></p>
							</div>
						</div>
				<?php
					endforeach;
				?>
				
				<?php the_content(); ?>
			</div>
			
			
		</div>
			
		
	</article><!-- #post -->
</div>

<?php get_footer(); ?>



