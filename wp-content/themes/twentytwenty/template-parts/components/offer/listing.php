<?php
$terms = get_terms( array(
  'taxonomy' => 'kategoria_realizacji',
  'orderby' => 'slug',
  'hide_empty' => false,
) );
?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
      </div>


      <?php foreach ($terms as $k => $cat) : ?>
        <div class="row mb-5 <?= $k%2 == 0 ? "flex-row-reverse" : ''  ?>">
          <div class="col-12 col-xl-4 col-xxl-5">
            <div class="d-flex <?= $k%2 != 0 ? "justify-content-end" : ''  ?>">
                <?= z_taxonomy_image($cat->term_id); ?>
            </div>
          </div>
          <div class="col-12 col-xl-4 col-xxl-4">
            <div class=" d-flex flex-column  p-3 pe-0">
              <h3 class="mb-3 text-primary text-uppercase"><?= $cat->name; ?></h3>
              <p class="text-primary pe-2"><?= $cat->description; ?></p>
            </div>
            <a class="position-relative d-block w-100 btn btn-primary bg-primary d-block rounded-0 shadow " href="<?= get_category_link($cat); ?>">
              Zobacz więcej
            </a>
          </div>
        </div>
      <?php endforeach; ?>


    </div>
  </div>
</section>