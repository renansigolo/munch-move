<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>

<div id="footer-copyright">
	<div class="container">
		<div class="footer__logo">
			<img src="<?php echo get_template_directory_uri() .
       '/images/logos/nsw-logo.svg'; ?>" height="60px" alt="NSW Logo">
		</div>
		<div class="footer__navigation">
		<?php wp_nav_menu(array(
            'theme_location' => 'footer_menu'
        )); ?>
		<p class="footer_copyright">Copyright 2019 Healthy Kids</p>
		</div>
	</div>
</div>