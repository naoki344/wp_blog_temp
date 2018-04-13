<?php
function theme_scripts() {
    theme_styles();

    wp_enqueue_script( 'jquery-org', get_template_directory_uri() . '/js/jquery.min.js','','1.0.0',false);
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery-org'),'1.0.0',false);
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js',array('jquery-org'),'1.0.0',false);
		wp_enqueue_script( 'isotope.pkgd', get_template_directory_uri() . '/js/isotope.pkgd.min.js',array('jquery-org'),'1.0.0',false);
    wp_enqueue_script( 'jquery.backstretch', get_template_directory_uri() . '/js/jquery.backstretch.min.js',array('jquery-org'),'1.0.0',false);
    wp_enqueue_script( 'jquery.appear', get_template_directory_uri() . '/js/jquery.appear.js',array('jquery-org'),'1.0.0',false);
    wp_enqueue_script( 'template', get_template_directory_uri() . '/js/template.js',array('jquery-org'),'1.0.0',false);
}
function theme_styles() {
    // WordPress Dash Icon.
    //wp_enqueue_style( 'dashicons' );
    // Theme stylesheet. ./style.css
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style( 'animations', get_template_directory_uri() . '/css/animations.css');
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_style( 'card_gridcard_grid', get_template_directory_uri() . '/css/card_grid.css');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );



