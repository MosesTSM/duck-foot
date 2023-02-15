<?php 

// ----------------------------------------------------------------------------------------
// Remove extra junk
// ----------------------------------------------------------------------------------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
//remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
//remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

function post_remove () { 
    //remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'edit.php' );                   //Posts
    //remove_menu_page( 'upload.php' );                 //Media
    //remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page( 'edit-comments.php' );          //Comments
    //remove_menu_page( 'themes.php' );                 //Appearance
    //remove_menu_page( 'plugins.php' );                //Plugins
    //remove_menu_page( 'users.php' );                  //Users
    //remove_menu_page( 'tools.php' );                  //Tools
    //remove_menu_page( 'options-general.php' );        //Settings
}
add_action('admin_menu', 'post_remove');   //adding action for triggering function call
add_filter('show_admin_bar', '__return_false');


function remove_comments_rss( $for_comments ) {
   return;
}
add_filter('post_comments_feed_link','remove_comments_rss');

function remove_recent_comments_style() {
   global $wp_widget_factory;
   remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );


// ----------------------------------------------------------------------------------------
// Stop WordPress from scaling large images
// ----------------------------------------------------------------------------------------
add_filter( 'big_image_size_threshold', '__return_false' );


// ----------------------------------------------------------------------------------------
// Login page logo
// ----------------------------------------------------------------------------------------
function custom_loginlogo() {
    echo '<style type="text/css">
        body.login {background: #FFDD4F;}
        body.login div#login h1 a {
            background-image: url('.get_bloginfo("template_directory").'/images/login.png) !important;
            background-size: contain;
            width: 216px;
            height: 143px;
        }
        body.login #loginform {
            background: none;
            border: 2px solid #000000;
            border-radius: 4px;
        }
        body.login form .input {
            outline: none;
            background: #ffffff;
            border: 2px solid #ffffff;
        }
        body.login form .input:focus {
            border-color: #000000;
            box-shadow: none;
        }
        body.login .button-primary {
            border: 2px solid #000000;
            outline: none;
            background: #000000;
        }
        body.login .button-primary:hover {
            border: 2px solid #000000;
            background: #434343;
        }
    </style>';
}
add_action('login_head', 'custom_loginlogo');


// ----------------------------------------------------------------------------------------
// Add Navigation // Add Feature Image option to posts
// ----------------------------------------------------------------------------------------
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


// ----------------------------------------------------------------------------------------
// Custom Image sizes
// ----------------------------------------------------------------------------------------
add_image_size( 'open-graph', 1200, 630, true );
add_image_size( 'twitter', 300, 157, true );


// ----------------------------------------------------------------------------------------
// Register Menus
// ----------------------------------------------------------------------------------------
function register_theme_menus() {
	register_nav_menus(
		array(
			'left-nav' 	=> __( 'Left Nav' ),
            'right-nav'  => __( 'Right Nav' ),
            'footer-nav'  => __( 'Footer Nav' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );


// ----------------------------------------------------------------------------------------
// Advanced Custom Fields - add options page
// ----------------------------------------------------------------------------------------
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Business Info',
        'menu_title'    => 'Business Info',
        'menu_slug'     => 'business-info',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Testimonies',
        'menu_title'    => 'Testimonies',
        'menu_slug'     => 'testimonies',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}


// ----------------------------------------------------------------------------------------
// CSS
// ----------------------------------------------------------------------------------------
function duck_theme_styles() {
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/screen.css' );
}
add_action( 'wp_enqueue_scripts', 'duck_theme_styles' );


// ----------------------------------------------------------------------------------------
// JS
// ----------------------------------------------------------------------------------------
function duck_theme_js() {
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'cookie_js', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'), '', true );
	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bxslider_js', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'scripts_js', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'foundation_js'), '', true );

    if( is_front_page() ) {
        //wp_enqueue_script( 'models_js', 'https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js', array('jquery'), '', true );
        wp_enqueue_script( 'models_js', get_template_directory_uri() . '/js/model-viewer.min.js', array('jquery'), '', true );
    }
    
}
add_action( 'wp_enqueue_scripts', 'duck_theme_js' );



?>
