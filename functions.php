<?php

/**
 * Munch & Move functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Munch_&_Move
 */

if (!function_exists('munch_move_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function munch_move_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Munch & Move, use a find and replace
         * to change 'munch-move' to the name of your theme in all the template files.
         */
        load_theme_textdomain(
            'munch-move',
            get_template_directory() . '/languages'
        );

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        // Register all Custom Menus
        register_nav_menus(array(
            'menu-desktop' => esc_html__('Desktop', 'munch-move'),
            'menu-mobile' => esc_html__('Mobile', 'munch-move'),
            'menu-footer' => esc_html__('Footer', 'munch-move')
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters('munch_move_custom_background_args', array(
                'default-color' => 'ffffff',
                'default-image' => ''
            ))
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true
        ));

        /**
         * Enable Yoast SEO Breadcrumbs
         *
         * @link https://yoast.com/help/add-theme-support-for-yoast-seo-breadcrumbs/
         */
        add_theme_support('yoast-seo-breadcrumbs');
    }
endif;
add_action('after_setup_theme', 'munch_move_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function munch_move_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'munch-move'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'munch-move'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'munch_move_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function munch_move_scripts()
{
    wp_enqueue_style('munch-move-style', get_stylesheet_uri());

    wp_enqueue_script(
        'munch-move-utility-bar',
        get_template_directory_uri() . '/js/mm-utility-bar.js',
        array(),
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'munch-move',
        get_template_directory_uri() . '/js/munch-move.js',
        array('jquery'),
        '1.0.0',
        true
    );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'munch_move_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * ACF Functions
 */

// Options Page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
    acf_add_options_sub_page('404 Page');
    acf_add_options_sub_page('Related Links');
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length($length)
{
    return 40;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

/**
 *  Hide these three pages from search:
 *  1. staff-development-kit
 *  2. staff-development-kit-educator
 *  3. resource-manual
 */
function wpb_search_filter($query)
{
    if ($query->is_search)
        $query->set('post__not_in', array(1769, 1766, 1771));
    return $query;
}
add_filter('pre_get_posts', 'wpb_search_filter');
