<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'redux_opt';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'BT Options', 'your-textdomain-here' ),
        'customizer'           => true,
        'dev_mode'             => false,
    );

    Redux::set_args( $opt_name, $args );

//     Redux::set_section( 
//         $opt_name, 
//         array(
//             'title'  => esc_html__( 'Basic Field', 'your-textdomain-here' ),
//             'id'     => 'basic',
//             'desc'   => esc_html__( 'Basic field with no subsections.', 'your-textdomain-here' ),
//             'icon'   => 'el el-home',
//             'fields' => array(
                
//                     array(
//                         'id'        => 'demo-one',
//                         'type'      => 'color',
//                         'title'     => 'Header BG'
//                     )
//             )
//         ) 
//     );

    Redux::set_section(
      $opt_name,
      array(
            'id'        => 'header_section',
            'title'     => 'Header',
            'desc'      => 'Header Options',
            'icon'      => 'el el-home',
            'fields'    => array(
                  array(
                        'id'        => 'header_bg',
                        'title'      => 'Header BG',
                        'type'      => 'background',
                  ),
            )
      )
);

      Redux::set_section(
            $opt_name,
            array(
                  'id'        => 'header_top',
                  'title'     => 'Header Top',
                  'subsection'=> true,
                  'fields'    => array(
                        array(
                              'id'        => 'fb_link',
                              'title'     => 'FB Link',
                              'type'      => 'text',
                        )
                  )
            )
);

 


//Footer
      Redux::set_section(
            $opt_name,
            array(
                  'id'        => 'footer',
                  'title'     => 'Footer',
                  'fields'    => array(
                        array(
                              'id'        => 'copyright',
                              'title'     => 'Copyright Text',
                              'type'      => 'editor',
                        )
                  )
            )
);

      Redux::set_section(
            $opt_name,
            array(
                  'id'        => 'footer-middle',
                  'title'     => 'Footer Middle',
                  'subsection'=> true,
                  'fields'    => array(
                        array(
                              'id'        => 'rightcopy',
                              'title'     => 'Copyright Text',
                              'type'      => 'editor',
                        )
                  )
            )
);

Redux::set_section(
            $opt_name,
            array(
                  'id'        => 'footer_first',
                  'title'     => 'Footer First',
                  'subsection'=> true,
                  'fields'    => array(
                        array(
                              'id'        => 'github_link',
                              'title'     => 'Github Link',
                              'type'      => 'text',
                        )
                  )
            )
);
      Redux::set_section(
            $opt_name,
            array(
                  'id'        => 'footer_right',
                  'title'     => 'Footer Right',
                  'subsection'=> true,
                  'fields'    => array(
                        array(
                              'id'        => 'twitter_link',
                              'title'     => 'Twitter Link',
                              'type'      => 'text',
                        )
                  )
            )
);

    
Redux::set_section(
            $opt_name,
            array(
                  'id'        => 'footer_last',
                  'title'     => 'Footer Last',
                  'subsection'=> true,
                  'fields'    => array(
                        array(
                              'id'        => 'linkedin_link',
                              'title'     => 'LinkedIn Link',
                              'type'      => 'text',
                        )
                  )
            )
);

