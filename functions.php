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
    'width'   => 250,
    'height'  => 155,
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
        'main-menu'          => __('Main Menu'),
        'footer-middle-menu' => __('Footer Middle Menu'),
        'footer-right-menu'  => __('Footer Right Menu'),
      )
    );
  }

  add_action('init', 'register_my_menus');

/*===================================

  Widget Areas

=====================================*/

  function blank_widgets_init(){

/*===================================

  Widget Areas header.php

=====================================*/

    // // Widget Area: Header Contact
    // register_sidebar(array(
    //     'name'          => ('Header Contact'),
    //     'id'            => 'header-contact',
    //     'description'   => 'Contact Info in Header',
    //     'before_widget' => '<div class="widget-header-contact">',
    //     'after_widget'  => '</div>',
    //     'before_title'  => '<h5 class="header-contact-widget-title">',
    //     'after_title'   => '</h5>'
    // ));

    // Widget Area: Header Social
    register_sidebar(array(
        'name'          => ('Header Social'),
        'id'            => 'header-social',
        'description'   => 'Social Meida Info in Header',
        'before_widget' => '<div class="widget-header-social">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="header-social-widget-title">',
        'after_title'   => '</h5>'
    ));

/*===================================

  Widget Areas footer.php

=====================================*/

    // Widget Area: Left Footer
    register_sidebar(array(
        'name'          => ('Left Footer'),
        'id'            => 'left-footer',
        'description'   => 'Left Widget Area in Footer',
        'before_widget' => '<div class="widget-left-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="left-footer-widget-title">',
        'after_title'   => '</h5>'
    ));

    // Widget Area: Middle Footer
    register_sidebar(array(
        'name'          => ('Middle Footer'),
        'id'            => 'middle-footer',
        'description'   => 'Middle Widget Area in Footer',
        'before_widget' => '<div class="widget-middle-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="middle-footer-widget-title">',
        'after_title'   => '</h5>'
    ));

    // Widget Area: Right Footer
    register_sidebar(array(
        'name'          => ('Right Footer'),
        'id'            => 'right-footer',
        'description'   => 'Right Widget Area in Footer',
        'before_widget' => '<div class="widget-right-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="right-footer-widget-title">',
        'after_title'   => '</h5>'
    ));

/*===================================

  Widget Areas page-home.php

=====================================*/

    // Widget Area: Homepage Hero Image
    register_sidebar(array(
        'name'          => ('Homepage Hero Image'),
        'id'            => 'homepage-hero-image',
        'description'   => 'Hero Image on Homepage',
        'before_widget' => '<div class="widget-homepage-hero-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-hero-image-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Truck Types
    register_sidebar(array(
        'name'          => ('Homepage Truck Types'),
        'id'            => 'homepage-truck-types',
        'description'   => 'Truck Types Section on Homepage',
        'before_widget' => '<div class="widget-homepage-truck-types">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-truck-types-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Middle Image
    register_sidebar(array(
        'name'          => ('Homepage Middle Image'),
        'id'            => 'homepage-middle-image',
        'description'   => 'Middle Image on Homepage',
        'before_widget' => '<div class="widget-homepage-middle-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-middle-image-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services Header
    register_sidebar(array(
        'name'          => ('Homepage Services Title'),
        'id'            => 'homepage-services-title',
        'description'   => 'Services Title on Homepage',
        'before_widget' => '<div class="widget-homepage-services-title">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-title-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services One
    register_sidebar(array(
        'name'          => ('Homepage Services One'),
        'id'            => 'homepage-services-one',
        'description'   => 'Services One on Homepage',
        'before_widget' => '<div class="widget-homepage-services-one">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-one-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services Two
    register_sidebar(array(
        'name'          => ('Homepage Services Two'),
        'id'            => 'homepage-services-two',
        'description'   => 'Services Two on Homepage',
        'before_widget' => '<div class="widget-homepage-services-two">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-two-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services Three
    register_sidebar(array(
        'name'          => ('Homepage Services Three'),
        'id'            => 'homepage-services-three',
        'description'   => 'Services Three on Homepage',
        'before_widget' => '<div class="widget-homepage-services-three">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-three-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services Four
    register_sidebar(array(
        'name'          => ('Homepage Services Four'),
        'id'            => 'homepage-services-four',
        'description'   => 'Services Four on Homepage',
        'before_widget' => '<div class="widget-homepage-services-four">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-four-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services Five
    register_sidebar(array(
        'name'          => ('Homepage Services Five'),
        'id'            => 'homepage-services-five',
        'description'   => 'Services Five on Homepage',
        'before_widget' => '<div class="widget-homepage-services-five">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-five-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Locations Header
    register_sidebar(array(
        'name'          => ('Homepage Locations Title'),
        'id'            => 'homepage-locations-title',
        'description'   => 'Locations Title on Homepage',
        'before_widget' => '<div class="widget-homepage-locations-title">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-locations-title-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Locations One
    register_sidebar(array(
        'name'          => ('Homepage Locations One'),
        'id'            => 'homepage-locations-one',
        'description'   => 'Locations One on Homepage',
        'before_widget' => '<div class="widget-homepage-locations-one">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-locations-one-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Locations Two
    register_sidebar(array(
        'name'          => ('Homepage Locations Two'),
        'id'            => 'homepage-locations-two',
        'description'   => 'Locations Two on Homepage',
        'before_widget' => '<div class="widget-homepage-locations-two">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-locations-two-widget-title">',
        'after_title'   => '</h3>'
    ));

/*=============================================

  Widget Areas index.php and page-trucks.php

================================================*/

    // Widget Area: Blog Widget A
    register_sidebar(array(
        'name'          => ('Blog Hero Image'),
        'id'            => 'blog-hero-image',
        'description'   => 'Blog Widget Area for Hero Image',
        'before_widget' => '<div class="blog-widget-hero-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="blog-widget-hero-for-index">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Blog Widget A
    register_sidebar(array(
        'name'          => ('Carousel Area 1'),
        'id'            => 'carousel-area-1',
        'description'   => 'Carousel area 1 for blog home',
        'before_widget' => '<div class="carousel-blog1-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="carousel-blog1-widget-blog-home">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Blog Widget A
    register_sidebar(array(
        'name'          => ('Carousel Area 2'),
        'id'            => 'carousel-area-2',
        'description'   => 'Carousel area 2 for blog home',
        'before_widget' => '<div class="carousel-blog2-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="carousel-blog2-widget-blog-home">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Blog Widget A
    register_sidebar(array(
        'name'          => ('Carousel Area 3'),
        'id'            => 'carousel-area-3',
        'description'   => 'Carousel area 3 for blog home',
        'before_widget' => '<div class="carousel-blog3-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="carousel-blog3-widget-blog-home">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Blog Widget A
    register_sidebar(array(
        'name'          => ('Trucks Hero Image'),
        'id'            => 'trucks-hero-image',
        'description'   => 'Trucks Widget Area for Hero',
        'before_widget' => '<div class="trucks-widget-hero-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="trucks-widget-hero-for-index">',
      'after_title'   => '</h3>'
    ));

    // Widget Area: Blog Widget A
    register_sidebar(array(
        'name'          => ('Truck Carousel 1'),
        'id'            => 'truck-carousel-area-1',
        'description'   => 'Truck carousel area 1',
        'before_widget' => '<div class="truck-carousel1-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="truck-carousel1-widget-truck-page">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Blog Widget A
    register_sidebar(array(
        'name'          => ('Truck Carousel 2'),
        'id'            => 'truck-carousel-area-2',
        'description'   => 'Truck carousel area 2',
        'before_widget' => '<div class="truck-carousel2-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="truck-carousel2-widget-truck-page">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Blog Widget A
    register_sidebar(array(
        'name'          => ('Truck Carousel 3'),
        'id'            => 'truck-carousel-area-3',
        'description'   => 'Truck carousel area 3',
        'before_widget' => '<div class="truck-carousel3-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="truck-carousel3-widget-truck-page">',
        'after_title'   => '</h3>'
    ));

/*===================================

  Widget Areas page-contact.php

=====================================*/

    // Widget Area: Contact Us Hero Image
    register_sidebar(array(
        'name'          => ('Contact Us Hero Image'),
        'id'            => 'contact-hero-image',
        'description'   => 'Hero Image for Contact Page',
        'before_widget' => '<div class="widget-contact-hero-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="contact-hero-image-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Location Left Widget
    register_sidebar(array(
        'name'          => ('Left Location Widget'),
        'id'            => 'contact-location-left',
        'description'   => 'Left widget for location section',
        'before_widget' => '<div class="widget-contact-location-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="contact-location-left-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Location Right Widget
    register_sidebar(array(
        'name'          => ('Right Location Widget'),
        'id'            => 'contact-location-right',
        'description'   => 'Right widget for location section',
        'before_widget' => '<div class="widget-contact-location-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="contact-location-right-widget-title">',
        'after_title'   => '</h3>'
    ));

/*===================================

  Widget Areas single.php

=====================================*/

    // Widget Area: Post Hero Image
    register_sidebar(array(
        'name'          => ('Post Hero Image'),
        'id'            => 'post-hero-image',
        'description'   => 'Hero Image for Post Pages',
        'before_widget' => '<div class="widget-post-hero-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="post-image-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Recent Post
    register_sidebar(array(
        'name'          => ('Recent Posts'),
        'id'            => 'recent-posts',
        'description'   => 'Recent Posts Slider Post Pages',
        'before_widget' => '<div class="widget-recent-posts">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="recent-posts-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Post Comments
    register_sidebar(array(
        'name'          => ('Comments'),
        'id'            => 'comments',
        'description'   => 'Comments Widget Post Pages',
        'before_widget' => '<div class="widget-comments">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="comments-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Post sidebar
    register_sidebar(array(
        'name'          => ('Right Sidebar'),
        'id'            => 'right-sidebar',
        'description'   => 'Sidebar Widget Post Pages',
        'before_widget' => '<div class="widget-right-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="right-sidebar-widget-title">',
        'after_title'   => '</h3>'
    ));

/*===================================

  Widget Areas page-about.php

=====================================*/

    // Widget Area: About Hero Image
    register_sidebar(array(
        'name'          => ('About Hero Image'),
        'id'            => 'about-hero-image',
        'description'   => 'Hero Image for About Page',
        'before_widget' => '<div class="widget-about-hero-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="about-hero-image-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Location Left Widget
    register_sidebar(array(
        'name'          => ('Left About Widget'),
        'id'            => 'about-left',
        'description'   => 'Left widget for About Page',
        'before_widget' => '<div class="widget-about-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="about-left-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Location Right Widget
    register_sidebar(array(
        'name'          => ('Right About Widget'),
        'id'            => 'about-right',
        'description'   => 'Right widget for About Page',
        'before_widget' => '<div class="widget-about-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="about-right-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Main About
    register_sidebar(array(
        'name'          => ('Main About Widget'),
        'id'            => 'about-main',
        'description'   => 'Main widget for About Page',
        'before_widget' => '<div class="widget-about-main">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="about-main-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Trucks search
    register_sidebar(array(
        'name'          => ('Trucks Search Left'),
        'id'            => 'trucks-search-left',
        'description'   => 'Trucks Search Left Widget',
        'before_widget' => '<div class="widget-trucks-search-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="trucks-search-left-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Trucks search
    register_sidebar(array(
        'name'          => ('Trucks Search Right'),
        'id'            => 'trucks-search-right',
        'description'   => 'Trucks Search Right Widget',
        'before_widget' => '<div class="widget-trucks-search-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="trucks-search-right-title">',
        'after_title'   => '</h3>'
    ));
    // Widget Area: Trucks search
    register_sidebar(array(
        'name'          => ('Single Truck Sidebar'),
        'id'            => 'single-truck-sidebar',
        'description'   => 'Single Truck  Sidebar Widget',
        'before_widget' => '<div class="widget-single-truck-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="single-truck-sidebar-title">',
        'after_title'   => '</h3>'
    ));
  }

  add_action('widgets_init', 'blank_widgets_init');

  /* ==== Custom Post Types ==== */
function create_post_type(){
  register_post_type('garbage_trucks',
    array(
      'labels'          => array(
        'name'          => ('Garbage Trucks'),
        'singular name' => ('Garbage Truck')
      ),
      'public'                => true,
      'has_archive'           => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => true,
      'show_in_admin_bar'     => true,
      'menu_position'         => 4,
      'can_expost'            => true,
      'menu_icon'             => 'dashicons-art',
      'supports'              => array('title','editor', 'thumbnail'),
    ));
  register_post_type('dump_trucks',
    array(
      'labels'          => array(
        'name'          => ('Dump Trucks'),
        'singular name' => ('Dump Truck')
      ),
      'public'                => true,
      'has_archive'           => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => true,
      'show_in_admin_bar'     => true,
      'menu_position'         => 4,
      'can_expost'            => true,
      'menu_icon'             => 'dashicons-art',
      'supports'              => array('title','editor', 'thumbnail'),
    ));
  register_post_type('grapple_trucks',
    array(
      'labels'          => array(
        'name'          => ('Grapple Trucks'),
        'singular name' => ('Grapple Truck')
      ),
      'public'                => true,
      'has_archive'           => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => true,
      'show_in_admin_bar'     => true,
      'menu_position'         => 4,
      'can_expost'            => true,
      'menu_icon'             => 'dashicons-art',
      'supports'              => array('title','editor', 'thumbnail'),
    ));
  register_post_type('other_trucks',
    array(
      'labels'          => array(
        'name'          => ('Other Trucks'),
        'singular name' => ('Other Truck')
      ),
      'public'                => true,
      'has_archive'           => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => true,
      'show_in_admin_bar'     => true,
      'menu_position'         => 4,
      'can_expost'            => true,
      'menu_icon'             => 'dashicons-art',
      'supports'              => array('title','editor', 'thumbnail'),
    ));
}

add_action('init', 'create_post_type');

?>
