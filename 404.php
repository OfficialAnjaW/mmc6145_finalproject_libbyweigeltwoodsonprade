<?php get_header(); ?>

  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-12 error">
        <img src="<?php echo get_template_directory_uri() . '/images/404.gif' ?>" alt="Error Message" />
      </div>

      <div class="col-md-12">
        <h2>Page not found.</h2>
        <p>I'm sorry, it looks like nothing was found at this location. Would you like to go back home?</p>
        <a class="btn btn-primary btn-md" href="<?php echo home_url('/');?>">Click here</a>
      </div>

    </div>
  </div>

<?php get_footer(); ?>
