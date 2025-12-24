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

      // Bhalo Khabar Widget
     class bhalo_khabar extends WP_Widget {

    function __construct() {
        parent::__construct(
            'bhalo_khabar',
            'Bhalo Khabar Widget',
            array( 'description' => 'This is Bhalo Khabar Widget' )
        );
    }

    function widget( $args, $instance ) {

        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';

        echo $args['before_widget'];

        if ( $title ) {
            echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
        }
        ?>

        <div class="wid-content">
            <?php
            $query = new WP_Query( array(
                'post_type'      => 'latest_food',
                'posts_per_page' => 4,
            ) );

            while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="post">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'food_image', true ) ); ?>">
                    </a>
                    <div class="wrapper">
                        <h3><?php echo esc_html( get_post_meta( get_the_ID(), 'food_name', true ) ); ?></h3>
                        <span>
                            <?php
                            echo esc_html( get_post_meta( get_the_ID(), 'price_from', true ) );
                            echo ' - ';
                            echo esc_html( get_post_meta( get_the_ID(), 'price_to', true ) );
                            ?>
                        </span>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>

        <?php
        echo $args['after_widget'];
    }

    function form( $instance ) {

        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        ?>
        <p>
            <label>Title</label>
            <input
                class="widefat"
                type="text"
                name="<?php echo $this->get_field_name( 'title' ); ?>"
                value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        return $instance;
    }
}


      // Food Gallery Widget

      class food_gallery extends WP_Widget{

            public function __construct(){
                  parent::__construct('food_gallery', 'Food Gallery Widget', array(
                        'description' => 'This is Food Gallery Widget'
                  ) );
            }

            public function widget( $args, $instance ){ ?>
                  
				 <div class="widget wid-gallery">
					<div class="wid-header">
						<h5>Gallery</h5>
					</div>
					<div class="wid-content">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/11.jpg"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/10.jpg"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/9.jpg"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/8.jpg"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/7.jpg"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/6.jpg"></a>
					</div>
				</div> 



                  <?php

            }

            public function form ($two) {
                 $title = $two['title'];
                  ?>

                  <p>
                  <label for="">Title</label>
                  <input name="<?php echo $this-> get_field_name('title'); ?>" value="" type="text">
                  </p>

                  <p>
                        <label for="">Massage</label>
                        <textarea name=" " id="" class="widefat" ></textarea>
                  </p>

        
                  <?php

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
      ));


      register_widget('bhalo_khabar');
      register_widget('food_gallery');


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


function fatema_ritu(){ ?>


<div class="chef">
					<div class="row">
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img src="<?php echo get_template_directory_uri(); ?>/images/chef-1.jpg" />
									</a>
								</div>
								<h3>Chef's Name</h3>
								<ul class="social t-center">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img src="<?php echo get_template_directory_uri(); ?>/images/chef-2.jpg" />
									</a>
								</div>
								<h3>Chef's Name</h3>
								<ul class="social t-center">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img src="<?php echo get_template_directory_uri(); ?>/images/chef-3.jpg" />
									</a>
								</div>
								<h3>Chef's Name</h3>
								<ul class="social t-center">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img src="<?php echo get_template_directory_uri(); ?>/images/chef-4.jpg" />
									</a>
								</div>
								<h3>Chef's Name</h3>
								<ul class="social t-center">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>



<?php
    
}

add_shortcode('urmi', 'fatema_ritu');

