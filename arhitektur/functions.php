<?php
// Ensure WordPress recognizes the theme
function mytheme_setup() {
    add_theme_support('title-tag'); // Enables dynamic <title> tag
    add_theme_support('post-thumbnails'); // Enables featured images
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption')); // HTML5 support
}
add_action('after_setup_theme', 'mytheme_setup');

// Enqueue Styles and Scripts
function mytheme_enqueue_scripts() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri()); // Loads style.css
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

// Ensure get_header(), get_footer(), and loop function correctly
function mytheme_content_support() {
    if (!function_exists('have_posts') || !function_exists('get_header') || !function_exists('get_footer')) {
        die('Error: WordPress core functions missing.');
    }
}
add_action('init', 'mytheme_content_support');
?>