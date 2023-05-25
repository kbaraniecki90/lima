<?php
  $pageTitle = get_field('page_title',get_the_ID());
  $contactData = get_field('contact-data',get_the_ID());
  $adress = get_field('adress',get_the_ID());
  $socialMedia = get_field('social_media',get_the_ID());
  $backgroundImg = get_field('backgroundImg',get_the_ID());
?>

<section class="oppening mb-2 mb-md-5 mb-lg-9">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-5">
        <div class="double-heading">
          <span class="double-heading-subtitle position-absolute"><?= $pageTitle ?></span>
          <h1 class="double-heading-title"><?= $pageTitle ?></h1>
        </div>
      </div>
      <div class="col-12 py-5 position-relative contact-details" style="background-image: url(<?= $backgroundImg['url'] ?>)">
        <div class="row">
          <div class="contact-item col-12 col-md-6 text-center mb-5 mb-md-0">
            <p><?= $contactData['name-and-surname']; ?></p>
            <a class="d-block"  href="tel:<?= $contactData['contact-phone-number']; ?>"">
              <?= $contactData['contact-phone-number']; ?>
            </a>
            <a class="d-block" href="mailto:<?= $contactData['contact-adress-email']; ?>">
              <?= $contactData['contact-adress-email']; ?>
            </a>
          </div>
          <div class="contact-item col-12 col-md-6 text-center">
            <p><?= $adress ?></p>
          </div>
          <div class="col-12 text-center position-relative contact-btn">
            <a href="#contactForm" class="btn btn-primary ms-auto d-inline-block mt-2 rounded-0 shadow">Umów się na wizytę</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>