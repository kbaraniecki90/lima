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