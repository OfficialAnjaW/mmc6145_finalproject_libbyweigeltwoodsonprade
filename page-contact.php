<?php

/*
Template Name: Contact Us Layout
Template Post Type: page
*/

?>

<?php get_header(); ?>

<!-- ======================= Hero Image Widget ==================-->
<main class="container">
  <section class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('contact-hero-image'); ?>
    </div>
  </section>

  <section>
    <h2>Locations</h2>
    <div class="row d-flex justify-content-between">
      <div class="col-lg-6">
        <?php dynamic_sidebar('contact-location-left'); ?>
      </div>
      <div class="col-lg-6 col-sm-12">
        <?php dynamic_sidebar('contact-location-right'); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
