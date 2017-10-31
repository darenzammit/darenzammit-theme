<!doctype html>
<html lang="en-GB">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">
				<?php dz_brand(); ?>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<?php wp_nav_menu( array('theme_location' => 'primary') );?>
			</nav>
		</div>
	</header>

	<section id="content" class="site-content">
