<?php
  $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full'); 
  $featured_image = $img[0];
?>
<div class="entry-picture" style="background-image: url(<?= $featured_image ?>)">
  <?php
  if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
  }
  ?>
</div>
