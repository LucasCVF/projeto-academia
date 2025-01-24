<?php
wp_enqueue_script(
    'bootstrap-js', get_template_directory_uri().'/assets/added/bootstrap/js/bootstrap.bundle.min.js',
    ['jquery'],
    '5.3.3',
    true
);

wp_enqueue_script(
    'jquery', get_template_directory_uri().'/assets/added/jquery/jquery.js',
    [],
    '3.7.1',
    true
);

