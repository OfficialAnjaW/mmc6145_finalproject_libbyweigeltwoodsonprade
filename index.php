<?php
/*
Template Name: Default Layout
Template Post Type: page
*/
get_header(); ?>

<div class="container">
  <div class="row">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post(); ?>
            <div class="col-md-4">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p>Category: <?php the_category(); ?></p>
              <?php the_post_thumbnail('medium'); ?>
              <?php the_excerpt(); ?>
                <?php
                  $archive_year = get_the_time('Y');
                  $archive_month = get_the_time('m');
                  $archive_day = get_the_time('d');
                ?>

              <p>Published: <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo get_the_date(); ?></a></p>
              <p><?php echo "Article written by: " . get_the_author(); ?></p>
            </div>
      <?php
        }// end while
      }// end if
      ?>

  </div><!-- row-->
</div> <!--container-->


<?php get_footer(); ?>
