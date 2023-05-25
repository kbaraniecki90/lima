<section class="contact-form"  style="background-image: url(<?= get_theme_mod( 'contact_section_bg' ); ?>)">
  <div id="contactForm" class="container">
    <div class="row contact-form-content">
      <div class="col-6 ">
        <div class="contact-form-details h-100" style="background-image: url(<?= get_theme_mod( 'contact_form_bg' ); ?>)">
          <?php twentytwenty_site_logo(); ?>
          <div class="contact-form-item">
            <a class=" text-decoration-none" href="tel:<?= get_theme_mod( "phone_number" ); ?>">
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
              <?= get_theme_mod( "phone_number" ); ?>
            </a>
          </div>
          <div class="contact-form-item">
            <a class=" text-decoration-none" href="mailto:<?= get_theme_mod( "adress_email" ); ?>">
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
              <?= get_theme_mod( "adress_email" ); ?>
            </a>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="contact-form-form">
          <?= do_shortcode( get_theme_mod( 'form_code' )); ?>
        </div>
      </div>
    </div>
  </div>
</section>