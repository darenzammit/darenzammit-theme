<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package darenzammit
 */

get_header(); ?>

	<main id="main" class="container">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'components/content', get_post_type() );

		the_post_navigation();

		get_template_part('components/newsletter-form');

		// If comments are open or we have at least one comment, load up the comment template.
		// if ( comments_open() || get_comments_number() ) :
		// 	comments_template();
		// endif;

	endwhile; // End of the loop.
	?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
