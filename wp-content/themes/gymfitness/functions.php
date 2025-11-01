<?php

function gymfitness_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'gymfitness')
    ));
}

add_action('init', 'gymfitness_menus');