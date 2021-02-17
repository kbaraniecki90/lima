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
      <div class="col-12 col-xl-3">
        <?= $average ?>
      </div>
      <div class="col-12 col-xl-3">
        <?= $experience ?>
      </div>
      <div class="col-12 col-xl-3">
        <?= $realisations ?>
      </div>
      <div class="col-12 col-xl-3">
        <?= $satisfied_customers ?>
      </div>
    </div>
  </div>
</section>