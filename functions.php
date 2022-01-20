<?php

/* Add title support */
function velo_theme_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'velo_theme_support');

/* Register Navbar Settings */
function velo_menus() {
    $locations = array(
        'primary' => "Main Navbar"
    );

    register_nav_menus($locations);
}

add_action('init', 'velo_menus');


/* Enqueue Style Files */
function velo_register_styles(){
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('velo-style', get_template_directory_uri() . "/style.css", array('velo-bootstrap'), $version, 'all');
    wp_enqueue_style('velo-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), '5.0.2', 'all');
    wp_enqueue_style('velo-fontawesome', "https://pro.fontawesome.com/releases/v5.10.0/css/all.css", array(), '5.10.0', 'all');
    wp_enqueue_style('googlefont-poppins', "https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap", array(), '1.0', 'all');
    wp_enqueue_style('googlefont-oswald', "https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap", array(), '1.0', 'all');
    wp_enqueue_style('googlefont-megrim', "https://fonts.googleapis.com/css?family=Megrim", array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'velo_register_styles');

function velo_register_scripts(){
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('velo-script', get_template_directory_uri() . "/js/js.js", array('velo-jquery'), $version, 'all');
    wp_enqueue_script('velo-bootstrap-script', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), '5.0.2', 'all');
    wp_enqueue_script('velo-jquery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), '3.6.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'velo_register_scripts');

/* Add aditional css class to html (Navbar active class)*/
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
        return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


/* Include Customizer.php settings file */
require_once get_template_directory() . '/inc/customizer.php';
 

/* Include TGM Plugin Activation required file */
require_once get_template_directory() . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'velo_register_required_plugins' );


/* Add required plugins for theme */
function velo_register_required_plugins() {

    $plugins = array(

        array(
            'name' => 'Advanced Custom Fields', // The plugin name.
            'slug' => 'advanced-custom-fields', // The plugin slug (typically the folder name).
            'required'  => true,
        ),

        array(
            'name' => 'Contact Form 7', // The plugin name.
            'slug' => 'contact-form-7', // The plugin slug (typically the folder name).
            'required'  => true,
        ),

        array(
            'name' => 'One Click Demo Import', // The plugin name.
            'slug' => 'one-click-demo-import', // The plugin slug (typically the folder name).
            'required'  => true,
        ),

    );

    $config = array(
        'id'           => 'velo',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

    );

    tgmpa( $plugins, $config );
}

/* One Click Demo Import Plugin Settings */
function ocdi_import_files() {
    return [
      [
        'import_file_name'           => 'Velo Portfolio',
        'categories'                 => [ 'Portfolio' ],
        'import_customizer_file_url' => 'https://www.ciucacristi.tk/velo/demo/velo-customizer.dat',
        'import_file_url'            => 'https://www.ciucacristi.tk/velo/demo/velo.xml',
        'import_redux'               => [
          
        ],
        'import_preview_image_url'   => 'https://www.ciucacristi.tk/velo/demo/screenshot.jpg',
        'preview_url'                => 'https://www.ciucacristi.tk/velo',
      ]
    ];
  }
  add_filter( 'ocdi/import_files', 'ocdi_import_files' );
  
  /* Custom Post Types */
  function cptui_register_my_cpts() {

    /**
     * Post Type: Services.
     */

    $labels = [
        "name" => __( "Services", "custom-post-type-ui" ),
        "singular_name" => __( "Service", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => __( "Services", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "services", "with_front" => true ],
        "query_var" => true,
        "menu_icon" => "dashicons-hammer",
        "supports" => [ "title", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "services", $args );

    /**
     * Post Type: Projects.
    */

    $labels = [
        "name" => __( "Projects", "custom-post-type-ui" ),
        "singular_name" => __( "Project", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => __( "Projects", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "projects", "with_front" => true ],
        "query_var" => true,
        "menu_icon" => "dashicons-portfolio",
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "projects", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

/* Enable Featured Image for Blog Posts  */
function velo_post_thumbnails() {

    add_theme_support( 'post-thumbnails' );
    
    }
    
    add_action( 'after_setup_theme', 'velo_post_thumbnails' );
    
?>