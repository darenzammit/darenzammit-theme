<!doctype html>
<html lang="en-GB">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php dz_brand(); ?>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Menu</button>
			<?php wp_nav_menu( array('theme_location' => 'primary') );?>
		</nav>
	</header>

	<div id="content" class="site-content">
