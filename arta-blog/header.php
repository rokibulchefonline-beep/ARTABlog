<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="progress"></div>
<header class="site-header"><div class="wrap">
	<a class="brand" href="<?php echo esc_url(home_url('/')); ?>">AR<span>TA</span></a>
	<nav class="nav">
		<a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
		<a href="<?php echo esc_url(home_url('/#stories')); ?>">Stories</a>
		<a href="https://www.instagram.com/artaaward/" rel="noopener">Instagram</a>
		<a href="https://www.linkedin.com/company/artaawards" rel="noopener">LinkedIn</a>
	</nav>
</div></header>
