<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Munch_&_Move
 */
?>

<footer id="colophon" class="footer">
    <div class="container">
        <div class="footer__logo">
            <img src="<?php echo get_template_directory_uri() . '/images/logo/nsw-logo.svg'; ?>" height="60px" alt="NSW Logo">
        </div>
        <div class="footer__navigation">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu'
            )); ?>
            <p class="footer__copyright">Copyright © 2020 Munch & Move</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>