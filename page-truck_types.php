<?php
/*
    Template Name: Truck Types
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<?php dynamic_sidebar('trucks-hero-image'); ?>
<main class="container-fluid red">
  <section class="row">
    <article class="col-md-6 col-sm-12 col-xs-12">
      <?php dynamic_sidebar('trucks-search-left'); ?>
    </article>
    <article class="col-md-6 col-sm-12 col-xs-12">
      <?php dynamic_sidebar('trucks-search-right'); ?>
    </article>
  </section>
</main>
<section class="container">

<h2>Garbage Trucks</h2>
  <!-- Carousel -->
  <div id="type-carousel" class="carousel type-carousel-wrapper slide" data-ride="carousel" data-interval="3000">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <?php
      // Item size (set here the number of posts for each group)
      $i = 4;

      // Set the arguments for the query
      global $post;
      $args = array(
        'numberposts'   => 12,
        'post_type'     => 'garbage_trucks',
      );

      // Get the posts
      $garbage_trucks = get_posts($args);

      // If there are posts
      if($garbage_trucks):

        // Groups the posts in groups of $i
        $chunks = array_chunk($garbage_trucks, $i);
        $html = "";

        /*
         * Item
         * For each group (chunk) it generates an item
         */
        foreach($chunks as $chunk):
          // Sets as 'active' the first item
          ($chunk === reset($chunks)) ? $active = "active" : $active = "";
          $html .= '<div class="carousel-item '.$active.'"><div class="container"><div class="row">';

          /*
           * Posts inside the current Item
           * For each item it generates the posts HTML
           */
          foreach($chunk as $post):

            $html .= '<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 carousel-tile">';
            $html .= '<a class="cat-link" href="'.get_the_permalink().'">';
            $html .= get_the_post_thumbnail($post->ID,'thumbnail');
            $html .= '<h3>'.get_the_title($post->ID).'</h3>';
            $html .= '</a>';
            $html .= '<p>'.get_the_excerpt().'</p>';
            $html .= '<a class="btn btn-primary" href="'.get_the_permalink().'">Learn More';
            $html .= '</a>';
            $html .= '</div>';
          endforeach;

          $html .= '</div></div></div>';

        endforeach;

        // Prints the HTML
        echo $html;

      endif;
      ?>

    </div> <!-- carousel inner -->

  <!--Controls-->
  <div class="controls-top">
    <a class="btn btn-primary" href="#type-carousel" data-slide="prev"><</a>
    <a class="btn btn-primary" href="#type-carousel" data-slide="next">></a>
  </div>
  <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->


<!-- Carousel -->

<h2>Dump Trucks</h2>
<div id="type-carousel-2" class="carousel type-carousel-wrapper slide" data-ride="carousel" data-interval="3000">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <?php
    // Item size (set here the number of posts for each group)
    $i = 4;

    // Set the arguments for the query
    global $post;
    $args = array(
      'numberposts'   => 12,
      'post_type'     => 'dump_trucks',
    );

    // Get the posts
    $dump_trucks = get_posts($args);

    // If there are posts
    if($dump_trucks):

      // Groups the posts in groups of $i
      $chunks = array_chunk($dump_trucks, $i);
      $html = "";

      /*
       * Item
       * For each group (chunk) it generates an item
       */
      foreach($chunks as $chunk):
        // Sets as 'active' the first item
        ($chunk === reset($chunks)) ? $active = "active" : $active = "";
        $html .= '<div class="carousel-item '.$active.'"><div class="container"><div class="row">';

        /*
         * Posts inside the current Item
         * For each item it generates the posts HTML
         */
        foreach($chunk as $post):

          $html .= '<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 carousel-tile">';
          $html .= '<a class="cat-link" href="'.get_the_permalink().'">';
          $html .= get_the_post_thumbnail($post->ID,'thumbnail');
          $html .= '<h3>'.get_the_title($post->ID).'</h3>';
          $html .= '</a>';
          $html .= '<p>'.get_the_excerpt().'</p>';
          $html .= '<a class="btn btn-primary" href="'.get_the_permalink().'">Learn More';
          $html .= '</a>';
          $html .= '</div>';
        endforeach;

        $html .= '</div></div></div>';

      endforeach;

      // Prints the HTML
      echo $html;

    endif;
    ?>

  </div> <!-- carousel inner -->

<!--Controls-->
<div class="controls-top">
  <a class="btn btn-primary" href="#type-carousel-2" data-slide="prev"><</a>
  <a class="btn btn-primary" href="#type-carousel-2" data-slide="next">></a>
</div>
<!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

<h2>Grapple Trucks</h2>
  <!-- Carousel -->
  <div id="type-carousel-3" class="carousel type-carousel-wrapper slide" data-ride="carousel" data-interval="3000">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <?php
      // Item size (set here the number of posts for each group)
      $i = 4;

      // Set the arguments for the query
      global $post;
      $args = array(
        'numberposts'   => 12,
        'post_type'     => 'grapple_trucks',
      );

      // Get the posts
      $grapple_trucks = get_posts($args);

      // If there are posts
      if($grapple_trucks):

        // Groups the posts in groups of $i
        $chunks = array_chunk($grapple_trucks, $i);
        $html = "";

        /*
         * Item
         * For each group (chunk) it generates an item
         */
        foreach($chunks as $chunk):
          // Sets as 'active' the first item
          ($chunk === reset($chunks)) ? $active = "active" : $active = "";
          $html .= '<div class="carousel-item '.$active.'"><div class="container"><div class="row">';

          /*
           * Posts inside the current Item
           * For each item it generates the posts HTML
           */
          foreach($chunk as $post):

            $html .= '<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 carousel-tile">';
            $html .= '<a class="cat-link" href="'.get_the_permalink().'">';
            $html .= get_the_post_thumbnail($post->ID,'thumbnail');
            $html .= '<h3>'.get_the_title($post->ID).'</h3>';
            $html .= '</a>';
            $html .= '<p>'.get_the_excerpt().'</p>';
            $html .= '<a class="btn btn-primary" href="'.get_the_permalink().'">Learn More';
            $html .= '</a>';
            $html .= '</div>';
          endforeach;

          $html .= '</div></div></div>';

        endforeach;

        // Prints the HTML
        echo $html;

      endif;
      ?>

    </div> <!-- carousel inner -->

  <!--Controls-->
  <div class="controls-top">
    <a class="btn btn-primary" href="#type-carousel-3" data-slide="prev"><</a>
    <a class="btn btn-primary" href="#type-carousel-3" data-slide="next">></a>
  </div>
  <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

<h2>Other Trucks</h2>
  <!-- Carousel -->
  <div id="type-carousel-4" class="carousel type-carousel-wrapper slide" data-ride="carousel" data-interval="3000">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <?php
      // Item size (set here the number of posts for each group)
      $i = 4;

      // Set the arguments for the query
      global $post;
      $args = array(
        'numberposts'   => 12,
        'post_type'     => 'other_trucks',
      );

      // Get the posts
      $other_trucks = get_posts($args);

      // If there are posts
      if($other_trucks):

        // Groups the posts in groups of $i
        $chunks = array_chunk($other_trucks, $i);
        $html = "";

        /*
         * Item
         * For each group (chunk) it generates an item
         */
        foreach($chunks as $chunk):
          // Sets as 'active' the first item
          ($chunk === reset($chunks)) ? $active = "active" : $active = "";
          $html .= '<div class="carousel-item '.$active.'"><div class="container"><div class="row">';

          /*
           * Posts inside the current Item
           * For each item it generates the posts HTML
           */
          foreach($chunk as $post):

            $html .= '<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 carousel-tile">';
            $html .= '<a class="cat-link" href="'.get_the_permalink().'">';
            $html .= get_the_post_thumbnail($post->ID,'thumbnail');
            $html .= '<h3>'.get_the_title($post->ID).'</h3>';
            $html .= '</a>';
            $html .= '<p>'.get_the_excerpt().'</p>';
            $html .= '<a class="btn btn-primary" href="'.get_the_permalink().'">Learn More';
            $html .= '</a>';
            $html .= '</div>';
          endforeach;

          $html .= '</div></div></div>';

        endforeach;

        // Prints the HTML
        echo $html;

      endif;
      ?>

    </div> <!-- carousel inner -->

  <!--Controls-->
  <div class="controls-top">
    <a class="btn btn-primary" href="#type-carousel-4" data-slide="prev"><</a>
    <a class="btn btn-primary" href="#type-carousel-4" data-slide="next">></a>
  </div>
  <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

</section>

<?php get_footer(); ?>
