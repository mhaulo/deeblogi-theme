<nav class="navbar navbar-default navbar-default main_menu" role="navigation">
	<?php if (is_single() || is_page()): ?>
		<div class="container-fluid single_post_main_menu_text_row">
	<?php else: ?>
		<div class="container-fluid main_menu_text_row">
	<?php endif; ?>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main_menu_brand" id="main_menu_brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/dee_logo_h204.png" class="logo"></a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
	<?php
		wp_nav_menu( 
			array(
				'theme_location'  => 'primary',
				'depth'           => 1,
				'container'       => false,
				'menu_class'      => 'nav navbar-nav',
				'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
				'walker'          => new wp_bootstrap_navwalker()
			) 
		);
	?>
	
    </div> <!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->
</nav>