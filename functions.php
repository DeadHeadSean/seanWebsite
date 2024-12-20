<?php
function twentytwentyfive_child_enqueue_styles() {
    $parent_style = 'twentytwentyfive-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('twentytwentyfive-child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Assistant:wght@400;600;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_styles');