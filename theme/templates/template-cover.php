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
<?= get_template_part('template-parts/components/entryPicture'); ?>
<main id="site-content" role="main">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8">

        <?php

        if (have_posts()) {

          while (have_posts()) {
            the_post();
            get_template_part('template-parts/content-cover');
          }
        }

        ?>
      </div>
      <aside class="col-lg-3 offset-lg-1 d-none d-lg-block">
        <p class="h4 mt-0"><?php _e("Zobacz inne wpisy"); ?></p>
        <div style=" position: sticky; top: 100px;">
          <?php
          $args = array(
            'post_type' => 'post',
            'post__not_in' => array(get_the_ID()),
            'posts_per_page' => 3,
          );

          $loop = new WP_Query($args);

          while ($loop->have_posts()) : $loop->the_post();

          ?>
            <a href="<?php the_permalink(); ?>">
              <div class="shadow position-relative post-inner h-100 thin ">
                <figure class="featured-media">
                  <div class="featured-media-inner section-inner medium">
                    <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                  </div>
                </figure>

                <div class="position-absolute entry-title">
                  <p class="text-white"><?= the_title(); ?></p>
                </div>
              </div>

            </a>
          <?php
          endwhile;

          wp_reset_postdata();
          ?>
        </div>
      </aside>
    </div>
  </div>
</main><!-- #site-content -->

<style>
  body,
  html {
    overflow-x: initial !important;
  }
</style>

<?= do_shortcode('[sc name="cta"]'); ?>

<?= do_shortcode('[sc name="contact-form"]'); ?>