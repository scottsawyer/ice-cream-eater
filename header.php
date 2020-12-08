<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,minumum-scale=1.0,maximum-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="page-header">
		<div class="branding">
			<img src="<?php print get_template_directory_uri(); ?>/logo.svg" class="site-logo">
			<p class="site-name">
				<a href="<?php bloginfo( 'url' ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			</p>
		</div>
		<a 
			href="#header-menu" 
			id="header-menu-toggle"
			class="menu-toggle menu-open hide-for-medium"
			aria-label="Open main menu">
			<span class="screen-reader">Open main menu</span>
			<span class="toggle-icon" aria-hidden="true">&plus;</span>
		</a>
		<nav id="header-menu" class="header-menu" aria-label="Main menu">
			<a
				href="#header-menu-toggle"
				class="menu-toggle menu-close hide-for-medium"
				id="header-menu-close"
				aria-label="Close main menu">
				<span class="screen-reader">Close main menu</span>
				<span class="toggle-icon" aria-hidden="true">&times;</span>
			</a>
			<?php wp_nav_menu( ['theme_location' => 'header_navigation'] ); ?>
		</nav>
		<a 
			href="#header-menu-toggle"
			class="backdrop"
			tabindex="-1"
			aria-hidden="true"
			hidden></a>
	</header>