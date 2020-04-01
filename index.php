<?php get_header(); ?>

  <div class="container">
    <div class="row">

        <!--here is the smart slider plugin - hero image, install widget area, will need to be styled on remote site -->

        <!-- blog slider 1, here is the WP Carousel Plugin - will need to add as posts to Woo Commerce and then add to WP Carousel -->
            <p>WP Carousel Plugin</p>
        <!-- paralax scroll 1 here, hand code -->

                  <div class="parallax"></div>

                  <div style="height:1000px; background-color:red;font-size:36px">
                  Scroll Up and Down this page to see the parallax scrolling effect.
                  This div is just here to enable scrolling.
                  Tip: Try to remove the background-attachment property to remove the scrolling effect.
                  </div>

        <!-----blog slider 2, here is the WP Carousel Plugin - will need to add as posts to Woo Commerce and then add to WP Carousel -->
            <p>WP Carousel Plugin</p>

        <!-- paralax scroll 2 here, hand code -->

                  <div class="parallax"></div>

                  <div style="height:1000px; background-color:red;font-size:36px">
                  Scroll Up and Down this page to see the parallax scrolling effect.
                  This div is just here to enable scrolling.
                  Tip: Try to remove the background-attachment property to remove the scrolling effect.
                  </div>


<!--- previous code from assignment 3 starts------------------->
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

<!--- previous code from assignment 3 ends------------------->




    </div>
  </div>

<?php get_footer(); ?>
