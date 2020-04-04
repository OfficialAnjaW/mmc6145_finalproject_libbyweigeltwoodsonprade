<?php
/*
Template Name: Trucks Page Layout
Template Post Type: page
*/
?>

<?php get_header(); ?>

<!--here is the smart slider plugin - hero image, install widget area, will need to be styled on remote site -->
  <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php dynamic_sidebar('blog-hero-image'); ?>
          </div>
        </div>

      <!-- blog slider 1, here is the WP Carousel Plugin - will need to add as posts to Woo Commerce and then add to WP Carousel -->
      <h2 class="blogpadding"> Category A</h2>

      <!-- paralax scroll 1 here, hand code -->
      <div class="parallax"></div>
        <div style="height:150px; background-color:#0c005a;" >
        <h2 class="parallaxtext">Garbage Truck Types</h2>
      </div>


      <!-----blog slider 2, here is the WP Carousel Plugin - will need to add as posts to Woo Commerce and then add to WP Carousel -->
        <h2 class="blogpadding"> Category B</h2>


      <!-- paralax scroll 2 here, hand code -->
      <div class="parallax2"></div>
        <div style="height:150px; background-color:#0c005a;" >
        <h2 class="parallaxtext">All Other Truck Types</h2>
      </div>

      <h2 class="blogpadding"> Category 3 </h2>

</div>


<?php get_footer(); ?>
