<?php get_header(); ?>

<!-- ======================= Hero Image Widget ==================-->

<main class="container-fluid">
  <section class="row">
    <?php
      if(have_posts()) {
        while(have_posts()){
          the_post(); ?>

        <div class="col-12 post-hero">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php  } //this ends while loop
      }// this ends if statement
    ?>
  </section>
</main>

  <section class="container">

<!-- ======================= Blog Content ==================-->
    <div class="row justify-content-center posts">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <?php
          if(have_posts()) {
            while(have_posts()){
              the_post(); ?>
              <h2 class="entry-title"><?php the_title(); ?></h2>
              <h5 class="single-post-info"><?php echo "Author: " . get_the_author(); echo " // " . get_the_date() . " // "; the_category();?></h5>

              <?php the_content(); ?>
          <?php  } //this ends while loop
          }// this ends if statement
        ?>
      </div>
<!-- ======================= Blog Sidebar ==================-->
      <aside class="col-lg-3 col-md-4 col-sm-12 sidebar">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </section>

<!-- ======================= Recent Posts Slider ==================-->
<section class="container-fluid">
  <article class="recent-posts" id="recent-posts">
    <h2>Related Posts</h2>
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('recent-posts'); ?>
      </div>
    </div>
  </article>
</section>



  <!-- ======================= Comments ==================-->
  <section class="container comments">
    <?php comments_template(); ?>
  </section>

<?php get_footer(); ?>
