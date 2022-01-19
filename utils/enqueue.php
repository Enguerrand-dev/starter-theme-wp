<?php

function ev_scripts_styles()
{

    wp_enqueue_script('jquery'); // just enqueue as its already registered 
    /* 
    -------
    REGISTER ALL JS FOR SITE
    @ALL PARAMS AVAIABLE ON : https://developer.wordpress.org/reference/functions/wp_register_script/   
    -------
    */
    wp_register_script('app', get_stylesheet_directory_uri() . '/public/js/app.js', '', '', true);

    /* 
    -------
    REGISTER ALL CSS FOR SITE
    @ALL PARAMS AVAIABLE ON : https://developer.wordpress.org/reference/functions/wp_register_style/   
    -------
    */
    wp_register_style('app', get_stylesheet_directory_uri() . '/public/css/app.css');

    /* ENQUEUE JS LIB */
    //wp_enqueue_script('app');

    // ENQUEUE JS CUSTOM
    wp_enqueue_script('app');

    /* ENQUEUE STYLE LIB */
    //wp_enqueue_style('prod');

    /* ENQUEUE STYLE CUSTOM */
    wp_enqueue_style('app');
}
add_action('wp_enqueue_scripts', 'ev_scripts_styles');
