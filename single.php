<?php

/*
*Template Name: Product 
*Template Post Type: post
*/
include_header();
?>

<img src="<?php
the_field('item-image');?>" alt="" srcset="">

<h2><?php the_title(); ?></h2>


<?php
include_footer();
?>