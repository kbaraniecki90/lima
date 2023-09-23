<?php
  $pageTitle = get_field('pageTitle',get_the_ID());
  $terms = get_terms( array(
    'taxonomy' => 'kategoria_realizacji',
    'orderby' => 'slug',
    'hide_empty' => false,
  ));
?>
<section class="oppening mb-2 mb-lg-3">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-2">
        <div class="double-heading">
          <span class="double-heading-subtitle position-absolute"><?= $pageTitle ?></span>
          <h1 class="double-heading-title"><?= $pageTitle ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
<div class="container">
    <div class="row">
      <div class="col-12 mb-2">
        <ul class="nav nav-tabs tab" id="realizations" role="tablist">
          <?php foreach ($terms as $k => $cat) : ?>

            <li class="nav-item tab-item mb-1 mb-lg-0" role="presentation">
              <button
                class="nav-link w-100 <?= $k == 3 ? "active" : "" ?>"
                id="<?= $k ?>-tab"
                data-bs-toggle="tab"
                data-bs-target="#tab<?= $k ?>"
                type="button"
                role="tab"
                aria-controls="<?= $k ?>"
                aria-selected="true"
              >
                <?= $cat->name; ?>
              </button>
            </li>
          <?php endforeach; ?>

        </ul>
        <div id="xyz"></div>
        <div class="tab-content " id="realizationsContent">
        <?php foreach ($terms as $k => $cat) : ?>
          <div
            class="tab-pane fade <?= $k == 3 ? "show active" : "" ?>"
            id="tab<?= $k ?>"
            role="tabpanel"
            aria-labelledby="<?= $k ?>-tab"
          >
          <div class="row">

            <?php 
              wp_reset_query();
              $args = array('post_type' => 'realizacje',
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'kategoria_realizacji',
                          'field' => 'slug',
                          'terms' => $cat->slug,
                      ),
                  ),
              );
              $loop = new WP_Query($args);
              if($loop->have_posts()) {

                while($loop->have_posts()) : $loop->the_post();
                  get_template_part( 'template-parts/content' );
                endwhile;
              } else {
                echo '<h2>Nie ma realizacji w tej kategorii</h2>';
              }
            ?>
          </div>

          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>