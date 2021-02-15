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

<?php if ($pagetype == "home") : ?>
  <?= get_template_part( 'template-parts/components/home/oppening-section' ); ?>

  <?= get_template_part( 'template-parts/components/category-listing' ); ?>

  <?= get_template_part( 'template-parts/components/home/why-us' ); ?>

  <?= get_template_part( 'template-parts/components/home/opinions' ); ?>

  <?= get_template_part( 'template-parts/components/home/last-blog-post' ); ?>

<?php endif; ?>

  <?= get_template_part( 'template-parts/components/footer-form' ); ?>


</main><!-- #site-content -->

<!-- < ?php get_footer(); ?> -->