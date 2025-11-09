    <footer class="footer contenedor">
        <hr>

        <div class="contenido-footer">
            <!-- Navegacion -->
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'menu-principal',
                'menu_class' => 'menu',
            ));
            ?>

            <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') . ' ' . date('Y'); ?> </p>
        </div>
    </footer>

</body>
</html>