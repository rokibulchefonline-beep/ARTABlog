<article <?php post_class('card reveal'); ?>>
	<?php if (has_post_thumbnail()) : ?><a class="thumbwrap" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large', ['class' => 'thumb']); ?></a><?php endif; ?>
	<div class="card-body">
		<div class="meta"><?php echo esc_html(get_the_date()); ?></div>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 26)); ?></p>
		<a class="more" href="<?php the_permalink(); ?>">Read story &rarr;</a>
	</div>
</article>
