<?php
// Enqueue parent and child styles
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});

// Add LearnPress support
add_theme_support('learnpress');
