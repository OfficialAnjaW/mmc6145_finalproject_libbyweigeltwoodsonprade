<?php get_header(); ?>
  <main class="container product-entry-text">
    <section>
      <h3 class="product-entry-spacing"><?php the_title(); ?></h3>
    </section>

    <section class="row justify-content-center product-entry-spacing">
      <article class="col-lg-7 col-md-7 col-12">
        <div>
          <?php
            if(have_posts()) {
              while(have_posts()){
                the_post(); ?>

              <div class="single-trucks-img">
                <?php the_post_thumbnail(); ?>
              </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <h5>Body Specifications:</h5>
                <p>Body Type: <?php the_field('body_type') ?></p>
                <p>Body Make: <?php the_field('body_make') ?></p>
                <p>Body Model: <?php the_field('body_model') ?></p>
                <p>Body Capacity: <?php the_field('body_capacity') ?></p>
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <h5>CHASSIS SPECIFICATIONS:</h5>
                <p>Year: <?php the_field('year') ?></p>
                <p>Make: <?php the_field('make') ?></p>
                <p>Model: <?php the_field('model') ?></p>
                <p>Miles: <?php the_field('miles') ?></p>
                <p>Hours: <?php the_field('hours') ?></p>
                <p>Engine Make: <?php the_field('engine_make') ?></p>
                <p>Engine Model: <?php the_field('engine_model') ?></p>
                <p>Engine Brake: <?php the_field('engine_brake') ?></p>
                <p>Transmission Type: <?php the_field('trans_type') ?></p>
                <p>Transmission Make: <?php the_field('trans_make') ?></p>
                <p>Transmission Model: <?php the_field('trans_model') ?></p>
                <p>Speeds: <?php the_field('speeds') ?></p>
                <p>Paint: <?php the_field('paint') ?></p>
                <p>Stock #: <?php the_field('stock') ?></p>

              </div>
            </div>

            <?php  } //this ends while loop
            }// this ends if statement
          ?>
        </div>
      </article>
      <article class="col-lg-5 col-md-5 col-12">
        <?php dynamic_sidebar('single-truck-sidebar'); ?>
      </article>
  </section>

  </main>
<?php get_footer(); ?>
