<?php
  $pageTitle = get_field('page_title',get_the_ID());
  $contactData = get_field('contact-data',get_the_ID());
  $adress = get_field('adress',get_the_ID());
  $socialMedia = get_field('social_media',get_the_ID());
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
      <div class="col-12 col-lg-5">
        <?php print_r($contactData); ?>
        <?= $adress ?>
        <?= $socialMedia ?>
      </div>
      <div class="col-12">
        <a href="#contactForm" class="btn btn-primary ms-auto d-inline-block mt-2 rounded-0 shadow">Umów się na wizytę</a>
      </div>
    </div>
  </div>
</section>