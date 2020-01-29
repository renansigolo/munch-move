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

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="site-branding">
                <img src="<?php echo get_template_directory_uri() . '/images/logos/healthy-kids-logo.svg'; ?>"
                    alt="Healthy Kids Logo">
                <!-- <?php the_custom_logo(); 
				if (is_front_page() && is_home()): ?>
					<h1 class="site-title"><a href="<?php echo esc_url(
         home_url('/')
     ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php else: ?>
					<p class="site-title"><a href="<?php echo esc_url(
         home_url('/')
     ); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php endif;
    $munch_move_description = get_bloginfo('description', 'display');
    if ($munch_move_description || is_customize_preview()): ?>
					<p class="site-description"><?php echo $munch_move_description;
        /* WPCS: xss ok. */
        ?></p>
				<?php endif;
    ?> -->
            </div>

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e(
        'Primary Menu',
        'munch-move'
    ); ?></button>
                <?php wp_nav_menu(array(
        'theme_location' => 'menu-1',
        'menu_id' => 'primary-menu'
    )); ?>
            </nav>
        </header><!-- #masthead -->

        <div id="content" class="site-content">