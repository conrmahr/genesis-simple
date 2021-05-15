<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link href="//www.google-analytics.com" rel="dns-prefetch" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" />

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
<body>
  <header class="site-header">
    <div class="wrap">
      <div class="title-area">
        <h1 class="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <div class="site-description"><?php bloginfo('description'); ?></div>
      </div>
      <nav class="site-nav">
        <ul>
          <li>
          <a class="page-link" href="/about">about</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
