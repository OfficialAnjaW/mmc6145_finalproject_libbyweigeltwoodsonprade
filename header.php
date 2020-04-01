<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?></title>

    <!--  Link CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>

    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,300&family=Oswald:wght@400;700&display=swap" rel="stylesheet">
  </head>

  <body>

    <!-- Header -->
    <header>
      <div class="container">
        <div class="row">

          <!-- Header Image/Linked Logo -->
          <div class="col-lg-3">
            <?php  if(get_header_image() == ''){?>
              <h1><a href="<?php get_home_url();?>"><?php bloginfo('name'); ?></a></h1><?php
            }else{?>
              <a href="<?php echo get_home_url(); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
            <?php } ?>
          </div>

          <!--  Menu/Navigation Bar -->
          <div class="col-lg-5 d-flex align-items-center">
            <nav>
              <?php
                if(has_nav_menu('top-menu')){
                  wp_nav_menu(array('theme_location' => 'top-menu' , 'container_class' => 'top-menu-class'));
                }else{
                  echo "Please select a top menu through the dashboard";
                }
              ?>
            </nav>
          </div>

        </div>
      </div>
    </header>
