<section>
  <?php
      $opinionsTitle = get_field('opinion-section-title',get_the_ID());
      $underOpinionTitle = get_field('under-title-text',get_the_ID());
      $opinionBg = get_field('opinions-background',get_the_ID());
      $opinions = get_field('opinions',get_the_ID());
    ?>
    <div class="container">
        <div class="row">
          <div class="col-6">

            <div id="opinionSlider" class="carousel slide  opinion-slider" data-bs-ride="carousel">
              <div
                class="carousel-inner opinion-slider-inner-wrapper"
                style="background-image: url(<?=$opinionBg['url'] ?>)">
                <svg
                  class="opinion-slider-svg"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="50" height="50" viewBox="0 0 50 50"
                >
                  <defs>
                    <clipPath id="clip-path">
                      <rect id="Rectangle_20" data-name="Rectangle 20" width="50" height="50" transform="translate(0 -0.221)" fill="#dde0eb" stroke="#707070" stroke-width="1"/>
                    </clipPath>
                  </defs>
                  <g id="Mask_Group_8" data-name="Mask Group 8" transform="translate(0 0.221)" clip-path="url(#clip-path)">
                    <g id="stars" transform="translate(0 4.624)">
                      <path id="Path_121" data-name="Path 121" d="M50,25.564l-8.039-2.521-4.882-6.867L32.2,23.042l-4.616,1.439L24.965,20.8l-2.6,3.664L17.8,23.042l-4.881-6.866L8.039,23.043,0,25.564l5.022,6.765-.087,8.425,7.986-2.686,4.119,1.386-.061,5.923,7.986-2.686,7.986,2.686-.061-5.9,4.19-1.409,7.986,2.686-.087-8.425ZM7.929,36.633l.054-5.267-3.14-4.229,5.026-1.576,3.052-4.293,3.053,4.294,4.588,1.43-.478.673-8.039,2.521,4.426,5.961-3.549-1.194Zm17.036,2.943-4.992,1.679.054-5.267-3.14-4.229,5.026-1.576,3.052-4.293,3.052,4.293,5.026,1.576L29.9,35.989l.054,5.267Zm12.114-4.623L33.436,36.18l4.449-5.993-8.039-2.521-.465-.655,4.646-1.448,3.053-4.294,3.052,4.293,5.026,1.576-3.14,4.229.054,5.267Z" transform="translate(0 -4.624)" fill="#dde0eb" stroke="#707070" stroke-width="0.098"/>
                      <path id="Path_122" data-name="Path 122" d="M23.489,4.624H26.44v7.991H23.489Z" transform="translate(0 -4.624)" fill="#dde0eb" stroke="#707070" stroke-width="0.098"/>
                      <path id="Path_123" data-name="Path 123" d="M0,0H2.95V4.823H0Z" transform="translate(14.759 7.281) rotate(-45)" fill="#dde0eb" stroke="#707070" stroke-width="0.098"/>
                      <path id="Path_124" data-name="Path 124" d="M0,0H4.823V2.95H0Z" transform="translate(29.666 8.607) rotate(-45)" fill="#dde0eb" stroke="#707070" stroke-width="0.098"/>
                    </g>
                  </g>
                </svg>
                <?php foreach($opinions as $k => $opinion) : ?>
                <div class="carousel-item opinion-slider-item h-100 <?= $k == 'opinion' ? "active" : "" ?>">
                  <div class="carousel-caption pt-5 opinion-slider-text-wrapper d-none d-md-flex align-items-center">
                    <div class="d-flex flex-column align-items-end">
                      <h3 class="mb-2 text-white"><?= $opinion['adviser']?></h3>
                      <span class="text-end fst-italic"><?= $opinion['opinion-text']?></span>
                    </div>
                      <img class="d-block ms-3" src="<?= $opinion['picture']['url'] ?>"/>
                  </div>
                </div>
                <?php endforeach; ?>

              </div>
              <div class=" opinions-pagination-wrapper mt-4">
                <div class="d-flex indicators-wrapper">
                  <a class="carousel-control-prev carousel-control me-3" href="#opinionSlider" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </a>
                  <a class="carousel-control-next carousel-control" href="#opinionSlider" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </a>
                </div>
              </div>
            </div>


          </div>
          <div class="col-6">
            <div class="double-heading double-heading-right mb-2">
              <span class="double-heading-subtitle long-text position-absolute end-0"><?= $opinionsTitle ?></span>
              <h2 class="double-heading-title w-100 text-end"><?= $opinionsTitle ?></h2>
            </div>
            <p class="text-end">
              <?= $underOpinionTitle ?>
            </p>
          </div>
        </div>
    </div>
</section>