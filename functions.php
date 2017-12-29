<?php
@ini_set( 'upload_max_size' , '50M' );
@ini_set( 'post_max_size', '50M');
@ini_set( 'max_execution_time', '300' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'recursos-menu' => __( 'Menu de Recursos' ),
      'soporte-menu' => __( 'Menu de Soporte' ),
      'inve-menu' => __( 'Menu de inverspot.mx' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function wpb_adding_scripts() {

wp_register_script('collapse-menu', get_template_directory_uri().'/menu.js', array('jquery'), '1', true);

wp_enqueue_script('collapse-menu');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

add_filter( 'nav_menu_css_class', 'wpse_217882_menu_class', 10, 2 );
function wpse_217882_menu_class( $classes = array(), $item = false ) {

    // Get current URL
    $current_url = wpse_217882_current_url();

    // Get homepage URL
    $homepage_url = trailingslashit( get_bloginfo( 'http://alchimia.mx/' ) );

    // Don't do anything on 404s or the homepage
    if( is_404() || $item->url == $homepage_url || $item->url == '/' )
        return $classes;

    // Check if the current URL contains the items URL
    // This should match paginated pages for example
    if ( strstr( $current_url, $item->url ) ) {
        // Add the '.current-menu-item' class
        $classes[] = 'current-menu-item';
    }

    // You can use this to match different URLs
    // This will add the .current-menu-item class to the /blog/ nav item
    // when viewing /category/ pages
    if ( strstr( $item->url, '/blog/' ) && strstr( $current_url, '/category/' ) ) {
        // Add the '.current-menu-item' class
        $classes[] = 'current-menu-item';
    }

    return $classes;
}

function wpse_217882_current_url() {

    // Protocol
    $url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ) ? 'https://' : 'http://';
    // Server
    $url .= $_SERVER['SERVER_NAME'];
    // Port
    $url .= ( '80' == $_SERVER['SERVER_PORT'] ) ? '' : ':' . $_SERVER['SERVER_PORT'];
    // URI
    $url .= $_SERVER['REQUEST_URI'];

    return trailingslashit( $url );
}

 ?>
