<?php get_header(); ?>
  <main class="container product-entry-text">
    <section>
      <h3 class="product-entry-spacing"><?php the_title(); ?></h3>
    </section>

    <section class="row justify-content-center product-entry-spacing">
      <article class="col-lg-8 col-md-8 col-12">
        <div>
          <?php
            if(have_posts()) {
              while(have_posts()){
                the_post(); ?>

              <div class="single-trucks-img">
                <?php the_post_thumbnail(); ?>
              </div>
              <div>
                <h5>Body Specifications:</h5>
                <p>Body Type: <?php the_field('body-type') ?></p>
                <p>Body Make: <?php the_field('body-make') ?></p>
                <p>Body Model: <?php the_field('body-model') ?></p>
                <p>Body Capacity: <?php the_field('body-capacity') ?></p>
              </div>

              <div>
                <h5>CHASSIS SPECIFICATIONS:</h5>
                <p>Year: <?php the_field('year') ?></p>
                <p>Make: <?php the_field('make') ?></p>
                <p>Model: <?php the_field('model') ?></p>
                <p>Miles: <?php the_field('miles') ?></p>
                <p>Hours: <?php the_field('hours') ?></p>
                <p>Engine Make: <?php the_field('engine-make') ?></p>
                <p>Engine Model: <?php the_field('engine-model') ?></p>
                <p>Engine Brake: <?php the_field('engine-brake') ?></p>
                <p>Transmission Type: <?php the_field('tran-type') ?></p>
                <p>Transmission Make: <?php the_field('tran-make') ?></p>
                <p>Transmission Model: <?php the_field('tran-model') ?></p>
                <p>Speeds: <?php the_field('speeds') ?></p>
                <p>Paint: <?php the_field('paint') ?></p>
                <p>Stock #: <?php the_field('stock') ?></p>

              </div>

            <?php  } //this ends while loop
            }// this ends if statement
          ?>
        </div>
      </article>
      <article class="col-lg-4 col-md-4 col-12">

      </article>
  </section>

  </main>
<?php get_footer(); ?>
