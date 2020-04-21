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
                        <div class="menu-service">
                            <div id="navbar-search">
                                <input class="search-bar" type="text" name="Search" id="search">
                                <button class="btn-blue">Search</button>
                            </div>
                            <i class="fas fa-search" id="search-icon"></i>
                            <button class="btn-dark-blue">Service Support</button>
                        </div>
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

            <section class="menu-mobile accordion-list">
                <div class="container">
                    <button class="accordion">Section 3</button>
                    <div class="panel">
                        <ul>
                            <li>Helloe</li>
                            <li>Helloe</li>
                            <li>Helloe</li>
                        </ul>
                    </div>
                </div>
            </section>

            <?php
            /* The below code checks if a menu-mobile is set from the backend in the menu settings. If a menu has been set it will be displayed in the header. Or else, a menu has not been set then display a message.*/
            if (function_exists('has_nav_menu') && has_nav_menu('menu-mobile')) {
                wp_nav_menu(array(
                    'depth' => 6,
                    'sort_column' => 'menu_order',
                    'container' => 'ul',
                    'menu_id' => 'menu-mobile',
                    'menu_class' => 'nav menu-mobile',
                    'theme_location' => 'menu-mobile',
                ));
            } else {
                echo "<ul class='nav menu-mobile'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
            } ?>

        </header>

        <div id="content" class="site-content">