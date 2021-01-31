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
    <button class="btn btn-primary pagination-button rounded-0 shadow"><?= $btn_text ?></button>
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
  ?>

    <section class="oppening">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="double-heading">
              <span class="double-heading-subtitle position-absolute"><?= $oppeningSectionTitle ?></span>
              <h1 class="double-heading-title"><?= $oppeningSectionTitle ?></h1>
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

    <section class="category-listing">
    <?php
      $args = array('child_of' => 6, 'hide_empty' => FALSE);
      $categories = get_categories( $args );


      $categoryListingTitle = get_field('category-section-title',get_the_ID());
      $textUnderTitle = get_field('text-under-title',get_the_ID());
    ?>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="double-heading double-heading-right mb-2">
              <span class="double-heading-subtitle position-absolute end-0"><?= $categoryListingTitle ?></span>
              <h2 class="double-heading-title w-100 text-end"><?= $categoryListingTitle ?></h2>
            </div>
            <div class="col-10 offset-xl-2">
              <p class="mb-3 text-end"><?= $textUnderTitle ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid g-0">
        <div class="row g-0">
          <?php foreach ($categories as $cat) : ?>
            <div class="col-2 g-0 category">
              <a class="position-relative d-block w-100  category-item" href="<?= get_category_link($cat->term_id); ?>">
                <?= z_taxonomy_image($cat->term_id); ?>
                <div class="category-hovered-box d-flex flex-column position-absolute top-0 start-0 w-100 h-100 p-3">
                  <h3 class="mb-3 text-white text-uppercase"><?= $cat->cat_name; ?></h3>
                  <p class="text-white"><?= $cat->description; ?></p>
                  <span class="mt-auto ms-auto text-white text-uppercase">Zobacz wiecej</span>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="why-us">
      <?php
        $whyUsTitle = get_field('why-us-title',get_the_ID());
        $whyUsContent = get_field('why-us-content',get_the_ID());
        $underContent = get_field('under-content',get_the_ID());
        $icons = $underContent['icons']
      ?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="double-heading">
                  <span class="double-heading-subtitle position-absolute"><?= $whyUsTitle ?></span>
                  <h2 class="double-heading-title"><?= $whyUsTitle ?></h2>
                </div>
            </div>
          <?php foreach ($whyUsContent as $item) : ?>
            <div class="col-3">
                <div class="why-us-item">
                  <img src="<?= $item['icon']['url'] ?>"/>
                  <h3 class="mb-2"><?= $item['title'] ?></h3>
                  <p><?= $item['description'] ?></p>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="row mt-5 pt-5">
          <div class="col-12">
            <div class="d-flex justify-content-end " style="background-image: url(<?=$underContent['background-image']['url'] ?>)">
              <div class="py-5 px-3 d-inline-block why-us-under-section">
                <h3 class="mb-5 px-1 text-uppercase"><?=$underContent['text'] ?></h3>
                <div class="d-flex justify-content-around mb-5">
                <?php foreach ($icons as $icon) : ?>
                    <img src="<?= $icon['url'] ?>"/>
                  <?php endforeach; ?>
                </div>
                <button class="btn btn-primary ms-auto d-block rounded-0 shadow"><?= $btn_text ?></button>
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