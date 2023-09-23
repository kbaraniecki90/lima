<?php
  $numbers = get_field('numbers',get_the_ID());
  $average = $numbers['average'];
  $experience = $numbers['experience'];
  $realisations = $numbers['realisations'];
  $satisfied_customers = $numbers['satisfied_customers'];
?>

<section class="numbers">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-xl-3 mb-2 mb-xl-0">
        <div class="numbers-item">
          <?= $average ?>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-3 mb-2 mb-xl-0">
        <div class="numbers-item">
          <?= $experience ?>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-3 mb-2 mb-xl-0">
        <div class="numbers-item">
          <?= $realisations ?>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-3 mb-2 mb-xl-0">
        <div class="numbers-item">
          <?= $satisfied_customers ?>
        </div>
      </div>
    </div>
  </div>
</section>