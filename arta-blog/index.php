<?php get_header(); ?>
<main class="wrap block" style="padding:72px 22px"><div class="grid">
<?php if (have_posts()) : while (have_posts()) : the_post(); get_template_part('card'); endwhile; else : ?>
	<p>No posts yet.</p>
<?php endif; ?>
</div><?php the_posts_pagination(); ?></main>
<?php get_footer(); ?>
