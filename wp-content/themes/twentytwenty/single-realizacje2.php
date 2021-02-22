<?php 

$args = array(
    'post_type'=> 'realizacje2',
    'order'    => 'ASC'
);              

$the_query = new WP_Query( $args );
print_r($the_query);
if($the_query->have_posts() ) : 
    while ( $the_query->have_posts() ) : 
       $the_query->the_post(); 
       // content goes here
    endwhile; 
    wp_reset_postdata(); 
else: 
endif;
?>