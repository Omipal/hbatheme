<?php
// add title support
add_theme_support('title-tag');

// add css and js


function mb_scripts(){
 // css
 wp_enqueue_style('mb-bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', array(), '1.0'); 

 wp_enqueue_style('mb-styles', get_theme_file_uri('/css/styles.css'), array('mb-bootstrap-icons'), '1.0'); 

 //js
 wp_enqueue_script('mb-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), '1.0', true );
 wp_enqueue_script( 'mb-scripts', get_theme_file_uri('/js/scripts.js'), array('mb-bootstrap'), '1.0', true );

 
}
add_action('wp_enqueue_scripts', 'mb_scripts');

// resgister menu
function menu_register(){
    register_nav_menus( 
        array(
        'main_menu' => __('Main Menu'),
        'footer_menu' => __('Footer Menu')
    ) );
}
add_action( 'init', 'menu_register' );

// add li class
function add_additional_class_on_li($classes, $item, $args){
    if(isset($args->add_li_class)){
        $classes[] = $args->add_li_class;
    }
    return $classes;
};
add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// add a class

function add_additional_class_on_a( $classes, $item, $args){
    if(isset($args->add_a_class)){
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

// add span class
function add_additional_class_on_span( $classes, $item, $args){
    if(isset($args->add_span_class)){
        $classes['class'] = $args->add_span_class;
    }
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_additional_class_on_span', 1, 3);

// visual composer elements
require_once(dirname(__FILE__).'/inc/vc-elements.php' );



