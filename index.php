<?php get_header(); ?>

<?php genesis_card(); ?>

  <div class="wrap">
    <main class="home">
      <h2>Recent Posts</h2>

			<?php get_template_part('loop'); ?>

      <p><a href="/category/archives" class="more">view all posts</a></p>

     </main>
  </div>

<?php get_footer(); ?>
