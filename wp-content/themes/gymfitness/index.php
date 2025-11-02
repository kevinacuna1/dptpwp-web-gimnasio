<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
</head>

<header class="header">
    <div class="contenedor barra-navegacion">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logotipo Gym Fitness">
        </div>

        <!-- Navegacion -->
        <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-principal',
            'container' => 'nav',
            'container_class' => '',
            'menu_class' => '',
        ));
        ?>
    </div>
</header>

<body>
    <main>
        <?php
        while (have_posts()) : the_post();
            the_title();
            the_content();
        endwhile;
        ?>
    </main>
</body>

</html>