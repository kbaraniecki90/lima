<?php wp_footer(); ?>

<?php
    $menuLocations = get_nav_menu_locations();
    $menuID = $menuLocations['footer'];
    $footerNav = wp_get_nav_menu_items($menuID);

?>

<footer id="footer" class="pt-2 pb-7">
    <div class="container">
        <nav class="d-flex justify-content-center flex-wrap nav-footer">
            <?php foreach ( $footerNav as $k => $navItem ) : ?>
                <a class="nav-link mb-1" aria-current="page" href="<?= $navItem->url ?>"><?= $navItem->title ?></a>
            <?php endforeach; ?>
        </nav>
	<p style="color: white;">
	Meble na zamówienie Wrocław - Lima Meble
	</p>
	<p style="color: white;">
	ul. Sądrożyce 7b<br>
	56-416 Twardogóra
	</p>
	<p style="color: white;">
	NIP: 9111937074<br>
	Tel. <a href="tel:+48732899899">+48 732 899 899</a><br>
	e-mail: <a href="mailto:biuro@limameble.pl">biuro@limameble.pl</a>	<br>
	</p>
    </div>
<div class="sm-panel">
	<ul>
		<li class="sm-gmap csocial-link"><a href="https://www.google.com/maps/place/LIMA+Meble+na+wymiar+-+Wroc%C5%82aw/@51.3433148,17.47265,704m/data=!3m2!1e3!4b1!4m6!3m5!1s0x470fff2cb81d0311:0x3bd540bbe36c5630!8m2!3d51.3433148!4d17.47265!16s%2Fg%2F11mj0d57nd!5m1!1e2?hl=en-PL&entry=ttu&g_ep=EgoyMDI1MDUyNy4wIKXMDSoASAFQAw%3D%3D" target="_blank"><img src="https://limameble.pl/wp-content/uploads/2025/05/gmap-icon.webp" alt="Jesteśmy na Google Maps"><span>Google Maps</span></a></li>
	</ul>
</div>
</footer>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "LocalBusiness",
	"name": "Meble na zamówienie Wrocław - Lima Meble",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "ul. Sądrożyce 7b",
		"addressLocality": "Twardogóra",
		"addressRegion": "",
		"postalCode": "56-416"
	},
	"image": "https://limameble.pl/wp-content/uploads/2021/02/logo.svg",
	"email": "biuro@limameble.pl",
	"telePhone": "+48 732 899 899",
	"url": "https://limameble.pl/",
	"priceRange":"$"

}
</script>
</body>
</html>