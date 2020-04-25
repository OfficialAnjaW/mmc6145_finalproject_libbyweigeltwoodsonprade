<?php
/*Template Name: Search Page */
 get_header(); ?>

 <div class="container search">
   <div class="row">
     <div class="twelve columns">
       <?php if(have_posts()){?>
          <h1><?php printf(__('Search Results for : %s'), '<span>' . get_search_query() . '</span>');?></h1>
         <?php while(have_posts()){
           the_post(); ?>
           <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
           <?php the_excerpt(); ?>
           <a href="<?php the_permalink(); ?>">Read more...</a><?php
         } // Ends while loop
       }else{?>
         <h2>Nothing Was Found!</h2>
         <p>Our apologies, but nothing matched this search criteria.</p>
         <p>Please try agan with a different term.</p><?php
         get_search_form();
       }

       ?>
     </div>
   </div>
 </div>

<?php get_footer(); ?>
