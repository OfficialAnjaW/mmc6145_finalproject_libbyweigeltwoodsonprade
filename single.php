<?php get_header(); ?>
<!-- ======================= Hero Image Widget ==================-->
<main class="container">
  <section class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('post-hero-image'); ?>
    </div>
  </section>

<!-- ======================= Blog Content ==================-->
    <div class="row justify-content-center posts">
      <main class="col-md-9">
        <?php
          if(have_posts()) {
            while(have_posts()){
              the_post(); ?>
              <h2 class="entry-title"><?php the_title(); ?></h2>
              <h5 class="single-post-info"><?php echo "Author: " . get_the_author(); echo " // Date Published: " . get_the_date(); echo " // " . get_the_category(); echo " // " . get_the_tags(); ?></h5>

              <?php the_content(); ?>
          <?php  } //this ends while loop
          }// this ends if statement
        ?>
      </main>
<!-- ======================= Blog Sidebar ==================-->
      <aside class="col-md-2 sidebar">
        <?php get_sidebar(); ?>
      </aside>
    </div>

<!-- ======================= Recent Posts Slider ==================-->
  <section class="recent-posts">
    <h2>Related Posts</h2>
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('recent-posts'); ?>
        </div>
      </div>
  </section>


  <!-- ======================= Comments ==================-->
  <section>
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('comments'); ?>
      </div>
    </div>
    </main>


<?php get_footer(); ?>
