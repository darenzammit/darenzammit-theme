<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package darenzammit
 */

get_header(); ?>


	<main id="main" class="container">

	<?php
	if ( have_posts() ) : ?>

		<?php if (is_archive()): ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header>
		<?php endif ?>

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();
			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'components/content', 'summary' );
		endwhile;
		the_posts_navigation();
	else :
		get_template_part( 'components/content', 'none' );
	endif; ?>

	</main><!-- #main -->


<?php
get_sidebar();
get_footer();