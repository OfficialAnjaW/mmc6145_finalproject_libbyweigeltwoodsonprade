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

    <!-- blog slider 1, here is the WP Carousel Plugin -->
    <h2 class="blogpadding">Blog Category A</h2>

    <div class="row">
      <div class="col-md-12">
        <a href="http://www.officialanja.com/trucksparts/this-high-compaction-mack-rear-loader-will-handle-your-toughest-routes/">
        <?php dynamic_sidebar('Carousel-area-1'); ?>
        </a>
      </div>
    </div>

    <!-- paralax scroll 1 here, hand code -->
    <div class="parallax3"></div>
    <div style="height:150px; background-color:#0c005a;" >
      <h2 class="parallaxtext">"In Small Things Great Strength Lies!"</h2>
    </div>

    <!---blog slider 2, here is the WP Carousel Plugin -->
    <h2 class="blogpadding">Blog Category B</h2>

    <div class="row">
      <div class="col-md-12">
        <a href="http://www.officialanja.com/trucksparts/safety-is-job-1-at-trucks-parts/"> <?php dynamic_sidebar('Carousel-area-2'); ?> </a>
      </div>
    </div>

    <!-- paralax scroll 2 here, hand code -->
    <div class="parallax4"></div>
    <div style="height:150px; background-color:#0c005a;" >
      <h2 class="parallaxtext">"Late Model Front Loaders"</h2>
    </div>

    <!-- blog slider 3, here is the WP Carousel Plugin -->
    <h2 class="blogpadding">Blog Category C</h2>

    <div class="row">
      <div class="col-md-12">
        <a href="http://www.officialanja.com/trucksparts/this-curotto-ready-mack-front-loader-is-a-game-changer/">
        <?php dynamic_sidebar('Carousel-area-3'); ?>
        </a>
      </div>
    </div>

  </div>

<?php get_footer(); ?>
