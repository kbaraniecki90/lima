<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<?php
  $pagetype = get_field('pagetype', get_the_ID());
?>
<?php if ($pagetype == "home") : ?>
  <?= get_template_part( 'template-parts/components/home/slider' ); ?>
<?php endif; ?>

<main id="site-content" role="main">

<?php if ($pagetype != "home") : ?>

<?= get_template_part( 'template-parts/components/entryPicture' ); ?>

<?php endif; ?>

<?php if ($pagetype == "home") : ?>
  <?= get_template_part( 'template-parts/components/home/oppening-section' ); ?>

  <?= get_template_part( 'template-parts/components/category-listing' ); ?>

  <?= get_template_part( 'template-parts/components/home/why-us' ); ?>
<?php endif; ?>

<?php if ($pagetype == "about") : ?>

  <?= get_template_part( 'template-parts/components/about/entry' ); ?>

  <?= get_template_part( 'template-parts/components/about/numbers' ); ?>

  <?= get_template_part( 'template-parts/components/about/features' ); ?>

<?php endif; ?>

<?php if ($pagetype == "offer") : ?>

  <?= get_template_part( 'template-parts/components/offer/oppening' ); ?>
  <?= get_template_part( 'template-parts/components/offer/listing' ); ?>

<?php endif; ?>

<?php if ($pagetype == "realizations") : ?>

  <?= get_template_part( 'template-parts/components/realizations/oppening' ); ?>

<?php endif; ?>

<?php if ($pagetype == "blog") : ?>

  <?= get_template_part( 'template-parts/components/about/entry' ); ?>

<?php endif; ?>

<?php if ($pagetype == "contact") : ?>

  <?= get_template_part( 'template-parts/components/contact/entry' ); ?>

<?php endif; ?>


<?php if ($pagetype == "home" || $pagetype == "about" ) : ?>

  <?= get_template_part( 'template-parts/components/home/opinions' ); ?>

<?php endif; ?>

<?php if ($pagetype == "home") : ?>

  <?= get_template_part( 'template-parts/components/home/last-blog-post' ); ?>

<?php endif; ?>

<?php if ($pagetype != "home") : ?>

  <?= do_shortcode('[sc name="cta"]'); ?>

<?php endif; ?>
  <?= do_shortcode('[sc name="contact-form"]'); ?>

</main><!-- #site-content -->

<!-- < ?php get_footer(); ?> -->