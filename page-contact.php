<?php

/*
Template Name: Contact Us Layout
Template Post Type: page
*/

?>

<?php get_header(); ?>

<!-- ======================= Hero Image Widget ==================-->
  <?php dynamic_sidebar('contact-hero-image'); ?>

  <main class="container">
<!-- ======================= Locations Widgets ==================-->
    <section class="location">
      <h2></h2>
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

  <!-- ======================= Contact Us Widget ==================-->

  <section class="container-fluid">
    <article class="contact">
      <h2></h2>
      <div class="row d-flex align-items-baseline">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="phone icon" title="call us"/>
          <a class="btn btn-secondary btn-lg" href="#">Phone</a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/email.png" alt="email icon" title="email us"/></a>
          <a class="btn btn-secondary btn-lg" href="#">Email</a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/chat.png" alt="chat icon" title="chat with us"/></a>
          <a class="btn btn-secondary btn-lg" href="#">Chat</a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/form.png" alt="form icon" title="fill out our form"/></a>
          <a class="btn btn-secondary btn-lg" href="#">FAQ</a>
        </div>
      </div>
    </article>
  </section>

<?php get_footer(); ?>
