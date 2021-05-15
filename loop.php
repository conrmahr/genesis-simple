
<ul class="posts">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> <time class="dt-published published"><?php the_time('M d, Y'); ?></time>
			</li>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'genesis' ); ?></h2>
		</article>
		<!-- /article -->

	<?php endif; ?>
	</ul>