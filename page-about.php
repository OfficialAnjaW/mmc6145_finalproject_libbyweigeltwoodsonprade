<?php
/*
Template Name: About Layout
Template Post Type: page
*/
?>

<?php get_header(); ?>
  <main class="container">


<!-- ======================= Featured Image Function ==================-->
    <?php the_post_thumbnail(); ?>

  <!--======================= start about us content post=====================------->
    <section>
      <div class="row justify-content-center posts">
        <div class="col-lg-9 col-md-8 col-sm-12">
          <?php
            if(have_posts()) {
              while(have_posts()){
                the_post(); ?>
                <h2 class="entry-title"><?php the_title(); ?></h2>

                <?php the_content(); ?>
            <?php  } //this ends while loop
            }// this ends if statement
          ?>
        </div>

    </section>
<!-- ======================= Temp Commented out/Double Widget Areas ==================-->
  <!--  <section>
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
    </section>-->


  </main>

<?php get_footer(); ?>
