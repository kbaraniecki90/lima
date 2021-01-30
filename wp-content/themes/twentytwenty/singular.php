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
  $btn_text = get_field('button-text',get_the_ID());
  $slide = get_field('slide',get_the_ID());
  $slide_second = get_field('slide_second',get_the_ID());
  $slide_third = get_field('slide_third',get_the_ID());
  $slides = array (
    $slide,
    $slide_second,
    $slide_third
  );

?>
<div id="carouselExampleCaptions" class="carousel slide slider" data-bs-ride="carousel">
  <div class="carousel-inner slider-inner-wrapper">

    <?php foreach($slides as $k => $item) : ?>
    <?php
      if (isset($item['image']['url'])) {
        $image = $item['image']['url'];
      } else {
        $image = $item['image'];
      }
      $text = $item['slide-text'];
    ?>
    <div class="carousel-item slider-item <?= $k == 0 ? "active" : "" ?>">
      <img src="<?= $image ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption  slider-text-wrapper d-none d-md-block">
        <?php twentytwenty_site_logo(); ?>
        <div class="double-heading">
          <span class="double-heading-subtitle position-absolute"><?= $text ?></span>
          <h3 class="double-heading-title d-inline"><?= $text ?></h3>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
  <div class="pagination-wrapper">
    <button class="btn btn-primary pagination-button shadow"><?= $btn_text ?></button>
    <div class="d-flex indicators-wrapper">
      <a class="carousel-control-prev carousel-control" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <ol class="carousel-indicators indicators">
        <?php foreach($slides as $k => $item) : ?>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $k ?>" class="<?= $k == 0 ? "active" : "" ?>""></li>
          <?php endforeach; ?>
        </ol>
        <a class="carousel-control-next carousel-control" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
    </div>
  </div>
</div>
<main id="site-content" role="main">
  <?php
    $oppeningSectionTitle = get_field('section-title',get_the_ID());
    $oppeningSection = get_field('section-content',get_the_ID());
    $bigPhoto = $oppeningSection['big-picture']['url'];
    $smallTopPhoto = $oppeningSection['small-top-picture']['url'];
    $smallBottomPhoto = $oppeningSection['small-bottom-picture']['url'];

    $test = get_categories();
    print_r($test);
  ?>
     <ul>
      <?php foreach (get_categories() as $cat) : ?>
      <li>
        <a href="<?= get_category_link($cat->term_id); ?>">
          <?php z_taxonomy_image($cat->term_id); ?>
          <?= $cat->cat_name; ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
    <section>
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="double-heading">
              <span class="double-heading-subtitle position-absolute"><?= $oppeningSectionTitle ?></span>
              <h1 class="double-heading-title d-inline"><?= $oppeningSectionTitle ?></h1>
            </div>
          </div>

          <div class="col-12 col-lg-7">
            <?= $oppeningSection['tekst'] ?>
          </div>

          <div class="col-12 col-lg-5">
            <div class="squared-images">
              <div class="shadow-sm squared-images-big" >
                <img src="<?= $bigPhoto ?>"/>
              </div>
              <div class="shadow-sm squared-images-small-top" >
                <img src="<?= $smallTopPhoto ?>"/>
              </div>
              <div class="shadow-sm squared-images-small-bottom" >
                <img src="<?= $smallBottomPhoto ?>"/>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
        <?php the_content(); ?>
<!-- 
	< ?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

      get_template_part( 'template-parts/content', get_post_type() );
		}
	}

  ?> -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>