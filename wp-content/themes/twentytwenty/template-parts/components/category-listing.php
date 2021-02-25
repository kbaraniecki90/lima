<section class="category-listing">
<?php
$terms = get_terms( array(
  'taxonomy' => 'kategoria_realizacji',
  'orderby' => 'slug',
  'hide_empty' => false,
) );
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
  <?= get_template_part( 'template-parts/components/offer/listing' ); ?>
</section>