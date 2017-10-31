<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package darenzammit
 */

?>

	</section>

	<?php get_template_part('components/recent-posts'); ?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			&copy; <?php echo Date('Y') ?> <a href="<?php echo home_url() ?>">Daren Zammit</a>
		</div>
	</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
