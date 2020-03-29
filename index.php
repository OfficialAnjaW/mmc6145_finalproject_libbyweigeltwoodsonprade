<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <?php  if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <div class="col-md-4 post-overview">
            <h3><?php the_title(); ?></h3>

            <!-- Featured Image -->
            <div class="post-featured-image">
              <?php the_post_thumbnail('medium'); ?>
            </div>

            <!-- Post Information -->
            <p class="post-info"><?php echo "Date: " . get_the_date(); echo " | "; echo "Author: " . get_the_author(); ?></p>

            <?php the_excerpt(); ?>

            <a class="btn btn-primary btn-md" href="<?php the_permalink(); ?>">Read More >></a>
          </div>
    <?php } //ends while loop
    } //ends if statement
      ?>
    </div>
  </div>

<?php get_footer(); ?>
