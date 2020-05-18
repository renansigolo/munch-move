<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Munch_&_Move
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" href="https://use.typekit.net/wws1hcf.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header id="masthead" class="site-header">

            <div class="page-header">

                <div class="page-header__container">

                    <img src="<?php echo get_template_directory_uri() . '/images/logo/mm-logo.svg'; ?>" alt="Munch & Move Logo" class="nav-logo">

                    <div class="nav-desktop" id="desktop">
                        <form action="/" method="get">
                            <div class="menu-service">
                                <input class="search-bar" type="text" name="s" id="navbar-search" value="<?php the_search_query(); ?>">
                                <button class="btn-general" id="navbar-btn-search">Search</button>
                                <i class="fas fa-search search-icon" id="search-icon"></i>
                                <button class="btn-dark-blue" type="button">Service Support</button>
                            </div>
                        </form>
                        <nav class="menu-desktop">
                            <?php
                            wp_nav_menu(array('menu_id' => 'menu-desktop'));
                            ?>
                        </nav>
                    </div>

                    <div class="navbar-mobile" id="mobile">
                        <button class="menu-toggle" id="btn-menu" aria-controls="menu-desktop" aria-expanded="false">MENU</button>
                    </div>
                </div>
            </div>

            <section class="mega-menu">
                <?php while (have_rows('mega-menu', 'option')) : the_row(); ?>
                    <?php $category = get_sub_field('menu_category'); ?>
                    <div class="row container tab-content tab-<?php echo esc_attr($category['value']); ?>" id="<?php echo esc_attr($category['value']); ?>">
                        <div class="three columns">
                            <div class="card-<?php echo esc_attr($category['value']); ?>">
                                <div class="card__content">
                                    <div>
                                        <p><?php echo get_sub_field('card')['description'] ?></p>
                                    </div>
                                    <a href="<?php echo get_sub_field('card')['button']['url'] ?>">
                                        <button class="btn-<?php echo esc_attr($category['value']); ?>"><?php echo get_sub_field('card')['button']['title'] ?></button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="four columns">
                            <ul class="mega-menu__list">
                                <?php
                                while (have_rows('related_links')) : the_row();
                                ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link')['url']; ?>">
                                            <?php echo get_sub_field('link')['title']; ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>

                        <div class="five columns">
                            <?php
                            while (have_rows('featured')) : the_row();
                                $button = get_sub_field('button');
                                if ($button) :
                                    $button_url = $button['url'];
                                    $button_title = $button['title'];
                            ?>

                                    <div class="mega-menu__article" onclick="redirectTo('<?php echo $button_url; ?>')">
                                        <img src="<?php echo get_sub_field('image')['url']; ?>" width="260" height="150" alt="Card Image">
                                        <div>
                                            <h4><?php echo get_sub_field('title'); ?></h4>
                                            <p><?php echo get_sub_field('description'); ?></p>
                                        </div>
                                    </div>
                            <?php endif;
                            endwhile; ?>
                        </div>
                    </div>
                <?php endwhile; ?>

            </section>

            <section class="menu-mobile" id="mobile-menu">
                <form action="/" method="get">
                    <div class="mobile-search-bar">
                        <input class="search-bar" type="text" name="s" id="navbar-search" value="<?php the_search_query(); ?>">
                        <button class="btn"><i class="fas fa-search search-icon" id="search-icon"></i></button>
                    </div>
                </form>
                <?php
                /* If a menu has been set it will be displayed in the header.*/
                if (function_exists('has_nav_menu') && has_nav_menu('menu-mobile')) {
                    $menu_ID = 'menu-mobile';
                    $nav_menu = wp_get_nav_menu_object($menu_ID);
                    wp_nav_menu(array(
                        'menu_id' => 'menu-mobile',
                        'menu_class' => 'nav first-menu-mobile',
                        'theme_location' => 'menu-mobile',
                    ));
                } ?>
            </section>

        </header>

        <div id="content" class="site-content">