<?php
  $entryPicture = get_field('entry_picture',get_the_ID());
?>
<div class="entry-picture" style="background-image: url(<?= isset($entryPicture['url']) ? $entryPicture['url'] : get_template_directory_uri().'/images/slide2.jpg' ?>)">
  <?php
  if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
  }
  ?>
</div>