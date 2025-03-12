function register_my_menus() {
    register_nav_menus(
        array(
            'menu-principal' => __( 'Menu Principal' ),
            'menu-secundario' => __( 'Menu Secundário' ),
        )
    );
}
add_action( 'after_setup_theme', 'register_my_menus' );
