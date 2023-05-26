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
<?= get_template_part( 'template-parts/components/entryPicture' ); ?>

<section class="oppening  mb-2 mb-lg-3">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-2">
        <div class="double-heading">
          <span class="double-heading-subtitle position-absolute"><?= 'Inne zabudowy meblowe' ?></span>
          <h1 class="double-heading-title"><?= 'Inne zabudowy meblowe' ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
<div class="container">
    <div class="row">
        <?php 
          wp_reset_query();
          $args = array('post_type' => 'realizacje',
              'tax_query' => array(
                  array(
                      'taxonomy' => 'kategoria_realizacji',
                      'field' => 'slug',
                      'terms' => 'inne-zabudowy-meblowe',
                  ),
              ),
          );
          $loop = new WP_Query($args);
          if($loop->have_posts()) {

            while($loop->have_posts()) : $loop->the_post();
              get_template_part( 'template-parts/content' );
            endwhile;
          } else {
            echo '<h2>Nie ma realizacji w tej kategorii</h2>';
          }
        ?>
    </div>
  </div>
</section>

<?= do_shortcode('[sc name="contact-form"]'); ?>
<?php get_footer(); ?>
