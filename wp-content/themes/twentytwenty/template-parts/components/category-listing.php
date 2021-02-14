<section class="category-listing">
<?php
  $args = array(
    'child_of' => 6,
    'orderby' => 'slug',
    'hide_empty' => FALSE);
  $categories = get_categories( $args );

  $categoryListingTitle = get_field('category-section-title',get_the_ID());
  $textUnderTitle = get_field('text-under-title',get_the_ID());
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
  <div class="container-fluid g-0">
    <div class="row g-0">
      <?php foreach ($categories as $cat) : ?>
        <div class="col-12 col-xl-4 col-xxl-2 g-0 category">
          <a class="position-relative d-block w-100  category-item" href="<?= get_category_link($cat->term_id); ?>">
            <?= z_taxonomy_image($cat->term_id); ?>
            <div class="category-hovered-box d-flex flex-column position-absolute top-0 start-0 w-100 h-100 p-3 pe-0">
              <h3 class="mb-3 text-white text-uppercase"><?= $cat->cat_name; ?></h3>
              <p class="text-white pe-2"><?= $cat->description; ?></p>
              <span class="mt-auto ms-auto text-white text-uppercase me-2">Zobacz wiecej</span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>