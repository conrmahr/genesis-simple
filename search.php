<?php get_header(); ?>

  <div class="wrap">
    <main class="home">
			<h2><?php echo sprintf( __( '%s Search Results for ', 'genesis' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
    </main>
  </div>

<?php get_footer(); ?>