<?php

function gymfitness_setup() {
    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');
    // Soporte para títulos dinámicos
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'gymfitness_setup');

// Registrar Menús
function gymfitness_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'gymfitness')
    ));
}

// Hook para los menús
add_action('init', 'gymfitness_menus');

// Agregar Scripts y Styles
function gymfitness_scripts_styles()
{
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('raleway', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
    wp_enqueue_style('staatliches', 'https://fonts.googleapis.com/css2?family=Staatliches&display=swap', array(), null);
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'raleway', 'staatliches'), '1.0.0');
}

// Hook para los scripts y styles
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');