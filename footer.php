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

<?php $logo = get_field('footer_logo', 'option');?>

<footer id="colophon" class="footer">
    <div class="container">
        <div class="footer__logo">
            <img src="<?php echo $logo['url'] ?>" height="60px" alt="<?php echo $logo['alt'] ?>">
        </div>
        <div class="footer__navigation">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu'
            )); ?>
            <p class="footer__copyright"><?php the_field('copyright', 'option'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>