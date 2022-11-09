<?php

function mfs_joker_files() {
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,500;0,700;1,400&display=swap');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
    wp_enqueue_style('main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'mfs_joker_files');


function mfs_joker_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mfs_joker_features');