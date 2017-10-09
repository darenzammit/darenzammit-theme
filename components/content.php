<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package darenzammit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		<?php get_template_part('components/entry','meta'); ?>
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
