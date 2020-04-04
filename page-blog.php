<?php
/*
Template Name: Blog Home Layout
Template Post Type: page
*/
?>



<?php get_header(); ?>
<!--here is the smart slider plugin - hero image, install widget area, will need to be styled on remote site -->

<div class="row">
  <div class="col-md-12">
    <?php dynamic_sidebar('blog-hero-image'); ?>
  </div>
</div>

<div class="container">

  <!-- blog slider 1, here is the WP Carousel Plugin - will need to add as posts to Woo Commerce and then add to WP Carousel -->
    <h2 class="blogpadding">Blog Category A</h2>
    <!-- Widget Area 11: Blog A--->


  <!-- paralax scroll 1 here, hand code -->

    <div class="parallax"></div>
      <div style="height:150px; background-color:#0c005a;" >
      <h2 class="parallaxtext">Lorem Ipsum sentence here.</h2>
    </div>


  <!-----blog slider 2, here is the WP Carousel Plugin - will need to add as posts to Woo Commerce and then add to WP Carousel -->


    <h2 class="blogpadding">Blog Category B</h2>



  <!-- paralax scroll 2 here, hand code -->

    <div class="parallax"></div>
        <div style="height:150px; background-color:#0c005a;" >
        <h2 class="parallaxtext">Lorem Ipsum sentence here.</h2>
    </div>



    <h2 class="blogpadding">Blog Category B</h2>


</div>




<?php get_footer(); ?>
