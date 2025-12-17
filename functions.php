<?php


function zFood_setup(){
      // Enable Frature Image
      add_theme_support( 'post-thumbnails' );

      // Enable Custom Logo
      add_theme_support( 'custom-logo' );
      
      // Add Custom Menu Support
      add_theme_support( 'menus' );

      // Add Post Formats
      add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

      // Add Title-tag
      add_theme_support( 'title-tag' );

      // Add Widget Support
      add_theme_support('widgets');

      // Add Custom Header
      add_theme_support('custom-header');

      // Add Custom Logo
      add_theme_support('custom-logo');

      // Add Custom Background
      add_theme_support('custom-background');

      // Add Woocommerce
      add_theme_support('woocommerce');

      // Add HTML5
      add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption') );
}

add_action('after_setup_theme', 'zFood_setup');