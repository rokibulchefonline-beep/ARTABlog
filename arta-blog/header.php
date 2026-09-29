<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header"><div class="wrap">
	<div>
		<a class="brand" href="<?php echo esc_url(home_url('/')); ?>">AR<span>TA</span></a>
		<p class="tagline"><?php bloginfo('description'); ?></p>
	</div>
	<nav class="nav">
		<a href="<?php echo esc_url(home_url('/')); ?>">Blog</a>
		<a href="https://www.facebook.com/ArtaAwards/" rel="noopener">Facebook</a>
		<a href="https://www.instagram.com/artaaward/" rel="noopener">Instagram</a>
		<a href="https://www.linkedin.com/company/artaawards" rel="noopener">LinkedIn</a>
	</nav>
</div></header>
