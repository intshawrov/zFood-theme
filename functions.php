<?php


function(){
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'custom-logo' ); 
      add_theme_support( 'menus' );
      add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
      add_theme_support( 'title-tag' );
      add_theme_support('widgets');
      add_theme_support('custom-header');
      add_theme_support('custom-logo');
      add_theme_support('custom-background');
      add_theme_support('woocommerce');
      add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption') );
}