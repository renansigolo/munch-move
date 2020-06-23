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

<<<<<<< HEAD
<?php $logo = get_field('footer_logo', 'option');?>

<footer id="colophon" class="footer">
<<<<<<< HEAD

	<div class="container">
		<div class="footer__partners">
			<img src="<?php echo get_template_directory_uri() . '/images/nsw-logo.svg' ?>" width="47px" alt="NSW Logo">
			<!-- <img src="<?php echo get_template_directory_uri() . '/images/hf-logo.svg' ?>" width="118px" alt="Hearth Foundation Logo"> -->
		</div>
		<div class="footer__copyright">
			<p>An initiative of NSW Ministry of Health,<br /> NSW Department of Education, Office<br /> of Sport and the Heart Foundation.<br /> Copyright 2019 Healthy Kids.</p>
		</div>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->
=======
=======

<?php get_template_part('template-parts/component', 'banner-website-moved'); ?>

<?php $logo = get_field('footer_logo', 'option');?>

<footer id="colophon" class="footer">
>>>>>>> staging
    <div class="container">
        <div class="footer__logo">
            <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>">
        </div>
        <div class="footer__navigation">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu'
            )); ?>
            <p class="footer__copyright"><?php the_field('copyright', 'option'); ?></p>
        </div>
    </div>
</footer>
<<<<<<< HEAD
>>>>>>> develop
=======
>>>>>>> staging

<?php wp_footer(); ?>

</body>

</html>