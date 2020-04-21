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
                            <input class="search-bar" type="text" name="Search" id="navbar-search" placeholder="Munch & Move Resources">
                            <button class="btn-blue" id="navbar-btn-search">Search</button>
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

            <section class="mega-menu">
                <div class="row container tab-content" id="about">
                    <div class="three columns">
                        <div class="card-blue">
                            <div class="card__content">
                                <div>
                                    <p>We are a NSW Health initiative that supports the healthy development of children birth to 5 years by promoting physical activity, healthy eating and reduced small screen time.</p>
                                </div>
                                <button class="btn-blue">Learn More</button>
                            </div>
                        </div>
                    </div>
                    <div class="four columns">
                        <ul class="mega-menu__list">
                            <li>What is Munch & Move</li>
                            <li>Benefits for early childhood services</li>
                            <li>Success Stories</li>
                            <li>Reports</li>
                            <li>Munch & Move Support</li>
                        </ul>
                    </div>
                    <div class="five columns">
                        <div class="mega-menu__article">
                            <img src="<?php echo get_template_directory_uri() . '/images/why.png'; ?>" alt="Card Image">
                            <div>
                                <h4>Munch & Move Benefits</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="mega-menu__article">
                            <img src="<?php echo get_template_directory_uri() . '/images/why.png'; ?>" alt="Card Image">
                            <div>
                                <h4>Munch & Move Benefits</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row container tab-content" id="program">
                    <div class="three columns">
                        <div class="card-green">
                            <div class="card__content">
                                <div>
                                    <p>We are a NSW Health initiative that supports the healthy development of children birth to 5 years by promoting physical activity, healthy eating and reduced small screen time.</p>
                                </div>
                                <button class="btn-blue">Learn More</button>
                            </div>
                        </div>
                    </div>
                    <div class="four columns">
                        <ul class="mega-menu__list">
                            <li>What is Munch & Move</li>
                            <li>Benefits for early childhood services</li>
                            <li>Success Stories</li>
                            <li>Reports</li>
                            <li>Munch & Move Support</li>
                        </ul>
                    </div>
                    <div class="five columns">
                        <div class="mega-menu__article">
                            <img src="<?php echo get_template_directory_uri() . '/images/why.png'; ?>" alt="Card Image">
                            <div>
                                <h4>Munch & Move Benefits</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="mega-menu__article">
                            <img src="<?php echo get_template_directory_uri() . '/images/why.png'; ?>" alt="Card Image">
                            <div>
                                <h4>Munch & Move Benefits</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="menu-mobile accordion-list">
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
            </section> -->

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