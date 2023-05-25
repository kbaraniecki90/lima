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
        <div class="col-12 col-lg-6">
          <img class="shadow-lg" src="<?= $photoPost ?>"/>
        </div>
        <div class="col-12 col-lg-6">
          <div class="ms-lg-5 last-post-content">
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
