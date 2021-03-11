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
      <img src="<?= $image ?>" class="d-block w-100 h-100" alt="...">
      <div class="carousel-caption  slider-text-wrapper d-md-block">
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
    <a href="#contactForm" class="btn btn-primary pagination-button rounded-0 shadow"><?= $btn_text ?></a>
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