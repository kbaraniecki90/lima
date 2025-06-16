<?php
/**
 * Template Name: Cover Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<?= get_template_part( 'template-parts/components/entryPicture' ); ?>
<main id="site-content" role="main">
  <div class="container">
    <div class="row">
      <div class="col-12">
 
        <?php

        if ( have_posts() ) {

          while ( have_posts() ) {
            the_post();
            get_template_part( 'template-parts/content-cover' );
          }
        }

        ?>
     </div>
    </div>
  </div>
</main><!-- #site-content -->

<?= do_shortcode('[sc name="cta"]'); ?>

<?= do_shortcode('[sc name="contact-form"]'); ?>
<?php get_footer(); ?>