<?php
/*
    Template Name: Truck Types
    Template Type: Page
*/
 ?>

<?php get_header(); ?>
<main class="container heading">


  <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Indicators-->
  <!--<ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>

  </ol>
  <!/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">
      <?php $args = array ('post_type' => 'truck_types', 'posts_per_page' => 3);

      $loop = new WP_Query($args);

      while($loop->have_posts()): $loop->the_post(); ?>

      <div class="col-md-4 col-sm-12" style="float:left">
       <div class="card mb-2">
            <div class="product-feature-img"><?php if (has_post_thumbnail()) {the_post_thumbnail('medium'); }?></div>
          <div class="card-body">
            <a href="<?php the_permalink(); ?>" class="heading"><h5><?php the_title(); ?></h5></a>
            <p><?php the_field('make') ?> | <?php the_field('year') ?></p>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>">View More</a>
          </div>
        </div>
      </div>
        <?php endwhile; ?>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <?php $args = array ('post_type' => 'truck_types', 'posts_per_page' => 3);

      $loop = new WP_Query($args);

      while($loop->have_posts()): $loop->the_post(); ?>

      <div class="col-md-3" style="float:left">
       <div class="card mb-2">
            <div class="product-feature-img"><?php if (has_post_thumbnail()) {the_post_thumbnail('medium'); }?></div>
          <div class="card-body">
            <a href="<?php the_permalink(); ?>" class="heading"><h5><?php the_title(); ?></h5></a>
            <p><?php the_field('make') ?> | <?php the_field('year') ?></p>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>">View More</a>
          </div>
        </div>
      </div>
        <?php endwhile; ?>
    </div>
    <!--/.Second slide-->


  </div>
  <!--/.Slides-->

  <!--Controls-->
  <div class="controls-top">
    <a class="btn btn-primary" href="#multi-item-example" data-slide="prev"><</a>
    <a class="btn btn-primary" href="#multi-item-example" data-slide="next">></a>
  </div>
  <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

</main>

<?php get_footer(); ?>
