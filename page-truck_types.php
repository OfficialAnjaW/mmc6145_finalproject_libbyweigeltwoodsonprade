<?php
/*
    Template Name: Truck Types
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<?php dynamic_sidebar('trucks-hero-image'); ?>

<!-- ====================== Search Area ====================== -->
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
<section class="container-fluid">


<!-- paralax scroll 1 here, dump truck hand code -->
  <div class="parallax"></div>
<!--  <div style="height:150px; background-color:#0c005a;" >
    <h2 class="parallaxtext">Garbage Trucks</h2>-->
  </div>
</section>


<!-- ====================== Start Garbage Trucks Carousel ====================== -->
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
<!-- ====================== End Garbage Trucks Carousel ====================== -->
</section>
<section class="container-fluid">

<!-- paralax scroll 2 here, Grapple trucks hand code -------------->
<div class="parallax4"></div>
<!--<div style="height:150px; background-color:#0c005a;" >
  <h2 class="parallaxtext">Grapple Trucks</h2>-->
</div>

</section>

<section class="container">

<!-- ====================== Start Dump Trucks Carousel ====================== -->
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
<!-- ====================== End Dump Trucks Carousel ====================== -->

</section>
<section class="container-fluid">
<!-- paralax scroll 3 here, dump truck hand code -->
<div class="parallax3"></div>
<!--<div style="height:150px; background-color:#0c005a;" >
  <h2 class="parallaxtext">Dump Trucks</h2>-->
</div>
</section>

<section class="container">

<!-- ====================== Start Grapple Trucks Carousel ====================== -->

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
</section>
<!-- ====================== End Grapple Trucks Carousel ====================== -->
<section class="container-fluid">
<!-- paralax scroll 4 here, concrete/other trucks hand code --------------------------->
<div class="parallax2"></div>
<!--<div style="height:150px; background-color:#0c005a;" >
  <h2 class="parallaxtext">All Other Truck Types</h2>-->
</div>
</section>
<!-- ====================== Start Other Trucks Carousel ====================== -->
<section class="container">
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
<!-- ====================== End Other Trucks Carousel ====================== -->

</section>

<?php get_footer(); ?>
