<?php

wp_enqueue_style(
    'bootstrap', get_template_directory_uri().'/assets/added/bootstrap/css/bootstrap.min.css',
    [],
    '5.3.3',
    'all'
);

wp_enqueue_style(
    'style', get_template_directory_uri().'/assets/css/header.css',
    [],
    '1.0.0',
    'all'
);

wp_enqueue_style(
    'all-style', get_template_directory_uri().'/assets/css/all.css',
    [],
    '1.0.0',
    'all'
);

wp_enqueue_style(
    'home-style', get_template_directory_uri().'/assets/css/home-page.css',
    [],
    '1.0.0',
    'all'
);




