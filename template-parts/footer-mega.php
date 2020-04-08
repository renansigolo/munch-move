<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>

<section class="mega-footer" id="footer-mega">
    <div class="row flex-center">
        <div class="three columns">
            <img src="<?php echo get_template_directory_uri() . '/images/logo/mm-logo.svg'; ?>" alt="Munch & Move Logo" class="mega-footer__logo">
        </div>
    </div>
    <div class="container">
        
        <div class="row">
            <div class="four columns">
                <p class="menu-title">Munch and Move Benefits</p>
                <hr>
                <?php wp_nav_menu(array(
            'theme_location' => 'footer_mm_benefits'
            )); ?>
                <p class="menu-title">Training & Development</p>
                <hr>
                <?php wp_nav_menu(array(
            'theme_location' => 'footer_training_development'
            )); ?>
              
            </div>
            <div class="four columns">
            <p class="menu-title">Resources & Media</p>
            <hr>
            <?php wp_nav_menu(array(
            'theme_location' => 'footer_resources_media'
            )); ?>
            
            </div>
            <div class="four columns">
            <p class="menu-title">Information & Support</p>
            <hr>
            <?php wp_nav_menu(array(
            'theme_location' => 'footer_information_support'
            )); ?>
            </div>
        </div>
    </div>
</section>