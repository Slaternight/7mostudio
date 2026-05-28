<?php

/**
 * Child Theme
 * 
 * @author Case-Themes
 * @since 1.0.0
 */
 
function proactive_child_enqueue_styles(){
    $parent_style = 'pxl-style'; 
    wp_enqueue_style('pxl-style-child', get_stylesheet_directory_uri() . '/style.css', array(
        $parent_style
    ));
}
add_action( 'wp_enqueue_scripts', 'proactive_child_enqueue_styles', 99);

