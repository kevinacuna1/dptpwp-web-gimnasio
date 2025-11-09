<?php

while (have_posts()) : the_post();
    // Mostrar título y contenido de la página
    the_title('<h1 class="text-center text-primary">', '</h1>');

    // Mostrar imagen destacada si existe
    if (has_post_thumbnail()) {
        the_post_thumbnail('full', array('class' => 'imagen-destacada'));
    }

    // Mostrar contenido de la página
    the_content();
endwhile;
