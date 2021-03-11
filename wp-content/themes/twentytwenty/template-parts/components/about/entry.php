<?php
  $pageTitle = get_field('page_title',get_the_ID());
  $oppeningSectionTitle = get_field('section-title',get_the_ID());
  $oppeningSection = get_field('section-content',get_the_ID());
  $bigPhoto = $oppeningSection['big-picture']['url'];
  $entryText = $oppeningSection['enter_text'];
?>
<section class="oppening">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="double-heading">
          <span class="double-heading-subtitle position-absolute"><?= $pageTitle ?></span>
          <h1 class="double-heading-title"><?= $pageTitle ?></h1>
        </div>
      </div>
      <div class="col-12 text-center mb-5 mb-lg-10">

        <?= $entryText ?>
      </div>
      <div class="col-12">
        <div class="double-heading">
          <span class="double-heading-subtitle position-absolute"><?= $oppeningSectionTitle ?></span>
          <h2 class="double-heading-title"><?= $oppeningSectionTitle ?></h2>
        </div>
      </div>

      <div class="col-12 col-lg-7">
        <?= $oppeningSection['tekst'] ?>
      </div>

      <div class="col-12 col-lg-5 order-1 order-lg-0">
        <div class="squared-images">
          <div class="shadow-sm squared-images-big" >
            <img src="<?= $bigPhoto ?>"/>
          </div>
        </div>
      </div>
      <div class="col-12 mb-4 mb-lg-0">
        <a href="#contactForm" class="btn btn-primary ms-auto d-inline-block mt-2 rounded-0 shadow">Umów się na wizytę</a>
      </div>
    </div>
  </div>
</section>