<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
  <div class="container">
    <div class="row">
      <div class="col-12 py-10">

        <div class="section-inner thin error404-content">
          
          <h1 class="entry-title"><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h1>
          
          <div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p></div>
        </div>
      </div>
      
    </div><!-- .section-inner -->
  </div>

</main><!-- #site-content -->
