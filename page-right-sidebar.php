<?php

/*
Template Name: Page Right Sidebar
Template Post Type: page, post
*/

?>

<?php get_header(); ?>

  <!-- Widget Area 10: Pages Hero Image -->
  <div class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('right-sidebar-pages-hero-image'); ?>
    </div>
  </div>

  <!-- Main Page Content -->
  <div class="container">
    <div class="row">
      <main class="col-md-9">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>

              <h2 class="entry-title"><?php the_title(); ?></h2>

              <?php the_content(); ?>

        <?php  } //ends while loop
          } //ends if statement
        ?>
      </main>

      <!-- Right Sidebar -->
      <aside class="col-md-3">
        <?php get_sidebar(); ?>
      </aside>

    </div>
  </div>

<?php get_footer(); ?>
