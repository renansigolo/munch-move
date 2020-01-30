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
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div id="page" class="site">
        <header id="masthead" class="site-header">

            <?php if (is_front_page() && is_home()): ?>
            <div class="site-branding">
                <img src="<?php echo get_template_directory_uri() . '/images/logos/healthy-kids-logo.svg'; ?>"
                    alt="Healthy Kids Logo">
            </div>
            <?php else: ?>
            <div class="page-header container">
                <img src="https://placeholder.pics/svg/300x150" alt="Placeholder Img">
                <?php get_template_part('template-parts/content', 'search');?>
            </div>
            <div class="container">
                <nav class="navbar">
                    <?php
wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'menu_id' => 'primary-menu',
));
?>
                </nav>
            </div>
            <?php endif;?>

            <!-- <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">=</button>
                    <?php
wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'menu_id' => 'primary-menu',
));
?>
                </nav> -->


        </header><!-- #masthead -->

        <div id="content" class="site-content">