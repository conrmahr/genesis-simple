<?php get_header(); ?>

<div class="wrap">
    <main>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="p-name entry-title"><a href="<?php echo get_yourls_shortlink(); ?>"><?php the_title(); ?></a></h1>

    <p class="entry-meta">
      Published on 
      <a href="<?php the_permalink(); ?>" class="u-url url">
        <time class="dt-published published dt-updated updated" datetime="<?php the_time('Y-m-d\TH:i:sP'); ?>" title="<?php the_time('Y-m-d\TH:i:sP'); ?>">
          <?php the_time('F jS, Y'); ?> at <?php the_time('g:i a'); ?> CST
        </time>
      </a>
      by
      <span class="p-author h-card author vcard">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 14 ); ?>&nbsp;<?php the_author_posts_link(); ?>
      </span>
      <br>
      <?php the_tags( __( 'Filled to: ', 'genesis' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
      Share with:
        <a href="http://twitter.com/intent/tweet?url=<?php echo get_yourls_shortlink(); ?>&text=<?php echo '&#x2712; ' . esc_html( get_the_title()); ?>&via=conrmahr">Twitter</a>,
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_yourls_shortlink(); ?>&t=<?php echo '&#x2712; ' . esc_html( get_the_title()); ?>">Facebook</a>,
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_yourls_shortlink() ?>">LinkedIn</a>
      </p>

  </header>

  <div class="e-content entry-content">

  <?php the_content(); // Dynamic Content ?>

    <div class="nav-previous alignleft"><?php previous_post_link(); ?></div>
    <div class="nav-next alignright"><?php next_post_link(); ?></div>

          <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

    <div class="comments">
      <?php comments_template(); ?>
    </div>

  </div>

  </div> 

  </div>

</article>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'genesis' ); ?></h1>

		</article>
		<!-- article -->

	<?php endif; ?>

    </main>
  </div>

<?php get_footer(); ?>
