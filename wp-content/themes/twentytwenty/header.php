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

		<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

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

  <nav class="navbar navbar-expand-lg ">
    <div class="container">
    <?php twentytwenty_site_logo(); ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <?php foreach ( $primaryNav as $k => $navItem ) : ?>
          <a class="nav-link " aria-current="page" href="<?= $navItem->url ?>"><?= $navItem->title ?></a>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </nav>
		<?php
