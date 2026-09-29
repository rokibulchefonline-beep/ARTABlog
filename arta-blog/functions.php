<?php
add_action('after_setup_theme', function () {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', ['search-form', 'comment-list', 'gallery', 'caption']);
	register_nav_menu('primary', 'Primary menu');
});
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('arta-blog', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
});
