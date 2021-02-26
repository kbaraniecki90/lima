<?php
  $entryPicture = get_field('entry_picture',get_the_ID());
?>
<div class="entry-picture" style="background-image: url(<?= isset($entryPicture['url']) ? $entryPicture['url'] : '//localhost:3000/lima/wp-content/uploads/2021/01/slide2.jpg' ?>)">
  <?php
  if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
  }
  ?>
</div>