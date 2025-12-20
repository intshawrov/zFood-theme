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

      //Register Menus

      register_nav_menus(array(
            'main-menu' => 'Main Menu',
      ));

      register_post_type('latest_food', array(
            'labels' => array(
                  'name' => 'Latest Food',
                  'singular_name' => 'Latest Food',
                  'add_new' => 'Add Food',
                  'add_new_item' => 'Add New Food Item',
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('' , '' , ''),
            'menu_icon' => get_template_directory_uri() . '/images/b.png',
      ) );

      
}

add_action('after_setup_theme', 'zFood_setup');


      class bhalo_khabar extends WP_Widget{

            function __construct(){
                  parent::__construct('bhalo_khabar', 'Bhalo Khabar Widget', array(
                        'description' => 'This is Bhalo Khabar Widget'
                  ) );
            }

            function widget( $one , $two){?>
                 
                  <?php echo $one['before_widget']; ?>


					 <?php echo $one['before_title']; ?>Latest Posts <?php echo $one['after_title']; ?>
					</div>
					<div class="wid-content">
						<div class="post">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/15.jpg"/></a>
							<div class="wrapper">
							  <h5><a href="#">Lorem ipsum dolor</a></h5>
							   <span>$25 - $26</span>
							</div>
						</div>
						<div class="post">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/14.jpg"/></a>
							<div class="wrapper">
							  <h5><a href="#">Lorem ipsum dolor</a></h5>
							  <span>$25 - $26</span>
							</div>
						</div>
						
					</div>



				<?php echo $one['after_widget']; ?>
                  <?php
            }

            function form( $instance){

            }
      }

function zFood_sidebar(){

     

      register_sidebar(array(
            'name'            => 'Right Sidebar',
            'description'     => 'Right Sidebar Element',
            'id'              => 'right-sidebar',
            'before_widget'  => '<div class="widget"><div class="wid-header">',
            'after_widget'   => '</div></div>',
            'beofre_title'    => '<div class="wid-header"><h5>',
            'after_title'     => '</div></h5>',
            

      ));
       register_sidebar(array(
            'name'            => 'Footer Sidebar',
            'description'     => 'Footer Sidebar Element',
            'id'              => 'footer-sidebar',
            'before_widget'   => ''
            
      ));


      register_widget('bhalo_khabar');


}

add_action('widgets_init' , 'zFood_sidebar');


add_action('after_setup_theme', function () {

      $redux_core = get_template_directory() . "/inc/opt/ReduxCore/framework.php";
      $redux_cfg  = get_template_directory() . "/inc/opt/sample/config.php";

      if ( file_exists($redux_core) ) require_once $redux_core;
      if ( file_exists($redux_cfg) )  require_once $redux_cfg;

      include_once get_template_directory() . "/inc/cmb/init.php";
      include_once get_template_directory() . "/inc/cmb/config.php";

});

