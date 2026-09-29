<?php get_header(); ?>
<section class="hero"><div class="wrap">
	<h1>The ARTA Blog</h1>
	<p>News, stories and guides from the Asian Restaurant &amp; Takeaway Awards.</p>
</div></section>
<main class="wrap"><div class="grid">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article <?php post_class('card'); ?>>
		<div class="meta"><?php echo esc_html(get_the_date()); ?></div>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 30)); ?></p>
		<a class="more" href="<?php the_permalink(); ?>">Read more</a>
	</article>
<?php endwhile; else : ?>
	<p>No posts yet.</p>
<?php endif; ?>
</div>
<?php the_posts_pagination(); ?>
</main>
<?php get_footer(); ?>
