<?php

function gymfitness_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'gymfitness')
    ));
}

add_action('init', 'gymfitness_menus');

function gymfitness_scripts_styles()
{
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('raleway', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
    wp_enqueue_style('staatliches', 'https://fonts.googleapis.com/css2?family=Staatliches&display=swap', array(), null);
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'raleway', 'staatliches'), '1.0.0');
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');