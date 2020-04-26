<?php
/*
Template Name: Default Layout
Template Post Type: page
*/
get_header(); ?>

<?php dynamic_sidebar('blog-hero-image'); ?>

<div class="container carousel">
  <div class="row">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post(); ?>
            <div class="col-md-4 carousel-tile">
              <?php the_post_thumbnail('thumbnail'); ?>
              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <?php the_excerpt(); ?>
                <?php
                  $archive_year = get_the_time('Y');
                  $archive_month = get_the_time('m');
                  $archive_day = get_the_time('d');
                ?>

              <p>Published: <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo get_the_date(); ?></a></p>
              <a class="btn btn-primary" href="<?php the_permalink(); ?>">Learn More</a>
            </div>
      <?php
        }// end while
      }// end if
      ?>

  </div><!-- row-->
</div> <!--container-->


<?php get_footer(); ?>
