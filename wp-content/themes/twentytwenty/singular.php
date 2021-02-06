<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<?php
  $btn_text = get_field('button-text',get_the_ID());
  $slide = get_field('slide',get_the_ID());
  $slide_second = get_field('slide_second',get_the_ID());
  $slide_third = get_field('slide_third',get_the_ID());
  $slides = array (
    $slide,
    $slide_second,
    $slide_third
  );

?>
<div id="carouselExampleCaptions" class="carousel slide slider" data-bs-ride="carousel">
  <div class="carousel-inner slider-inner-wrapper">

    <?php foreach($slides as $k => $item) : ?>
    <?php
      if (isset($item['image']['url'])) {
        $image = $item['image']['url'];
      } else {
        $image = $item['image'];
      }
      $text = $item['slide-text'];
    ?>
    <div class="carousel-item slider-item <?= $k == 0 ? "active" : "" ?>">
      <img src="<?= $image ?>" class="d-block w-100 h-100" alt="...">
      <div class="carousel-caption  slider-text-wrapper d-none d-md-block">
        <?php twentytwenty_site_logo(); ?>
        <div class="double-heading">
          <span class="double-heading-subtitle position-absolute"><?= $text ?></span>
          <h3 class="double-heading-title d-inline"><?= $text ?></h3>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
  <div class="pagination-wrapper">
    <a href="#contactForm" class="btn btn-primary pagination-button rounded-0 shadow"><?= $btn_text ?></a>
    <div class="d-flex indicators-wrapper">
      <a class="carousel-control-prev carousel-control" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <ol class="carousel-indicators indicators">
        <?php foreach($slides as $k => $item) : ?>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $k ?>" class="<?= $k == 0 ? "active" : "" ?>""></li>
          <?php endforeach; ?>
        </ol>
        <a class="carousel-control-next carousel-control" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
    </div>
  </div>
</div>
<main id="site-content" role="main">
  <?php
    $oppeningSectionTitle = get_field('section-title',get_the_ID());
    $oppeningSection = get_field('section-content',get_the_ID());
    $bigPhoto = $oppeningSection['big-picture']['url'];
    $smallTopPhoto = $oppeningSection['small-top-picture']['url'];
    $smallBottomPhoto = $oppeningSection['small-bottom-picture']['url'];
  ?>

    <section class="oppening">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="double-heading">
              <span class="double-heading-subtitle position-absolute"><?= $oppeningSectionTitle ?></span>
              <h1 class="double-heading-title"><?= $oppeningSectionTitle ?></h1>
            </div>
          </div>

          <div class="col-12 col-lg-7">
            <?= $oppeningSection['tekst'] ?>
          </div>

          <div class="col-12 col-lg-5">
            <div class="squared-images">
              <div class="shadow-sm squared-images-big" >
                <img src="<?= $bigPhoto ?>"/>
              </div>
              <div class="shadow-sm squared-images-small-top" >
                <img src="<?= $smallTopPhoto ?>"/>
              </div>
              <div class="shadow-sm squared-images-small-bottom" >
                <img src="<?= $smallBottomPhoto ?>"/>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="category-listing">
    <?php
      $args = array('child_of' => 6, 'hide_empty' => FALSE);
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
            <div class="col-3">
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
        <div class="row mt-5 pt-5">
          <div class="col-12">
            <div class="d-flex justify-content-end " style="background-image: url(<?=$underContent['background-image']['url'] ?>)">
              <div class="py-5 px-3 d-flex flex-column why-us-under-section">
                <h3 class="mb-5 px-1 text-uppercase"><?=$underContent['text'] ?></h3>
                <div class="d-flex justify-content-around mb-5">
                <?php foreach ($icons as $icon) : ?>
                    <img src="<?= $icon['url'] ?>"/>
                  <?php endforeach; ?>
                </div>
                <a href="#contactForm" class="btn btn-primary ms-auto d-inline-block rounded-0 shadow"><?= $btn_text ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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

                <div id="opinionSlider" class="carousel slide slider opinion-slider" data-bs-ride="carousel">
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
    <section>
      <?php


        $blog_post_title = get_field('blog-post-title',get_the_ID());
        $underBlogTitleText = get_field('blog-post-under-title-text',get_the_ID());

        $args = array( 'numberposts' => '1', 'category' => 7);
        $lastAddedPost = wp_get_recent_posts( $args )['0'];

        $postId = $lastAddedPost['ID'];
        $photoPost = get_the_post_thumbnail_url($lastAddedPost['ID']);

        $readmore_limit = 557;
        $readmore_limit_reached = strlen(strip_tags($lastAddedPost['post_content'])) > $readmore_limit;

        $postDate =  $lastAddedPost['post_date'];
        $timestamp = strtotime($postDate);
        $date = date("n.j.Y", $timestamp);
      ?>

      <div class="container ">
        <div class="row last-post">
            <div class="col-12">
                <div class="double-heading">
                  <span class="double-heading-subtitle position-absolute"><?= $blog_post_title ?></span>
                  <h2 class="double-heading-title"><?= $blog_post_title ?></h2>
                </div>
                <p class="mb-3"><?= $underBlogTitleText ?></p>
            </div>
            <div class="col-6">
              <img class="shadow-lg" src="<?= $photoPost ?>"/>
            </div>
            <div class="col-6">
              <div class="ms-5 last-post-content">
                <svg class="last-post-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 50 50">
                  <defs>
                    <clipPath id="clip-path">
                      <rect id="Rectangle_21" data-name="Rectangle 21" width="50" height="50" fill="#dde0eb"/>
                    </clipPath>
                  </defs>
                  <g id="Mask_Group_9" data-name="Mask Group 9" clip-path="url(#clip-path)">
                    <g id="books" transform="translate(0 2.002)">
                      <path id="Path_125" data-name="Path 125" d="M48.291,39.795h-.342V29.341a.732.732,0,1,0-1.465,0v4.6h-5.42V23.486h5.42v2.457a.732.732,0,0,0,1.465,0V18.066a1.906,1.906,0,0,0-1.9-1.9H41.5a1.892,1.892,0,0,0-1.139.382,1.9,1.9,0,0,0-1.2-.431H36.816a1.9,1.9,0,0,0-1.9,1.812,1.9,1.9,0,0,0-.444-.054h-4.3a1.906,1.906,0,0,0-1.9,1.9v20.02H24.8v-2.93h.342a1.222,1.222,0,0,0,1.221-1.221V32.227a1.222,1.222,0,0,0-1.221-1.221H18.989a.732.732,0,1,0,0,1.465h2.984V35.4H10.937v-2.93h4.669a.732.732,0,0,0,0-1.465H7.764a1.222,1.222,0,0,0-1.221,1.221V35.4H3.076a1.222,1.222,0,0,0-1.221,1.221v3.174H1.709A1.711,1.711,0,0,0,0,41.5v1.855a1.711,1.711,0,0,0,1.709,1.709H4.883v1.221A1.711,1.711,0,0,0,6.592,48h5.859a1.711,1.711,0,0,0,1.709-1.709V45.068H27.175a.732.732,0,1,0,0-1.465H1.709a.244.244,0,0,1-.244-.244V41.5a.244.244,0,0,1,.244-.244H48.291a.244.244,0,0,1,.244.244v1.855a.244.244,0,0,1-.244.244H30.6a.732.732,0,0,0,0,1.465H35.84v1.221A1.711,1.711,0,0,0,37.549,48h5.859a1.711,1.711,0,0,0,1.709-1.709V45.068h3.174A1.711,1.711,0,0,0,50,43.359V41.5A1.711,1.711,0,0,0,48.291,39.795ZM12.7,46.289a.244.244,0,0,1-.244.244H6.592a.244.244,0,0,1-.244-.244V45.068H12.7ZM29.736,26.221h5.176v6.543H29.736Zm6.641-2.734H39.6V33.936H36.377Zm0,11.914H39.6v1.465H36.377ZM39.6,22.021H36.377V20.557H39.6Zm-4.687,2.734H29.736V23.291h5.176Zm-5.176,9.473h5.176v1.465H29.736Zm6.641,4.1H39.6v1.465H36.377Zm4.688,0h5.42v1.465h-5.42Zm5.42-2.93v1.465h-5.42V35.4Zm-5.42-13.379V20.557h5.42v1.465Zm.439-4.395h4.541a.44.44,0,0,1,.439.439v1.025h-5.42V18.066A.44.44,0,0,1,41.5,17.627Zm-4.687-.049H39.16a.44.44,0,0,1,.439.439c0,.008,0,.016,0,.025s0,.016,0,.024v1.025H36.377V18.018A.44.44,0,0,1,36.816,17.578Zm-6.641,1.758h4.3a.44.44,0,0,1,.439.439v2.051H29.736V19.775A.44.44,0,0,1,30.176,19.336Zm-.439,17.822h5.176v2.637H29.736ZM7.715,36.865v2.93H6.25v-2.93Zm1.465,0h8.3v2.93H9.18Zm9.766,0H20.41v2.93H18.945Zm2.93,0H23.34v2.93H21.875Zm1.563-4.395H24.9V35.4H23.438Zm-15.43,0H9.473V35.4H8.008ZM3.32,36.865H4.785v2.93H3.32Zm40.332,9.424a.244.244,0,0,1-.244.244H37.549a.244.244,0,0,1-.244-.244V45.068h6.348Z" transform="translate(0 -2.002)" fill="#dde0eb"/>
                      <path id="Path_126" data-name="Path 126" d="M48.291,6.4h-6.4V3.223A1.222,1.222,0,0,0,40.674,2H20.166a1.222,1.222,0,0,0-1.221,1.221V6.4h-6a.732.732,0,0,0,0,1.465H48.291a.244.244,0,0,1,.244.244V9.961a.244.244,0,0,1-.244.244H1.709a.244.244,0,0,1-.244-.244V8.105a.244.244,0,0,1,.244-.244H9.521a.732.732,0,0,0,0-1.465H1.709A1.711,1.711,0,0,0,0,8.105V9.961A1.711,1.711,0,0,0,1.709,11.67H4.883v1.221A1.711,1.711,0,0,0,6.592,14.6h5.859a1.711,1.711,0,0,0,1.709-1.709V11.67H35.84v1.221A1.711,1.711,0,0,0,37.549,14.6h5.859a1.711,1.711,0,0,0,1.709-1.709V11.67h3.174A1.711,1.711,0,0,0,50,9.961V8.105A1.711,1.711,0,0,0,48.291,6.4Zm-7.861,0H38.965V3.467H40.43ZM26.27,3.467h8.3V6.4h-8.3ZM24.8,6.4H23.34V3.467H24.8Zm11.23-2.93H37.5V6.4H36.035Zm-15.625,0h1.465V6.4H20.41ZM12.7,12.891a.244.244,0,0,1-.244.244H6.592a.244.244,0,0,1-.244-.244V11.67H12.7Zm30.957,0a.244.244,0,0,1-.244.244H37.549a.244.244,0,0,1-.244-.244V11.67h6.348Z" transform="translate(0 -2.002)" fill="#dde0eb"/>
                      <path id="Path_127" data-name="Path 127" d="M43.066,25.684v6.055a.732.732,0,0,0,1.465,0V25.684a.732.732,0,0,0-1.465,0Z" transform="translate(0 -2.002)" fill="#dde0eb"/>
                    </g>
                  </g>
                </svg>
                <h3 class=" fw-bold mb-0"><?= $lastAddedPost['post_title']?></h3>
                <p class="last-post-date mb-2">Data publikacji: <?=$date?> r.</p>
                <p class="last-post-intro-text">
                  <?= substr(strip_tags($lastAddedPost['post_content']), 0, $readmore_limit).(($readmore_limit_reached)?'...':''); ?>
                </p>
                <a href="<?= $lastAddedPost['guid'] ?>" class="d-block mt-2 text-end text-decoration-underline fw-bold text-primary">Dowiedz się więcej</a>
              </div>
            </div>
          </div>
        </div>


    </section>
    <?php
      $background_images = get_field('background-images',get_the_ID());
    ?>
    <section class="contact-form"  style="background-image: url(<?=$background_images['form-section-bg']['url'] ?>)">
      <?php
          $form = get_field('form_code',get_the_ID());
          $phone = get_field('phone-number',get_the_ID());
          $email = get_field('adress_email',get_the_ID());
      ?>
      <div id="contactForm" class="container">
        <div class="row contact-form-content">
          <div class="col-6 ">
            <div class="contact-form-details h-100" style="background-image: url(<?=$background_images['form-bg']['url'] ?>)">

              <?php twentytwenty_site_logo(); ?>
              <div class="contact-form-item">
                <a class=" text-decoration-none" href="tel:<?= $phone ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 50 50">
                    <defs>
                      <clipPath id="clip-path">
                        <rect id="Rectangle_22" data-name="Rectangle 22" width="50" height="50"  fill="#00ff6f" stroke="#707070" stroke-width="1"/>
                      </clipPath>
                    </defs>
                    <g id="Mask_Group_13" data-name="Mask Group 13"  clip-path="url(#clip-path)">
                      <g id="phone" >
                        <path id="Path_135" data-name="Path 135" d="M35.935,50a13.93,13.93,0,0,1-4.779-.854A50.963,50.963,0,0,1,12.65,37.35,50.959,50.959,0,0,1,.854,18.844a13.83,13.83,0,0,1-.706-6.8A14.182,14.182,0,0,1,7.437,1.665,13.923,13.923,0,0,1,14.1,0a1.563,1.563,0,0,1,1.528,1.235L18.083,12.68a1.563,1.563,0,0,1-.423,1.432L13.47,18.3A41.128,41.128,0,0,0,31.7,36.53l4.19-4.191a1.563,1.563,0,0,1,1.432-.423l11.445,2.452A1.562,1.562,0,0,1,50,35.9a13.922,13.922,0,0,1-1.665,6.666,14.182,14.182,0,0,1-10.381,7.289A13.9,13.9,0,0,1,35.935,50ZM12.855,3.193A10.948,10.948,0,0,0,3.791,17.777,47.391,47.391,0,0,0,32.223,46.209a10.948,10.948,0,0,0,14.584-9.064l-9.31-2L33.12,39.527a1.562,1.562,0,0,1-1.769.309A44.242,44.242,0,0,1,10.164,18.649a1.562,1.562,0,0,1,.309-1.769L14.85,12.5Z" transform="translate(0 0)" fill="#fff" stroke="#707070" stroke-width="0.098"/>
                      </g>
                    </g>
                  </svg>
                  <?= $phone ?>
                </a>
              </div>
              <div class="contact-form-item">
                <a class=" text-decoration-none" href="mailto:<?= $email ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 50 50">
                    <defs>
                      <clipPath id="clip-path">
                        <rect id="Rectangle_23" data-name="Rectangle 23" width="50" height="50" transform="translate(0 -0.446)" fill="#fff" stroke="#707070" stroke-width="1"/>
                      </clipPath>
                    </defs>
                    <g id="Mask_Group_12" data-name="Mask Group 12" transform="translate(0 0.446)" clip-path="url(#clip-path)">
                      <g id="emails" transform="translate(0 6.646)">
                        <g id="Group_20" data-name="Group 20">
                          <path id="Path_134" data-name="Path 134" d="M45.833,6.25H4.167A4.171,4.171,0,0,0,0,10.417V39.583A4.171,4.171,0,0,0,4.167,43.75H45.833A4.171,4.171,0,0,0,50,39.583V10.417A4.171,4.171,0,0,0,45.833,6.25ZM4.167,8.333H45.833a1.982,1.982,0,0,1,.433.088c-3.607,3.3-15.569,14.244-19.754,18.015a2.09,2.09,0,0,1-3.024,0C19.3,22.665,7.34,11.721,3.733,8.421A1.991,1.991,0,0,1,4.167,8.333ZM2.083,39.583V10.417A2.012,2.012,0,0,1,2.2,9.841C4.961,12.368,13.307,20,18.719,24.924c-5.394,4.633-13.742,12.548-16.525,15.2A2.007,2.007,0,0,1,2.083,39.583Zm43.75,2.083H4.167a1.993,1.993,0,0,1-.47-.1c2.876-2.741,11.277-10.7,16.576-15.235.691.627,1.322,1.2,1.819,1.646a4.161,4.161,0,0,0,5.814,0c.5-.448,1.129-1.02,1.82-1.647,5.3,4.533,13.7,12.493,16.576,15.235A1.991,1.991,0,0,1,45.833,41.667Zm2.083-2.083a2.012,2.012,0,0,1-.11.543c-2.784-2.655-11.131-10.569-16.525-15.2C36.693,20,45.038,12.369,47.8,9.841a2.013,2.013,0,0,1,.117.576Z" transform="translate(0 -6.25)" fill="#fff" stroke="#707070" stroke-width="0.098"/>
                        </g>
                      </g>
                    </g>
                  </svg>
                  <?= $email ?>
                </a>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="contact-form-form">

              <?php echo do_shortcode( $form ); ?>
            </div>
          </div>
        </div>
      </div>

    </section>
<!-- 
	< ?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

      get_template_part( 'template-parts/content', get_post_type() );
		}
	}

  ?> -->

</main><!-- #site-content -->
