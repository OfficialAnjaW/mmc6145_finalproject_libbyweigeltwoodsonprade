<?php
/*
Template Name: Trucks Page Layout
Template Post Type: page
*/
?>

<?php get_header(); ?>


  <div class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('trucks-hero-image'); ?>
    </div>
  </div>

<!--here is the smart slider plugin - hero image, install widget area, will need to be styled on remote site -->

  <div class="container">

    <!-- blog carousel 1, here is the WP Carousel Plugin -->
    <h2 class="blogpadding">Front Loader Trucks</h2>
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('truck-carousel-area-1'); ?>
      </div>
    </div>

    <!-- paralax scroll 1 here, hand code -->
    <div class="parallax"></div>
    <div style="height:150px; background-color:#0c005a;" >
      <h2 class="parallaxtext">Rear Loader Trucks</h2>
    </div>


    <!-- blog carousel 2, here is the WP Carousel Plugin -->
    <h2 class="blogpadding">Rear Loader Trucks</h2>
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('truck-carousel-area-2'); ?>
      </div>
    </div>


    <!-- paralax scroll 2 here, hand code -->
    <div class="parallax2"></div>
    <div style="height:150px; background-color:#0c005a;" >
      <h2 class="parallaxtext">All Other Truck Types</h2>
    </div>


    <!-- blog carousel 3, here is the WP Carousel Plugin -->
    <h2 class="blogpadding">All Other Truck Types</h2>
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('truck-carousel-area-3'); ?>
      </div>
    </div>

  </div>

<?php get_footer(); ?>
