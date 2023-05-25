<?php

function tailwindcss_styles() {
    wp_enqueue_style('tailwind_output', get_template_directory_uri() . '/dist/output.css',  array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'tailwindcss_styles');

