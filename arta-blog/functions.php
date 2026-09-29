<?php
add_action('after_setup_theme', function () {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', ['search-form', 'comment-list', 'gallery', 'caption']);
	register_nav_menu('primary', 'Primary menu');
});
add_action('wp_enqueue_scripts', function () {
	$dir = get_stylesheet_directory();
	wp_enqueue_style('arta-blog', get_stylesheet_uri(), [], filemtime($dir . '/style.css'));
	wp_enqueue_script('arta-blog', get_theme_file_uri('assets/main.js'), [], filemtime($dir . '/assets/main.js'), true);
});
