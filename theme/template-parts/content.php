<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
// $readmore_limit = 557;
// $readmore_limit_reached = strlen(strip_tags($lastAddedPost['post_content'])) > $readmore_limit;

?>
<div class="col-12 col-md-6 col-lg-4 mb-2">
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <!-- < ?php

    get_template_part( 'template-parts/entry-header' );

    ?> -->
    <a class="d-block h-100" href="<?= esc_url( get_permalink()); ?>">
      <div class="shadow position-relative post-inner h-100 <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">
        <?php
          if ( ! is_search() ) {
            get_template_part( 'template-parts/featured-image' );
          }
        ?>
        <div class="position-absolute entry-title">
          <?= the_title( '<h2 class=" heading-size-1">', '</h2>' );?>
        </div>
        <div class="position-absolute entry-content">
          <?php
            the_excerpt();
          ?>
        </div><!-- .entry-content -->
      </div><!-- .post-inner -->
    </a>

    <div class="section-inner">
      <?php
      wp_link_pages(
        array(
          'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
          'after'       => '</nav>',
          'link_before' => '<span class="page-number">',
          'link_after'  => '</span>',
        )
      );
      // Single bottom post meta.
      twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

      if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

        get_template_part( 'template-parts/entry-author-bio' );

      }
      ?>

    </div><!-- .section-inner -->

    <!-- < ?php

    if ( is_single() ) {

      get_template_part( 'template-parts/navigation' );

    }
    ?> -->

  </article><!-- .post -->
</div>
