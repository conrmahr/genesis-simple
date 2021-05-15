<?php get_header(); ?>

  <div class="wrap">
    <main class="home">
      <h2><?php _e( 'Posts by ', 'genesis' ); echo get_the_author() ; ?></h2>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
    </main>
  </div>

<?php get_footer(); ?>
