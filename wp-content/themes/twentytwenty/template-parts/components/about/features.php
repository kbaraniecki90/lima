<?php
  $standOutTitle = get_field('stand_out_title',get_the_ID());
  $standOut = get_field('stand_out',get_the_ID());
?>
<section class="my-10 features">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="double-heading">
          <span class="double-heading-subtitle position-absolute"><?= $standOutTitle ?></span>
          <h2 class="double-heading-title"><?= $standOutTitle ?></h2>
        </div>
      </div>
      <?php foreach($standOut as $item) : ?>
        <div class="col-12 col-lg-4 ">
          <div class="features-item shadow d-flex flex-column align-items-center border rounded py-2 px-1  mb-5">
            <div class="features-title fw-bold text-uppercase mb-3 text-center">
              <?= $item['stand_out_title']; ?>
            </div>
            <div class="text-center features-description px-2">
              <?= $item['stand_out_description']; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="col-12 text-center">
        <a href="#contactForm" class="btn btn-primary d-inline-block mt-2 rounded-0 shadow">Umów się na wizytę</a>
      </div>
    </div>
  </div>
</section>