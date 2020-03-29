<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <main class="col-md-12">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>

              <!-- Post Title -->
              <h2 class="entry-title"><?php the_title(); ?></h2>

              <!-- Featured Image -->
              <div class="single-post-featured-image">
                <?php the_post_thumbnail('large'); ?>
              </div>

              <!-- Post Information -->
              <p class="single-post-info"><?php echo "Date: " . get_the_date(); echo " | "; echo "Author: " . get_the_author(); ?></p>

              <!-- Post Content -->
              <?php the_content(); ?>

        <?php  } //ends while loop
          } //ends if statement
        ?>
      </main>
    </div>
  </div>

<?php get_footer(); ?>
