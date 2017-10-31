<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package darenzammit
 */

?>

<article id="post-<?php the_ID(); ?>" class="entry-single">
	
	<header class="entry-header">
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
			get_template_part('components/entry','meta');
		?>
	</header>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'darenzammit' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'darenzammit' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<?php get_template_part('components/entry','footer'); ?>

</article><!-- #post-<?php the_ID(); ?> -->
