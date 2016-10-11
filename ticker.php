<?php
/*
Plugin Name: Wordpress event microtimers
Plugin Description: A performance debbuging plugin that measures how long it takes to process a page, between Wordpress actions and outputs them into HTML comments. More hooks here http://codex.wordpress.org/Plugin_API/Action_Reference
*/

$start_time = microtime(true);
$start_tick = 0;

function tick() {
global $start_time;
global $start_tick;
	      $start_tick = $start_tick + 1;
        $tn = microtime(true);
        $tt = $tn-$start_time;
echo '<!-- ACTION__' . $start_tick.'___took:'.$tt.'s___name:__';
}
add_action('muplugins_loaded', function() { tick(); echo 'muplugins_loaded'; echo PHP_EOL . '--> '; });
add_action('registered_taxonomy', function() { tick(); echo 'registered_taxonomy'; echo PHP_EOL . '--> '; });
add_action('registered_post_type', function() { tick(); echo 'registered_post_type'; echo PHP_EOL . '--> '; });
add_action('plugins_loaded', function() { tick(); echo 'plugins_loaded'; echo PHP_EOL . '--> '; });
add_action('sanitize_comment_cookies', function() { tick(); echo 'sanitize_comment_cookies'; echo PHP_EOL . '--> '; });
add_action('setup_theme', function() { tick(); echo 'setup_theme'; echo PHP_EOL . '--> '; });
add_action('load_textdomain', function() { tick(); echo 'load_textdomain'; echo PHP_EOL . '--> '; });
add_action('after_setup_theme', function() { tick(); echo 'after_setup_theme'; echo PHP_EOL . '--> '; });
add_action('load_textdomain', function() { tick(); echo 'load_textdomain'; echo PHP_EOL . '--> '; });
add_action('auth_cookie_valid', function() { tick(); echo 'auth_cookie_valid'; echo PHP_EOL . '--> '; });
add_action('set_current_user', function() { tick(); echo 'set_current_user'; echo PHP_EOL . '--> '; });
add_action('init', function() { tick(); echo 'init'; echo PHP_EOL . '--> '; });
add_action('widgets_init', function() { tick(); echo 'widgets_init'; echo PHP_EOL . '--> '; });
add_action('register_sidebar', function() { tick(); echo 'register_sidebar'; echo PHP_EOL . '--> '; });
add_action('wp_register_sidebar_widget', function() { tick(); echo 'wp_register_sidebar_widget'; echo PHP_EOL . '--> '; });
add_action('wp_default_scripts', function() { tick(); echo 'wp_default_scripts'; echo PHP_EOL . '--> '; });
add_action('wp_default_styles', function() { tick(); echo 'wp_default_styles'; echo PHP_EOL . '--> '; });
add_action('admin_bar_init', function() { tick(); echo 'admin_bar_init'; echo PHP_EOL . '--> '; });
add_action('add_admin_bar_menus', function() { tick(); echo 'add_admin_bar_menus'; echo PHP_EOL . '--> '; });
add_action('wp_loaded', function() { tick(); echo 'wp_loaded'; echo PHP_EOL . '--> '; });
add_action('auth_cookie_valid', function() { tick(); echo 'auth_cookie_valid'; echo PHP_EOL . '--> '; });
add_action('auth_redirect', function() { tick(); echo 'auth_redirect'; echo PHP_EOL . '--> '; });
add_action('_admin_menu', function() { tick(); echo '_admin_menu'; echo PHP_EOL . '--> '; });
add_action('admin_menu', function() { tick(); echo 'admin_menu'; echo PHP_EOL . '--> '; });
add_action('admin_init', function() { tick(); echo 'admin_init'; echo PHP_EOL . '--> '; });
add_action('current_screen', function() { tick(); echo 'current_screen'; echo PHP_EOL . '--> '; });
add_action('send_headers', function() { tick(); echo 'send_headers'; echo PHP_EOL . '--> '; });
add_action('pre_get_posts', function() { tick(); echo 'pre_get_posts'; echo PHP_EOL . '--> '; });
add_action('posts_selection', function() { tick(); echo 'posts_selection'; echo PHP_EOL . '--> '; });
add_action('wp', function() { tick(); echo 'wp'; echo PHP_EOL . '--> '; });
add_action('admin_enqueue_scripts', function() { tick(); echo 'admin_enqueue_scripts'; echo PHP_EOL . '--> '; });
add_action('admin_print_styles', function() { tick(); echo 'admin_print_styles'; echo PHP_EOL . '--> '; });
add_action('admin_print_scripts', function() { tick(); echo 'admin_print_scripts'; echo PHP_EOL . '--> '; });
add_action('wp_print_scripts', function() { tick(); echo 'wp_print_scripts'; echo PHP_EOL . '--> '; });
add_action('admin_head', function() { tick(); echo 'admin_head'; echo PHP_EOL . '--> '; });
add_action('adminmenu', function() { tick(); echo 'adminmenu'; echo PHP_EOL . '--> '; });
add_action('in_admin_header', function() { tick(); echo 'in_admin_header'; echo PHP_EOL . '--> '; });
add_action('admin_notices', function() { tick(); echo 'admin_notices'; echo PHP_EOL . '--> '; });
add_action('restrict_manage_posts', function() { tick(); echo 'restrict_manage_posts'; echo PHP_EOL . '--> '; });
add_action('the_post', function() { tick(); echo 'the_post'; echo PHP_EOL . '--> '; });
add_action('pre_user_query', function() { tick(); echo 'pre_user_query'; echo PHP_EOL . '--> '; });
add_action('in_admin_footer', function() { tick(); echo 'in_admin_footer'; echo PHP_EOL . '--> '; });
add_action('admin_footer', function() { tick(); echo 'admin_footer'; echo PHP_EOL . '--> '; });
add_action('admin_bar_menu', function() { tick(); echo 'admin_bar_menu'; echo PHP_EOL . '--> '; });
add_action('wp_before_admin_bar_render', function() { tick(); echo 'wp_before_admin_bar_render'; echo PHP_EOL . '--> '; });
add_action('wp_after_admin_bar_render', function() { tick(); echo 'wp_after_admin_bar_render'; echo PHP_EOL . '--> '; });
add_action('admin_print_footer_scripts', function() { tick(); echo 'admin_print_footer_scripts'; echo PHP_EOL . '--> '; });
add_action('shutdown', function() { tick(); echo 'shutdown'; echo PHP_EOL . '--> '; });
add_action('wp_dashboard_setup', function() { tick(); echo 'wp_dashboard_setup'; echo PHP_EOL . '--> '; });
tick();


?>