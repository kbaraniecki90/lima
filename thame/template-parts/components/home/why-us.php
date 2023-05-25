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
        <div class="col-12 col-md-6 col-lg-3">
            <div class="why-us-item">
            <?php
              ?>
              <img src="<?= $item['icon']['url'] ?>"/>
              <h3 class="mb-2"><?= $item['title'] ?></h3>
              <p><?= $item['description'] ?></p>
            </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="row mt-5 pt-xl-5">
      <div class="col-12">
        <div class="d-flex justify-content-end " style="background-image: url(<?=$underContent['background-image']['url'] ?>)">
          <div class="py-5 px-lg-3 d-flex flex-column why-us-under-section">
            <h3 class="mb-5 px-1 text-uppercase text-center text-xl-start"><?=$underContent['text'] ?></h3>
            <div class="d-flex justify-content-around mb-5">
            <?php foreach ($icons as $icon) : ?>
                <img src="<?= $icon['url'] ?>"/>
              <?php endforeach; ?>
            </div>
            <a href="#contactForm" class="btn btn-primary mx-auto ms-lg-auto d-inline-block rounded-0 shadow">UMÓW SIĘ NA DARMOWĄ WYCENĘ</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>