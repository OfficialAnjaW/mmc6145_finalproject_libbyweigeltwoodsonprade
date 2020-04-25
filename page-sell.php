<?php
/*
Template Name: Sell your Truck Layout
Template Post Type: page
*/
?>

<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <main class="col-md-12">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>

              <!-- Featured Image -->
              <div class="page-featured-image">
                <?php the_post_thumbnail('large'); ?>
              </div>

              <div class="truck-sale">
                <!-- Page Title -->
                <h2 class="entry-title"><?php the_title(); ?></h2>
                <!-- Page Content -->
                <?php the_content(); ?>
              </div>

        <?php  } //ends while loop
          } //ends if statement
        ?>
      </main>
    </div>
  </div>

<?php get_footer(); ?>
