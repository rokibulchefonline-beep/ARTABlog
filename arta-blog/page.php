<?php get_header(); ?>
<main>
<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class('entry'); ?>>
		<div class="meta"><?php echo esc_html(get_the_date()); ?></div>
		<h1><?php the_title(); ?></h1>
		<?php if (has_post_thumbnail()) the_post_thumbnail('large', ['class' => 'feature']); ?>
		<?php the_content(); ?>
		<p><a href="<?php echo esc_url(home_url('/')); ?>">&larr; Back to the blog</a></p>
	</article>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>
