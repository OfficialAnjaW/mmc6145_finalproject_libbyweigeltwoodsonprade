<?php get_header(); ?>


<main>
        <!--here is the smart slider plugin - hero image, install widget area, will need to be styled on remote site -->

        <!-- blog slider 1, here is the WP Carousel Plugin - will need to add as posts to Woo Commerce and then add to WP Carousel -->
            <p>WP Carousel Plugin</p>
        <!-- paralax scroll 1 here, hand code -->

                  <div class="parallax"></div>

                  <div style="height:500px; background-color:#0c005a;font-size:36px">
                  Lorem Ipsum sentence here.
                  </div>

        <!-----blog slider 2, here is the WP Carousel Plugin - will need to add as posts to Woo Commerce and then add to WP Carousel -->
            <p>WP Carousel Plugin</p>

        <!-- paralax scroll 2 here, hand code -->

                    <div class="parallax"></div>

                    <div style="height:500px; background-color:#0c005a;font-size:36px">
                        Lorem Ipsum sentence here.
                    </div>


</main>
                  <div class="container">
                    <div class="row">
<!--- previous code from assignment 3 starts------------------->

      <!--<?php  if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <div class="col-md-4 post-overview">
            <h3><?php the_title(); ?></h3>-->


            <!-- Featured Image -->
          <!--  <div class="post-featured-image">
              <?php the_post_thumbnail('medium'); ?>
            </div> -->

            <!-- Post Information -->
          <!--  <p class="post-info"><?php echo "Date: " . get_the_date(); echo " | "; echo "Author: " . get_the_author(); ?></p>

            <?php the_excerpt(); ?>

            <a class="btn btn-primary btn-md" href="<?php the_permalink(); ?>">Read More >></a>
          </div>
    <?php } //ends while loop
    } //ends if statement
      ?> -->


<!--- previous code from assignment 3 ends------------------->




    </div>
  </div>

<?php get_footer(); ?>
