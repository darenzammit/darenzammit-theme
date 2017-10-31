<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package darenzammit
 */

?>

<article id="post-<?php the_ID(); ?>" class="entry">
	
	<header class="entry-header">
		<?php
		the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
		get_template_part('components/entry','meta');
		?>
	</header>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<?php get_template_part('components/entry','footer'); ?>

</article><!-- #post-<?php the_ID(); ?> -->
