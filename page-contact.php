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
    <div class="col-md-12 justify-content-center">
      <?php dynamic_sidebar('contact-hero-image'); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
