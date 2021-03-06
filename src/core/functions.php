<?php
include_once 'function/script_style.php';
include_once 'function/menu.php';
include_once 'function/options_theme.php';

// Disable admin bar
add_filter('show_admin_bar', '__return_false');

function register_acf_options_pages() {

    // Check function exists.
    if( !function_exists('acf_add_options_page') )
        return;

    // register options page.
    $option_page = acf_add_options_page(array(
        'page_title'    => __('Настройки сайта'),
        'menu_title'    => __('Настройки сайта'),
        'menu_slug'     => 'site-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Шапка и подвал сайта',
        'menu_title'	=> 'Шапка и подвал',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'header_footer',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Главный экран',
        'menu_title'	=> 'Главный экран',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'main_page',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Проект в Сколково',
        'menu_title'	=> 'Проект в Сколково',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'scolkovo',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Направления деятельности',
        'menu_title'	=> 'Направления деятельности',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'about',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Преимущества',
        'menu_title'	=> 'Преимущества',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'advantages',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Estate',
        'menu_title'	=> 'Estate',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'estate',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Garnizon',
        'menu_title'	=> 'Garnizon',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'garnizon',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Resultat',
        'menu_title'	=> 'Resultat',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'resultat',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Продукты',
        'menu_title'	=> 'Продукты',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'products',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Платформа Infotech',
        'menu_title'	=> 'Платформа Infotech',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'platform',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Intellect',
        'menu_title'	=> 'Intellect',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'intellect',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Reference',
        'menu_title'	=> 'Reference',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => 'reference',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> '4sides',
        'menu_title'	=> '4sides',
        'parent_slug'	=> 'site-settings',
        'menu_slug'     => '4sides',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));


}

// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');
add_theme_support( 'post-thumbnails', array( 'new' , 'publications' ) );