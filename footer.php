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

</div><!-- #content -->

<footer id="colophon" class="footer">
    <!-- <?php if ( !is_front_page() && !is_home() ) : ?>
    <?php get_template_part('template-parts/footer-mega'); ?>
    <?php endif; ?> -->
    <?php get_template_part('template-parts/footer-copyright'); ?>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>