<?php
function cluster_theme_all_files(){
    
    // Registering jQuery from WordPress
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-masonry');
    
    // Registering Styles
    
    wp_enqueue_style( 'cluster-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'cluster-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style( 'cluster-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style( 'cluster-font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style( 'cluster-main-css', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'cluster-responsive', get_template_directory_uri() . '/css/responsive.css');
    
    // Registering Scripts
    
    wp_enqueue_script( 'cluster-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'cluster-parallax', get_template_directory_uri() . '/js/jquery.parallax.js', array(), '1.0.0', true );
    wp_enqueue_script( 'cluster-smooth-scroll', get_template_directory_uri() . '/js/smoothscroll.js', array(), '1.0.0', true );
    wp_enqueue_script( 'cluster-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '1.0.0', true );
    wp_enqueue_script( 'cluster-owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'cluster-waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'cluster-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'cluster-isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'cluster-maginfic-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'cluster-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
    
}
add_action('wp_enqueue_scripts', 'cluster_theme_all_files');