(function () {
	var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	var bar = document.getElementById('progress');
	var hero = document.querySelector('.hero');
	function onScroll() {
		var h = document.documentElement.scrollHeight - window.innerHeight;
		if (bar) bar.style.width = (h > 0 ? (window.scrollY / h) * 100 : 0) + '%';
		if (hero && !reduce) hero.style.setProperty('--py', window.scrollY);
	}
	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();
	var items = document.querySelectorAll('.reveal');
	if ('IntersectionObserver' in window && !reduce) {
		var io = new IntersectionObserver(function (es) {
			es.forEach(function (e) {
				if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
			});
		}, { threshold: 0.12 });
		items.forEach(function (el, i) { el.style.transitionDelay = (i % 3) * 90 + 'ms'; io.observe(el); });
	} else {
		items.forEach(function (el) { el.classList.add('in'); });
	}
	var counters = document.querySelectorAll('[data-count]');
	function run(el) {
		var end = parseInt(el.dataset.count, 10), suffix = el.dataset.suffix || '', t0 = null;
		function step(t) {
			if (!t0) t0 = t;
			var p = Math.min((t - t0) / 1600, 1);
			el.textContent = Math.floor(end * (1 - Math.pow(1 - p, 3))) + suffix;
			if (p < 1) requestAnimationFrame(step);
		}
		requestAnimationFrame(step);
	}
	if ('IntersectionObserver' in window && !reduce) {
		var co = new IntersectionObserver(function (es) {
			es.forEach(function (e) { if (e.isIntersecting) { run(e.target); co.unobserve(e.target); } });
		}, { threshold: 0.6 });
		counters.forEach(function (c) { co.observe(c); });
	} else {
		counters.forEach(function (c) { c.textContent = c.dataset.count + (c.dataset.suffix || ''); });
	}
	if (!reduce) {
		document.querySelectorAll('.card').forEach(function (c) {
			c.addEventListener('mousemove', function (e) {
				var r = c.getBoundingClientRect();
				var x = (e.clientX - r.left) / r.width - 0.5, y = (e.clientY - r.top) / r.height - 0.5;
				c.style.transform = 'perspective(800px) rotateY(' + x * 6 + 'deg) rotateX(' + -y * 6 + 'deg) translateY(-4px)';
			});
			c.addEventListener('mouseleave', function () { c.style.transform = ''; });
		});
	}
})();
