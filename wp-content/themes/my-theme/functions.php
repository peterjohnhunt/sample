<?php

//≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
// ✅ Helper Functions
//≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
/**
 * Simple log helper
 */
function _log($thing) {
    error_log(print_r($thing, true));
}


/**
 * From currently active theme, get the version number
 */
function get_theme_version(){
    $theme = wp_get_theme();
    return $theme->version;
}


//≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
// ✅ Load Styles
//≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
/**
 * Load theme stylesheets
 */
function load_styles($hook) {
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), [], get_theme_version() );
}
add_action('wp_enqueue_scripts', 'load_styles');


//≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
// ✅ Load Scripts
//≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
/**
 * Load theme scripts
 */
function load_scripts($hook) {
    wp_enqueue_script( 'theme-javascript', get_template_directory_uri() . '/main.js', ['jquery'], get_theme_version(), true );

    wp_localize_script( 'theme-javascript', 'AJAX', [
        'URL' => admin_url('admin-ajax.php')
    ]);
}
add_action('wp_enqueue_scripts', 'load_scripts');


//≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
// ✅ AJAX Handlers
//≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
/**
 * Handle my-action
 */
function handle_my_action() {
    $email = $_POST['email'];

    if ( !$email ) wp_send_json_error();

    wp_send_json_success($email);
}
add_action( 'wp_ajax_my-action', 'handle_my_action' );
add_action( 'wp_ajax_nopriv_my-action', 'handle_my_action' );