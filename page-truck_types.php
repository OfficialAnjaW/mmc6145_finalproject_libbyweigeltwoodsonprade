<?php
/*
    Template Name: Truck Types
    Template Type: Page
*/
 ?>

<?php get_header(); ?>
<main class="container heading">

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
        'post_type'     => 'truck_types',
      );

      // Get the posts
      $truck_types = get_posts($args);

      // If there are posts
      if($truck_types):

        // Groups the posts in groups of $i
        $chunks = array_chunk($truck_types, $i);
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
            $html .= get_the_excerpt();
            $html .= '<a class="btn btn-primary" href="#">Learn More';
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

</main>

<?php get_footer(); ?>
