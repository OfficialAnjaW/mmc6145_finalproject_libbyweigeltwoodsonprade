<?php
/*
Template Name: Default Layout
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post(); ?>
            <div class="col-md-3">
              <?php the_post_thumbnail('thumbnail'); ?>

              <h3><?php the_title(); ?></h3>
              <p>Category: <?php the_category(); ?></p>

              <p><?php the_excerpt(); ?></p>

              <a class="btn btn-info btn-sm" href="<?php the_permalink(); ?>" >Read the Full Article</a>
              <p>&nbsp;</p>
            </div>
      <?php
        }// end while
      }// end if
      ?>

  </div><!-- row-->
</div> <!--container-->


<?php get_footer(); ?>
