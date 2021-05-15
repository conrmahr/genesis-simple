<?php get_header(); ?>

  <div class="wrap">
    <main class="home">
      <h2><?php echo single_tag_title('', false); ?></h2>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
    </main>
  </div>

<?php get_footer(); ?>