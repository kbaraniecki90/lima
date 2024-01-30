<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="google-site-verification" content="ShPD2SUfINJfovirbqZpphaKpWhwwFFiMN3Cxh14d8E" />
	<meta name="google-site-verification" content="UJiPzJ3vpyIQl8_Plneowu4wJerxl8pKvOvIMHfLZzI" />
		<link rel="profile" href="https://gmpg.org/xfn/11">
    <script defer
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
    <script defer
	 type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '5206690449433085'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=5206690449433085&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y59CWMLEKK"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-Y59CWMLEKK');
	</script>
	<!-- End Google tag -->
	</head>
	<body <?php body_class(); ?>>

  <?php
  wp_body_open();
  ?>
  <?php
    $menuLocations = get_nav_menu_locations();
    $menuID = $menuLocations['primary'];
    $primaryNav = wp_get_nav_menu_items($menuID);

  ?>

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
    <?php twentytwenty_site_logo(); ?>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav w-100 pt-2 p-lg-0">
        <?php foreach ( $primaryNav as $k => $navItem ) : ?>
          <a class="nav-link " aria-current="page" href="<?= $navItem->url ?>"><?= $navItem->title ?></a>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </nav>
		<?php
