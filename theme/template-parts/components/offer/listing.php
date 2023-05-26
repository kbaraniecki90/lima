<?php
$terms = get_terms( array(
  'taxonomy' => 'kategoria_realizacji',
  'orderby' => 'slug',
  'hide_empty' => false,
) );

?>
<div class="container-fluid g-0">
  <div class="row g-xxl-0">
    <?php foreach ($terms as $cat) : ?>
      <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-2 g-xxl-0 category">
        <a class="position-relative d-block w-100  category-item" href="<?= get_category_link($cat); ?>">
          <?= z_taxonomy_image($cat->term_id); ?>
          <div class="category-hovered-box d-flex flex-column position-absolute top-0 start-0 w-100 h-100 p-3 pe-0">
            <h3 class="mb-3 text-white text-uppercase"><?= $cat->name; ?></h3>
            <p class="text-white pe-2"><?= $cat->description; ?></p>
            <span class="mt-auto ms-auto text-white text-uppercase me-2">Zobacz wiecej</span>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>