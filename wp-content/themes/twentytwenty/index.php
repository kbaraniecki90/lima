<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
$pageTitle = get_field('pageTitle',get_option('page_for_posts'));

get_header();
?>

<main class="blog" id="site-content" role="main">
  <?= get_template_part( 'template-parts/components/blog/entry' ); ?>
	<?php
  echo '<div class="container">';
  echo '<div class="row">';
  ?>
  <div class="col-12 mb-10">
    <div class="double-heading">
      <span class="double-heading-subtitle position-absolute"><?= $pageTitle ?></span>
      <h1 class="double-heading-title"><?= $pageTitle ?></h1>
    </div>
  </div>

  <?php
	if ( have_posts() ) {
    $i = 0;
		while ( have_posts() ) {
      $i++;
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );

		}
	}
	get_template_part( 'template-parts/pagination' );
  echo '</div>';
  echo '</div>';
	?>

</main><!-- #site-content -->
<?= do_shortcode('[sc name="contact-form"]'); ?>
