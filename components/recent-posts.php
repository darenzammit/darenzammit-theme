<?php if ($posts=get_posts(['posts_per_page'=>3, 'post__not_in' => [get_the_ID()]])): ?>
	<section class="recent-posts">
		<h4>Recent Articles</h4>
		<div class="recent-posts-cards">
			<?php foreach ($posts as $post): setup_postdata($post)?>
				<div>
					<a href="<?php the_permalink() ?>">
						<?php
						get_template_part('components/entry', 'meta');
						the_title( '<h5>', '</h5>' );
						?>
					</a>
				</div>
			<?php endforeach; wp_reset_postdata();  ?>
		</div>
	</section>
<?php endif ?>