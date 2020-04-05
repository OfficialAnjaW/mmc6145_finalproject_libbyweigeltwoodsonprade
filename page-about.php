<?php

/*
Template Name: About Layout
Template Post Type: page
*/

?>

<?php get_header(); ?>

<!-- ======================= Hero Image Widget ==================-->
    <?php dynamic_sidebar('about-hero-image'); ?>

<main class="container">
<!-- ======================= Double Widget Areas ==================-->
  <section>
    <div class="row">
      <div class="col-12">
        <?php dynamic_sidebar('about-main'); ?>
      </div>
    </div>
  </section>

  <section class="about">
    <div class="row d-flex justify-content-between">
      <div class="col-lg-6">
        <?php dynamic_sidebar('about-left'); ?>
      </div>
      <div class="col-lg-6 col-sm-12">
        <?php dynamic_sidebar('about-right'); ?>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>
