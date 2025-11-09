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
        </div>
    </footer>

</body>
</html>