<?php

add_action( 'wp_enqueue_scripts', 'theme_media' );
function theme_media() {
wp_enqueue_style( 'main-css', get_template_directory_uri() . '/static/css/main.min.css"' );

wp_enqueue_script( 'thm-js', get_template_directory_uri() . '/static/js/main.min.js', array(), '1.0.0', true );



}

add_action( 'wp_enqueue_scripts', 'remove_some_stylesheet', 20 );


add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


function remove_some_stylesheet() {
  wp_dequeue_style('flexslider');
  wp_dequeue_style('owl-carousel');
  wp_dequeue_style('owl-theme');
  wp_dequeue_style('font-awesome');
  wp_dequeue_style('wp-pagenavi');

  wp_deregister_script('flexslider');
  wp_deregister_script('googlemapapis');
  wp_deregister_script('easing');
  wp_deregister_script('jflickrfeed');
  wp_deregister_script('playlist');
  wp_deregister_script('jplayer');
}

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

add_filter('show_admin_bar', '__return_false');

add_theme_support( 'post-thumbnails' ); // для всех типов постов





add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
  register_nav_menu( 'primary', 'Principal Menu' );

}

function my_myme_types($mime_types){
  $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
  return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);


if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Опции',
    'menu_title'  => 'Опции сайта',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

}



add_action( 'init', 'true_register_client' ); // Использовать функцию только внутри хука init

function true_register_client() {
  $labels = array(
    'name' => 'Клиент',
    'singular_name' => 'Клиент', // админ панель Добавить->Функцию
    'add_new' => 'Добавить клиента',
    'add_new_item' => 'Добавить нового клиента', // заголовок тега <title>
    'edit_item' => 'Редактировать клиента',
    'new_item' => 'Новый клиент',
    'all_items' => 'Все клиенты',
    'view_item' => 'Посмотреть клиенты на сайте',
    'search_items' => 'Искать клиента',
    'not_found' =>  'Клиентов не найдено.',
    'not_found_in_trash' => 'В корзине нету клиентов.',
    'menu_name' => 'Клиенты' // ссылка в меню в админке
  );
  $args = array(
    'labels' => $labels,
    'public' => true, // благодаря этому некоторые параметры можно пропустить
    'menu_icon' => 'dashicons-admin-users', // иконка корзины
    'menu_position' => 5,
    'has_archive' => true,
    'has_archive' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
  );
  register_post_type('client',$args);

}
