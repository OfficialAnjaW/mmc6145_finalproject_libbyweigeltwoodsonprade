<?php

/*
Template Name: Homepage Layout
Template Post Type: page
*/

?>

<?php get_header(); ?>

  <!-- Widget Area 2: Hero Image -->
  <div class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('hero-image'); ?>
    </div>
  </div>

  <div class="container">

    <main>

      <!-- Widget Area 3: About Us -->
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('about-us'); ?>
        </div>
      </div>

      <!-- Widget Bottom (3) Areas -->
      <div class="row">

        <!-- Widget Area 4: Bottom Left Homepage -->
        <div class="col-md-4 home-widget">
          <?php dynamic_sidebar('bottom-left-homepage'); ?>
        </div>

        <!-- Widget Area 5: Bottom Middle Homepage -->
        <div class="col-md-4 home-widget">
          <?php dynamic_sidebar('bottom-middle-homepage'); ?>
        </div>

        <!-- Widget Area 6: Bottom Right Homepage -->
        <div class="col-md-4 home-widget">
          <?php dynamic_sidebar('bottom-right-homepage'); ?>
        </div>

      </div>

    </main>

  </div>

<?php get_footer(); ?>
