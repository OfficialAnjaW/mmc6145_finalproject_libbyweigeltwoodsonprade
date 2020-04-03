<?php

/* =============================

  Add Stylesheet and JS Files

============================= */

  function custom_theme_scripts() {

    // Bootstrap Integration
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    //Main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    //JS Files
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');

  }

  add_action('wp_enqueue_scripts','custom_theme_scripts');

/* =============================

  Custom Header Logo

============================= */

  $custom_image_header = array(
    'width'   => 225,
    'height'  => 120,
    'uploads' => true,
  );

  add_theme_support('custom-header', $custom_image_header);

/* =============================

  Featured Image

============================= */

  add_theme_support('post-thumbnails');

/*===============================

  Menus

=====================================*/

  function register_my_menus(){
    register_nav_menus(
      array(
        'top-menu'      => __('Top Menu'),
        'footer-menu'  => __('Footer Menu'),
      )
    );
  }

  add_action('init', 'register_my_menus');

/*===============================

  Widget Areas

=====================================*/

function blank_widgets_init(){

  // Widget Area 1: Hero Image
  register_sidebar(array(
      'name'          => ('Hero Image'),
      'id'            => 'hero-image',
      'description'   => 'Hero Image on Homepage',
      'before_widget' => '<div class="widget-hero-image">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="hero-image-widget-title">',
      'after_title'   => '</h3>'
  ));

  // Widget Area 2: About Us
  register_sidebar(array(
      'name'          => ('About Us'),
      'id'            => 'about-us',
      'description'   => 'Homepage About Us Section',
      'before_widget' => '<div class="widget-about-us">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="about-us-widget-title">',
      'after_title'   => '</h5>'
  ));

  // Widget Area 3: Bottom Left Homepage
  register_sidebar(array(
      'name'          => ('Bottom Left Homepage'),
      'id'            => 'bottom-left-homepage',
      'description'   => 'Bottom Left Section on Homepage',
      'before_widget' => '<div class="widget-bottom-left-homepage">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="bottom-left-homepage-widget-title">',
      'after_title'   => '</h5>'
  ));

  // Widget Area 4: Bottom Middle Homepage
  register_sidebar(array(
      'name'          => ('Bottom Middle Homepage'),
      'id'            => 'bottom-middle-homepage',
      'description'   => 'Bottom Middle Section on Homepage',
      'before_widget' => '<div class="widget-bottom-middle-homepage">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="bottom-middle-homepage-widget-title">',
      'after_title'   => '</h5>'
  ));

  // Widget Area 5: Bottom Right Homepage
  register_sidebar(array(
      'name'          => ('Bottom Right Homepage'),
      'id'            => 'bottom-right-homepage',
      'description'   => 'Bottom Right Section on Homepage',
      'before_widget' => '<div class="widget-bottom-right-homepage">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="bottom-right-homepage-widget-title">',
      'after_title'   => '</h5>'
  ));

  // Widget Area 6: Right Sidebar
  register_sidebar(array(
      'name'          => ('Right Sidebar'),
      'id'            => 'right-sidebar',
      'description'   => 'Right Sidebar Area for Template',
      'before_widget' => '<div class="widget-right-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="right-sidebar-widget-title">',
      'after_title'   => '</h5>'
  ));

  // Widget Area 7: Left Footer
  register_sidebar(array(
      'name'          => ('Left Footer'),
      'id'            => 'left-footer',
      'description'   => 'Left Widget Area in Footer',
      'before_widget' => '<div class="widget-left-footer">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="left-footer-widget-title">',
      'after_title'   => '</h5>'
  ));

  // Widget Area 8: Middle Footer
  register_sidebar(array(
      'name'          => ('Middle Footer'),
      'id'            => 'middle-footer',
      'description'   => 'Middle Widget Area in Footer',
      'before_widget' => '<div class="widget-middle-footer">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="middle-footer-widget-title">',
      'after_title'   => '</h5>'
  ));

  // Widget Area 9: Right Footer
  register_sidebar(array(
      'name'          => ('Right Footer'),
      'id'            => 'right-footer',
      'description'   => 'Right Widget Area in Footer',
      'before_widget' => '<div class="widget-right-footer">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="right-footer-widget-title">',
      'after_title'   => '</h5>'
  ));

  // Widget Area 10: Pages Hero Image
  register_sidebar(array(
      'name'          => ('Right Sidebar Pages Hero Image'),
      'id'            => 'right-sidebar-pages-hero-image',
      'description'   => 'Hero Image for Pages with Right Sidebar',
      'before_widget' => '<div class="widget-right-sidebar-pages-hero-image">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="right-sidebar-pages-hero-image-widget-title">',
      'after_title'   => '</h3>'
  ));

  /*===============================================================

    NEW Widget Areas for index.php and page-trucks.php

  ====================================================================*/

  // Widget Area 11: Blog Widget A ** NEW FOR FINAL PROJECT*************
  register_sidebar(array(
      'name'          => ('Blog Hero Image'),
      'id'            => 'blog-hero-image',
      'description'   => 'Blog Widget Area for Hero Image',
      'before_widget' => '<div class="blog-widget-hero-area">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="blog-widget-hero-for-index">',
      'after_title'   => '</h3>'
  ));

  // Widget Area 11: Blog Widget A ** NEW FOR FINAL PROJECT*************
  register_sidebar(array(
      'name'          => ('Trucks Hero Image'),
      'id'            => 'trucks-hero-image',
      'description'   => 'Trucks Widget Area for Hero',
      'before_widget' => '<div class="trucks-widget-hero-area">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="trucks-widget-hero-for-index">',
      'after_title'   => '</h3>'
  ));

}

add_action('widgets_init', 'blank_widgets_init');

?>
