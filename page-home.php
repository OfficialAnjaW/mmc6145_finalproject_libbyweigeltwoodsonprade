<?php

/*
Template Name: Homepage
Template Post Type: page
*/

?>

<?php get_header(); ?>

  <!-- Widget Area: Homepage Hero Image -->
  <div class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('homepage-hero-image'); ?>
    </div>
  </div>

  <main>

    <!-- Widget Area: Homepage Truck Types -->
    <div class="container-fluid container-truck-types">
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('homepage-truck-types'); ?>
        </div>
      </div>
    </div>

    <!-- Widget Area: Homepage Middle Image -->
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('homepage-middle-image'); ?>
      </div>
    </div>

    <!-- Widget Area: Homepage Services Section -->
    <div class="container-fluid services-section">

      <div class="row">
        <!-- Widget Area: Homepage Services Title -->
        <div class="col-md-12">
          <?php dynamic_sidebar('homepage-services-title'); ?>
        </div>
      </div>

      <div class="row d-flex justify-content-around">

        <!-- Widget Area: Homepage Services One -->
        <div class="col-sm-3">
          <?php dynamic_sidebar('homepage-services-one'); ?>
        </div>

        <!-- Widget Area: Homepage Services Two -->
        <div class="col-sm-3">
          <?php dynamic_sidebar('homepage-services-two'); ?>
        </div>

        <!-- Widget Area: Homepage Services Three -->
        <div class="col-sm-3">
          <?php dynamic_sidebar('homepage-services-three'); ?>
        </div>

        <!-- Widget Area: Homepage Services Four -->
        <div class="col-sm-3">
          <?php dynamic_sidebar('homepage-services-four'); ?>
        </div>

      </div>
    </div>

    <!-- Widget Area: Homepage Locations Section -->
    <div class="container locations-section">

      <div class="row">
        <!-- Widget Area: Homepage Locations Title -->
        <div class="col-md-12">
          <?php dynamic_sidebar('homepage-locations-title'); ?>
        </div>
      </div>

      <div class="row">

        <!-- Widget Area: Homepage Locations One -->
        <div class="col-md-6">
          <?php dynamic_sidebar('homepage-locations-one'); ?>
        </div>

        <!-- Widget Area: Homepage Locations Two -->
        <div class="col-md-6">
          <?php dynamic_sidebar('homepage-locations-two'); ?>
        </div>

      </div>
    </div>

  </main>

<?php get_footer(); ?>
