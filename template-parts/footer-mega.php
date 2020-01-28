<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>

<section id="footer-mega">
        <!-- <?php munch_move_entry_footer(); ?> -->
        <div class="container">
        <div class="row">
        <div class="three columns">
        <img src="https://placeholder.pics/svg/600x300" alt="Placeholder Img">
        <?php wp_nav_menu(array(
            'theme_location' => 'menu-1'
        )); ?>
        </div>
        <div class="three columns">
        <b>Munch and Move Benefits</b>
        <?php wp_nav_menu(array(
            'theme_location' => 'menu-2'
        )); ?>
        <b>Information & Support</b>
        <?php wp_nav_menu(array(
            'theme_location' => 'menu-3'
        )); ?>
        </div>
        <div class="three columns">
        <b>Training & Development</b>
        <?php wp_nav_menu(array(
            'theme_location' => 'menu-4'
        )); ?>
        </div>
        <div class="three columns">
        <b>Resources & Media</b>
        <?php wp_nav_menu(array(
            'theme_location' => 'menu-5'
        )); ?>
        </div>
        </div>
        </div>
</section>
