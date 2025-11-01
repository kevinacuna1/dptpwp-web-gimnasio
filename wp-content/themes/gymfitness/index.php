<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
</head>

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