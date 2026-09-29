<?php get_header(); ?>
<section class="hero">
	<div class="grid-bg"></div>
	<div class="wrap">
		<span class="eyebrow">Asian Restaurant &amp; Takeaway Awards</span>
		<h1>Where great <span class="grad">Asian food</span> meets the future.</h1>
		<p>Stories, tips and spotlights celebrating the kitchens, teams and takeaways that raise the standard.</p>
		<a class="btn" href="#stories">Explore stories</a>
		<a class="btn ghost" href="https://www.instagram.com/artaaward/" rel="noopener">Follow ARTA</a>
	</div>
	<div class="scroll-cue"></div>
</section>
<div class="ticker"><div>
<?php for ($i = 0; $i < 2; $i++) : ?>
	<span>Quality</span><b>&#9670;</b><span>Service</span><b>&#9670;</b><span>Community</span><b>&#9670;</b><span>Flavour</span><b>&#9670;</b><span>Craft</span><b>&#9670;</b><span>Hospitality</span><b>&#9670;</b>
<?php endfor; ?>
</div></div>
<section class="block"><div class="wrap">
	<div class="section-head reveal"><h2>Built on <span class="grad">people</span> and passion</h2><p>What ARTA stands for, at a glance.</p></div>
	<div class="stats">
		<div class="stat reveal"><strong class="grad" data-count="5" data-suffix="">0</strong><span>Social platforms to follow ARTA</span></div>
		<div class="stat reveal"><strong class="grad" data-count="<?php echo (int) wp_count_posts()->publish; ?>">0</strong><span>Stories published</span></div>
		<div class="stat reveal"><strong class="grad" data-count="3">0</strong><span>Habits behind standout businesses</span></div>
	</div>
</div></section>
<section class="block" id="stories"><div class="wrap">
	<div class="section-head reveal"><h2>Latest <span class="grad">stories</span></h2><p>Fresh reads for restaurant and takeaway owners.</p></div>
	<div class="grid">
	<?php if (have_posts()) : while (have_posts()) : the_post(); get_template_part('card'); endwhile; endif; ?>
	</div>
	<?php the_posts_pagination(); ?>
</div></section>
<section class="block"><div class="wrap">
	<div class="section-head reveal"><h2>How to <span class="grad">stand out</span></h2><p>Three habits behind every award-worthy business.</p></div>
	<div class="steps">
		<div class="step reveal"><div><h3>Nail the basics</h3><p>Accurate listings, clear menus and dependable opening hours.</p></div></div>
		<div class="step reveal"><div><h3>Show your craft</h3><p>Great photos and regular posts turn browsers into customers.</p></div></div>
		<div class="step reveal"><div><h3>Listen and reply</h3><p>Answer every review with care and let feedback shape the menu.</p></div></div>
	</div>
</div></section>
<section class="block"><div class="wrap"><div class="cta reveal">
	<h2>Join the <span class="grad">ARTA</span> community</h2>
	<p>Follow along for news, spotlights and ideas from the awards.</p>
	<a class="btn" href="https://www.facebook.com/ArtaAwards/" rel="noopener">Facebook</a>
	<a class="btn ghost" href="https://www.linkedin.com/company/artaawards" rel="noopener">LinkedIn</a>
</div></div></section>
<?php get_footer(); ?>
